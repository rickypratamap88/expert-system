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
    </div>    
    <div class="scrollbar-sidebar">
        <div class="app-sidebar__inner">
            @if (Request::is('admin*'))
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

                    <li class="app-sidebar__heading">Settings</li>
                    <li>
                        <a href="/admin/profile" class="{{ Request::is('admin/profile') ? 'mm-active' : '' }}">
                            <i class="metismenu-icon pe-7s-eyedropper"></i>
                            Profile
                        </a>
                    </li>
                </ul>
            @else
            <ul class="vertical-nav-menu">
                    <li class="app-sidebar__heading">Dashboards</li>
                    <li>
                        <a href="/users/dashboard" class="{{ Request::is('users/dashboard') ? 'mm-active' : '' }}">
                            <i class="metismenu-icon pe-7s-rocket"></i>
                            Dashboard
                        </a>
                    </li>

                    <li class="app-sidebar__heading">Expert System</li>
                    <li>
                        <a href="/users/diagnosis" class="{{ Request::is('users/diagnosis') ? 'mm-active' : '' }}">
                            <i class="metismenu-icon pe-7s-rocket"></i>
                            Diagnosis
                        </a>
                    </li>

                    <li class="app-sidebar__heading">Settings</li>
                    <li>
                        <a href="/users/profile" class="{{ Request::is('users/profile') ? 'mm-active' : '' }}">
                            <i class="metismenu-icon pe-7s-eyedropper"></i>
                            Profile
                        </a>
                    </li>
                </ul>
            @endif
        </div>
    </div>
</div>    