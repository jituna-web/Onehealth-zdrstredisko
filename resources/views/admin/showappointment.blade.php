
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
            <div align="center" style="padding-top: 100px;">
                <table>
                    <tr style="background-color: greenyellow;color:black;">
                        <td style="padding:10px;">Jméno klienta</td>
                        <td style="padding:10px;">Email</td>
                        <td style="padding:10px;">Telefon</td>
                        <td style="padding:10px;">Jméno lékaře</td>
                        <td style="padding:10px;">Datum</td>
                        <td style="padding:10px;">Zpráva</td>
                        <td style="padding:10px;">Stav</td>
                        <td style="padding:10px;">Schválení</td>
                        <td style="padding:10px;">Uzavření</td>
                    </tr>
                    @foreach ($data as $appoit )


                    <tr align="center" style="background-color: white;color:black;">
                        <td >{{$appoit->name}}</td>
                        <td >{{$appoit->email}}</td>
                        <td >{{$appoit->phone}}</td>
                        <td >{{$appoit->doctor}}</td>
                        <td >{{$appoit->date}}</td>
                        <td >{{$appoit->message}}</td>
                        <td >{{$appoit->status}}</td>
                        <td><a class="btn btn-success" href="{{url('approved', $appoit->id)}}">schválit</a></td>
                        <td><a class="btn btn-danger" href="{{url('canceled', $appoit->id)}}">uzavřít</a></td>
                    </tr>
                    @endforeach
                </table>
            </div>




        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>

