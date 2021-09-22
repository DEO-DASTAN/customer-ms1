<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class CustomerController extends Controller
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
        $cust=DB::table('customers')->join('categories', 'categories.id', '=','customers.category_id')->get();
        return view('Customer.Manage_customer',compact('cust'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data=Category::all();
        return view('Customer.Register_customer',compact('data'));
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
           'email'=>"required|unique:customers",
           'phone' =>'required|min:10|max:10|unique:customers',
           'category_id'=>'integer',
           'campany'=>'required',
           'address'=>'required'
        ]);

        Customer::create($request->all());
        return redirect()->back()->with('success', 'Customer successfully Registered');
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
        $data=Customer::find($id);
        return view('Customer.edit_customer',compact('data'));
    }

    public function all_customers()
    {
        $cust=DB::table('customers')->join('categories', 'categories.id', '=','customers.category_id')->get();
        return view('Customer.Registered_customer',compact('cust'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $request -> validate([
            'fname'=>"required",
            'lname'=>"required",
            'email'=>"required|unique:customers",
            'phone' =>'required|min:10|max:10|unique:customers',
            'campany'=>'required',
            'address'=>'required'
         ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function delete()
    {
        $cust=Customer::all();
        return view('Customer.delete_customer',compact('cust'));

    }


    public function destroy($id)
    {
     $data=Customer::find($id);
     $data->delete();

     $cust=Customer::all();
     return view('Customer.delete_customer',compact('cust'));
    }
}
