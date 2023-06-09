<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3 sidebar-sticky">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
            <span data-feather="home" class="align-text-bottom"></span>
            Dashboard
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/lukisans') ? 'active' : '' }}" href="/dashboard/lukisans">
            <span data-feather="file-text" class="align-text-bottom"></span>
            Data Lukisan
          </a>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/posts*') ? 'active' : '' }}" href="/dashboard/posts">
            <span data-feather="file-text" class="align-text-bottom"></span>
            Pelukis
          </a>
        </li> -->
        
        
      </ul>

      <h6 class="sidebar-heading d-flex justify-between align-items-center px-3 mt-4 mb-1 text-muted">
        <span>Transaksi</span>
      </h6>
      <ul class="nav flex-column">
        <li class="nav-item">
        <a class="nav-link {{ Request::is('dashboard/transaksis') ? 'active' : '' }}" href="/dashboard/transaksis">
            <span data-feather="file-text" class="align-text-bottom"></span>
            Data Transaksi
          </a>
        </li>
      </ul>
      
    </div>
</nav>