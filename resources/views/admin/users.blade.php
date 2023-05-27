


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

    
        <div style="position:relative; top:60px; right:-60px">
            <table bgcolor="grey" border="2px" >
                <tr >
                    <th style="padding-left:40px">Name</th>
                    <th style="padding-left:40px">Email </th>
                    <th style="padding-left:40px">Action</th>
                    
                </tr>

                @foreach($data as $data)
                <tr align="center">
                    <td style="">{{$data->name}} </td>
                    <td style="">{{$data->email}}</td>

                    @if($data->usertype=="0")
                    <td style=""> <a href="{{url('/deleteuser',$data->id)}}">Delete</a></td>
                    @else
                    <td><a >Not Allowd</a></td>
                    @endif
                </tr>
                @endforeach

            </table>
        </div>

    </div>

    @include('admin.adminscript')
  </body>
</html>

