<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Label extends Model
{
    use HasFactory;
    protected $guarded = [];
    public $timestamps = false;

    public static function getLabel(){
        return Label::get();
    }

    public static function addLabel($data) {
        return self::create($data);
    }

    public static function updateLabel($id, $data) {
        return self::find($id)->update($data);
    }

    public static function deleteLabel($id) {
        return self::find($id)->delete();
    }
}
