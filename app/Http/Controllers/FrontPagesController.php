<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use App\Models\ConstructionUpdate;
use App\Models\Unit;
use App\Models\Agent;
use App\Models\PaymentPlan;
use App\Models\Section;
use App\Mail\NewLead;
use Illuminate\Support\Facades\Mail;
use App\Mail\PdfRequest;
use Illuminate\Support\Facades\Validator;
use Barryvdh\DomPDF\Facade\Pdf;


class FrontPagesController extends Controller
{
    //

    public function sendLeadEmail(Request $request){

        $validator = Validator::make( $request->all(), [
            'name'       => 'required|string|min:1|max:255',
            'email'      => 'required|email|string|max:255',
            'messsage'    => 'nullable|string|max:500',
            //'g-recaptcha-response' => 'recaptcha|required',
        ]);

        if ( $validator->fails() ) {
            return redirect()->back()->withInput()->with(['errors'=> $validator->errors()->all()]);
        }
        else{
            $msg = new Message();

            $msg->name = $request->input('name');
            $msg->email = $request->input('email');
            $msg->phone = $request->input('phone');
            $msg->content = $request->input('message');
            $msg->url = $request->input('url');

            $msg->save();

            $agent_name = request()->input('utm_campaign');
            if( isset($agent_name) ){
                $agent = Agent::where('name', $agent_name)->first();

                if( isset($agent) ){
                    $email = Mail::to('info@batrosmarina.com');
                    $email->cc($agent->email);
                }else{
                    $email = Mail::to('info@batrosmarina.com');
                }
            }
            else{
                $email = Mail::to('info@batrosmarina.com');
            }

            $email->bcc(['erick@punto401.com','michelena@punto401.com']);
            
            $email->send(new NewLead($msg));
            

            return redirect()->back()->with('message', 'Gracias, su mensaje ha sido enviado');
        }
    }

    public function sendPdfEmail(Request $request){
        
        $validator = Validator::make( $request->all(), [
            'name'       => 'required|string|min:1|max:255',
            'email'      => 'required|email|string|max:255',
            //'g-recaptcha-response' => 'recaptcha|required',
        ]);

        if ( $validator->fails() ) {
            return redirect()->back()->with(['errors'=> $validator->errors()->all()]);
        }
        else{
            $unit_id = $request->input('unit_id');
            $plan_id = $request->input('plan_id');

            $unit = Unit::find($unit_id);
            $plan = PaymentPlan::find($plan_id);
            
            $msg = new Message();

            $msg->name = $request->input('name');
            $msg->email = $request->input('email');
            $msg->content = 'El cliente solicitó descargar el PDF del plan '.$plan->name.' desde la unidad '.$unit->name;
            $msg->url = $request->input('url');

            $msg->save();

            $email = Mail::to('info@batrosmarina.com');

            $email->bcc(['erick@punto401.com', 'michelena@punto401.com']);
            
            $email->send(new PdfRequest($msg));


            //creamos y guardamos PDF

            $pdf = PDF::setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true]);
            $pdf->setPaper('A4', 'landscape');


            $pdf->loadView('shared.plan-pdf', compact('unit', 'plan'));
            

            $id = uniqid();
            $path = '/storage/PDFs/'. $id .'.pdf';
            $publicPath = public_path($path);
            $pdf->save($publicPath);

            //Mail para el cliente con el link
            $to = $msg->email;
            $subject = 'Batros -  Descarga tu PDF';

            $headers = 'From: webmaster@batrosvallarta.com' . "\r\n";
            $headers .= 'Bcc: erick@punto401.com' . "\r\n";

            $body = 'Para obtener el PDF de tu cotización por favor da clic en el siguiente enlace'."\r\n";
            $body .= url($path)."\r\n";
            
            mail($to, $subject, $body, $headers);
            

            return redirect()->back()->with('message', 'Gracias, revisa tu correo para obtener tu PDF');
        }
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

        $price_order =  $request->input('price_order');

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

        if(isset($price_order)){
            $units = $units->orderBy('price', $price_order);
        }

        $units = $units->paginate(9)->appends(request()->query());

        $allUnits = Unit::where('status', 'Disponible')->limit(9)->get();

        return view('search', compact('units', 'allUnits'));
    }

    public function setAgentCookie(Request $request){

        $agentName = $request->input('agent_cookie');
        $cookie = cookie('agent', $agentName, 43200);

        return redirect()->back()->withCookie($cookie);
    }

    public function getAgentCookie(Request $request){

        $cookie = $request->cookie('agent');

        echo $cookie;
    }

}
