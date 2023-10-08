<div class="container-fluid">
    <div>
        {{-- Logo --}}
        <div class="text-center">
            <figure class="figure">
                <img src="{{ asset('imagenes/bombas/netzsch/portada.png') }}"
                    class="figure-img img-fluid rounded" alt="...">
            </figure>
            <figure class="figure">
                <img src="{{ asset('imagenes/bombas/netzsch/logo.png') }}" width=30% height=10%
                    class="figure-img img-fluid rounded" alt="...">
            </figure>
        </div>

        {{-- Imagenes al seleccionar --}}
        <div>
            <div class="text-center border-top border-bottom border-2 row row-cols-2 row-cols-lg-5 g-2 g-lg-3">
                {{-- Imagen de Series Nemo --}}
                <div class="col">
                    <figure class="figure">
                        <a href="#nemo"><img src="{{ asset('imagenes/bombas/netzsch/nemo.jpg') }}" width="100%" class="figure-img img-fluid rounded" alt=""></a>
                        <figcaption class="figure-caption ">
                            <h6 class="h6">Serie Nemo</h6>
                        </figcaption>
                    </figure>
                </div>
                {{-- Imagen de Series KOR --}}
                <div class="col">
                    <figure class="figure">
                        <a href="#KOR"><img src="{{ asset('imagenes/bombas/altamira/KOR.png') }}" width="50%"
                                height="25%" class="figure-img img-fluid rounded" alt=""></a>
                        <figcaption class="figure-caption ">
                            <h6 class="h6">Series KOR</h6>
                        </figcaption>
                    </figure>
                </div>
                {{-- Imagen de Series Flux --}}
                <div class="col">
                    <figure class="figure">
                        <a href="#flux"><img src="{{ asset('imagenes/bombas/altamira/FLUX.jpg') }}"
                                class="figure-img img-fluid rounded" alt=""></a>
                        <figcaption class="figure-caption ">
                            <h6 class="h6">Series TX, TXE & TXN</h6>
                        </figcaption>
                    </figure>
                </div>
            </div>
        </div>
    </div>


    {{-- Contenido Series Nemo --}}
    <div class=" m-2 p-2">
        <div class="row m-1">
            <h4 id="nemo" class="h4">BOMBAS DE CAVIDAD PROGRESIVA INDUSTRIAL</h4>
        </div>
        <div class="row m-5 ps-5">
            <div class="col ms-5 ps-5">
                <figure class="figure"><img src="{{ asset('imagenes/bombas/netzsch/nemo.jpg') }}" width="70%"
                    class="figure-img img-fluid rounded" alt=""></figure>
                <figcaption>
                    <h6 class="h6">Serie Nemo</h6>
                </figcaption>
                {{-- <button type="button" class="btn btn-primary ms-4">Ver Catalogo</button> --}}
                <a href="https://www.vde.com.mx/media/amasty/amfile/attach/prEMfUpGuuFHVmYwDX1mldYpFVcNaVfw.pdf"
                    class="btn btn-primary ms-4">Nemo</a>
            </div>
            {{-- lh-base --}}
            <div class="col me-5 pe-5">
                <p>
                    Las avanzadas bombas de desplazamiento positivo de tornillo excéntrico de la reconocida marca
                    NETZSCH, pertenecientes a la serie NEMO, son altamente valoradas en diversas aplicaciones que
                    requieren un bombeo continuo, estable en cuanto a la presión, suave y con pocas pulsaciones.
                </p>
                <p>La versatilidad de la gama de bombas NETZSCH de la serie NEMO las convierte en una elección frecuente
                    en entornos industriales para transportar una amplia variedad de fluidos, desde materiales con
                    fibras, lodos, adhesivos, entre otros. Como por ejemplo el petróleo.</p>
            </div>
            <p>Ventajas</p>
            <li>Gran capacidad de succión- hasta 9 metros</li>
            <li>Posibilidad de invertir el sentido de giro y del caudal</li>
            <li>Puede instalarse en cualquier posición</li>
            <li>Funcionamiento silensiono y uniforme</li>
            <li>Temperatura desde -20ºC a +200 ºC</li>
            <li>El servicio puede efectuarse sin desconectar tubeías</li>

        </div>
        <div class="row">
            <div class="col ms-5">
                <h4 class="h4">Aplicaciones de las Bombas NETZSCH NEMO:</h4>
                <ul>
                    <li>Aplicaciones industriales en ingeniería ambiental</li>
                    <li>Bombeo de desechos en fábricas de procesamiento de animales</li>
                    <li>Descarga de pescado de barcos pesqueros</li>
                    <li>Dosificación de químicos y fluidos viscosas en la industria química</li>
                    <li>Procesamiento de fluidos compactos, delicados y fáciles de quebrarse en la industria química</li>
                    <li>Transferencia de fluidos viscosos en la industria alimenticia</li>
                    <li>Trasvase de gases y derivados de petróleo en la industria petrolera</li>
                    <li>Tratamiento de aguas de bombeo y residuales</li>

                </ul>
            </div>
            <div class="col me-5">
                <h4 class="h4">Especificaciones Técnicas de NETZSCH NEMO</h4>
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
                        <tr class="border-top-2 border-dark">
                            <td scope="col">NEMO B.Max</td>
                            <td scope="col">120</td>
                            <td scope="col">24</td>
                            <td scope="col">4</td>
                        </tr>
                        <tr class="border-top-2 border-dark">
                            <td scope="col">NEMO BT</td>
                            <td scope="col">310</td>
                            <td scope="col">24</td>
                            <td scope="col">11</td>
                        </tr>
                        <tr class="border-top-2 border-dark">
                            <td scope="col">NEMO Multifásica</td>
                            <td scope="col">1000</td>
                            <td scope="col">72</td>
                            <td scope="col">2</td>
                        </tr>
                        <tr class="border-top-2 border-dark">
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

    {{-- Contenido Series KOR --}}
    <div class=" m-2 p-2">
        <div class="row m-1">
            <h4 id="KOR" class="h4">Bombas Sumergibles Altamira Serie KOR en acero inoxidable</h4>
        </div>
        <div class="row m-5 ps-5">

            <div class="col ms-5 ps-5">
                <figure class="figure"><img src="{{ asset('imagenes/bombas/altamira/KOR.png') }}" width="100%"
                        height="35%" class="figure-img img-fluid rounded" alt=""></figure>
                <figcaption>
                    <h6 class="h6">Series KOR</h6>
                </figcaption>
                <a href="https://www.vde.com.mx/media/amasty/amfile/attach/KgBuHWztLWi6wL4V2QTzBDGKjMFW5ePW.pdf"
                    class="btn btn-primary ms-4">KOR 4”</a>
                <a href="https://www.vde.com.mx/media/amasty/amfile/attach/KgBuHWztLWi6wL4V2QTzBDGKjMFW5ePW.pdf"
                    class="btn btn-primary ms-4">KOR 6” 8” 10” </a>

            </div>
            {{-- lh-base --}}
            <div class="col me-5 pe-5">
                <p>
                    La familia de <b>Bombas Sumergibles Altamira de la Serie KOR </b> son totalmente en acero
                    inoxidable AISI 304.
                    Y son ideales para bombear agua limpia no corrosiva y no abrasiva en pozos profundos.
                <p> Son eficientes, robustas y de fácil mantenimiento. Pueden manejar agua con contenido de arena
                    hasta 50 g/m3, pH entre 5.6 & 7.0 y temperatura del agua hasta 30°C.</p>
                </p>
                <p>Especificaciones Técnicas de Bombas Altamira KOR:</p>
            </div>
        </div>
        <div class="row">
            <div class="col ms-5">
                <h4 class="h4">Aplicaciones de la Serie KOR bombear agua de:</h4>
                <ul>
                    <li>Pozos profundos</li>
                    <li>Estanques</li>
                    <li>Norias</li>
                    <li>Lagos</li>
                    <li>Redes de agua potable</li>
                    <li>Hidroneumaticos</li>

                </ul>
            </div>
            <div class="col me-5">
                <h4 class="h4">RANGOS DE OPERACIÓN </h4>
                <table class="table ">
                    <thead>
                        <tr>
                            <th class="border">Modelo Altamira Serie KOR</th>
                            <th class="border">LPS</th>
                            <th class="border">LPM</th>
                            <th class="border">GPM</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="border">KOR07</td>
                            <td class="border">0.7</td>
                            <td class="border">42</td>
                            <td class="border">11</td>
                        </tr>
                        <tr>
                            <td class="border">KOR1.2</td>
                            <td class="border">1.2</td>
                            <td class="border">72</td>
                            <td class="border">19</td>
                        </tr>
                        <tr>
                            <td class="border">KOR2</td>
                            <td class="border">2</td>
                            <td class="border">120</td>
                            <td class="border">31</td>
                        </tr>
                        <tr>
                            <td class="border">KOR3</td>
                            <td class="border">3</td>
                            <td class="border">180</td>
                            <td class="border">47</td>
                        </tr>
                        <tr>
                            <td class="border">KOR4.5</td>
                            <td class="border">4.5</td>
                            <td class="border">270</td>
                            <td class="border">71</td>
                        </tr>
                        <tr>
                            <td class="border">KOR6</td>
                            <td class="border">6</td>
                            <td class="border">360</td>
                            <td class="border">95</td>
                        </tr>
                        <tr>
                            <td class="border">KOR10</td>
                            <td class="border">10</td>
                            <td class="border">600</td>
                            <td class="border">158</td>
                        </tr>
                        <tr>
                            <td class="border">KOR15</td>
                            <td class="border">15</td>
                            <td class="border">900</td>
                            <td class="border">237</td>
                        </tr>
                        <tr>
                            <td class="border">KOR20</td>
                            <td class="border">20</td>
                            <td class="border">1200</td>
                            <td class="border">317</td>
                        </tr>
                        <tr>
                            <td class="border">KOR25</td>
                            <td class="border">25</td>
                            <td class="border">1500</td>
                            <td class="border">396</td>
                        </tr>
                        <tr>
                            <td class="border">KOR32</td>
                            <td class="border">32</td>
                            <td class="border">1920</td>
                            <td class="border">507</td>
                        </tr>
                        <tr>
                            <td class="border">KOR40</td>
                            <td class="border">40</td>
                            <td class="border">2400</td>
                            <td class="border">634</td>
                        </tr>
                        <tr>
                            <td class="border">KOR53</td>
                            <td class="border">53</td>
                            <td class="border">3180</td>
                            <td class="border">840</td>
                        </tr>
                        <tr>
                            <td class="border">KOR70</td>
                            <td class="border">70</td>
                            <td class="border">4200</td>
                            <td class="border">1109</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    {{-- Contenido Series Flux --}}
    <div class=" m-2 p-2">
        <div class="row m-1">
            <h4 id="flux" class="h4">Bombas Centrifugas Horizontales Altamira Serie Flux</h4>
        </div>
        <div class="row m-5 ps-5">

            <div class="col ms-3 ps-5">
                <figure class="figure"><img src="{{ asset('imagenes/bombas/altamira/FLUX.jpg') }}"
                        class="figure-img img-fluid rounded" alt=""></figure>
                <figcaption>
                    <h6 class="h6">Series FLUX</h6>
                </figcaption>
                <a href="https://www.vde.com.mx/amfile/file/download/file/717/product/1118/"
                    class="btn btn-primary ms-4">Ver Catalogo</a>
            </div>
            <div class="col me-5 pe-5">
                <p>
                    Las bombas <b>bombas Serie FLUX de Altamira son una amplia gama de Motobombas
                        Centrífugas Horizontales monoetapa </b>, el cuerpo esta fabricado en acero
                    inoxidable 304 y son utiles para aplicaciones donde se requiere que el agua no
                    tenga contacto con materiales sujetos a oxidación.</p>
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col ms-5">
                <h4 class="h4">Aplicaciones de las bombas Altamira FLUX:</h4>
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
            <div class="col me-5">
                <h4 class="h4">Especificaciones Técnicas de la Serie FLUX:</h4>
                <table class="table ">
                    <thead>
                        <tr>
                            <th class="border">Serie</th>
                            <th class="border">Flujo Máximo (GPM)</th>
                            <th class="border">Carga Máxima (m)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="border">FLUX4</td>
                            <td class="border">100</td>
                            <td class="border">35</td>
                        </tr>
                        <tr>
                            <td class="border">FLUX5</td>
                            <td class="border">100</td>
                            <td class="border">65</td>
                        </tr>
                        <tr>
                            <td class="border">FLUX7</td>
                            <td class="border">175</td>
                            <td class="border">70</td>
                        </tr>
                        <tr>
                            <td class="border">FLUX12</td>
                            <td class="border">300</td>
                            <td class="border">75</td>
                        </tr>
                        <tr>
                            <td class="border">FLUX24</td>
                            <td class="border">570</td>
                            <td class="border">30</td>
                        </tr>
                        <tr>
                            <td class="border">FLUX28</td>
                            <td class="border">570</td>
                            <td class="border">75</td>
                        </tr>
                        <tr>
                            <td class="border">FLUX38</td>
                            <td class="border">870</td>
                            <td class="border">40</td>
                        </tr>
                        <tr>
                            <td class="border">FLUX44</td>
                            <td class="border">870</td>
                            <td class="border">65</td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
