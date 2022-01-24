<?php

namespace App\FeedbackStore;

interface FeedbackStore
{
    public function save($data);

    public function retrieve();
}
