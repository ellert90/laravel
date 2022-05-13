@extends('layouts.app')


@section('title-block')
All Messages
@endsection

@section('content')
<h1>All Messages</h1>

@foreach($data as $el)
  <div class="alert alert-info">
    <h3>{{ $el->title }}</h3>
    <p>{{ $el->email }}</p>
    <p><small>{{ $el->created_at }}</small></p>
    <a href="{{ route('contact-data-one', $el->id) }}"> <button type="button" name="button" class="btn btn-warning">More info</button> </a>
  </div>
@endforeach

@endsection

@section('aside')
  @parent
    <p>Some "@"show included text</p>
@endsection
