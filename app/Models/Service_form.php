<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service_form extends Model
{
    use HasFactory;

    protected $table = 'your_actual_table_name'; // Replace with your actual table name
    protected $fillable = [
        'service_id	', 'description','date', 'time', // List all your table's fields here
    ];
}