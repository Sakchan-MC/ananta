<aside class="main-sidebar green elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{ asset('img/ananta.png') }}" alt="Ananta" class="brand-img img-circle elevation-1" height="50px"
            width="50px">
        <span class="brand-text text-white">&nbspAnanta</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="info ">
                <a class="d-block text-white">
                    ชื่อผู้ใช้ : {{Auth::user()->name}}
                </a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
       with font-awesome or any other icon font library -->
                <li class="nav-item menu-open ">
                    <a href="{{route('admin')}}"
                        class="nav-link {{ (request()->is('admin/dashboard')) ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p class="text-white ">
                            หน้าแรก
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('herb')}}" class="nav-link {{ (request()->is('admin/herb')) ? 'active' : '' }}">
                        <i class="nav-icon far fa-image"></i>
                        <p class="text-white">
                            จัดการสมุนไพร
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('category')}}"
                        class="nav-link {{ (request()->is('admin/category')) ? 'active' : '' }}">
                        <i class="nav-icon far fa-image"></i>
                        <p class="text-white">
                            จัดการประเภท
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="pages/kanban.html" class="nav-link">
                        <i class="nav-icon fas fa-columns"></i>
                        <p class="text-white">
                            กล่องข้อความ
                        </p>
                    </a>
                </li>


                {{-- logout --}}
                <li class="nav-item">

                    <a class="nav-link text-white" href="{{ route('logout') }}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                        <i class="nav-icon fas fa-sign-out-alt gray"></i>
                        <p class="text-white">
                            ออกจากระบบ
                        </p>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
            </ul>
        </nav>
    </div>
</aside>
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
    </ul>
    <div class="header-center">
        <a class="header-text">{{ (request()->is('admin/herb')) ? 'จัดการสมุนไพร' : '' }}</a>
    </div>
</nav>