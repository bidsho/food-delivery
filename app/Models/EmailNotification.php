<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EmailNotification extends Model
{
    protected $table = 'email_notification';
    
    protected $fillable = [
        'subject', 
        'body_one',
        'body_two',
        'email' 
    ];
}
