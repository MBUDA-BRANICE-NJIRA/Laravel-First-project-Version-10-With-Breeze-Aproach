<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventsModel extends Model
{
    use HasFactory;

     protected $table = 'events';

    protected $fillable = [
        'title', 
        'description'
    ]; 
}
