<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SequenceAsana extends Model
{
    use HasFactory;
    protected $guarded = [];
    public $timestamps = false;

    public static function getSequenceAsana(){
        return SequenceAsana::get();
    }

    public static function addSequenceAsana($data){
        return SequenceAsana::updateOrCreate([
            'sequence_id' => $data['sequence_id'],
            'asana_id' => $data['asana_id']
        ], []);
    }

    public static function deleteSequenceAsana($id){
        return SequenceAsana::find($id)->delete();
    }
}
