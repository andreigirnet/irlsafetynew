<!-- ========== Horizontal Menu Start ========== -->
<div class="topnav">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg">
            <div class="collapse navbar-collapse" id="topnav-menu-content">
                <ul class="navbar-nav">
                    
                    <!-- Dashboard -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}" id="topnav-dashboards" role="button">
                            <i class="ri-home-2-fill"></i>Dashboard
                        </a>
                    </li>

                    <!-- Profile -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none {{ request()->routeIs('admin.en.profile') ? 'active' : '' }}" href="{{ route('admin.en.profile') }}" role="button">
                            <i class="ri-user-3-fill"></i>Profile
                        </a>
                    </li>

                    <!-- My Courses -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none {{ request()->routeIs('package.index') ? 'active' : '' }}" href="{{ route('package.index') }}" role="button">
                            <i class="ri-list-ordered"></i>My Courses
                        </a>
                    </li>

                    <!-- For Companies (Dropdown - Highlights parent if any child route matches) -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none {{ request()->routeIs('dashboard.employer', 'register.employee') ? 'active' : '' }}" href="#" id="topnav-companies" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="ri-team-fill"></i>For Companies <div class="arrow-down"></div>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="topnav-companies">
                            <div class="dropdown">
                                <a class="dropdown-item arrow-none {{ request()->routeIs('dashboard.employer') ? 'active' : '' }}" href="{{ route('dashboard.employer') }}" role="button">
                                    Company Dashboard
                                </a>
                            </div>
                            <div class="dropdown">
                                <a class="dropdown-item arrow-none {{ request()->routeIs('register.employee') ? 'active' : '' }}" href="{{ route('register.employee') }}" role="button">
                                    Register Employee
                                </a>
                            </div>
                        </div>
                    </li>

                    <!-- Payments (Dropdown - Highlights parent if Basket or Orders match) -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none {{ request()->routeIs('basket.index', 'order.index.user') ? 'active' : '' }}" href="#" id="topnav-payments" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="ri-money-euro-circle-fill"></i>Payments <div class="arrow-down"></div>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="topnav-payments">
                            <div class="dropdown">
                                <a class="dropdown-item arrow-none {{ request()->routeIs('basket.index') ? 'active' : '' }}" href="{{ route('basket.index') }}" role="button">
                                    Basket
                                </a>
                            </div>
                            <div class="dropdown">
                                <a class="dropdown-item arrow-none {{ request()->routeIs('order.index.user') ? 'active' : '' }}" href="{{ route('order.index.user') }}" role="button">
                                    Orders
                                </a>
                            </div>
                        </div>
                    </li>

                    <!-- Certificates -->
                    <li class="nav-item dropdown">
                        <a class="nav-link arrow-none {{ request()->routeIs('certificate.index') ? 'active' : '' }}" href="{{ route('certificate.index') }}" id="topnav-layouts" role="button">
                            <i class="ri-file-paper-2-fill"></i>Certificates
                        </a>
                    </li>

                    <!-- Admin Menu -->
                    @if(auth()->user()->is_admin)
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle arrow-none {{ request()->routeIs('admin.dashboard', 'users.index', 'orders.index', 'packages.admin.index', 'certificates.admin.index', 'admin.blogs.index') ? 'active' : '' }}" href="#" id="topnav-admin" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="ri-briefcase-line"></i>For Admin <div class="arrow-down"></div>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="topnav-admin">
                                <div class="dropdown">
                                    <a class="dropdown-item arrow-none {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}" href="{{ route('admin.dashboard') }}" role="button">
                                        Dashboard Metrics
                                    </a>
                                </div>
                                <div class="dropdown">
                                    <a class="dropdown-item arrow-none {{ request()->routeIs('users.index') ? 'active' : '' }}" href="{{ route('users.index') }}" role="button">
                                        Users
                                    </a>
                                </div>
                                <div class="dropdown">
                                    <a class="dropdown-item arrow-none {{ request()->routeIs('orders.index') ? 'active' : '' }}" href="{{ route('orders.index') }}" role="button">
                                        Orders
                                    </a>
                                </div>
                                <div class="dropdown">
                                    <a class="dropdown-item arrow-none {{ request()->routeIs('packages.admin.index') ? 'active' : '' }}" href="{{ route('packages.admin.index') }}" role="button">
                                        Packages
                                    </a>
                                </div>
                                <div class="dropdown">
                                    <a class="dropdown-item arrow-none {{ request()->routeIs('certificates.admin.index') ? 'active' : '' }}" href="{{ route('certificates.admin.index') }}" role="button">
                                        Certificates
                                    </a>
                                </div>
                                <div class="dropdown">
                                    <a class="dropdown-item arrow-none {{ request()->routeIs('admin.blogs.index') ? 'active' : '' }}" href="{{ route('admin.blogs.index') }}" role="button">
                                        Blogs
                                    </a>
                                </div>
                            </div>
                        </li>
                    @endif

                </ul>
            </div>
        </nav>
    </div>
</div>
<!-- ========== Horizontal Menu End ========== -->