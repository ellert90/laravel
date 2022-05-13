@extends('layouts.app')


@section('title-block')
Contact title
@endsection

@section('content')
<h1>Contact</h1>

<form action="{{ route('contact-form') }}" method="post">
  @csrf
  <div class="form-group">
    <label for="name">Your name</label>
    <input type="text" name="name" placeholder="Enter your name" class="form-control">
  </div>

  <div class="form-group">
    <label for="email">Your email</label>
    <input type="text" name="email" placeholder="Enter your email" class="form-control">
  </div>

  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" name="title" placeholder="Enter title" class="form-control">
  </div>

  <div class="form-group">
    <label for="message">Message</label>
    <textarea name="message" id="message" placeholder="Enter your message" class="form-control"></textarea>
  </div>
  <div class="form-group mt-2">
    <button type="submit" class="btn btn-success">Send</button>
  </div>


</form>
@endsection
