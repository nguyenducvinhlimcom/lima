<?php

namespace App\Repositories;

use App\Models\Facility;
use App\Models\Feedback;

final class FeedbackRepository extends BaseRepository
{
    public function modelClass(): string
    {
        return Feedback::class;
    }

    public function cacheFeedbacks(?string $orderBy = null, $orderDirection = 'asc')
    {
        return $this->model->cacheMany($orderBy, $orderDirection);
    }
}
