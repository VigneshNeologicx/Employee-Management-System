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
                   <li class="breadcrumb-item"><a href="/dashboard">Employee</a></li>
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

            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong> {{Session::get('success')}}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Attendence Listing </h5>
                <div class="table-responsive">
                  <table
                    class="table table-striped table-bordered">
                    <thead class="text-dark">
                      <tr>
                        <th>Employee ID</th>
                        <th>Name</th>
                        <th>Check_IN</th>
                        <th>Check_OUT</th>
                        <th>Status</th>
                        <th>Days Present</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>

{{--
                         @foreach($emp as $emps)
                        <tr>
                        <td>{{$emps->employee_id}}</td>
                        <td>{{$emps->name}}</td>
                        <td>{{$emps->email}}</td>
                        <td>{{$emps->phone}}</td>


                         <td>{{$role_id[0]}}</td>
                        <td>{{$position_id[0]}}</td>
                         <td>{{$emps->department_name}}</td>
                        <td>
                            <a href="{{url('dept/edit').'/'.$emps->employee_id}}" class="btn btn-info">Edit</a>
                            <a href="{{url('dept/delete').'/'.$emps->employee_id}}" onclick="return confirm('Are you sure you want to delete it ?')" class="btn btn-danger">Delete</a>
                        </td>
                        </tr>
                        @endforeach --}}
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="card-body">
                {{-- {{ $emps->links() }} --}}
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
