<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        {{-- <li class="nav-item d-none d-sm-inline-block">
            <a href="index3.html" class="nav-link">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="#" class="nav-link">Contatos</a>
        </li> --}}
    </ul>

    <!-- SEARCH FORM -->
    {{-- <form class="form-inline ml-3">
        <div class="input-group input-group-sm">
            <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </div>
    </form> --}}

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button"><i
                    class="fas fa-th-large"></i></a>
        </li>
    </ul>
</nav>
<!-- /.navbar -->

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('panel.admin.index') }}" class="brand-link">
        <img src="{{ asset('icon96.png') }}" alt="" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Minas Mourão</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('assets/admin/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2"
                    alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{auth()->user()->name}}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item has-treeview">
                    <a href="{{ route('panel.admin.index') }}"
                        class="nav-link {{ $activePage == 'panel.admin.index' ? ' active' : '' }}">
                        <i class="nav-icon fa fa-home"></i>
                        <p>
                            Home
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('admin.slider.index') }}"
                        class="nav-link {{ $activePage == 'admin.slider.index' ? ' active' : '' }}">
                        <i class="nav-icon fas fa-list"></i>
                        <p>
                            Slider
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    {{-- <a href="{{ route('admin.eventos.index') }}"
                        class="nav-link {{ $activePage == 'admin.eventos.index' ? ' active' : '' }}">
                        <i class="nav-icon fas fa-paste"></i>
                        <p>
                            Eventos
                        </p>
                    </a> --}}
                </li>

                <li class="nav-item">
                    <a href="{{ route('admin.noticias.index') }}"
                        class="nav-link {{ $activePage == 'admin.noticias.index' ? ' active' : '' }}">
                        <i class="nav-icon fas fa-newspaper"></i>
                        <p>
                            Notícias
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    {{-- <a href="{{ route('admin.projetos.index') }}"
                        class="nav-link {{ $activePage == 'admin.projetos.index' ? ' active' : '' }}">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            Projetos
                        </p>
                    </a> --}}
                </li>

                {{-- <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Colaboradores
                        </p>
                    </a>
                </li> --}}
                {{-- <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                            Marketing
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.newsletters.index') }}"
                class="nav-link{{ $activePage == 'admin.newsletters.index' ? ' active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Newsletter</p>
                </a>
                </li>
            </ul>
            </li> --}}
            {{-- <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-tools"></i>
                    <p>
                        Configurações
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('admin.perfil.index') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Perfil</p>
                        </a>
                    </li>
                </ul>
            </li> --}}
            <li class="nav-item">
                <a href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    <i class="nav-icon fa fa-power-off"></i>
                    <p>
                        Sair
                    </p>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>