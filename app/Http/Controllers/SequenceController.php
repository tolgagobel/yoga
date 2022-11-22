<?php

namespace App\Http\Controllers;

use App\Http\Requests\SequenceAddAsanaRequest;
use App\Http\Requests\SequenceAddLabelRequest;
use App\Http\Requests\SequenceAddRequest;
use App\Http\Requests\SequenceUpdateAsanaRequest;
use App\Http\Requests\SequenceUpdateRequest;
use App\Models\Asana;
use App\Models\Label;
use App\Models\Sequence;
use App\Models\SequenceAsana;
use App\Models\SequenceLabel;

class SequenceController extends Controller
{

    public static function index(){
        return Sequence::getSequences();
    }

    public static function create(SequenceAddRequest $request){
        return Sequence::addSequence($request->validated());
    }

    public static function update(SequenceUpdateRequest $request, Sequence $sequence){
        Sequence::updateSequence($sequence->id, $request->validated());
        return $sequence->fresh();
    }

    public static function destroy(Sequence $sequence){
        return Sequence::deleteSequence($sequence->id);
    }

    public static function indexAsana(){
        return SequenceAsana::getSequenceAsana();
    }

    public static function createSequenceAsana(SequenceAddAsanaRequest $request){
        return SequenceAsana::addSequenceAsana($request->validated());
    }

    public static function destroySequenceAsana(Asana $asana){
        return SequenceAsana::deleteSequenceAsana($asana->id);
    }

    public static function indexLabel(){
        return SequenceLabel::getSequenceLabel();
    }

    public static function createSequenceLabel(SequenceAddLabelRequest $request){
        return SequenceLabel::addSequenceLabel($request->validated());
    }

    public static function destroySequenceLabel(Label $label){
        return SequenceLabel::deleteSequenceLabel($label->id);
    }

}
