{{-- vertical-menu --}}
@if ($configData['mainLayoutType'] == 'vertical-menu')
    <div class="main-menu menu-fixed @if ($configData['theme'] === 'light') {{ 'menu-light' }} @else {{ 'menu-dark' }} @endif menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">

                <li class="nav-item mr-auto">
                    <a class="navbar-brand" href="{{ route('dashboard') }}">
                        <div class="brand-logo">
                            <img src="{{ asset('images/logo/logo.png') }}" class="logo" alt="">
                        </div>
                        <h2 class="brand-text mb-0">
                            @if (!empty($configData['templateTitle']) && isset($configData['templateTitle']))
                                {{ $configData['templateTitle'] }}
                            @else
                                DREA
                            @endif
                        </h2>
                    </a>
                </li>
                <li class="nav-item nav-toggle">
                    <a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse">
                        <i class="bx bx-x d-block d-xl-none font-medium-4 primary"></i>
                        <i class="toggle-icon bx bx-disc font-medium-4 d-none d-xl-block primary"
                            data-ticon="bx-disc"></i>
                    </a>
                </li>
            </ul>
        </div>


        {{-- card sidebar --}}
        <div class="shadow-bottom"></div>
        <div class="main-menu-content">

            {{-- card sidebar --}}
            <header class="chat-user-profile-header text-center">
                <div class="my-2">
                    <div class="avatar avatar-content bg-rgba-primary p-50">
                        <img class="img-fluid" src="{{ Auth::user()->profile->photo ?? 'prueba' }}" width="80"
                            height="80" alt="user_avatar">
                        <span class="avatar-status-online"></span>
                    </div>
                    <div class="navbar-header">
                        <ul class="nav navbar-nav flex-row">

                            <li class="nav-item">
                                <a class="text-center">

                                    <h5 class="brand-text text-capitalize">
                                        {{ Auth::user()->full_namea ?? 'Invitado' }}
                                    </h5>
                                    <span
                                        class="brand-text">{{ Str::limit(Auth::user()->profile->position->name ?? 'Cargo', 25) }}</span>
                                </a>
                            </li>
                        </ul>

                    </div>

                </div>
            </header>

            <div class="divider divider-light">
                <div class="divider-text">
                    <i class="bx bxs-dashboard"></i>
                </div>
            </div>
            {{-- card sidebar --}}

            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation"
                data-icon-style="lines">

                <li class="navigation-header"><span>Inicio</span></li>
                <li class="nav-item {{ request()->is('dashboard' . '*') ? 'active' : '' }}">
                    <a href="{{ route('dashboard') }}">
                        <i class="menu-livicon" data-icon="cpu"></i>
                        <span class="menu-title">Inicio</span>
                    </a>
                </li>
                <li class="navigation-header"><span>Parametros</span></li>
                @can('viewAny', 'Models\Office')
                    <li class="nav-item  ">
                        <a href="#">
                            <i class="menu-livicon" data-icon="building"></i>
                            <span class="menu-title">Oficinas</span>
                        </a>
                        <ul class="menu-content">
                            @can('create', 'Models\Office')
                                <li {{ request()->is('offices/create') ? 'class=active' : '' }}>
                                    <a href="{{ route('offices.create') }}">
                                        <i class="bx bx-right-arrow-alt"></i>
                                        <span class="menu-item">Crear Oficina</span>
                                    </a>
                                </li>
                            @endcan
                            @can('viewAny', 'Models\Office')
                                <li {{ request()->is('offices') ? 'class=active' : '' }}>
                                    <a href="{{ route('offices.index') }}">
                                        <i class="bx bx-right-arrow-alt"></i>
                                        <span class="menu-item">Lista de Oficinas</span>
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </li>
                @endcan
                @can('viewAny', 'Models\User')
                    <li class="nav-item  ">
                        <a href="#">
                            <i class="menu-livicon" data-icon="users"></i>
                            <span class="menu-title">Usuarios</span>
                        </a>
                        <ul class="menu-content">
                            @can('create', 'Models\User')
                                <li {{ request()->is('users/create') ? 'class=active' : '' }}>
                                    <a href="{{ route('users.create') }}">
                                        <i class="bx bx-right-arrow-alt"></i>
                                        <span class="menu-item">Crear Usuario</span>
                                    </a>
                                </li>
                            @endcan
                            @can('viewAny', 'Models\User')
                                <li {{ request()->is('users') ? 'class=active' : '' }}>
                                    <a href="{{ route('users.index') }}">
                                        <i class="bx bx-right-arrow-alt"></i>
                                        <span class="menu-item">Lista de Usuarios</span>
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </li>
                @endcan
                @can('viewAny', 'Models\Laboral')
                    <li class="nav-item  ">
                        <a href="#">
                            <i class="menu-livicon" data-icon="briefcase"></i>
                            <span class="menu-title">Régimen Laboral</span>
                        </a>
                        <ul class="menu-content">
                            @can('create', 'Models\Laboral')
                                <li {{ request()->is('laborals/create') ? 'class=active' : '' }}>
                                    <a href="{{ route('laborals.create') }}">
                                        <i class="bx bx-right-arrow-alt"></i>
                                        <span class="menu-item">Crear R. Laboral</span>
                                    </a>
                                </li>
                            @endcan
                            @can('viewAny', 'Models\Laboral')
                                <li {{ request()->is('laborals') ? 'class=active' : '' }}>
                                    <a href="{{ route('laborals.index') }}">
                                        <i class="bx bx-right-arrow-alt"></i>
                                        <span class="menu-item">Lista de R. Laboral</span>
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </li>
                @endcan

                @can('viewAny', 'Models\Pension')
                    <li class="nav-item  ">
                        <a href="#">
                            <i class="menu-livicon" data-icon="piggybank"></i>
                            <span class="menu-title">Régimen Pensionario</span>
                        </a>
                        <ul class="menu-content">
                            @can('create', 'Models\Pension')
                                <li {{ request()->is('pensions/create') ? 'class=active' : '' }}>
                                    <a href="{{ route('pensions.create') }}">
                                        <i class="bx bx-right-arrow-alt"></i>
                                        <span class="menu-item">Crear R. Pensionario</span>
                                    </a>
                                </li>
                            @endcan
                            @can('viewAny', 'Models\Pension')
                                <li {{ request()->is('pensions') ? 'class=active' : '' }}>
                                    <a href="{{ route('pensions.index') }}">
                                        <i class="bx bx-right-arrow-alt"></i>
                                        <span class="menu-item">Lista de R. Pensionario</span>
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </li>
                @endcan

                @can('viewAny', 'Models\Condition')
                    <li class="nav-item  ">
                        <a href="#">
                            <i class="menu-livicon" data-icon="settings"></i>
                            <span class="menu-title">Condicion Laboral</span>
                        </a>
                        <ul class="menu-content">
                            @can('create', 'Models\Condition')
                                <li {{ request()->is('conditions/create') ? 'class=active' : '' }}>
                                    <a href="{{ route('conditions.create') }}">
                                        <i class="bx bx-right-arrow-alt"></i>
                                        <span class="menu-item">Crear C. Laboral</span>
                                    </a>
                                </li>
                            @endcan
                            @can('viewAny', 'Models\Condition')
                                <li {{ request()->is('conditions') ? 'class=active' : '' }}>
                                    <a href="{{ route('conditions.index') }}">
                                        <i class="bx bx-right-arrow-alt"></i>
                                        <span class="menu-item">Lista de C. Laboral</span>
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </li>
                @endcan

                @can('viewAny', 'Models\Position')
                    <li class="nav-item  ">
                        <a href="#">
                            <i class="menu-livicon" data-icon="grid"></i>
                            <span class="menu-title">Cargos</span>
                        </a>
                        <ul class="menu-content">
                            @can('create', 'Models\Position')
                                <li {{ request()->is('positions/create') ? 'class=active' : '' }}>
                                    <a href="{{ route('positions.create') }}">
                                        <i class="bx bx-right-arrow-alt"></i>
                                        <span class="menu-item">Crear Cargo</span>
                                    </a>
                                </li>
                            @endcan
                            @can('viewAny', 'Models\Position')
                                <li {{ request()->is('positions') ? 'class=active' : '' }}>
                                    <a href="{{ route('positions.index') }}">
                                        <i class="bx bx-right-arrow-alt"></i>
                                        <span class="menu-item">Lista de Cargos</span>
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </li>
                @endcan

                @can('viewAny', 'Models\Role')
                    <li class="nav-item  ">
                        <a href="#">
                            <i class="menu-livicon" data-icon="diagram"></i>
                            <span class="menu-title">Roles</span>
                        </a>
                        <ul class="menu-content">
                            @can('create', 'Models\Role')
                                <li {{ request()->is('roles/create') ? 'class=active' : '' }}>
                                    <a href="{{ route('roles.create') }}">
                                        <i class="bx bx-right-arrow-alt"></i>
                                        <span class="menu-item">Crear Rol</span>
                                    </a>
                                </li>
                            @endcan
                            @can('viewAny', 'Models\Role')
                                <li {{ request()->is('roles') ? 'class=active' : '' }}>
                                    <a href="{{ route('roles.index') }}">
                                        <i class="bx bx-right-arrow-alt"></i>
                                        <span class="menu-item">Lista de Roles</span>
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </li>
                @endcan

                @can('viewAny', 'Models\Event')
                    <li class="nav-item  ">
                        <a href="#">
                            <i class="menu-livicon" data-icon="calendar"></i>
                            <span class="menu-title">Evento de Asistencia</span>
                        </a>
                        <ul class="menu-content">
                            @can('create', 'Models\Event')
                                <li {{ request()->is('events/create') ? 'class=active' : '' }}>
                                    <a href="{{ route('events.create') }}">
                                        <i class="bx bx-right-arrow-alt"></i>
                                        <span class="menu-item">Crear Evento</span>
                                    </a>
                                </li>
                            @endcan
                            @can('viewAny', 'Models\Event')
                                <li {{ request()->is('events') ? 'class=active' : '' }}>
                                    <a href="{{ route('events.index') }}">
                                        <i class="bx bx-right-arrow-alt"></i>
                                        <span class="menu-item">Lista de Eventos</span>
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </li>
                @endcan

                @can('viewAny', 'Models\PresencialWork')
                    <li class="nav-item  ">
                        <a href="#">
                            <i class="menu-livicon" data-icon="calendar"></i>
                            <span class="menu-title">Trabajo Presencial</span>
                        </a>
                        <ul class="menu-content">

                            @can('viewAny', 'Models\PresencialWork')
                                <li {{ request()->is('presencials') ? 'class=active' : '' }}>
                                    <a href="{{ route('presencials.index') }}">
                                        <i class="bx bx-right-arrow-alt"></i>
                                        <span class="menu-item">Lista de T. Presencial</span>
                                    </a>
                                </li>
                            @endcan

                            @can('attendance', 'Models\PresencialWork')
                                <li {{ request()->is('presencials.attendance-list') ? 'class=active' : '' }}>
                                    <a href="{{ route('presencials.attendance-list') }}">
                                        <i class="bx bx-right-arrow-alt"></i>
                                        <span class="menu-item">Registro de Asistencia</span>
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </li>
                @endcan

                @can('viewAny', 'Models\Infected')
                    <li class="nav-item  ">
                        <a href="#">
                            <i class="menu-livicon" data-icon="radiation"></i>
                            <span class="menu-title">Personal Infectado</span>
                        </a>
                        <ul class="menu-content">

                            @can('viewAny', 'Models\Infected')
                                <li {{ request()->is('infecteds') ? 'class=active' : '' }}>
                                    <a href="{{ route('infecteds.index') }}">
                                        <i class="bx bx-right-arrow-alt"></i>
                                        <span class="menu-item">Lista de Infectados</span>
                                    </a>
                                </li>
                            @endcan

                            @can('create', 'Models\Infected')
                                <li {{ request()->is('infecteds.create') ? 'class=active' : '' }}>
                                    <a href="{{ route('infecteds.create') }}">
                                        <i class="bx bx-right-arrow-alt"></i>
                                        <span class="menu-item">Registro de Infectados</span>
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </li>
                @endcan

                @can('viewAny', 'Models\User')
                    <li class="nav-item {{ request()->is('reports') ? 'active' : '' }} ">
                        <a href="{{ route('reports.index') }}">
                            <i class="menu-livicon" data-icon="cloud-download"></i>
                            <span class="menu-title">Reportes</span>
                        </a>

                    </li>
                @endcan

            </ul>
        </div>
    </div>
