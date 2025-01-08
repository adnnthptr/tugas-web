


@extends('layouts.main')
@section('content')
<div class="wrapper">
  <!-- Sidebar -->
  <div class="sidebar" data-background-color="red">
    <div class="sidebar-logo">
      <!-- Logo Header -->
      <div class="logo-header" data-background-color="red">
        <a href="{{ url('/home', []) }}" class="logo">
          <img
            src="{{ asset('lite/assets/img/pet/logo.jpg') }}" style="margin-top: 0.1rem; margin-left: -0.5rem;"
            alt="navbar brand"
            class="navbar-brand"
            height="65"
          />
        </a>
        <div class="nav-toggle">
          <button class="btn btn-toggle toggle-sidebar">
            <i class="gg-menu-right"></i>
          </button>
          <button class="btn btn-toggle sidenav-toggler">
            <i class="gg-menu-left"></i>
          </button>
        </div>
        <button class="topbar-toggler more">
          <i class="gg-more-vertical-alt"></i>
        </button>
      </div>
      <!-- End Logo Header -->
    </div>
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
      <div class="sidebar-content">
        <ul class="nav nav-secondary">
          <li class="nav-section">
            <span class="sidebar-mini-icon">
              <i class="fa fa-ellipsis-h"></i>
            </span>
            <h4 class="text-section">Home</h4>
          </li>
          <li class="nav-item active">
            <a href="{{ url('/home', []) }}" >
              <i class="fas fa-home"></i>
              <p>Home</p>
            </a>
          </li>
          <li class="nav-section">
            <span class="sidebar-mini-icon">
              <i class="fa fa-ellipsis-h"></i>
            </span>
            <h4 class="text-section">Menu</h4>
          </li>
          <li class="nav-item">
            <a data-bs-toggle="collapse" href="#base">
            <i class="fas fa-file-alt"></i>
              <p>Administrasi</p>
              <span class="caret"></span>
            </a>
            <div class="collapse" id="base">
              <ul class="nav nav-collapse">
                <li>
                  <a href="{{ url('administrasi', []) }}">
                    <span class="sub-item">Daftar Transaksi</span>
                  </a>
                </li>
                <li>
                  <a href="{{ url('administrasi/create', []) }}">
                    <span class="sub-item">Tambah Transaksi</span>
                  </a>
                </li>
                <li>
                  <a href="{{ url('administrasi/laporan/cetak', []) }}">
                    <span class="sub-item">Laporan</span>
                  </a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a data-bs-toggle="collapse" href="#sidebarLayouts">
            <i class="fas fa-futbol"></i>
              <p>Lapangan</p>
              <span class="caret"></span>
            </a>
            <div class="collapse" id="sidebarLayouts">
              <ul class="nav nav-collapse">
                <li>
                  <a href="{{ url('lapangan', []) }}">
                    <span class="sub-item">Daftar lapangan</span>
                  </a>
                </li>
                <li>
                  <a href="{{ url('lapangan/create', []) }}">
                    <span class="sub-item">Tambah Lapangan</span>
                  </a>
                </li>
                <li>
                  <a href="{{ url('lapangan/laporan/cetak', []) }}">
                    <span class="sub-item">Laporan</span>
                  </a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a data-bs-toggle="collapse" href="#forms">
                <i class="fas fa-users"></i>
              <p>Pelanggan</p>
              <span class="caret"></span>
            </a>
            <div class="collapse" id="forms">
              <ul class="nav nav-collapse">
                <li>
                  <a href="{{ url('pelanggan', []) }}">
                    <span class="sub-item">Daftar Pelanggan</span>
                  </a>
                </li>
                <li>
                  <a href="{{ url('pelanggan/create', []) }}">
                    <span class="sub-item">Tambah Pelanggan</span>
                  </a>
                </li>
                <li>
                  <a href="{{ url('pelanggan/laporan/cetak', []) }}">
                    <span class="sub-item">Laporan</span>
                  </a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-section">
            <span class="sidebar-mini-icon">
              <i class="fa fa-ellipsis-h"></i>
            </span>
            <h4 class="text-section">Akun</h4>
          </li>
          <li class="nav-item">
            <a data-bs-toggle="collapse" href="#profil">
              <i class="fas fa-user"></i>
              <p>Akun Saya</p>
              <span class="caret"></span>
            </a>
            <div class="collapse" id="profil">
              <ul class="nav nav-collapse">
                <li>
                  <a href="profil/akun Saya.html">
                  </a>
                </li>
                </li>

                <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                              <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                              Logout
                          </a>
                          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                              @csrf
                          </form>
              </ul>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <!-- End Sidebar -->

  <div class="main-panel">
    <div class="main-header">
      <div class="main-header-logo">
        <!-- Logo Header -->
        <div class="logo-header" data-background-color="dark">
          <a href="index.html" class="logo">
            <img
              src="{{ asset('lite/assets/img/kaiadmin/logo_light.svg') }}"
              alt="navbar brand"
              class="navbar-brand"
              height="20"
            />
          </a>
          <div class="nav-toggle">
            <button class="btn btn-toggle toggle-sidebar">
              <i class="gg-menu-right"></i>
            </button>
            <button class="btn btn-toggle sidenav-toggler">
              <i class="gg-menu-left"></i>
            </button>
          </div>
          <button class="topbar-toggler more">
            <i class="gg-more-vertical-alt"></i>
          </button>
        </div>
        <!-- End Logo Header -->
      </div>
      <!-- Navbar Header -->
      <nav
        class="navbar navbar-header navbar-header-transparent navbar-expand-lg border-bottom"
      >
        <div class="container-fluid">
          <nav
            class="navbar navbar-header-left navbar-expand-lg navbar-form nav-search p-0 d-none d-lg-flex"
          >
            <div class="input-group">
              <div class="input-group-prepend">
                <button type="submit" class="btn btn-search pe-1">
                  <i class="fa fa-search search-icon"></i>
                </button>
              </div>
              <input
                type="text"
                placeholder="Search ..."
                class="form-control"
              />
            </div>
          </nav>

          <ul class="navbar-nav topbar-nav ms-md-auto align-items-center">
            <li
              class="nav-item topbar-icon dropdown hidden-caret d-flex d-lg-none"
            >
              <a
                class="nav-link dropdown-toggle"
                data-bs-toggle="dropdown"
                href="#"
                role="button"
                aria-expanded="false"
                aria-haspopup="true"
              >
                <i class="fa fa-search"></i>
              </a>
              <ul class="dropdown-menu dropdown-search animated fadeIn">
                <form class="navbar-left navbar-form nav-search">
                  <div class="input-group">
                    <input
                      type="text"
                      placeholder="Search ..."
                      class="form-control"
                    />
                  </div>
                </form>
              </ul>
            </li>
            <li class="nav-item topbar-icon dropdown hidden-caret">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                id="messageDropdown"
                role="button"
                data-bs-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
              >

              <ul
                class="dropdown-menu messages-notif-box animated fadeIn"
                aria-labelledby="messageDropdown"
              >
                <li>
                  <div
                    class="dropdown-title d-flex justify-content-between align-items-center"
                  >
                    Messages
                    <a href="#" class="small">Mark all as read</a>
                  </div>
                </li>
                <li>
                  <div class="message-notif-scroll scrollbar-outer">
                    <div class="notif-center">
                      <a href="#">
                        <div class="notif-img">
                          <img
                            src="{{ asset('lite/assets/img/jm_denis.jpg') }}"
                            alt="Img Profile"
                          />
                        </div>
                        <div class="notif-content">
                          <span class="subject">Jimmy Denis</span>
                          <span class="block"> How are you ? </span>
                          <span class="time">5 minutes ago</span>
                        </div>
                      </a>
                      <a href="#">
                        <div class="notif-img">
                          <img
                            src="{{ asset('lite/assets/img/chadengle.jpg') }}"
                            alt="Img Profile"
                          />
                        </div>
                        <div class="notif-content">
                          <span class="subject">Chad</span>
                          <span class="block"> Ok, Thanks ! </span>
                          <span class="time">12 minutes ago</span>
                        </div>
                      </a>
                      <a href="#">
                        <div class="notif-img">
                          <img
                            src="{{ asset('lite/assets/img/mlane.jpg') }}"
                            alt="Img Profile"
                          />
                        </div>
                        <div class="notif-content">
                          <span class="subject">Jhon Doe</span>
                          <span class="block">
                            Ready for the meeting today...
                          </span>
                          <span class="time">12 minutes ago</span>
                        </div>
                      </a>
                      <a href="#">
                        <div class="notif-img">
                          <img
                            src="{{ asset('lite/assets/img/talha.jpg') }}"
                            alt="Img Profile"
                          />
                        </div>
                        <div class="notif-content">
                          <span class="subject">Talha</span>
                          <span class="block"> Hi, Apa Kabar ? </span>
                          <span class="time">17 minutes ago</span>
                        </div>
                      </a>
                    </div>
                  </div>
                </li>
                <li>
                  <a class="see-all" href="javascript:void(0);"
                    >See all messages<i class="fa fa-angle-right"></i>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item topbar-icon dropdown hidden-caret">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                id="notifDropdown"
                role="button"
                data-bs-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
              >

              <ul
                class="dropdown-menu notif-box animated fadeIn"
                aria-labelledby="notifDropdown"
              >
                <li>
                  <div class="dropdown-title">
                    You have 4 new notification
                  </div>
                </li>
                <li>
                  <div class="notif-scroll scrollbar-outer">
                    <div class="notif-center">
                      <a href="#">
                        <div class="notif-icon notif-primary">
                          <i class="fa fa-user-plus"></i>
                        </div>
                        <div class="notif-content">
                          <span class="block"> New user registered </span>
                          <span class="time">5 minutes ago</span>
                        </div>
                      </a>
                      <a href="#">
                        <div class="notif-icon notif-success">
                          <i class="fa fa-comment"></i>
                        </div>
                        <div class="notif-content">
                          <span class="block">
                            Rahmad commented on Admin
                          </span>
                          <span class="time">12 minutes ago</span>
                        </div>
                      </a>
                      <a href="#">
                        <div class="notif-img">
                          <img
                            src="{{ asset('lite/assets/img/profile2.jpg') }}"
                            alt="Img Profile"
                          />
                        </div>
                        <div class="notif-content">
                          <span class="block">
                            Reza send messages to you
                          </span>
                          <span class="time">12 minutes ago</span>
                        </div>
                      </a>
                      <a href="#">
                        <div class="notif-icon notif-danger">
                          <i class="fa fa-heart"></i>
                        </div>
                        <div class="notif-content">
                          <span class="block"> Farrah liked Admin </span>
                          <span class="time">17 minutes ago</span>
                        </div>
                      </a>
                    </div>
                  </div>
                </li>
                <li>
                  <a class="see-all" href="javascript:void(0);"
                    >See all notifications<i class="fa fa-angle-right"></i>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item topbar-icon dropdown hidden-caret">
              <a
                class="nav-link"
                data-bs-toggle="dropdown"
                href="#"
                aria-expanded="false"
              >
              </a>
              <div class="dropdown-menu quick-actions animated fadeIn">
                <div class="quick-actions-header">
                  <span class="title mb-1">Quick Actions</span>
                  <span class="subtitle op-7">Shortcuts</span>
                </div>
                <div class="quick-actions-scroll scrollbar-outer">
                  <div class="quick-actions-items">
                    <div class="row m-0">
                      <a class="col-6 col-md-4 p-0" href="#">
                        <div class="quick-actions-item">
                          <div class="avatar-item bg-danger rounded-circle">
                            <i class="far fa-calendar-alt"></i>
                          </div>
                          <span class="text">Calendar</span>
                        </div>
                      </a>
                      <a class="col-6 col-md-4 p-0" href="#">
                        <div class="quick-actions-item">
                          <div
                            class="avatar-item bg-warning rounded-circle"
                          >
                            <i class="fas fa-map"></i>
                          </div>
                          <span class="text">Maps</span>
                        </div>
                      </a>
                      <a class="col-6 col-md-4 p-0" href="#">
                        <div class="quick-actions-item">
                          <div class="avatar-item bg-info rounded-circle">
                            <i class="fas fa-file-excel"></i>
                          </div>
                          <span class="text">Reports</span>
                        </div>
                      </a>
                      <a class="col-6 col-md-4 p-0" href="#">
                        <div class="quick-actions-item">
                          <div
                            class="avatar-item bg-success rounded-circle"
                          >
                            <i class="fas fa-envelope"></i>
                          </div>
                          <span class="text">Emails</span>
                        </div>
                      </a>
                      <a class="col-6 col-md-4 p-0" href="#">
                        <div class="quick-actions-item">
                          <div
                            class="avatar-item bg-primary rounded-circle"
                          >
                            <i class="fas fa-file-invoice-dollar"></i>
                          </div>
                          <span class="text">Invoice</span>
                        </div>
                      </a>
                      <a class="col-6 col-md-4 p-0" href="#">
                        <div class="quick-actions-item">
                          <div
                            class="avatar-item bg-secondary rounded-circle"
                          >
                            <i class="fas fa-credit-card"></i>
                          </div>
                          <span class="text">Payments</span>
                        </div>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </li>

            <li class="nav-item topbar-user dropdown hidden-caret">
              <a
                class="dropdown-toggle profile-pic"
                data-bs-toggle="dropdown"
                href="#"
                aria-expanded="false"
              >
                <div class="avatar-sm">
                  <img
                    src="{{ asset('lite/assets/img/pet/patrick.jpg') }}"
                    alt="..."
                    class="avatar-img rounded-circle"
                  />
                </div>
                <span class="profile-username">
                  <span class="op-7">Hi,</span>
                  <span class="fw-bold">Fahri</span>
                </span>
              </a>
              <ul class="dropdown-menu dropdown-user animated fadeIn">
                <div class="dropdown-user-scroll scrollbar-outer">
                  <li>
                    <div class="user-box">
                      <div class="avatar-lg">
                        <img
                          src="{{ asset('lite/assets/img/pet/patrick.jpg') }}"
                          alt="image profile"
                          class="avatar-img rounded"
                        />
                      </div>
                      <div class="u-text">
                        <h4>Fahri</h4>
                        <p class="text-muted">fahryandana@example.com</p>
                      </div>
                    </div>
                  </li>
                </div>
              </ul>
            </li>
          </ul>
        </div>
      </nav>
      <!-- End Navbar -->
    </div>

    <div class="container">
      <div class="page-inner">
        <div
          class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4"
        >
          <div>
            <h3 class="fw-bold mb-3">Home</h3>

          </div>
        </div>
        <div class="row">
          <div class="col-sm-6 col-md-3">
            <div class="card card-stats card-round">
              <div class="card-body">
                <div class="row align-items-center">
                  <div class="col-icon">
                    <div
                      class="icon-big text-center icon-primary bubble-shadow-small"
                    >
                      <i class="fas fa-file-alt"></i>
                    </div>
                  </div>
                  <div class="col col-stats ms-3 ms-sm-0">
                    <div class="administrasi">
                      <a href="{{ url('administrasi', []) }}">
                        <p class="card-category">Daftar Administrasi</p>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-3">
            <div class="card card-stats card-round">
              <div class="card-body">
                <div class="row align-items-center">
                  <div class="col-icon">
                    <div
                      class="icon-big text-center icon-info bubble-shadow-small"
                    >
                      <i class="fas fa-futbol"></i>
                    </div>
                  </div>
                  <div class="col col-stats ms-3 ms-sm-0">
                    <div class="lapangan">
                      <a href="{{ url('lapangan', []) }}">
                        <p class="card-category">Lapangan</p>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-3">
            <div class="card card-stats card-round">
              <div class="card-body">
                <div class="row align-items-center">
                  <div class="col-icon">
                    <div
                      class="icon-big text-center icon-secondary bubble-shadow-small"
                    >
                      <i class="fas fa-users"></i>
                    </div>
                  </div>
                  <div class="col col-stats ms-3 ms-sm-0">
                    <div class="pelanggan">
                        <a href="{{ url('pelanggan', []) }}">
                      <p class="card-category">Pelanggan</p>

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

                    </div>
                  </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        
 
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <footer class="footer">
            </li>
          </ul>
        </nav>
        </div>
      </div>
    </footer>
  </div>
</div>
@endsection