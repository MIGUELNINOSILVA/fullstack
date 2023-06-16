<aside class="main-sidebar sidebar-dark-lightblue elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link navbar-lightblue">
      <img src="views/assets/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Alquilartemis</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <!-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="views/assets/img/angie.jpeg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Angie Suarez</a>
        </div>
      </div> -->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
            <li class="nav-item">
                <a href="../alquilartemis/views/pages/home/home.php" class="nav-link <?php if ($routesArray[6]==""):?> active <?php endif ?>">
                    <i class="nav-icon far fa-image"></i>
                    <p>
                      Inicio
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="../alquilartemis/views/pages/Empleados/empleados.php" class="nav-link <?php if ($routesArray[6]=="Empleados"):?> active <?php endif ?>">
                    <i class="nav-icon far fa-user"></i>
                    <p>
                      Empleados
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="../alquilartemis/views/pages/Clientes/clientes.php" class="nav-link <?php if ($routesArray[6]=="Clientes"):?> active <?php endif ?>">
                    <i class="nav-icon far fa-user"></i>
                    <p>
                      Clientes
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="../alquilartemis/views/pages/Inventario/inventario.php" class="nav-link <?php if ($routesArray[6]=="Inventario"):?> active <?php endif ?>">
                    <i class="nav-icon far fa-image"></i>
                    <p>
                      Inventario
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="../alquilartemis/views/pages/Contructoras/contructoras.php" class="nav-link <?php if ($routesArray[6]=="Contructoras"):?> active <?php endif ?>">
                    <i class="nav-icon far fa-image"></i>
                    <p>
                      Contructoras
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="../alquilartemis/views/pages/Cotizacion/cotizacion.php" class="nav-link <?php if ($routesArray[6]=="Cotizacion"):?> active <?php endif ?>">
                    <i class="nav-icon far fa-image"></i>
                    <p>
                      Cotizacion
                    </p>
                </a>
            </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-envelope"></i>
              <p>
                Mailbox
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../mailbox/mailbox.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Inbox</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../mailbox/compose.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Compose</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../mailbox/read-mail.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Read</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>