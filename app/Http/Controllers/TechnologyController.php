<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Technology;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class TechnologyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Technology=technology::all();
       $tt=Course::all();


       // $tt=Course::latest()->paginate(0);

        return view ('technologies.technologie',compact('Technology','tt'));
    }
  
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }


    public function edt($id)
    
    {
        $invoices = Technology::where('id',$id)->first();
        $details  = Course::where('Technology_id',$id)->get();
  

        return view('Courses.edt',compact('details'));
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
   
    $validatedData = $request->validate([
        'Course_definition' => 'required|unique:technologies|max:400',
        'coachs_name' => 'required',
    ],[

        'Course_definition.required' =>'يرجي ادخال اسم تادورى',
        'Course_definition.unique' =>'اسم القسم مسجل مسبقا',
        'coachs_name.required' =>'يرجي ادخال اسم التسنتذ',

    ]);

        Technology::create([
            'Course_definition' => $request->Course_definition,
            'coachs_name' => $request->coachs_name,
            'created_by'=>(Auth::user()->name),
        ]);
       

    session()->flash('Add','تم إضافة الدورة بنجاح');
    return redirect('/technologie');
}
    





    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Technology  $technology
     * @return \Illuminate\Http\Response
     */
    public function show(Technology $technology)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Technology  $technology
     * @return \Illuminate\Http\Response
     */
    public function edit(Technology $technology)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Technology  $technology
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    { 
        $id = $request->id;

        $this->validate($request, [

            'Course_definition' => 'required|max:255|unique:technologies,Course_definition,'.$id,
            'coachs_name' => 'required',
        ],[

            'Course_definition.required' =>'يرجي ادخال اسم القسم',
            'Course_definition.unique' =>'اسم القسم مسجل مسبقا',
            'coachs_name.required' =>'يرجي ادخال البيان',

        ]);

        $sections = Technology::find($id);
        $sections->update([
            'Course_definition' => $request->Course_definition,
            'coachs_name' => $request->coachs_name,
        ]);


        session()->flash('edit','تم تعديل القسم بنجاج');
        return redirect('/technologie');

      

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Technology  $technology
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        
        $id = $request->id;
        Technology::find($id)->delete();
        session()->flash('delete','تم حذف القسم بنجاح');
        return redirect('/technologie');
    }
}
