@extends('inicio.inicio')
{{-- Header propio --}}
<header class="header-zoeller">
</header>
{{-- "dinamico" es la directiva yield colocada en inicio --}}
@section('dinamico')
{{-- content propio --}}
    @include('bombas/zoeller.content')
@endsection
