<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
    @include('admin.admincss')
  </head>

  <body>
  <div class="container-scroller">
    @include('admin.navbar')

    <div class="container-fluid ">
    
    <div class="mt-5 px-5">
        <h4>Enter Food Menu</h4>
        <form class="forms-sample" action="{{url('/update',$data->id)}}" method="post" enctype="multipart/form-data">
             @csrf 
            <div class="form-group">
                <label for="exampleInputName1">Title</label>
                    <input type="text" name="title" value="{{$data->title}}" class="form-control font-light" id="exampleInputName1" placeholder="Title Name" required>
            </div>
            <div class="form-group">
                <label for="exampleInputName1">Price</label>
                    <input type="text" name="price" value="{{$data->price}}" class="form-control" id="exampleInputName1" placeholder="Enter Price">
            </div>

            

            <div class="form-group">
                <label for="exampleInputName1">Description</label>
                    <input type="text" name="description" value="{{$data->description}}" class="form-control" id="exampleInputName1" placeholder="Description" required >
            </div>
                       
            <div class="form-group">
                <label for="exampleInputName1">Old Image</label>
                    <img width="100" height="100" src="/foodimage/{{$data->image}}">
            </div>

            <div class="form-group">
                <label for="exampleInputName1">Image</label>
                    <input type="file" name="image" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-gradient-primary me-2 btn-info">  Save  </button>               
        </form>

    </div>
    </div>
    </div>
    @include('admin.adminscript')
  </body>
</html>