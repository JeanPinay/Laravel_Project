@extends ('layout')
@section ('flexForm')
<div class="container py-4">
<div class="p-5 text-center " style="background-color:#C8C2BC"; background-size: cover; background-position: center;">
<form action="#" method="POST" class="contact-form">
@csrf
    <div class="mb-3">
    <input class="form-control" id="name" type="text" name="name" placeholder="Name of your cat" />
    </div>

    <div class="mb-3">
    <input class="form-control" id="emailAddress" name="email" type="email" placeholder="Zodiac sign" />
    </div>

    <div>
    <textarea id="message" class="form-control rounded border-white mb-3 form-text-area" name="message" rows="5" cols="30" placeholder="Tell us about your cat"></textarea>
    </div>

    <div class="input-group mb-3">
  <input type="file" class="form-control" id="inputGroupFile02">
  <!-- <label class="input-group-text" for="inputGroupFile02">Upload</label> -->
</div>

    <button class="btn btn-primary" type="submit">Submit</button>
</form>
</div>


@endsection
