<ol>
   <br>
  <li>
    <strong> Blade Level :</strong> <br><br>
    <strong>Created : </strong> about.blade, contact.blade. <br>
    <strong>Changed : </strong> web.php routes added /about /contact. <br>
    <strong>Commands Used : </strong> Nothing. <br>
  </li>
 <br> <br>
  <li>
    <strong> Controller URL and Route : </strong> <br> <br>
    <strong> Created : </strong> ContactController. <br>
    <strong> Changed : </strong> Routes of contact with ContactController. <br>
    <strong> Commands Used : </strong> php artisan make:controller ContactController.
  </li>

  {{-- Template --}}

  <br> <br>
  <li>
    <strong> Middleware </strong> <br> <br>
    <strong> Created : </strong> CheckAge as middleware. <br>
    <strong> Changed : </strong> kernel.php used to register middleware and CheckAge.php and on route applied middleware <br>
    <strong> Commands Used : </strong>php artisan make:middleware CheckAge<br>
  </li>

  <br> <br>
  <li>
    <strong> Laravel url, URL::to, route</strong> <br> <br>
    <strong> Created : </strong> Nothing. <br>
    <strong> Changed : </strong> about.blade, contact.blade, welcome.blade, routes  <br>
    <strong> Commands Used : </strong> Nothing. <br>
  </li>

  <br> <br>
  <li>
    <strong> Create Database and Configuration </strong> <br> <br>
    <strong> Created : </strong> Any database in mysql. <br>
    <strong> Changed : </strong> .env file to point to the database.<br>
    <strong> Commands Used : </strong> Nothing.<br>
  </li>

  <br> <br>
  <li>
    <strong> Laravel 8 Authentication install - Jetstream </strong> <br> <br>
    <strong> Created : </strong> All Authentication files installed. <br>
    <strong> Changed : </strong> Routes and other files added from installing jetstream. <br>
    <strong> Commands Used 1: </strong> composer require laravel/jetstream. <br>
    <strong> Commands Used 2 : </strong> php artisan jetstream:install livewire || php artisan jetstream:install inertia. <br>
    <strong> Commands Used 3 : </strong> npm install && npm run dev. <br>
    <strong> Commands Used 4 : </strong> php artisan migrate <br>
  </li>

  <br> <br>
  <li>
    <strong> Laravel 8 Authentication via sanctum </strong> <br> <br>
    <strong> Created : auth from sanctum </strong> <br>
    <strong> Changed : Nothing </strong> <br>
    <strong> Commands Used : composer require laravel/sanctum</strong> <br>
  </li>

  <br> <br>
  <li>
    <strong> Eloquent ORM Read Users Data </strong> <br> <br>
    <strong> Added : </strong> BootStrap in App Layout <br> <br>
    <strong> Created : </strong> badge for total users and table crud for total users in dashboard. <br>
    <strong> Changed : </strong> dashboard.php Routes/web.php  <br>
    <strong> Commands Used : </strong> Nothing... <br>
  </li>

  <br> <br>
  <li>
    <strong> Query Builder Read Users Data </strong> <br> <br>
    <strong> Created : Nothing</strong> <br>
    <strong> Changed : DB facade in routes and Carbon\Carbon::parse </strong> <br>
    <strong> Commands Used : Nothing </strong> <br>
  </li>

  <br> <br>
  <li>
    <strong> Creating Model and Migration </strong> <br> <br>
    <strong> Created : </strong> Category Model and Migration and Routes and also admin/category/index.blade.php file <br>
    <strong> Changed : </strong> admin/category/index.blade.php <br>
    <strong> Commands Used 1: </strong> php artisan make:model Category -m  <br>
    <strong> Commands Used 2: </strong> php artisan migrate <br>
  </li>



  <br> <br>
  <li>
    <strong> Form Validation and Show Custom error </strong> <br> <br>
    <strong> Created : </strong> CategoryController and routes for controller methods Addcat and Allcat <br>
    <strong> Changed : </strong> CategoryController and added form in admin/category/index.blade.php<br>
    <strong> Commands Used : </strong> php artisan make:controller CategoryController <br>
  </li>


  <br> <br>
  <li>
    <strong> Eloquent ORM Insert data </strong> <br> <br>
    <strong> Created : </strong> Nothing <br>
    <strong> Changed : </strong> CategoryController <br>
    <strong> Commands Used : </strong> ORM query to insert category refer CategoryController <br>
  </li>


  <br> <br>
  <li>
    <strong> Insert Data With Query Builder </strong> <br> <br>
    <strong> Created : </strong> Nothing <br>
    <strong> Changed : </strong> CategoryController <br>
    <strong> Commands Used : </strong> RAW query to insert category data ,refer CategoryController <br>
  </li>


  <br> <br>
  <li>
    <strong> Eloquent ORM Read Data</strong> <br> <br>
    <strong> Created : </strong> Nothing <br>
    <strong> Changed : </strong> CategoryController <br>
    <strong> Commands Used : </strong> ORM query to read category data, refer CategoryController <br>
  </li>


  <br> <br>
  <li>
    <strong> Query Builder Read Data </strong> <br> <br>
    <strong> Created : </strong> Nothing <br>
    <strong> Changed : </strong> CategoryController <br>
    <strong> Commands Used : </strong> Raw query to read category data, refer CategoryController <br>

  </li>


  <br> <br>
  <li>
    <strong> Laravel Pagination </strong> <br> <br>
    <strong> Added : </strong> paginate(3) <br>
    <strong> Created : </strong> Nothing... <br>
    <strong> Changed : </strong> CategoryController <br>
    <strong> Commands Used : </strong> {{$categories->firstItem+$loop->index }} <br>
  </li>


  <br> <br>
  <li>
    <strong> Eloquent ORM one to one Relationships </strong> <br> <br>
    <strong> Created : </strong>Inside Model Category, method who_is_user() <br>
    <strong> Changed : </strong> admin\category\index.blade.php <br>
    <strong> Commands Used : </strong> Nothing... <br>
  </li>


  <br> <br>
  <li>
    <strong> Query Builder Join Table </strong> <br> <br>
    <strong> Created : </strong> Nothing <br>
    <strong> Changed : </strong> CategoryController <br>
    <strong> Commands Used : </strong> Used joins for raw query <br>
  </li>


  <br> <br>
  <li>
    <strong> Eloquent ORM Edit & Update Data </strong> <br> <br>
    <strong> Added : </strong> Routes and Methods and admin/category/edit.blade.php <br>
    <strong> Created : </strong> CategoryController Edit and update methods <br>
    <strong> Changed : </strong> Routes /category/edit/{id}  and  /category/delete/{id} <br>
    <strong> Commands Used : </strong> Nothing...  <br>
  </li>


  <br> <br>
  <li>
    <strong> Query Builder Edit and Update Data </strong> <br> <br>
    <strong> Created : </strong> Nothing <br>
    <strong> Changed : </strong> ORM To Raw Query <br>
    <strong> Commands Used : </strong> Raw Query Only <br>
  </li>


  <br> <br>
  <li>
    <strong> SoftDelete, Data Restore & ForceDelete 1 </strong> <br> <br>
    <strong> Created : </strong> SoftDelete and restore Method Route and Button <br>
    <strong> Changed : </strong> CategoryController and Routes <br>
    <strong> Commands Used : </strong> Nothing ... <br>
  </li>


  <br> <br>
  <li>
    <strong> SoftDelete, Data Restore & ForceDelete 2 </strong> <br> <br>
    <strong> Created : </strong> PDelete and restore Method Route and Button <br>
    <strong> Changed : </strong> CategoryController and Routes <br>
    <strong> Commands Used : </strong> Nothing ... <br>
  </li>


  <br> <br>
  <li>
    <strong> Setup Brand Page </strong> <br> <br>
    <strong> Added : </strong> New Brands tab in Dashboard <br>
    <strong> Created : </strong> New Brand Tab & BrandController & Brand model & migration & admin/brand/index.blade.php <br>
    <strong> Changed : </strong> Nothing... <br>
    <strong> Commands Used 1: </strong> php artisan make:controller BrandController <br>
    <strong> Commands Used 2 : </strong> php artisan make:model Brand -m <br>
    <strong> Commands Used 3 : </strong> php artisan migrate <br>
  </li>


  <br> <br>
  <li>
    <strong> Elqouent ORM insert Image</strong> <br> <br>
    <strong> Created : </strong> public_path()./image/brand/  for storing images<br>
    <strong> Changed : </strong> admin/brand/index.blade.php and /edit.blade.php and BrandController <br>
    <strong> Commands Used : </strong> Nothing... <br>
  </li>


  <br> <br>
  <li>
    <strong> Eloquent ORM Edit, Update Data With Image $ Without Image 1</strong> <br> <br>
    <strong> Created : </strong> Methods in BrandController for Edit and Update <br>
    <strong> Changed : </strong> BrandController <br>
    <strong> Commands Used : </strong> Refer BrandController <br>
  </li>

  <br> <br>
  <li>
    <strong> Eloquent ORM Edit, Update Data With Image $ Without Image 2</strong> <br> <br>
    <strong> Created : </strong> Methods in BrandController for Edit and Update <br>
    <strong> Changed : </strong> Logic For Update in BrandController <br>
    <strong> Commands Used : </strong> Refer BrandController <br>
  </li>

  <br> <br>
  <li>
    <strong> Delete Data With Image </strong> <br> <br>
    <strong> Created : </strong> Delete method and routes in the Project <br>
    <strong> Changed : </strong> BrandController <br>
    <strong> Commands Used : </strong> Nothing... <br>
  </li>


  <br> <br>
  <li>
    <strong> Image Insert and Resize with Intervention Package </strong> <br> <br>
    <strong> Created : </strong> <br>
    <strong> Changed : </strong> <br>
    <strong> Commands Used : 1</strong> composer require intervention/image <br>
    <strong> Commands Used : 2 </strong> php artisan vendor:publish --provider="Intervention\Image\ImageServiceProviderLaravelRecent"<br>
    <strong> Configurations : 1 </strong>  config/app.php Inside Providers => [Intervention\Image\ImageServiceProvider::class,]  <br>
    <strong> Configurations : 2 </strong>  config/app.php Inside aliases 'Image' => Intervention\Image\Facades\Image::class, <br>
