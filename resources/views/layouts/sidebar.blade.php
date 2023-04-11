<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{asset('AdminLTE')}}/pages/examples/login.html" class="brand-link" style="background-color: rgba(0, 217, 255, 0.541)">
      <img src="{{asset('AdminLTE')}}/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text ">
          <b>SI</b>MANIS</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('AdminLTE')}}/dist/img/AdminLTELogo.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Girindra Fajar</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="/dashboard" class="nav-link">
              
              <i class=""><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-grid-fill" viewBox="0 0 16 16">
                <path d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5v-3zm8 0A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5v-3zm-8 8A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5v-3zm8 0A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5v-3z"/>
              </svg></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-header">DATA MASTER</li>
          <li class="nav-item">
            <a href="/pegawai" class="nav-link">
              <i class="fas fa-fw fa-user"></i>
              <p>Petugas</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/anggota" class="nav-link">
              <i class="fas fa-fw fa-user"></i>
              <p>Anggota</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/buku" class="nav-link">
              <i class="fas fa-fw  fa-book"></i>
              <p>Buku</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-plus-square"></i>
              <p>
                Data Entri
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-circle"></i>
                  <p>
                    Data Buku
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="/buku" class="nav-link">
                      <i class="far fa-circle nav-icon text-danger"></i>
                      <p>Data Buku</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="/buku/create" class="nav-link">
                      <i class="far fa-circle nav-icon text-warning"></i>
                      <p>Entri Buku</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-circle"></i>
                  <p>
                    Data Peminjaman
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="/peminjaman" class="nav-link">
                      <i class="far fa-circle nav-icon text-danger"></i>
                      <p>Master Peminjaman</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="/peminjaman/create" class="nav-link">
                      <i class="far fa-circle nav-icon text-warning"></i>
                      <p>Entri Peminjaman</p>
                    </a>
                  </li>
                </ul>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="nav-icon fas fa-circle"></i>
                      <p>
                        Data Pengembalian
                        <i class="fas fa-angle-left right"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="/pengembalian" class="nav-link">
                          <i class="far fa-circle nav-icon text-danger"></i>
                          <p>Master Pengembalian</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="/pengembalian/create" class="nav-link">
                          <i class="far fa-circle nav-icon text-warning"></i>
                          <p>Entri Pengembalian</p>
                        </a>
                      </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="nav-icon fas fa-circle"></i>
                      <p>
                        Denda
                        <i class="fas fa-angle-left right"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="pages/examples/login.html" class="nav-link">
                          <i class="far fa-circle nav-icon text-danger"></i>
                          <p>Data Pembayaran Denda</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="pages/examples/register.html" class="nav-link">
                          <i class="far fa-circle nav-icon text-warning"></i>
                          <p>Data Keterlambatan</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="pages/examples/register.html" class="nav-link">
                          <i class="far fa-circle nav-icon text-primary"></i>
                          <p>Entri Denda</p>
                        </a>
                      </li>
                    </ul>
                </li>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>