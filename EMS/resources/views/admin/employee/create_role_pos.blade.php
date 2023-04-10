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
<div class="modal" tabindex="-1" id="myModalrole" aria-labelledby="examplemodaltitler">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title" id="examplemodaltitler">Add Role</h4>
          <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
            <ul id="error_from_ajax">

            </ul>

            <div class="form-group">
                <label for="emprole"> Role </label>
                <input type="text" name="name" placeholder="Enter The New Role"
                id="emprole" class="form-control">
          </div>


         </div>
 {{-- Modal Body End Here --}}

        <!-- Modal footer -->
        <div class="modal-footer">
          <button id="clickclose" type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-danger add_role" >Add Role </button>
        </div>

      </div>
    </div>
  </div>
  {{-- End Modal Inject Anywhere and call via Id using Jquery and Ajax --}}



{{-- Modal 2 Position Inject Anywhere and call via Id using Jquery and Ajax --}}
<div class="modal" tabindex="-1" id="myModalposition" aria-labelledby="examplemodaltitlep">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title" id="examplemodaltitlep">Add Position</h4>
          <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
            <ul id="error_from_ajax1">

            </ul>

          <div class="form-group">
              <label for="empposition"> Position </label>
              <input type="text" name="position" placeholder="Enter The New Position"
              id="empposition" class="form-control">
          </div>

         </div>
 {{-- Modal Body End Here --}}

        <!-- Modal footer -->
        <div class="modal-footer">
          <button id="clickclose2" type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-danger add_position" >Add Position </button>
        </div>

      </div>
    </div>
  </div>
  {{-- End Modal 2 - position Inject Anywhere and call via Id using Jquery and Ajax --}}




       <!-- ============================================================== -->
       <!-- Container fluid  -->
       <!-- ============================================================== -->
       <div class="container-fluid" style="min-height:1300px">


        <div class="row">
            <div class="col">
                @if(Session::has('success'))
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                  <strong> {{Session::get('success')}}</strong>
                 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
            </button>
         </div>
@endif
            </div>
        </div>

        <div class="row ">
             <div class="col-9">
                <div id="success_message">

                </div>
             </div>
        <div class="col d-flex justify-content-end my-3 ">
            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModalrole">
                Add Role
              </button>
        </div>
        <div class="col d-flex justify-content-end my-3 ">
            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModalposition">
                Add Position
              </button>
        </div>
    </div>
        <!-- ============================================================== -->
         <!-- Sales Cards  -->
         <!-- ============================================================== -->
        {{-- <div class="row">

<form action="{{route('insert.role.pos')}}" method="post">
    @csrf
        <div class="col-6">
        <div class="card">
        <div class="card-body">
                              <!-- Button trigger modal -->
            <!-- Modal -->

            <div class="form-group">
                  <label for="emprole"> Role </label>
                  <input type="text" name="rol" placeholder="Enter The New Role"
                  id="emprole" class="form-control">
            </div>
            <div class="form-group">
                <label for="empposition"> Position </label>
                <input type="text" name="pos" placeholder="Enter The New Position"
                id="empposition" class="form-control">
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
              </div><br/>
          @endif
              <div class="d-flex justify-content-end">
                  <button type="sumbit" class="btn btn-primary " data-toggle="modal" data-target="#exampleModal">
                      Add Role & Positions
                  </button>
              </div>

              </div>
              </div>
              </div>
</form>
</div> --}}


<div class="row">
    <div class="col-6">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title"> Positions Available</h5>
            <div class="table-responsive">
              <table class="table table-striped table-bordered">
                <thead class="text-dark">
                  <tr>
                    <th>Positions</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                       @foreach($positions as $position)
                       <tr>
                           <td> {{$position->name}} </td>
                           <td><a href="{{url('delete/position').'/'.$position->id}}" class="btn btn-info" >Delete</a></td>
                        </tr>
                 @endforeach
                </tbody>
              </table>
            </div>
           </div>
          </div>
        </div>

<div class="col-6">
<div class="card">
<div class="card-body">
    <h5 class="card-title"> Roles Available</h5>
    <div class="table-responsive">
      <table class="table table-striped table-bordered">
        <thead class="text-dark">
          <tr>
            <th>Roles</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
            @foreach($roles as $role)
            <tr>
              <td> {{$role->name}} </td>
              <td><a href="{{url('delete/role').'/'.$role->id}}" class="btn btn-info" >Delete</a></td>
            </tr>
               @endforeach
        </tbody>
      </table>
    </div>

     </div>
     </div>

         </div>

             <div class="col-12">
                <div class="card">
                <div class="card-body">
                    <h5 class="card-title"> Departments Available</h5>
                    <div class="table-responsive">
                      <table class="table table-striped table-bordered">
                        <thead class="text-dark">
                          <tr>
                            <th>Department</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach($departments as $dept)
                           <tr>
                            <td> {{$dept->department_name}} </td>
                            </tr>
                               @endforeach

                        </tbody>
                      </table>
                       </div>
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
<script>
   $(document).ready(function(){
    $(document).on('click','.add_role',function(e){
        e.preventDefault();
        // console.log("Hello it is working");
        var data = {
            'name' : $('#emprole').val()
    };

        console.log(data);
        // console.log("works"+data);
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });


        $.ajax({
            url:"/employee/insert_role",
            type:"post",
            data: data,
            dataType: "json",
            success: function(response){
                console.log(response);
                if(response.status==400){
                    console.log("I'm Here");
                    $('#error_from_ajax').html("");
                    $('#error_from_ajax').addClass('alert alert-danger');
                    $.each(response.errors,function(key,err_values){
                        $('#error_from_ajax').append('<li>'+err_values+'</li>');
                    });
                }
                else{
                    console.log("Why ?");
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

            // errors: function (jqXHR, textStatus, errorThrown) {
            //       if (jqXHR.status == 500) {
            //           alert('Internal error: ' + jqXHR.responseText);
            //       } else {
            //           alert('Unexpected error.');
            //       }
            //   }

    });

  });
});

</script>


<script>
    $(document).ready(function(){
     $(document).on('click','.add_position',function(e){
         e.preventDefault();
         // console.log("Hello it is working");
         var data ={
             'name' : $('#empposition').val()
         };
             console.log(data);
         // console.log("works"+data);
             $.ajaxSetup({
             headers: {
                 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                      }
             });

         $.ajax({
             url:"/employee/insert_position",
             type:"post",
             data: data,
             dataType : "json",
             success: function(response){
                 console.log(response);
                 if(response.status==400){
                     console.log("I'm Here");
                     $('#error_from_ajax1').html("");
                     $('#error_from_ajax1').addClass('alert alert-danger');
                     $.each(response.errors,function(key,err_values){
                         $('#error_from_ajax1').append('<li>'+err_values+'</li>');
                     });
                 }
                 else{
                     console.log("Why ?");
                     $('#success_message').html("");
                     $('#success_message').addClass('alert alert-success');
                     $('#success_message').text(response.message);
                     $('#success_message').delay(2000).fadeOut('slow');
                     $('#clickclose2').click();
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
