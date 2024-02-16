<?php

namespace App\Http\Controllers;

use App\Events\NewContact;
use App\Http\Requests\ContactStoreRequest;
use App\Jobs\SyncMedia;
use App\Models\Contact;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;
use App\Notification\EmailNotification;



class ContactController extends Controller
{
    /**
     * @param \App\Http\Requests\ContactStoreRequest $request
     * @return \Illuminate\Http\Response
     */
     
      public function index(Request $request)

    {

        return view('contact.mails');



    }
    
    public function store(ContactStoreRequest $request)
    {
        $contact = Contact::create($request->validated());

        $admin = User::all();

        Notification::send($admin, new EmailNotification($contact));


        return redirect()->back()->with('message', 'mail has been sent successfully!');

    }

    
    public function show(Request $request)
    {
        $posts = Contact::where('id',$request['id'])->first();

        return view('contact.mail_details', compact('posts'));
    }
    
    
    function destroy($id)



    {



      $booking = Contact::findOrfail($id);

 

      $booking->delete();


      return redirect()->back();





     }


}
