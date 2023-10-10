@extends('inicio.inicio')
{{-- Header propio --}}
<header class="header-tsurumi">
    @include('bombas/tsurumi.header')
</header>
{{-- "dinamico" es la directiva yield colocada en inicio --}}
@section('dinamico')
{{-- content propio --}}
    @include('bombas/tsurumi.content')
@endsection
