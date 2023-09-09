<?php
namespace App\Http\Controllers;
namespace App\Models;

use App\Models\Donation;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donation_form extends Model
{
    use HasFactory;
    protected $fillable = [

        'donstion_id',
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
    public function donation()
    {
        return $this->belongsTo(Donation::class, 'donstion_id');
    }
}
