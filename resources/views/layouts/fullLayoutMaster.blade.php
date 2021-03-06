<!DOCTYPE html>

{{-- pageConfigs variable pass to Helper's updatePageConfig function to update page configuration  --}}
@isset($pageConfigs)
  {!! Helper::updatePageConfig($pageConfigs) !!}
@endisset
@php
// confiData variable layoutClasses array in Helper.php file.
  $configData = Helper::applClasses();
@endphp

<html class="loading" lang="es" data-textdirection="ltr">
  <!-- BEGIN: Head-->
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') | DRE AYACUCHO</title>
    <link rel="apple-touch-icon" href="{{asset('images/ico/apple-icon-120.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('images/ico/favicon.ico')}}">

    {{-- Include core + vendor Styles --}}
    @include('panels.styles')
  </head>
  <!-- END: Head-->
<script>
  console.log(localStorage.getItem('darkMode'));
         if (localStorage.getItem('darkMode') === "on") {
         document.body.classList.add("dark-layout");
         document.addEventListener("DOMContentLoaded", function() {
         document.querySelector('#dark-mode').checked = true;
         });
         }
</script>
  <!-- BEGIN: Body-->
  <body style="background-image: url({{asset('images/backgrounds/background.svg')}}); overflow: auto;" class="vertical-layout 1-column navbar-sticky footer-static blank-page light-layout pace-done menu-hide" class="vertical-layout 1-column navbar-sticky {{$configData['bodyCustomClass']}} footer-static blank-page
  @if($configData['theme'] === 'dark'){{'dark-layout'}} @elseif($configData['theme'] === 'semi-dark'){{'semi-dark-layout'}} @else {{'light-layout'}} @endif " 
  data-open="click" data-menu="vertical-menu-modern" data-col="1-column" data-framework="laravel">
    <!-- BEGIN: Content-->
    <div class="app-content content">
      <div class="content-overlay"></div>
      <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
         @yield('content')
        </div>
      </div>
    </div>
    <!-- END: Content-->

    {{-- scripts --}}
    @include('panels.scripts')

  </body>
  <!-- END: Body-->
</html>
