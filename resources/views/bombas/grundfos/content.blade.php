    <div class="container-fluid">
        {{-- Menu --}}
        <div>
            {{-- Logo --}}
            <div class="text-center">

                <figure class="figure">
                    <img src="{{ asset('imagenes/bombas/grundfos/logo.png') }}" width="30%"
                        class="figure-img img-fluid rounded" alt="...">
                </figure>

            </div>

            {{-- Imagenes al seleccionar --}}
            <div>
                {{-- Esto es la Fila --}}
                <div class="text-center border-top border-bottom border-2 row row-cols-2 row-cols-lg-5 g-2 g-lg-3">

                    {{-- Imagen de Series CR --}}
                    <div class="col">
                        <figure class="figure">
                            <a href="#CR"><img src="{{ asset('imagenes/bombas/grundfos/CR.png') }}" width="100%"
                                    class="figure-img img-fluid rounded" alt=""></a>
                            <figcaption class="figure-caption ">
                                <h6 class="h6">Series AG</h6>
                            </figcaption>
                        </figure>
                    </div>

                    {{-- Imagen de Series SP --}}
                    <div class="col">
                        <figure class="figure">
                            <a href="#SP"><img src="{{ asset('imagenes/bombas/grundfos/SP.png') }}" width="100%"
                                    class="figure-img img-fluid rounded" alt=""></a>
                            <figcaption class="figure-caption ">
                                <h6 class="h6">Series SP</h6>
                            </figcaption>
                        </figure>
                    </div>

                    {{-- Imagen de CM  & CME --}}
                    <div class="col">
                        <figure class="figure">
                            <a href="#CME"><img src="{{ asset('imagenes/bombas/grundfos/CME.png') }}" width="100%"
                                    class="figure-img img-fluid rounded" alt=""></a>
                            <figcaption class="figure-caption ">
                                <h6 class="h6">Serie CM & CME</h6>
                            </figcaption>
                        </figure>
                    </div>

                    {{-- Imagen de Serie MTR --}}
                    <div class="col">
                        <figure class="figure">
                            <a href="#MTR"><img src="{{ asset('imagenes/bombas/grundfos/MTR.png') }}" width="100%"
                                    class="figure-img img-fluid rounded" alt=""></a>
                            <figcaption class="figure-caption ">
                                <h6 class="h6">Serie MTR</h6>
                            </figcaption>
                        </figure>
                    </div>

                    {{-- Imagen de Serie DME --}}
                    <div class="col">
                        <figure class="figure">
                            <a href="#DME"><img src="{{ asset('imagenes/bombas/grundfos/DME_NEG.png') }}"
                                    width="100%" class="figure-img img-fluid rounded" alt=""></a>
                            <figcaption class="figure-caption ">
                                <h6 class="h6">Serie DME</h6>
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

        {{-- Contenido Series CR --}}
        <div>
            <div class="row">
                <div class="col m-2 mt-3 pb-3">
                    <h4 id="CR" class="h4">Bombas multietapas verticales Grundfos CR</h4>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3 p-2">
                <div class="col-md-6 mt-3">
                    <figure class="figure d-flex justify-content-center"><img
                            src="{{ asset('imagenes/bombas/grundfos/CR.png') }}" width="60%"
                            class="figure-img img-fluid rounded" alt=""></figure>
                    <figcaption class="d-flex justify-content-center">
                        <h6 class="h6">Serie CR</h6>
                    </figcaption>
                    {{-- direccion de catalogo --}}
                    <div class="d-flex justify-content-center">
                        <a href="https://drive.google.com/file/d/1iZlQD-hOpV2MM4yKcsEBZh3r0HzwS4Ce/view?usp=drive_link"
                            class="btn btn-primary">Ficha Técnica</a>
                    </div>
                </div>
                <div class="col-md-6 mt-lg-5 text-justify">
                    <!-- Texto -->
                    <p>
                        Bombas centrifugas multietapas verticales en linea energeticamente eficientes. Disponibles en
                        miles de configuraciones y en cuatro tipos de materiales de contruccion.
                    </p>
                    <p>
                        Acero Inoxidable AISI 304, Acero Inoxidable AISI 304 con base y parte superior en hierro
                        fundido, Acero inoxidable AISI 316 & Titanio.
                    </p>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3 p-2">
                <div class="col-md-6 mt-lg-5 text-justify">
                    <!-- Aplicaciones -->
                    <h4 class="h4">Aplicaciones</h4>
                    <ul>
                        <li>Alimentacion de calderas</li>
                        <li>Riego</li>
                        <li>Sistemas contra incendio</li>
                        <li>Sistemas de lavado y limpieza</li>
                        <li>Suministro industrial de agua</li>
                        <li>Suministro de productos quimicos</li>
                    </ul>
                </div>
                <!-- Tabla -->
                <div class="col-md-6 mt-lg-5 text-justify" style="overflow-x:auto;">
                    <h4 class="h4">Especificaciones Técnicas</h4>
                    <table class="table table-striped">
                        <thead>
                            <tr class="border-top border-danger">
                                <th scope="col" class="border-bottom border-dark">Modelo</th>
                                <th scope="col" class="border-bottom border-dark">Gasto Nominal (GPM)</th>
                                <th scope="col" class="border-bottom border-dark">Presión Máxima de Trabajo (PSI)
                                </th>
                                <th scope="col" class="border-bottom border-dark">Tamaño de Conexión Brida ANSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td scope="col">CR 1s</td>
                                <td scope="col">4.5</td>
                                <td scope="col">360</td>
                                <td scope="col">1¼”</td>
                            </tr>
                            <tr>
                                <td scope="col">CR, CRE 1</td>
                                <td scope="col">8.5</td>
                                <td scope="col">360</td>
                                <td scope="col">1¼”</td>
                            </tr>
                            <tr>
                                <td scope="col">CR, CRE 3</td>
                                <td scope="col">15</td>
                                <td scope="col">360</td>
                                <td scope="col">1¼”</td>
                            </tr>
                            <tr>
                                <td scope="col">CR, CRE 5</td>
                                <td scope="col">30</td>
                                <td scope="col">360</td>
                                <td scope="col">1¼”</td>
                            </tr>
                            <tr>
                                <td scope="col">CR, CRE 10</td>
                                <td scope="col">55</td>
                                <td scope="col">360</td>
                                <td scope="col">2”</td>
                            </tr>
                            <tr>
                                <td scope="col">CR, CRE 15</td>
                                <td scope="col">95</td>
                                <td scope="col">360</td>
                                <td scope="col">2”</td>
                            </tr>
                            <tr>
                                <td scope="col">CR, CRE 20</td>
                                <td scope="col">110</td>
                                <td scope="col">360</td>
                                <td scope="col">2”</td>
                            </tr>
                            <tr>
                                <td scope="col">CR, CRE 32</td>
                                <td scope="col">140</td>
                                <td scope="col">435</td>
                                <td scope="col">2½”</td>
                            </tr>
                            <tr>
                                <td scope="col">CR, CRE 45</td>
                                <td scope="col">220</td>
                                <td scope="col">435</td>
                                <td scope="col">3”</td>
                            </tr>
                            <tr>
                                <td scope="col">CR, CRE 64</td>
                                <td scope="col">340</td>
                                <td scope="col">435</td>
                                <td scope="col">4”</td>
                            </tr>
                            <tr>
                                <td scope="col">CR 90</td>
                                <td scope="col">440</td>
                                <td scope="col">435</td>
                                <td scope="col">4”</td>
                            </tr>
                            <tr>
                                <td scope="col">CR 120</td>
                                <td scope="col">610</td>
                                <td scope="col">435</td>
                                <td scope="col">5”</td>
                            </tr>
                            <tr class="border-bottom border-dark">
                                <td scope="col">CR 150</td>
                                <td scope="col">750</td>
                                <td scope="col">435</td>
                                <td scope="col">5”</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        {{-- Contenido Series SP --}}
        <div>
            <div class="row">
                <div class="col m-2 mt-3 pb-3">
                    <h4 id="SP" class="h4">Bombas para pozo profundo SP Grundfos </h4>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3 p-2">
                <div class="col-md-6 mt-3">
                    <figure class="figure d-flex justify-content-center"><img
                            src="{{ asset('imagenes/bombas/grundfos/SP.png') }}" width="60%"
                            class="figure-img img-fluid rounded" alt=""></figure>
                    <figcaption class="d-flex justify-content-center">
                        <h6 class="h6">Serie SP</h6>
                    </figcaption>
                    {{-- direccion de catalogo --}}
                    <div class="d-flex justify-content-center">
                        <a href="https://drive.google.com/file/d/1rXe-LHRuls5u8tweVfEou97DK4y23JYA/view?usp=drive_link"
                            class="btn btn-primary">Ficha Técnica</a>
                    </div>
                </div>
                <div class="col-md-6 mt-lg-5 text-justify">
                    <!-- Texto -->
                    <p>
                        Reconocidas por su alta eficiencia y confiabilidad. Construidas totalmente en acero inoxidable Y
                        diseñadas para bombear agua subterránea . Las bombas son adecuadas para pozos de tamaños que van
                        desde 4" a 6" y de 8" a 10". Los tamaños de motor para las bombas están disponibles en 1/2hp a
                        335hp
                    </p>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3 p-2">
                <div class="col-md-6 mt-lg-5 text-justify">
                    <!-- Aplicaciones -->
                    <h4 class="h4">Aplicaciones</h4>
                    <ul>
                        <li>Extracción de aguas subterráneas para abastecimiento de redes</li>
                        <li>Irrigación agrícola</li>
                        <li>Aumento de presión</li>
                    </ul>
                </div>
                <!-- Tabla -->
                <div class="col-md-6 mt-lg-5 text-justify" style="overflow-x:auto;">
                    <h4 class="h4">Especificaciones Técnicas</h4>
                    <table class="table table-striped">
                        <thead>
                            <tr class="border-top border-danger">
                                <th scope="col" class="border-bottom border-dark">Serie</th>
                                <th scope="col" class="border-bottom border-dark">Gasto Máximo (LPS)</th>
                                <th scope="col" class="border-bottom border-dark">Carga Máxima (m)</th>
                                <th scope="col" class="border-bottom border-dark">Rango de Potencia (kW)</th>
                                <th scope="col" class="border-bottom border-dark">Tamaños Disponibles</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td scope="col">SP 1A</td>
                                <td scope="col">0.4</td>
                                <td scope="col">300</td>
                                <td scope="col">0.37 a 1.5</td>
                                <td scope="col">9</td>
                            </tr>
                            <tr>
                                <td scope="col">SP 2A</td>
                                <td scope="col">0.7</td>
                                <td scope="col">530</td>
                                <td scope="col">0.37 a 4</td>
                                <td scope="col">13</td>
                            </tr>
                            <tr>
                                <td scope="col">SP 3A</td>
                                <td scope="col">1</td>
                                <td scope="col">360</td>
                                <td scope="col">0.37 a 4</td>
                                <td scope="col">13</td>
                            </tr>
                            <tr>
                                <td scope="col">SP 5A</td>
                                <td scope="col">1.8</td>
                                <td scope="col">520</td>
                                <td scope="col">0.37 a 7.5</td>
                                <td scope="col">14</td>
                            </tr>
                            <tr>
                                <td scope="col">SP 7</td>
                                <td scope="col">2.4</td>
                                <td scope="col">600</td>
                                <td scope="col">0.55 a 13</td>
                                <td scope="col">15</td>
                            </tr>
                            <tr>
                                <td scope="col">SP 9</td>
                                <td scope="col">3.2</td>
                                <td scope="col">590</td>
                                <td scope="col">0.75 a 18.5</td>
                                <td scope="col">26</td>
                            </tr>
                            <tr>
                                <td scope="col">SP11</td>
                                <td scope="col">3.8</td>
                                <td scope="col">210</td>
                                <td scope="col">0.75 a 7.5</td>
                                <td scope="col">10</td>
                            </tr>
                            <tr>
                                <td scope="col">SP 14</td>
                                <td scope="col">4.8</td>
                                <td scope="col">180</td>
                                <td scope="col">1.1 a 7.5</td>
                                <td scope="col">11</td>
                            </tr>
                            <tr>
                                <td scope="col">SP 17</td>
                                <td scope="col">6</td>
                                <td scope="col">660</td>
                                <td scope="col">0.55 a 37</td>
                                <td scope="col">48</td>
                            </tr>
                            <tr>
                                <td scope="col">SP 30</td>
                                <td scope="col">10</td>
                                <td scope="col">610</td>
                                <td scope="col">1.1 a 55</td>
                                <td scope="col">41</td>
                            </tr>
                            <tr>
                                <td scope="col">SP 46</td>
                                <td scope="col">16</td>
                                <td scope="col">500</td>
                                <td scope="col">1.1 a 63</td>
                                <td scope="col">36</td>
                            </tr>
                            <tr>
                                <td scope="col">SP 60</td>
                                <td scope="col">21</td>
                                <td scope="col">430</td>
                                <td scope="col">1.5 a 55</td>
                                <td scope="col">30</td>
                            </tr>
                            <tr>
                                <td scope="col">SP 77</td>
                                <td scope="col">27</td>
                                <td scope="col">410</td>
                                <td scope="col">5.5 a 92</td>
                                <td scope="col">26</td>
                            </tr>
                            <tr>
                                <td scope="col">SP 95</td>
                                <td scope="col">32</td>
                                <td scope="col">415</td>
                                <td scope="col">5.5 a 92</td>
                                <td scope="col">25</td>
                            </tr>
                            <tr>
                                <td scope="col">SP 125</td>
                                <td scope="col">42</td>
                                <td scope="col">415</td>
                                <td scope="col">7.5 a 170</td>
                                <td scope="col">36</td>
                            </tr>
                            <tr>
                                <td scope="col">SP 160</td>
                                <td scope="col">56</td>
                                <td scope="col">480</td>
                                <td scope="col">9.2 a 190</td>
                                <td scope="col">34</td>
                            </tr>
                            <tr class="border-bottom border-dark">
                                <td scope="col">SP 215</td>
                                <td scope="col">75</td>
                                <td scope="col">410</td>
                                <td scope="col">15 a 220</td>
                                <td scope="col">30</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        {{-- Contenido CM  & CME --}}
        <div>
            <div class="row">
                <div class="col m-2 mt-3 pb-3">
                    <h4 id="CME" class="h4">CM & CME Multietapas Horizontal</h4>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3 p-2">
                <div class="col-md-6 mt-3">
                    <figure class="figure d-flex justify-content-center"><img
                            src="{{ asset('imagenes/bombas/grundfos/CME.png') }}" width="60%"
                            class="figure-img img-fluid rounded" alt=""></figure>
                    <figcaption class="d-flex justify-content-center">
                        <h6 class="h6">CM & CME Multietapas Horizontal</h6>
                    </figcaption>
                    {{-- direccion de catalogo --}}
                    <div class="d-flex justify-content-center">
                        <a href="https://drive.google.com/file/d/1E6TRUCDV9kGnHFmzQc9kQxxkwXlKbeWP/view?usp=sharing"
                            class="btn btn-primary">Ficha Técnica</a>
                    </div>
                </div>
                <div class="col-md-6 mt-lg-5 text-justify">
                    <!-- Texto -->
                    <p>
                        La serie CM son bombas centrífugas multipasos horizontales, de fin de línea y autocebantes.
                    </p>
                    <p>
                        Estas bombas se caracterizan por ser una bomba silenciosa y compacta. Se encuentra disponible en
                        acero inoxidable AISI 316/DIN 1.4401:
                    </p>
                    <li>Potencia: 0.3 Hp-10Hp</li>
                    <li>Temperatura: -30º C +120º C</li>
                    <li>Presión: 142PSI-232 PSI</li>
                    <li>Flujo: 1m3 /h - 30m3 /h</li>
                    <!-- Aplicaciones -->
                    <h4 class="h4 mt-3">Aplicaciones</h4>
                    <ul>
                        <li>Tratamiento de agua</li>
                        <li>Fertirrigación</li>
                        <li>Calefacción industrial</li>
                        <li>Riego por goteo</li>
                        <li>Micro aspersión y manguera</li>
                    </ul>
                </div>

            </div>
        </div>

        {{-- Contenido Serie MTR --}}
        <div>
            <div class="row">
                <div class="col m-2 mt-3 pb-3">
                    <h4 id="MTR" class="h4">Bombas centrífugas multietapas Serie MTR</h4>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3 p-2">
                <div class="col-md-6 mt-3">
                    <figure class="figure d-flex justify-content-center"><img
                            src="{{ asset('imagenes/bombas/grundfos/MTR.png') }}" width="60%"
                            class="figure-img img-fluid rounded" alt=""></figure>
                    <figcaption class="d-flex justify-content-center">
                        <h6 class="h6">Serie MTR</h6>
                    </figcaption>
                    {{-- direccion de catalogo --}}
                    <div class="d-flex justify-content-center">
                        <a href="https://drive.google.com/file/d/1GbvjlDVMUbELANB_viqdsfkHiHSRBIe-/view?usp=drive_link"
                            class="btn btn-primary">Ficha Técnica</a>
                    </div>
                </div>
                <div class="col-md-6 mt-lg-5 text-justify">
                    <!-- Texto -->
                    <p>
                        La serie MTR son bombas centrífugas multietapas verticales para montaje en la parte superior del
                        tanque. Se caracterizan por ser bombas compactas de alta presión para trabajar con líquidos
                        agresivos a altas temperaturas y fiables para una amplia gama de aplicaciones especializadas de
                        lavado y limpieza. Así como completas soluciones de agua por energía solar, para un suministro
                        de agua fiable sin constantes costes energéticos.
                    </p>

                    <li>Temperatura líquida: 14 .. 194 °F</li>
                    <li>Altura máxima: 881 ft</li>
                    <li>Caudal máxima: 449 GPM US</li>
                    <li>Presión máxima: 363 psi</li>

                    <!-- Aplicaciones -->
                    <h4 class="h4 mt-3">Aplicaciones</h4>
                    <ul>
                        <li>Mecanizado</li>
                        <li>Lavado y limpieza</li>
                        <li>Soluciones para bombeo solar</li>
                    </ul>
                </div>

            </div>
        </div>

        {{-- Contenido Serie DME --}}
        <div>
            <div class="row">
                <div class="col m-2 mt-3 pb-3">
                    <h4 id="DME" class="h4">Bombas Dosificadoras Grundfos DME, DMS y DDI</h4>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3 p-2">
                <div class="col-md-6 mt-3">
                    <figure class="figure d-flex justify-content-center"><img
                            src="{{ asset('imagenes/bombas/grundfos/DME_NEG.png') }}" width="60%"
                            class="figure-img img-fluid rounded" alt=""></figure>
                    <figcaption class="d-flex justify-content-center">
                        <h6 class="h6">Serie DME</h6>
                    </figcaption>
                    {{-- direccion de catalogo --}}
                    <div class="d-flex justify-content-center">
                        <a href="https://drive.google.com/file/d/1-83q_Xjr6-YTt-erJYIwn7qG0Xjn-5vo/view?usp=sharing" class="btn btn-primary">Ficha Técnica</a>
                    </div>
                </div>
                <div class="col-md-6 mt-lg-5 text-justify">
                    <!-- Texto -->
                    <p>
                        Son bombas dosificadoras con diseños inovadores y capaces de soportar altas presiones, la
                        programación del accionamiento y caudal es muy sencillo. Además, con la comunicación Fieldbus
                        siempre esta informado sobre su bomba y del control de su sistema de dosificación.
                    </p>
                    <p>
                        Las bombas dosificadoras de las Series DME, DMS y DDI están diseñadas para la dosificación de
                        químicos en una gran cantidad de aplicaciones industriales. Pertecenen a la gama Smart Digital y
                        son más precisas, versátiles y más fáciles de operar que los equipos con control analógico.
                    </p>
                    <!-- Aplicaciones -->
                    <h4 class="h4 mt-3">Aplicaciones de las Series DME, DMS y DDI:</h4>
                    <ul>
                        <li>Sistemas de agua potable</li>
                        <li>Tratamiento de agua potable</li>
                        <li>Tratamiento de agua de refrigeración</li>
                        <li>Tratamiento de aguas de proceso</li>
                        <li>Tratamiento de aguas residuales</li>
                    </ul>
                </div>

            </div>
        </div>

        {{-- Fin de container --}}
    </div>
