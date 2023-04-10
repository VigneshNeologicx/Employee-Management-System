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


 {{-- Modal Inject Anywhere and call via Id using Jquery and Ajax --}}
 <div class="modal" tabindex="-1" id="myModal" aria-labelledby="examplemodaltitle">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title" id="examplemodaltitle">Add Employee</h4>
          <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
            <ul id="error_from_ajax"></ul>

            <div class="form-group">
                <label for="empname"> Employee Name</label>
                <input type="text" name="name" placeholder="Enter The Employee Name"
                id="empname" class="form-control">
          </div>
          <div class="form-group">
              <label for="empemail"> Employee Email</label>
              <input type="email" name="email" placeholder="Enter The Employee Email"
              id="empemail" class="form-control">
          </div>

          <div class="form-group">
          <label for="empphone"> Employee Phone</label>
          <input type="text" name="phone" placeholder="Enter The Employee Phone"
          id="empphone" class="form-control">
          </div>

          <div class="form-group" id='CalendarDateTime'>
            <label for="empphone"> DOJ </label>
            <input type='text' class="form-control" />
            <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
            </div>


          <div class="form-group">
              <label for="">Department</label>
              <select name="dept_id" id="dept_id"class="form-select" aria-label="Default select example">
                  <option selected>Open this select menu</option>
                  @foreach($departments as $dept)
                  <option value="{{$dept->department_id}}">{{$dept->department_name}}</option>
                @endforeach
              </select>
          </div>

          <div class="form-group">
              <label for="selectrole">Role </label>
              <select name="role_id" id="role_id"class="form-select" aria-label="Default select example">
                  <option selected>Open this select menu</option>
                  @foreach($roles as $role)
                  <option value="{{$role->id}}">{{$role->name}}</option>
                @endforeach
              </select>
          </div>

          <div class="form-group">
              <label for="">Position </label>
              <select name="position_id" id="position_id" class="form-select" aria-label="Default select example">
                  <option selected>Open this select menu</option>
                @foreach($positions as $position)
                  <option value="{{$position->id}}">{{$position->name}}</option>
                @endforeach
              </select>
          </div>


         </div>
 {{-- Modal Body End Here --}}

        <!-- Modal footer -->
        <div class="modal-footer">
          <button id="clickclose" type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-danger add_employee" >Add Employee </button>
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
        <div class="row ">
             <div class="col-12">
                <div id="success_message">

                </div>
             </div>
        <div class="col d-flex justify-content-end my-3 ml-3">
            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal">
                Add Employee
              </button>
        </div>

