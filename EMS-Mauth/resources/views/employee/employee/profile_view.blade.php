@extends('employee.admin-master')

@section('employee')
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
                   <li class="breadcrumb-item"><a href="/employee/dashboard">Employee</a></li>
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
                    <h5 class="card-title">Profile View</h5>
                    <div class="table-responsive">
                      <table
                        class="table table-striped table-bordered">
                        <thead class="text-dark">
                          <tr>
                            <th>employee ID</th>
                            <th>employee Name</th>
                          </tr>
                        </thead>
                        <tbody>


                            @foreach($employee as $emp)
                            <tr>
                            <td>{{$emp->id}}</td>
                            <td>{{$emp->name}}</td>

                            </tr>
                            @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
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
