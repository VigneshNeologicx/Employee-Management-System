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
        <div class="modal-dialog">
          <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title" id="examplemodaltitle">Add Department</h4>
              <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <ul id="error_from_ajax">

                </ul>
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
            </div><br>
        @endif
     </div>
     {{-- Modal Body End Here --}}

            <!-- Modal footer -->
            <div class="modal-footer">
              <button id="clickclose" type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-danger add_department" >Add Department</button>
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
         @if(Session::has('success'))

            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong> {{Session::get('success')}}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>

        </div>
        @endif
<div class="col d-flex justify-content-end my-3 ml-3">
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
        Add Department
      </button>
</div>



{{-- Eliminated Card since Ajax and modals is used  --}}
{{-- <div class="card">
    <div class="card-body">
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
    </div><br>
@endif



    <div class="d-flex justify-content-end">
        <button type="sumbit" class="btn btn-primary">
            Add Department
        </button>
    </div>
   </form>
 </div>
</div>
--}}
{{-- End of Eliminated Card since Ajax and modals is used  --}}

 <div class="card">
    <div class="card-body">
      <h5 class="card-title">Department List</h5>
      <div class="table-responsive">
        <table id="tableid" class="table table-striped table-bordered">
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
                  <a href="{{url('/admin/dept/edit').'/'.$depts->department_id}}" class="btn btn-info">Edit</a>
                  <a href="{{url('/admin/dept/delete').'/'.$depts->department_id}}" onclick="return confirm('Are you sure you want to delete it ?')" class="btn btn-danger">Delete</a>
              </td>
              </tr>
              @endforeach
          </tbody>
        </table>
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

@section('scripts')
<link href="https://cdn.datatables.net/v/bs4/jq-3.6.0/dt-1.13.4/datatables.min.css" rel="stylesheet"/>

<script src="https://cdn.datatables.net/v/bs4/jq-3.6.0/dt-1.13.4/datatables.min.js"></script>

<script>
  $(document).ready(function(){
    $("#tableid").DataTable({});
});
</script>
<script>
  $(document).ready(function(){
    $(document).on('click','.add_department',function(e){
        e.preventDefault();
        // console.log("Hello it is working");
        var data ={
            '_token':'{{ csrf_token() }}',
            'department_name' : $('#deptname').val()
        }
        // console.log("works"+data);
            $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                     }
            });
        $.ajax({
            type:"POST",
            url:"/admin/dept/add",
            data: data,
            dataType : "json",
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
