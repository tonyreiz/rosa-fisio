    <!-- About Section -->
    <section class=" section pb-5 my-5">
      <div class="b-container">
        <div
          class="row row-cols-1 row-cols-xl-2 g-5 align-items-center justify-content-center text-center text-xl-start">
          <!-- Left Content Side -->
          <div class="col position-relative d-flex justify-content-center">
            <div class="position-relative img-container px-0 px-lg-5">
              <!-- Primary Image -->
              <div class="ratio-wrapper-429">
                <img src="{{ asset('rosa/image/rosa.jpg') }}" alt="Foto da Doutora Rosa"
                  class="w-100 h-100 object-position-center position-absolute top-0 start-0 rounded-5"
                  data-aos="fade-up" data-aos-easing="linear" data-aos-delay="500" data-aos-duration="1000">
              </div>
              <!-- Experience Label -->
              <div
                class="position-absolute bottom-0 end-0 bg-secondary-color text-white px-4 py-2 rounded-4 m-3 fw-bold small z-1 text-center"
                data-aos="fade-down" data-aos-easing="linear" data-aos-delay="500" data-aos-duration="1000">
                <span class="font-1 fs-2 fw-bold count-up" data-count="10" data-suffix="+ Anos">0</span><br>
                <span class="fs-5">De Experiência</span>
              </div>
              <!-- Circle Image -->
              <div class="position-absolute" style="top: -60px; left: 0; transform: translateX(-11%); z-index: 3;">
                <div class="img-circle rounded-circle overflow-hidden border border-4 border-white shadow"
                  data-aos="fade-right" data-aos-easing="linear" data-aos-delay="500" data-aos-duration="1000">
                  <img src="{{ asset('rosa/image/logo1.jpg') }}" alt="logo Doutora Rosa" class="w-100 h-101">
                </div>
              </div>
            </div>
          </div>
          <!-- Right Content Side -->
          <div class="col">
            <h6 class="text-primary-color fw-semibold mb-2">SOBRE MIM</h6>
            <h2 class="font-1 mb-4" style="font-weight: 800; color: #486d6d;">Conheça mais sobre mim!</h2>
            <p class="text-secondary" style="font-size: large;">
              Sou Rosa Maria, tenho 50 anos e atuo há mais de 20 anos como doutora e fisioterapeuta respiratória
              infantil. Ao longo da minha trajetória, desenvolvi um olhar integral para a saúde, unindo ciência e
              cuidado humanizado no tratamento respiratório de crianças.

              Além da fisioterapia, dedico-me a práticas alternativas que complementam meu trabalho: sou acupunturista,
              praticante de Reiki, aromaterapeuta e professora de yoga. Acredito que cada pessoa é única, e que o
              verdadeiro cuidado vai além dos sintomas, envolvendo acolhimento, escuta e equilíbrio entre corpo, mente e
              emoções. Meu propósito é promover bem-estar, qualidade de vida e saúde de forma completa, especialmente no
              cuidado de crianças e suas famílias.
            </p>

            <div class="row d-flex flex-column flex-md-row my-4">
              <div class="col d-flex justify-content-center justify-content-lg-start">
                <ul class="list-unstyled font-1">
                  <li class="d-flex align-items-start fw-bolder mb-2">
                    <i class="bi bi-check-circle-fill text-primary-color fs-4 me-2"></i>
                    <h5 class="fw-bolder py-1">Aromaterapia</h5>
                  </li>
                  <li class="d-flex align-items-start fw-bolder mb-2">
                    <i class="bi bi-check-circle-fill text-primary-color fs-4 me-2"></i>
                    <h5 class="fw-bolder py-1">Acupuntura</h5>
                  </li>
                </ul>
              </div>
              <div class="col d-flex justify-content-center justify-content-lg-start">
                <ul class="list-unstyled font-1">
                  <li class="d-flex align-items-start fw-bolder mb-2">
                    <i class="bi bi-check-circle-fill text-primary-color fs-4 me-2"></i>
                    <h5 class="fw-bolder py-1">Fisioterapia Infantil</h5>
                  </li>
                  <li class="d-flex align-items-start fw-bolder mb-2">
                    <i class="bi bi-check-circle-fill text-primary-color fs-4 me-2"></i>
                    <h5 class="fw-bolder py-1">Tratamento de Reiki</h5>
                  </li>
                </ul>
              </div>
            </div>

            <p class="fst-italic fw-bold mb-4" style="font-size: large;">Com minhas capacidades, estarei focado em
              trazer conforto e bem-estar para você.</p>

            <div class="d-flex align-items-center justify-content-center justify-content-xl-start gap-3"  >

              <a href="{{ route('sobre') }}" class="btn btn-primary-solid" style="background-color: #c1907f;">Saiba Mais</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- #about end -->