<div class="nk-sidebar nk-sidebar-fixed is-dark " data-content="sidebarMenu">
                <div class="nk-sidebar-element nk-sidebar-head">
                    <div class="nk-menu-trigger">
                        <a href="#" class="nk-nav-toggle nk-quick-nav-icon d-xl-none" data-target="sidebarMenu"><em class="icon ni ni-arrow-left"></em></a>
                        <a href="#" class="nk-nav-compact nk-quick-nav-icon d-none d-xl-inline-flex" data-target="sidebarMenu"><em class="icon ni ni-menu"></em></a>
                    </div>
                    <div class="nk-sidebar-brand">
                        <a href="{{route('home')}}" class="logo-link nk-sidebar-logo">
                            <img class="logo-light logo-img" src="./images/logo.png" srcset="./images/logo2x.png 2x" alt="logo">
                            <img class="logo-dark logo-img" src="./images/logo-dark.png" srcset="./images/logo-dark2x.png 2x" alt="logo-dark">
                        </a>
                    </div>
                </div><!-- .nk-sidebar-element -->
               
                <div class="nk-sidebar-element nk-sidebar-body">
                    <div class="nk-sidebar-content">
                        <div class="nk-sidebar-menu" data-simplebar>
                            <ul class="nk-menu">
                                <li class="nk-menu-item">
                                    <a href="{{route('home')}}" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-dashlite"></em></span>
                                        <span class="nk-menu-text">Dashboard</span>
                                    </a>
                                </li><!-- .nk-menu-item -->
                                
                                <li class="nk-menu-heading">
                                    <h6 class="overline-title text-primary-alt">Amaliyot</h6>
                                </li><!-- .nk-menu-heading -->
                                <li class="nk-menu-item has-sub">
                                    <a href="{{route('admin.book.index')}}" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-list"></em></span>
                                        <span class="nk-menu-text">Kitoblar</span>
                                    </a>
                                    
                                </li><!-- .nk-menu-item -->
                                <li class="nk-menu-item">
                                    <a href="{{route('admin.member.index')}}" class="nk-menu-link">
                                        <span class="nk-menu-icon"><i class="icon ni ni-users"></i></span>
                                        
                                        <span class="nk-menu-text">Talabalar</span>
                                    </a>
                                    
                                </li><!-- .nk-menu-item -->
                                <li class="nk-menu-item">
                                    <a href="{{route('admin.user.index')}}" class="nk-menu-link">
                                        <span class="nk-menu-icon"><i class="icon ni ni-users"></i></span>
                                        
                                        <span class="nk-menu-text">Xodimlar</span>
                                    </a>
                                    
                                </li><!-- .nk-menu-item -->
                                
                                <li class="nk-menu-item has-sub">
                                    <a href="#" class="nk-menu-link ">
                                        <span class="nk-menu-icon"><em class="icon ni ni-tranx"></em></span>
                                        <span class="nk-menu-text">Transactions</span>
                                    </a>
                                    
                                </li><!-- .nk-menu-item -->
                                
                            </ul><!-- .nk-menu -->
                        </div><!-- .nk-sidebar-menu -->
                    </div><!-- .nk-sidebar-content -->
                </div><!-- .nk-sidebar-element -->
            </div>