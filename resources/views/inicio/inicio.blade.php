<!DOCTYPE html>
<html lang="en">

<head>
    @include('inicio.head')
</head>

<body>

    @include('inicio.navbar')

    @yield('dinamico')
    {{-- Esta es el area dinamica que sera reemplazada en cada vista hija --}}
    @include('inicio.footer')


</body>

</html>
