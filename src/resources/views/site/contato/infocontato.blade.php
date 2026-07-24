    <section class="section py-5 my-5">
      <div class="b-container">
        <div class="row justify-content-center g-5">
          <!-- form -->
          <div class="col-12 col-lg-6 order-2 order-lg-1">
            <div class="card bg-secondary-color-2 rounded-5 border-0">
              <div class="card-body p-5">
                <div
                  class="success_msg toast align-items-center w-100 shadow-none mb-3 border border-success rounded-pill my-4"
                  role="alert" aria-live="assertive" aria-atomic="true">
                  <div class="d-flex p-2">
                    <div class="toast-body d-flex flex-row gap-3 align-items-center text-success">
                      <i class="bi bi-check-circle-fill text-success"></i>
                      Your Message Successfully Send.
                    </div>
                    <button type="button" class="me-2 m-auto bg-transparent border-0 ps-1 pe-0 text-success"
                      data-bs-dismiss="toast" aria-label="Close"><i class="bi bi-x-lg"></i></button>
                  </div>
                </div>
                <div
                  class="error_msg toast align-items-center w-100 shadow-none border-danger mb-3 my-4 border rounded-pill"
                  role="alert" aria-live="assertive" aria-atomic="true">
                  <div class="d-flex p-2">
                    <div class="toast-body d-flex flex-row gap-3 align-items-center text-danger">
                      <i class="bi bi-exclamation-triangle-fill text-danger"></i>
                      Something Wrong ! Send Form Failed.
                    </div>
                    <button type="button" class="me-2 m-auto bg-transparent border-0 ps-1 pe-0 text-danger"
                      data-bs-dismiss="toast" aria-label="Close"><i class="bi bi-x-lg"></i></button>
                  </div>





                </div>
                <form class="needs-validation" novalidate action="#" method="POST">
                  <div class="row g-3">
                    <div class="col-lg-6 col-sm-12">
                      <label for="name" class="form-label font-1 fs-4 fw-bold">Nome</label>
                      <input type="text" class="form-control form-control-lg rounded-5" id="name" name="name"
                        placeholder="Seu nome aqui" required>
                      <div class="invalid-feedback">
                        Nome válido é obrigatório.
                      </div>
                    </div>
                    <div class="col-lg-6 col-sm-12">
                      <label for="email" class="form-label font-1 fs-4 fw-bold">Email</label>
                      <input type="email" class="form-control form-control-lg rounded-5" id="email" name="email"
                        placeholder="Seu email aqui" required>
                      <div class="invalid-feedback">
                        Email válido é obrigatório.
                      </div>
                    </div>
                    <div class="col-lg-6 col-sm-12">
                      <label for="phone" class="form-label font-1 fs-4 fw-bold">Telefone</label>
                      <input type="number" class="form-control form-control-lg rounded-5" id="phone" name="phone"
                        placeholder="Seu número de telefone" required>
                      <div class="invalid-feedback">
                        Número de telefone válido é obrigatório.
                      </div>
                    </div>

                    <div class="col-lg-6 col-sm-12">
                      <label for="subject" class="form-label font-1 fs-4 fw-bold">Assunto</label>
                      <input type="text" class="form-control form-control-lg rounded-5" id="subject"
                        placeholder="Seu assunto aqui" name="subject" required>
                      <div class="invalid-feedback">
                        Assunto é obrigatório.
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="message" class="form-label font-1 fs-4 fw-bold">Mensagem</label>
                      <textarea class="form-control form-control-lg rounded-5" id="message" name="message"
                        rows="5"></textarea>
                    </div>
                    <button class="btn btn-block btn-primary-solid submit_form mt-4" type="submit">Enviar
                      Formulário</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <!-- Information -->
          <div class="col-12 col-lg-6 order-1 order-lg-2">
            <div class="row py-5">
              <h6 class="text-primary-color fw-semibold mb-2">ENTRE EM CONTATO</h6>
              <h2 class="font-1" style="font-weight: 800;">Detalhes de Contato</h2>
            </div>
            <div class="row g-3">
              <div class="col-12 col-md-6">
                <div class="card text-center rounded-5" data-aos="fade-down" data-aos-easing="ease-out-cubic"
                  data-aos-delay="250" data-aos-duration="1000" style="border: 2px solid #1747A6;">
                  <div class="card-body d-flex flex-column align-items-center font-1">
                    <div class="d-flex align-items-center justify-content-center rounded-circle bg-primary-color"
                      style="width: 75px; height: 75px; border: 2px solid white;">
                      <i class="bi bi-geo-alt-fill fs-2 text-white"></i>
                    </div>
                    <h4 class="card-title mt-3 fw-bolder">Endereço</h4>
                    <a class="card-text text-muted-color"
                      href="https://maps.google.com/?q=123+Serenity+Lane,+Blissfield,+CA+90210,+United+States"
                      target="_blank">123 Serenity Lane, Blissfield,<br>CA 90210, United States</a>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-6">
                <div class="card text-center rounded-5" data-aos="fade-left" data-aos-easing="ease-out-cubic"
                  data-aos-delay="500" data-aos-duration="1000" style="border: 2px solid #1747A6;">
                  <div class="card-body d-flex flex-column align-items-center font-1">
                    <div class="d-flex align-items-center justify-content-center rounded-circle bg-primary-color"
                      style="width: 75px; height: 75px; border: 2px solid white;">
                      <i class="bi bi-envelope-fill fs-2 text-white"></i>
                    </div>
                    <h4 class="card-title mt-3 fw-bolder">Precisa de Suporte?</h4>
                    <a class="card-text text-muted-color" href="tel:(11)97213-6979">(11)97213-6979</a> <a
                      class="card-text text-muted-color" href="mailto:Info@Yourmail.com">rosareis104@gmail.com</a></p>
                  </div>
                </div>
              </div>
              <div class="col-12">
                <div class="card rounded-5" data-aos="fade-right" data-aos-easing="ease-out-cubic" data-aos-delay="750"
                  data-aos-duration="1000" style="border: 2px solid #1747A6;">
                  <div
                    class="card-body font-1 d-flex flex-column flex-md-row align-items-center text-center text-md-start gap-3">
                    <div
                      class="d-flex align-items-center justify-content-center rounded-circle bg-primary-color mx-auto mx-md-0"
                      style="width: 75px; height: 75px; border: 2px solid white;">
                      <i class="bi bi-clock-fill fs-2 text-white"></i>
                    </div>
                    <div class="mt-3">
                      <h4 class="card-title fw-bolder">Horário de Funcionamento</h4>
                      <p class="card-text text-muted-color">Seg - Sex 8:00 - 18:30</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>