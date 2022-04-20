<?php

namespace Dzyfhuba\QuizSys\Models;

use Dzyfhuba\QuizSys\Database\Factories\QuizFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Quiz extends Model
{
    use HasFactory, SoftDeletes;
    protected $guarded = ['id'];


    public function getTable()
    {
        return config('quiz-system-for-laravel.table_names.quizzes');
    }

    public function topics()
    {
        return $this->morphToMany(Topic::class, 'topicable');
    }

    public static function newFactory()
    {
        return QuizFactory::new();
    }

    public function questions()
    {
        return $this->hasMany(QuizQuestion::class);
    }

    public function attempts()
    {
        return $this->hasMany(QuizAttempt::class);
    }
}
