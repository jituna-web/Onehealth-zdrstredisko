<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>Moje požadavky</title>

  <link rel="stylesheet" href="../assets/css/maicons.css">

  <link rel="stylesheet" href="../assets/css/bootstrap.css">

  <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="../assets/css/theme.css">
</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <header>
    <div class="topbar">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 text-sm">
            <div class="site-info">
              <a href="#"><span class="mai-call text-primary"></span> +420 123 456 789</a>
              <span class="divider">|</span>
              <a href="#"><span class="mai-mail text-primary"></span> mail@onehealth.cz</a>
            </div>
          </div>
          <div class="col-sm-4 text-right text-sm">
            <div class="social-mini-button">
              <a href="#"><span class="mai-logo-facebook-f"></span></a>
              <a href="#"><span class="mai-logo-twitter"></span></a>
              <a href="#"><span class="mai-logo-dribbble"></span></a>
              <a href="#"><span class="mai-logo-instagram"></span></a>
            </div>
          </div>
        </div> <!-- .row -->
      </div> <!-- .container -->
    </div> <!-- .topbar -->

    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="#"><span class="text-primary">One</span>-Health</a>

        <form action="#">
          <div class="input-group input-navbar">
            <div class="input-group-prepend">
              <span class="input-group-text" id="icon-addon1"><span class="mai-search"></span></span>
            </div>
            <input type="text" class="form-control" placeholder="hledat.." aria-label="Username" aria-describedby="icon-addon1">
          </div>
        </form>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupport">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.html">Domů</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.html">O nás</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="doctors.html">Lékaři</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="blog.html">Novinky</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.html">Kontakt</a>
            </li>
            @if(Route::has('login'))

            @auth

            <li class="nav-item">
                <a class="nav-link" style="background-color: greenyellow;border-radius:5px;" href="{{url('myappointment')}}">Moje požadavky</a>
              </li>
            <x-app-layout>

            </x-app-layout>

            @else
            <li class="nav-item">
              <a class="btn btn-primary ml-lg-3" href="{{route('login')}}">Přihlášení</a>
            </li>
            <li class="nav-item">
                <a class="btn btn-primary ml-lg-3" href="{{route('register')}}">Registrace</a>
              </li>
              @endauth
              @endif
          </ul>
        </div> <!-- .navbar-collapse -->
      </div> <!-- .container -->
    </nav>
  </header>

    <div align="center" style="padding: 70px;">
        <table >
            <tr style="background: greenyellow;">
                <th style="padding: 10px; font-size:20px;">Jméno lékaře</th>
                <th style="padding: 10px; font-size:20px;">Datum</th>
                <th style="padding: 10px; font-size:20px;">Zpráva</th>
                <th style="padding: 10px; font-size:20px;">Stav žádosti</th>
                <th style="padding: 10px; font-size:20px;">Uzavření žádosti</th>
            </tr>

            @foreach ($appoit as $appoits)


            <tr style="background-color: black;" align="center">
                <td style="padding: 10px; color:white;">{{$appoits->doctor}}</td>
                <td style="padding: 10px; color:white;">{{$appoits->date}}</td>
                <td style="padding: 10px; color:white;">{{$appoits->message}}</td>
                <td style="padding: 10px; color:white;">{{$appoits->status}}</td>
                <td><a class="btn btn-danger" onclick="return confirm('Opravdu chcete žádost uzavřít?')" href="{{url('cancel_appoint', $appoits->id)}}">uzavřít</a></td>
            </tr>

            @endforeach
        </table>
    </div>


<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>

</body>
</html>
