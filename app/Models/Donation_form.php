<?php
namespace App\Http\Controllers;
namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donation_form extends Model
{
    use HasFactory;
    protected $fillable = [

        'price',
        'phone',
        'name',
        'email',
        'password',
    ];

    // public function donations()
    // {
    //     return $this->belongsTo(Donation::class);
    // }

    public function donations()
    {
        return $this->belongsTo(Donation::class, 'donstion_id');
    }
}
