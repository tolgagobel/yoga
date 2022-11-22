<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SequenceLabel extends Model
{
    use HasFactory;
    protected $guarded = [];
    public $timestamps = false;

    public static function getSequenceLabel(){
        return SequenceLabel::get();
    }

    public static function addSequenceLabel($data){
        return SequenceLabel::updateOrCreate([
            'sequence_id' => $data['sequence_id'],
            'label_id' => $data['label_id']
        ], []);
    }

    public static function deleteSequenceLabel($id){
        return SequenceLabel::find($id)->delete();
    }
}
