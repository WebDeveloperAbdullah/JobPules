<header class="header">



<nav class="navbar navbar-expand-lg">
    <div class="search-panel">
      <div class="search-inner d-flex align-items-center justify-content-center">
        <div class="close-btn">Close <i class="fa fa-close"></i></div>
        <form id="searchForm" action="#">

        </form>
      </div>
    </div>
    <div class="container-fluid d-flex align-items-center justify-content-between">
      <div class="navbar-header">
        <!-- Navbar Header--><a href="index.html" class="navbar-brand">
          <div class="brand-text brand-big visible text-uppercase"><strong class="text-primary">Job</strong><strong>Pulse</strong></div>
          <div class="brand-text brand-sm"><strong class="text-primary">J</strong><strong>P</strong></div></a>
        <!-- Sidebar Toggle Btn-->
        <button class="sidebar-toggle"><i class="fa fa-long-arrow-left"></i></button>
      </div>
      <div class="right-menu list-inline no-margin-bottom">
        <div class="list-inline-item"><a href="#" class="search-open nav-link"><i class="icon-magnifying-glass-browser"></i></a></div>
        <div class="list-inline-item dropdown"><a id="navbarDropdownMenuLink1" href="http://example.com" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link messages-toggle"><i class="icon-email"></i><span class="badge dashbg-1">5</span></a>
          <div aria-labelledby="navbarDropdownMenuLink1" class="dropdown-menu messages"><a href="#" class="dropdown-item message d-flex align-items-center">
              <div class="profile"><img src="{{ asset('assets/backEnd/img/avatar-3.jpg') }}" alt="..." class="img-fluid">
                <div class="status online"></div>
              </div>
              <div class="content">   <strong class="d-block">Nadia Halsey</strong><span class="d-block">lorem ipsum dolor sit amit</span><small class="date d-block">9:30am</small></div></a><a href="#" class="dropdown-item message d-flex align-items-center">
              <div class="profile"><img src="{{ asset('assets/backEnd/img/avatar-2.jpg') }}" alt="..." class="img-fluid">
                <div class="status away"></div>
              </div>
              <div class="content">   <strong class="d-block">Peter Ramsy</strong><span class="d-block">lorem ipsum dolor sit amit</span><small class="date d-block">7:40am</small></div></a><a href="#" class="dropdown-item message d-flex align-items-center">
              <div class="profile"><img src="{{ asset('assets/backEnd/img/avatar-1.jpg') }}" alt="..." class="img-fluid">
                <div class="status busy"></div>
              </div>
              <div class="content">   <strong class="d-block">Sam Kaheil</strong><span class="d-block">lorem ipsum dolor sit amit</span><small class="date d-block">6:55am</small></div></a><a href="#" class="dropdown-item message d-flex align-items-center">
              <div class="profile"><img src="{{ asset('assets/backEnd/img/avatar-5.jpg') }}" alt="..." class="img-fluid">
                <div class="status offline"></div>
              </div>
              <div class="content">   <strong class="d-block">Sara Wood</strong><span class="d-block">lorem ipsum dolor sit amit</span><small class="date d-block">10:30pm</small></div></a><a href="#" class="dropdown-item text-center message"> <strong>See All Messages <i class="fa fa-angle-right"></i></strong></a></div>
        </div>
        <!-- Tasks-->
        <div class="list-inline-item dropdown"><a id="navbarDropdownMenuLink2" href="http://example.com" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link tasks-toggle"><i class="icon-new-file"></i><span class="badge dashbg-3">9</span></a>
          <div aria-labelledby="navbarDropdownMenuLink2" class="dropdown-menu tasks-list"><a href="#" class="dropdown-item">
              <div class="text d-flex justify-content-between"><strong>Task 1</strong><span>40% complete</span></div>
              <div class="progress">
                <div role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" class="progress-bar dashbg-1"></div>
              </div></a><a href="#" class="dropdown-item">
              <div class="text d-flex justify-content-between"><strong>Task 2</strong><span>20% complete</span></div>
              <div class="progress">
                <div role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" class="progress-bar dashbg-3"></div>
              </div></a><a href="#" class="dropdown-item">
              <div class="text d-flex justify-content-between"><strong>Task 3</strong><span>70% complete</span></div>
              <div class="progress">
                <div role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" class="progress-bar dashbg-2"></div>
              </div></a><a href="#" class="dropdown-item">
              <div class="text d-flex justify-content-between"><strong>Task 4</strong><span>30% complete</span></div>
              <div class="progress">
                <div role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" class="progress-bar dashbg-4"></div>
              </div></a><a href="#" class="dropdown-item">
              <div class="text d-flex justify-content-between"><strong>Task 5</strong><span>65% complete</span></div>
              <div class="progress">
                <div role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" class="progress-bar dashbg-1"></div>
              </div></a><a href="#" class="dropdown-item text-center"> <strong>See All Tasks <i class="fa fa-angle-right"></i></strong></a>
          </div>
        </div>
        <!-- Tasks end-->


        <!-- Log out               -->
        <div class="list-inline-item logout">
              <a id="logout" href="{{ route('logOut') }}" class="nav-link">Logout <i class="icon-logout"></i></a>
            </div>
      </div>
    </div>
  </nav>
