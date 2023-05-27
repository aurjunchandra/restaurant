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
                    <h4 class="card-title">Reservation Table</h4>
                    <p class="card-description"> 
                    </p>
                    
                    <table class="table table-dark">
                      <thead>
                        <tr>
                          <th> Name</th>
                          <th> Email</th>
                          <th> Phone </th>
                          <th> Members</th>
                          <th> Date </th>
                          <th> Time </th>                          
                          <th> Message </th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($data as $data)
                        <tr >

                          <td> {{$data->name}} </td>
                          <td>  {{$data->email}} </td>
                          <td>  {{$data->phone}} </td>
                          <td>  {{$data->guest}} </td>
                          <td>  {{$data->date}} </td>
                          <td>  {{$data->time}} </td>                          
                          <td>  {{$data->message}} </td>
                         
                         
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