<!-- SIDEBAR -->
<section id="sidebar">
    <a href="/dashboard" class="brand">
        <i class='bx bxs-smile'></i>
        <span class="text">E-OFFICE</span>
    </a>
    <ul class="side-menu top">
        <li class="{{ Request::path() === 'dashboard' ? 'active' : ''}} ">
            <a href="/dashboard">
                <i class='bx bxs-dashboard'></i>
                <span class="text">Dashboard</span>
            </a>
        </li>
        <li class="{{ Request::path() === 'buat_naskah' ? 'active' : ''}} ">
            <a href="/buat_naskah">
                <i class='bx bxs-shopping-bag-alt'></i>
                <span class="text">Buat Naskah</span>
            </a>
        </li>
        <li class="{{ Request::path() === 'riwayat' ? 'active' : ''}} ">
            <a href="/riwayat">
                <i class='bx bxs-doughnut-chart'></i>
                <span class="text">Riwayat</span>
            </a>
        </li>
        <li class="{{ Request::path() === 'daftar_mahasiswa' ? 'active' : ''}} ">
            <a href="/daftar_mahasiswa">
                <i class='bx bxs-message-dots'></i>
                <span class="text">Daftar Mahasiswa</span>
            </a>
        </li>
        <li>
            <a href="#">
                <i class='bx bxs-group'></i>
                <span class="text">Team</span>
            </a>
        </li>
    </ul>
    <ul class="side-menu">
        <li>
            <a href="#">
                <i class='bx bxs-cog'></i>
                <span class="text">Settings</span>
            </a>
        </li>
        <li>
            <a href="#" class="logout">
                <i class='bx bxs-log-out-circle'></i>
                <span class="text">Logout</span>
            </a>
        </li>
    </ul>
</section>
<!-- SIDEBAR -->