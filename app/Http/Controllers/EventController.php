<?php

namespace App\Http\Controllers;

use App\Mail\sendAssignPackageMail;
use App\Models\Customers;
use App\Models\Dj;
use App\Models\Event;
use App\Models\Package;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Mail;
use PDF;
// use Dompdf\Dompdf;

class EventController extends Controller
{
    function addEvent(Request $request) {

         $request->validate([
            'venue_name'=>'required',  
            'contact_name'=>'required', 
            'contact_number' => 'required',
            'event_date' => 'required',
            'event_type' => 'required',
            'event_address' => 'required',
            'city' => 'required',
            'contact_email' => 'required|email'
        ]); 

        $data = array(
            'user_id' => $request->customer_id,
            'venue_name' => $request->venue_name,
            'contact_name' => $request->contact_name,
            'contact_number' => $request->contact_number,
            'contact_email' => $request->contact_email,
            'parking' => $request->parking,
            'event_date' => $request->event_date,
            'event_type' => $request->event_type,
            'no_guest' => $request->no_guest,
            'lead_source' => $request->lead_source,
            'event_address' => $request->event_address,
            'instruction' => $request->instruction,
            'city' => $request->city,
            'email2' => $request->email2,
            'partner_name' => $request->partner_name,
            'partner_number' => $request->partner_number,
            'partner_email' => $request->partner_email
        );

        $event = Event::create($data);
        session()->put('success','Event Added sucessfully.');
        return redirect()->back();
        // return redirect(route('sales-pipeline'));
    }


    function updateEvent(Request $request, $id) {

         $request->validate([  
            'venue_name'=>'required',  
            'contact_name'=>'required', 
            'contact_number' => 'required',
            'event_date' => 'required',
            'event_type' => 'required',
        ]); 

        $event = Event::find($id);

        $event->city = $request->city;
        $event->venue_name = $request->venue_name;
        $event->contact_name = $request->contact_name;
        $event->contact_number = $request->contact_number;
        $event->parking = $request->parking;
        $event->event_date = $request->event_date;
        $event->event_type = $request->event_type;
        $event->no_guest = $request->no_guest;
        $event->lead_source = $request->lead_source;
        $event->note = $request->note;
        $event->contact_email = $request->contact_email;
        $event->event_address = $request->event_address;
        $event->instruction = $request->instruction;
        $event->email2 = $request->email2;
        $event->partner_name = $request->partner_name;
        $event->partner_number = $request->partner_number;
        $event->partner_email = $request->partner_email;

        $event->save();
        session()->put('success','Event Details Updated.');
        return redirect()->back();
    }

    public function assignPackage(Request $request)
    {
        $customer_id = $request->customer_id;

        $token = Str::random(64);
        $event = Event::findOrFail($request->event_id);

        $event->package = $request->package;
        $event->custom_package_name = $request->package_name;
        $event->custom_package_desc = $request->package_desc;
        $event->custom_package_amount = $request->amount;
        $event->custom_package_note = $request->other_note;
        $event->quatation_code = $token;


        $mailData = array();
        $mailData1 = array();
        $mailData = [
            'title' => 'Quotation Details',
            'event_name' => $event->event_type,
            'venue_name' => $event->venue_name,
            'contact_name' => $event->contact_name,
            'contact_number' => $event->contact_number,
            'contact_email' => $event->contact_email,
            'event_date' => $event->event_date,
            'event_address' => $event->event_address,
            'city' => $event->city,
            'event_id' => $event->id,
            'quatation_code' => $token
        ];

        if($request->package == 'custom'){
            $mailData1 = [
                'package' => $request->package,
                'amount' => $request->amount,
                'details' => $request->package_desc,
                'notes' => $request->other_note
            ];
        } else {
            $package = Package::where('package_name',$request->package)->first();
            $mailData1 = [
                'package' => $package->package_name,
                'amount' => $package->amount,
                'details' => $package->package_desc,
                'notes' => $package->other_note
            ];
        }

        $mailData = array_merge($mailData,$mailData1);  
         
        $mail_check = Mail::to('molew66293@jrvps.com')->send(new sendAssignPackageMail($mailData));

        $event->package_offer = Event::WAITING_FOR_RESPONSE;
        $event->save();
        session()->put('success','Package details sucessfully added.');

        return redirect()->back();
    }


