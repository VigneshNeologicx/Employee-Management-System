<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edit Brand
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="container">
            <div class="row">

            <div class="col-md-8">
                <div class="card">
                <div class="card-header">
                    Edit Brand
                </div>
                <div class="card-body">
                <form action="{{url('brand/update/'.$brands->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="old_image"value="{{asset($brands->brand_image)}}">
                    <div class="form-group">
                      <label for="BrandName">Update Brand Name</label>
                      <input type="text" name="brand_name"class="form-control" id="BrandName" aria-describedby="BrandName" placeholder="Enter Brand Name"
                        value="{{$brands->brand_name}}">
                        @error('brand_name')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="BrandImage">Update Brand Image</label>
                        <br>

                        <input type="file" name="brand_image"  id="BrandImage" aria-describedby="BrandImage" placeholder="Enter Brand image"
                          value="{{$brands->brand_image}}"><br>
                        <div class="form-group">
                            <br>
                            <img src="{{asset($brands->brand_image)}}" alt="" style="width:100px; height:100px;">
                        </div>
                          @error('brand_image')
                          <span class="text-danger">{{$message}}</span>
                          @enderror
                      </div>
                    <button type="submit" class="btn btn-primary">Update Now</button>
                  </form>
                </div>

        </div>
     </div>



    </div>
  </div>

</div>
</x-app-layout>
