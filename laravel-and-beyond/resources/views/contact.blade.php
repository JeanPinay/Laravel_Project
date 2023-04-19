@include ('header')
@section ('contact')
<div class="container py-4">
<form action="{{ route('handleForm') }}" method="POST" class="contact-form">
    <!-- Name input -->
    <div class="mb-3">
    <label class="form-label" for="name">Name</label>
    <input class="form-control" id="name" type="text" name="name" placeholder="Name" />
    </div>
    <!-- Email address input -->
    <div class="mb-3">
      <label class="form-label" for="emailAddress">Email Address</label>
      <input class="form-control" id="emailAddress" name="email" type="email" placeholder="Email Address" />
    </div>

    <!-- Message input -->
    <div class="mb-3">
    <label class="form-label" for="message">Message</label>
    <textarea class="form-control" id="message" name="message" type="text" placeholder="Message" style="height: 10rem;" </textarea>
    </div>

    <!-- Form submissions success message -->
    <div class="d-none" id="submitSuccessMessage">
      <div class="text-center mb-3">Form submission successful!</div>
    </div>

    <!-- Form submissions error message -->
    <div class="d-none" id="submitErrorMessage">
      <div class="text-center text-danger mb-3">Error sending message!</div>
    </div>

    <!-- Form submit button -->
    <div class="d-grid">
      <button class="btn btn-primary btn-lg disabled" id="submitButton" type="submit">Submit</button>
    </div>

  </form>

</div>
@endsection