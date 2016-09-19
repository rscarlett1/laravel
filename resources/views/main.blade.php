<!DOCTYPE html>
  <html lang="en">
  
  <head>  
  @include('partials._head')
  </head>

  <body>

    @include('partials.nav')

    <div class="container"> 

    @yield('content')

    @include('partials.footer')

    <div> <!-- end of .container -->

      @include('partials.javascript')

      @yield('scripts')
  </body>
</html>
