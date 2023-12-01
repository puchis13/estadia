    <div class="container-fluid">
        {{-- Menu --}}
        <div>
            {{-- Logo --}}
            <div class="text-center">
                <figure class="figure">
                    <img src="{{ asset('imagenes/bombas/altamira/logo.png') }}" width=40%
                        class="figure-img img-fluid rounded" alt="...">
                </figure>
            </div>

            {{-- Imagenes al seleccionar --}}
            <div>
                {{-- Esto es la Fila --}}
                <div class="text-center border-top border-bottom border-2 row row-cols-2 row-cols-md-5 g-2 g-lg-3">

                    {{-- Imagen de Series Tx --}}
                    <div class="col mb-3">
                        <figure class="figure">
                            <a href="#tx"><img src="{{ asset('imagenes/bombas/altamira/tx.png') }}" width="47%"
                                    class="figure-img img-fluid rounded" alt=""></a>
                            <figcaption class="figure-caption">
                                <h6 class="h6">Series TX</h6>
                            </figcaption>
                        </figure>
                    </div>

                    {{-- Imagen de Series KOR --}}
                    <div class="col mb-3">
                        <figure class="figure">
                            <a href="#KOR"><img src="{{ asset('imagenes/bombas/altamira/KOR.png') }}" width="57%"
                                    class="figure-img img-fluid rounded" alt=""></a>
                            <figcaption class="figure-caption">
                                <h6 class="h6">Series KOR</h6>
                            </figcaption>
                        </figure>
                    </div>

                    {{-- Imagen de Series Flux --}}
                    <div class="col mb-3">
                        <figure class="figure">
                            <a href="#flux"><img src="{{ asset('imagenes/bombas/altamira/FLUX.jpg') }}"
                                    class="figure-img img-fluid rounded" alt=""></a>
                            <figcaption class="figure-caption">
                                <h6 class="h6">Series Flux</h6>
                            </figcaption>
                        </figure>
                    </div>

                    {{-- Imagen de Series EKRC Y Eco-Kal --}}
                    <div class="col mb-3">
                        <figure class="figure">
                            <a href="#ekrc"><img src="{{ asset('imagenes/bombas/altamira/ekrc.jpg') }}" width="80%"
                                    class="figure-img img-fluid rounded" alt=""></a>
                            <figcaption class="figure-caption">
                                <h6 class="h6">Series EKRC y Eco-Kal</h6>
                            </figcaption>
                        </figure>
                    </div>

                    {{-- Imagen de Series XLB --}}
                    <div class="col mb-3">
                        <figure class="figure">
                            <a href="#xlb"><img src="{{ asset('imagenes/bombas/altamira/xlb.png') }}" width="80%"
                                    class="figure-img img-fluid rounded" alt=""></a>
                            <figcaption class="figure-caption">
                                <h6 class="h6">Series XLB</h6>
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

        {{-- Contenido Series TX --}}
        <div>
            <div class="row">
                <div class="col m-2 mt-3 pb-3">
                    <h4 id="tx" class="h4">Bombas Multietapas Verticales Altamira Series TX</h4>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3 p-2">
                <div class="col-md-6 mt-3">
                    <figure class="figure d-flex justify-content-center"><img src="{{ asset('imagenes/bombas/altamira/tx.png') }}" width="40%"
                            class="figure-img img-fluid rounded" alt=""></figure>
                    <figcaption class="d-flex justify-content-center">
                        <h6 class="h6">Series TX</h6>
                    </figcaption>
                    {{-- direccion de catalogo --}}
                    <div class="d-flex justify-content-center">
                        <a href="https://www.vde.com.mx/media/amasty/amfile/attach/prEMfUpGuuFHVmYwDX1mldYpFVcNaVfw.pdf"
                            class="btn btn-primary">Ficha Técnica</a>
                    </div>
                </div>
                <div class="col-md-6 mt-lg-5 text-justify">
                    {{-- Texto --}}
                    <p>
                        Las <b>Bombas Multietapas Altamira TX</b> son ideales para aplicaciones industriales
                        de
                        alta presión,
                        disponibles en 12 rangos de flujo y más de 165 rangos de presión. Existen 3 versiones de
                        materiales
                        de
                        construcción del equipo según la versión seleccionada para adaptarse a los requerimientos de la
                        aplicación.
                        Por su diseño vertical nos permiten ahorrar espacio y además facilitan la instalación por contar
                        con
                        un
                        diseño de succión y descarga en linea.
                    </p>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3 p-2">
                <div class="col-md-6 mt-lg-5 text-justify">
                    <!-- Aplicaciones -->
                    <h4 class="h4">Aplicaciones de las Series TX</h4>
                    <ul>
                        <li>Calderas</li>
                        <li>Hidroneumáticos sencillos</li>
                        <li>Torres de enfriamiento</li>
                        <li>Sistema de irrigación</li>
                        <li>Sistemas contra incendio</li>
                        <li>Manejo de agua potable</li>
                        <li>Sistemas de ósmosis inversa</li>
                        <li>Alimentación de calderas</li>
                        <li>Sistemas de irrigación</li>
                        <li>Lavado industrial</li>
                        <li>Tratamiento de agua</li>
                        <li>Sistema de refrigeración y aire acondicionado</li>
                        <li>Sistemas de presión constante</li>
                        <li>Circulación de agua en sistemas de calefacción</li>
                    </ul>
                </div>
                <!-- Tabla -->
                <div class="col-md-6 mt-lg-5 text-justify" style="overflow-x:auto;">
                    <h4 class="h4">Rendimiento Hidráulico</h4>
                    <table class="table table-striped">
                        <thead>
                            <tr class="border-top border-danger">
                                <th scope="col" class="border-bottom border-dark">Modelo Serie TX</th>
                                <th scope="col" class="border-bottom border-dark">LPS</th>
                                <th scope="col" class="border-bottom border-dark">LPM</th>
                                <th scope="col" class="border-bottom border-dark">GPM</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td scope="col">T0.6X</td>
                                <td scope="col">0.6</td>
                                <td scope="col">36</td>
                                <td scope="col">9.5</td>
                            </tr>
                            <tr>
                                <td scope="col">T1X</td>
                                <td scope="col">1</td>
                                <td scope="col">60</td>
                                <td scope="col">15.85</td>
                            </tr>
                            <tr>
                                <td scope="col">T2X</td>
                                <td scope="col">2</td>
                                <td scope="col">120</td>
                                <td scope="col">31.7</td>
                            </tr>
                            <tr>
                                <td scope="col">T3.5X</td>
                                <td scope="col">3.5</td>
                                <td scope="col">210</td>
                                <td scope="col">55.48</td>
                            </tr>
                            <tr>
                                <td scope="col">T6X</td>
                                <td scope="col">6</td>
                                <td scope="col">360</td>
                                <td scope="col">95.11</td>
                            </tr>
                            <tr>
                                <td scope="col">T7.5X</td>
                                <td scope="col">7.5</td>
                                <td scope="col">450</td>
                                <td scope="col">118.89</td>
                            </tr>
                            <tr>
                                <td scope="col">T10X</td>
                                <td scope="col">10</td>
                                <td scope="col">600</td>
                                <td scope="col">158.52</td>
                            </tr>
                            <tr>
                                <td scope="col">T13X</td>
                                <td scope="col">13</td>
                                <td scope="col">780</td>
                                <td scope="col">206.07</td>
                            </tr>
                            <tr>
                                <td scope="col">T21X</td>
                                <td scope="col">21</td>
                                <td scope="col">1260</td>
                                <td scope="col">332.89</td>
                            </tr>
                            <tr>
                                <td scope="col">T29X</td>
                                <td scope="col">29</td>
                                <td scope="col">1740</td>
                                <td scope="col">459.7</td>
                            </tr>
                            <tr>
                                <td scope="col">T33X</td>
                                <td scope="col">33</td>
                                <td scope="col">1980</td>
                                <td scope="col">52.11</td>
                            </tr>
                            <tr class="border-bottom border-dark">
                                <td scope="col">T41X</td>
                                <td scope="col">41</td>
                                <td scope="col">2460</td>
                                <td scope="col">649.93</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        {{-- Contenido Series KOR --}}
        <div>
            <div class="row">
                <div class="col m-2 mt-3 pb-3">
                    <h4 id="KOR" class="h4">Bombas Sumergibles Altamira Serie KOR en Inox</h4>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3 p-2">
                <div class="col-md-6 mt-3">
                    <figure class="figure d-flex justify-content-center"><img src="{{ asset('imagenes/bombas/altamira/KOR.png') }}"
                            width="40%" class="figure-img img-fluid rounded" alt=""></figure>
                            <figcaption class="d-flex justify-content-center">
                                <h6 class="h6">Series KOR</h6>
                    </figcaption>
                    {{-- direccion de catalogo --}}
                    <div class="d-flex justify-content-center">
                        <a href="https://drive.google.com/file/d/1jicJtimdpoTUPZYqImZ9dX6GvDFy3JZf/view?usp=drive_link"
                            class="btn btn-primary mt-2 mb-2">Ficha KOR 4”</a>
                    </div>
                    <div class="d-flex justify-content-center">
                        <a href="https://www.vde.com.mx/media/amasty/amfile/attach/KgBuHWztLWi6wL4V2QTzBDGKjMFW5ePW.pdf"
                            class="btn btn-primary">Ficha KOR 6” 8” 10” </a>
                    </div>
                </div>
                <div class="col-md-6 mt-lg-5 text-justify">
                    <!-- Texto -->
                    <p>
                        La familia de <b>Bombas Sumergibles Altamira de la Serie KOR </b> son totalmente en acero
                        inoxidable AISI 304.
                        Y son ideales para bombear agua limpia no corrosiva y no abrasiva en pozos profundos.
                    <p> Son eficientes, robustas y de fácil mantenimiento. Pueden manejar agua con contenido de arena
                        hasta 50 g/m3, pH entre 5.6 & 7.0 y temperatura del agua hasta 30°C.</p>
                    </p>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3 p-2">
                <div class="col-md-6 mt-lg-5 text-justify">
                    <!-- Aplicaciones -->
                    <h4 class="h4">Aplicaciones de la serie KOR bombear agua de:</h4>
                    <ul>
                        <li>Pozos profundos</li>
                        <li>Estanques</li>
                        <li>Norias</li>
                        <li>Lagos</li>
                        <li>Redes de agua potable</li>
                        <li>Hidroneumaticos</li>
                    </ul>
                </div>
                <!-- Tabla -->
                <div class="col-md-6 mt-lg-5 text-justify" style="overflow-x:auto;">
                    <h4 class="h4">Rangos de Operación</h4>
                    <table class="table table-striped ">
                        <thead>
                            <tr class="border-top border-danger">
                                <th scope="col" class="border-bottom border-dark">Modelo Altamira Serie KOR</th>
                                <th scope="col" class="border-bottom border-dark">LPS</th>
                                <th scope="col" class="border-bottom border-dark">LPM</th>
                                <th scope="col" class="border-bottom border-dark">GPM</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td scope="col">KOR07</td>
                                <td scope="col">0.7</td>
                                <td scope="col">42</td>
                                <td scope="col">11</td>
                            </tr>
                            <tr>
                                <td scope="col">KOR1.2</td>
                                <td scope="col">1.2</td>
                                <td scope="col">72</td>
                                <td scope="col">19</td>
                            </tr>
                            <tr>
                                <td scope="col">KOR2</td>
                                <td scope="col">2</td>
                                <td scope="col">120</td>
                                <td scope="col">31</td>
                            </tr>
                            <tr>
                                <td scope="col">KOR3</td>
                                <td scope="col">3</td>
                                <td scope="col">180</td>
                                <td scope="col">47</td>
                            </tr>
                            <tr>
                                <td scope="col">KOR4.5</td>
                                <td scope="col">4.5</td>
                                <td scope="col">270</td>
                                <td scope="col">71</td>
                            </tr>
                            <tr>
                                <td scope="col">KOR6</td>
                                <td scope="col">6</td>
                                <td scope="col">360</td>
                                <td scope="col">95</td>
                            </tr>
                            <tr>
                                <td scope="col">KOR10</td>
                                <td scope="col">10</td>
                                <td scope="col">600</td>
                                <td scope="col">158</td>
                            </tr>
                            <tr>
                                <td scope="col">KOR15</td>
                                <td scope="col">15</td>
                                <td scope="col">900</td>
                                <td scope="col">237</td>
                            </tr>
                            <tr>
                                <td scope="col">KOR20</td>
                                <td scope="col">20</td>
                                <td scope="col">1200</td>
                                <td scope="col">317</td>
                            </tr>
                            <tr>
                                <td scope="col">KOR25</td>
                                <td scope="col">25</td>
                                <td scope="col">1500</td>
                                <td scope="col">396</td>
                            </tr>
                            <tr>
                                <td scope="col">KOR32</td>
                                <td scope="col">32</td>
                                <td scope="col">1920</td>
                                <td scope="col">507</td>
                            </tr>
                            <tr>
                                <td scope="col">KOR40</td>
                                <td scope="col">40</td>
                                <td scope="col">2400</td>
                                <td scope="col">634</td>
                            </tr>
                            <tr>
                                <td scope="col">KOR53</td>
                                <td scope="col">53</td>
                                <td scope="col">3180</td>
                                <td scope="col">840</td>
                            </tr>
                            <tr class="border-bottom border-dark">
                                <td scope="col">KOR70</td>
                                <td scope="col">70</td>
                                <td scope="col">4200</td>
                                <td scope="col">1109</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        {{-- Contenido Series Flux --}}
        <div>
            <div class="row">
                <div class="col m-2 mt-3 pb-3">
                    <h4 id="flux" class="h4">Bombas Centrifugas Horizontales Altamira Serie Flux</h4>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3 p-2">
                <div class="col-md-6 mt-3">
                    <figure class="figure d-flex justify-content-center"><img src="{{ asset('imagenes/bombas/altamira/FLUX.jpg') }}"
                            class="figure-img img-fluid rounded" alt=""></figure>
                    <figcaption class="d-flex justify-content-center">
                        <h6 class="h6">Series Flux</h6>
                    </figcaption>
                    {{-- direccion de catalogo --}}
                    <div class="d-flex justify-content-center">
                        <a href="https://www.vde.com.mx/amfile/file/download/file/717/product/1118/"
                            class="btn btn-primary">Ficha Técnica</a>
                    </div>
                </div>
                <div class="col-md-6 mt-lg-5 text-justify">
                    <!-- Texto -->
                    <p>
                        Las bombas <b>bombas Serie Flux de Altamira son una amplia gama de Motobombas
                            Centrífugas Horizontales monoetapa </b>, el cuerpo esta fabricado en acero
                        inoxidable 304 y son utiles para aplicaciones donde se requiere que el agua no
                        tenga contacto con materiales sujetos a oxidación.</p>
                    </p>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3 p-2">
                <div class="col-md-6 mt-lg-5 text-justify">
                    <!-- Aplicaciones -->
                    <h4 class="h4">Aplicaciones de las bombas Altamira Flux</h4>
                    <ul>
                        <li>Sistemas de agua potable</li>
                        <li>Alimentación de calderas</li>
                        <li>Aplicaciones en el sector de la agricultura</li>
                        <li>Aplicaciones en sistemas de agua potable</li>
                        <li>Sistemas contra incendio</li>
                        <li>Sistemas de condensación</li>
                        <li>Sistemas de enfriamiento</li>
                        <li>Sistemas de la industria de alimentos</li>
                        <li>Sistemas de limpieza</li>

                    </ul>
                </div>
                <!-- Tabla -->
                <div class="col-md-6 mt-lg-5 text-justify" style="overflow-x:auto;">
                    <h4 class="h4">Especificaciones Técnicas de la Serie Flux:</h4>
                    <table class="table table-striped">
                        <thead>
                            <tr class="border-top border-danger">
                                <th scope="col" class="border-bottom border-dark">Serie</th>
                                <th scope="col" class="border-bottom border-dark">Flujo Máximo (GPM)</th>
                                <th scope="col" class="border-bottom border-dark">Carga Máxima (m)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td scope="col">FLUX4</td>
                                <td scope="col">100</td>
                                <td scope="col">35</td>
                            </tr>
                            <tr>
                                <td scope="col">FLUX5</td>
                                <td scope="col">100</td>
                                <td scope="col">65</td>
                            </tr>
                            <tr>
                                <td scope="col">FLUX7</td>
                                <td scope="col">175</td>
                                <td scope="col">70</td>
                            </tr>
                            <tr>
                                <td scope="col">FLUX12</td>
                                <td scope="col">300</td>
                                <td scope="col">75</td>
                            </tr>
                            <tr>
                                <td scope="col">FLUX24</td>
                                <td scope="col">570</td>
                                <td scope="col">30</td>
                            </tr>
                            <tr>
                                <td scope="col">FLUX28</td>
                                <td scope="col">570</td>
                                <td scope="col">75</td>
                            </tr>
                            <tr>
                                <td scope="col">FLUX38</td>
                                <td scope="col">870</td>
                                <td scope="col">40</td>
                            </tr>
                            <tr class="border-bottom border-dark">
                                <td scope="col">FLUX44</td>
                                <td scope="col">870</td>
                                <td scope="col">65</td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        {{-- Contenido Series EKRC Y Eco-Kal --}}

        {{-- Esto es del contenido de Serie EKRC --}}
        <div>
            <div class="row">
                <div class="col m-2 mt-3 pb-3">
                    <h4 id="ekrc" class="h4">Bombas de calor para piscina Hidrocontrol Serie EKRC</h4>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3 p-2">
                <div class="col-md-6 mt-3">
                    <figure class="figure d-flex justify-content-center"><img src="{{ asset('imagenes/bombas/altamira/ekrc.jpg') }}" width="60%"
                            class="figure-img img-fluid rounded" alt="">
                    </figure>
                    <figcaption class="d-flex justify-content-center">
                        <h6 class="h6">Serie EKRC</h6>
                    </figcaption>
                    {{-- direccion de catalogo --}}
                    <div class="d-flex justify-content-center">
                        <a href="https://drive.google.com/file/d/1WHK3xLg5aLM3CPTybyUbBwYOfrw8-R8a/view"
                            class="btn btn-primary">Ficha EKRC</a>
                    </div>
                </div>
                <!-- Texto -->
                <div class="col-md-6 mt-lg-5 text-justify">
                    <p>
                        Las bombas de calor Hidrocontrol son muy competitivas en el mercado, además la serie EKRC tienen
                        un display de LCD y un robusto intercambiador de calor construido en titanio, refrigerante
                        ecologico, función Spa (hasta 40ºC) y temporalizador programable (excepto modelo 24).
                    </p>
                    <!-- Aplicaciones -->
                    <h4 class="h4">Aplicaciones</h4>
                    <ul>
                        <li>Piscinas residenciales y comerciales</li>
                        <li>Tinas de hidromasaje (Spa) </li>
                    </ul>
                </div>
            </div>
            <!-- Tabla -->
            <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3 p-2">
                <div class="col-md-12 mt-lg-5 text-justify" style="overflow-x:auto;">
                    <h4 class="h4">Especificaciones Técnicas</h4>
                    <table class="table table-striped">
                        <thead>
                            <tr class="border-top border-danger">
                                <th scope="col" class="border-bottom border-dark">Código</th>
                                <th scope="col" class="border-bottom border-dark">BTU</th>
                                <th scope="col" class="border-bottom border-dark">∆ COEF. DESEM.</th>
                                <th scope="col" class="border-bottom border-dark">Fases x Volts</th>
                                <th scope="col" class="border-bottom border-dark">Compresor RLA/LRA</th>
                                <th scope="col" class="border-bottom border-dark">Flujo de Circulacion de Agua
                                </th>
                                <th scope="col" class="border-bottom border-dark">Decibeles</th>
                                <th scope="col" class="border-bottom border-dark">Succión x Descarga (Pulgadas)
                                </th>
                                <th scope="col" class="border-bottom border-dark">Peso (kg)</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td scope="col">EKRC-24SPA/1230</td>
                                <td scope="col">24,000</td>
                                <td scope="col">5.5 A</td>
                                <td scope="col">1 x 230 Vca (± 10%)</td>
                                <td scope="col">4.8 A</td>
                                <td scope="col">12 GPM</td>
                                <td scope="col">55 dB</td>
                                <td scope="col">1.5 x 1.5 (Rosca macho)</td>
                                <td scope="col">32</td>

                            </tr>
                            <tr>
                                <td scope="col">EKRC-32SPA/1230</td>
                                <td scope="col">32,000</td>
                                <td scope="col">6.6 A</td>
                                <td scope="col">1 x 230 Vca (± 10%)</td>
                                <td scope="col">6.5 A</td>
                                <td scope="col">11 - 17 GPM</td>
                                <td scope="col">50 dB</td>
                                <td scope="col">2 x2 (Cementar)</td>
                                <td scope="col">56</td>
                            </tr>
                            <tr>
                                <td scope="col">EKRC-53SPA/1230</td>
                                <td scope="col">53,000</td>
                                <td scope="col">6.6 A</td>
                                <td scope="col">1 x 230 Vca (± 10%)</td>
                                <td scope="col">10.8 A</td>
                                <td scope="col">20 - 27 GPM</td>
                                <td scope="col">53 dB</td>
                                <td scope="col">2 x2 (Cementar)</td>
                                <td scope="col">69</td>
                            </tr>
                            <tr>
                                <td scope="col">EKRC-80SPA/1230</td>
                                <td scope="col">80,000</td>
                                <td scope="col">6.5 A</td>
                                <td scope="col">1 x 230 Vca (± 10%)</td>
                                <td scope="col">16.5 A</td>
                                <td scope="col">33 - 39 GPM</td>
                                <td scope="col">56 dB</td>
                                <td scope="col">2 x2 (Cementar)</td>
                                <td scope="col">99</td>
                            </tr>
                            <tr class="border-bottom border-dark">
                                <td scope="col">EKRC-110SPA/1230</td>
                                <td scope="col">110,000</td>
                                <td scope="col">6.7 A</td>
                                <td scope="col">1 x 230 Vca (± 10%)</td>
                                <td scope="col">22A</td>
                                <td scope="col">36 - 53 GPM</td>
                                <td scope="col">61 dB</td>
                                <td scope="col">2 x2 (Cementar)</td>
                                <td scope="col">119</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        {{-- Esto es del contenido de Serie Eco-Kal --}}
        <div>
            <div class="row">
                <div class="col m-2 mt-3 pb-3">
                    <h4 class="h4">Bomba para piscina hidrocontrol serie Eco-Kal</h4>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3 p-2">
                <div class="col-md-6 mt-3">
                    <figure class="figure d-flex justify-content-center"><img src="{{ asset('imagenes/bombas/altamira/ecokal.jpg') }}"
                            width="50%" class="figure-img img-fluid rounded" alt="">
                    </figure>
                    <figcaption class="d-flex justify-content-center">
                        <h6 class="h6">Serie Eco-Kal</h6>
                    </figcaption>
                    {{-- direccion de catalogo --}}
                    <div class="d-flex justify-content-center">
                        <a href="https://drive.google.com/file/d/1NChOmaDmm6ltMKufbeEweQYwXoXAdZ6u/view"
                            class="btn btn-primary">Ficha Eco-Kal</a>
                    </div>
                </div>
                <div class="col-md-6 mt-lg-5 text-justify">
                    <!-- Texto -->
                    <p>
                        La bomba de calor Eco-Kal es muy silenciosa gracias al ventilador de baja velocidad y al
                        excelente diseño del compresor (56 decibeles), Intercambiador de titanio, protecciones contra:
                        Alta y baja presión del refrigerante, ahorra energia, automatización basica a traves de un
                        interruptor inalámbrico
                    </p>
                    <!-- Aplicaciones -->
                    <h4 class="h4">Aplicaciones</h4>
                    <ul>
                        <li>Piscinas residenciales y comerciales</li>
                    </ul>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3 p-2">
                <!-- Tabla -->
                <div class="col-md-12 mt-lg-5 text-justify" style="overflow-x:auto;">
                    <h4 class="h4">Especificaciones Técnicas</h4>
                    <table class="table table-striped">
                        <thead>
                            <tr class="border-top border-danger">
                                <th scope="col" class="border-bottom border-dark">Código</th>
                                <th scope="col" class="border-bottom border-dark">Descripción</th>
                                <th scope="col" class="border-bottom border-dark">BTU</th>
                                <th scope="col" class="border-bottom border-dark">∆ COEF. DESEM.</th>
                                <th scope="col" class="border-bottom border-dark">MCA</th>
                                <th scope="col" class="border-bottom border-dark">MOP</th>
                                <th scope="col" class="border-bottom border-dark">Fases x Volts</th>
                                <th scope="col" class="border-bottom border-dark">Succión x Descarga (Pulgadas)
                                </th>
                                <th scope="col" class="border-bottom border-dark">Calor / Frio</th>
                                <th scope="col" class="border-bottom border-dark">Peso (kg)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td scope="col">EKN 110/1230-C</td>
                                <td scope="col">Bomba de calor 110KBTU 1F 230V</td>
                                <td scope="col">110,000</td>
                                <td scope="col">6.4</td>
                                <td scope="col">37</td>
                                <td scope="col">40</td>
                                <td scope="col">1 x 230</td>
                                <td scope="col">Cementar 2 x 2 (H-H)</td>
                                <td scope="col">No</td>
                                <td scope="col">99</td>
                            </tr>
                            <tr>
                                <td scope="col">EKN 120/1230-C</td>
                                <td scope="col">Bomba de calor 120KBTU 1F 230V</td>
                                <td scope="col">120,000</td>
                                <td scope="col">6.3</td>
                                <td scope="col">37</td>
                                <td scope="col">50</td>
                                <td scope="col">1 x 230</td>
                                <td scope="col">Cementar 2 x 2 (H-H)</td>
                                <td scope="col">No</td>
                                <td scope="col">99</td>
                            </tr>
                            <tr>
                                <td scope="col">EKN 136/1230-C</td>
                                <td scope="col">Bomba de calor 136KBTU 1F 230V</td>
                                <td scope="col">136,000</td>
                                <td scope="col">6</td>
                                <td scope="col">37</td>
                                <td scope="col">50</td>
                                <td scope="col">1 x 230</td>
                                <td scope="col">Cementar 2 x 2 (H-H)</td>
                                <td scope="col">No</td>
                                <td scope="col">101</td>
                            </tr>
                            <tr class="border-bottom border-dark">
                                <td scope="col">EKN 120/1230-FC</td>
                                <td scope="col">Bomba de calor/Chiller 120KBTU 1F 230V</td>
                                <td scope="col">120,000</td>
                                <td scope="col">6.1</td>
                                <td scope="col">40</td>
                                <td scope="col">50</td>
                                <td scope="col">1 x 230</td>
                                <td scope="col">Cementar 2 x 2 (H-H)</td>
                                <td scope="col">Si</td>
                                <td scope="col">101</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        {{-- Contenido Series XLB --}}
        <div>
            <div class="row">
                <div class="col m-2 mt-3 pb-3">
                    <h4 id="xlb" class="h4">Tanques Precargados Altamira Serie Pro XLB </h4>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3 p-2">
                <div class="col-md-6 mt-3">
                    <figure class="figure d-flex justify-content-center"><img src="{{ asset('imagenes/bombas/altamira/xlb.png') }}" width="60%"
                            class="figure-img img-fluid rounded" alt=""></figure>
                    <figcaption class="d-flex justify-content-center">
                        <h6 class="h6">Series XLB</h6>
                    </figcaption>
                    {{-- direccion de catalogo --}}
                    <div class="d-flex justify-content-center">
                        <a href="https://drive.google.com/file/d/1lkYVY-7j3nWz4teq4zkN2kFKs9eYJeAl/view?usp=sharing"
                            class="btn btn-primary">Ficha Técnica</a>
                    </div>
                </div>
                <div class="col-md-6 mt-lg-5 text-justify">
                    {{-- Texto --}}
                    <p>
                        Los tanques Altamira precargados de Diafragma son usados para sistemas hidroneumáticos de agua a
                        presión. La serie PRO-XLB está diseñada para aplicaciones que exigen mucho mayor resistencia,
                        por ejemplo:
                    </p>
                    <p>
                        Aplicaciones a la intemperie, lluvia acida, exposición solar y rayos UV, resistencia a la
                        corrosión ó humedad, también son los ideales para zonas costeras y ambientes salino y
                        temperaturas ambientes de hasta 52 grados centígrados. Además cumplen con la certificaciones NSF
                        y ANSI.
                    </p>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3 p-2">
                <div class="col-md-6 mt-lg-5 text-justify">
                    <!-- Aplicaciones -->
                    <h4 class="h4">Aplicaciones de las Series TX</h4>
                    <ul>

                        <li>Sistemas de purificación de agua</li>
                        <li>Sistemas de agua a presión </li>
                        <li>Hidroneumaticos </li>
                    </ul>
                </div>
                <!-- Tabla -->
                <div class="col-md-6 mt-lg-5 text-justify" style="overflow-x:auto;">
                    <h4 class="h4">Especificaciones Técnicas de tanques Altamira PRO XLB:</h4>
                    <table class="table table-striped">
                        <thead>
                            <tr class="border-top border-danger">
                                <th scope="col" class="border-bottom border-dark">Modelo</th>
                                <th scope="col" class="border-bottom border-dark">Capacidad del Tanque</th>
                                <th scope="col" class="border-bottom border-dark">Presión Máxima</th>
                                <th scope="col" class="border-bottom border-dark">Diámetro de conexión en pulg</th>
                                <th scope="col" class="border-bottom border-dark">20/40 PSI</th>
                                <th scope="col" class="border-bottom border-dark">30/50 PSI</th>
                                <th scope="col" class="border-bottom border-dark">40/60 PSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td scope="col">Altapro XLB20</td>
                                <td scope="col">20 Gal</td>
                                <td scope="col">125 PSI</td>
                                <td scope="col">1” NPT hembra</td>
                                <td scope="col">7.3</td>
                                <td scope="col">6.1</td>
                                <td scope="col">5.3</td>
                            </tr>
                            <tr>
                                <td scope="col">Altapro XLB26</td>
                                <td scope="col">26 Gal</td>
                                <td scope="col">125 PSI</td>
                                <td scope="col">1” NPT hembra</td>
                                <td scope="col">8.9</td>
                                <td scope="col">7.7</td>
                                <td scope="col">6.7</td>
                            </tr>
                            <tr>
                                <td scope="col">Altapro XLB45</td>
                                <td scope="col">45 Gal</td>
                                <td scope="col">125 PSI</td>
                                <td scope="col">1” NPT hembra</td>
                                <td scope="col">16.5</td>
                                <td scope="col">13.9</td>
                                <td scope="col">12.1</td>
                            </tr>
                            <tr>
                                <td scope="col">Altapro XLB65</td>
                                <td scope="col">65 Gal</td>
                                <td scope="col">125 PSI</td>
                                <td scope="col">1” NPT hembra</td>
                                <td scope="col">23.9</td>
                                <td scope="col">20</td>
                                <td scope="col">17.4</td>
                            </tr>
                            <tr>
                                <td scope="col">Altapro XLB86</td>
                                <td scope="col">86 Gal</td>
                                <td scope="col">125 PSI</td>
                                <td scope="col">1” NPT hembra</td>
                                <td scope="col">30.9</td>
                                <td scope="col">25.9</td>
                                <td scope="col">22.5</td>
                            </tr>
                            <tr class="border-bottom border-dark">
                                <td scope="col">Altapro XLB119</td>
                                <td scope="col">119 Gal</td>
                                <td scope="col">125 PSI</td>
                                <td scope="col">1” NPT hembra</td>
                                <td scope="col">42.9</td>
                                <td scope="col">35.9</td>
                                <td scope="col">31.3</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>


        {{-- Fin de container --}}
    </div>
