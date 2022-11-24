<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SequenceLabel extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function labels(){
        return $this->belongToMany(Label::class,'id','label_name');
    }

    public static function getSequenceLabel(){
        return SequenceLabel::get();
    }

    public static function getSequenceLabelById($id){
        return SequenceLabel::find($id);
    }

    public static function addSequenceLabel($data){
        return self::create($data);
    }

    public static function deleteSequenceLabel($id){
        return SequenceLabel::find($id)->delete();
    }
}
