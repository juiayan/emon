<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cvformat;
use PDF;
use Mail;
use App\Models\Career;
use App\Models\Complain;

class SendMailController extends Controller
{
     public function insertCv(Request $request)
    {
        
        $career = new Career();
        if($request->hasFile('cv_file'))
        {
            $file = $request->file('cv_file');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move(public_path('uploads/cv/'), $filename);
            $career->cv_file = $filename;
        }

        $career->full_name = $request->input('full_name');
        $career->rank = $request->input('rank');
        $career->phone = $request->input('phone');
        $career->whatsapp_phone = $request->input('whatsapp_phone');
        $career->age = $request->input('age');
        $career->email_address = $request->input('email_address');
        $career->experience = $request->input('experience');
        $career->last_sign_of = $request->input('last_sign_of');
        $career->salary_expectation = $request->input('salary_expectation');
        $career->save();

        $lastId= $career->id;
        $cv = Career::find($lastId);
        $filepath = public_path() .'/uploads/cv/'.$cv->cv_file;

        $data['email'] = "crew@naafmarine.com";
        $data['subject'] = $request->input('full_name');
        $data['name'] = $request->input('full_name');
        $data['rank'] = $request->input('rank');
        $data['phone'] = $request->input('phone');
        $data['whatsapp_phone'] = $request->input('whatsapp_phone');
        $data['age'] = $request->input('age');
        $data['email_send_by'] = $request->input('email');
        $data['experience'] = $request->input('experience');
        $data['last_sign_of'] = $request->input('last_sign_of');
        $data['salary_expectation'] = $request->input('salary_expectation');
        
     
      
         Mail::send('frontend.fileAttechmemtMail', $data, function($message)use($data, $filepath) {
        $message->to($data["email"], $data["email"],$data["name"],$data["rank"])
                        ->subject($data["subject"]);
          $message->attach($filepath);
            
        });

        return redirect('career')->with('status', 'Your application has submitted successfully.We will contact you soon.Thanks');   
    }

    public function insertComplain(Request $request)
    {
        
        $complain = new Complain();
        $complain->complaints_name = $request->input('complaints_name');
        $complain->rank = $request->input('rank');
        $complain->phone = $request->input('phone');
        $complain->whatsapp_phone = $request->input('whatsapp_phone');
        $complain->cde_number = $request->input('cde_number');
        $complain->email = $request->input('email');
        $complain->complain = $request->input('complain');
        $complain->save();

        $data['email'] = "shahin@itcenterbd.com";
        $data['subject'] = "Complain";

        $data['complaints_name'] = $request->input('complaints_name');
        $data['rank'] = $request->input('rank');
        $data['phone'] = $request->input('phone');
        $data['whatsapp_phone'] = $request->input('whatsapp_phone');
        $data['cde_number'] = $request->input('cde_number');
        $data['email_send_by'] = $request->input('email');
        $data['complain'] = $request->input('complain');

          
      
        Mail::send('frontend.complainMail', $data, function($message)use($data) {
        $message->to($data["email"], $data["email"])
                        ->subject($data["subject"]);
         
            
        });

        return redirect('complain')->with('status', 'Your complain has submitted  successfully.Authority may contact you for necessary action.Thanks');   
    }


}
