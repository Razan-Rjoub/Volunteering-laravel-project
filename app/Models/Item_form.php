<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item_form extends Model
{

use HasFactory;
protected $fillable = [
    'volunteerName',
    'volunteerPhone',
    'volunteerAddress',
    'description',
    'status',
    'image',
];
}
