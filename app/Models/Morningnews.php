<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Morningnews extends Model
{
    protected $table = 'morning_news';

    use HasFactory;

    protected $fillable = ['title', 'news_text'];
}
