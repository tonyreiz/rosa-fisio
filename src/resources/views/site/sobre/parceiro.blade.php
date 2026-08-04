   <!-- Teams Section -->
    <section class="section py-5 mt-5">
      <div class="b-container">
        <div class="row text-center">
          <h6 class="text-primary-color fw-semibold mb-2" style="color: #000; ">Nossos parceiros</h6>
          <h2 class="font-1 mb-5" style="font-weight: 800; color: #486d6d;">Encontre outros especialistas<br>parceiros</h2>
        </div>
        <div class="row row-cols-1 row-cols-md-2 row-cols-xl-4 g-4 mb-5">

          @foreach ($listaParceiro as $lista)
              
          @endforeach
          <!-- Card 1 -->
          <div class="col" data-aos="fade-right" data-aos-easing="linear" data-aos-delay="500" data-aos-duration="1000">
            <div class="position-relative rounded-5 transition-hover mx-auto img-container">
              <div class="ratio-wrapper-419">
                <img src="{{ asset('rosa/image/' . $lista->foto_parceiro)}}" alt="{{$lista->nome_parceiro}}" class="rounded-5 w-100 h-100 position-absolute">
              </div>
              <div class="position-absolute w-75" style="margin-top: -9rem; margin-left: 12%;">
                <div
                  class="bg-primary-color d-flex flex-column text-white py-3 align-items-center text-center rounded-5">
                  <div class="mb-2">
                    <h4 class="font-1 fw-bolder">{{$lista->nome_parceiro}}</h4>
                    <p class="mb-0">{{$lista->funcao_parceiro}}</p>
                  </div>
                  <div class="social-box justify-content-center mb-2">
                    <a href="https://www.facebook.com/floraissaintgermain" class="fs-6 rounded-1 py-1"
                      style="width: 30px; height: 30px;"><i class="bi bi-facebook text-white"></i></a>
                    <a href="https://www.instagram.com/floraisdesaintgermain/" class="fs-6 rounded-1 py-1"
                      style="width: 30px; height: 30px;"><i class="bi bi-instagram text-white"></i></a>
                    <a href="" class="fs-6 rounded-1 py-1" style="width: 30px; height: 30px;"><i
                        class="bi bi-whatsapp text-white"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
    
          
        </div>
      </div>
    </section>
    <!-- #teams end -->