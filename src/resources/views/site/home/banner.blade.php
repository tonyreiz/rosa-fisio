    <!-- Hero Section -->
  
   <section class="section hero-section d-flex align-items-center pb-0">
      <div class="b-container px-3 px-sm-4 px-md-0">
        <div class="row row-cols-1 row-cols-lg-2 g-4 align-items-center text-white">

        @foreach ($listaBanner as $lista)
           
          <!-- Left Content -->
          <div class="col mt-md-5 text-center text-lg-start d-flex flex-column align-items-center align-items-lg-start"
            data-aos="fade-up" data-aos-easing="linear" data-aos-delay="500" data-aos-duration="1000">
            <h6 class="text-primary-color fw-semibold">RELAXANDO SEU CORPO E ESPIRITO</h6>
            <h1 class="display-md-4 lh-sm font-1" style="font-weight: 900;">
              Cuidando melhor de Você
            </h1>
            <hr class="border border-white border-2 opacity-75 w-75 my-4 mx-auto mx-lg-0">
            <p class="fs-5 my-4">
              Fisioterapia infantil acolhedora que estimula movimento, autonomia e brincadeira. Sessões individualizadas
              para fortalecer o corpo, a confiança e o desenvolvimento do seu filho.
            </p>
            <div
              class="d-flex gap-3 align-items-center my-4 flex-nowrap justify-content-lg-start justify-content-center">
              <a href="../services.php#levar" role="button" class="btn btn-primary-solid">Agende sua Consulta Aqui</a>

            </div>
          </div>
     
        @endforeach

        
        </div>
      </div>
    </section>

      

