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

    <div class="container-fluid ">
    
    <div class="mt-5 px-5">
        <h1 > Update Chefs</h1>
        <form class="forms-sample" action="{{url('/updatefoodchef', $data->id)}}" method="post" enctype="multipart/form-data">
             @csrf 
            <div class="form-group">
                <label for="exampleInputName1">Name</label>
                    <input type="text" name="name"  value = "{{$data->name}}" class="form-control font-light" id="exampleInputName1" placeholder="Title Name" required>
            </div>
            <div class="form-group">
                <label for="exampleInputName1">Speciality</label>
                    <input type="text" name="speciality" value = "{{$data->speciality}}" class="form-control" id="exampleInputName1" placeholder="Enter Price">
            </div>

            <div class="form-group">
                <label for="exampleInputName1"> Old Image</label>
                    <img  height="100" width="100" src="/chefimage/{{$data->image}}">
            </div>

            <div class="form-group">
                <label for="exampleInputName1"> New Image</label>
                    <input type="file" name="image" class="form-control" required>
            </div>


            <button type="submit" class="btn btn-gradient-primary me-2 btn-info">  Save  </button>               
        </form>
      </div>
    </div>

   </div>
    </div>
    </div>
    @include('admin.adminscript')
  </body>
</html>