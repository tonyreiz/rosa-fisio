  <header class="bg-white" id="topoFixo">
    <div class="b-container">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-light" aria-label="Offcanvas navbar large">
        <div class="container-fluid">
          <div class="logo-box">
            <a href="{{ route('home')}}" class="navbar-brand">
              <img src="{{ asset('rosa/image/logoTexto.jpg') }}" alt="Main Logo"></a>
          </div>
          <button class="navbar-toggler bg-primary-color border-0" type="button" data-bs-toggle="offcanvas"
            data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <span class="bi bi-list text-white fs-2"></span>
          </button>
          <div class="offcanvas offcanvas-start bg-light" tabindex="-1" id="offcanvasNavbar"
            aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header" id="offcanvasNavbarLabel">
              <div class="logo-drawer">
                <a href="{{ route('home') }}" class="navbar-brand"><img src="{{ asset('rosa/image/Main-Logo.png') }}" alt="Drawer Logo"
                    class="img-fluid"></a>
              </div>
              <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
              <ul class="navbar-nav mx-auto mb-2 mb-xl-0 gap-xl-4 justify-content-center flex-grow-1 pe-3">
                <li class="nav-item">
                  <a class=" nav-link active aria-current=page" href="{{ route('home')}}">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('sobre')}}">Sobre</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle " href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    Serviços
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="{{ route ('servico')}}">Nossos Serviços</a></li>
                   
                        
                    <li><a class="dropdown-item" href="{{route('detalheFisio')}}">Fisioterapia Respiratória</a></li>
                
                    <li><a class="dropdown-item" href="{{route('detalheAroma')}}">Aromaterapia</a></li>

                    <li><a class="dropdown-item" href="{{route('detalheAcunputura')}}">Acunputura</a></li>

                     <li><a class="dropdown-item" href="{{route('detalheYoga')}}">Yoga</a></li>

                     <li><a class="dropdown-item" href="{{route('detalheAlternativa')}}">Práticas Alternativas</a></li>

                     <li><a class="dropdown-item" href="{{route('detalheFloral')}}">Florais</a></li>
                  </ul>
                </li>
                <!-- <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    Pages
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="pricing.html">Pricing</a></li>
                    <li><a class="dropdown-item" href="team.html">Team</a></li>
                    <li><a class="dropdown-item" href="blogs.html">Blogs</a></li>
                    <li><a class="dropdown-item" href="blog-detail.html">Blog Detail</a></li>
                    <li><a class="dropdown-item" href="faqs.html">FAQs</a></li>
                    <li><a class="dropdown-item" href="error-404.html">Error 404</a></li>
                  </ul>
                </li> -->
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('contato')}}">Contato</a>
                </li>
              </ul>



            </div>
          </div>
        </div>
        <div class="social-box align-items-center">
          <a href="https://www.facebook.com/rosa.dosreisalves?locale=pt_BR" target="_blank" class="fs-5 rounded-2"
            style="width: 30px; height: 30px;"><i class="bi bi-facebook text-primary-color"></i></a>
          <a href="http://api.whatsapp.com/send?1=pt_BR&amp;phone=5511972136979" target="_blank" class="fs-5 rounded-2"
            style="width: 30px; height: 30px;"><i class="bi bi-whatsapp text-primary-color"></i></a>
          <a href="https://www.linkedin.com" target="_blank" class="fs-5 rounded-2"
            style="width: 30px; height: 30px;"><i class="bi bi-linkedin text-primary-color"></i></a>
        </div>
      </nav>
      <!-- #navbar end -->
    </div>
  </header>