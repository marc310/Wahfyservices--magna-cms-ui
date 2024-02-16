<?php

namespace App\Http\Controllers;

use App\Http\Requests\FooterStoreRequest;
use App\Models\Footer;
use Illuminate\Http\Request;

class FooterController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $footers = Footer::all();

        return view('footer.footers', compact('footers'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('footer.create');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Footer $footer
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Footer $footer)
    {
        return view('footer.footer', compact('footers'));
    }

    /**
     * @param \App\Http\Requests\FooterStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(FooterStoreRequest $request)
    {
        $footer = Footer::create($request->validated());

        $request->session()->flash('footer.footer_span', $footer->footer_span);

        return redirect()->route('footer.store');
    }

    function destroy(Request $request)

    {

      $footers = Footer::findOrfail($request->id);
 
      $footers->delete();

      return back();

     }


     public function update(Request $request)

     {
        $footers = Footer::findOrfail($request->id);
 
         $footers->update($request->all());
 
         return back();
 
     }
}
