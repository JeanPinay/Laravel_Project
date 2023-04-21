@extends ('layout')
@section ('flexSubmitted')
<div class="contactSubmitted">
<div class="p-5 text-center " style="background-color:#F1DEC9; background-size: cover; background-position: center;">
<section class="py-5 text-center container ">
<div class="row py-lg-5">
    <div class="col-lg-9 col-md-8 mx-auto">
    <h1 class="fw-light">Meooooowwww</h1>
        <p class="lead text-muted">Thank you for contacting us. We will get back to you soon.</p>
    <div class="contactInfo">
        <p>Name: {{ $name }}</p> 
        <p>Email: {{ $zodiac }}</p>
        <p>Message: {{ $comment }}</p>
    </div>
    <button type="button" class="btn btn-secondary">
    <a class="nav-link" href="{{route('cats')}}">Go to Cats Feed</a>
    </button>
</div>
</div>
</section>
</div>
@endsection