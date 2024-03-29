@extends('admin-portfolio.backend.layouts.app')
@section('content')

  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/material-dashboard/pages/dashboard " target="_blank">

        <span class="ms-1 font-weight-bold text-white">My Professional <br> Portfolio Dashboard</span>
      </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-white " href="{{ url("admin/dashboard") }}" @if(Request::segment(2) == 'dashboard') active @endif>
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">dashboard</i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white active bg-gradient-primary" href="{{ url('admin/table-details') }}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">table_view</i>
            </div>
            <span class="nav-link-text ms-1">About Me</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link text-white " href="../pages/notifications.html">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">notifications</i>
            </div>
            <span class="nav-link-text ms-1">Notifications</span>
          </a>
        </li>
        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Index pages</h6>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="{{ url('admin/preview-indexpages') }}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">person</i>
            </div>
            <span class="nav-link-text ms-1">banner</span>
          </a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-white " href="{{ url('admin/preview-portfolio') }}">
              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">person</i>
              </div>
              <span class="nav-link-text ms-1">Portfolio</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white " href="{{ url('') }}">
              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">person</i>
              </div>
              <span class="nav-link-text ms-1">Client</span>
            </a>
          </li>
    </div>
    <div class="sidenav-footer position-absolute w-100 bottom-0 ">
      <div class="mx-3">
        <a class="btn btn-outline-primary mt-4 w-100" href="https://www.creative-tim.com/learning-lab/bootstrap/overview/material-dashboard?ref=sidebarfree" type="button">Documentation</a>
        <a class="btn bg-gradient-primary w-100" href="https://www.creative-tim.com/product/material-dashboard-pro?ref=sidebarfree" type="button">Upgrade to pro</a>
      </div>
    </div>
  </aside>
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" data-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">

          </ol>
          <h6 class="font-weight-bolder mb-0">preview</h6>
        </nav>
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <a class="text-white text-capitalize ps-3" href="{{ url('admin/preview-create-indexpages') }}">preview index pages</a>
                <a class="text-white text-capitalize ps-3" href="{{ url('admin/preview-edit-indexpages/' . $get_bannerpreview[0]->id) }}">edit index pages</a>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
                <!-- top-area Start -->


                <!--style.css-->
                <link rel="stylesheet" href="{{ asset('/assets/css/style.css') }}">

                <!--responsive.css-->
                <link rel="stylesheet" href="{{ asset('/assets/css/responsive.css') }}">
                <header class="top-area">
                    <div class="header-area">
                        <!--welcome-hero start -->
                        <section id="welcome-hero" class="welcome-hero">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12 text-center">
                                        <div class="header-text">
                                            <h2>hi <span>,</span> i am <br> {{ $get_bannerpreview[0]->name }} <span>.</span>   </h2>
                                            <p>{{ $get_bannerpreview[0]->dev }}</p>
                                            <a href="{{ $get_bannerpreview[0]->resume }}" download>download resume</a>
                                        </div><!--/.header-text-->
                                    </div><!--/.col-->
                                </div><!-- /.row-->
                            </div><!-- /.container-->

                        </section><!--/.welcome-hero-->
                        <!--welcome-hero end -->
                    </header>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</main>
  @endsection
