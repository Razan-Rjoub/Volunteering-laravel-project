<?php

namespace App\Models;

use App\Models\Donation;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donation_form extends Model
{
    use HasFactory;
    protected $fillable = [
        'price',
        'donation_id',
        'user_id',
    ];
    public function donations()
    {
        return $this->belongsTo(Donation::class);
    }
}
