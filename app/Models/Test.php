<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class Test extends Model
{
    use HasFactory,HasApiTokens;

    protected $fillable=['name','is_completed','id','type_id','user_id','time'];
    public function type(){
        return $this->belongsTo(Type::class);
    }
}
