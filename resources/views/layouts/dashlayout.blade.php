@extends('layouts.main')

@section('container')
<body style="background-color: black">
    <div class="container-fluid">
        <div class="row">
          <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block sidebar collapse">
            <div class="position-sticky pt-3">
              <ul class="nav flex-column">
                <li class="nav-item border-bottom">
                  <a class="nav-link {{ $title === 'User Dashboard' ? 'active' : '' }}" href="/dashboard">
                    <span data-feather="home"></span>
                    User
                  </a>
                </li>
                <li class="nav-item border-bottom">
                  <a class="nav-link {{ $title === 'Articles Dashboard' ? 'active' : '' }}" href="/dashboard/article">
                    <span data-feather="file"></span>
                    Article
                  </a>
                </li>
              </ul>
            </div>
          </nav>

          <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
              @yield('main')
          </main>
        </div>
      </div>
</body>

@endsection
