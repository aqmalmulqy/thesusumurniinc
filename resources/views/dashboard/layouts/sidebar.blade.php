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
          <a class="nav-link {{ Request::is('dashboard/orders') ? 'active' : '' }}" href="/dashboard/orders">
            <span data-feather="shopping-cart" class="align-text-bottom"></span>
            Orders
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/product*') ? 'active' : '' }}" href="/dashboard/product">
            <span data-feather="file-text" class="align-text-bottom"></span>
            Products
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/laporan*') ? 'active' : '' }}" href="/dashboard/laporan">
            <span data-feather="file-text" class="align-text-bottom"></span>
            Laporan
          </a>
        </li>
      </ul>


    </div>
  </nav>