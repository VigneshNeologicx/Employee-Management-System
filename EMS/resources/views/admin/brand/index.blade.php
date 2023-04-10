<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            All Brand
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
                        All Brand
                    </div>

                    <table class="table table-bordered">
                            <thead>
                                <tr>
                                <th scope="col">SL no</th>
                                <th scope="col">Brand Name</th>
                                <th scope="col">Brand Image</th>
                                <th scope="col">Created_at</th>
                                <th scope="col">Action</th>
                                </tr>
                            </thead>
                             <tbody>
                                {{-- @php ( $i=1 ) --}}
                                @foreach($brands as $brand)
                                <tr>
                                <th scope="row">{{ $brands->firstItem()+$loop->index }}</th>
                                <td>{{$brand->brand_name}}</td>
                                {{-- <td>{{$category->name}}</td> --}}
                                {{-- <td>{{$category->category_name}}</td> --}}
                                {{-- below using hasOne Relation--}}
                                <td> <img src="{{asset($brand->brand_image)}}" alt="" class="img"style="width:70px; height:40px;" ></td>
                                <td>
                                    @if($brand->created_at == NULL)
                                    <span class="text-danger">No Date Set</span>
                                    @else
                                    {{Carbon\Carbon::Parse($brand->created_at)->diffForHumans()}}
                                    @endif
                                  </td>
                                  <td>
                                    <a href="{{url('brand/edit').'/'.$brand->id}}" class="btn btn-info">Edit</a>
                                    <a href="{{url('brand/delete').'/'.$brand->id}}" onclick="return confirm('Are you sure you want to delete it ?')" class="btn btn-danger">Delete</a>
                                  </td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
               <div class="card-body">
                   {{ $brands->links() }}
            </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                <div class="card-header">
                    Add Brand
                </div>
                <div class="card-body">
                <form action="{{route('store.brand')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                      <label for="BrandName">Brand Name</label>
                      <input type="text" name="brand_name"class="form-control" id="BrandName" aria-describedby="BrandName" placeholder="Enter Brand Name">
                      @error('brand_name')
                            <span class="text-danger">{{ $message }}</span>
                      @enderror
                    </div>

                    <div class="form-group">
                        <label for="BrandImage">Brand Image </label>
                        <input type="file" name="brand_image"  id="BrandImage" aria-describedby="BrandImage">

                        @error('brand_image')
                              <span class="text-danger">{{ $message }}</span>
                        @enderror
                      </div>
                    <button type="submit" class="btn btn-dark">Submit Brand</button>
                  </form>
                </div>

                  </div>
             </div>








 </div> {{-- Row Ending--}}

</div>
</div>

</x-app-layout>
