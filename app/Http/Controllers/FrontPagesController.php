<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use App\Models\ConstructionUpdate;
use App\Models\Unit;
use App\Models\Section;
use App\Mail\NewLead;
use Illuminate\Support\Facades\Mail;


class FrontPagesController extends Controller
{
    //

    public function sendLeadEmail(Request $request){
        $msg = new Message();

        $msg->name = $request->input('name');
        $msg->email = $request->input('email');
        $msg->phone = $request->input('phone');
        $msg->content = $request->input('message');
        $msg->url = $request->input('url');

        $msg->save();

        $email = Mail::to('erick@punto401.com');

        //$email->bcc('erick@punto401.com');
        
        $email->send(new NewLead($msg));
        

        return redirect()->back()->with('message', 'Gracias, su mensaje ha sido enviado');

    }

    public function constructionPage(){

        $updates = ConstructionUpdate::all();

        return view('construction', compact('updates'));
    }

    public function unit($id){
        $unit = Unit::find($id);

        return view('unit', compact('unit'));
    }

    public function inventory(){
        $sections = Section::all();

        return view('inventory', compact('sections'));
    }

    public function search(Request $request){

        $min_price =  $request->input('min_price');
        $max_price =  $request->input('max_price');

        $min_floor =  $request->input('min_floor');
        $max_floor =  $request->input('max_floor');

        $min_const =  $request->input('min_const');
        $max_const =  $request->input('max_const');

        $bedrooms = $request->input('bedrooms');

        $units = Unit::where('status', 'Disponible');
        $units = $units->where('price', '>=', $min_price)->where('price', '<=', $max_price);

        if(isset($min_floor)){
            $units = $units->where('floor', '>=', $min_floor);
        }

        if(isset($max_floor)){
            $units = $units->where('floor', '<=', $max_floor);
        }

        if(isset($min_const)){
            $units = $units->where('area', '>=', $min_const);
        }

        if(isset($max_const)){
            $units = $units->where('area', '<=', $max_const);
        }

        if(isset($bedrooms)){
            $units = $units->where('bedrooms', $bedrooms);
        }

        $units = $units->paginate(9)->appends(request()->query());

        $allUnits = Unit::where('status', 'Disponible')->limit(9)->get();

        return view('search', compact('units', 'allUnits'));
    }

}
