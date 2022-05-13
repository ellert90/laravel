@extends('layouts.app')


@section('title-block')
Home
@endsection



@section('content')
<h1>Home</h1>
@endsection

@section('aside')
  @parent
    <p>Some "@"show included text</p>
@endsection
