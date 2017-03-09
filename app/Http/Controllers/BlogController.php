<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //show?!
        $blogs = Blog::all();
        return view('blog.index',['blogs' => $blogs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //create?!
        return view ('blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Store?!
        $this->validate($request,[
            'studentnumber'=> 'required|int',
            'Fname'=> 'required|min:3',
            'Mname'=> 'required|min:1',
            'Lname'=> 'required|min:5',
            'address'=> 'required',
            'course'=> 'required',
            'contactnumber'=> 'required',
            

         ]);

        //creating new life?!

        $blog = new blog;
        $blog->studentnumber = $request->studentnumber;
        $blog->Fname = $request->Fname;
        $blog->Mname = $request->Mname;
        $blog->Lname = $request->Lname;
        $blog->address = $request->address;
        $blog->course = $request->course;
        $blog->contactnumber = $request->contactnumber;
        $blog->save();
        return redirect()->route('blog.index')->with('alert-success','Data Has Been Added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog = Blog::findOrFail($id);    

        return view('blog.edit',compact('blog'));
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
        //verifiy?!
        $this->validate($request,[
               'studentnumber'=> 'required',
            'Fname'=> 'required',
            'Mname'=> 'required',
            'Lname'=> 'required',
            'address'=> 'required',
            'course'=> 'required',
            'contactnumber'=> 'required',
            ]);


        $blog = Blog::findOrFail($id);
        $blog->studentnumber = $request->studentnumber;
        $blog->Fname = $request->Fname;
        $blog->Mname = $request->Mname;
        $blog->Lname = $request->Lname;
        $blog->address = $request->address;
        $blog->course = $request->course;
        $blog->contactnumber = $request->contactnumber;
        $blog->save();
        return redirect()->route('blog.index')->with('alert-success','Data Has Been Added!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //CRUSH...KILL...DESTROY....SWAG
        $blog = Blog::findOrFail($id);
        $blog->delete();
        return redirect()->route('blog.index')->with('alert-success','Fatality!');

    }
}
