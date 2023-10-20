@extends('inicio.inicio')
{{-- Header propio --}}
<header class="header-grundfos">
</header>
{{-- "dinamico" es la directiva yield colocada en inicio --}}
@section('dinamico')
{{-- content propio --}}
    @include('bombas/grundfos.content')
@endsection
