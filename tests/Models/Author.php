<?php

namespace Dzyfhuba\QuizSys\Tests\Models;

use Dzyfhuba\QuizSys\Traits\QuizParticipant;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use QuizParticipant;
    protected $guarded = ['id'];
    protected $table = 'authors';
}
