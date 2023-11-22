<div class="navbar-bg"></div>
<nav class="navbar navbar-expand-lg main-navbar">
    <form class="form-inline mr-auto">
        <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i
                        class="fas fa-search"></i></a></li>
        </ul>

    </form>
    <ul class="navbar-nav navbar-right">

        <li class="dropdown"><a href="#" data-toggle="dropdown"
                class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                <img alt="image" src="{{ auth()->user()->avatar }}" class="rounded-circle mr-1">
                <div class="d-sm-none d-lg-inline-block">Hi, {{ auth()->user()->name }}</div>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <a href="{{ route('admin.profile') }}" class="dropdown-item has-icon">
                    <i class="far fa-user"></i> Profile
                </a>
                <a href="{{ route('admin.settings.index') }}" class="dropdown-item has-icon">
                    <i class="fas fa-cog"></i> Settings
                </a>
                <div class="dropdown-divider"></div>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                    this.closest('form').submit();" class="dropdown-item has-icon text-danger">
                        <i class="fas fa-sign-out-alt"></i> Logout
                    </a>
                </form>
            </div>
        </li>
    </ul>
</nav>
<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ route('admin.dashboard.index') }}">{{ config('settings.site_name') }}</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{ route('admin.dashboard.index') }}">{{ truncate(config('settings.site_name'), 2) }}</a>
        </div>
        <ul class="sidebar-menu">

            <li class="menu-header">Starter</li>
            <li class="{{ setSidebarActive(['admin.dashboard.index']) }}"><a class="nav-link" href="{{ route('admin.dashboard.index') }}"><i class="fas fa-fire"></i> <span>Dashboard</span></a></li>

            @can('section index')
            <li class="dropdown {{ setSidebarActive([
                'admin.hero.index',
                'admin.our-features.index',
                'admin.counter.index',
                'admin.section-title.index'
                ]) }}">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i
                        class="fas fa-columns"></i> <span>Sections</span></a>

                <ul class="dropdown-menu">
                    <li class="{{ setSidebarActive(['admin.hero.index']) }}"><a class="nav-link" href="{{ route('admin.hero.index') }}">Hero</a></li>
                    <li class="{{ setSidebarActive(['admin.our-features.index']) }}"><a class="nav-link" href="{{ route('admin.our-features.index') }}">Our Features</a></li>
                    <li class="{{ setSidebarActive(['admin.counter.index']) }}"><a class="nav-link" href="{{ route('admin.counter.index') }}">Counter</a></li>
                    <li class="{{ setSidebarActive(['admin.section-title.index']) }}"><a class="nav-link" href="{{ route('admin.section-title.index') }}">Section Titles</a></li>

                </ul>
            </li>
            @endcan

            @canany(['listing index', 'pending listing', 'listing review', 'listing claims'])
            <li class="dropdown {{
                setSidebarActive([
                    'admin.category.*',
                    'admin.location.*',
                    'admin.amenity.*',
                    'admin.listing.*',
                    'admin.pending-listing.*',
                    'admin.listing-reviews.*',
                    'admin.listing-claims.*'
                ])
            }}">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-list"></i> <span>Listings</span></a>
                <ul class="dropdown-menu">
                    @can('listing index')
                    <li class="{{ setSidebarActive(['admin.category.*']) }}"><a class="nav-link" href="{{ route('admin.category.index') }}">Categories</a></li>
                    <li class="{{ setSidebarActive(['admin.location.*']) }}"><a class="nav-link" href="{{ route('admin.location.index') }}">Lcoation</a></li>
                    <li class="{{ setSidebarActive(['admin.amenity.*']) }}"><a class="nav-link" href="{{ route('admin.amenity.index') }}">Amenities</a></li>

                    <li class="{{ setSidebarActive(['admin.listing.*']) }}"><a class="nav-link" href="{{ route('admin.listing.index') }}">All Listing</a></li>
                    @endcan
                    @can('pending listing')
                    <li class="{{ setSidebarActive(['admin.pending-listing.*']) }}"><a class="nav-link" href="{{ route('admin.pending-listing.index') }}">Pending Listings</a></li>
                    @endcan
                    @can('listing review')
                    <li class="{{ setSidebarActive(['admin.listing-reviews.index']) }}"><a class="nav-link" href="{{ route('admin.listing-reviews.index') }}">Listing Reviews</a></li>
                    @endcan
                    @can('listing claims')
                    <li class="{{ setSidebarActive(['admin.listing-claims.index']) }}"><a class="nav-link" href="{{ route('admin.listing-claims.index') }}">Claims</a></li>
                    @endcan
                </ul>
            </li>
            @endcanany

            @can('package index')
            <li class="dropdown {{ setSidebarActive(['admin.packages.*', 'admin.payment-settings.index']) }}">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-dollar-sign"></i> <span>Manage Packages</span></a>

                <ul class="dropdown-menu">
                    <li class="{{ setSidebarActive(['admin.packages.index']) }}"><a class="nav-link" href="{{ route('admin.packages.index') }}">Packages</a></li>
                    @can('payment settings index')
                    <li class="{{ setSidebarActive(['admin.payment-settings.index']) }}"><a class="nav-link" href="{{ route('admin.payment-settings.index') }}">Payment Settings</a></li>
                    @endcan
                </ul>
            </li>
            @endcan

            @can('order index')
            <li class="{{ setSidebarActive(['admin.orders.index']) }}"><a class="nav-link" href="{{ route('admin.orders.index') }}"><i class="fas fa-cart-arrow-down"></i> <span>Order</span></a></li>
            @endcan
            @can('message index')
            <li class="{{ setSidebarActive(['admin.messages.index']) }}"><a class="nav-link" href="{{ route('admin.messages.index') }}"><i class="fas fa-comment-alt"></i> <span>Messages</span></a></li>
            @endcan

            @can('testimonial index')
            <li class="{{ setSidebarActive(['admin.testimonials.index']) }}" ><a class="nav-link" href="{{ route('admin.testimonials.index') }}"><i class="fas fa-star"></i> <span>Testimonials</span></a></li>
            @endcan

            @can('blog index')
            <li class="dropdown {{ setSidebarActive([
                'admin.blog-category.*',
                'admin.blog.*',
                'admin.blog-comment.index'
                ]) }}">

                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fab fa-blogger-b"></i> <span>Manage Blog</span></a>

                <ul class="dropdown-menu"
                {{ setSidebarActive([
                    'admin.packages.*',
                ]) }}
                >
                    <li class="{{ setSidebarActive(['admin.blog-category.index']) }}"><a class="nav-link" href="{{ route('admin.blog-category.index') }}">Blog Categories</a></li>
                    <li class="{{ setSidebarActive(['admin.blog.index']) }}"><a class="nav-link" href="{{ route('admin.blog.index') }}">Blog</a></li>
                    <li class="{{ setSidebarActive(['admin.blog-comment.index']) }}"><a class="nav-link" href="{{ route('admin.blog-comment.index') }}">Comments</a></li>

                </ul>
            </li>
            @endcan

            @canany(['about index', 'contact index', 'parivacy policy index', 'terms and condition index'])
            <li class="dropdown {{ setSidebarActive([
                'admin.about-us.index',
                'admin.contact.index',
                'admin.privacy-policy.index',
                'admin.terms-and-condition.index'
                ]) }}">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-file-alt"></i> <span>Pages</span></a>

                <ul class="dropdown-menu"
                {{ setSidebarActive([
                    'admin.packages.*',
                ]) }}
                >
                @can('about index')
                <li class="{{ setSidebarActive(['admin.about-us.index']) }}"><a class="nav-link" href="{{ route('admin.about-us.index') }}">About Us</a></li>
                @endcan
                @can('contact index')
                <li class="{{ setSidebarActive(['admin.contact.index']) }}"><a class="nav-link" href="{{ route('admin.contact.index') }}">Contact</a></li>
                @endcan
                @can('parivacy policy index')
                <li class="{{ setSidebarActive(['admin.privacy-policy.index']) }}"><a class="nav-link" href="{{ route('admin.privacy-policy.index') }}">Privacy Policy</a></li>
                @endcan
                @can('terms and condition index')
                <li class="{{ setSidebarActive(['admin.terms-and-condition.index']) }}"><a class="nav-link" href="{{ route('admin.terms-and-condition.index') }}">Terms and Conditions</a></li>
                @endcan

                </ul>
            </li>
            @endcanany

            @can('footer index')
            <li class="dropdown {{ setSidebarActive(['admin.footer-info.index', 'admin.social-link.*]']) }}">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-info"></i> <span>Manage Footer</span></a>

                <ul class="dropdown-menu">
                    <li class="{{ setSidebarActive(['admin.footer-info.index']) }}"><a class="nav-link" href="{{ route('admin.footer-info.index') }}">Footer Info</a></li>
                    <li class="{{ setSidebarActive(['admin.social-link.*']) }}"><a class="nav-link" href="{{ route('admin.social-link.index') }}">Social Links</a></li>


                </ul>
            </li>
            @endcan

            @can('access management index')
            <li class="dropdown {{ setSidebarActive(['admin.hero.index']) }}">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-fingerprint"></i> <span>Access Management</span></a>

                <ul class="dropdown-menu">
                    <li class="{{ setSidebarActive(['admin.role-user.*']) }}"><a class="nav-link" href="{{ route('admin.role-user.index') }}">Roles Users</a></li>

                    <li class="{{ setSidebarActive(['admin.role.*']) }}"><a class="nav-link" href="{{ route('admin.role.index') }}">Roles and Permissions</a></li>

                </ul>
            </li>
            @endcan

            @can('menu builder index')
            <li class="{{ setSidebarActive(['admin.menu-builder.index']) }}"><a class="nav-link" href="{{ route('admin.menu-builder.index') }}"><i class="fas fa-wrench"></i> <span>Menu Builder</span></a></li>
            @endcan

            @can('settings index')
            <li class="{{ setSidebarActive(['admin.settings.index']) }}" ><a class="nav-link" href="{{ route('admin.settings.index') }}"><i class="fas fa-cogs"></i> <span>Settings</span></a></li>
            @endcan

            @can('settings index')
            <li class="{{ setSidebarActive(['admin.clear-database.index']) }}" ><a class="nav-link" href="{{ route('admin.clear-database.index') }}"><i class="fas fa-skull-crossbones"></i> <span>Wipe Database</span></a></li>
            @endcan
        </ul>
    </aside>
</div>
