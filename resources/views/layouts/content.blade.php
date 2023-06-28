<section id="content">
    <nav class="z-index mb-5">
        <i class='bx bx-menu'></i>
        <form action="#"></form>
        <a href="#" class="notification">
            <i class='bx bxs-bell'></i>
            <span class="num">?</span>
            <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header">
                  <img src="..." class="rounded me-2" alt="...">
                  <strong class="me-auto">Bootstrap</strong>
                  <small>11 mins ago</small>
                  <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body">
                  Hello, world! This is a toast message.
                </div>
              </div>
        </a>
        <a href="#" class="profile">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Hi, {{ Auth::user()->name }} 👋
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="#">Notification</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Contact</a>
                </div>
              </li>
            {{-- <img src="{{asset('')}}/background.jpg"> --}}
        </a>
    </nav>

    <main>
        <div class="head-title">
            <div class="left">
                <h1>@yield('title_content')</h1>
                @yield('breadcrumb')
            </div>
        </div>
        @yield('main_content')
        @notifyCss
        @notifyJs
    </main>
</section>
