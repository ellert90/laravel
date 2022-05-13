@extends('layouts.app')


@section('title-block')
Update Message
@endsection

@section('content')
<h1>Update Message</h1>

<form action="{{ route('contact-update-submit', $data->id) }}" method="post">
  @csrf
  <div class="form-group">
    <label for="name">Your name</label>
    <input type="text" name="name" placeholder="Enter your name" class="form-control" value="{{ $data->name }}">
  </div>

  <div class="form-group">
    <label for="email">Your email</label>
    <input type="text" name="email" placeholder="Enter your email" class="form-control" value="{{ $data->email }}">
  </div>

  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" name="title" placeholder="Enter title" class="form-control" value="{{ $data->title }}">
  </div>

  <div class="form-group">
    <label for="message">Message</label>
    <textarea name="message" id="message" placeholder="Enter your message" class="form-control">{{ $data->message }}</textarea>
  </div>
  <div class="form-group">
    <button type="submit" class="btn btn-success">Update</button>
  </div>


</form>
@endsection
