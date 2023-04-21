@extends ('layout')
@section ('cats')

<div class="row">
@foreach ($cats as $cat)
<div class="col-md-3 mb-4">
    <div class="card h-100">
    <img src="{{$cat->file}}" class="card-img-top" alt="..."> 
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