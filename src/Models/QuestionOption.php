<?php

namespace Dzyfhuba\QuizSys\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class QuestionOption extends Model
{
    use HasFactory, SoftDeletes;
    protected $guarded = ['id'];

    public function getTable()
    {
        return config('quiz-system-for-laravel.table_names.question_options');
    }

    public function question()
    {
        return $this->belongsTo(Question::class);
    }

    protected static function newFactory()
    {
        return \Dzyfhuba\QuizSys\Database\Factories\QuestionOptionFactory::new();
    }

    public function answers()
    {
        return $this->hasMany(QuizAttemptAnswer::class);
    }
}
