<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Major;
use App\Faculty;
class MajorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

       $majors=Major::latest()->paginate(5);
       return view('admin.major.index',compact('majors'))
       ->with('i',(request()->input('page',1)-1)*5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $facultys=faculty::all();
        return view('admin.major.create',compact('facultys'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $request->validate([
           'faculty_id'=>'required',
           'major_name'=>'required'
       ]);
       Major::create($request->all());
       return redirect()->route('major.index')->with('success','เพิ่มข้อมูลสาขาเรียบร้อยแล้ว');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(major $major)
    {
        $allcourse=Major::where('faculty_id','=','$major')->get();
        return view('admin.major.show',compact('allcourse'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Major $major)
    {
        $facultys=faculty::all();
      return view('admin.major.edit',compact('major','facultys'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Major $major)
    {
     $major->delete();
     return redirect()->route('major.index')
     ->with('success','major DELETE Successfully');
    }
}
