<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            All Category
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        @if(session('success'))
                        <div class="alert alert-success alert-dismissable fade show" role="alert">
                            <strong>{{session('success')}}</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true"> &times;</span>
                            </button>
                        </div>
                        @endif
                    <div class="card-header">
                        All Category
                    </div>

                    <table class="table table-bordered">
                            <thead>
                                <tr>
                                <th scope="col">SL no</th>
                                <th scope="col">Category Name</th>
                                <th scope="col">User</th>
                                <th scope="col">Created_at</th>
                                <th scope="col">Action</th>
                                </tr>
                            </thead>
                             <tbody>
                                {{-- @php ( $i=1 ) --}}
                                @foreach($categories as $category)
                                <tr>
                                <th scope="row">{{ $categories->firstItem()+$loop->index }}</th>
                                <td>{{$category->category_name}}</td>
                                {{-- <td>{{$category->name}}</td> --}}
                                {{-- <td>{{$category->category_name}}</td> --}}
                                {{-- below using hasOne Relation--}}
                                <td>{{$category->who_is_user->name}}</td>
                                <td>
                                    @if($category->created_at == NULL)
                                    <span class="text-danger">No Date Set</span>
                                    @else
                                    {{Carbon\Carbon::Parse($category->created_at)->diffForHumans()}}
                                    @endif
                                  </td>
                                  <td>
                                    <a href="{{url('category/edit').'/'.$category->id}}" class="btn btn-info">Edit</a>
                                    <a href="{{url('softDelete/category').'/'.$category->id}}" class="btn btn-danger">Delete</a>
                                  </td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
               <div class="card-body">
                   {{ $categories->links() }}
            </div>

                </div>
            </div>


            <div class="col-md-4">
                <div class="card">
                <div class="card-header">
                    Add Category
                </div>
                <div class="card-body">
                <form action="{{route('store.category')}}" method="POST">
                    @csrf
                    <div class="form-group">
                      <label for="CategoryName">Category Name</label>
                      <input type="text" name="category_name"class="form-control" id="CategoryName" aria-describedby="CategoryName" placeholder="Enter Category Name">

                      @error('category_name')
                            <span class="text-danger">{{ $message }}</span>
                      @enderror

                    </div>


                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
                </div>

                  </div>
             </div>



             <div class="col-md-8">
                <div class="card">
                <div class="card-header">
                    All Category
                </div>

                <table class="table table-bordered">
                        <thead>
                            <tr>
                            <th scope="col">SL no</th>
                            <th scope="col">Category Name</th>
                            <th scope="col">User</th>
                            <th scope="col">Created_at</th>
                            <th scope="col">Action</th>
                            </tr>
                        </thead>
                         <tbody>
                            {{-- @php ( $i=1 ) --}}
                            @foreach($trashcat as $category)
                            <tr>
                            <th scope="row">{{ $categories->firstItem()+$loop->index }}</th>
                            <td>{{$category->category_name}}</td>
                            {{-- <td>{{$category->name}}</td> --}}
                            {{-- <td>{{$category->category_name}}</td> --}}
                            {{-- below using hasOne Relation--}}
                            <td>{{$category->who_is_user->name}}</td>
                            <td>
                                @if($category->created_at == NULL)
                                <span class="text-danger">No Date Set</span>
                                @else
                                {{Carbon\Carbon::Parse($category->created_at)->diffForHumans()}}
                                @endif
                              </td>
                              <td>
                                <a href="{{url('category/restore').'/'.$category->id}}" class="btn btn-info">Restore</a>
                                <a href="{{url('pdelete/category').'/'.$category->id}}" class="btn btn-danger">P Delete</a>
                              </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
           <div class="card-body">
               {{ $trashcat->links() }}
        </div>

            </div>
        </div>








 </div> {{-- Row Ending--}}

</div>
</div>

</x-app-layout>
