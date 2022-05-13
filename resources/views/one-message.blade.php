@extends('layouts.app')


@section('title-block')
$data->title
@endsection

@section('content')
<h1>{{ $data->title }}</h1>


  <div class="alert alert-info">
    <p>{{ $data->name }}</p>
    <p>{{ $data->message }}</p>
    <p>{{ $data->email }}</p>
    <p><small>{{ $data->created_at }}</small></p>
    <a href="{{ route('contact-data-update', $data->id) }}"> <button type="button" name="button" class="btn btn-success">Update</button> </a>
    <a href="{{ route('contact-delete', $data->id) }}"> <button type="button" name="button" class="btn btn-danger">Delete</button> </a>
  </div>


@endsection

@section('aside')
  @parent
    <p>Some "@"show included text</p>
@endsection
