<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\subject;
use App\Models\course;
use App\Models\modul;


class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        if($request->session()->has('user_type') and ($request->session()->get('user_type') == 1 or $request->session()->get('user_type') == 6 )){
            $request->validate([
            'newcourse' => 'required',
            'subject_id' => 'required'
            ]);
            $tutor_id  = $request->session()->get('user_id');
            $course = New course;
            $course->subject_id = $request->subject_id;
            $course->course_name = $request->newcourse;
            $course->tutor_id = $tutor_id;
            $res = $course->save();
                if($res){
                    return back()->with(
                        ['xabar'=>'Yangi kurs qo`shildi', ]
                    );
                }
                else{
                    return back()->with(
                        [ 'xabar'=>'Xato! Yangi kurs qo`shilmadi', ]
                    );
                }
        }
        else{
            return redirect(route('index'))->with('xabar','Siz tutor emassiz');
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $subject = subject::where('id','=',$id)->get();

        $courses = course::where('subject_id','=',$id)->get();

        return view('courses',[
            'subject' => $subject[0],
            'courses' => $courses
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
