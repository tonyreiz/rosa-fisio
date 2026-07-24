   <!-- Appointment Section -->
    <section class="section py-5 text-white bg-gradient-secondary my-5">
      <div class="b-container">
        <div class="row align-items-center g-4 pt-5">
          <!-- Left content -->
          <div class="col-12 col-xl-5 order-1 order-md-3 order-xl-1 text-white mt-5 text-center text-xl-start">
            <p class="text-uppercase text-primary-color fs-5 fw-semibold mb-2" style="color: #fff;">Porque nos escolher ?</p>
            <h2 class="font-1 display-5 mb-4" style="font-weight: 800;">
              Alcançando <span class="text-primary-color" style="color: #fff;">sua</span> melhor
              <span class="text-primary-color" style="color: #fff;">Forma</span>
            </h2>
            <p class="mb-4" style="font-size: large;">Por meio de cuidados consistentes e orientação compassiva,
              ajudamos as pessoas a redescobrir sua força, desenvolver resiliência e avançar em direção a um futuro mais
              brilhante e saudável, no seu próprio ritmo.</p>
            <ul class="list-unstyled font-1 text-center text-xl-start">
              <li class="d-flex flex-row justify-content-center justify-content-xl-start mb-3">
                <i class="bi bi-check-circle-fill text-primary-color fs-4 mb-2 mb-xl-0 me-2" style=" color: #d2b066;"></i>
                <h5 class="fw-bolder py-1">
                  Profissionais experientes e atenciosos</h5>
              </li>
              <li class="d-flex flex-row justify-content-center justify-content-xl-start mb-3">
                <i class="bi bi-check-circle-fill text-primary-color fs-4 mb-2 mb-xl-0 me-2" style=" color: #d2b066;"></i>
                <h5 class="fw-bolder py-1">
                  Abordagem holística para o bem-estar</h5>
              </li>
              <li class="d-flex flex-row justify-content-center justify-content-xl-start mb-3">
                <i class="bi bi-check-circle-fill text-primary-color fs-4 mb-2 mb-xl-0 me-2" style=" color: #d2b066;"></i>
                <h5 class="fw-bolder py-1">
                  Ambiente seguro e acolhedor</h5>
              </li>
            </ul>
            <a href="{{ route('home') }}" class="btn btn-primary-solid mb-5" style="background-color: #c1907f;">Agende sua consulta</a>
          </div>

          <!-- Middle content -->
          <div class="col-12 col-md-7 col-xl-5 order-2 order-md-1">
            <div class="ratio ratio-1x1">
              <img src="{{ asset('rosa/image/exercício físico.jpg') }}" class="w-100 h-100 object-fit-cover position-absolute rounded-5"
                alt="Exercício Físico" data-aos="fade-up" data-aos-easing="linear" data-aos-delay="750"
                data-aos-duration="1000">
            </div>
          </div>
          <!-- Right content -->
          <div class="col-12 col-md-5 col-xl-2 d-flex flex-column gap-3 order-3 order-md-2 order-xl-3">
            <div class="card bg-gradient-primary rounded-4 border-0" data-aos="fade-left" data-aos-easing="linear"
              data-aos-delay="500" data-aos-duration="1000">
              <div class="card-body text-center text-white p-3 font-1"  style=" background-color: #dfb147;">
                <div class="display-5"><i class="bi bi-emoji-smile-fill accent-secondary-color" style=" color: #fff;"></i></div>
                <div class="mb-0 fs-2 fw-bold">100%</div>
                <p class="mb-0">Satisfação</p>
              </div>
            </div>
            <div class="card bg-gradient-primary rounded-4 border-0" data-aos="fade-left" data-aos-easing="linear"
              data-aos-delay="750" data-aos-duration="1000">
              <div class="card-body text-center text-white p-3 font-1" style=" background-color: #d3b265;">
                <div class="display-5"><i class="bi bi-hand-thumbs-up-fill accent-secondary-color"  style=" color: #fff;"></i></div>
                <div class="mb-0 fs-2 fw-bold">257+</div>
                <p class="mb-0">Pacientes satisfeitos</p>
              </div>
            </div>
            <div class="card bg-gradient-primary rounded-4 border-0" data-aos="fade-left" data-aos-easing="linear"
              data-aos-delay="1000" data-aos-duration="1000">
              <div class="card-body text-center text-white p-3 font-1" style=" background-color: #d3b265;">
                <div class="display-5"><i class="bi bi-person-plus-fill accent-secondary-color"  style=" color: #fff;"></i></div>
                <div class="mb-0 fs-2 fw-bold">10+</div>
                <p class="mb-0">Profissionais Especializados</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- #appointment end -->