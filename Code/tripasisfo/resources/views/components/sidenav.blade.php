
<!-- Sidenav -->
<nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header  align-items-center">
        <a class="navbar-brand" href="javascript:void(0)">
          <img src="/assets/img/brand/blue.png" class="navbar-brand-img" alt="...">
        </a>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link {{ $title == 'Barang Masuk' ? 'active' : '' }}" href="/barang_masuk">
                <i class="ni ni-cart text-primary"></i>
                <span class="nav-link-text">Barang Masuk</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ $title == 'Barang Keluar' ? 'active' : '' }}" href="/barang_keluar">
                <i class="ni ni-delivery-fast text-orange"></i>
                <span class="nav-link-text">Barang Keluar</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ $title == 'Stok Barang' ? 'active' : '' }}" href="/stok_barang">
                <i class="ni ni-tag text-yellow"></i>
                <span class="nav-link-text">Stok Barang</span>
              </a>
            </li>
            
          </ul>
        </div>
      </div>
    </div>
  </nav>