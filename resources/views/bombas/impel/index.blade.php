@extends('inicio.inicio')
{{-- Header propio --}}
<header class="header-impel">
    @include('bombas/impel.header')
</header>
{{-- "dinamico" es la directiva yield colocada en inicio --}}
@section('dinamico')
{{-- content propio --}}
    @include('bombas/impel.content')
@endsection
