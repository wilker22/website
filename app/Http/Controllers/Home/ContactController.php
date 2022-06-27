<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function Contact(){
        return view('frontend.contact');
    } // end mehtod 

    public function storeMessage(Request $request)
    {
        Contact::insert([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'phone' => $request->phone,
            'message' => $request->message,
            'created_at' => Carbon::now(),

        ]);

        $notification = [
            'message' => 'Your Message Submited Successfully', 
            'alert-type' => 'success'
        ];

        return redirect()->back()->with($notification);

    }

    public function contactMessage()
    {
        $contacts = Contact::latest()->get();

        return view('admin.contact.allcontact', compact('contacts'));
    }

    public function deleteMessage($id)
    {
        $contact = Contact::findOrFail($id)->delete();

        $notification = [
            'message' => 'Your Message Deleted Successfully', 
            'alert-type' => 'success'
        ];

        return redirect()->back()->with($notification);
        
    }
}
