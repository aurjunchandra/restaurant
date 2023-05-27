<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.admincss')
  </head>

  <body>
  <div class="container-scroller">
    @include('admin.navbar')
    <div class="container-fluid ">
    
    <div class="mt-5 px-5">
        <h1 > Admin Chefs</h1>
        <form class="forms-sample" action="{{url('/uploadchef')}}" method="post" enctype="multipart/form-data">
             @csrf 
            <div class="form-group">
                <label for="exampleInputName1">Name</label>
                    <input type="text" name="name" class="form-control font-light" id="exampleInputName1" placeholder="Title Name" required>
            </div>
            <div class="form-group">
                <label for="exampleInputName1">Speciality</label>
                    <input type="text" name="speciality" class="form-control" id="exampleInputName1" placeholder="Enter Price">
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
      <div class="container">
        <table class="table table-dark">
          <thead>
            <tr align="center">
                <th>Chef Name</th>
                <th>Chef Image</th>
                <th>Chef Speciality</th>
                <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($data as $data)
            <tr align="center">
              <td>{{$data->name}}</td>
              
              <td> <img src="/chefimage/{{$data->image}}" width="80" height="100"></td>
              <td>{{$data->speciality}}</td>
              <td> 
              <a class="btn btn-primary" href="{{url('/updatechef', $data->id)}}" role="button">Update</a>
              <a class="btn btn-danger" href="{{url('/deletechef', $data->id)}}" role="button">Delete</a>
              </td>
            </tr>
            @endforeach
          <tbody>
        </table>
      </div>

    @include('admin.adminscript')
  </body>
</html>