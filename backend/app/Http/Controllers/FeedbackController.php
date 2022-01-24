<?php

namespace App\Http\Controllers;

use App\FeedbackStore\FeedbackStoreFactory;
use App\Http\Requests\StoreFeedbackRequest;

class FeedbackController extends Controller
{
    protected FeedbackStoreFactory $feedbackStore;

    public function __construct(FeedbackStoreFactory $feedbackStore)
    {
        $this->feedbackStore = $feedbackStore;
    }

    public function store(StoreFeedbackRequest $request)
    {
        $this->feedbackStore
            ->build('eloquent')
            ->save($request->validated());

        return response()->json([
           'data' => [
               'message' => 'Feedback send successfully!'
           ]
        ]);
    }
}
