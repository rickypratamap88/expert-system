<div class="app-sidebar sidebar-shadow">
    <div class="app-header__logo">
        <div class="logo-src"></div>
        <div class="header__pane ml-auto">
            <div>
                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </div>
    </div>
    <div class="app-header__mobile-menu">
        <div>
            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </button>
        </div>
    </div>
    <div class="app-header__menu">
        <span>
            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                <span class="btn-icon-wrapper">
                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                </span>
            </button>
        </span>
    </div>    <div class="scrollbar-sidebar">
        <div class="app-sidebar__inner">
            <ul class="vertical-nav-menu">
                <li class="app-sidebar__heading">Dashboards</li>
                <li>
                    <a href="/admin/dashboard" class="{{ Request::is('admin/dashboard') ? 'mm-active' : '' }}">
                        <i class="metismenu-icon pe-7s-rocket"></i>
                        Dashboard
                    </a>
                </li>

                <li class="app-sidebar__heading">Expert System</li>
                <li>
                    <a href="/admin/symptoms" class="{{ Request::is('admin/symptoms') ? 'mm-active' : '' }}">
                        <i class="metismenu-icon pe-7s-graph1"></i>
                        Symptoms
                    </a>
                </li>
                <li>
                    <a href="/admin/diseases" class="{{ Request::is('admin/diseases') ? 'mm-active' : '' }}">
                        <i class="metismenu-icon pe-7s-vector"></i>
                        Diseases
                    </a>
                </li>
                <li>
                    <a href="/admin/rules" class="{{ Request::is('admin/rules') ? 'mm-active' : '' }}">
                        <i class="metismenu-icon pe-7s-eyedropper"></i>
                        Rules
                    </a>
                </li>

                <li class="app-sidebar__heading">Blog</li>
                <li>
                    <a href="#">
                        <i class="metismenu-icon pe-7s-diamond"></i>
                        Blogs
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul>
                        <li>
                            <a href="elements-buttons-standard.html">
                                <i class="metismenu-icon"></i>
                                Posts
                            </a>
                        </li>
                        <li>
                            <a href="elements-dropdowns.html">
                                <i class="metismenu-icon"></i>
                                New Post
                            </a>
                        </li>
                        <li>
                            <a href="elements-icons.html">
                                <i class="metismenu-icon"></i>
                                Categories
                            </a>
                        </li>
                        <li>
                            <a href="elements-icons.html">
                                <i class="metismenu-icon"></i>
                                Tags
                            </a>
                        </li>
                        
                    </ul>
                </li>
                
            </ul>
        </div>
    </div>
</div>    