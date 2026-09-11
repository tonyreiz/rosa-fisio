$(document).ready(function () {
  // Initialize AOS (Animate On Scroll)
  AOS.init({
    duration: 800,
    once: true
  });
});


// ON SCROLL WINDOW

var topoFixo = document.getElementById('topoFixo');

if (topoFixo) {
  var estadoDesejado = null;

  var aplicarFixado = function () {
    topoFixo.classList.add('menu-fixo');
    topoFixo.classList.remove('menu-fixo-sair');
    document.body.classList.add('menu-fixo-ativo');
  };

  var aplicarDesfixado = function () {
    if (!topoFixo.classList.contains('menu-fixo')) {
      document.body.classList.remove('menu-fixo-ativo');
      return;
    }
    topoFixo.classList.add('menu-fixo-sair');
  };

  topoFixo.addEventListener('animationend', function (event) {
    if (event.animationName === 'menuFixoOut' && estadoDesejado === false) {
      topoFixo.classList.remove('menu-fixo',
        'menu-fixo-sair');
      document.body.classList.remove('menu-fixo-ativo');
    }
  });

  var atualizarEstado = function() {
    var top = window.scrollY || window.pageYOffset;
    var deveFixar = top >= 750;

    if(estadoDesejado === deveFixar){
      return;
    }

    estadoDesejado = deveFixar;

    if(deveFixar) {
      aplicarFixado();  
    } else {
      aplicarDesfixado();
    }
  };

  atualizarEstado();
  window.addEventListener('scroll', atualizarEstado,{
    passive: true
  });
}


$('.banner').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 2000,
});

$('.cardEvento').slick({
  slidesToShow: 4,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 2200,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});