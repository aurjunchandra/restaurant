

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
    <div class="container-fluid mt-5 px-5">

    

    <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Customer Orders</h4>

                <form action="{{url('/search')}}" method="get">

                @csrf
                    <div class="col-md-12 my-2">
                        <input type="text" name="search" class="form-control" >
                    </div>
                    <div align="center ">
                        <input type="submit" value="Search" class="btn btn-gradient-primary me-2 btn-info">  
                    </div>
                </form>

                    <p class="card-description"> 
                    </p>
                    
                    <table class="table table-dark">
                      <thead>
                        <tr>
                          <th> Name</th>
                          <th> Phone</th>
                          <th> Address </th>
                          <th> Foodname</th>
                          <th> Price </th>
                          <th> Quantity </th>                          
                          <th> Total Price </th>
                        </tr>
                      </thead>
                      <tbody>

                      @foreach($data as $data)

                      <tr>
                        <td> {{$data->name}}</td>
                        <td>{{$data->phone}} </td>
                        <td>{{$data->address}} </td>
                        <td> {{$data->foodname}}</td>
                        <td>{{$data->price}}$ </td>
                        <td>{{$data->quantity}} </td>
                        <td> {{$data->price * $data->quantity}}$</td>
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