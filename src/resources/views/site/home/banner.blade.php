    <!-- Hero Section -->
  
          <section class="banner"  wow animate__animated animate__fadeInDown>
        @foreach ($listaBanner as $lista)
            <img src="{{ asset("rosa/image/banner/$lista->imagem_banner")}}" alt="{{ $lista->nome_banner}}">
        @endforeach
     </section>

      

