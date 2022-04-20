<?php

namespace Dzyfhuba\QuizSys\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Question extends Model
{
    use HasFactory, SoftDeletes;
    protected $guarded = ['id'];
    public function getTable()
    {
        return config('quiz-system-for-laravel.table_names.questions');
    }
    protected static function newFactory()
    {
        return \Dzyfhuba\QuizSys\Database\Factories\QuestionFactory::new();
    }

    public function question_type()
    {
        return $this->belongsTo(QuestionType::class);
    }

    public function topics()
    {
        return $this->morphToMany(Topic::class, 'topicable');
    }

    public function options()
    {
        return $this->hasMany(QuestionOption::class);
    }

    public function quiz_questions()
    {
        return $this->hasMany(QuizQuestion::class);
    }

    public function correct_options(): Collection
    {
        return $this->options()->where('is_correct', 1)->get();
    }
}
