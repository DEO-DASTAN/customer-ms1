<?php

namespace App\Http\Controllers;

use App\Models\Permission;
use App\Models\Role;
use App\Models\Roles_permission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class RoleController extends Controller
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()


    {
     return view('Roles.RegisterRoles');
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
            'slug'=>'unique:roles|required',
            'name'=>'required'
        ]);

       $data=new Role();
       $data->name=$request->name;
       $data->slug=$request->slug;
       $data->save();
       return Redirect()->back()->with('success','Role successfully Registered');
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
    public function edit()
    {
        $data=Role::all();
        return view('Roles.ManageRole',compact('data'));
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


    // Assign ROLE to controller
    public function role_permission()
    {
        $data=Role::all();
        $permissions = Permission::all();
        return view('Roles_Permission.AssigPermToRole',compact('data','permissions'));
    }

    public function store_role_permission( Request $request)
    {
     // 'role_id ','permission_id'   roles_permissions

     $role=new Roles_permission();
     $role->role_id = $request->role;
     $role->permission_id = $request->permission;
     $role->save();

     //dd("Assigned Successfully");
     return back()->with('success',"Assigned Successfully");






    }


}
