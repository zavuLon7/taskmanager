<!doctype html>
<html lang="en">

   @include('tasks.partials.head')

   <body>

      @include('tasks.partials.header')

      @yield('content')

      @include('tasks.partials.footer')

   </body>
   <!-- Core JS Files -->
   <script src="{{ asset('js/jquery-3.2.1.js') }}" type="text/javascript"></script>
   <script src="{{ asset('js/jquery-ui-1.12.1.custom.min.js') }}" type="text/javascript"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
   <script src="{{ asset('js/bootstrap.min.js') }}" type="text/javascript"></script>
   <script src="{{ asset('js/task_list.js') }}"></script>
</html>
