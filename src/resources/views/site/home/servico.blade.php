
    <!-- Services Section -->
    <section class="section py-5 my-5">
      <div class="b-container text-center">
        <h6 class="text-primary-color fw-semibold mb-2" style=" margin-top: 30px;  color: #000;">NOSSOS SERVIÇOS</h6>
        <h2 class="display-5 font-1 mb-5" style="font-weight: 800; color: #486d6d;">Revigorando sua vida novamente</h2>
        <div class="row g-4 my-5">

          @foreach ($listaServico as $lista)
                        <!-- Card 1 -->
                    <div class="col-12 col-md-6 col-xl-4">
                      <div class="card border-0 rounded-5 overflow-hidden h-100 shadow-sm scale-hover" data-aos="fade-up"
                        data-aos-easing="linear" data-aos-delay="250" data-aos-duration="1000">
                        <img src="{{ asset('rosa/image/'. $lista->imagem_servico_resumo) }}" class="w-100"
                          style="height: 250px; transform: scale(1.5); object-position: center;"
                          alt="Fisioterapia Respiratória Infantil">
                        <div class="bg-accent-color-2 text-start p-4 position-relative">

                          <a href="{{ route('detalheFisio') }}"
                            class="btn btn-dark btn-lg rounded-pill position-absolute top-0 end-0 me-3 fw-medium scale-hover"
                            style="margin-top: -25px;">Veja Mais</a>
                          <h3 class="font-1 mt-5" style="font-weight: 800;">{{$lista->titulo_servico_resumo}}</h3>
                          <hr class="border-primary border-1 opacity-100 w-100 my-4">
                          <p class="mb-3">{{$lista->descricao_curta_servico_resumo}}</p>
                        </div>
                      </div>
                    </div>
     
          @endforeach


        </div>
      </div>
    </section>
    <!-- #services end -->