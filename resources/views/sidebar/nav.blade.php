        <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0">
            <div class="container-fluid d-flex flex-column p-0">
                <a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="{{ route('admin.admin.home') }}">
                    <div class="sidebar-brand-text mx-3">
                        <span>Admin</span>
                    </div>
                </a>
                <ul class="navbar-nav text-light" id="accordionSidebar">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.admin.home') }}">
                            <i class="fas fa-tachometer-alt"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="terms/create.html">
                            <i class="fas fa-user"></i>
                            <span>Profile</span>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#">
                            <i class="fas fa-user"></i>
                            Users
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">
                                View all users
                            </a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#">
                            <i class="fas fa-plus"></i>
                            Terms conditions
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="terms/create.html">
                                Create
                            </a>
                            <a class="dropdown-item" href="terms/index.html">
                                View all
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>