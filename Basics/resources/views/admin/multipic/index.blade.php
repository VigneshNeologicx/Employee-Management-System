<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">

        </h2>
    </x-slot>

    <div class="py-12">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="card-group">
                       @foreach($images as $multi)
                       <div class="col-md-4 my-5">
                        <div class="card">
                            <img src="{{asset($multi->image)}}" alt="" class="img"style="width:100%;height:300px;">
                        </div>
                    </div>
                        @endforeach
                    </div>

                </div>

                <div class="col-md-4">
                <div class="card">
                <div class="card-header">
                    Add Multiple Images
                </div>
                <div class="card-body">
                <form action="{{route('store.image')}}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label for="MultiImages">Upload Images </label>
                        <input type="file" name="image[]"  id="MultiImages" aria-describedby="MultiImages" multiple="">

                        @error('image')
                              <span class="text-danger">{{ $message }}</span>
                        @enderror
                      </div>
                    <button type="submit" class="btn btn-dark">Submit Images</button>
                  </form>
                </div>

                  </div>
             </div>








 </div> {{-- Row Ending--}}

</div>
</div>

</x-app-layout>
