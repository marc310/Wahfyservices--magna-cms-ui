<?php

namespace App\Http\Controllers;

use App\Http\Requests\SociallinkStoreRequest;
use App\Models\Sociallink;
use Illuminate\Http\Request;

class SociallinkController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $sociallinks = Sociallink::all();

        return view('sociallink.sociallinks', compact('sociallinks'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('sociallink.create');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Sociallink $sociallink
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Sociallink $sociallink)
    {
        return view('sociallink.sociallinks', compact('sociallinks'));
    }

    /**
     * @param \App\Http\Requests\SociallinkStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(SociallinkStoreRequest $request)
    {
        $sociallink = Sociallink::create($request->validated());

        return redirect()->route('sociallink.store');
    }

    function destroy(Request $request)

    {

      $sociallinks = Sociallink::findOrfail($request->id);
 
      $sociallinks->delete();

      return back();

     }


     public function update(Request $request)

     {
         $sociallinks = Sociallink::findOrfail($request->id);
 
         $sociallinks->update($request->all());
 
         return back();
 
     }
}
