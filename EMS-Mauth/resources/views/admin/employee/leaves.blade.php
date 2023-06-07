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
                   <li class="breadcrumb-item"><a href="/dashboard">Leave Request Listing</a></li>
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


       {{-- Modal Inject Anywhere and call via Id using Jquery and Ajax --}}
 <div class="modal" tabindex="-1" id="myModal" aria-labelledby="examplemodaltitle">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title" id="examplemodaltitle">Request Leave</h4>
          <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
            <ul id="error_from_ajax"></ul>

{{--
          <div class="form-group" id='CalendarDateTime'>
            <label for="empdoj"> DOJ </label>
            <input type='text' class="form-control" />
            <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
            </div> --}}


          <div class="form-group">
              <label for="">Employee</label>
              <select name="employee_id" id="emp_id"class="form-select" aria-label="Default select example">
                  <option selected> </option>
                   @foreach($emps as $emp)
                  <option value="{{$emp->employee_id}}">{{$emp->name}}</option>
                @endforeach
              </select>
          </div>



            <div class="form-group">
                <label for="selectsdate">Start-Date</label>
                <input type="text"  id="start-date" name="start-date" class="form-control" placeholder="Please Select the Start Date">
            </div>

            <div class="form-group">
                <label for="selectsdate">End-Date</label>
                <input type="text"  id="end-date" name="end-date" class="form-control" placeholder="Please Select the End Date">
            </div>



         </div>
 {{-- Modal Body End Here --}}

 <!-- Modal footer -->
 <div class="modal-footer">
    <button id="clickcloserl" type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
    <button type="button" class="btn btn-danger add_employee" >Request Leave </button>
  </div>

</div>
</div>
</div>
{{-- End Modal Inject Anywhere and call via Id using Jquery and Ajax --}}








       <!-- ============================================================== -->
       <!-- Container fluid  -->
       <!-- ============================================================== -->

       <div class="container-fluid" style="min-height:1300px">

        <!-- ============================================================== -->
         <!-- Sales Cards  -->
         <!-- ============================================================== -->
         <div class="row">
          <div class="col-12">

               <div id="success_message">

               </div>
           <div class="col d-flex justify-content-end my-3 ml-3">
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal">
                    Request Leave
                    </button>
                </div>


            @if(Auth::user()->id==1)
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Leave Request Listing </h5>
                <div class="table-responsive">
                  <table
                    class="table table-striped table-bordered">
                    <thead class="text-dark">
                      <tr>
                        <th>Employee ID</th>
                        <th>Name</th>
                        <th>Start-Date</th>
                        <th>End-Date</th>
                        <th>Status</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>

                   @foreach($emps as $emp)
                        <tr>
                        <td>{{$emp->employee_id}}</td>
                        <td>{{$emp->name}}</td>
                        <td>{{$emp->email}}</td>
                        <td>{{$emp->phone}}</td>
{{--
                         <td>{{$role_id[0]}}</td>
                        <td>{{$position_id[0]}}</td>
                         <td>{{$emps->department_name}}</td>
                        <td>
                            <a href="{{url('dept/edit').'/'.$emps->employee_id}}" class="btn btn-info">Edit</a>
                            <a href="{{url('dept/delete').'/'.$emps->employee_id}}" onclick="return confirm('Are you sure you want to delete it ?')" class="btn btn-danger">Delete</a>
                        </td> --}}
                        </tr>
                        @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="card-body">
                {{-- {{ $emps->links() }} --}}
            </div>
            </div>
            @endif
        </div>

         <!-- ============================================================== -->
         <!-- Recent comment and chats -->
         <!-- ============================================================== -->
    </div>
       <!-- ============================================================== -->
       <!-- End Container fluid  -->
       <!-- ============================================================== -->

@endsection


@section('scripts')

<script src="https://cdn.datatables.net/v/bs4/jq-3.6.0/dt-1.13.4/datatables.min.js"></script>

<link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>

<script>
$( function() {
    $( "#start-date ,#end-date" ).datepicker();
  });
</script>

@endsection
