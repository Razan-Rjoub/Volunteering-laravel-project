<?php

namespace App\Models;

use App\Models\Category;
//use App\Models\Item_form;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'image',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    // public function itemform()
    // {
    //     return $this->hasMany(Donation_form::class);
    // }


}
