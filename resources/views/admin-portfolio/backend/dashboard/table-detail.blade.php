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
              <span class="nav-link-text ms-1">Banner</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white " href="{{ url('') }}">
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
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Tables</li>
          </ol>
          <h6 class="font-weight-bolder mb-0">Tables</h6>
        </nav>
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <a href="{{ url('admin/create-about') }}" class="text-white text-capitalize ps-3">About Me</a>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Position</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">website</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Phone</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Email</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Description</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">action</th>
                      <th class="text-secondary opacity-7"></th>
                      <th class="text-secondary opacity-7"></th>
                      <th class="text-secondary opacity-7"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                        @foreach($getrecord as $getrecord)
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            @if($getrecord->profile)
                            <img src="{{ asset('admincss/assets/images/' .$getrecord->profile) }} " class="avatar avatar-sm me-3 border-radius-lg" alt="user5">
                            @endif
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">{{ $getrecord->position }}</h6>
                          </div>
                        </div>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span>{{ $getrecord->phone }}</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">{{ $getrecord->email }}</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">{{ $getrecord->website }}</span>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <p class="text-xs font-weight-bold mb-0 center description">
                            {{ $getrecord->description }}
                        </p>
                    </td>
                      <td class="align-middle">
                        <a href="{{ url('admin/create-about') }}" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                          Create About
                        </a>
                      </td>
                      <td class="align-middle">
                        <a href="{{ url('admin/edit-about'. '/' .$getrecord->id) }}" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                          edit
                        </a>
                      </td>
                      <td class="align-middle">
                        {{-- <form action="{{ url('admin/delete-table-detail/' .$getrecord->id) }}" method="post">
                            @csrf
                            @method('delete') --}}
                        <a href="{{ url('admin/delete-about-detail/' .$getrecord->id) }}" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                          delete
                        </a>
                    {{-- </form> --}}
                      </td>
                    </tr>
                  </tbody>
                  @endforeach
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid py-4">
        <div class="row">
          <div class="col-12">
            <div class="card my-4">
              <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                  <h6 class=""><a href="{{ url('admin/exprience') }}" class="text-white text-capitalize ps-3">About Experience</a></h6>
                </div>
              </div>
              <div class="card-body px-0 pb-2">
                <div class="table-responsive p-0">
                  <table class="table align-items-center mb-0">
                    <thead>
                      <tr>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Campany</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Position</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">year</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">address</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">description</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">action</th>
                        <th class="text-secondary opacity-7"></th>
                      <th class="text-secondary opacity-7"></th>
                      <th class="text-secondary opacity-7"></th>
                      </tr>
                    </thead>
                    @foreach($getrecord2 as $getrecord2)
                    <tbody>
                      <tr>
                        <td>
                            <div class="d-flex flex-column justify-content-center">
                              <h6 class="mb-0 text-sm">{{ $getrecord2->campany }}</h6>
                            </div>
                          </div>
                        </td>
                        <td>
                          <p class="text-xs text-secondary mb-0">{{ $getrecord2->position_designation }}</p>
                        </td>
                        <td class="align-middle text-center text-sm">
                          <span class="">{{ $getrecord2->year }}</span>
                        </td>
                        <td class="align-middle text-center">
                          <span class="text-secondary text-xs font-weight-bold">{{ $getrecord2->address }}</span>
                        </td>
                        <td class="align-middle text-center">
                            <span class="text-secondary text-xs font-weight-bold">{{ $getrecord2->description }}</span>
                          </td>
                        <td class="align-middle">
                          <a href="{{ url('admin/edit-experience/' . $getrecord2->id) }}" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                            Edit
                          </a>
                        </td>
                        <td class="align-middle">
                            {{-- <form action="{{ url('admin/delete-table-detail/' .$getrecord->id) }}" method="post">
                                @csrf
                                @method('delete') --}}
                            <a href="{{ url('admin/delete-experience-detail/' .$getrecord2->id) }}" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                              delete
                            </a>
                        {{-- </form> --}}
                          </td>
                      </tr>
                    </tbody>
                    @endforeach
                </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


  <div class="container-fluid py-4">
    <div class="row">
      <div class="col-12">
        <div class="card my-4">
          <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
              <h6 class=""><a href="{{ url('admin/education') }}" class="text-white text-capitalize ps-3">About My Education</a></h6>
            </div>
          </div>
          <div class="card-body px-0 pb-2">
            <div class="table-responsive p-0">
              <table class="table align-items-center mb-0">
                <thead>
                  <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Year</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Course</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">School</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">address</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">description</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">action</th>
                    <th class="text-secondary opacity-7"></th>
                  </tr>
                </thead>
                @foreach($getrecord4 as $getrecord4)
                <tbody>
                  <tr>
                    <td>
                      <div class="d-flex px-2 py-1">
                        <div class="d-flex flex-column justify-content-center">
                          <h6 class="mb-0 text-sm">{{ $getrecord4->year }}</h6>
                        </div>
                      </div>
                    </td>
                    <td>
                      <p class="text-xs font-weight-bold mb-0">{{ $getrecord4->course }}</p>
                    </td>
                    <td class="align-middle text-center text-sm">
                      <span class="">{{ $getrecord4->school }}</span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold">{{ $getrecord4->description }}</span>
                    </td>
                    <td class="align-middle">
                      <a href="{{ url('admin/edit-education/' . $getrecord4->id) }}" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                        Edit
                      </a>
                    </td>
                    <td class="align-middle">
                        {{-- <form action="{{ url('admin/delete-table-detail/' .$getrecord->id) }}" method="post">
                            @csrf
                            @method('delete') --}}
                        <a href="{{ url('admin/delete-education-detail/' .$getrecord4->id) }}" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                          delete
                        </a>
                    {{-- </form> --}}
                      </td>
                  </tr>
                </tbody>
                @endforeach
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container-fluid py-4">
    <div class="row">
      <div class="col-12">
        <div class="card my-4">
          <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
              <h6 class="text-white text-capitalize ps-3"><a href="{{ url('admin/create-skill') }}" class="text-white text-capitalize ps-3">Skills</a></h6>
            </div>
          </div>
          <div class="card-body px-0 pb-2">
            <div class="table-responsive p-0">
              <table class="table align-items-center mb-0">
                <thead>
                  <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Skills</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Percentages</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
                    <th class="text-secondary opacity-7"></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    @foreach($getrecord3 as $getrecord3)
                    <td>
                      <div class="d-flex px-2 py-1">
                        <div class="d-flex flex-column justify-content-center">
                          <h6 class="mb-0 text-sm">{{ $getrecord3->name }}</h6>
                        </div>
                      </div>
                    </td>
                    <td>
                      <p class="text-xs font-weight-bold mb-0">{{ $getrecord3->percentage }}</p>
                    </td>
                    <td class="align-middle">
                      <a href="{{ url('admin/edit-skill'. '/' .$getrecord3->id) }}" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                        Edit
                      </a>
                    </td>
                    <td class="align-middle">
                        {{-- <form action="{{ url('admin/delete-table-detail/' .$getrecord->id) }}" method="post">
                            @csrf
                            @method('delete') --}}
                        <a href="{{ url('admin/delete-skill-detail/' .$getrecord3->id) }}" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                          delete
                        </a>
                    {{-- </form> --}}
                      </td>
                  </tr>
                  @endforeach
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
