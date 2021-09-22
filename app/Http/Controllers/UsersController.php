<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function resert_password(Request $request, $id)
    {
        $data=User::find($id);
       // dd($id);
        $data->password=bcrypt('123456');
        $data->save();
        return back()->with('success','Password Reserted');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data=Role::all();
        return view('Users.RegisterUser',compact('data'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $request -> validate([
            'fname'=>"required",
            'lname'=>"required",
            'email'=>"required|unique:users",
            'phone' =>'required|min:10|max:10|unique:customers',
            'password'=>'required|min:5'
         ]);
      //  dd("deo");
        $user=new User();
        $user->fname=$request->fname;
        $user->mname=$request->mname;
        $user->lname=$request->lname;
        $user->email=$request->email;
        $user->phone=$request->phone;
        $user->password=bcrypt($request->input('password')  )   ;
        $user->save();
       // User::create($request->all());
        return back()->with('success','User Registered successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function print()
    {   $data=User::all();
        return view('Users.ManageUsers',compact('data'));
    }

    public function show()
    {
        return view('cms.profile');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
    public function destroy($id)
    {
        //
    }
}
