<?php

namespace App\Http\Controllers;
use App\Models\Brand;
use Illuminate\Support\Carbon;
use App\Models\Multipic;
use Illuminate\Http\Request;
use Image;
use Auth;
class BrandController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

   public function AllBrand()
   {
     $brands = Brand::latest()->paginate(2);

    return view('admin.brand.index',compact('brands'));
   }

   public function AddBrand(Request $request){

    $validatedData = $request->validate([
        'brand_name' => 'required|unique:brands|min:4',
        'brand_image' => 'required|mimes:jpg,jpeg,png'
       ],
    ['brand_name.required' => 'Please Input Brand name',
     'brand_name.min' => 'Category greater than 4 Characters',
     'brand_image.min' => 'Category greater than 4 Characters'
     ]
);

    // $brand_image= $request->file('brand_image');
    // $name_gen = hexdec(uniqid());
    // $img_ext =strtolower($brand_image->getClientOriginalExtension());
    // $img_name = $name_gen.'.'.$img_ext;
    // $up_location = 'image/brand/';
    // $last_img = $up_location.$img_name;
    // $brand_image->move($up_location,$img_name);

     $name_gen = hexdec(uniqid()).'.'.$request->brand_image->getClientOriginalExtension();
     Image::make($request->brand_image)->resize(300,200)->save(public_path().'/image/brand/'.$name_gen);
     $last_img ='image/brand/'.$name_gen;
     Brand::insert([
        'brand_name' => $request->brand_name,
        'brand_image' => $last_img,
        'created_at' => Carbon::now()
    ]);

    return  redirect()->back()->with('success','Brand added Successfully');

   }

   public function Edit($id)
   {
     $brands = Brand::find($id);
    return view('admin.brand.edit',compact('brands'));
   }

   public function Update(Request $request ,$id)
   {

     $validatedData = $request->validate([
        'brand_name' => 'required|unique:brands|min:4',
     ],
     ['brand_name.required' => 'Please Input Brand name',
     'brand_name.min' => 'Category greater than 4 Characters',
     'brand_image.min' => 'Category greater than 4 Characters'
     ]);
    //  dd(public_path());
     $old_image = basename($request->old_image);
    //  $get_abs=getcwd();
    //  $get_abs= str_replace("\\","/",$get_abs);

     $brand_image = $request->file('brand_image');
     if($brand_image)
{
    $name_gen = hexdec(uniqid());
    $img_ext =strtolower($brand_image->getClientOriginalExtension());
    $img_name = $name_gen.'.'.$img_ext;
    $up_location = '/image/brand/';
    $last_img = $up_location.$img_name;
    $brand_image->move(public_path().$up_location,$img_name);

    unlink(public_path().$up_location.$old_image);

     Brand::find($id)->update([
        'brand_name' => $request->brand_name,
        'brand_image'=> $last_img,
        'created_at' =>Carbon::now()
     ]);
     return  redirect()->back()->with('success','Updated Brand Successfully');
}
else{
    Brand::find($id)->update([
        'brand_name' => $request->brand_name,
        'created_at' =>Carbon::now()
     ]);
     return  redirect()->back()->with('success','Updated Brand Successfully');
}

    }

    public function Delete($id){

        $image = Brand::find($id);
        $old_image=$image->brand_image;
        unlink(public_path().'/'.$old_image);

        Brand::find($id)->delete();
        return  redirect()->back()->with('success','Brand was deleted Successfully');

    }

    public function Multipic(){
        $images = Multipic::all();

        return view('admin.multipic.index',compact('images'));
    }
    public function StoreImg(Request $request){

        $image = $request->file('image');
        foreach($image as $multi_img){
        $name_gen = hexdec(uniqid()).'.'.$multi_img->getClientOriginalExtension();
        Image::make($multi_img)->resize(300,200)->save(public_path().'/image/multi/'.$name_gen);
        $last_img ='image/multi/'.$name_gen;
        Multipic::insert([
           'image' => $last_img,
           'created_at' => Carbon::now()
       ]);
    }
       return  redirect()->back();
    }


    public function Logout(){
        Auth::logout();
       return Redirect()->route('login')->with('Success','User Logout Successfully');

    }
}
