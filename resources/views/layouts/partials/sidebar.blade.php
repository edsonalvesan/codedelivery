<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        @if (! Auth::guest())
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{asset('/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image" />
                </div>
                <div class="pull-left info">
                    <p>{{ Auth::user()->name }}</p>
                    <!-- Status -->
                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
            </div>
        @endif

        <!-- search form (Optional) -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">Menu</li>
            <!-- Optionally, you can add icons to the links -->
            <li class="active"><a href="{{ url('home') }}"><i class='fa fa-link'></i> <span>Home</span></a></li>
            @if(Auth::user()->role == "admin")
            <li><a href="{{ url('/admin/categories') }}"><i class='fa fa-link'></i> <span>Categorias</span></a></li>
            <li><a href="{{ url('/admin/products') }}"><i class='fa fa-link'></i> <span>Produtos</span></a></li>
            <li><a href="{{ url('/admin/clients') }}"><i class='fa fa-link'></i> <span>Clientes</span></a></li>
            <li><a href="{{ url('/admin/orders') }}"><i class='fa fa-link'></i> <span>Ordens</span></a></li>
            <li><a href="{{ url('/admin/cupoms') }}"><i class='fa fa-link'></i> <span>Cupons</span></a></li>
            <li class="treeview">
                <a href="#"><i class='fa fa-link'></i> <span>Administrativo</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('/admin/categories') }}">Categorias</a></li>
                    <li><a href="{{ url('/admin/products') }}">Produtos</a></li>
                    <li><a href="#">Clientes</a></li>
                </ul>
            </li>
                @elseif(Auth::user()->role == "client")
                <li><a href="{{ url('/customer/order') }}"><i class='fa fa-link'></i> <span>Meus Pedidos</span></a></li>
            @endif

        </ul><!-- /.sidebar-menu -->

    </section>
    <!-- /.sidebar -->
</aside>
