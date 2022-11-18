<?php

namespace App\Models;

use App\Http\Requests\SequenceAddRequest;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sequence extends Model
{
    use HasFactory;
    protected $guarded = [];
    public $timestamps = false;

    public static function getSequence(){
        return Sequence::get();
    }

    public static function addSequence($data){
        return Sequence::create($data);
    }

    public static function updateSequence($id, $data){
        return Sequence::find($id)->update($data);
    }

    public static function deleteSequence($id){
        return Sequence::find($id)->delete();
    }
}
