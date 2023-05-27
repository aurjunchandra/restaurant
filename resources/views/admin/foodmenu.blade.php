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
        <h4>Enter Food Menu</h4>
        <form class="forms-sample" action="{{url('/uploadfood')}}" method="post" enctype="multipart/form-data">
             @csrf 
            <div class="form-group">
                <label for="exampleInputName1">Title</label>
                    <input type="text" name="title" class="form-control font-light" id="exampleInputName1" placeholder="Title Name" required>
            </div>
            <div class="form-group">
                <label for="exampleInputName1">Price</label>
                    <input type="text" name="price" class="form-control" id="exampleInputName1" placeholder="Enter Price">
            </div>

            <div class="form-group">
                <label for="exampleInputName1">Image</label>
                    <input type="file" name="image" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="exampleInputName1">Description</label>
                    <input type="text" name="description" class="form-control" id="exampleInputName1" placeholder="Description" required >
            </div>
                       

            <button type="submit" class="btn btn-gradient-primary me-2 btn-info">  Save  </button>               
        </form>

    </div>
    </div>


    <div class="container-fluid mt-5 px-5">
        <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Food Table</h4>
                    <p class="card-description"> 
                    </p>
                    
                    <table class="table table-dark">
                      <thead>
                        <tr>
                          <th> Food Name</th>
                          <th> Price</th>
                          <th> Description </th>
                          <th> Image </th>
                          <th> Action </th>
                          <th> Action </th>
                        </tr>
                      </thead>
                      <tbody>

                        @foreach($data as $data)
                        <tr >

                          <td> {{$data->title}} </td>
                          <td>  {{$data->price}} </td>
                          <td>  {{$data->description}} </td>
                          <td>  <img src="/foodimage/{{$data->image}}"> </td>
                          <td> <a href="{{url('/deletemenu', $data->id)}}">Delete </td>
                          <td> <a href="{{url('/updateview', $data->id)}}">Update </td>
                        </tr>

                        @endforeach
                        
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
        </div>
    
   
</div>
    @include('admin.adminscript')

  </body>
</html>