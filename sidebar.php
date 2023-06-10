<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-solid fa-mug-hot"></i>
        </div>
        <div class="sidebar-brand-text mx-1">MyCafe</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- chart dwo-->
    <li class="nav-item active">
        <a class="nav-link" href="dashboard.php">
            <i class="fas fa-solid fa-clipboard-list"></i>
            <span>Category</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="item.php">
            <i class="fas fa-solid fa-box"></i>
            <span>Item</span></a>
    </li>

    </li>
    <li class="nav-item">
        <a class="nav-link" href="order.php">
            <i class="fas fa-solid fa-scroll"></i>
            <span>Order</span></a>
    </li>


    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">
    <div class="sidebar-heading">
        Manajemen Data
    </div>
    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <span>Information Table</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="datakategori.php">Data Kategori</a>
                <a class="collapse-item" href="factSales.php">Data Item</a>
                <a class="collapse-item" href="factPurchase.php">Data Sales</a>
            </div>
        </div>
    </li>

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>


</ul>