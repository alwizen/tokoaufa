<ul
    class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion"
    id="accordionSidebar"
    >
    <!-- Sidebar - Brand -->
    <a
        class="sidebar-brand d-flex align-items-center justify-content-center"
        href="index.html"
    >
        <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-fire"></i>
        </div>
        <div class="sidebar-brand-text mx-2">Website <sup>com</sup></div>
    </a>

    <!-- Heading -->
    <div class="sidebar-heading">Master</div>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('product.index') }}">
        <i class="fas fa-fw fa-table"></i>
        <span>Data Barang</span></a
        >
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('client.index') }}">
        <i class="fas fa-fw fa-table"></i>
        <span>Data Pelanggan</span></a
        >
    </li>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a
        class="nav-link collapsed"
        href="#"
        data-toggle="collapse"
        data-target="#collapseTwo"
        aria-expanded="true"
        aria-controls="collapseTwo"
        >
        <i class="fas fa-fw fa-cog"></i>
        <span>Components</span>
        </a>
        <div
        id="collapseTwo"
        class="collapse"
        aria-labelledby="headingTwo"
        data-parent="#accordionSidebar"
        >
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Components:</h6>
            <a class="collapse-item" href="buttons.html">Buttons</a>
            <a class="collapse-item" href="cards.html">Cards</a>
        </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider" />

    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="tables.html">
        <i class="fas fa-fw fa-table"></i>
        <span>Tables</span></a
        >
    </li>

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
    </ul>