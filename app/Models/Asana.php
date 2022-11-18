<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asana extends Model
{
    use HasFactory;
    protected $guarded = [];
    public $timestamps = false;

    public static function getAsana(){
        return Asana::get();
    }

    public static function addAsana($data) {
        return self::create($data);
    }

    public static function updateAsana($id, $data) {
        return self::find($id)->update($data);
    }

    public static function deleteAsana($id) {
        return self::find($id)->delete();
    }
}