@endif
{{-- horizontal-menu --}}
{{-- @if ($configData['mainLayoutType'] == 'horizontal-menu')
<div class="header-navbar navbar-expand-sm navbar navbar-horizontal navbar-light navbar-without-dd-arrow
@if ($configData['navbarType'] === 'navbar-static') {{'navbar-sticky'}} @endif" role="navigation" data-menu="menu-wrapper">
  <div class="navbar-header d-xl-none d-block">
      <ul class="nav navbar-nav flex-row">
      <li class="nav-item mr-auto">
          <a class="navbar-brand" href="{{asset('/')}}">
          <div class="brand-logo">
            <img src="{{asset('images/logo/logo.png')}}" class="logo" alt="">
          </div>
          <h2 class="brand-text mb-0">
            @if (!empty($configData['templateTitle']) && isset($configData['templateTitle']))
            {{$configData['templateTitle']}}
            @else
            Frest
            @endif
          </h2>
          </a>
      </li>
      <li class="nav-item nav-toggle">
          <a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse">
          <i class="bx bx-x d-block d-xl-none font-medium-4 primary toggle-icon"></i>
          </a>
      </li>
      </ul>
  </div>
  <div class="shadow-bottom"></div>
  <!-- Horizontal menu content-->
  <div class="navbar-container main-menu-content" data-menu="menu-container">
      <ul class="nav navbar-nav" id="main-menu-navigation" data-menu="menu-navigation" data-icon-style="filled">
      @if (!empty($menuData[1]) && isset($menuData[1]))
          @foreach ($menuData[1]->menu as $menu)
          <li class="@if (isset($menu->submenu)){{'dropdown'}} @endif nav-item" data-menu="dropdown">
          <a class="@if (isset($menu->submenu)){{'dropdown-toggle'}} @endif nav-link" href="{{asset($menu->url)}}"
            @if (isset($menu->submenu)){{'data-toggle=dropdown'}} @endif @if (isset($menu->newTab)){{"target=_blank"}}@endif>
              <i class="menu-livicon" data-icon="{{$menu->icon}}"></i>
              <span>{{ $menu->name}}</span>
          </a>
          @if (isset($menu->submenu))
              @include('panels.sidebar-submenu',['menu'=>$menu->submenu])
          @endif
          </li>
          @endforeach
      @endif
      </ul>
  </div>
  <!-- /horizontal menu content-->
  </div>
@endif --}}