</header>
<div class="d-flex align-items-stretch">
  <!-- Sidebar Navigation-->
  <nav id="sidebar">
    <!-- Sidebar Header-->
    <div class="sidebar-header d-flex align-items-center">
      <div class="avatar"><img src="{{ asset('assets/backEnd/img/avatar-1.jpg') }}" alt="..." class="img-fluid rounded-circle"></div>
      <div class="title">
        @foreach ($datas as $data )


        @endforeach
        <h1 class="h5">{{ $data->userName }}</h1>
        <p>{{ $data->name }}</p>
      </div>
    </div>
    <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
    <ul class="list-unstyled">
            <li class="active"><a href=""> <i class="icon-home"></i>Dashboard </a></li>
            @php
                if(session('role_id')){
                   $role_id= session('role_id');
                }
                @endphp
            <li class="active"><a href="{{ route('owaner_profile') }}"> <i class="icon-home"></i>Profile </a></li>
                @if ($role_id==1)
                <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-windows"></i> Website User </a>
                    <ul id="exampledropdownDropdown" class="collapse list-unstyled ">

                      <li><a href="{{ route('admin_list') }}"> User List</a></li>

                    </ul>
                  </li>

                @endif
                <li><a href="#exampledropdownDropdown4" aria-expanded="false" data-toggle="collapse"> <i class="icon-windows"></i> Category </a>
                    <ul id="exampledropdownDropdown4" class="collapse list-unstyled ">
                      <li><a href="#">Category List</a></li>

                    </ul>
                  </li>

            <li><a href="#exampledropdownDropdown4" aria-expanded="false" data-toggle="collapse"> <i class="icon-windows"></i> Blogs </a>
                <ul id="exampledropdownDropdown4" class="collapse list-unstyled ">
                  <li><a href="#">Page</a></li>

                </ul>
              </li>


            @if ($role_id==3)
            <li><a href="#exampledropdownDropdown1" aria-expanded="false" data-toggle="collapse"> <i class="icon-windows"></i> Companies </a>
                <ul id="exampledropdownDropdown1" class="collapse list-unstyled ">
                  <li><a href="">Employ List</a></li>

                </ul>
              </li>

            @endif


        @if ($role_id==3 ||$role_id==4)

        <li><a href="#exampledropdownDropdown1" aria-expanded="false" data-toggle="collapse"> <i class="icon-windows"></i> Job Category </a>
            <ul id="exampledropdownDropdown1" class="collapse list-unstyled ">
              <li><a href=""> Job Category List</a></li>

            </ul>
          </li>
        <li><a href="#exampledropdownDropdown1" aria-expanded="false" data-toggle="collapse"> <i class="icon-windows"></i> Job </a>
            <ul id="exampledropdownDropdown1" class="collapse list-unstyled ">
              <li><a href=""> Post List</a></li>

            </ul>
          </li>

        @endif



    </ul>

  </nav>
</header>
