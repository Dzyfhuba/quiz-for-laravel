<?php

namespace Dzyfhuba\QuizSys\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class QuizQuestion extends Model
{
    use HasFactory, SoftDeletes;
    protected $guarded = ['id'];

    public function getTable()
    {
        return config('quiz-system-for-laravel.table_names.quiz_questions');
    }

    protected static function newFactory()
    {
        return new \Dzyfhuba\QuizSys\Database\Factories\QuizQuestionFactory();
    }

    public function quiz()
    {
        return $this->belongsTo(Quiz::class);
    }

    public function question()
    {
        return $this->belongsTo(Question::class);
    }

    public function answers()
    {
        return $this->hasMany(QuizAttemptAnswer::class);
    }
}
