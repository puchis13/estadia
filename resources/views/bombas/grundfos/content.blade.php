    <div class="container-fluid">
        {{-- Menu --}}
        <div>
            {{-- Logo --}}
            <div class="text-center">

                <figure class="figure">
                    <img src="{{ asset('imagenes/bombas/grundfos/logo.png') }}" style="background: cornflowerblue"
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

                    {{-- Cierre de Fila --}}
                </div>

                {{-- Cierre de imagenes --}}
            </div>
            {{-- Fin de Menu --}}
        </div>

        {{-- Inicio de Contenidos --}}

        {{-- Contenido Series CR --}}
        <div class=" m-2 p-2">
            <div class="row m-1">
                <h4 id="CR" class="h4">Bombas multietapas verticales Grundfos CR</h4>
            </div>
            <div class="row m-5 ps-5">
                <div class="col ms-5 ps-5">
                    <figure class="figure"><img src="{{ asset('imagenes/bombas/grundfos/CR.png') }}" width="100%"
                            class="figure-img img-fluid rounded" alt=""></figure>
                    <figcaption>
                        <h6 class="h6">Serie CR</h6>
                    </figcaption>
                    {{-- direccion de catalogo --}}
                    <a href="https://drive.google.com/file/d/1iZlQD-hOpV2MM4yKcsEBZh3r0HzwS4Ce/view?usp=drive_link"
                        class="btn btn-primary ms-4">Ficha Técnica</a>
                </div>
                <div class="col me-5 pe-5">
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

            <div class="row">
                <div class="col ms-5">
                    <h4 class="h4">Aplicaciones</h4>
                    <ul>
                        <li>Alimentacion de calderas.</li>
                        <li>Riego.</li>
                        <li>Sistemas contra incendio.</li>
                        <li>Sistemas de lavado y limpieza.</li>
                        <li>Suministro industrial de agua.</li>
                        <li>Suministro de productos quimicos. </li>
                    </ul>
                </div>
                <div class="col me-5">
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
        <div class=" m-2 p-2">
            <div class="row m-1">
                <h4 id="SP" class="h4">Bombas para pozo profundo SP Grundfos </h4>
            </div>
            <div class="row m-5 ps-5">
                <div class="col ms-5 ps-5">
                    <figure class="figure"><img src="{{ asset('imagenes/bombas/grundfos/SP.png') }}" width="100%"
                            class="figure-img img-fluid rounded" alt=""></figure>
                    <figcaption>
                        <h6 class="h6">Serie SP</h6>
                    </figcaption>
                    {{-- direccion de catalogo --}}
                    <a href="https://drive.google.com/file/d/1rXe-LHRuls5u8tweVfEou97DK4y23JYA/view?usp=drive_link"
                        class="btn btn-primary ms-4">Ficha Técnica</a>
                </div>
                <div class="col me-5 pe-5">
                    <p>
                        Reconocidas por su alta eficiencia y confiabilidad. Construidas totalmente en acero inoxidable Y
                        diseñadas para bombear agua subterránea . Las bombas son adecuadas para pozos de tamaños que van
                        desde 4" a 6" y de 8" a 10". Los tamaños de motor para las bombas están disponibles en 1/2hp a
                        335hp
                    </p>

                </div>

            </div>

            <div class="row">
                <div class="col ms-5">
                    <h4 class="h4">Aplicaciones</h4>
                    <ul>
                        <li>Extracción de aguas subterráneas para abastecimiento de redes.</li>
                        <li>Irrigación agrícola.</li>
                        <li>Aumento de presión.</li>
                    </ul>
                </div>
                <div class="col me-5">
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



        {{-- Fin de container --}}
    </div>
