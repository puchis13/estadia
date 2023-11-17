      <div class="container-fluid">
          {{-- Menu --}}
          <div>
              {{-- Logo --}}
              <div class="text-center">

                  <figure class="figure">
                      <img src="{{ asset('imagenes/bombas/armstrong/logo.png') }}" width="100%"
                          class="figure-img img-fluid rounded" alt="...">
                  </figure>
              </div>
              {{-- Imagenes al seleccionar --}}
              <div>
                  {{-- Esto es la Fila --}}
                  <div class="text-center border-top border-bottom border-2 row row-cols-2 row-cols-lg-5 g-2 g-lg-3">

                      {{-- Imagen de Serie 4300 --}}
                      <div class="col">
                          <figure class="figure">
                              <a href="#4300"><img src="{{ asset('imagenes/bombas/armstrong/4300.png') }}"
                                      width="100%" class="figure-img img-fluid rounded" alt=""></a>
                              <figcaption class="figure-caption ">
                                  <h6 class="h6">Serie 4300</h6>
                              </figcaption>
                          </figure>
                      </div>

                      {{-- Imagen de Series Circuladores --}}
                      <div class="col">
                          <figure class="figure">
                              <a href="#circuladores"><img
                                      src="{{ asset('imagenes/bombas/armstrong/circuladores.png') }}" width="100%"
                                      class="figure-img img-fluid rounded" alt=""></a>
                              <figcaption class="figure-caption ">
                                  <h6 class="h6">Linea 1050-1060</h6>
                              </figcaption>
                          </figure>
                      </div>

                      {{-- Imagen de Serie 4030 --}}
                      <div class="col">
                          <figure class="figure">
                              <a href="#4030"><img src="{{ asset('imagenes/bombas/armstrong/4030.png') }}"
                                      width="100%" class="figure-img img-fluid rounded" alt=""></a>
                              <figcaption class="figure-caption ">
                                  <h6 class="h6">Serie 4030</h6>
                              </figcaption>
                          </figure>
                      </div>

                      {{-- Imagen de Series 4270 --}}
                      <div class="col">
                          <figure class="figure">
                              <a href="#4270"><img src="{{ asset('imagenes/bombas/armstrong/4270.png') }}"
                                      width="100%" class="figure-img img-fluid rounded" alt=""></a>
                              <figcaption class="figure-caption ">
                                  <h6 class="h6">Series 4270</h6>
                              </figcaption>
                          </figure>
                      </div>

                      {{-- Imagen de Series Firepak Horizontal Split --}}
                      <div class="col">
                          <figure class="figure">
                              <a href="#FirePak"><img src="{{ asset('imagenes/bombas/armstrong/FirePak.png') }}"
                                      width="100%" class="figure-img img-fluid rounded" alt=""></a>
                              <figcaption class="figure-caption ">
                                  <h6 class="h6">Firepak Horizontal Split</h6>
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

          {{-- Contenido Series 4300 --}}
          <div>
              <div class="row">
                  <div class="col m-2 mt-3 pb-3">
                      <h4 id="4300" class="h4">Bombas Verticales en Línea Armstrong Modelo 4300</h4>
                  </div>
              </div>
              <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3 p-2">
                  <div class="col-lg-5 mt-3 mb-3 pe-5">
                      <figure class="figure"><img src="{{ asset('imagenes/bombas/armstrong/4300.png') }}" width="100%"
                              class="figure-img img-fluid rounded" alt=""></figure>
                      <figcaption class="ms-5 ps-5">
                          <h6 class="h6">Serie 4300</h6>
                      </figcaption>
                      {{-- direccion de catalogo --}}
                      <div class="ms-5 ps-4">
                          <a href="https://drive.google.com/file/d/1J1I821J9AZvo-WCQcGec7wpUFiStFiKD/view?usp=sharing"
                              class="btn btn-primary">Ficha Técnica</a>
                      </div>
                  </div>
                  <div class="col-lg-7 mt-5 mb-3">
                      <!-- Texto -->
                      <p>
                          La Serie 4300 es el mejor diseño de bombas HVAC comerciales disponibles desde 1969, este
                          modelo es un modelo para agua limpia, estas bombas son montadas en tuberías ó bombas de final
                          de linea, están diseñadas para ahorrar espacio , tener una alta eficiencia operativa y una
                          larga vida útil.
                          Motores desde 1200rpm, 1800rpm y 3600rpm. Temperaturas de hasta 150ºC. Tamaños de 1.5” a 20” y
                          estan fabricadas la carcasa y el impulsor pueden ser de de hierro fundido ASTM A48 Clase 30,
                          hierro dúctil fundido ASTM A536 grado 65-45-12 o bronce.

                      </p>
                  </div>
              </div>
              <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3 p-2">
                  <div class="col-lg-5 mt-3 mb-3">
                      <!-- Aplicaciones -->
                      <h4 class="h4">Aplicaciones</h4>
                      <ul>
                          <li>Bombeo de (Agua glicol)</li>
                          <li>Bombeo HVAV</li>
                          <li>Bombeo industrial ligero</li>
                      </ul>
                  </div>
                  <!-- Tabla -->
                  <div class="col-lg-7 mt-3 mb-5 pb-5" style="overflow-x:auto;">
                      <h4 class="h4">Especificaciones Técnicas</h4>
                      <table class="table table-striped">
                          <thead>
                              <tr class="border-top border-danger">
                                  <th scope="col" class="border-bottom border-dark">Tamaños</th>
                                  <th scope="col" class="border-bottom border-dark">Ficha técnica</th>
                              </tr>
                          </thead>
                          <tbody>
                              <tr>
                                  <td scope="col">1.5 x 1.5 x 6</td>
                                  <td scope="col"><a
                                          href="https://armstrongfluidtechnology.com/~/media/documents/specifications/submittal-data/4300-vertical-in-line-vil-single-pumps/43-501_4300_60hz_1-5x1-5x6_submittal.pdf?la=en&display=1"
                                          class="btn btn-primary ms-4">Ver</a>
                                  </td>
                              </tr>
                              <tr>
                                  <td scope="col">2 x 2 x 6</td>
                                  <td scope="col"><a
                                          href="https://armstrongfluidtechnology.com/~/media/documents/specifications/submittal-data/4300-vertical-in-line-vil-single-pumps/43-503_4300_60hz_2x2x6_submittal.pdf?la=en&display=1"
                                          class="btn btn-primary ms-4">Ver</a>
                                  </td>
                              </tr>

                              <tr>
                                  <td scope="col">3 x 3 x 6</td>
                                  <td scope="col"><a
                                          href="https://armstrongfluidtechnology.com/~/media/documents/specifications/submittal-data/4300-vertical-in-line-vil-single-pumps/43-505_4300_60hz_3x3x6_submittal.pdf?la=en&display=1"
                                          class="btn btn-primary ms-4">Ver</a>
                                  </td>
                              </tr>

                              <tr>
                                  <td scope="col">4 x 4 x 6</td>
                                  <td scope="col"><a
                                          href="https://armstrongfluidtechnology.com/~/media/documents/specifications/submittal-data/4300-vertical-in-line-vil-single-pumps/43-507_4300_60hz_4x4x6_submittal.pdf?la=en&display=1"
                                          class="btn btn-primary ms-4">Ver</a>
                                  </td>
                              </tr>
                              <tr>
                                  <td scope="col">6 x 6x 6</td>
                                  <td scope="col"><a
                                          href="https://armstrongfluidtechnology.com/~/media/documents/specifications/submittal-data/4300-vertical-in-line-vil-single-pumps/43-508_4300_60hz_6x6x6_submittal.pdf?la=en&display=1"
                                          class="btn btn-primary ms-4">Ver</a>
                                  </td>
                              </tr>
                              <tr>
                                  <td scope="col">1.5 x 1.5 x 8</td>
                                  <td scope="col"><a
                                          href="https://armstrongfluidtechnology.com/~/media/documents/specifications/submittal-data/4300-vertical-in-line-vil-single-pumps/43-509_4300_60hz_1-5x1-5x8_submittal.pdf?la=en&display=1"
                                          class="btn btn-primary ms-4">Ver</a>
                                  </td>
                              </tr>
                              <tr>
                                  <td scope="col">2x 2 x 8</td>
                                  <td scope="col"><a
                                          href="https://armstrongfluidtechnology.com/~/media/documents/specifications/submittal-data/4300-vertical-in-line-vil-single-pumps/43-511_4300_60hz_2x2x8_submittal.pdf?la=en&display=1"
                                          class="btn btn-primary ms-4">Ver</a>
                                  </td>
                              </tr>
                              <tr>
                                  <td scope="col">3 x 3 x 8</td>
                                  <td scope="col"><a
                                          href="https://armstrongfluidtechnology.com/~/media/documents/specifications/submittal-data/4300-vertical-in-line-vil-single-pumps/43-513_4300_60hz_3x3x8_submittal.pdf?la=en&display=1"
                                          class="btn btn-primary ms-4">Ver</a>
                                  </td>
                              </tr>
                              <tr>
                                  <td scope="col">4 x 4 x 8 </td>
                                  <td scope="col"><a
                                          href="https://armstrongfluidtechnology.com/~/media/documents/specifications/submittal-data/4300-vertical-in-line-vil-single-pumps/43-515_4300_60hz_4x4x8_submittal.pdf?la=en&display=1"
                                          class="btn btn-primary ms-4">Ver</a>
                                  </td>
                              </tr>
                              <tr>
                                  <td scope="col">5 x 5 x 8</td>
                                  <td scope="col"><a
                                          href="https://armstrongfluidtechnology.com/~/media/documents/specifications/submittal-data/4300-vertical-in-line-vil-single-pumps/43-517_4300_60hz_5x5x8_submittal.pdf?la=en&display=1"
                                          class="btn btn-primary ms-4">Ver</a>
                                  </td>
                              </tr>
                              <tr>
                                  <td scope="col">6 x 6 x 8 </td>
                                  <td scope="col"><a
                                          href="https://armstrongfluidtechnology.com/~/media/documents/specifications/submittal-data/4300-vertical-in-line-vil-single-pumps/43-519_4300_60hz_6x6x8_submittal.pdf?la=en&display=1"
                                          class="btn btn-primary ms-4">Ver</a>
                                  </td>
                              </tr>
                              <tr>
                                  <td scope="col">8 x 8 x 8</td>
                                  <td scope="col"><a
                                          href="https://armstrongfluidtechnology.com/~/media/documents/specifications/submittal-data/4300-vertical-in-line-vil-single-pumps/43-520_4300_60hz_8x8x8_submittal.pdf?la=en&display=1"
                                          class="btn btn-primary ms-4">Ver</a>
                                  </td>
                              </tr>
                              <tr>
                                  <td scope="col">2 x 2 x 10</td>
                                  <td scope="col"><a
                                          href="https://armstrongfluidtechnology.com/~/media/documents/specifications/submittal-data/4300-vertical-in-line-vil-single-pumps/43-521_4300_60hz_2x2x10_submittal.pdf?la=en&display=1"
                                          class="btn btn-primary ms-4">Ver</a>
                                  </td>
                              </tr>
                              <tr>
                                  <td scope="col">3 x 3 x 10</td>
                                  <td scope="col"><a
                                          href="https://armstrongfluidtechnology.com/~/media/documents/specifications/submittal-data/4300-vertical-in-line-vil-single-pumps/43-523_4300_60hz_3x3x10_submittal.pdf?la=en&display=1"
                                          class="btn btn-primary ms-4">Ver</a>
                                  </td>
                              </tr>
                              <tr>
                                  <td scope="col">4 x 4 x 10</td>
                                  <td scope="col"><a
                                          href="https://armstrongfluidtechnology.com/~/media/documents/specifications/submittal-data/4300-vertical-in-line-vil-single-pumps/43-525_4300_60hz_4x4x10_submittal.pdf?la=en&display=1"
                                          class="btn btn-primary ms-4">Ver</a>
                                  </td>
                              </tr>
                              <tr>
                                  <td scope="col">6 x 6 x 10 </td>
                                  <td scope="col"><a
                                          href="https://armstrongfluidtechnology.com/~/media/documents/specifications/submittal-data/4300-vertical-in-line-vil-single-pumps/43-527_4300_60hz_6x6x10_submittal.pdf?la=en&display=1"
                                          class="btn btn-primary ms-4">Ver</a>
                                  </td>
                              </tr>
                              <tr>
                                  <td scope="col">8 x 8 x 10</td>
                                  <td scope="col"><a
                                          href="https://armstrongfluidtechnology.com/~/media/documents/specifications/submittal-data/4300-vertical-in-line-vil-single-pumps/43-529_4300_60hz_8x8x10_submittal.pdf?la=en&display=1"
                                          class="btn btn-primary ms-4">Ver</a>
                                  </td>
                              </tr>
                              <tr>
                                  <td scope="col">4 x 4 x 11.5</td>
                                  <td scope="col"><a
                                          href="https://armstrongfluidtechnology.com/~/media/documents/specifications/submittal-data/4300-vertical-in-line-vil-single-pumps/43-531_4300_60hz_4x4x11-5_submittal.pdf?la=en&display=1"
                                          class="btn btn-primary ms-4">Ver</a>
                                  </td>
                              </tr>
                              <tr>
                                  <td scope="col">5 x 5 x 11.5</td>
                                  <td scope="col"><a
                                          href="https://armstrongfluidtechnology.com/~/media/documents/specifications/submittal-data/4300-vertical-in-line-vil-single-pumps/43-533_4300_60hz_5x5x11-5_submittal.pdf?la=en&display=1"
                                          class="btn btn-primary ms-4">Ver</a>
                                  </td>
                              </tr>
                              <tr>
                                  <td scope="col">6 x 6 x 11.5</td>
                                  <td scope="col"><a
                                          href="https://armstrongfluidtechnology.com/~/media/documents/specifications/submittal-data/4300-vertical-in-line-vil-single-pumps/43-535_4300_60hz_6x6x11-5_submittal.pdf?la=en&display=1"
                                          class="btn btn-primary ms-4">Ver</a>
                                  </td>
                              </tr>
                              <tr>
                                  <td scope="col">8 x 8 x 11.5</td>
                                  <td scope="col"><a
                                          href="https://armstrongfluidtechnology.com/~/media/documents/specifications/submittal-data/4300-vertical-in-line-vil-single-pumps/43-537_4300_60hz_8x8x11-5_submittal.pdf?la=en&display=1"
                                          class="btn btn-primary ms-4">Ver</a>
                                  </td>
                              </tr>
                              <tr>
                                  <td scope="col">3 x 3 x 13</td>
                                  <td scope="col"><a
                                          href="https://armstrongfluidtechnology.com/~/media/documents/specifications/submittal-data/4300-vertical-in-line-vil-single-pumps/43-539_4300_60hz_3x3x13_submittal.pdf?la=en&display=1"
                                          class="btn btn-primary ms-4">Ver</a>
                                  </td>
                              </tr>
                              <tr>
                                  <td scope="col">4 x 4 x 13</td>
                                  <td scope="col"><a
                                          href="https://armstrongfluidtechnology.com/~/media/documents/specifications/submittal-data/4300-vertical-in-line-vil-single-pumps/43-541_4300_60hz_4x4x13_submittal.pdf?la=en&display=1"
                                          class="btn btn-primary ms-4">Ver</a>
                                  </td>
                              </tr>
                              <tr>
                                  <td scope="col">4 x 4 x 13L</td>
                                  <td scope="col"><a
                                          href="https://armstrongfluidtechnology.com/~/media/documents/specifications/submittal-data/4300-vertical-in-line-vil-single-pumps/43-543_4300_60hz_4x4x13l_submittal.pdf?la=en&display=1"
                                          class="btn btn-primary ms-4">Ver</a>
                                  </td>
                              </tr>
                              <tr>
                                  <td scope="col">5 x 5 x 13</td>
                                  <td scope="col"><a
                                          href="https://armstrongfluidtechnology.com/~/media/documents/specifications/submittal-data/4300-vertical-in-line-vil-single-pumps/43-544_4300_5x5x13_60hz_submittal.pdf?la=en&display=1"
                                          class="btn btn-primary ms-4">Ver</a>
                                  </td>
                              </tr>
                              <tr>
                                  <td scope="col">5 x 5 x 13H</td>
                                  <td scope="col"><a
                                          href="https://armstrongfluidtechnology.com/~/media/documents/specifications/submittal-data/4300-vertical-in-line-vil-single-pumps/43-5441_4300_60hz_5x5x13h_submittal.pdf?la=en&display=1"
                                          class="btn btn-primary ms-4">Ver</a>
                                  </td>
                              </tr>
                              <tr>
                                  <td scope="col">6 x 6 x 13</td>
                                  <td scope="col"><a
                                          href="https://armstrongfluidtechnology.com/~/media/documents/specifications/submittal-data/4300-vertical-in-line-vil-single-pumps/43-545_4300_60hz_6x6x13_submittal.pdf?la=en&display=1"
                                          class="btn btn-primary ms-4">Ver</a>
                                  </td>
                              </tr>
                              <tr>
                                  <td scope="col">6 x 6 x 13H</td>
                                  <td scope="col"><a
                                          href="https://armstrongfluidtechnology.com/~/media/documents/specifications/submittal-data/4300-vertical-in-line-vil-single-pumps/43-546_4300_60hz_6x6x13h_submittal.pdf?la=en&display=1"
                                          class="btn btn-primary ms-4">Ver</a>
                                  </td>
                              </tr>
                              <tr>
                                  <td scope="col">8 x 8 x 13</td>
                                  <td scope="col"><a
                                          href="https://armstrongfluidtechnology.com/~/media/documents/specifications/submittal-data/4300-vertical-in-line-vil-single-pumps/43-547_4300_60hz_8x8x13_submittal.pdf?la=en&display=1"
                                          class="btn btn-primary ms-4">Ver</a>
                                  </td>
                              </tr>
                              <tr>
                                  <td scope="col">10 x 10 x 13</td>
                                  <td scope="col"><a
                                          href="https://armstrongfluidtechnology.com/~/media/documents/specifications/submittal-data/4300-vertical-in-line-vil-single-pumps/43-549_4300_60hz_10x10x13_submittal.pdf?la=en&display=1"
                                          class="btn btn-primary ms-4">Ver</a>
                                  </td>
                              </tr>
                              <tr>
                                  <td scope="col">12 x 12 x 13 </td>
                                  <td scope="col"><a
                                          href="https://armstrongfluidtechnology.com/~/media/documents/specifications/submittal-data/4300-vertical-in-line-vil-single-pumps/43-551_4300_60hz_12x12x13_submittal.pdf?la=en&display=1"
                                          class="btn btn-primary ms-4">Ver</a>
                                  </td>
                              </tr>
                              <tr>
                                  <td scope="col">14 x 14 x 15</td>
                                  <td scope="col"><a
                                          href="https://drive.google.com/file/d/1AqqLaONTbFOh3grmq7-gpYN3ZQuzAFIw/view?usp=drive_link"
                                          class="btn btn-primary ms-4">Ver</a>
                                  </td>
                              </tr>
                              <tr>
                                  <td scope="col">16 x 16 x 15 </td>
                                  <td scope="col"><a
                                          href="https://armstrongfluidtechnology.com/~/media/documents/specifications/submittal-data/4300-vertical-in-line-vil-single-pumps/43-561_4300_60hz_16x16x15_submittal.pdf?la=en&display=1"
                                          class="btn btn-primary ms-4">Ver</a>
                                  </td>
                              </tr>
                              <tr>
                                  <td scope="col">12 x 12 x 17 </td>
                                  <td scope="col"><a
                                          href="https://armstrongfluidtechnology.com/~/media/documents/specifications/submittal-data/4300-vertical-in-line-vil-single-pumps/43-563_4300_60hz_12x12x17_submittal.pdf?la=en&display=1"
                                          class="btn btn-primary ms-4">Ver</a>
                                  </td>
                              </tr>
                              <tr>
                                  <td scope="col">16 x 16 x 19 </td>
                                  <td scope="col"><a
                                          href="https://armstrongfluidtechnology.com/~/media/documents/specifications/submittal-data/4300-vertical-in-line-vil-single-pumps/43-565_4300_60hz_16x16x19_submittal.pdf?la=en&display=1"
                                          class="btn btn-primary ms-4">Ver</a>
                                  </td>
                              </tr>
                              <tr>
                                  <td scope="col">20x 20 x 19</td>
                                  <td scope="col"><a
                                          href="https://armstrongfluidtechnology.com/~/media/documents/specifications/submittal-data/4300-vertical-in-line-vil-single-pumps/43-567_4300_60hz_20x20x19_submittal.pdf?la=en&display=1"
                                          class="btn btn-primary ms-4">Ver</a>
                                  </td>
                              </tr>
                              <tr>
                                  <td scope="col">3 x 3 x 6B</td>
                                  <td scope="col"><a
                                          href="https://armstrongfluidtechnology.com/~/media/documents/specifications/submittal-data/4300-vertical-in-line-vil-single-pumps/43-570_4300_60hz_3x3x6b_6inch_pump_submittal.pdf?la=en&display=1"
                                          class="btn btn-primary ms-4">Ver</a>
                                  </td>
                              </tr>
                              <tr>
                                  <td scope="col">4 x 4 x 6C</td>
                                  <td scope="col"><a
                                          href="https://armstrongfluidtechnology.com/~/media/documents/specifications/submittal-data/4300-vertical-in-line-vil-single-pumps/43-571_4300_60hz_4x4x6c_6inch_pump_submittal.pdf?la=en&display=1"
                                          class="btn btn-primary ms-4">Ver</a>
                                  </td>
                              </tr>
                              <tr class="border-bottom border-dark">
                                  <td scope="col">5 x 5 x 6</td>
                                  <td scope="col"><a
                                          href="https://armstrongfluidtechnology.com/~/media/documents/specifications/submittal-data/4300-vertical-in-line-vil-single-pumps/43-572_4300_60hz_5x5x6_6inch_pump_submittal.pdf?la=en&display=1"
                                          class="btn btn-primary ms-4">Ver</a>
                                  </td>
                              </tr>
                          </tbody>
                      </table>
                  </div>
              </div>
          </div>

          {{-- Contenido Series Circuladores 1050-1060 --}}
          <div>
              <div class="row">
                  <div class="col m-2 mt-3 pb-3">
                      <h4 id="circuladores" class="h4">Circuladores en Línea 1050-1060 </h4>
                  </div>
              </div>
              <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3 p-2">
                  <div class="col-lg-5 mt-3 mb-3 pe-5">
                      <figure class="figure"><img src="{{ asset('imagenes/bombas/armstrong/circuladores.png') }}"
                              width="100%" class="figure-img img-fluid rounded" alt="">
                      </figure>
                      <figcaption class="ms-5 ps-5">
                          <h6 class="h6">Linea 1050-1060</h6>
                      </figcaption>
                      {{-- direccion de catalogo --}}
                      <div class="ms-5 ps-5">
                          <a href="https://drive.google.com/file/d/189qFudN5-pO2i7ebzXtLV0vxpwptkS6O/view?usp=sharing"
                              class="btn btn-primary">Ficha Técnica</a>
                      </div>
                  </div>
                  <div class="col-lg-7 mt-5 mb-3">
                      <!-- Texto -->
                      <p>
                          Los circuladores en línea Modelo 1050 y 1060 de Armstrong son fabricados para trabajo continuo
                          y en materiales como la voluta de hierro fundido y bronce sin plomo.
                          Rango de trabajo: Gasto hasta 250 GPM ; carga hasta 16 metros. y temperaturas máximas de
                          bombeo de 107º C. a una presión máx de 175 PSI. Y van desde los ¼ hp hasta 3hp.
                      </p>
                  </div>
              </div>
              <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3 p-2">
                  <div class="col-lg-5 mt-3 mb-3">
                      <!-- Aplicaciones -->
                      <h4 class="h4">Aplicaciones</h4>
                      <ul>
                          <li>Calefacción residencial</li>
                          <li>Calefacción industrial</li>
                          <li>Recirculación de agua fría y caliente</li>
                          <li>Distribución de agua potable</li>
                          <li>Servicio industrial en general</li>
                      </ul>
                  </div>
                  <!-- Tabla -->
                  <div class="col-lg-7 mt-3 mb-5 pb-5" style="overflow-x:auto;">
                      <h4 class="h4">Especificaciones Técnicas</h4>
                      <table class="table table-striped ">
                          <thead>
                              <tr class="border-top border-danger">
                                  <th scope="col" class="border-bottom border-dark">Serie</th>
                                  <th scope="col" class="border-bottom border-dark">Tamaño</th>
                                  <th scope="col" class="border-bottom border-dark">HP</th>
                                  <th scope="col" class="border-bottom border-dark">Fase/Volts</th>
                              </tr>
                          </thead>
                          <tbody>
                              <tr>
                                  <td scope="col">1050</td>
                                  <td scope="col">1”</td>
                                  <td scope="col">1/4</td>
                                  <td scope="col">1 F/115 volts</td>
                              </tr>
                              <tr>
                                  <td scope="col">1050</td>
                                  <td scope="col">1”</td>
                                  <td scope="col">1/3</td>
                                  <td scope="col">1 F/115 volts</td>
                              </tr>
                              <tr>
                                  <td scope="col">1050</td>
                                  <td scope="col">1” ¼”</td>
                                  <td scope="col">1/4</td>
                                  <td scope="col">1F/115 volts</td>
                              </tr>
                              <tr>
                                  <td scope="col">1050</td>
                                  <td scope="col">1” ¼”</td>
                                  <td scope="col">1/3</td>
                                  <td scope="col">1F/ 116 volts</td>
                              </tr>
                              <tr>
                                  <td scope="col">1050</td>
                                  <td scope="col">1” ¼”</td>
                                  <td scope="col">½</td>
                                  <td scope="col">1F/115-230 ó 3 F/220-440</td>
                              </tr>
                              <tr>
                                  <td scope="col">1050</td>
                                  <td scope="col">1.5”</td>
                                  <td scope="col">1/4</td>
                                  <td scope="col">1F/115 volts</td>
                              </tr>
                              <tr>
                                  <td scope="col">1050</td>
                                  <td scope="col">1.5”</td>
                                  <td scope="col">1/3</td>
                                  <td scope="col">1F/115 volts</td>
                              </tr>
                              <tr>
                                  <td scope="col">1050</td>
                                  <td scope="col">1.5”</td>
                                  <td scope="col">½</td>
                                  <td scope="col">1F/115-230 ó 3 F/220-440</td>
                              </tr>
                              <tr>
                                  <td scope="col">1050</td>
                                  <td scope="col">1.5”</td>
                                  <td scope="col">¾</td>
                                  <td scope="col">1F/115-230 ó 3 F/220-440</td>
                              </tr>
                              <tr>
                                  <td scope="col">1060</td>
                                  <td scope="col">1.5”</td>
                                  <td scope="col">½</td>
                                  <td scope="col">1F/115-230 ó 3 F/220-440</td>
                              </tr>
                              <tr>
                                  <td scope="col">1060</td>
                                  <td scope="col">1.5”</td>
                                  <td scope="col">¾</td>
                                  <td scope="col">1F/115-230 ó 3 F/220-440</td>
                              </tr>
                              <tr>
                                  <td scope="col">1060</td>
                                  <td scope="col">1.5”</td>
                                  <td scope="col">1</td>
                                  <td scope="col">1F/115-230 ó 3 F/220-440</td>
                              </tr>
                              <tr>
                                  <td scope="col">1060</td>
                                  <td scope="col">1.5”</td>
                                  <td scope="col">1.25</td>
                                  <td scope="col">1F/115-230 ó 3 F/220-440</td>
                              </tr>
                              <tr>
                                  <td scope="col">1060</td>
                                  <td scope="col">2”</td>
                                  <td scope="col">½</td>
                                  <td scope="col">1F/115-230 ó 3 F/220-440</td>
                              </tr>
                              <tr>
                                  <td scope="col">1060</td>
                                  <td scope="col">2”</td>
                                  <td scope="col">3/4</td>
                                  <td scope="col">1F/115-230 ó 3 F/220-440</td>
                              </tr>
                              <tr>
                                  <td scope="col">1060</td>
                                  <td scope="col">2”</td>
                                  <td scope="col">1</td>
                                  <td scope="col">1F/115-230 ó 3 F/220-440</td>
                              </tr>
                              <tr>
                                  <td scope="col">1060</td>
                                  <td scope="col">2”</td>
                                  <td scope="col">1.5</td>
                                  <td scope="col">1F/115-230 ó 3 F/220-440</td>
                              </tr>
                              <tr>
                                  <td scope="col">1060</td>
                                  <td scope="col">2”</td>
                                  <td scope="col">2</td>
                                  <td scope="col">3F/220-440</td>
                              </tr>
                              <tr>
                                  <td scope="col">1060</td>
                                  <td scope="col">3”</td>
                                  <td scope="col">1</td>
                                  <td scope="col">1F/115-230 ó 3 F/220-440</td>
                              </tr>
                              <tr>
                                  <td scope="col">1060</td>
                                  <td scope="col">3”</td>
                                  <td scope="col">1 1/2</td>
                                  <td scope="col">1F/115-230 ó 3 F/220-440</td>
                              </tr>
                              <tr>
                                  <td scope="col">1060</td>
                                  <td scope="col">3”</td>
                                  <td scope="col">2</td>
                                  <td scope="col">3F/220-440</td>
                              </tr>
                              <tr class="border-bottom border-dark">
                                  <td scope="col">1060</td>
                                  <td scope="col">3”</td>
                                  <td scope="col">3</td>
                                  <td scope="col">3/220-440</td>
                              </tr>
                          </tbody>
                      </table>
                  </div>
              </div>
          </div>

          {{-- Contenido Series 4030 --}}
          <div>
              <div class="row">
                  <div class="col m-2 mt-3 pb-3">
                      <h4 id="4030" class="h4">Bomba Centrífuga tipo End Suction Montada en Base Serie 4030
                      </h4>
                  </div>
              </div>
              <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3 p-2">
                  <div class="col-lg-5 mt-3 mb-3 pe-5">
                      <figure class="figure"><img src="{{ asset('imagenes/bombas/armstrong/4030.png') }}"
                              width="100%" class="figure-img img-fluid rounded" alt="">
                      </figure>
                      <figcaption class="ms-5 ps-5">
                          <h6 class="h6">Serie 4030</h6>
                      </figcaption>
                      {{-- direccion de catalogo --}}
                      <div class="ms-5 ps-4">
                          <a href="https://drive.google.com/file/d/1HhVgXEROvVb8V5qK7T0RU5_JwCwg_Dt_/view?usp=drive_link"
                              class="btn btn-primary">Ficha Técnica</a>
                      </div>
                  </div>
                  <div class="col-lg-7 mt-5 mb-3">
                      <!-- Texto -->
                      <p>
                          Esta bomba centrifuga horizontal es sumamente robusta y esta diseñadapara darle mantenimiento
                          de por vida.
                          Es una bomba de final de linea o en inglés end suction, su carcasa es autoventilada para
                          evitar que el aire se quede atrapado. Los materiales de la carcasa o del impulsor son hierro
                          fundido, hierro dúctil ó bronce, lo que las hace muy duraderas.
                          Los tamaños van desde 1” hasta 8” con caudales de Flujo de hasta 5000 gpm (315 L/s); hasta 600
                          pies (180 m) de altura a una temperatura máxima de hasta 121º C.
                      </p>
                  </div>
              </div>
              <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3 p-2">
                  <div class="col-lg-5 mt-3 mb-3">
                      <!-- Aplicaciones -->
                      <h4 class="h4">Aplicaciones</h4>
                      <ul>
                          <li>HVAC</li>
                          <li>Bombeo de procesos</li>
                          <li>Agua tradada</li>
                      </ul>
                  </div>
                  <!-- Tabla -->
                  <div class="col-lg-7 mt-3 mb-5 pb-5" style="overflow-x:auto;">
                      <h4 class="h4">Especificaciones Técnicas</h4>
                      <table class="table table-striped">
                          <thead>
                              <tr class="border-top border-danger">
                                  <th scope="col" class="border-bottom border-dark">Serie</th>
                                  <th scope="col" class="border-bottom border-dark">Tamaños</th>
                                  <th scope="col" class="border-bottom border-dark">Ficha Técnica</th>
                              </tr>
                          </thead>
                          <tbody>
                              <tr>
                                  <td scope="col">Serie 4030</td>
                                  <td scope="col">1.5 X 1 X 6</td>
                                  <td scope="col"><a
                                          href="https://armstrongfluidtechnology.com/~/media/documents/specifications/submittal-data/4030-base-mounted-pumps/4030-60hz/40-50_4030_1-5x1x6.pdf?la=en&display=1"
                                          class="btn btn-primary ms-4">Ver</a>
                                  </td>
                              </tr>
                              <tr>
                                  <td scope="col">Serie 4030</td>
                                  <td scope="col">1.5 X 1 X 8</td>
                                  <td scope="col"><a
                                          href="https://armstrongfluidtechnology.com/~/media/documents/specifications/submittal-data/4030-base-mounted-pumps/4030-60hz/40-55_4030_1-5x1x8.pdf?la=en&display=1"
                                          class="btn btn-primary ms-4">Ver</a>
                                  </td>
                              </tr>
                              <tr>
                                  <td scope="col">Serie 4030</td>
                                  <td scope="col">10 X 8 X 13</td>
                                  <td scope="col"><a
                                          href="https://armstrongfluidtechnology.com/~/media/documents/specifications/submittal-data/4030-base-mounted-pumps/4030-60hz/40-77_4030_10x8x13.pdf?la=en&display=1"
                                          class="btn btn-primary ms-4">Ver</a>
                                  </td>
                              </tr>
                              <tr>
                                  <td scope="col">Serie 4030</td>
                                  <td scope="col">10 X 8 X 15</td>
                                  <td scope="col"><a
                                          href="https://armstrongfluidtechnology.com/~/media/documents/specifications/submittal-data/4030-base-mounted-pumps/4030-60hz/40-79_4030_10x8x15.pdf?la=en&display=1"
                                          class="btn btn-primary ms-4">Ver</a>
                                  </td>
                              </tr>
                              <tr>
                                  <td scope="col">Serie 4030</td>
                                  <td scope="col">2 X 1 X 10 </td>
                                  <td scope="col"><a
                                          href="https://armstrongfluidtechnology.com/~/media/documents/specifications/submittal-data/4030-base-mounted-pumps/4030-60hz/40-60_4030_2x1x10.pdf?la=en&display=1"
                                          class="btn btn-primary ms-4">Ver</a>
                                  </td>
                              </tr>
                              <tr>
                                  <td scope="col">Serie 4030</td>
                                  <td scope="col">3 X 1.5 X 10</td>
                                  <td scope="col"><a
                                          href="https://armstrongfluidtechnology.com/~/media/documents/specifications/submittal-data/4030-base-mounted-pumps/4030-60hz/40-61_4030_3x1-5x10.pdf?la=en&display=1"
                                          class="btn btn-primary ms-4">Ver</a>
                                  </td>
                              </tr>
                              <tr>
                                  <td scope="col">Serie 4030</td>
                                  <td scope="col">3 X 1.5 X 13</td>
                                  <td scope="col"><a
                                          href="https://armstrongfluidtechnology.com/~/media/documents/specifications/submittal-data/4030-base-mounted-pumps/4030-60hz/40-72_4030_3x1-5x13.pdf?la=en&display=1"
                                          class="btn btn-primary ms-4">Ver</a>
                                  </td>
                              </tr>
                              <tr>
                                  <td scope="col">Serie 4030</td>
                                  <td scope="col">3 X 1.5 X 6</td>
                                  <td scope="col"><a
                                          href="https://armstrongfluidtechnology.com/~/media/documents/specifications/submittal-data/4030-base-mounted-pumps/4030-60hz/40-51_4030_3x1-5x6.pdf?la=en&display=1"
                                          class="btn btn-primary ms-4">Ver</a>
                                  </td>
                              </tr>
                              <tr>
                                  <td scope="col">Serie 4030</td>
                                  <td scope="col">3 X 1.5 X 8</td>
                                  <td scope="col"><a
                                          href="https://armstrongfluidtechnology.com/~/media/documents/specifications/submittal-data/4030-base-mounted-pumps/4030-60hz/40-56_4030_3x1-5x8.pdf?la=en&display=1"
                                          class="btn btn-primary ms-4">Ver</a>
                                  </td>
                              </tr>
                              <tr>
                                  <td scope="col">Serie 4030</td>
                                  <td scope="col">3 X 2 X 10</td>
                                  <td scope="col"><a
                                          href="https://armstrongfluidtechnology.com/~/media/documents/specifications/submittal-data/4030-base-mounted-pumps/4030-60hz/40-62_4030_3x2x10.pdf?la=en&display=1"
                                          class="btn btn-primary ms-4">Ver</a>
                                  </td>
                              </tr>
                              <tr>
                                  <td scope="col">Serie 4030</td>
                                  <td scope="col">3 X 2 X 13</td>
                                  <td scope="col"><a
                                          href="https://armstrongfluidtechnology.com/~/media/documents/specifications/submittal-data/4030-base-mounted-pumps/4030-60hz/40-73_4030_3x2x13.pdf?la=en&display=1"
                                          class="btn btn-primary ms-4">Ver</a>
                                  </td>
                              </tr>
                              <tr>
                                  <td scope="col">Serie 4030</td>
                                  <td scope="col">3 X 2 X 6</td>
                                  <td scope="col"><a
                                          href="https://armstrongfluidtechnology.com/~/media/documents/specifications/submittal-data/4030-base-mounted-pumps/4030-60hz/40-52_4030_3x2x6.pdf?la=en&display=1"
                                          class="btn btn-primary ms-4">Ver</a>
                                  </td>
                              </tr>
                              <tr>
                                  <td scope="col">Serie 4030</td>
                                  <td scope="col">3 X 2.5 X 10</td>
                                  <td scope="col"><a
                                          href="https://armstrongfluidtechnology.com/~/media/documents/specifications/submittal-data/4030-base-mounted-pumps/4030-60hz/40-621_4030_3x2-5x10.pdf?la=en&display=1"
                                          class="btn btn-primary ms-4">Ver</a>
                                  </td>
                              </tr>
                              <tr>
                                  <td scope="col">Serie 4030</td>
                                  <td scope="col">3 X 2.5 X 6</td>
                                  <td scope="col"><a
                                          href="https://armstrongfluidtechnology.com/~/media/documents/specifications/submittal-data/4030-base-mounted-pumps/4030-60hz/40-53_4030_3x2-5x6.pdf?la=en&display=1"
                                          class="btn btn-primary ms-4">Ver</a>
                                  </td>
                              </tr>
                              <tr>
                                  <td scope="col">Serie 4030</td>
                                  <td scope="col">3 X 2.5 X 8</td>
                                  <td scope="col"><a
                                          href="https://armstrongfluidtechnology.com/~/media/documents/specifications/submittal-data/4030-base-mounted-pumps/4030-60hz/40-57_4030_3x2-5x8.pdf?la=en&display=1"
                                          class="btn btn-primary ms-4">Ver</a>
                                  </td>
                              </tr>
                              <tr>
                                  <td scope="col">Serie 4030</td>
                                  <td scope="col">4 X 3 X 10</td>
                                  <td scope="col"><a
                                          href="https://armstrongfluidtechnology.com/~/media/documents/specifications/submittal-data/4030-base-mounted-pumps/4030-60hz/40-63_4030_4x3x10.pdf?la=en&display=1"
                                          class="btn btn-primary ms-4">Ver</a>
                                  </td>
                              </tr>
                              <tr>
                                  <td scope="col">Serie 4030</td>
                                  <td scope="col">4 X 3 X 11.5</td>
                                  <td scope="col"><a
                                          href="https://armstrongfluidtechnology.com/~/media/documents/specifications/submittal-data/4030-base-mounted-pumps/4030-60hz/40-68_4030_4x3x11-5.pdf?la=en&display=1"
                                          class="btn btn-primary ms-4">Ver</a>
                                  </td>
                              </tr>
                              <tr>
                                  <td scope="col">Serie 4030</td>
                                  <td scope="col">4 X 3 X 13</td>
                                  <td scope="col"><a
                                          href="https://armstrongfluidtechnology.com/~/media/documents/specifications/submittal-data/4030-base-mounted-pumps/4030-60hz/40-74_4030_4x3x13.pdf?la=en&display=1"
                                          class="btn btn-primary ms-4">Ver</a>
                                  </td>
                              </tr>
                              <tr>
                                  <td scope="col">Serie 4030</td>
                                  <td scope="col">4 X 3 X 13L</td>
                                  <td scope="col"><a
                                          href="https://armstrongfluidtechnology.com/~/media/documents/specifications/submittal-data/4030-base-mounted-pumps/4030-60hz/40-741_4030_4x3x13l.pdf?la=en&display=1"
                                          class="btn btn-primary ms-4">Ver</a>
                                  </td>
                              </tr>
                              <tr>
                                  <td scope="col">Serie 4030</td>
                                  <td scope="col">4 X 3 X 6</td>
                                  <td scope="col"><a
                                          href="https://armstrongfluidtechnology.com/~/media/documents/specifications/submittal-data/4030-base-mounted-pumps/4030-60hz/40-54_4030_4x3x6.pdf?la=en&display=1"
                                          class="btn btn-primary ms-4">Ver</a>
                                  </td>
                              </tr>
                              <tr>
                                  <td scope="col">Serie 4030</td>
                                  <td scope="col">4 X 3 X 8</td>
                                  <td scope="col"><a
                                          href="https://armstrongfluidtechnology.com/~/media/documents/specifications/submittal-data/4030-base-mounted-pumps/4030-60hz/40-58_4030_4x3x8.pdf?la=en&display=1"
                                          class="btn btn-primary ms-4">Ver</a>
                                  </td>
                              </tr>
                              <tr>
                                  <td scope="col">Serie 4030</td>
                                  <td scope="col">5 X 4 X 10</td>
                                  <td scope="col"><a
                                          href="https://armstrongfluidtechnology.com/~/media/documents/specifications/submittal-data/4030-base-mounted-pumps/4030-60hz/40-64_4030_5x4x10.pdf?la=en&display=1"
                                          class="btn btn-primary ms-4">Ver</a>
                                  </td>
                              </tr>
                              <tr>
                                  <td scope="col">Serie 4030</td>
                                  <td scope="col">5 X 4 X 11.5</td>
                                  <td scope="col"><a
                                          href="https://armstrongfluidtechnology.com/~/media/documents/specifications/submittal-data/4030-base-mounted-pumps/4030-60hz/40-69_4030_5x4x11-5.pdf?la=en&display=1"
                                          class="btn btn-primary ms-4">Ver</a>
                                  </td>
                              </tr>
                              <tr>
                                  <td scope="col">Serie 4030</td>
                                  <td scope="col">5 X 4 X 8</td>
                                  <td scope="col"><a
                                          href="https://armstrongfluidtechnology.com/~/media/documents/specifications/submittal-data/4030-base-mounted-pumps/4030-60hz/40-581_4030_5x4x8.pdf?la=en&display=1"
                                          class="btn btn-primary ms-4">Ver</a>
                                  </td>
                              </tr>
                              <tr>
                                  <td scope="col">Serie 4030</td>
                                  <td scope="col">6 X 4 X 13</td>
                                  <td scope="col"><a
                                          href="https://armstrongfluidtechnology.com/~/media/documents/specifications/submittal-data/4030-base-mounted-pumps/4030-60hz/40-75_4030_6x4x13.pdf?la=en&display=1"
                                          class="btn btn-primary ms-4">Ver</a>
                                  </td>
                              </tr>
                              <tr>
                                  <td scope="col">Serie 4030</td>
                                  <td scope="col">6 X 4 X 13H</td>
                                  <td scope="col"><a
                                          href="https://armstrongfluidtechnology.com/~/media/documents/specifications/submittal-data/4030-base-mounted-pumps/4030-60hz/40-752_4030_6x4x13h.pdf?la=en&display=1"
                                          class="btn btn-primary ms-4">Ver</a>
                                  </td>
                              </tr>
                              <tr>
                                  <td scope="col">Serie 4030</td>
                                  <td scope="col">6 X 4 X 8</td>
                                  <td scope="col"><a
                                          href="https://armstrongfluidtechnology.com/~/media/documents/specifications/submittal-data/4030-base-mounted-pumps/4030-60hz/40-59_4030_6x4x8.pdf?la=en&display=1"
                                          class="btn btn-primary ms-4">Ver</a>
                                  </td>
                              </tr>
                              <tr>
                                  <td scope="col">Serie 4030</td>
                                  <td scope="col">6 X 5 X 10</td>
                                  <td scope="col"><a
                                          href="https://armstrongfluidtechnology.com/~/media/documents/specifications/submittal-data/4030-base-mounted-pumps/4030-60hz/40-66_4030_6x5x10.pdf?la=en&display=1"
                                          class="btn btn-primary ms-4">Ver</a>
                                  </td>
                              </tr>
                              <tr>
                                  <td scope="col">Serie 4030</td>
                                  <td scope="col">6 X 5 X 11.5</td>
                                  <td scope="col"><a
                                          href="https://armstrongfluidtechnology.com/~/media/documents/specifications/submittal-data/4030-base-mounted-pumps/4030-60hz/40-70_4030_6x5x11-5.pdf?la=en&display=1"
                                          class="btn btn-primary ms-4">Ver</a>
                                  </td>
                              </tr>
                              <tr>
                                  <td scope="col">Serie 4030</td>
                                  <td scope="col">6 X 5 X 13</td>
                                  <td scope="col"><a
                                          href="https://armstrongfluidtechnology.com/~/media/documents/specifications/submittal-data/4030-base-mounted-pumps/4030-60hz/40-755_4030_6x5x13.pdf?la=en&display=1"
                                          class="btn btn-primary ms-4">Ver</a>
                                  </td>
                              </tr>
                              <tr>
                                  <td scope="col">Serie 4030</td>
                                  <td scope="col">6 X 5 X 13H</td>
                                  <td scope="col"><a
                                          href="https://armstrongfluidtechnology.com/~/media/documents/specifications/submittal-data/4030-base-mounted-pumps/4030-60hz/40-756_4030_6x5x13h.pdf?la=en&display=1"
                                          class="btn btn-primary ms-4">Ver</a>
                                  </td>
                              </tr>
                              <tr>
                                  <td scope="col">Serie 4030</td>
                                  <td scope="col">6 X 6 X 6</td>
                                  <td scope="col"><a
                                          href="https://armstrongfluidtechnology.com/~/media/documents/specifications/submittal-data/4030-base-mounted-pumps/4030-60hz/40-542_4030_6x6x6.pdf?la=en&display=1"
                                          class="btn btn-primary ms-4">Ver</a>
                                  </td>
                              </tr>
                              <tr>
                                  <td scope="col">Serie 4030</td>
                                  <td scope="col">8 X 6 X 10</td>
                                  <td scope="col"><a
                                          href="https://armstrongfluidtechnology.com/~/media/documents/specifications/submittal-data/4030-base-mounted-pumps/4030-60hz/40-67_4030_8x6x10.pdf?la=en&display=1"
                                          class="btn btn-primary ms-4">Ver</a>
                                  </td>
                              </tr>
                              <tr>
                                  <td scope="col">Serie 4030</td>
                                  <td scope="col">8 X 6 X 11.5</td>
                                  <td scope="col"><a
                                          href="https://armstrongfluidtechnology.com/~/media/documents/specifications/submittal-data/4030-base-mounted-pumps/4030-60hz/40-71_4030_8x6x11-5.pdf?la=en&display=1"
                                          class="btn btn-primary ms-4">Ver</a>
                                  </td>
                              </tr>
                              <td scope="col">Serie 4030</td>
                              <td scope="col">8 X 6 X 13</td>
                              <td scope="col"><a
                                      href="https://armstrongfluidtechnology.com/~/media/documents/specifications/submittal-data/4030-base-mounted-pumps/4030-60hz/40-76_4030_8x6x13.pdf?la=en&display=1"
                                      class="btn btn-primary ms-4">Ver</a>
                              </td>
                              </tr>
                              <td scope="col">Serie 4030</td>
                              <td scope="col">8 X 6 X 15</td>
                              <td scope="col"><a
                                      href="https://armstrongfluidtechnology.com/~/media/documents/specifications/submittal-data/4030-base-mounted-pumps/4030-60hz/40-78_4030_8x6x15.pdf?la=en&display=1"
                                      class="btn btn-primary ms-4">Ver</a>
                              </td>
                              </tr>
                              <tr class="border-bottom border-dark">
                                  <td scope="col">Serie 4030</td>
                                  <td scope="col">8 X 8 X 8</td>
                                  <td scope="col"><a
                                          href="https://armstrongfluidtechnology.com/~/media/documents/specifications/submittal-data/4030-base-mounted-pumps/4030-60hz/40-595_4030_8x8x8.pdf?la=en&display=1"
                                          class="btn btn-primary ms-4">Ver</a>
                                  </td>
                              </tr>
                          </tbody>
                      </table>
                  </div>
              </div>
          </div>

          {{-- Contenido Series 4270 --}}
          <div>
              <div class="row">
                  <div class="col m-2 mt-3 pb-3">
                      <h4 id="4270" class="h4">Bomba Centrífuga Horizontal Acoplada Directamente a Motor
                          Serie 4270</h4>
                  </div>
              </div>
              <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3 p-2">
                  <div class="col-lg-5 mt-3 mb-3 pe-5">
                      <figure class="figure"><img src="{{ asset('imagenes/bombas/armstrong/4270.png') }}"
                              width="100%" class="figure-img img-fluid rounded" alt="">
                      </figure>
                      <figcaption class="ms-5 ps-5">
                          <h6 class="h6">Series 4270</h6>
                      </figcaption>
                      {{-- direccion de catalogo --}}
                      <div class="ms-5 ps-5 mb-2 mt-2">
                          <a href="https://drive.google.com/file/d/1qlbvIhZB4egWmHkNe-R-MBLGiK5zH_pb/view?usp=sharing"
                              class="btn btn-primary">Brochure</a>
                      </div>
                      <div class="ms-5 ps-5">
                          <a href="https://drive.google.com/file/d/1vK0KtdX53Yl-oG6jI063E0fgargfVMgz/view?usp=sharing"
                              class="btn btn-primary">Ficha Técnica</a>
                      </div>
                  </div>
                  <div class="col-lg-7 mt-5 mb-3">
                      <!-- Texto -->
                      <p>
                          La serie 4270 de Armstrong son diseñadas para una larga vida y trabajo continuo. El material
                          de fabricación de la carcasa es hierro fundido y el impulsor puede ordenarse en bronce o en
                          resina de polieterimida ULTEM el sello es tipo 21. El rango de trabajo va desde 3600 GPM (227
                          L/s) a 40 metros. Las condiciones máximas de operación son de 135º C a 150 psi. Estas bombas
                          vienen en motores con armazón de aluminio en 1800 ó a 3600 rpm.
                      </p>
                      <p>
                          Capacidades de 1/3 de hp -5hp Medidas: Disponibles en diámetros de 1 ¼”x 1” 1 1/2”x 1/1/4” y
                          2” x 1/1/2”
                      </p>
                  </div>
              </div>
              <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3 p-2">
                  <div class="col-lg-5 mt-3 mb-3">
                      <!-- Aplicaciones -->
                      <h4 class="h4">Aplicaciones</h4>
                      <ul>
                          <li>Torres de enfriamientos</li>
                          <li>HVAC</li>
                          <li>Proposito generales</li>
                      </ul>
                  </div>
                  <!-- Tabla -->
                  <div class="col-lg-7 mt-3 mb-5 pb-5" style="overflow-x:auto;">
                      <h4 class="h4">Especificaciones Técnicas</h4>
                      <table class="table table-striped ">
                          <thead>
                              <tr class="border-top border-danger">
                                  <th scope="col" class="border-bottom border-dark">Modelo</th>
                                  <th scope="col" class="border-bottom border-dark">Succión y Descarga</th>
                                  <th scope="col" class="border-bottom border-dark">HP</th>
                                  <th scope="col" class="border-bottom border-dark">RPM</th>
                              </tr>
                          </thead>
                          <tbody>
                              <tr>
                                  <td scope="col">4270</td>
                                  <td scope="col">1.5”X 1.25” ó de 2” x 1.5”</td>
                                  <td scope="col">1/3</td>
                                  <td scope="col">1800</td>
                              </tr>
                              <tr class="border-bottom border-dark">
                                  <td scope="col">4270</td>
                                  <td scope="col">1.5”x 1.25” ó de 2” x 1.5”</td>
                                  <td scope="col">½</td>
                                  <td scope="col">1800</td>
                              </tr>
                          </tbody>
                      </table>

                      <h4 class="h4">Series 42ST</h4>
                      <table class="table table-striped ">
                          <thead>
                              <tr class="border-top border-danger">
                                  <th scope="col" class="border-bottom border-dark">Modelo</th>
                                  <th scope="col" class="border-bottom border-dark">Succión</th>
                                  <th scope="col" class="border-bottom border-dark">Descarga</th>
                                  <th scope="col" class="border-bottom border-dark">Tamaño de impulsor</th>
                                  <th scope="col" class="border-bottom border-dark">HP</th>
                                  <th scope="col" class="border-bottom border-dark">RPM</th>
                              </tr>
                          </thead>
                          <tbody>
                              <tr>
                                  <td scope="col">702**</td>
                                  <td scope="col">1.25 (31)</td>
                                  <td scope="col">1 (25)</td>
                                  <td scope="col">3.5 (88)</td>
                                  <td scope="col">¾</td>
                                  <td scope="col">3600</td>
                              </tr>
                              <tr>
                                  <td scope="col">704**</td>
                                  <td scope="col">1.25 (31)</td>
                                  <td scope="col">1 (25)</td>
                                  <td scope="col">4(109)</td>
                                  <td scope="col">1</td>
                                  <td scope="col">3600</td>
                              </tr>
                              <tr>
                                  <td scope="col">705**</td>
                                  <td scope="col">1.25 (31)</td>
                                  <td scope="col">1 (25)</td>
                                  <td scope="col">4.5 (121)</td>
                                  <td scope="col">1½</td>
                                  <td scope="col">3600</td>
                              </tr>
                              <tr>
                                  <td scope="col">706**</td>
                                  <td scope="col">1.5 (38)</td>
                                  <td scope="col">1.25 (31)</td>
                                  <td scope="col">4.5 (121)</td>
                                  <td scope="col">2</td>
                                  <td scope="col">3600</td>
                              </tr>
                              <tr>
                                  <td scope="col">707**</td>
                                  <td scope="col">2 (50)</td>
                                  <td scope="col">1.5 (38)</td>
                                  <td scope="col">4 (100)</td>
                                  <td scope="col">1½</td>
                                  <td scope="col">3600</td>
                              </tr>
                              <tr>
                                  <td scope="col">709T</td>
                                  <td scope="col">2 (50)</td>
                                  <td scope="col">1.5 (38)</td>
                                  <td scope="col">4.375 (109)</td>
                                  <td scope="col">2</td>
                                  <td scope="col">3600</td>
                              </tr>
                              <tr class="border-bottom border-dark">
                                  <td scope="col">710T</td>
                                  <td scope="col">2 (50)</td>
                                  <td scope="col">1.5 (38)</td>
                                  <td scope="col">5 (125)</td>
                                  <td scope="col">3</td>
                                  <td scope="col">3600</td>
                              </tr>
                          </tbody>
                      </table>
                      <p>**Añade el sufijo S para ordenar bombas de 60hz 1 fase 115 volts
                          Añade el sufijo T para ordenar bombas de 60hz 3 fases 220/450 volts
                      </p>
                  </div>
              </div>
          </div>

          {{-- Contenido Series Firepak Horizontal Split --}}
          <div>
              <div class="row">
                  <div class="col m-2 mt-3 pb-3">
                      <h4 id="FirePak" class="h4">Sistemas Contra Incendios Armados Armstrong</h4>
                  </div>
              </div>
              <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3 p-2">
                  <div class="col-lg-5 mt-3 mb-3 pe-5">
                      <figure class="figure"><img src="{{ asset('imagenes/bombas/armstrong/FirePak.png') }}"
                              width="100%" class="figure-img img-fluid rounded" alt="">
                      </figure>
                      <figcaption class="ms-5 ps-2">
                          <h6 class="h6">Firepak Horizontal Split</h6>
                      </figcaption>
                      {{-- direccion de catalogo --}}
                      <div class="ms-5 ps-4">
                          <a href="https://drive.google.com/file/d/1Q9BBkaPLG1umzFiEWmEmuA6Of4cAtqIn/view?usp=drive_link"
                              class="btn btn-primary">Ficha Técnica</a>
                      </div>
                  </div>
                  <div class="col-lg-7 mt-5 mb-3">
                      <!-- Texto -->
                      <b>
                          Caja Partida Horizontal (Firepak Horizontal Split)</b>
                      <p>
                          Los sistemas contraincendios de Armstrong son sistemas que cumplen las recomendaciones de la
                          NFPA (National Fire Production Association) apartado 20 NFPA 20 y con los requerimientos de UL
                          /FM.
                          Opcionalmente se pueden ordenar con bomba jockey, controlador de bomba jockey, circuito de
                          medidor de flujo, válvulas de alivio y tanque de combustible diesel.
                      </p>
                      <!-- Aplicaciones -->
                      <h4 class="h4">Aplicaciones</h4>
                      <ul>
                          <li>Protección contra incendios en edificios</li>
                          <li>Naves industriales</li>
                          <li>Fabricas</li>
                          <li>Gaseras</li>
                      </ul>
                  </div>
              </div>
              <div class="row-lg-12 mt-4 mb-4">
                  <div class="text-center">
                      <h3 class="h3">Capacidades desde 500- 3000 GPM </h3>
                  </div>
              </div>
              <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3 p-2">
                  <div class="col">
                      <!-- Aplicaciones -->
                      <h4 class="h4">Rango de aplicaciones del FirePak VIL</h4>
                      <ul>
                          <li>Conexión: Hasta 8”</li>
                          <li>Potencia: Hasta 150” hp</li>
                          <li>Presión: Hasta 200” psi</li>
                          <li>Flujo: Hasta 1500 GPM</li>
                      </ul>
                  </div>
                  <div class="col">
                      <!-- Aplicaciones -->
                      <h4 class="h4">Rango de aplicaciones del FirePak HSC</h4>
                      <ul>
                          <li>Conexión: Hasta 12”</li>
                          <li>Potencia: Hasta 250 hp</li>
                          <li>Presión: Hasta 250 psi</li>
                          <li>Flujo: Hasta 3000 GPM</li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>

      {{-- Fin de container --}}
      </div>
