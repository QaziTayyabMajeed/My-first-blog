<!DOCTYPE html>
<html lang="en">
@include('Partials._head')
<body>       
  @include('Partials._nav')
      <div class="container">
      @yield('content')

      @include('Partials._footer')
      </div>
      <!-- end of .container -->

      @include('Partials._javascript')
   @yield('scripts')
</body>
</html>