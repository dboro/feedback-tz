<?php

namespace App\FeedbackStore;

class FeedbackStoreFactory
{
    public function build($storeType) : FeedbackStore
    {
        return match ($storeType) {
          'eloquent' => new EloquentFeedbackStore(),
          'file' => new FileFeedbackStore()
        };
    }
}
