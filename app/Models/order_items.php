<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order_items extends Model
{
    use HasFactory;

    protected $table = 'order_items';
    public function products(){
        return $this->belongsTo(products::class);
    }
    public function userr(){
        return $this->belongsTo(user::class);
    }
    
}
