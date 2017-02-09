<!DOCTYPE html>
<html lang="en">
@include('Partials._head')
<body>       
  @include('Partials._nav')
     
        @include('Partials._messages')
      @yield('content')
      

      @include('Partials._footer')
      <!-- end of .container -->

      @include('Partials._javascript')
   @yield('scripts')
</body>
</html>