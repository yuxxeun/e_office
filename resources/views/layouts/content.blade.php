<section id="content">
    <nav>
        <i class='bx bx-menu'></i>
        <form action="#"></form>
        <input type="checkbox" id="switch-mode" hidden>
        <label for="switch-mode" class="switch-mode"></label>
        <a href="#" class="notification">
            <i class='bx bxs-bell'></i>
            <span class="num">8</span>
        </a>
        <a href="#" class="profile">
            <img src="{{asset('')}}/background.jpg">
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
    </main>
</section>
