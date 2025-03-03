<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- <title>@yield('title', 'Título Padrão')</title> --}}
    <link rel="shortcut icon" type="image/png" href="{{ asset('assets/logo.png') }}" />
    <link rel="stylesheet" href="{{ asset('dash/css/styles.min.css') }}" />

    {{-- Icone Lupa --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- CSS da Lupa -->
    <link rel="stylesheet" href="{{ asset('dash/css/lupa.css') }}">
</head>

{{-- <body> --}}
<style>
    .sidebar-nav ul .sidebar-item .sidebar-link,
    .nav-small-cap {
        color: #fff
    }

    .sidebar-nav ul .sidebar-item .sidebar-link:hover {
        background-color: #e4b48d;
        /* color: #59848e */
        color: #fff
    }

    .sidebar-nav ul .sidebar-item.selected>.sidebar-link,
    .sidebar-nav ul .sidebar-item.selected>.sidebar-link.active,
    .sidebar-nav ul .sidebar-item>.sidebar-link.active {
        background-color: #e4b48d;
    }

    /* Estilos Sub Menu */
    .submenu {
        display: none;
        /* Oculta o submenu por padrão */
    }

    .submenu.show {
        display: block;
        /* Mostra o submenu quando a classe "show" está presente */
    }

    .menusub {
        color: #fff;
        justify-content: end
    }

    .btn-outline-primary {
        --bs-btn-color: #59848e;
        --bs-btn-border-color: #59848e;
        --bs-btn-hover-color: #fff;
        --bs-btn-hover-bg: #59848e;
        --bs-btn-hover-border-color: #59848e;
        --bs-btn-focus-shadow-rgb: 93, 135, 255;
        --bs-btn-active-color: #fff;
        --bs-btn-active-bg: #59848e;
        --bs-btn-active-border-color: #59848e;
        --bs-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
        --bs-btn-disabled-color: #59848e;
        --bs-btn-disabled-bg: transparent;
        --bs-btn-disabled-border-color: #59848e;
        --bs-gradient: none
    }
</style>

<!--  Body CLIENTE -->
@if (session('tipoUsuario_type') == 'cliente')
    <title>Cliente - Le Flower</title>
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        <!-- Sidebar Start -->
        <aside class="left-sidebar" style="background-color: #59848e">
            <!-- Sidebar scroll-->
            <div>
                <div class="brand-logo d-flex align-items-center justify-content-between flex-direction"
                    style="flex-direction: column; min-height: 120px;  padding: 10px 24px;">
                    <a href="./index.html" class="text-nowrap logo-img">
                        <img src="{{ asset('dash/images/logos/logo2.png') }}" width="100" alt="" />
                    </a>

                    <h2
                        style="color: #fff; font-size: 1.50rem; text-align: center; text-transform: capitalize; margin-top: 23px">
                        Cliente<br>
                        @if (isset($cliente))
                            {{ $cliente->nomeCliente }}
                        @else
                            Nome não disponível
                        @endif
                    </h2>

                    <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                        <i class="ti ti-x fs-8"></i>
                    </div>
                </div>

                <!-- Sidebar navigation-->
                <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
                    <ul id="sidebarnav">
                        <li class="nav-small-cap">
                            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                            <span class="hide-menu">Agendar</span>
                        </li>

                        <li class="sidebar-item">
                            <a class="sidebar-link" href="{{ route('cliente.agendamento') }}">
                                <span>
                                    <i class="ti ti-alert-circle"></i>
                                </span>
                                <span class="hide-menu">Agendamentos</span>
                            </a>
                        </li>

                        <li class="nav-small-cap">
                            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                            <span class="hide-menu">DASHBOARD</span>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="{{ route('dashboard.clientes') }}">
                                <span>
                                    <i class="ti ti-article"></i>
                                </span>
                                <span class="hide-menu">Perfil</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="{{ route('dashboard.meusagenda') }}">
                                <span>
                                    <i class="ti ti-alert-circle"></i>
                                </span>
                                <span class="hide-menu">Meus Agendamentos</span>
                            </a>
                        </li>

                        <li class="nav-small-cap">
                            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                            <span class="hide-menu">EXTRA</span>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="{{ route('sair') }}" aria-expanded="false">
                                <span>
                                    <i class="ti ti-login"></i>
                                </span>
                                <span class="hide-menu">Sair</span>
                            </a>
                        </li>
                    </ul>

                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!--  Sidebar End -->

        <!--  Main wrapper -->
        <div class="body-wrapper">
            <!--  Header Start -->
            <header class="app-header">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <ul class="navbar-nav">
                        <li class="nav-item d-block d-xl-none">
                            <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse"
                                href="javascript:void(0)">
                                <i class="ti ti-menu-2"></i>
                            </a>
                        </li>

                    </ul>
                    <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
                        <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
                            <li class="nav-item dropdown">
                                <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="{{ asset('assets/img-client/' . $cliente->fotoCliente) }}" alt=""
                                        width="35" height="35" class="rounded-circle">
                                </a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up"
                                    aria-labelledby="drop2">
                                    <div class="message-body">
                                        <a href="{{ route('dashboard.clientes') }}"
                                            class="d-flex align-items-center gap-2 dropdown-item">
                                            <i class="ti ti-user fs-6"></i>
                                            <p class="mb-0 fs-3">Meu perfil</p>
                                        </a>
                                        <a href="javascript:void(0)"
                                            class="d-flex align-items-center gap-2 dropdown-item">
                                            <i class="ti ti-mail fs-6"></i>
                                            <p class="mb-0 fs-3">Agendamento</p>
                                        </a>
                                        <a href="{{ route('sair') }}"
                                            class="btn btn-outline-primary mx-3 mt-2 d-block">Sair</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <!--  Header End -->
            <div class="container-fluid">
                {{-- Conteudo do Dashboard vem aqui!! --}}
                @yield('dash-cliente')

            </div>
        </div>
    </div>


    <!--  Body ADMINISTRADOR -->
@elseif(session('nivelFuncionario') == 'Administrador')
    <title>Administrador - Le Flower</title>
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6"
        data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
        <!-- Sidebar Start -->
        <aside class="left-sidebar" style="background-color: #59848e">
            <!-- Sidebar scroll-->
            <div>
                <div class="brand-logo d-flex align-items-center justify-content-between flex-direction"
                    style="flex-direction: column; min-height: 120px;  padding: 10px 24px;"
                    style="flex-direction: column; min-height: 105px;">
                    <a href="./index.html" class="text-nowrap logo-img">
                        <img src="{{ asset('dash/images/logos/logo2.png') }}" width="100" alt="" />
                    </a>
                    <h2
                        style="color: #fff; font-size: 1.50rem; text-align: center; text-transform: capitalize; margin-top: 23px">
                        Administradora<br>
                        @if (isset($func))
                            {{ $func->nomeFuncionario }}
                        @else
                            Nome não disponível
                        @endif
                    </h2>
                    <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                        <i class="ti ti-x fs-8"></i>
                    </div>
                </div>

                {{-- dash da cris --}}
                <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
                    <ul id="sidebarnav">
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="./index.html" aria-expanded="false">
                                <span>
                                    <i class="ti ti-layout-dashboard"></i>
                                </span>
                                <span class="hide-menu">Agendamentos</span>
                            </a>
                        </li>
                        <li class="nav-small-cap">
                            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                            <span class="hide-menu">DASHBOARD ADMIN</span>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="{{ route('dashboard.admin.func.perfil') }}">
                                <span>
                                    <i class="ti ti-article"></i>
                                </span>
                                <span class="hide-menu">Perfil</span>
                            </a>
                        </li>

                        <li class="sidebar-item">
                            <a class="sidebar-link" href="{{ route('dashboard.admin.func.index') }}"
                                aria-expanded="false">
                                <span>
                                    <i class="ti ti-cards"></i>
                                </span>
                                <span class="hide-menu">Funcionários</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="{{ route('dashboard.admin.func.servico') }}">
                                <span>
                                    <i class="ti ti-typography"></i>
                                </span>
                                <span class="hide-menu">Serviços</span>
                            </a>
                        </li>
                        <li class="nav-small-cap">
                            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                            <span class="hide-menu">Cadastro</span>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="{{ route('dashboard.admin.func.create') }}">
                                <span>
                                    <i class="ti ti-user-plus"></i>
                                </span>
                                <span class="hide-menu">Cadastrar Funcionários</span>
                                {{-- <span class="arrow"></span> --}}
                            </a>
                        </li>

                        <li class="sidebar-item">
                            <a class="sidebar-link" href="{{ route('dashboard.admin.func.criar') }}">
                                <span>
                                    <i class="ti ti-user-plus"></i>
                                </span>
                                <span class="hide-menu">Cadastrar Serviços</span>
                            </a>
                        </li>

                        <li class="nav-small-cap">
                            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                            <span class="hide-menu">EXTRA</span>
                        </li>

                        <li class="sidebar-item">
                            <a class="sidebar-link" href="{{ route('sair') }}" aria-expanded="false">
                                <span>
                                    <i class="ti ti-login"></i>
                                </span>
                                <span class="hide-menu">Sair</span>
                            </a>
                        </li>

                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!--  Sidebar End -->

        <!--  Main wrapper -->
        <div class="body-wrapper">
            <!--  Header Start -->
            <header class="app-header">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <ul class="navbar-nav">
                        <li class="nav-item d-block d-xl-none">
                            <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse"
                                href="javascript:void(0)">
                                <i class="ti ti-menu-2"></i>
                            </a>
                        </li>

                    </ul>
                    <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
                        <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">

                            {{-- dash cris / referente a foto --}}

                            <li class="nav-item dropdown">
                                <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="{{ asset('assets/img-user/' . $func->fotoFuncionario) }}"
                                        alt="" width="35" height="35" class="rounded-circle">
                                </a>




                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up"
                                    aria-labelledby="drop2">
                                    <div class="message-body">
                                        <a href="{{ route('dashboard.admin.func.perfil') }}"
                                            class="d-flex align-items-center gap-2 dropdown-item">
                                            <i class="ti ti-user fs-6"></i>
                                            <p class="mb-0 fs-3">Meu Perfl</p>
                                        </a>
                                        <a href="{{ route('dashboard.admin.func.index') }}"
                                            class="d-flex align-items-center gap-2 dropdown-item">
                                            <i class="ti ti-mail fs-6"></i>
                                            <p class="mb-0 fs-3">Funcionários</p>
                                        </a>
                                        <a href="{{ route('dashboard.admin.func.servico') }}"
                                            class="d-flex align-items-center gap-2 dropdown-item">
                                            <i class="ti ti-list-check fs-6"></i>
                                            <p class="mb-0 fs-3">Serviços</p>
                                        </a>
                                        <a href="{{ route('sair') }}"
                                            class="btn btn-outline-primary mx-3 mt-2 d-block">Sair</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <!--  Header End -->
            <div class="container-fluid">
                {{-- Conteudo do Dashboard vem aqui!! --}}
                {{-- dash da cris --}}
                @yield('dash-func')


            </div>
        </div>
        {{-- </div>  --}}

        {{-- BODT FUNCIONÁRIO --}}
    @elseif(session('nivelFuncionario') == 'Esteticista')
        <title>Funcionário - Le Flower</title>
        <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6"
            data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
            <!-- Sidebar Start -->
            <aside class="left-sidebar" style="background-color: #59848e">
                <!-- Sidebar scroll-->
                <div>

                    {{-- dash cris  --}}
                    <div class="brand-logo d-flex align-items-center justify-content-between flex-direction"
                        style="flex-direction: column; min-height: 120px;  padding: 10px 24px;"
                        style="flex-direction: column; min-height: 105px;">
                        <a href="./index.html" class="text-nowrap logo-img">
                            <img src="{{ asset('dash/images/logos/logo2.png') }}" width="100" alt="" />
                        </a>
                        <h2
                            style="color: #fff; font-size: 1.50rem; text-align: center; text-transform: capitalize; margin-top: 23px">
                            Funcionário<br>
                            @if (isset($func))
                                {{ $func->nomeFuncionario }}
                            @else
                                Nome não disponível
                            @endif
                        </h2>
                        <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                            <i class="ti ti-x fs-8"></i>
                        </div>
                    </div>

                    <!-- Sidebar navigation-->
                    <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
                        <ul id="sidebarnav">
                            <li class="nav-small-cap">
                                <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                                <span class="hide-menu">Principal</span>
                            </li>

                            <li class="sidebar-item">
                                <a class="sidebar-link" href="{{ route('dashboard.funcionarios.meushorarios') }}">
                                    <span>
                                        <i class="ti ti-layout-dashboard"></i>
                                    </span>
                                    <span class="hide-menu">Meus Horários</span>
                                </a>
                            </li>
                            <li class="nav-small-cap">
                                <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                                <span class="hide-menu">DASHBOARD FUNCIONÁRIO</span>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link" href="{{ route('dashboard.funcionarios.fperfil') }}">
                                    <span>
                                        <i class="ti ti-article"></i>
                                    </span>
                                    <span class="hide-menu">Perfil</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link" href="{{ route('dashboard.funcionarios.funcagenda') }}">
                                    <span>
                                        <i class="ti ti-alert-circle"></i>
                                    </span>
                                    <span class="hide-menu">Minha Agenda</span>
                                </a>
                            </li>

                            <li class="nav-small-cap">
                                <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                                <span class="hide-menu">EXTRA</span>
                            </li>

                            <li class="sidebar-item">
                                <a class="sidebar-link" href="{{ route('sair') }}" aria-expanded="false">
                                    <span>
                                        <i class="ti ti-login"></i>
                                    </span>
                                    <span class="hide-menu">Sair</span>
                                </a>
                            </li>

                        </ul>
                    </nav>
                    <!-- End Sidebar navigation -->
                </div>
                <!-- End Sidebar scroll-->
            </aside>
            <!--  Sidebar End -->

            <!--  Main wrapper -->
            <div class="body-wrapper">
                <!--  Header Start -->
                <header class="app-header">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <ul class="navbar-nav">
                            <li class="nav-item d-block d-xl-none">
                                <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse"
                                    href="javascript:void(0)">
                                    <i class="ti ti-menu-2"></i>
                                </a>
                            </li>

                        </ul>
                        <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
                            <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
                                <li class="nav-item dropdown">
                                    <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <img src="{{ asset('assets/img-user/' . $func->fotoFuncionario) }}"
                                            alt="" width="35" height="35" class="rounded-circle">
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up"
                                        aria-labelledby="drop2">
                                        <div class="message-body">
                                            <a href="{{ route('dashboard.funcionarios.fperfil') }}"
                                                class="d-flex align-items-center gap-2 dropdown-item">
                                                <i class="ti ti-user fs-6"></i>
                                                <p class="mb-0 fs-3">Meu Perfl</p>

                                                <a href="{{ route('dashboard.funcionarios.funcagenda') }}"
                                                    class="d-flex align-items-center gap-2 dropdown-item">
                                                    <i class="ti ti-list-check fs-6"></i>
                                                    <p class="mb-0 fs-3">Meu Compromissos</p>
                                                </a>
                                                <a href="{{ route('sair') }}"
                                                    class="btn btn-outline-primary mx-3 mt-2 d-block">Sair</a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </header>
                <!--  Header End -->
                <div class="container-fluid">
                    {{-- Conteudo do Dashboard vem aqui!! --}}
                    @yield('dashboard')

                </div>
            </div>
        </div>
@endif


{{-- SCRIPT SUB MENU --}}
<script>
    function toggleSubMenu(event) {
        event.preventDefault(); // Evita que o link seja seguido

        var submenu = event.target.parentNode.nextElementSibling; // Obtém o submenu
        submenu.classList.toggle("show"); // Adiciona ou remove a classe "show" para mostrar ou ocultar o submenu
    }
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="{{ asset('dash/libs/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('dash/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('dash/js/sidebarmenu.js') }}"></script>
<script src="{{ asset('dash/js/app.min.js') }}"></script>
<script src="{{ asset('dash/libs/apexcharts/dist/apexcharts.min.js') }}"></script>
<script src="{{ asset('dash/libs/simplebar/dist/simplebar.js') }}"></script>
<script src="{{ asset('dash/js/dashboard.js') }}"></script>
{{-- </body> --}}

<!-- JS da Lupa -->
<script src="{{ asset('dash/js/lupa.js') }}"></script>


</html>
