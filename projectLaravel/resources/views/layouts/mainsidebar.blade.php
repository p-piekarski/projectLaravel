<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/home" class="brand-link">
      <i class="fas fa-piggy-bank fa-flip-horizontal"></i>
      <span class="brand-text font-weight-light">NBKP</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="/mypage" class="d-block">{{ Auth::user()->name}}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

          <!-- Rozwijane menu rynku walut -->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-circle text-warning"></i>
              <p>Rynek walut<i class="right fas fa-angle-left"></i></p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/rates" class="nav-link">
                <i class="nav-icon far fa-circle text-info"></i>
                  <p>Kursy walut NBP</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/kantor" class="nav-link">
                <i class="nav-icon far fa-circle text-info"></i>
                  <p>Kantor</p>
                </a>
              </li>
            </ul>
          </li>
          <!-- /Rozwijane menu rynku walut -->

          <!-- Menu przelewów -->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>Przelew<i class="fas fa-angle-left right"></i>
                <!-- <span class="badge badge-info right">6</span> -->
              </p>
            </a>
          <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/transfer" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Przelew na konto</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/top-nav-sidebar.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Przelew własny</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/boxed.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Przelew na telefon</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/fixed-sidebar.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Zlecenie stałe</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/fixed-topnav.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Seria przelewów</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/fixed-footer.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Przelew podatkowy</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/collapsed-sidebar.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Przelew zagraniczny</p>
                </a>
              </li>
            </ul>
          </li>

          <!-- Menu karty kredytowej -->
          <div class="nav-item has-treeview">
            <a href="/card" class="nav-link">
              <i class="nav-icon far fa-circle"></i>
              <p>Karta kredytowa</i></p>
            </a>
            </div>
            <!-- Szczegóły konta -->
          <div class="nav-item has-treeview">
            <a href="/account" class="nav-link">
              <i class="nav-icon far fa-circle"></i>
              <p>Szczegóły konta</i></p>
            </a>
            </div>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>