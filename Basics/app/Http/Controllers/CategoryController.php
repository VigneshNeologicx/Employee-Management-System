<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Auth;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
class CategoryController extends Controller
{
    public function Allcat(){
        // Eloquent ORM Read Data
        // $categories = Category::all();
         $categories = Category::latest()->paginate(3);
        //  $categories = DB::table('categories')->latest()->get();

        // $categories = DB::table('categories')
        // ->join('users','categories.user_id','users_id')
        // ->select('categories.*','users.name')
        // ->latest()->paginate(3);

        return view('admin.category.index',compact('categories'));

    }

    public function Addcat(Request $request){
        $validatedData = $request->validate([
            'category_name' =>'required|unique:categories|max:255',
        ],
        ['category_name.required' =>'Please Enter the Category Name',
        'category_name.unique' =>'Should be unique',
        'category_name.max' =>'Exceeding the Naming Limit it should be within 255']);

        if(Auth::check()){
            Category::insert([
                'category_name' => $request->category_name,
                'user_id' => Auth::user()->id,
                'created_at' => Carbon::now()
            ]);
            // $category =new Category;
            // $category->category_name = $request->category_name;
            // $category->user_id=Auth::user()->id;
            // $category->save();

            // Query Builder Insert Data
            // $data = array();
            // $data['category_name'] = $request->category_name;
            // $data['user_id']=Auth::user()->id;
            // DB::table('categories')->insert($data);

        }

        return Redirect()->back()->with('success','Category inserted Sucessfully');
    }


public function Edit($id){

    $categories = Category::find($id);
    return view('admin.category.edit',compact('categories'));

}

public function Update(Request $request, $id){
$categories = Category::find($id)->update([
 'category_name' => $request->category_name,
 'user_id' => Auth::user()->id
]);

return Redirect()->route('all.category')->with('success','Category Updated Sucessfully');
}



}
