<!DOCTYPE html>
<html lang="en">

<head>
    @include('inicio.head')
</head>

<body>
    <header>
        @include('inicio.header')
    </header>
    @include('inicio.navbar')
    @yield('dinamico')
    {{-- Esta es el area dinamica que sera reemplazada en cada vista hija --}}
    @include('inicio.footer')


</body>

</html>
