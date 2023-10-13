<nav class="navbar-vertical navbar">
    <div class="vh-100" data-simplebar>

        <h1 class="navbar-brand">MyWebSite</h1>
        <!-- Navbar nav -->
        <ul class="navbar-nav flex-column" id="sideNavbar">
            <!-- Nav item -->
            <li class="nav-item ">
                <a class="nav-link   collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#navCMS"
                    aria-expanded="false" aria-controls="navCMS">
                    <i class="nav-icon fe fe-book-open me-2"></i> CMS
                </a>


                <div id="navCMS"
                    class="collapse {{ substr(Request::route()->getPrefix(), 0, 3) == 'cms' ? 'show' : '' }}"
                    data-bs-parent="#sideNavbar">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link  {{ Request::routeIs('admin.cms.overview') ? 'active' : '' }}   "
                                href="{{ route('admin.cms.overview') }}">
                                Overview
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  " href="{{ route('admin.cms.posts') }}">
                                All Post
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  {{ Request::routeIs('admin.cms.posts.create') ? 'active' : '' }} "
                                href="{{ route('admin.cms.posts.create') }}">
                                New Post
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Request::routeIs('admin.cms.category') ? 'active' : '' }} "
                                href="{{ route('admin.cms.category') }}">
                                Category
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <!-- Nav item -->
            <li class="nav-item">
                <div class="nav-divider"></div>
            </li>
        </ul>
    </div>
</nav>
