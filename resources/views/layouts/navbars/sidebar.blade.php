<nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
    <div class="container-fluid">
        <!-- Toggler -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Brand -->
        <a class="navbar-brand pt-0" href="">
            <img src="{{ asset('argon') }}/img/brand/blue.png" class="navbar-brand-img" alt="...">
        </a>
        <!-- User -->
        <ul class="nav align-items-center d-md-none">
            <li class="nav-item dropdown">
                <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="media align-items-center">
                        <span class="avatar avatar-sm rounded-circle">
                        <img alt="Image placeholder" src="{{ asset('argon') }}/img/brand/avatar.jpeg">
                        </span>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
                    <div class=" dropdown-header noti-title">
                        <h6 class="text-overflow m-0">{{ __('Bem vindo!') }}</h6>
                    </div>
                    
                    <div class="dropdown-divider"></div>
                    <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                        <i class="ni ni-user-run"></i>
                        <span>{{ __('Logout') }}</span>
                    </a>
                </div>
            </li>
        </ul>
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
            <!-- Collapse header -->
            <div class="navbar-collapse-header d-md-none">
                <div class="row">
                    <div class="col-6 collapse-brand">
                        <a href="{{ route('dashboard') }}">
                            <img src="{{ asset('argon') }}/img/brand/blue.png">
                        </a>
                    </div>
                    <div class="col-6 collapse-close">
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                </div>
            </div>
           
            <!-- Navigation -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link show-modal" href="#">
                        <i class="ni ni-tv-2 text-primary"></i> {{ __('Dashboard') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link show-modal" href="#">
                        <i class="ni ni-support-16 text-primary"></i> {{ __('BI de CRM') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link show-modal" href="#">
                        <i class="ni ni-building text-primary"></i> {{ __('Construtor de Meta') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link show-modal" href="#">
                        <i class="ni ni-chart-pie-35 text-primary"></i> {{ __('BI de Vendas') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link show-modal" href="#">
                        <i class="ni ni-cart text-primary"></i> {{ __('Vis??o do Varejo') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link show-modal" href="#">
                        <i class="ni ni-cloud-upload-96 text-primary"></i> {{ __('Extrator de Dados') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link show-modal" href="#">
                        <i class="ni ni-mobile-button text-primary"></i> {{ __('Execu????o de PDV') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link show-modal" href="#">
                        <i class="ni ni-trophy text-primary"></i> {{ __('Campanhas de Incentivo') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link show-modal" href="#">
                        <i class="ni ni-ruler-pencil text-primary"></i> {{ __('Calculador de Pr??mio') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link show-modal" href="#">
                        <i class="ni ni-collection text-primary"></i> {{ __('Simulador de Pr??mio') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link show-modal" href="#">
                        <i class="ni ni-chart-bar-32 text-primary"></i> {{ __('BI de Incentivo') }}
                    </a>
                </li>
                

              
            
            </ul>
            
        </div>
    </div>
</nav>
