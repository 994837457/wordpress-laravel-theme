@include('templates.includes.head')

<body {{ body_class() }} >

  @include('templates.includes.nav')

    @yield('content')
   
  @include('templates.includes.footer')

  {{ wp_footer() }}

</body>
</html>