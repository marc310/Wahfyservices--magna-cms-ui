<?php

namespace App\Http\Controllers;

use App\Post;
use App\Models\About;
use App\Jobs\SyncMedia;
use App\Events\NewAbout;
use Illuminate\Http\Request;
use App\Models\Clients_Comments;
use App\Http\Requests\AboutStoreRequest;
use App\Notification\ReviewNotification;
use App\Http\Requests\CommentsStoreRequest;
use Illuminate\Support\Facades\Notification;

class CommentController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $abouts = About::all();

        return view('about.about', compact('abouts'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('about.create');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\About $about
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, About $about)
    {
        return view('about.about', compact('abouts'));
    }

    /**
     * @param \App\Http\Requests\AboutStoreRequest $request
     * @return \Illuminate\Http\Response
     */


    public function store(CommentsStoreRequest $request)
    {
        $file = time().'.'.request()->image->getClientOriginalExtension();
        request()->image->move(public_path('uploads/comments/'), $file);
      
        $request->image = $file;
  
  
        
      
          $about = Clients_Comments::create([
             'commentor_name' => $request->commentor_name,
             'commentor_job' => $request->commentor_job,
             'comment' => $request->comment,
             'image' => $file
              ]);
  
        //  Notification::send($portifolio->author, new ReviewNotification($portifolio));
  
         // SyncMedia::dispatch($portifolio);
  
         // event(new NewService($portifolio));
  
  
          return redirect()->route('comment.store')->with('msg','تم حفظ البيانات بنجاح');
    }

    function destroy($id)

    {

      $comments = Clients_Comments::findOrfail($id);
 
      $comments->delete();

      return back();

     }


     public function update(Request $request)

     {
         $comments = Clients_Comments::findOrfail($request->id);
 
         $comments->update($request->all());
 
         return back();
 
     }
 
}
