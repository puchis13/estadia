@extends('inicio.inicio')
{{-- Header propio --}}
<header class="header-jandy">
</header>
{{-- "dinamico" es la directiva yield colocada en inicio --}}
@section('dinamico')
{{-- content propio --}}
    @include('bombas/jandy.content')
@endsection
