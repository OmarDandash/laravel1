<?php

namespace App\Http\Controllers;

use App\Models\url;
use Illuminate\Http\Request;
use App\Models\Course;
class UrlController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $urlsd=url::all();
        $Course=Course::all();
        return view('urlsession.urlSession',compact('urlsd','Course'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
   
        url::create([
            'numbersession' => $request->numbersession,
            'url' => $request->url,
            'Course_id' => $request->courses_id,
        ]);
        session()->flash('Add', 'تم اضافة المنتج بنجاح ');
        return redirect('/omerer');;
    }
 
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\url  $url
     * @return \Illuminate\Http\Response
     */
    public function show(url $url)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\url  $url
     * @return \Illuminate\Http\Response
     */
    public function edit(url $url)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\url  $url
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, url $url)
    {
        $id = Course::where('courseName', $request->courseName)->first()->id;

        $Products = url::findOrFail($request->pro_id);
 
        $Products->update([
        'numbersession' => $request->numbersession,
        'url' => $request->url,
        'Course_id' => $id,
        ]);
 
        session()->flash('Edit', 'تم تعديل المنتج بنجاح');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\url  $url
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $Products = url::findOrFail($request->pro_id);
       
        $Products->delete();
      
        session()->flash('delete', 'تم حذف المنتج بنجاح');
        return back();
    }
}
