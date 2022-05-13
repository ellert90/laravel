<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>@yield('title-block')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>
    @yield('b-con')
    <div class="container">
      @include('layouts.header')

      @if(Request::is('/'))
        @include('layouts.hero')
      @endif
      <div class="row mt-5">
        @include('layouts.messages')

        <div class="col-8">
          @yield('content')
        </div>
        <div class="col-4">
          @include('layouts.aside')
        </div>
      </div>



      @include('layouts.footer')
    </div>
  </body>
</html>
