<!DOCTYPE html>
<html lang="en">

<head>
  @include('admin.template.head')
</head>

<body>

  @include('admin.template.navbar')

  
    @yield('main')

  @include('admin.template.footer')

</body>

</html>