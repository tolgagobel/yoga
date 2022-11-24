<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AsanaLabel extends Model
{
    use HasFactory;
    protected $guarded = [];

    public static function getAsanaLabel(){
        return AsanaLabel::get();
    }

    public static function getAsanaLabelById($id){
        return AsanaLabel::find($id);
    }

    public static function addAsanaLabel($data){
        return AsanaLabel::create($data);
    }

    public static function deleteAsanaLabel($id){
        return AsanaLabel::find($id)->delete();
    }
}
