@extends('inicio.inicio')
{{-- Header propio --}}
<header class="header-pentair">
</header>
{{-- "dinamico" es la directiva yield colocada en inicio --}}
@section('dinamico')
{{-- content propio --}}
    @include('bombas/pentair.content')
@endsection
