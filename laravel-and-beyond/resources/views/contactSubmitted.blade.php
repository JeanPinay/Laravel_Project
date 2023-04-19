@extends ('layout')
@section ('contactSubmitted')
<div class="contactSubmitted">
<section class="py-5 text-center container ">
<div class="row py-lg-5">
    <div class="col-lg-9 col-md-8 mx-auto">
    <h1 class="fw-light">Meooooowwww</h1>
        <p class="lead text-muted">Thank you for contacting us. We will get back to you soon.</p>
    <div class="contactInfo">
        <p>Name: {{ $name }}</p> 
        <p>Email: {{ $email }}</p>
        <p>Message: {{ $message }}</p>
    </div>
</div>
</div>
</section>
</div>
@endsection