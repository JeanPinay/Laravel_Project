<!-- TODO: detail page of every article  -->
@extends('layout')
@section('signs')
<div class="container my-5 ">
<div class="p-5 text-center " style="background-image: url('https://cf.ltkcdn.net/horoscopes/images/orig/287818-1600x1066-astrological-signs.jpg'); background-size: cover; background-position: center;">

    <h1 class="text-body-emphasis" style="color: #000000;" id="">{{$sign->name}}</h1>
    <p class="lead my-3" style="color: #000000;" id="description">
    {{$sign->description}}
    </p>
    <div class="d-inline-flex gap-5 mb-5">
    <button type="button" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="top" title="Read More">
        Read more
</button>
    </div>
</div>
</div>
@endsection