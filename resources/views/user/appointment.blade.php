<div class="page-section">
    <div class="container">
      <h1 class="text-center wow fadeInUp">Domluvte si schůzku</h1>

      <form class="main-form"action="{{url('appoitment')}}" method="POST">

        @csrf

        <div class="row mt-5 ">
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
            <input type="text" name="name" class="form-control" placeholder="celé jméno">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight">
            <input type="text" name="email" class="form-control" placeholder="email">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
            <input type="date" name="date" class="form-control">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
            <select name="doctor" id="departement" class="custom-select">

                <option>---vybrat lékaře---</option>

                @foreach ($doctor as $doctors)

              <option value="{{$doctors->name}}">{{$doctors->name}} - {{$doctors->speciality}}</option>

              @endforeach
            </select>
          </div>
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <input type="text" name="number" class="form-control" placeholder="telefonní číslo">
          </div>
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <textarea name="message" id="message" class="form-control" rows="6" placeholder="napište zprávu"></textarea>
          </div>
        </div>

        <button type="submit" style="color:black;background:greenyellow;" class="btn btn-primary mt-3 wow zoomIn">Poslat žádost</button>
      </form>
    </div>
  </div> <!-- .page-section -->
