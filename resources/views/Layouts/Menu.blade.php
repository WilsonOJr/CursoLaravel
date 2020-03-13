<style>
    /* width */
    ::-webkit-scrollbar {
        width: 5px;
    }
    /* Track */
    ::-webkit-scrollbar-track {
        background: #f1f1f1;
    }
    /* Handle */
    ::-webkit-scrollbar-thumb {
        background: #c1c1c1;
    }
    /* Handle on hover */
    ::-webkit-scrollbar-thumb:hover {
        background: #555;
    }
</style>
<nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-gradient-neutral" id="sidenav-main">
    <div class="container-fluid">
        <!-- Toggler -->
        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
            <span class="fas fa-bars"></span>
        </button>
        <!-- Brand -->
        <a class="navbar-brand p-0" href="http://senaicurso.com.br">
            <img src="{{ asset('/img/brand/logo_perfectpay_h30.png') }}" alt='PerfectPay'>
        </a>
        <!-- Collapse -->
        <div class="navbar-collapse collapse" id="sidenav-collapse-main" style="">
            <!-- Collapse header -->
            <div class="navbar-collapse-header d-md-none">
                <div class="row">
                    <div class="col-6">
                    
                    </div>
                    <div class="col-6 collapse-close">
                        <button type="button" class="navbar-toggler collapsed" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Navigation -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/CursoLaravel/public">
                        <i class="nav-icon fa fa-th-large text-gray"></i> Painel
                    </a>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('clients.index')}}">
                        <i class="nav-icon fa fa-user text-green"></i> Clientes
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
{{--<div class="sidebar">--}}
{{--<nav class="sidebar-nav">--}}
{{--</nav>--}}
{{--<button class="sidebar-minimizer brand-minimizer" type="button"></button>--}}
{{--</div>--}}
