@extends ('layout')
@section ('flexForm')
<div class="container py-4">
<div class="p-5 text-center " style="background-image: url('https://img.freepik.com/premium-vector/seamless-pattern-constellation-cats-hand-draw-style-night-cat-stars-lines-original-texture-textile-fabric-wallpaper-apparel-clothing-banner-poster-postcard_654114-81.jpg?w=2000'); background-size: cover; background-position: center;">
<form action="{{route('flex-submitted')}}" method="POST" class="contact-form" enctype="multipart/form-data">
@csrf
    <div class="mb-5">
    <input class="form-control" id="name" type="text" name="name" placeholder="Name of your cat" />
    </div>

    <div class="mb-5">
    <input class="form-control" id="emailAddress" name="email" type="email" placeholder="Zodiac sign" />
    </div>

    <div>
    <textarea id="message" class="form-control rounded border-white mb-3 form-text-area" name="message" rows="5" cols="30" placeholder="Tell us about your cat"></textarea>
    </div>

    <div class="input-group mb-5">
  <input type="file" class="form-control" id="inputGroupFile02">
  <!-- <label class="input-group-text" for="inputGroupFile02">Upload</label> -->
</div>

    <button class="btn btn-primary" type="submit">Submit</button>
</form>
</div>


@endsection
