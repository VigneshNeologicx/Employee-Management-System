<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Department;
use App\Models\Role;
use App\Models\Position;
use Illuminate\Support\Facades\Validator;
use Auth;
class EmployeeController extends Controller
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
        // $emp = Employee::join('departments', 'employees.dept_id', '=', 'departments.department_id')
        // ->get(['employees.*', 'departments.department_name']);

        // return view('admin.employee.list',compact('emp'));
    }

    public function add_emp(Request $request){


        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'email' => 'required|unique:employees',
            'phone' => 'required|unique:employees|max:5',
            'dept_id' => 'required',
            'role_id' => 'required',
            'position_id' => 'required'
        ]);
        if ($validator->fails()) {
            return response()->json([
                'status'=>400,
                'errors'=>$validator->messages(),
            ]);
        }

        else{
            dd($request->all());
        $data = new Employee;
        $data->name=$request->name;
        $data->email=$request->email;
        $data->phone=$request->phone;
        $data->dept_id=$request->dept_id;
        $data->role_id=$request->role_id;
        $data->position_id=$request->position_id;
        $data->save();
        return response()->json([
            'status'=>200,
            'message'=>"Added Employee Successfully"
        ]);
    }

    }
    public function show_add_staff(){

        // $emp = Employee::join('departments', 'employees.dept_id', '=', 'departments.department_id')
        // ->get(['employees.*', 'departments.department_name']);
        $emp = Employee::all();
        $departments = Department::all();
        $roles = Role::all();
        $positions = Position::all();
        return view('admin.employee.add_staff',compact('departments','roles','positions','emp'));

    }


    public function add_role_pos()
    {
        $departments = Department::all();
        $roles = Role::all();
        $positions = Position::all();
        return view('admin.employee.create_role_pos',compact('departments','roles','positions'));
    }

public function insert_role(Request $request)
    {

        $validator = Validator::make($request->all(),
            ['name' => 'required|unique:roles|max:25']
        );
        if ($validator->fails()) {
            return response()->json([
                'status'=>400,
                'errors'=>$validator->messages(),
            ]);
        }
        else{

            $data = new Role;
            $data->name = $request->name;
            $data->save();

            return response()->json([
                'status'=>200,
                'message'=>"Added New Role ".$request->role." Successfully"
            ]);

        }


        }

        public function insert_position(Request $request)
        {

            $validator = Validator::make($request->all(),[
                'name' => 'required|unique:positions|max:25'
            ]);
            if ($validator->fails()) {
                return response()->json([
                    'status'=>400,
                    'errors'=>$validator->messages(),
                ]);
            }
            else{
                $data = new Position;
                $data->name = $request->name;
                $data->save();

                return response()->json([
                    'status'=>200,
                    'message'=>"Added New Position ".$request->name." Successfully"
                ]);

            }


            }



public function role_delete($id)
{
   $role = Role::find($id);
     Role::find($id)->delete();
     return  redirect()->back()->with('success',$role->name.' was deleted Successfully');

}

public function position_delete($id)
{
   $position = Position::find($id);
     Position::find($id)->delete();
     return  redirect()->back()->with('success',$position->name.' was deleted Successfully');

}


public function destroy($id)
{
    //  Employee::find($id)->delete();
    return redirect()->back();
}
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

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

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

}
