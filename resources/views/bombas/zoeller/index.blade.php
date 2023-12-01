@extends('inicio.inicio')
{{-- Header propio --}}
<header class="header-zoeller">
    {{-- <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script> --}}
</header>
{{-- "dinamico" es la directiva yield colocada en inicio --}}
@section('dinamico')
{{-- content propio --}}
    @include('bombas/zoeller.content')
@endsection
