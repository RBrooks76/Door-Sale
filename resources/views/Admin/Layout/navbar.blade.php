<div class="header-menu-wrapper header-menu-wrapper-left" id="kt_header_menu_wrapper">
    <div class="container">
        <!--begin::Header Menu-->
        <div id="kt_header_menu" class="header-menu header-menu-left header-menu-mobile header-menu-layout-default header-menu-root-arrow">
            <!--begin::Header Nav-->
            <ul class="menu-nav">
                <li class="menu-item menu-item-submenu menu-item-rel {{ $nav == 'AdminList' ? ' menu-item-open menu-item-here' : '' }} {{ $nav == 'UserList' ? ' menu-item-open menu-item-here' : '' }}" data-menu-toggle="click" aria-haspopup="true">
                    <a href="" class="menu-link menu-toggle">
                        <span class="menu-text">Users</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="menu-submenu menu-submenu-classic menu-submenu-left">
                        <ul class="menu-subnav">
                            <li class="menu-item {{ $nav == 'AdminList' ? ' menu-item-active' : '' }}" aria-haspopup="true">
                                <a href="{{ route('toAdminList') }}" class="menu-link">
                                    <span class="menu-text">Admin List</span>
                                    <span class="menu-desc"></span>
                                </a>
                            </li>
                            <li class="menu-item {{ $nav == 'UserList' ? ' menu-item-active' : '' }}" aria-haspopup="true">
                                <a href="{{ route('toUserList') }}" class="menu-link">
                                    <span class="menu-text">User List</span>
                                    <span class="menu-desc"></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="menu-item menu-item-submenu menu-item-rel {{$nav == 'student' ? ' menu-item-open menu-item-here' : ''}}" data-menu-toggle="click" aria-haspopup="true">
                    <a href="" class="menu-link menu-toggle">
                        <span class="menu-text">Products</span>
                        <span class="menu-desc"></span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="menu-submenu menu-submenu-classic menu-submenu-left">
                        <ul class="menu-subnav">
                            <li class="menu-item" aria-haspopup="true">
                                <a href="{{ route('toUploadImage') }}" class="menu-link">
                                    <span class="menu-text">Upload Image</span>
                                    <span class="menu-desc"></span>
                                </a>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="" class="menu-link">
                                    <span class="menu-text">Add Student</span>
                                    <span class="menu-desc"></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="menu-item menu-item-submenu menu-item-rel {{$nav == 'indexes' ? ' menu-item-open menu-item-here' : ''}}" data-menu-toggle="click" aria-haspopup="true">
                    <a href="javascript:;" class="menu-link menu-toggle">
                        <span class="menu-text">Add Indexes</span>
                        <span class="menu-desc"></span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="menu-submenu menu-submenu-classic menu-submenu-left">
                        <ul class="menu-subnav">
                            <li class="menu-item menu-item-submenu" data-menu-toggle="hover" aria-haspopup="true">
                                <a href="javascript:;" class="menu-link menu-toggle">
                                    <span class="menu-text">Cabinet Vision</span>
                                    <i class="menu-arrow"></i>
                                </a>
                                <div class="menu-submenu menu-submenu-classic menu-submenu-right">
                                    <ul class="menu-subnav">
                                        <li class="menu-item" aria-haspopup="true">
                                            <a href="{{ route('toDoorStyle') }}" class="menu-link">
                                                <i class="menu-bullet menu-bullet-dot">
                                                    <span></span>
                                                </i>
                                                <span class="menu-text">Door Style</span>
                                            </a>
                                        </li>
                                        <li class="menu-item" aria-haspopup="true">
                                            <a href="{{ route('toHingeType') }}" class="menu-link">
                                                <i class="menu-bullet menu-bullet-dot">
                                                    <span></span>
                                                </i>
                                                <span class="menu-text">Hinge Type</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
                {{-- <li class="menu-item menu-item-submenu menu-item-rel" data-menu-toggle="click" aria-haspopup="true">
                    <a href="javascript:;" class="menu-link menu-toggle">
                        <span class="menu-text">Apps</span>
                        <span class="menu-desc"></span>
                        <i class="menu-arrow"></i>
                    </a>
                </li>
                <li class="menu-item menu-item-submenu" data-menu-toggle="click" aria-haspopup="true">
                    <a href="javascript:;" class="menu-link menu-toggle">
                        <span class="menu-text">Pages</span>
                        <span class="menu-desc"></span>
                        <i class="menu-arrow"></i>
                    </a>
                </li> --}}
            </ul>
            <!--end::Header Nav-->
        </div>
        <!--end::Header Menu-->
    </div>
</div>
