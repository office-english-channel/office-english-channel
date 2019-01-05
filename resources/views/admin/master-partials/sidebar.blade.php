<div class="page-sidebar-wrapper">
    <!-- BEGIN SIDEBAR -->
    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
    <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
    <div class="page-sidebar navbar-collapse collapse">
        <!-- BEGIN SIDEBAR MENU -->
        <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
        <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
        <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
        <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
        <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
        <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
        <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
            <li class="nav-item start @if(Request::segment(2)=='home') {!! 'active open' !!} @endif">
                <a href="{!! URL::route('admin.home') !!}" class="nav-link">
                    <i class="icon-home"></i>
                    <span class="title">Home</span>
                </a>
            </li>
            <li class="nav-item @if(Request::segment(2)=='administrators' || Request::segment(2)=='categories' || Request::segment(2)=='sub-categories' || Request::segment(2)=='vendors' || Request::segment(2)=='subscribers' || Request::segment(2)=='contactforms' || Request::segment(2)=='inquiryforms' || Request::segment(2)=='servicerequests' || Request::segment(2)=='settings' || Request::segment(2)=='pages' || Request::segment(2)=='footer-links' || Request::segment(2)=='menus') {!! 'active open' !!} @endif">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="icon-diamond"></i>
                    <span class="title">General Modules</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item @if(Request::segment(2)=='administrators') {!! 'active' !!} @endif">
                        <a href="{!! URL::route('admin.administrators.index') !!}" class="nav-link ">
                            <span class="title">Administrators</span>
                        </a>
                    </li>

                    <li class="nav-item @if(Request::segment(2)=='pages') {!! 'active' !!} @endif">
                        <a href="{!! URL::route('admin.general.pages.index') !!}" class="nav-link ">
                            <span class="title">Pages</span>
                        </a>
                    </li>

                    <li class="nav-item @if(Request::segment(2)=='footer-links') {!! 'active' !!} @endif">
                        <a href="{!! URL::route('admin.general.footerlinks.index') !!}" class="nav-link ">
                            <span class="title">Footer Links</span>
                        </a>
                    </li>

                    <li class="nav-item @if(Request::segment(2)=='menus') {!! 'active' !!} @endif">
                        <a href="{!! URL::route('admin.general.menus.index') !!}" class="nav-link ">
                            <span class="title">Menus</span>
                        </a>
                    </li>
                    <li class="nav-item  @if(Request::segment(2)=='categories') {!! 'active' !!} @endif">
                        <a href="{!! URL::route('admin.categories.index') !!}" class="nav-link ">
                            <span class="title">Categories</span>
                        </a>
                    </li>
                    <li class="nav-item  @if(Request::segment(2)=='sub-categories') {!! 'active' !!} @endif">
                        <a href="{!! URL::route('admin.subcategories.index') !!}" class="nav-link ">
                            <span class="title">Sub Categories</span>
                        </a>
                    </li>
                    <li class="nav-item  @if(Request::segment(2)=='vendors') {!! 'active' !!} @endif">
                        <a href="{!! URL::route('admin.vendors.index') !!}" class="nav-link ">
                            <span class="title">Vendors</span>
                        </a>
                    </li>
                    <li class="nav-item  @if(Request::segment(2)=='subscribers') {!! 'active' !!} @endif">
                        <a href="{!! URL::route('admin.subscribers.index') !!}" class="nav-link ">
                            <span class="title">Subscribers</span>
                        </a>
                    </li>
                    <li class="nav-item  @if(Request::segment(2)=='contactforms') {!! 'active' !!} @endif">
                        <a href="{!! URL::route('admin.contactforms.index') !!}" class="nav-link ">
                            <span class="title">Contact Forms</span>
                        </a>
                    </li>
                    <li class="nav-item  @if(Request::segment(2)=='inquiryforms') {!! 'active' !!} @endif">
                        <a href="{!! URL::route('admin.inquiryforms.index') !!}" class="nav-link ">
                            <span class="title">Inquiry Forms</span>
                        </a>
                    </li>
                    <li class="nav-item  @if(Request::segment(2)=='servicerequests') {!! 'active' !!} @endif">
                        <a href="{!! URL::route('admin.servicerequests.index') !!}" class="nav-link ">
                            <span class="title">Service Requests</span>
                        </a>
                    </li>
                    <li class="nav-item  @if(Request::segment(2)=='settings') {!! 'active' !!} @endif">
                        <a href="{!! URL::route('admin.settings.edit', 1) !!}" class="nav-link ">
                            <span class="title">General Settings</span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
        <!-- END SIDEBAR MENU -->
    </div>
    <!-- END SIDEBAR -->
</div>
