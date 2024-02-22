@extends('admin-portfolio.backend.layouts.app')
@section('content')
  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/material-dashboard/pages/dashboard " target="_blank">
        <img src="{{ asset('admincss/assets/img/logo-ct.png') }}" class="navbar-brand-img h-100" alt="main_logo">
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
          <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Account pages</h6>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="../pages/profile.html">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">person</i>
            </div>
            <span class="nav-link-text ms-1">Profile</span>
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
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Tables</li>
          </ol>
          <h6 class="font-weight-bolder mb-0">Tables</h6>
        </nav>
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">About You Personal</h6>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
                <table class="table align-items-center mb-0">
                  <thead>
                    <div class="card-body px-4 pb-2">
                        <div class="container">
                            <div class="contact-content">
                                <div class="row">
                                    <div class="col-md-offset-2 col-md-12 col-sm-10">
                                        <div class="single-contact-box">
                                            <div class="contact-form">
                                                @include('_messages')
                                                <form action="{{ url('admin/create-about-post') }}" method="post" enctype="multipart/form-data" >
                                                    {{ csrf_field() }}
                                                    <div class="row">
                                                        <div class="col-sm-6 col-xs-12">
                                                            <div class="form-group">
                                                                <div class="input-group input-group-outline my-3">
                                                                    <input type="text" class="form-control" id="position" placeholder="position" name="position">
                                                                </div>
                                                            </div><!--/.form-group-->
                                                        </div><!--/.col-->
                                                        <div class="col-sm-6 col-xs-12">
                                                            <div class="form-group">
                                                                <div class="input-group input-group-outline my-3 ">
                                                                    <input type="email" class="form-control" id="email" placeholder="Email" name="email">
                                                                </div>
                                                            </div><!--/.form-group-->
                                                        </div><!--/.col-->
                                                    </div><!--/.row-->
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <div class="form-group">
                                                                <div class="input-group input-group-outline my-3">
                                                                <input type="text" class="form-control" id="subject" placeholder="Phone" name="phone">
                                                                </div>
                                                            </div><!--/.form-group-->
                                                        </div><!--/.col-->
                                                    </div><!--/.row-->
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                                <div class="input-group input-group-outline my-3">
                                                                <input type="text" class="form-control" id="subject" placeholder="website" name="website">
                                                            </div>
                                                        </div><!--/.form-group-->
                                                    </div><!--/.col-->
                                                </div><!--/.row-->
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <div class="input-group input-group-outline my-3">
                                                                <textarea class="form-control" rows="10" id="comment" placeholder="Decription" name="description" ></textarea>
                                                            </div>
                                                        </div><!--/.form-group-->
                                                    </div><!--/.col-->
                                                </div><!--/.row-->


                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                                <div class="input-group input-group-outline my-3">
                                                                    <label class="col-sm-3 col-form-label">Profile Images</label>
                                                                <input type="file" class="form-control" id="subject" placeholder="profile" name="profile">
                                                            </div>
                                                        </div><!--/.form-group-->
                                                    </div><!--/.col-->
                                                </div><!--/.row-->
                                            {{-- <div class="card-footer"> --}}
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="single-contact-btn">
                                                    <button type="submit" class="btn bg-gradient-primary" name="update" id="update" role="button">Add About</button>
                                                </div> <!--/.single-single-contact-btn-->
                                            </div><!--/.col-->
                                        </div><!--/ul--><!--/.row-->
                                                {{-- <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="single-contact-btn">
                                                            <button class="btn btn-default float-right" href="#" role="button">Cancel</button>
                                                        </div> <!--/.single-single-contact-btn-->
                                                </div><!--/.col-->
                                            </div><!--/.row--> --}}
                                        {{-- </div> --}}
                                    </form><!--/form-->
                                </div><!--/.contact-form-->
                            </div><!--/.single-contact-box-->
                        </div><!--/.col-->
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</main>
  @endsection
