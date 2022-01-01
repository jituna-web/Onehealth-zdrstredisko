
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
@include('admin.css')
  </head>
  <body>
    <div class="container-scroller">

      <!-- partial:partials/_sidebar.html -->
     @include('admin.sidebar')
      <!-- partial -->
      @include('admin.navbar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">

            <div align="center" style="padding-top:100px;">
                <table>
                    <tr style="background-color: greenyellow;color:black;">
                        <td style="padding:10px;">Jméno lékaře</td>
                        <td style="padding:10px;">Telefon</td>
                        <td style="padding:10px;">Specializace</td>
                        <td style="padding:10px;">Číslo ordinace</td>
                        <td style="padding:10px;">Fotka</td>
                        <td style="padding:10px;">Smazat</td>
                        <td style="padding:10px;">Aktualizovat</td>
                    </tr>
                    @foreach ($data as $doctor )


                    <tr align="center" style="background-color: white;color:black;">
                        <td>{{$doctor->name}}</td>
                        <td>{{$doctor->phone}}</td>
                        <td>{{$doctor->speciality}}</td>
                        <td>{{$doctor->room}}</td>
                        <td><img height="100" width="100" src="doctorimage/{{$doctor->image}}" alt=""></td>
                        <td><a onclick="return confirm('Opravdu chctete lékaře smazat?')" class="btn btn-danger" href="{{url('deletedoctor',$doctor->id)}}">smazat</a></td>
                        <td><a class="btn btn-primary" href="{{url('updatedoctor',$doctor->id)}}">aktualizovat</a></td>
                    </tr>
                    @endforeach

            </div>


        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>

