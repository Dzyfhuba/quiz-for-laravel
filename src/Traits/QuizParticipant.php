<?php

namespace Dzyfhuba\QuizSys\Traits;

use Dzyfhuba\QuizSys\Models\QuizAttempt;

trait QuizParticipant
{
    public function quiz_attempts()
    {
        return $this->morphMany(QuizAttempt::class, 'participant');
    }
}
