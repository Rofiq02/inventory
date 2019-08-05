<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

<!-- sidebar: style can be found in sidebar.less -->
<section class="sidebar">

  <!-- Sidebar user panel (optional) -->
  <div class="user-panel">
    <div class="pull-left image">
      <img src="{{ Auth::user()->avatar =="" ? asset('img/avatar5.png') : asset('img/'.Auth::user()->avatar) }}" class="img-circle" alt="User Image">
    </div>
    <div class="pull-left info">
      <p>{{ Auth::user() !="" ? Auth::user()->name : "" }}</p>
      <!-- Status -->
      <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
    </div>
  </div>

  <!-- search form (Optional) -->
  <form action="#" method="get" class="sidebar-form">
    <div class="input-group">
      <input type="text" name="q" class="form-control" placeholder="Search...">
      <span class="input-group-btn">
          <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
          </button>
        </span>
    </div>
  </form>
  <!-- /.search form -->

  <!-- Sidebar Menu -->
  <ul class="sidebar-menu" data-widget="tree">
    <li class="header">HEADER</li>
    <!-- Optionally, you can add icons to the links -->
    <li class="@yield('ac-dash')"><a href="{{ url('#') }}"><i class="fa fa-dashboard "></i><span>Dashboard</span></a></li>
    <li class="treeview @yield('ac-Master')">
      <a href="{{ url('pelanggan') }}"><i class="fa fa-book"></i> <span>Master</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="{{ url('/user') }}">User</a></li>
        <li><a href="{{ url('/pelanggan') }}">Pelanggan</a></li>
        <li><a href="{{ url('/supplier') }}">Supllier</a></li>
        <li><a href="{{ url('/barang') }}">Barang</a></li>
      </ul>
    </li>   
    <li class="treeview @yield('ac-laporan')">
      <a href="{{ url('#') }}"><i class="fa fa-users"></i> <span>Laporan</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="{{ url('#') }}">Mutasi Stock</a></li>
      </ul>
    </li>
    <li class="treeview">
      <a href="{{ url('#') }}"><i class="fa fa-user"></i> <span>Transaksi</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="{{ url('#') }}">Pembelian</a></li>
        <li><a href="{{ url('#') }}">Penjualan</a></li>
      </ul>
    </li>    
    </ul>
  <!-- /.sidebar-menu -->
</section>
<!-- /.sidebar -->
</aside>
