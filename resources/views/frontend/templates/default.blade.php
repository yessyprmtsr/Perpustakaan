<!DOCTYPE html>
<html lang="en">
@include('frontend.templates.partials.head')
<body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    @include('frontend.templates.partials.navigation')
    <div class="container">
        @yield('content')
    </div>
      <script>
          M.AutoInit();
      </script>
</body>
</html>
