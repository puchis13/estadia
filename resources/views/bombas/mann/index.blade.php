@extends('inicio.inicio')
{{-- Header propio --}}
<header class="header-mann">
    @include('bombas/mann.header')
</header>
{{-- "dinamico" es la directiva yield colocada en inicio --}}
@section('dinamico')
{{-- content propio --}}
    @include('bombas/mann.content')
@endsection
