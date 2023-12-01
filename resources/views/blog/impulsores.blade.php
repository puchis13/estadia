@extends('inicio.inicio')
{{-- Header propio --}}
<header class="header-blog">
</header>

<div class="container-fluid">

    {{-- Contenido --}}
    <!-- Titulo -->
    <div class="row">
        <div class="text-center mt-5 mb-5">
            <h1 class="">PRINCIPIOS BÁSICOS Y TIPOS DE BOMBAS</h1>
        </div>
    </div>

    <!-- Parrafos y Imagenes -->

    
    <div>
        <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3 p-2">
            <div class="col-md-6">
                <h1 class="h1" style="color: #262626">¿Qué es un impulsor?</h1>
                <p>
                    El impulsor es el principal componente de una bomba centrífuga.
                </p>
                <p>
                    Cuando el impulsor gira, genera una fuerza necesaria para mover – o “bombear” – el fluido.
                </p>
                <p>
                    Los impulsores también se utilizan en compresores, turbinas y otras máquinas que mueven líquidos o
                    gas.
                </p>
            </div>
            <div class="col-md-6 mt-lg-5">
                <figure class="figure d-flex justify-content-center"> <img
                        src="{{ asset('imagenes/blog/impulsores.png') }}" class="figure-img img-fluid rounded"
                        width="80%" alt="...">
                </figure>
            </div>
        </div>
    </div>

    <div>
        <div class="row">
            <div class="col m-2 mt-3 pb-3">
                <h2 class="h2" style="color: #262626">Principales tipos de impulsores</h2>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3 p-2">
            <div class="col-md-6 mt-5">
                <p>
                    La gran mayoría de las bombas vendidas son centrífugas, aunque las de desplazamiento positivo
                    también forman parte de nuestra gama.
                </p>
                <p>
                    Las bombas de clasifican por el tipo de impulsor que utilizan, y los tipos principales de bombas
                    son:
                </p>
            </div>
            <div class="col-md-6 mt-lg-5">
                <li>Impulsores de caudal radial</li>
                <li>Impulsores de caudal semiaxial</li>
                <li>Impulsores de canal</li>
                <li>Impulsores vortex</li>
                <li>Impulsores de caudal Axial</li>
                <li>Rotores helicoidales</li>
                <li>Membrana</li>
            </div>
            <div class="col-md-12 mt-lg-5">
                <figure class="figure d-flex justify-content-center"> <img src="{{ asset('imagenes/blog/mapa.PNG') }}"
                        class="figure-img img-fluid rounded" width="80%" alt="...">
                </figure>
            </div>
        </div>
    </div>

    <div>
        <div class="row">
            <div class="col m-2 mt-3 pb-3">
                <h2 class="h2" style="color: #262626">Impulsores de caudal radial</h2>
            </div>
        </div>

        <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3 p-2">
            <div class="col-md-6 mt-5">
                <p>
                    Los impulsores de caudal radial funcionan moviendo el fluido fuera de la bomba de una forma “radial”
                    o
                    perpendicular al eje de la misma.
                </p>
                <p>
                    Este diseño de bomba crea un relativo nivel alto de presión en comparación con el caudal.
                </p>
                <p>
                    Los impulsores de caudal radial se utilizan normalmente en las bombas circuladoras, en las de
                    máquina
                    herramienta, calderas de alimentación y bombas industriales de hasta 20–30 m3/h. También se utilizan
                    en
                    la mayoría de bombas monocelulares.
                </p>
            </div>
            <div class="col-md-6 mt-lg-5">
                <figure class="figure d-flex justify-content-center"> <img
                        src="{{ asset('imagenes/blog/impulsor1.png') }}" class="figure-img img-fluid rounded"
                        width="50%" alt="...">
                </figure>
            </div>
        </div>
    </div>

    <div>
        <div class="row">
            <div class="col m-2 mt-3 pb-3">
                <h2 class="h2" style="color: #262626">Impulsores de caudal semi-axial</h2>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3 p-2">
            <div class="col-md-6 mt-5">
                <p>
                    Los impulsores de caudal semi-axial son muy similares a los de caudal axial, pero someten al fluido
                    a
                    un
                    determinado grado de caudal radial para mejorar la eficiencia.
                </p>
                <p>
                    Pueden manejar caudales mayores que los axiales, y las bombas con este impulsor se utilizan
                    normalmente
                    para la recogida de grandes cantidades de agua o para la distribución en aplicaciones de suministro
                    de
                    agua, riego o refrigeración.
                </p>
            </div>
            <div class="col-md-6 mt-lg-5">
                <figure class="figure d-flex justify-content-center"> <img
                        src="{{ asset('imagenes/blog/impulsor2.png') }}" class="figure-img img-fluid rounded"
                        width="50%" alt="...">
                </figure>
            </div>
        </div>
    </div>

    <div>
        <div class="row">
            <div class="col m-2 mt-3 pb-3">
                <h2 class="h2" style="color: #262626">Impulsores de canal y tubo</h2>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3 p-2">
            <div class="col-md-6 mt-5">
                <p>
                    Los impulsores de canal, también conocidos como impulsores para manejo de sólidos, están diseñados
                    para
                    permitir el paso libre de sólidos de 80 mm o mayor diámetro.
                </p>
                <p>
                    Ya que son capaces de manejar sólidos y fibras, las bombas con impulsor de canal se utilizan para
                    aplicaciones de aguas residuales.
                </p>
                <p>
                    En 2012, Se lanzó el impulsor S-tube, un nuevo modelo de impulsor de canal con forma de tubo. Este
                    diseño mejora la eficiencia y la fiabilidad anti-atasco.
                </p>
            </div>
            <div class="col-md-6 mt-lg-5">
                <figure class="figure d-flex justify-content-center"> <img
                        src="{{ asset('imagenes/blog/impulsor3.png') }}" class="figure-img img-fluid rounded"
                        width="50%" alt="...">
                </figure>
            </div>
        </div>
    </div>

    <div>
        <div class="row">
            <div class="col m-2 mt-3 pb-3">
                <h2 class="h2" style="color: #262626">Impulsores Vortex</h2>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3 p-2">
            <div class="col-md-6 mt-5">
                <p>
                    Un impulsor vortex crear un vórtice en la cuerpo de la bomba que mueve fibras, sólidos y tierra
                    a
                    través
                    de la bomba. Esto convierte el impulsor en idóneo para el manejo de líquidos con fibras largas,
                    partículas y arena abrasiva.
                </p>
                <p>
                    Aunque las bombas con este tipo de impulsor ofrecen una alta fiabilidad anti-atasco, son
                    normalmente
                    la
                    mitad de eficientes que las de impulsor de canal. Debido a esto, las bombas con impulsor vortex
                    se
                    utilizan para aplicaciones de pequeñas cantidades de aguas residuales con grandes cantidades de
                    fibras y
                    tierra, donde la fiabilidad es más importante que la eficiencia.
                </p>
            </div>
            <div class="col-md-6 mt-lg-5">
                <figure class="figure d-flex justify-content-center"> <img
                        src="{{ asset('imagenes/blog/impulsor4.png') }}" class="figure-img img-fluid rounded"
                        width="50%" alt="...">

                </figure>
            </div>
        </div>
    </div>

    <div>
        <div class="row">
            <div class="col m-2 mt-3 pb-3">
                <h2 class="h2" style="color: #262626">Impulsores de flujo axial</h2>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3 p-2">
            <div class="col-md-6 mt-5">
                <p>
                    Un impulsor de flujo axial es principalmente un propulsor y una unidad de eje de motor, alojado
                    en un
                    tubo. El propulsor simplemente mueve el líquido a lo largo del tubo.
                </p>
                <p>
                    Estos impulsores no generan mucha presión, pero son muy buenos en proporcionar altos caudales
                    (40.000
                    m3/hora).
                </p>
                <p>
                    Las bombas con impulsor de caudal axial se utilizan principalmente para la recirculación de
                    líquidos
                    entre tanques in plantas de tratamiento de aguas residuales, y para aplicaciones de control de
                    inundaciones dónde se requiere bombear grandes cantidades de agua a baja altura.
                </p>
            </div>
            <div class="col-md-6 mt-lg-5">
                <figure class="figure d-flex justify-content-center"> <img
                        src="{{ asset('imagenes/blog/impulsor5.png') }}" class="figure-img img-fluid rounded"
                        width="80%" alt="...">
                </figure>
            </div>
        </div>
    </div>


    {{-- Cierre de container --}}
</div>
