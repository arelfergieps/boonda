<aside id="sidebar" class="sidebar">
  <ul class="sidebar-nav" id="sidebar-nav">
      <li class="nav-item">
          <a class="nav-link " href="{{ route('admin.dashboard') }}">
              <i class="bi bi-grid"></i>
              <span>Dashboard</span>
          </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" type="submit" href="{{ route('images.index') }}">
            <i class="bi bi-megaphone"></i>
            <span>Input Image</span>
        </a>
    </li>
      <li class="nav-item">
          <a class="nav-link collapsed" type="submit" href="{{ route('admin.logout') }}">
              <i class="bi bi-box-arrow-right"></i>
              <span>Log Out</span>
          </a>
      </li>
  </ul>
</aside>
