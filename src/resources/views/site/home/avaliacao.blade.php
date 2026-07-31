    <!-- Feedback Section -->
    <section class="section py-5 mt-5">
      <div class="b-container">

        <div class="row justify-content-between">
          <div class="col-12 col-lg-7 text-center text-lg-start">
            <h6 class="text-primary-color fw-semibold mb-2" style="color: #000;">CLIENT FEEDBACKS</h6>
            <h2 class="font-1" style="font-weight: 800; color: #486d6d;">
              Avaliações de Clientes Satisfeitos
            </h2>
          </div>
          <div class="col-12 col-lg-5 text-center text-lg-start mt-4 mt-md-0">
            <p class="my-4 text-muted-color" style="font-size: large; color: #000;">Veja o que nossos clientes dizem sobre nós, o
              serviço, acompanhamento e resultados.</p>
          </div>
        </div>

        <div class="swiper mySwiper mt-4">
          <div class="swiper-wrapper">
          @forelse ($listaAvaliacao as $lista)
          @php
              $estrela = max(
                0,
                min(5, (int) $lista->estrela_avaliacao)
              );

              $cliente = $lista->AvaliacaoCliente
          @endphp
          
                  
                      <!-- Card 4 -->
                      <div class="swiper-slide">
                        <div class="card feedback-card">
                          <div class="d-flex align-content-center mb-3">
                            <div class="estrela">
                              <ul>
                                @for ($i = 0; $i <= 5; $i++)
                                  <li class="{{ $i <= $estrela ? 'estrela-ativa' : 'estrela-inativa'}}"><img src="{{ asset('rosa/image/Star.png')}}" alt="{{
                                      $i <= $estrela ? 'estrela preenchida' : 'estrela não preenchida'}}">
                                  </li>
                                @endfor
                                </ul>
                            </div>
                          </div>
                          <p class="fw-bold">{{$lista->descricao_avaliacao}}</p>
                          <div class="d-flex align-items-center mt-2">
                            <img src="{{ asset("rosa/image/$cliente->foto_cliente") }}" alt="{{$cliente->nome_cliente}}"
                              style="width: 64px; height: 64px; border-radius:50%; margin-right: 10px;">
                            <div class="mt-4">
                              <h5 class="font-1 fw-bold text-primary-color">{{$cliente->nome_cliente}}</h5>
                              <p class="text-muted-color">Cliente</p>
                            </div>
                          </div>
                        </div>
                      </div>
                      @empty
                      
                      @endforelse
                  </div>
                </div>
      </div>
    </section>
    <!-- #feedback end -->