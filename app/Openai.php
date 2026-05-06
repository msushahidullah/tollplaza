<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Openai extends Model
{
    use HasFactory;
    protected $fillable = [
    	'generate', 'user_id', 'prompt', 'response'
    ];
}
