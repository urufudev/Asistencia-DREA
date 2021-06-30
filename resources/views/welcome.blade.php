<!DOCTYPE html>
<html lang="es">
   <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
   <head>
      <meta charset="utf-8">
      <title>Sistema de Administración de Personal | DREA</title>
      <meta http-equiv="X-UA-Compatible" content="IE=Edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
      <meta name="theme-color" content="#fff">
      <meta name="format-detection" content="telephone=no">
      <link rel="apple-touch-icon" sizes="180x180" href="img/apple-touch-icon.png">
      <link rel="icon" type="image/png" sizes="32x32" href="{{asset('images/ico/favicon.ico')}}">
      <link rel="icon" type="image/png" sizes="16x16" href="{{asset('images/ico/favicon.ico')}}">
      <link rel="mask-icon" href="img/safari-pinned-tab.svg" color="#5bbad5">
      <meta name="msapplication-TileColor" content="#da532c">
      <meta name="theme-color" content="#ffffff">
      <link rel="preconnect" href="https://fonts.gstatic.com/">
      <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&amp;family=Poppins:wght@600&amp;display=swap" rel="stylesheet">
      <link rel="stylesheet" media="all" href="{{asset('landing/css/app.css')}}">
      <script>var viewportmeta = document.querySelector('meta[name="viewport"]');
         if (viewportmeta) {
           if (screen.width < 375) {
             var newScale = screen.width / 375;
             viewportmeta.content = 'width=375, minimum-scale=' + newScale + ', maximum-scale=1.0, user-scalable=no, initial-scale=' + newScale + '';
           } else {
             viewportmeta.content = 'width=device-width, maximum-scale=1.0, initial-scale=1.0';
           }
         }
      </script>
   </head>
   <body>
      <script>console.log(localStorage.getItem('darkMode'));
         if (localStorage.getItem('darkMode') === "on") {
         document.body.classList.add("dark");
         document.addEventListener("DOMContentLoaded", function() {
         document.querySelector('.js-switch-theme input').checked = true;
         });
         }
      </script>
      <div class="page">
         <header class="header">
            <div class="header__center center">
               <a class="header__logo" href="index-2.html">
                  <img class="header__pic header__pic_dark" src="{{asset('landing/img/logo-dark_2.png')}}" alt="" />
                  <img class="header__pic header__pic_light" src="{{asset('landing/img/logo-light_2.png')}}" alt="" />
               </a>
               <div class="header__wrapper">
                 
                  <nav class="header__nav" >
                  </nav>
                  <div class="header__btns">

                     @auth
                     <a class="header__btn btn btn_orange" href="{{route('dashboard')}}">Ir a Panel</a>
                    
                    @else
                    <a class="header__btn btn btn_orange" href="{{route('login')}}">Iniciar Sesión</a>
                    <a class="header__btn btn btn_transparent" href="{{route('register')}}" >Registrarse</a>
                              
                    @endauth
                    
                  </div>
                  <picture class="header__preview">
                     <source media="(max-width: 767px)" srcset="{{asset('landing/img/header-pic-mobile@2x.png, landing/img/header-pic-mobile@2x.png 2x')}}" />
                     <img srcset="{{asset('landing/img/header-pic@2x.png 2x')}}" src="{{asset('landing/img/header-pic.png')}}" alt="" />
                  </picture>
               </div>
               
            </div>
         </header>
         <div class="main">
            <div class="main__center center">
               <div class="main__wrap">
                  <h1 class="main__title d1"><span data-aos="animation-scale-top" data-aos-duration="600">Sistema de</span>
                     <span data-aos="animation-scale-top" data-aos-duration="600" data-aos-delay="200">Administración </span>
                     <span data-aos="animation-scale-top" data-aos-duration="600" data-aos-delay="400">de Personal.👋</span>
                  </h1>
                  <div class="main__text">Dirección Regional de Educación de Ayacucho.</div>
                  <div class="main__btns">

                    @auth
                    <a href={{route('dashboard')}} class="main__btn btn btn_orange">Ir a Panel</a>
                    
                    @else
                    <a href={{route('login')}} class="main__btn btn btn_orange">Iniciar Sesión</a>
                    <a href={{route('register')}} class="main__btn btn btn_border">
                       <svg class="icon icon-play">
                          <use xlink:href="{{asset('landing/img/sprite.svg#icon-play')}}"></use>
                       </svg>
                       <span>Registrarse</span>
                     </a>
                            
                        
                    @endauth
                     
                  </div>
               </div>
               <div class="main__bg" data-aos>
                  <div class="main__preview">
                     <img srcset="{{asset('landing/img/ayacucho.png')}}" src="{{asset('landing/img/ayacucho.png')}}" alt="">
                  </div>
                  <div class="main__preview">
                     <img srcset="{{asset('landing/img/figures-1.2@2x2.png 2x')}}" src="{{asset('landing/img/figures-1.2.png')}}"  alt="">
                  </div>
                  <div class="main__preview">
                     <img srcset="{{asset('landing/img/figures-1.3@2x.png x2')}}" src="{{asset('landing/img/figures-1.3.png')}}" alt="">
                  </div>
               </div>
               <div class="main__partners">
                  <div class="main__info"></div>
                  <div class="main__list">
                  </div>
               </div>
            </div>
         </div>
         <div class="footer">
            <div class="footer__center center">
               {{-- <div class="footer__body">
                  <div class="footer__wrap">
                     <a class="footer__logo" href="index-2.html">
                     <img class="footer__pic footer__pic_dark" src="{{asset('landing/img/logo-dark.png')}}" alt="" />
                     <img class="footer__pic footer__pic_light" src="{{asset('landing/img/logo-light.png')}}" alt="" />
                     </a>
                  </div>

               </div> --}}
               <div class="footer__bottom">
                  <div class="footer__copyright">© Dirección Regional de Educación de Ayacucho | Oficina de Informática</div>
                  <div class="footer__social">
                     <a class="footer__link" href="https://www.facebook.com/dre.ayacucho.oficial">
                        <svg class="icon icon-facebook">
                           <use xlink:href="{{asset('landing/img/sprite.svg#icon-facebook')}}"></use>
                        </svg>
                     </a>

                  </div>
               </div>
            </div>
            <label class="switch js-switch-theme">
               <input class="switch__input" type="checkbox" />
               <span class="switch__in">
                  <span class="switch__box"></span>
                  <span class="switch__icon switch__icon_dark">
                     <svg class="icon icon-dark">
                        <use xlink:href="{{asset('landing/img/sprite.svg#icon-dark')}}"></use>
                     </svg>
                  </span>
                  <span class="switch__icon switch__icon_light">
                     <svg class="icon icon-light">
                        <use xlink:href="{{asset('landing/img/sprite.svg#icon-light')}}"></use>
                     </svg>
                  </span>
               </span>
            </label>
         </div>
      </div>
      <!-- scripts-->
      <script src="{{asset('landing/js/lib/jquery.min.js')}}"></script>
      <script src="{{asset('landing/js/lib/svg4everybody.min.js')}}"></script>
      <script src="{{asset('landing/js/lib/owl.carousel.min.js')}}"></script>
      <script src="{{asset('landing/js/lib/jquery.magnific-popup.min.js')}}"></script>
      <script src="{{asset('landing/js/lib/aos.js')}}"></script>
      <script src="{{asset('landing/js/app.js')}}"></script>
   </body>
</html>