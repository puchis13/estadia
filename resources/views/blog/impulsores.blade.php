@extends('inicio.inicio')
{{-- Header propio --}}
<header class="header-blog">
    @include('blog.header')
</header>

<div class="container-fluid">
    {{-- Contenido --}}
    <div class="text-center m-5">
        <h1 class="">PRINCIPIOS BÁSICOS Y TIPOS DE BOMBAS</h1>
</div>
<div class="ms-5">
    <h4 class="h4" style="color: blue">¿Qué es un impulsor?</h4>
</div>
<div class="row">
<div class="col m-5">
<p>El impulsor es el principal componente de una bomba centrífuga.</p>
<p>Cuando el impulsor gira, genera una fuerza necesaria para mover – o “bombear” – el fluido.</p>
<p>Los impulsores también se utilizan en compresores, turbinas y otras máquinas que mueven líquidos o gas.</p>
</div>
<div class="col m-4">
    <figure class="figure">    <img src="{{ asset('imagenes/blog/impulsores.png') }}" class="figure-img img-fluid rounded" width="80%" alt="...">
    </figure>
</div>
</div>

<div class="row">
<div class="row m-5">
<h2 class="h2">Principales tipos de impulsores</h2>
</div>
<div class="col m-5">
    <p>La gran mayoría de las bombas Grundfos vendidas son centrífugas, aunque las de desplazamiento positivo también forman parte de nuestra gama.</p>
<p>Las bombas de clasifican por el tipo de impulsor que utilizan, y los tipos principales de bombas Grundfos son:</p>
</div>
<div class="col me-5">
    <li>Impulsores de caudal radial</li>
    <li>Impulsores de caudal semiaxial</li>
    <li>Impulsores de canal</li>
    <li>Impulsores vortex</li>
    <li>Impulsores de caudal Axial</li>
    <li>Rotores helicoidales</li>
    <li>Membrana</li>

</div>
<div class="row">
    <figure class="figure">    <img src="{{ asset('imagenes/blog/mapa.PNG') }}" class="figure-img img-fluid rounded" width="80%" alt="...">
    </figure>
</div>
</div>

<div class="row m-5">
    <h2 class="h2">Impulsores de caudal radial</h2>
</div>
<div class="row">

<div class="col m-5" >
<p>Los impulsores de caudal radial funcionan moviendo el fluido fuera de la bomba de una forma “radial” o perpendicular al eje de la misma.

</p>
<p>
    Este diseño de bomba crea un relativo nivel alto de presión en comparación con el caudal.
</p>
<p>Los impulsores de caudal radial se utilizan normalmente en las bombas circuladoras, en las de máquina herramienta, calderas de alimentación y bombas industriales de hasta 20–30 m3/h. También se utilizan en la mayoría de bombas monocelulares.</p>
</div>
<div class="col m-5">
    <figure class="figure">    <img src="{{ asset('imagenes/blog/impulsor1.png') }}" class="figure-img img-fluid rounded" width="50%" alt="...">
    </figure>
</div>
</div>

{{-- Cierre de container --}}
</div>