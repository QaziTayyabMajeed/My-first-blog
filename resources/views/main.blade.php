<!DOCTYPE html>
<html lang="en">
@include('Partials._head')
<body>       
  @include('Partials._nav')
      <div class="container">
        @include('Partials._messages')
{{ Auth::check() ? "logged In" : "Logged Out" }}
      @yield('content')
      

      @include('Partials._footer')
      </div>
      <!-- end of .container -->

      @include('Partials._javascript')
   @yield('scripts')
</body>
</html>