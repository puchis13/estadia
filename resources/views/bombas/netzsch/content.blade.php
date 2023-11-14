<div class="container-fluid">
    {{-- Menu --}}
    <div>
        {{-- Logo --}}
        <div class="text-center">
            <figure class="figure">
                <img src="{{ asset('imagenes/bombas/netzsch/portada.png') }}" class="figure-img img-fluid rounded"
                    alt="...">
            </figure>
            <figure class="figure">
                <img src="{{ asset('imagenes/bombas/netzsch/logo.png') }}" width=30% height=10%
                    class="figure-img img-fluid rounded" alt="...">
            </figure>
        </div>

        {{-- Imagenes al seleccionar --}}
        <div>
            {{-- Esto es la Fila --}}
            <div class="text-center border-top border-bottom border-2 row row-cols-2 row-cols-lg-5 g-2 g-lg-3">

                {{-- Imagen de Series Nemo --}}
                <div class="col">
                    <figure class="figure">
                        <a href="#nemo"><img src="{{ asset('imagenes/bombas/netzsch/nemo.png') }}" width="100%"
                                class="figure-img img-fluid rounded" alt=""></a>
                        <figcaption class="figure-caption ">
                            <h6 class="h6">Serie Nemo</h6>
                        </figcaption>
                    </figure>
                </div>

                {{-- Imagen de Series Notos --}}
                <div class="col">
                    <figure class="figure">
                        <a href="#notos"><img src="{{ asset('imagenes/bombas/netzsch/notos.png') }}" width="100%"
                                class="figure-img img-fluid rounded" alt=""></a>
                        <figcaption class="figure-caption ">
                            <h6 class="h6">Serie Notos</h6>
                        </figcaption>
                    </figure>
                </div>

                {{-- Imagen de Series Tornado --}}
                <div class="col">
                    <figure class="figure">
                        <a href="#tornado"><img src="{{ asset('imagenes/bombas/netzsch/tornado.png') }}" width="100%"
                                class="figure-img img-fluid rounded" alt=""></a>
                        <figcaption class="figure-caption ">
                            <h6 class="h6">Serie Tornado</h6>
                        </figcaption>
                    </figure>
                </div>

                {{-- Imagen de Series Peripro --}}
                <div class="col">
                    <figure class="figure">
                        <a href="#peripro"><img src="{{ asset('imagenes/bombas/netzsch/peripro.png') }}" width="100%"
                                class="figure-img img-fluid rounded" alt=""></a>
                        <figcaption class="figure-caption ">
                            <h6 class="h6">Serie Peripro</h6>
                        </figcaption>
                    </figure>
                </div>

                {{-- Imagen de Series Trituradora --}}
                <div class="col">
                    <figure class="figure">
                        <a href="#trituradora"><img src="{{ asset('imagenes/bombas/netzsch/trituradora.png') }}"
                                width="100%" class="figure-img img-fluid rounded" alt=""></a>
                        <figcaption class="figure-caption ">
                            <h6 class="h6">Serie Trituradora</h6>
                        </figcaption>
                    </figure>
                </div>

                {{-- Cierre de Fila --}}
            </div>

            {{-- Cierre de imagenes --}}
        </div>
        {{-- Fin de Menu --}}
    </div>

    {{-- Inicio de Contenidos --}}

    {{-- Contenido Series Nemo --}}
    <div class=" m-2 p-2">
        <div class="row m-1">
            <h4 id="nemo" class="h4">Bombas de Tornillo Helicoidal Nemo</h4>
        </div>
        <div class="row m-5 ps-5">
            <div class="col ms-5 ps-5">
                <figure class="figure"><img src="{{ asset('imagenes/bombas/netzsch/nemo.png') }}" width="70%"
                        class="figure-img img-fluid rounded" alt=""></figure>
                <figcaption>
                    <h6 class="h6">Serie Nemo</h6>
                </figcaption>
                {{-- direccion de catalogo --}}
                <a href="https://www.vde.com.mx/media/amasty/amfile/attach/prEMfUpGuuFHVmYwDX1mldYpFVcNaVfw.pdf"
                    class="btn btn-primary ms-4">Ficha Técnica</a>
            </div>
            <div class="col me-5 pe-5">
                <p>
                    Las avanzadas bombas de desplazamiento positivo de tornillo excéntrico de la reconocida marca
                    NETZSCH, pertenecientes a la serie NEMO, son altamente valoradas en diversas aplicaciones que
                    requieren un bombeo un bombeo continuo, estable en cuanto a la presión, suave y con pocas
                    pulsaciones.
                </p>
                <p>La versatilidad de la gama de bombas NETZSCH de la serie NEMO las convierte en una elección frecuente
                    en entornos industriales para transportar una amplia variedad de fluidos, desde materiales con
                    fibras, lodos, adhesivos, entre otros. Como por ejemplo el petróleo.</p>
                <p>Destacando entre los productos estrella de NETZSCH se encuentra la bomba de tornillo, pero la serie
                    ofrece también opciones como bombas de cavidad progresiva, dosificadoras, higiénicas, de tornillo
                    excéntrico con tolva Nemo, de inmersión y de trasvase. Estas bombas demuestran ser especialmente
                    eficaces en el manejo de productos de difícil bombeo.</p>
            </div>

        </div>
        <div class="row">
            <div class="col ms-5">
                <h4 class="h4">Aplicaciones de las Bombas NETZSCH Nemo:</h4>
                <ul>
                    <li>Química, Pulpa y Papel</li>
                    <li>Alimentación y Farmacéutica</li>
                    <li>Petróleo y Gas</li>
                    <li>Minería</li>
                    <li>Batería (litio)</li>
                    <li>Bombeo suave de aguas medicinales con alto contenido de sal</li>
                    <li>Tratamiento de aguas residuales y lodos</li>
                </ul>
            </div>
            <div class="col me-5" style="overflow-x:auto;">
                <h4 class="h4">Especificaciones Técnicas de NETZSCH Nemo</h4>
                <table class="table table-striped">
                    <thead>
                        <tr class="border-top border-danger">
                            <th scope="col" class="border-bottom border-dark">Serie</th>
                            <th scope="col" class="border-bottom border-dark">Gasto Máximo (m3/h)</th>
                            <th scope="col" class="border-bottom border-dark">Presión Máxima (Bar)</th>
                            <th scope="col" class="border-bottom border-dark">Tamaños Disponibles</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td scope="col">NEMO FSIP</td>
                            <td scope="col">150</td>
                            <td scope="col">24</td>
                            <td scope="col">6</td>
                        </tr>
                        <tr>
                            <td scope="col">NEMO BY</td>
                            <td scope="col">300</td>
                            <td scope="col">24</td>
                            <td scope="col">16</td>
                        </tr>
                        <tr>
                            <td scope="col">NEMO SY</td>
                            <td scope="col">350</td>
                            <td scope="col">48 (240)</td>
                            <td scope="col">16</td>
                        </tr>
                        <tr>
                            <td scope="col">NEMO C.Pro</td>
                            <td scope="col">1.5</td>
                            <td scope="col">20</td>
                            <td scope="col">6</td>
                        </tr>
                        <tr>
                            <td scope="col">NEMO BH</td>
                            <td scope="col">120</td>
                            <td scope="col">24</td>
                            <td scope="col">10</td>
                        </tr>
                        <tr>
                            <td scope="col">NEMO Mini BH</td>
                            <td scope="col">0.5</td>
                            <td scope="col">36</td>
                            <td scope="col">4</td>
                        </tr>
                        <tr>
                            <td scope="col">NEMO SH</td>
                            <td scope="col">120</td>
                            <td scope="col">24</td>
                            <td scope="col">10</td>
                        </tr>
                        <tr>
                            <td scope="col">NEMO SA</td>
                            <td scope="col">120</td>
                            <td scope="col">24</td>
                            <td scope="col">10</td>
                        </tr>
                        <tr>
                            <td scope="col">NEMO BO/BS</td>
                            <td scope="col">120</td>
                            <td scope="col">24</td>
                            <td scope="col">10</td>
                        </tr>
                        <tr>
                            <td scope="col">NEMO BF</td>
                            <td scope="col">60</td>
                            <td scope="col">36</td>
                            <td scope="col">6</td>
                        </tr>
                        <tr>
                            <td scope="col">NEMO BF aBP/Module</td>
                            <td scope="col">60</td>
                            <td scope="col">36</td>
                            <td scope="col">6</td>
                        </tr>
                        <tr>
                            <td scope="col">NEMO B.Max</td>
                            <td scope="col">120</td>
                            <td scope="col">24</td>
                            <td scope="col">4</td>
                        </tr>
                        <tr>
                            <td scope="col">NEMO BT</td>
                            <td scope="col">310</td>
                            <td scope="col">24</td>
                            <td scope="col">11</td>
                        </tr>
                        <tr>
                            <td scope="col">NEMO Multifásica</td>
                            <td scope="col">1000</td>
                            <td scope="col">72</td>
                            <td scope="col">2</td>
                        </tr>
                        <tr class="border-bottom border-dark">
                            <td scope="col">NEMO L.Cap</td>
                            <td scope="col">1000</td>
                            <td scope="col">24</td>
                            <td scope="col">2</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    {{-- Contenido Series Notos --}}
    <div class=" m-2 p-2">
        <div class="row m-1">
            <h4 id="notos" class="h4">Bombas Multihusillo Notos</h4>
        </div>
        <div class="row m-5 ps-5">
            <div class="col ms-5 ps-5">
                <figure class="figure"><img src="{{ asset('imagenes/bombas/netzsch/notos.png') }}" width="70%"
                        class="figure-img img-fluid rounded" alt=""></figure>
                <figcaption>
                    <h6 class="h6">Serie Notos</h6>
                </figcaption>
                {{-- direccion de catalogo --}}
                <a href="https://www.vde.com.mx/media/amasty/amfile/attach/prEMfUpGuuFHVmYwDX1mldYpFVcNaVfw.pdf"
                    class="btn btn-primary ms-4">Ficha Técnica</a>
            </div>
            <div class="col me-5 pe-5">
                <p>
                    Las bombas NOTOS están diseñadas para trabajar con líquidos de baja a alta lubricación con baja a
                    alta viscosidad, así como medios sensibles al corte o químicamente agresivos.
                </p>
                <b>La bomba multitornillo cumple las normas de API</b>
                <p>
                    La amplia gama de materiales, desde la fundición gris y el acero al cromo-níquel hasta el acero
                    dúplex, superdúplex o Hastelloy, garantiza condiciones de bombeo óptimas en una amplia variedad de
                    áreas de aplicación. Opcionalmente, las bombas se pueden actualizar para cumplir con los estándares
                    del Instituto Americano del Petróleo (API). Estos requisitos especiales son principalmente
                    relevantes en los sectores del petróleo y el gas, y la petroquímica.
                </p>
            </div>

        </div>
        <div class="row">
            <div class="col ms-5">
                <h4 class="h4">Aplicaciones de las Bombas NETZSCH Notos:</h4>
                <ul>
                    <li>Alimentario y farmacéutico</li>
                    <li>Química y del papel</li>
                    <li>Gas y petróleo</li>
                    <li>Sector minero</li>
                    <li>Medioambiente y de la energía</li>
                    <li>Batería</li>
                </ul>
            </div>
            <div class="col me-5" style="overflow-x:auto;">
                <p>
                    Las bombas de dos husillos NOTOS, tienen capacidad de autocebado, son muy útiles en diferentes áreas
                    como el petróleo y el gas, el transporte por marítimo, la generación de energía y las fábricas de
                    productos químicos. También se usan en lugares donde se almacenan grandes cantidades de líquidos en
                    tanques. Estas bombas son duraderas.
                </p>

                <h4 class="h4">Especificaciones Técnicas de NETZSCH Notos</h4>
                <table class="table table-striped">
                    <thead>
                        <tr class="border-top border-danger">
                            <th scope="col" class="border-bottom border-dark">Serie</th>
                            <th scope="col" class="border-bottom border-dark">Gasto Máximo (m3/h)</th>
                            <th scope="col" class="border-bottom border-dark">Presión Máxima (Bar)</th>
                            <th scope="col" class="border-bottom border-dark">Tamaños Disponibles</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td scope="col">NOTOS 2NS</td>
                            <td scope="col">650</td>
                            <td scope="col">16</td>
                            <td scope="col">13</td>
                        </tr>
                        <tr>
                            <td scope="col">NOTOS 3NS</td>
                            <td scope="col">400</td>
                            <td scope="col">120</td>
                            <td scope="col">28</td>
                        </tr>
                        <tr>
                            <td scope="col">NOTOS 4NS</td>
                            <td scope="col">2700</td>
                            <td scope="col">40</td>
                            <td scope="col">18</td>
                        </tr>
                        <tr>
                            <td scope="col">NOTOS 2NSH FSIP</td>
                            <td scope="col">200</td>
                            <td scope="col">16</td>
                            <td scope="col">5</td>
                        </tr>
                        <tr class="border-bottom border-dark">
                            <td scope="col">NOTOS 2NSH</td>
                            <td scope="col">200</td>
                            <td scope="col">16</td>
                            <td scope="col">5</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    {{-- Contenido Series Tornado --}}
    <div class=" m-2 p-2">
        <div class="row m-1">
            <h4 id="tornado" class="h4">Bombas Lobulares Tornado</h4>
        </div>
        <div class="row m-5 ps-5">
            <div class="col ms-5 ps-5">
                <figure class="figure"><img src="{{ asset('imagenes/bombas/netzsch/tornado.png') }}" width="70%"
                        class="figure-img img-fluid rounded" alt=""></figure>
                <figcaption>
                    <h6 class="h6">Serie Tornado</h6>
                </figcaption>
                {{-- direccion de catalogo --}}
                <a href="https://www.vde.com.mx/media/amasty/amfile/attach/prEMfUpGuuFHVmYwDX1mldYpFVcNaVfw.pdf"
                    class="btn btn-primary ms-4">Ficha Técnica</a>
            </div>
            <div class="col me-5 pe-5">
                <p>
                    Potentes bombas lobulares con la máxima seguridad operativa.
                    Las bombas lobulares autocebantes y sin válvulas TORNADO son especialmente potentes y requieren poco
                    espacio gracias a su diseño compacto.
                </p>
                <p>Las bombas lobulares le ofrecen un bombeo continuo y suave, así como una dosificación proporcional a
                    la velocidad de casi todos los medios en una amplia variedad de aplicaciones. Son utilizadas para la
                    dosificación, la extracción continua y suave de materiales.</p>
            </div>

        </div>
        <div class="row">
            <div class="col ms-5">
                <h4 class="h4">Aplicaciones de las Bombas NETZSCH Tornado:</h4>
                <ul>
                    <li>Alimentario y farmacéutico</li>
                    <li>Química y del papel</li>
                    <li>Gas y petróleo</li>
                    <li>Sector minero</li>
                    <li>Medioambiente y de la energía</li>
                    <li>Batería</li>
                </ul>
            </div>
            <div class="col me-5" style="overflow-x:auto;">
                <h4 class="h4">Especificaciones Técnicas de Serie Tornado</h4>
                <table class="table table-striped">
                    <thead>
                        <tr class="border-top border-danger">
                            <th scope="col" class="border-bottom border-dark">Serie</th>
                            <th scope="col" class="border-bottom border-dark">Gasto Máximo (m3/h)</th>
                            <th scope="col" class="border-bottom border-dark">Presión Máxima (Bar)</th>
                            <th scope="col" class="border-bottom border-dark">Tamaños Disponibles</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td scope="col">TORNADO T.Envi</td>
                            <td scope="col">300</td>
                            <td scope="col">8</td>
                            <td scope="col">12</td>
                        </tr>
                        <tr>
                            <td scope="col">TORNADO T1</td>
                            <td scope="col">905</td>
                            <td scope="col">8</td>
                            <td scope="col">18</td>
                        </tr>
                        <tr>
                            <td scope="col">TORNADO Móvil</td>
                            <td scope="col">905</td>
                            <td scope="col">8</td>
                            <td scope="col">6</td>
                        </tr>
                        <tr>
                            <td scope="col">TORNADO T.Proc</td>
                            <td scope="col">300</td>
                            <td scope="col">8</td>
                            <td scope="col">20</td>
                        </tr>
                        <tr>
                            <td scope="col">TORNADO T.Sano</td>
                            <td scope="col">142</td>
                            <td scope="col">8</td>
                            <td scope="col">6</td>
                        </tr>
                        <tr class="border-bottom border-dark">
                            <td scope="col">TORNADO T.Sano Liso</td>
                            <td scope="col">70</td>
                            <td scope="col">12</td>
                            <td scope="col">6</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    {{-- Contenido Series Peripro --}}
    <div class=" m-2 p-2">
        <div class="row m-1">
            <h4 id="peripro" class="h4">Bombas Peristálticas Peripro</h4>
        </div>
        <div class="row m-5 ps-5">
            <div class="col ms-5 ps-5">
                <figure class="figure"><img src="{{ asset('imagenes/bombas/netzsch/peripro.png') }}" width="70%"
                        class="figure-img img-fluid rounded" alt=""></figure>
                <figcaption>
                    <h6 class="h6">Serie Peripro</h6>
                </figcaption>
                {{-- direccion de catalogo --}}
                <a href="https://www.vde.com.mx/media/amasty/amfile/attach/prEMfUpGuuFHVmYwDX1mldYpFVcNaVfw.pdf"
                    class="btn btn-primary ms-4">Ficha Técnica</a>
            </div>
            <div class="col me-5 pe-5">
                <p>
                    Las bombas peristálticas NETZSCH son particularmente resistentes y fáciles de mantener. Resistentes,
                    fiables y potentes: las bombas peristálticas PERIPRO son especialmente adecuadas para medios
                    agresivos y abrasivos con un contenido de sólidos de hasta el 70 % en una gran variedad de
                    aplicaciones ya sea en la industria, en el sector químico o en el alimentario. Las bombas
                    peristálticas ofrecen una potencia de succión extremadamente alta con un mantenimiento mínimo.
                </p>
                <p>Ventajas de las bombas peristálticas Peripro:</p>
                <li>Certificación de la FDA</li>
                <li>Conexiones sanitarias según DIN 11851 o Tri-Clamp</li>
                <li>Capacidad de succión extremadamente alta</li>
                <li>Posibilidad de bombeo suave y reversible</li>
                <li>Larga vida útil de la manguera gracias al gran tamaño de los rodillos</li>
                <li>Sin sellos mecánicos ni válvulas (pocas piezas de desgaste)</li>
                <li>Resistencia de la manguera a las altas temperaturas</li>

            </div>

        </div>
        <div class="row">
            <div class="col ms-5">
                <h4 class="h4">Aplicaciones de las Bombas NETZSCH Peripro:</h4>
                <ul>
                    <li>Alimentario y farmacéutico</li>
                    <li>Química y del papel</li>
                    <li>Gas y petróleo</li>
                    <li>Sector minero</li>
                    <li>Medioambiente y de la energía</li>
                    <li>Batería</li>
                </ul>
            </div>
        </div>
    </div>

    {{-- Contenido Series Trituradora --}}
    <div class=" m-2 p-2">
        <div class="row m-1">
            <h4 id="trituradora" class="h4">Sistemas de Trituración</h4>
        </div>
        <div class="row m-5 ps-5">
            <div class="col ms-5 ps-5">
                <figure class="figure"><img src="{{ asset('imagenes/bombas/netzsch/trituradora.png') }}"
                        width="70%" class="figure-img img-fluid rounded" alt=""></figure>
                <figcaption>
                    <h6 class="h6">Serie Trituradora</h6>
                </figcaption>
                {{-- direccion de catalogo --}}
                <a href="https://www.vde.com.mx/media/amasty/amfile/attach/prEMfUpGuuFHVmYwDX1mldYpFVcNaVfw.pdf"
                    class="btn btn-primary ms-4">Ficha Técnica</a>
            </div>
            <div class="col me-5 pe-5">
                <p>
                    Robustos, versátiles y potentes: le ofrecemos sistemas de trituración de alto rendimiento para
                    proteger sus equipos y las unidades de bombeo que contienen. Estos sistemas aseguran que las
                    impurezas se trituran de forma que se puedan bombear. De esta manera, puede contrarrestar de manera
                    preventiva el riesgo de atascos u obstrucciones en sus sistemas de bombeo.
                </p>
                <p>Los sistemas de trituración se pueden utilizar siempre que se trate de triturar de forma fiable
                    residuos como textiles, plástico o similares en líquidos para evitar de forma segura daños a las
                    bombas u otros sistemas situados más adelante.
                </p>
                <p>Estos equipos trituran residuos gruesos y sólidos en medios líquidos. Es ideal para una amplia gama
                    de aplicaciones, desde el tratamiento de aguas residuales hasta los residuos de alimentos y frutas.
                </p>
            </div>

        </div>
        <div class="row">
            <div class="col ms-5">
                <h4 class="h4">Aplicaciones de Sistemas de Trituración:</h4>
                <ul>
                    <li>Medio Ambiente y Energía</li>
                    <li>Química, Pulpa y Papel</li>
                    <li>Minería</li>
                </ul>
            </div>
            <div class="col me-5" style="overflow-x:auto;">
                <h4 class="h4">Especificaciones Técnicas de Sistemas de Trituración</h4>
                <table class="table table-striped">
                    <thead>
                        <tr class="border-top border-danger">
                            <th scope="col" class="border-bottom border-dark">Serie</th>
                            <th scope="col" class="border-bottom border-dark">Gasto Máximo (m3/h)</th>
                            <th scope="col" class="border-bottom border-dark">Presión Máxima (Bar)</th>
                            <th scope="col" class="border-bottom border-dark">Tamaños Disponibles</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td scope="col">M-Ovas</td>
                            <td scope="col">300</td>
                            <td scope="col">1</td>
                            <td scope="col">2</td>
                        </tr>
                        <tr>
                            <td scope="col">N.Mac Channel</td>
                            <td scope="col">400</td>
                            <td scope="col">6</td>
                            <td scope="col">4</td>
                        </tr>
                        <tr class="border-bottom border-dark">
                            <td scope="col">N.Mac Inline</td>
                            <td scope="col">350</td>
                            <td scope="col">6</td>
                            <td scope="col">3</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>





    {{-- Fin de container --}}
</div>
