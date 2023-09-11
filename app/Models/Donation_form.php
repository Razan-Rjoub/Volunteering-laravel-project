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
        'donation_id',
        'user_id',
        'phone',
        'name',
        'email',
        
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
