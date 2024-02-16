<?php



namespace App\Http\Controllers;



use App\Events\NewService;

use App\Jobs\SyncMedia;

use App\Models\Post;

use App\Notification\ReviewNotification;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Notification;



class PostsController extends Controller

{

    /**

     * @param \Illuminate\Http\Request $request

     * @return \Illuminate\Http\Response

     */

    public function index(Request $request)

    {

        $posts = Post::all();



       // return view('post.posts', compact('posts'));

    }



    /**

     * @param \Illuminate\Http\Request $request

     * @return \Illuminate\Http\Response

     */

    public function create(Request $request)

    {

     //   return view('post.create');

    }



    /**

     * @param \Illuminate\Http\Request $request

     * @param \App\Models\Portifolio $post

     * @return \Illuminate\Http\Response

     */

    public function show(Request $request, Post $post)

    {

        $posts = Post::all();

      //  return view('post.posts', compact('posts'));

    }



    /**

     * @param \App\Http\Requests\PortifolioStoreRequest $request

     * @return \Illuminate\Http\Response

     */

    public function store(Request $request)

    {



        

    

    //   $file = time().'.'.request()->portifolio_image->getClientOriginalExtension();

    //   request()->portifolio_image->move(public_path('uploads/'), $file);

    

    //   $request->portifolio_image = $file;





      

    

        $post = Post::create([

           'title' => $request->title,

           'content' => $request->content,

            ]);





       // $request->session()->flash('post.title', $post->title);



        return redirect()->back();

    }



    function destroy($id)



    {



      $post = Post::findOrfail($id);

 

      $post->delete();


      return redirect()->back();





     }



     





     public function update(Request $request)



     {

         $post = Post::findOrfail($request->id);

 

         $post->update($request->all());

 

         return back();

 

     }

}

