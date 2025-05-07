<div class="sidebar-wrapper">
    <nav class="mt-2">
        <!--begin::Sidebar Menu-->
        <ul
            class="nav sidebar-menu flex-column"
            data-lte-toggle="treeview"
            role="menu"
            data-accordion="false"
        >
            <li class="nav-header">Admin Panel</li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="fas fa-align-justify"></i>
                    <p>
                        Posts
                        <span class="badge badge-info right">{{$posts->total()}}</span>
                    </p>
                </a>
            </li>
        </ul>
        <!--end::Sidebar Menu-->
    </nav>
</div>