{{-- vertical-box-menu --}}
{{-- @if ($configData['mainLayoutType'] == 'vertical-menu-boxicons')
<div class="main-menu menu-fixed @if ($configData['theme'] === 'light') {{"menu-light"}} @else {{'menu-dark'}} @endif menu-accordion menu-shadow" data-scroll-to-active="true">
  <div class="navbar-header">
    <ul class="nav navbar-nav flex-row">
    <li class="nav-item mr-auto">
      <a class="navbar-brand" href="{{asset('/')}}">
        <div class="brand-logo">
          <img src="{{asset('images/logo/logo.png')}}" class="logo" alt="">
        </div>
        <h2 class="brand-text mb-0">
          @if (!empty($configData['templateTitle']) && isset($configData['templateTitle']))
          {{$configData['templateTitle']}}
          @else
          Frest
          @endif
        </h2>
      </a>
    </li>
    <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="bx bx-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i class="toggle-icon bx bx-disc font-medium-4 d-none d-xl-block collapse-toggle-icon primary" data-ticon="bx-disc"></i></a></li>
    </ul>
  </div>
  <div class="shadow-bottom"></div>
  <div class="main-menu-content">
    <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation" data-icon-style="">
      @if (!empty($menuData[2]) && isset($menuData[2]))
      @foreach ($menuData[2]->menu as $menu)
          @if (isset($menu->navheader))
              <li class="navigation-header"><span>{{$menu->navheader}}</span></li>
          @else
          <li class="nav-item {{(request()->is($menu->url.'*')) ? 'active' : '' }}">
            <a href="@if (isset($menu->url)){{asset($menu->url)}} @endif" @if (isset($menu->newTab)){{"target=_blank"}}@endif>
            @if (isset($menu->icon))
              <i class="{{$menu->icon}}"></i>
            @endif
            @if (isset($menu->name))
              <span class="menu-title">{{ $menu->name}}</span>
            @endif
            @if (isset($menu->tag))
              <span class="{{$menu->tagcustom}}">{{$menu->tag}}</span>
            @endif
           </a>
          @if (isset($menu->submenu))
            @include('panels.sidebar-submenu',['menu' => $menu->submenu])
          @endif
          </li>
          @endif
      @endforeach
      @endif
  </ul>
  </div>
</div>
@endif --}}
