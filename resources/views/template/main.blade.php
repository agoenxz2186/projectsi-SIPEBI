<!DOCTYPE html>
<html lang="en">

<head>
  @include('template.head')
</head>

<body>

  @include('template.navbar')

  <main id="main">
    @yield('content')
    
  </main>

  @include('template.footer')

</body>

</html>