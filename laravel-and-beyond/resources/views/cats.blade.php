@extends ('layout')
@section ('cats')

<section class="py-5 text-center container">
<div class="p-4 p-md-5 mb-4 text-black rounded" style="background-color: #F1DEC9;">
    <div class="col-lg-9 col-md-8 mx-auto">
    <h1 class="fw-light display-4 fst-italic">One day I was counting the cats and I absent-mindedly counted myself.</h1>
    <p class="lead my-3" style="color: #2C3333;">
    </p>
    </div>
</div>
</section>


<div class="row">
@foreach ($cats as $cat)
<div class="col-md-3 mb-4">
    <div class="card h-100">
    <img src="/images/{{$cat->file}}" class="card-img-top" alt="..."> 
    <div class="card-body" style="background-color: #FEE0C0;">
    <h5 class="card-title">{{$cat->name}}</h5>
        <p class="card-text">{{$cat->zodiac}}</p>
        <p class="card-text">{{$cat->comment}}</p>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">{{$cat->created_at}}</li>
            <!-- <x-cats-preview-card :cat="$cat"/> -->
        </ul>
    </div>
    </div>
</div>
@endforeach
</div>
@endsection