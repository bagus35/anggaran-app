<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sasaran extends Model
{
    use HasFactory;

    protected $fillable= ['nama_sasaran'];

    
    public function IKU(){
        return $this->hasMany(IKU::class);
    }
}
