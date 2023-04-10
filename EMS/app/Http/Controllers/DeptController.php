<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;
use Illuminate\Support\Facades\DB;
use Auth;
use Illuminate\Support\Facades\Validator;

class DeptController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function __construct()
     {
         $this->middleware('auth');
     }


    public function index()
{
        $dept = Department::all();

         return view('admin.dept.list',compact('dept'));

    }
    public function add(Request $request)
{
    $validator = Validator::make($request->all(), [
        'department_name' => 'required|unique:departments|max:30',
    ]);
    if ($validator->fails()) {
        return response()->json([
            'status'=>400,
            'errors'=>$validator->messages(),
        ]);
    }
    else{

        $department = new Department;
        $department->department_name = $request->department_name;
        $department->save();
        return response()->json([
            'status'=>200,
            'message'=>"Department Added Successfully"
        ]);

    }

    }
    public function edit($id)
    {

    }

    public function destroy($id)
    {
       $department= Department::find($id);
       Department::find($id)->delete();

        return  redirect()->back()->with('success',$department->department_name.' was deleted Successfully');
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
        //
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

}
