<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <style type="text/css">
    label{
        display: inline-block;
        width: 200px;
    }
    .container-fluid{
        background: white;
        color:black;
    }

    </style>
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


        <div class="container" align="center" style="padding-top: 100px;">

            @if (session()->has('message'))

            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert"></button>
                {{session()->get('message')}}
            </div>

            @endif

            <form action="{{url('upload_doctor')}}" method="POST" enctype="multipart/form-data">

                @csrf

                <div style="padding: 15px;">
                    <label>Jméno lékaře</label>
                    <input type="text" style="color:black;" name="name" placeholder="Jméno lékaře" required>
                </div>
                <div style="padding: 15px;">
                    <label>Telefon</label>
                    <input type="text" style="color:black;" name="number" placeholder="Telefon" required>
                </div>
                <div style="padding: 15px;">
                    <label>Specializace</label>
                    <select name="speciality" style="color:black;width:225px;" required>
                        <option>--vybrat--</option>
                        <option value="dermatologie">Dermatologie</option>
                        <option value="kardiologie">Kargiologie</option>
                        <option value="zubní">Zubní</option>
                        <option value="gynekologie">Gynekologie</option>
                        <option value="neurologie">Neurologie</option>
                    </select>
                </div>
                <div style="padding: 15px;">
                    <label>Číslo ordinace</label>
                    <input type="text" style="color:black;" name="room" placeholder="Číslo ordinace" required>
                </div>
                <div style="padding: 15px;">
                    <label>Fotka lékaře</label>
                   <input type="file" name="file" style="width:225px;" required>
                </div>
                <div style="padding: 15px;">

                   <input type="submit" class="btn btn-success" style="color:black;">
                </div>
            </form>
        </div>




        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>
