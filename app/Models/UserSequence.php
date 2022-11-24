<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserSequence extends Model
{
    use HasFactory;
    protected $guarded = [];

    public static function getUserSequence(){
        return SequenceAsana::get();
    }

    public static function getUserSequenceById($id){
        return self::find($id);
    }

    public static function addUserSequence($data) {
        return self::create($data);
    }

    public static function deleteUserSequence($id){
        return self::find($id)->delete();
    }
}