</li>


  <br> <br>
  <li>
    <strong> Multi Image Upload Part 1</strong> <br> <br>
    <strong> Created : </strong> Image Migrations, Model, Routes, admin/multipic/index.blade.php and admin/multipic/edit.blade.php  <br>
    <strong> Changed : </strong> BrandController as added new method for multipic insert<br>
    <strong> Commands Used 1: </strong> php artisan make:model Multipic -m<br>
    <strong> Commands Used 2: </strong> php artisan migrate<br>
  </li>


  <br> <br>
  <li>
    <strong> Multi Image Upload Part 2 </strong> <br> <br>
    <strong> Created : </strong> Continuing... <br>
    <strong> Changed : </strong> More in index files in form fields <br>
    <strong> Commands Used : </strong> Nothing...<br>
  </li>


  <br> <br>
  <li>
    <strong> Update User Profile and Change Password </strong> <br> <br>
    <strong> What to do ? : </strong> Link the storage directory to public folder<br>
    <strong> Created : </strong> Storage directory via linking using command<br>
    <strong> Changed : </strong> Nothing  <br>
    <strong> Commands Used : </strong> php artisan storage:link <br>
  </li>


  <br> <br>
  <li>
    <strong> Forget Password & Password Reset</strong> <br> <br>
    <strong> Created : </strong> Nothing...  <br>
    <strong> Changed : </strong> Feature Enabled <br>
    <strong> Commands Used : </strong>Nothing... <br>
  </li>


  <br> <br>
  <li>
    <strong> Email Verification </strong> <br> <br>
    <strong> Enabled : </strong> Features <br>
    <strong> Created : </strong> Nothing... <br>
    <strong> Changed : </strong> .env file for smtp configuration <br>
    <strong> Configurations: </strong>MAIL_MAILER=smtp  <br>
    <strong> Configurations: </strong>MAIL_HOST=smtp.mailtrap.io  <br>
    <strong> Configurations: </strong>MAIL_PORT=2525  <br>
    <strong> Configurations: </strong>MAIL_USERNAME=gedfgayfagusd  <br>
    <strong> Configurations: </strong>MAIL_PASSWORD=fashufhriwori<br>
    <strong> Configurations: </strong>MAIL_FROM_ADDRESS=info@something.com<br>
  </li>


  <br> <br>
  <li>
    <strong> Middleware Auth Users Access Control</strong> <br> <br>
    <strong> Main Purpose : </strong> To Control Access to the Routes <br>
    <strong> Created : </strong> All Controller pubilc constructor <br>
    <strong> Changed : </strong> On all Controller <br>
    <strong> Commands Used : </strong> public function __construct(){ $this->middleware('auth');} <br>
  </li>



  <br> <br>
  <li>
    <strong> </strong> <br> <br>
    <strong> Created : </strong> <br>
    <strong> Changed : </strong> <br>
    <strong> Commands Used : </strong> <br>
  </li>


  <br> <br>
  <li>
    <strong> </strong> <br> <br>
    <strong> Created : </strong> <br>
    <strong> Changed : </strong> <br>
    <strong> Commands Used : </strong> <br>
  </li>




</ol>
