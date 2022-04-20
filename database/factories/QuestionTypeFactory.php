<?php

namespace Dzyfhuba\QuizSys\Database\Factories;

use Illuminate\Support\Str;
use Dzyfhuba\QuizSys\Models\QuestionType;
use Illuminate\Database\Eloquent\Factories\Factory;

class QuestionTypeFactory extends Factory
{
    protected $model = QuestionType::class;

    public function definition()
    {
        return [
            'question_type' => $this->faker->words(1, true)
        ];
    }
}
