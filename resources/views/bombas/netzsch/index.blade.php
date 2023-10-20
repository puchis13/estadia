@extends('inicio.inicio')
{{-- Header propio --}}
<header class="header-netzsch">
</header>
{{-- "dinamico" es la directiva yield colocada en inicio --}}
@section('dinamico')
{{-- content propio --}}
    @include('bombas/netzsch.content')
@endsection
