<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>@yield('title') | PEMBAYARAN SPP</title>

  @stack('prepend-style')
  @include('includes.style')
  @stack('addon-style')

</head> 

<body>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      
      @include('includes.navbar')

      @include('includes.sidebar')
      
      @yield('content')

    @include('includes.footer')
    </div>
  </div>
  
  @include('sweetalert::alert')
  @stack('prepend-script')
  @include('includes.script')
  @stack('addon-script')
</body>
</html> 