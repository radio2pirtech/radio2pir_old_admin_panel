<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

class Store extends Model
{
    use HasFactory,SoftDeletes;

    protected $appends = ['logo_with_url'];

    protected $table = 'store';

    protected $guarded = ['id'];

    public function getLogoWithUrlAttribute()
    {
        if ($this->store_logo && file_exists(public_path('storage/logo/'.$this->store_logo))) {
             return asset('storage/logo/'.$this->store_logo);
        }
        
        return asset('images/2pir_logo.png');
    }
}
