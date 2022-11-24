<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    use HasFactory;
    protected $guarded=[];

    public static function getmedia(){
        return Media::get();
    }

    public static function showmedia($id){
        return Media::find($id);
    }

    public static function addmedia($data){
        return Media::create($data);
    }

    public static function deletemedia($id){
        return Media::find($id)->delete();
    }

}
