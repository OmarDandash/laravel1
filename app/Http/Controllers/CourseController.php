<?php

namespace App\Http\Controllers;
use App\courses;
use App\technologies;
use App\Models\Course;
use App\Models\Courses as ModelsCourses;
use App\Models\Technology;
use App\Models\url;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CourseController extends Controller

{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $technologie=Technology::all();
        $Course=Course::all();
       return view('Courses.Courses',compact('technologie','Course'));
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


        $image=$request->file('courseImage')->getClientOriginalName();
        $path=$request->file('courseImage')->storeAs('users', $image,'samir');
   
        Course::create([
            'courseName' => $request->courseName,
            'courseImage' => $path,
            'Technology_id' => $request->Technology_id,
        ]);
        session()->flash('Add', 'تم اضافة المنتج بنجاح ');
        return redirect('/technologie');;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course)
    {
        //
    }
    public function edt123($id)
    
    {
          
        $Course = Course::where('id',$id)->first();
        $details123  = url::where('Course_id',$id)->get();
      ;

        return view('Courses.edt',compact('details123'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $request->validate(
            [
                'courseImage'=>['nullable','mimes:jpg,png,gif','max:2024']
            ]
            );
            $courseImagPath=null;
            if ($request->hasFile('courseImage')) {
                $courseImagPath=$request->file('courseImage')->store('courseImages','public');
            }
        $id = Technology::where('Course_definition', $request->Course_definition)->first()->id;

        $Products = Course::findOrFail($request->pro_id);
 
        $Products->update([
        'courseName' => $request->courseName,
        'courseImage' => $request->courseImage,
        'Technology_id' => $id,
        ]);
 
        session()->flash('Edit', 'تم تعديل المنتج بنجاح');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)

    {

  

        $Products = Course::findOrFail($request->pro_id);
       
        $Products->delete();
      
        session()->flash('delete', 'تم حذف المنتج بنجاح');
        return back();
    }
}
