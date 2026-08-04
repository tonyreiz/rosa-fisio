
    <!-- About Section -->
    <section class="section about-section pb-5 my-5">
      <div class="b-container">
        <div class="row align-items-center g-5">
          <!-- Left Image Side -->
          <div class="col-xl-4 d-flex position-relative">
            <div class="position-relative mx-auto img-container">
              <!-- Primary Image -->
              <div class="ratio-wrapper-429">
                <img src="{{ asset('rosa/image/sobre-fisio.jpg')}}" alt="Sobre nós"
                  class="w-100 h-100 object-fit-cover position-absolute top-0 start-0 rounded-5" data-aos="fade-right"
                  data-aos-easing="ease-in-sine" data-aos-delay="500" data-aos-duration="1000">
              </div>
            </div>
          </div>

          @foreach ($listaFisio as $lista)
              
          <div class="col-xl-8">
            <div class="row">
              <h6 class="text-primary-color fw-semibold mb-2" style="color: #000;">Rosa Fisioterapia</h6>
              <h2 class="font-1 mb-4" style="font-weight: 800; color: #486d6d;">{{$lista->titulo_sobre_fisio}}</h2>
            </div>
            <div class="row">
              <div class="col-12 col-md-7">
                <ul class="list-unstyled fs-5">
                  <li class="d-flex align-items-start mb-2">
                    <i class="bi bi-chevron-right text-primary-color me-2 py-3"></i>
                    <span>
                      {{$lista->texto_topico_sobre_fisio}}</span>
                  </li>
                
                </ul>
              </div>

            </div>
          </div>
          @endforeach
          <!-- Center Text Side -->
        </div>
      </div>
    </section>
    <!-- #about end -->