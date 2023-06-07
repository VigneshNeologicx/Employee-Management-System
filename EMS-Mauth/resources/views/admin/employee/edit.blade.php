@extends('admin.admin-master')

@section('admin')
<!-- ============================================================== -->
     <!-- Page wrapper  -->
     <!-- ============================================================== -->
     <div class="page-wrapper">
       <!-- ============================================================== -->
       <!-- Bread crumb and right sidebar toggle -->
       <!-- ============================================================== -->
       <div class="page-breadcrumb">
         <div class="row">
           <div class="col-12 d-flex no-block align-items-center">
             <h4 class="page-title"></h4>
             <div class="ms-auto text-end">
               <nav aria-label="breadcrumb">
                 <ol class="breadcrumb">
                   <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                   <li class="breadcrumb-item active" aria-current="page">
                     logout
                   </li>
                 </ol>
               </nav>
             </div>
           </div>
         </div>
       </div>
       <!-- ============================================================== -->
       <!-- End Bread crumb and right sidebar toggle -->
       <!-- ============================================================== -->
       <!-- ============================================================== -->
       <!-- Container fluid  -->
       <!-- ============================================================== -->
       <div class="container-fluid" style="min-height:1300px">



        <!-- ============================================================== -->
         <!-- Sales Cards  -->
         <!-- ============================================================== -->
         <div class="row">
          <div class="col-12">
         @if(Session::has('success'))
           <div class="card">
            <div class="card-body">
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong> {{Session::get('success')}}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            </div>
        </div>
        @endif
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Employee Listing</h5>
                <div class="table-responsive">
                  <table
                    class="table table-striped table-bordered">
                    <thead class="text-dark">
                      <tr>
                        <th>Department ID</th>
                        <th>Department Name</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>


                        @foreach($dept as $depts)
                        <tr>
                        <td>{{$depts->department_id}}</td>
                        <td>{{$depts->department_name}}</td>
                        <td>
                            <a href="{{url('dept/edit').'/'.$depts->department_id}}" class="btn btn-info">Edit</a>
                            <a href="{{url('dept/delete').'/'.$depts->department_id}}" onclick="return confirm('Are you sure you want to delete it ?')" class="btn btn-danger">Delete</a>
                        </td>
                        </tr>
                        @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>


            <div class="card">
                <div class="card-body">
                    <!-- Button trigger modal -->
  <!-- Modal -->
  <form action="{{route('dept.add')}}" method="post">
    @csrf
    <div class="form-group">
        <label for="deptname"> Department Name</label>
        <input type="text" name="department_name" placeholder="Enter The Department Name"
        id="deptname" class="form-control">

    </div>
    @if ($errors->any())
    <div class="alert alert-secondary" role="alert">
        <div class="alert-icon">
            <i class="flaticon-warning "></i>
        </div>
        <div class="alert-text">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    </div><br />
@endif
    <div class="d-flex justify-content-end">
        <button type="sumbit" class="btn btn-primary " data-toggle="modal" data-target="#exampleModal">
            Add Department
        </button>
    </div>
</form>



</div>
 </div>

</div>

         <!-- ============================================================== -->
         <!-- Recent comment and chats -->
         <!-- ============================================================== -->
       </div>

       <!-- ============================================================== -->
       <!-- End Container fluid  -->
       <!-- ============================================================== -->

@endsection
