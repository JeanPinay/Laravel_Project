@extends('layout')

@section('signs')
<div class="p-4 p-md-5 mb-4 text-white rounded" style="background-color: #6096B4;">
    <div class="col-lg-9 col-md-8 mx-auto">
      <h1 class="fw-light display-4 fst-italic">BIRTH DATE</h1>
      <p class="lead my-3">
  In an ideal world, you'd know the date, time and place
  of your cat's birth, but just having their birth date will tell
  you which of the 12 zodiac Signs they are. If you are getting
  a new cat from a breeder, make a note to remember to ask
  for this information
  However, if you have given your cat a forever home from
  a rescue centre then you are unlikely to have this information
  If this is the case, then you can take the date of their adoption
  into your life as the starting point of your relationship with
  them, which you will discover is just as meaningful
  And, of course, the more you learn about your cat's
  personality, along with the key characteristics of each of the
  12 sun signs, then will soon find yourself quickly identifying
  which zodiac sign best sums up your cat.</p>
  </div>
</div>
</section>
<div class="row">
@foreach($signs as $sign)
  <div class="col-md-3 mb-4">
    <div class="card h-100">
      <!-- <img src="..." class="card-img-top" alt="..."> -->
    <div class="card-body" style="background-color: #B5D5C5;">
      <h5 class="card-title"><x-sign-preview-card :sign="$sign" /></h5>
        <p class="card-text">{{$sign->date}}</p>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">{{$sign->depicted_by}}</li>
            <li class="list-group-item">{{$sign->sign}}</li>
            <li class="list-group-item">{{$sign->ruled_by}}</li>
            <li class="list-group-item">{{$sign->ruled_by}}</li>
            <li class="list-group-item">{{$sign->lucky_day}}</li>
            <li class="list-group-item">{{$sign->weak_spot}}</li>
          </ul>
    </div>
    </div>
  </div>
@endforeach
</div>
@endsection