    public function getQuotation(Request $request, $code) {

        $event = Event::whereQuatationCode($code)->first();
        if (empty($event)) {
            abort(404);
        }

        if($event->package != 'custom'){
            $package = Package::where('package_name', $event->package)->first();
            $event->amount = $package->amount;
            $event->details = $package->package_desc;
            $event->notes = $package->other_note;
        }else{
            $event->amount = $package->custom_package_amount;
            $event->details = $package->custom_package_desc;
            $event->notes = $package->custom_package_note;
        }

        return view('quotation_process/test', compact('event'));
    }


    public function responseQuot(Request $request, $id, $response) {

        $event = Event::find($id);
        $response = $response;

        if($response == 'accept'){
            $offer = '1';
        }elseif($response == 'declined'){
            $offer = '2';
        }

        $event->package_offer = $offer;
        $event->quatation_code = '';
        $event->save();

        return view('admin/thank-you');
    }

    public function invoice(Request $request, $id) {
        $event = Event::find($id);
        $user = Customers::find($event->user_id);
        $package = Package::where('package_name',$event->package)->first();
        $dj = Dj::where('user_id',$event->assign_dj)->first();
        $pdf = '0';
        return view('admin/invoice', compact('event','user','package','dj','pdf'));
    }


    public function invoiceDownload(Request $request, $id) {
        $event = Event::find($id);
        $package = Package::where('package_name',$event->package)->first();
        $dj = Dj::where('user_id',$event->assign_dj)->first();
        $pdf = '1';

        $pdf = PDF::loadView('admin/invoice_pdf', compact('event','package','dj','pdf'))->setOptions(['defaultFont' => 'sans-serif']);
        $pdf->getDomPDF()->setHttpContext(
            stream_context_create([
                'ssl' => [
                    'allow_self_signed'=> TRUE,
                    'verify_peer' => FALSE,
                    'verify_peer_name' => FALSE,
                ]
            ])
        );
        return $pdf->download('Invoice.pdf');
    }

    public function invoiceSend(Request $request, $id) {
        
        $event = Event::find($id);
        $package = Package::where('package_name', $event->package)->first();
        $dj = Dj::where('user_id', $event->assign_dj)->first();

        $pdf = PDF::loadView('admin/invoice_pdf', compact('event','package','dj'))->setOptions(['defaultFont' => 'sans-serif']);
        $pdf->getDomPDF()->setHttpContext(
            stream_context_create([
                'ssl' => [
                    'allow_self_signed'=> TRUE,
                    'verify_peer' => FALSE,
                    'verify_peer_name' => FALSE,
                ]
            ])
        );

        // $data['email'] = $event->customer->email;
        $data['email'] = 'sobewa7015@teasya.com';
        $data['title'] = 'Invoice Details';
        $data['body'] = 'Invoice pdf attach with this email. Please refer this and do further payment process';

        Mail::send('admin/invoice_email', $data, function($message)use($data, $pdf) {

            $message->to($data['email'], $data['email'])
                    ->subject($data['title'])
                    ->attachData($pdf->output(), "invoice.pdf");
        });

        session()->put('success','Invoice Send sucessfully.');

        return redirect(route('customer_details',['id'=>$event->user_id]));
    }


    public function deleteCustomer(Request $request, $id) {

        $customer = Customers::find($id);

        $customer->isDelete = '1';
        $customer->save();

        $user = User::where('id',$customer->user_id)->first();
        $user->isDelete = '1';
        $user->save();

        $event = Event::where('user_id',$id)->first();
        if($event != ''){
            $event->is_delete = '1';
            $event->save();
        }

        session()->put('success','Customer Deleted successfully.');
        return redirect(route('sales-pipeline'));
    }

    public function deleteEvent(Request $request, $id) {

        // dd($id);

        $event = Event::find($id);
        // dd($event);

        $event->is_delete = '1';

        $event->save();

        session()->put('success','Event Delete sucessfully.');
        return redirect(route('customer_details',['id'=>$event->user_id]));

        // $event = Event::find($id);
        // $customer = Customers::find('')

        // $event->isDelete = '1';

        // $event->save();
        // session()->put('success','Event Delete sucessfully.');
        // return redirect(route('customer_details',['id'=>$event->user_id]));

    }
}