{{-- Eliminated column Card  since Ajax and modals is used  --}}
        {{-- <div class="col-8 mx-auto ">
            <div class="card">
                <div class="card-header bg-danger text-light">New Staff</div>
                <div class="card-body">
                    <!-- Button trigger modal -->
                    <!-- Modal -->

        <form action="{{route('emp.add')}}" method="post">
                        @csrf

            <div class="form-group">
                  <label for="empname"> Employee Name</label>
                  <input type="text" name="name" placeholder="Enter The Employee Name"
                  id="empname" class="form-control">
            </div>
            <div class="form-group">
                <label for="empemail"> Employee Email</label>
                <input type="email" name="email" placeholder="Enter The Employee Email"
                id="empemail" class="form-control">
            </div>

            <div class="form-group">
            <label for="empphone"> Employee Phone</label>
            <input type="text" name="phone" placeholder="Enter The Employee Phone"
            id="empphone" class="form-control">
            </div>

            <div class="form-group">
                <label for="">Department</label>
                <select name="dept_id"class="form-select" aria-label="Default select example">
                    <option selected>Open this select menu</option>
                    @foreach($departments as $dept)
                    <option value="{{$dept->department_id}}">{{$dept->department_name}}</option>
                  @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="selectrole">Role </label>
                <select name="role_id"class="form-select" aria-label="Default select example">
                    <option selected>Open this select menu</option>
                    @foreach($roles as $role)
                    <option value="{{$role->id}}">{{$role->name}}</option>
                  @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="">Position </label>
                <select name="position_id" class="form-select" aria-label="Default select example">
                    <option selected>Open this select menu</option>
                  @foreach($positions as $position)
                    <option value="{{$position->id}}">{{$position->name}}</option>
                  @endforeach
                </select>
            </div>

              <div class="d-flex justify-content-end">
                  <button type="sumbit" class="btn btn-primary " data-toggle="modal" data-target="#exampleModal">
                      Add Employee
                  </button>
              </div>
              <br><br>
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
                </div><br>
            </form>
          @endif
              </div>
            </div>
        </div> --}}
{{-- End of Eliminated column Card  since Ajax and modals is used  --}}


            <div class="col-12">
            <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Employee Listing</h5>
                  <div class="table-responsive">
                    <table id="tableid" class="table table-striped table-bordered">
                      <thead class="text-dark">
                        <tr>
                          <th>Employee ID</th>
                          <th>Name</th>
                          <th>email</th>
                          <th>phone</th>
                          <th>Role</th>
                          <th>Position</th>
                          <th>Department</th>
                          <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>


                          @foreach($emp as $emps)
                          <tr>
                          <td>{{$emps->employee_id}}</td>
                          <td>{{$emps->name}}</td>
                          <td>{{$emps->email}}</td>
                          <td>{{$emps->phone}}</td>
                          <?php $role_id= DB::table('roles')->where('id', $emps->role_id)->pluck('name');
                                $position_id= DB::table('positions')->where('id', $emps->position_id)->pluck('name');
                         ?>
                            <td>{{$emps->Department->department_name}}</td>

                           <td>
                              <a href="{{url('employee/edit').'/'.$emps->employee_id}}"><i class="mdi mdi-table-edit"> </i></a>
                              <a href="{{url('employee/delete').'/'.$emps->employee_id}}" onclick="return confirm('Are you sure you want to delete it ?')" ><i class="mdi mdi-delete"></i></a>
                          </td>
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





        </div>
</div>

{{-- End Row --}}
       <!-- ============================================================== -->
       <!-- End Container fluid  -->
       <!-- ============================================================== -->

@endsection




@section('scripts')

<script src="https://cdn.datatables.net/v/bs4/jq-3.6.0/dt-1.13.4/datatables.min.js"></script>


<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
       $('#CalendarDateTime').datepicker({

            dateFormat:"yy-mm-dd",
            changeMonth: true,  // not needed
            changeYear: true

       });

    });


</script>

<script>
    $(document).ready(function(){
      $("#tableid").DataTable({});
  });
  </script>

  <script>
  $(document).ready(function(){
    $(document).on('click','.add_employee',function(e){
        e.preventDefault();
        // alert("Is it you ?");
        // console.log("Hello it is working");
        var data ={
            'name' : $('#empname').val(),
            'email' : $('#empemail').val(),
            'phone' : $('#empphone').val(),
            'dept_id' : $('#dept_id').val(),
            'role_id' : $('#role_id').val(),
            'position_id' : $('#position_id').val()
        }

         console.log("works"+data);
            $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                     }
            });
        $.ajax({
            data: data,
            dataType: "json",
            type:"POST",
            url:"/employee/add_staff",
            success: function(response){
                console.log(response);
                if(response.status==400){
                    $('#error_from_ajax').html("");
                    $('#error_from_ajax').addClass('alert alert-danger');
                    $.each(response.errors,function(key,err_values){
                        $('#error_from_ajax').append('<li>'+err_values+'</li>');
                    });
                }
                else{
                    $('#success_message').html("");
                    $('#success_message').addClass('alert alert-success');
                    $('#success_message').text(response.message);
                    $('#success_message').delay(2000).fadeOut('slow');
                    // $('#myModal').find('input').val("");
                    $('#clickclose').click();
                    $(document).ajaxStop(function(){
                    window.location.reload();
                    });
                }
            }

        });

    });

  });

</script>

@endsection
