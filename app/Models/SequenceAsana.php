<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SequenceAsana extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function asanas(){
        return $this->hasMany(Asana::class);
    }

    public static function getSequenceAsana(){
     //  return SequenceAsana::get();

    }

    public static function getSequenceAsanaById($id){
        return self::find($id);
    }

    public static function addSequenceAsana($data) {
        return self::create($data);
    }

    public static function deleteSequenceAsana($id){
        return self::find($id)->delete();
    }
}
