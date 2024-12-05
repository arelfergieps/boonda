<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
  
    <div class="app-brand demo">
    <a href="index.html" class="app-brand-link">
        <span class="app-brand-logo demo">
            <!-- Gantikan SVG dengan img logo kustom -->
            <img src="{{ asset('user/imgs/logoboonda.png') }}" alt="Logo" width="100">
      
    </a>

    <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
        <i class="bx bx-chevron-left bx-sm d-flex align-items-center justify-content-center"></i>
    </a>
</div>


    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
     
      <!-- Tables -->
      <li class="menu-item">
        <a href="{{ route('images.index')}}" class="menu-link">
          <i class="menu-icon tf-icons bi bi-easel2-fill"></i>
          <div class="text-truncate" data-i18n="Tables">Input Gambar</div>
        </a>
      </li>
      <!-- Data Tables -->
      
      <!-- Misc -->
      <li class="menu-header small"><span class="menu-header-text">BoondaChildCare</span></li>
      {{-- <li class="menu-item">
        <a
          href="https://github.com/themeselection/sneat-html-admin-template-free/issues"
          target="_blank"
          class="menu-link">
          <i class="menu-icon tf-icons bi bi-easel2-fill"></i>
          <div class="text-truncate" data-i18n="Support">Support</div>
        </a>
      </li>
      <li class="menu-item">
        <a
          href="https://demos.themeselection.com/sneat-bootstrap-html-admin-template/documentation/"
          target="_blank"
          class="menu-link">
          <i class="menu-icon tf-icons bx bx-file"></i>
          <div class="text-truncate" data-i18n="Documentation">Documentation</div>
        </a>
      </li> --}}
    </ul>
  </aside>