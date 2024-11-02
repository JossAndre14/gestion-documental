<!DOCTYPE html>
<html
  lang="es"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>Dashboard | Sisgestiondoc </title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />

    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />
    <!-- Iconos. Descomentar las fuentes de iconos requeridas -->
    <link rel="stylesheet" href="/gestion-documental/resources/css/boxicons.css" />
    <!-- Core CSS -->
    <link rel="stylesheet" href="/gestion-documental/resources/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="/gestion-documental/resources/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="/gestion-documental/resources/css/demo.css" />
    <!-- Vendors CSS -->
    <link rel="stylesheet" href="/gestion-documental/resources/css/perfect-scrollbar.css" />
    <link rel="stylesheet" href="/gestion-documental/resources/css/apex-charts.css" />
    <!-- Page CSS -->
    <!-- Helpers -->
    <script src="/gestion-documental/resources/js/helpers.js"></script>
    <script src="/gestion-documental/resources/js/config.js"></script>
  </head>

  <body>
    <!-- Envoltorio de diseño -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">

        <!-- Menu -->
        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand demo">
            <a href="#" class="app-brand-link">
              <span class="app-brand-text demo menu-text fw-bolder ms-2">SisGestiDoc</span>
            </a>

            <a href="#" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
              <i class="bx bx-chevron-left bx-sm align-middle"></i>
            </a>
          </div>

          <div class="menu-inner-shadow"></div>
          <ul class="menu-inner py-1">
            <!-- Dashboard -->
            <li class="menu-header small text-uppercase">
              <span class="menu-header-text">Dashboard</span>
            </li>
            <li class="menu-item active">
              <a href="#" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Dashboard">Dashboard</div>
              </a>
            </li>

            <!-- Dashboard-documento-01 -->

            <li class="menu-header small text-uppercase">
              <span class="menu-header-text">Documentos</span>
            </li>
            
            <li class="menu-item">
              <a href="#" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-layout"></i>
                <div data-i18n="Layouts">Gestion Documentos</div>
              </a>

              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="#" class="menu-link">
                    <div data-i18n="Without menu">Crear Documento</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="#" class="menu-link">
                    <div data-i18n="Without navbar">Buscar Documentos</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="#" class="menu-link">
                    <div data-i18n="Container">Documentos Pendientes</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="#" class="menu-link">
                    <div data-i18n="Fluid">Documentos Urgentes</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="#" class="menu-link">
                    <div data-i18n="Blank">Documentos Completados</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="#" class="menu-link">
                    <div data-i18n="Blank">Historial de Cambios</div>
                  </a>
                </li>
              </ul>
            </li>
              <!-- Dashboard-documento-02 -->

              <li class="menu-item">
                <a href="#" class="menu-link menu-toggle">
                  <i class="menu-icon tf-icons bx bx-layout"></i>
                  <div data-i18n="Layouts">Gestion Usuarios</div>
                </a>
  
                <ul class="menu-sub">
                  <li class="menu-item">
                    <a href="#" class="menu-link">
                      <div data-i18n="Without menu">Lista de Usuarios</div>
                    </a>
                  </li>
                  <li class="menu-item">
                    <a href="#l" class="menu-link">
                      <div data-i18n="Without navbar">Roles y Permisos</div>
                    </a>
                  </li>
                  <li class="menu-item">
                    <a href="#" class="menu-link">
                      <div data-i18n="Container">Crear/Modificar Usuario</div>
                    </a>
                  </li>
                  <li class="menu-item">
                    <a href="#" class="menu-link">
                      <div data-i18n="Fluid">Estado de Actividad</div>
                    </a>
                  </li>
                  <li class="menu-item">
                    <a href="#" class="menu-link">
                      <div data-i18n="Blank">Solicitud de Acceso</div>
                    </a>
                  </li>
                </ul>
              </li>
            </li>
            
            <!-- Dashboard-documento-03 -->
            
            <li class="menu-header small text-uppercase">
              <span class="menu-header-text">Accesos Directos</span>
            </li>
            <!-- User interface -->
            <li class="menu-item">
              <a href="#" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-box"></i>
                <div data-i18n="User interface">Reportes</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="#" class="menu-link">
                    <div data-i18n="Accordion">Reportes de Documentos</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="#" class="menu-link">
                    <div data-i18n="Alerts">Reportes de Usuarios</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="#" class="menu-link">
                    <div data-i18n="Badges">Reportes de Ingreso y Uso</div>
                  </a>
                </li>
              </ul>
            </li>
          </li>
            <!-- Dashboard-documento-04 -->
            <li class="menu-item">
              <a href="#" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-copy"></i>
                <div data-i18n="Extended UI">Seguimiento de Tareas</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="#" class="menu-link">
                    <div data-i18n="Perfect Scrollbar">Tareas Asignadas</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="#" class="menu-link">
                    <div data-i18n="Text Divider">Progreso de Revisión</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="#" class="menu-link">
                    <div>Tareas Urgentes</div>
                  </a>
                </li>
              </ul>
            </li>

            <!-- Dashboard-documento-05 -->
            <li class="menu-item">
              <a href="#" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-copy"></i>
                <div data-i18n="Extended UI">Configuración</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="#" class="menu-link">
                    <div data-i18n="Perfect Scrollbar">Configuración de Cuenta</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="#" class="menu-link">
                    <div data-i18n="Text Divider">Preferencias de Notificaciones</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="#" class="menu-link">
                    <div>Ajustes Generales</div>
                  </a>
                </li>
              </ul>
            </li>

            <!-- Forms & Tables -->
            <li class="menu-header small text-uppercase"><span class="menu-header-text">Soporte y Ayuda</span></li>
            <!-- Forms -->
            <li class="menu-item">
              <a href="#" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-detail"></i>
                <div data-i18n="Form Elements">Guía del Usuario</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="#" class="menu-link">
                    <div data-i18n="Basic Inputs">Preguntas Frecuentes</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="#" class="menu-link">
                    <div data-i18n="Input groups">Contacto de Soporte</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="#" class="menu-link">
                    <div data-i18n="Input groups">Chat de Soporte</div>
                  </a>
                </li>
              </ul>
            </li>
            
            <!-- Sesion -->
            <li class="menu-header small text-uppercase"><span class="menu-header-text">Sesion</span></li>
            <li class="menu-item">
              <a href="#" class="menu-link">
                <div data-i18n="Input groups">Cerrar Sesion</div>
              </a>
            </li>
          <a
                href="https://github.com/themeselection/sneat-html-admin-template-free/issues"
                target="_blank"
                class="menu-link"
              >
              <a
                href="https://themeselection.com/demo/sneat-bootstrap-html-admin-template/documentation/"
                target="_blank"
                class="menu-link"
              >
        </aside>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

          <nav
            class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
            id="layout-navbar"
          >
            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
              <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                <i class="bx bx-menu bx-sm"></i>
              </a>
            </div>

            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
              <!-- Search -->
              <div class="navbar-nav align-items-center">
                <div class="nav-item d-flex align-items-center">
                  <i class="bx bx-search fs-4 lh-0"></i>
                  <input
                    type="text"
                    class="form-control border-0 shadow-none"
                    placeholder="Search..."
                    aria-label="Search..."
                  />
                </div>
              </div>
              <!-- /Search -->

              <ul class="navbar-nav flex-row align-items-center ms-auto">
                
          <!-- Coloque esta etiqueta donde desee que se muestre el botón. -->
                
                
                <!-- User -->
                    <li class="nav-item navbar-dropdown dropdown-user dropdown">
                      <a class="nav-link dropdown-toggle hide-arrow" href="#" data-bs-toggle="dropdown">
                        <div class="avatar avatar-online">
                          <img src="/gestion-documental/resources/img/93757-200.png" alt class="w-px-40 h-auto rounded-circle" />
                        </div>
                      </a>
                      <ul class="dropdown-menu dropdown-menu-end">
                        @if (session('Modelofuncionario'))
                          <li>
                            <a class="dropdown-item" href="#">
                              <div class="d-flex">
                                <div class="flex-shrink-0 me-3">
                                  <div class="avatar avatar-online">
                                    <img src="/gestion-documental/resources/img/93757-200.png" alt class="w-px-40 h-auto rounded-circle" />
                                  </div>
                                </div>
                                <div class="flex-grow-1">
                                  <span class="fw-semibold d-block">{{ session('Modelofuncionario')->nombre_completo }}</span>
                                  <small class="text-muted">{{ session('Modelofuncionario')->rol }}</small>
                                </div>
                              </div>
                            </a>
                          </li>
                          <li>
                            <div class="dropdown-divider"></div>
                          </li>
                          <li>
                            <a class="dropdown-item" href="#">
                              <p><strong>Cargo:</strong> {{ session('Modelofuncionario')->cargo }}</p>
                              <p><strong>Área:</strong> {{ session('Modelofuncionario')->area }}</p>
                              <p><strong>Correo electrónico:</strong> {{ session('Modelofuncionario')->correo_electronico }}</p>
                              <p><strong>Fecha de inscripción:</strong> {{ session('Modelofuncionario')->fecha_creacion }}</p>
                            </a>
                          </li>
                        @else
                          <li>
                            <a class="dropdown-item" href="#">
                              <span>No se ha encontrado información del funcionario.</span>
                            </a>
                          </li>
                        @endif
                      </ul>
                    </li>  
                  </ul>
                </li>
                <!--/ User -->
              </ul>
            </div>
          </nav>

          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            

            <!-- Footer -->
            <footer class="content-footer footer bg-footer-theme">
              <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                <div class="mb-2 mb-md-0">
                  ©
                  <script>
                    document.write(new Date().getFullYear());
                  </script>
                  , Sisgestiondoc
                  <a href="https://themeselection.com" target="_blank" class="footer-link fw-bolder">Municipalidad Huariaca</a>
                </div>
                <div>
                  <a href="#" class="footer-link me-4" target="_blank">License</a>
                  <a href="#" target="_blank" class="footer-link me-4">More Themes</a>

                  <a
                    href="https://themeselection.com/demo/sneat-bootstrap-html-admin-template/documentation/"
                    target="_blank"
                    class="footer-link me-4"
                    >Documentation</a
                  >

                  <a
                    href="https://github.com/themeselection/sneat-html-admin-template-free/issues"
                    target="_blank"
                    class="footer-link me-4"
                    >Support</a
                  >
                </div>
              </div>
            </footer>
            <!-- / Footer -->

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->


    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="/gestion-documental/resources/js/jquery.js"></script>
    <script src="/gestion-documental/resources/js/popper.js"></script>
    <script src="/gestion-documental/resources/js/bootstrap.js"></script>
    <script src="/gestion-documental/resources/js/perfect-scrollbar.js"></script>

    <script src="/gestion-documental/resources/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="/gestion-documental/resources/js/apexcharts.js"></script>

    <!-- Main JS -->
    <script src="/gestion-documental/resources/js/main.js"></script>

    <!-- Page JS -->
    <script src="/gestion-documental/resources/js/dashboards-analytics.js"></script>

      <!-- Coloque esta etiqueta en su encabezado o justo antes de su etiqueta de cierre de cuerpo. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>
