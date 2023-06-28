<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LeaveController extends Controller
{

   public function leave_request(Request $request)
 {
        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'start_date' => 'required|date',
            'end_date'  =>  'required|date|after_or_equal:start_date'
        ]);


       if($validator->fails()) {
            return response()->json([
                'status'=>400,
                'errors'=>$validator->messages(),
            ]);
        }

        else{
            return response()->json([
                'status'=>200,
                'message'=> "Successfully added"
            ]);
        }
    }

}
?>
