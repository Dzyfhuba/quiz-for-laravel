<?php

namespace Dzyfhuba\QuizSys;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Dzyfhuba\QuizSys\Skeleton\SkeletonClass
 */
class QuizSysFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'quiz-system-for-laravel';
    }
}
