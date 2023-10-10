@extends('inicio.inicio')
{{-- Header propio --}}
<header class="header-jandy">
    @include('bombas/jandy.header')
</header>
{{-- "dinamico" es la directiva yield colocada en inicio --}}
@section('dinamico')
{{-- content propio --}}
    @include('bombas/jandy.content')
@endsection
