 <!-- FAQs Section -->
    <section class="section bg-gradient-secondary py-5 my-5 text-white">
      <div class="b-container">
        <div class="row row-cols-1 row-cols-lg-2 py-5">
          <div class="col d-flex flex-column align-items-center align-items-lg-start text-center text-lg-start">
            <h6 class="text-primary-color fw-semibold mb-4" style="color: #fff;">PERGUNTAS FREQUENTES</h6>
            <h2 class="font-1 mb-4" style="font-weight: 800;">
              As <span class="text-primary-color" style="color: #fff;">Perguntas</span> que Mais <br>
              <span class="text-primary-color" style="color: #fff;">recebemos </span> até agora.
            </h2>

            <hr class="border-white solid border-2 p-0 m-0">


          
              <p class="mt-4 mb-5" style="font-size: large;">

                Por meio de cuidados consistentes e orientação compassiva, ajudamos as pessoas a redescobrir sua força,
                desenvolver resiliência e avançar em direção a um futuro mais brilhante e saudável, no seu próprio ritmo.
              </p>
            </div>
              <div class="col mt-5">
                <div class="accordion" id="accordionFaqs" data-aos="fade-up" data-aos-easing="ease-out-cubic"
                  data-aos-delay="500" data-aos-duration="1000">
                  @foreach ($listaFaq as $index => $lista)
                    <div class="accordion-item">
                      <h2 class="accordion-header">
                        <button
                          class="accordion-button {{ $loop->first ? '' : 'collapsed' }}"
                          type="button" 
                          data-bs-toggle="collapse"
                          data-bs-target="#faq-{{ $index + 1 }}"
                          aria-expanded="{{ $loop->first ? 'true' : 'false' }}"
                          aria-controls="faq-{{ $index + 1 }}"
                        >
                          &nbsp;{{ $lista->titulo_faq }}
                        </button>
                      </h2>
                      <div
                        id="faq-{{ $index + 1 }}"
                        class="accordion-collapse collapse {{ $loop->first ? 'show' : '' }}"
                        data-bs-parent="#accordionFaqs"
                      >
                        <div class="accordion-body">{{ $lista->resposta_faq }}</div>
                      </div>
                    </div>
                  @endforeach
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- #faqs end -->