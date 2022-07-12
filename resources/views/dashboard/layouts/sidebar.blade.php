<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
  <div class="position-sticky pt-3">
    <ul class="nav flex-column">
      <li class="nav-item">
        <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
          <span data-feather="home" class="align-text-bottom"></span>
          Dashboard
        </a>
      </li>
      <li class="nav-item">
        {{-- tanda (*) pada dashboard/posts* adalah nanti dia akan lihat apapun yg ada setelah posts, akan membuat halaman ini active --}}
        <a class="nav-link {{ Request::is('dashboard/datasiswa*') ? 'active' : '' }}" href="/dashboard/datasiswa">
          <span data-feather="file-text" class="align-text-bottom"></span>
          Data Siswa PPDB
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ Request::is('dashboard/tambahadmin') ? 'active' : '' }}" aria-current="page" href="/dashboard/tambahadmin">
          <span data-feather="edit" class="align-text-bottom"></span>
          Tambah Admin Baru
        </a>
      </li>
    </ul>
  </div>
</nav>