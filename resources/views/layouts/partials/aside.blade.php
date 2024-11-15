<div class="aside-menu flex-column-fluid">
    <!--begin::Aside Menu-->
    <div class="hover-scroll-overlay-y" id="kt_aside_menu_wrapper" data-kt-scroll="true"
         data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-height="auto"
         data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer"
         data-kt-scroll-wrappers="#kt_aside_menu" data-kt-scroll-offset="0">
        <!--begin::Menu-->
        <div
            class="menu menu-column menu-title-gray-800 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500"
            id="#kt_aside_menu" data-kt-menu="true">

            <!--begin:Menu item-->
            <div class="menu-item pt-5">
                <!--begin:Menu content-->
                <div class="menu-content">
                    <span class="menu-heading fw-bold text-uppercase fs-7">
                        <span class="fs-7">
                            Pop Ads
                        </span>
                    </span>
                </div>
            </div>

            <div class="menu-item">
                <a class="menu-link @if(request()->routeIs('admin.dashboard')) active @endif"
                   href=""
                   title="Dashboard">
                    <span class="menu-icon">
                        <i class="ki-outline bi-house fs-3"></i>
                    </span>
                    <span class="menu-title">
                        Dashboard
                    </span>
                </a>
            </div>

            <div class="menu-item">
                <a class="menu-link @if(request()->routeIs('admin.reports.*')) active @endif"
                   href=""
                   title="Reports">
                    <span class="menu-icon">
                        <i class="ki-outline bi-file-earmark-bar-graph fs-3"></i>
                    </span>
                    <span class="menu-title">
                        Reports
                    </span>
                </a>
            </div>

            <div class="menu-item">
                <a class="menu-link @if(request()->routeIs('admin.campaigns.*')) active @endif"
                   href=""
                   title="Campaigns">
                    <span class="menu-icon">
                        <i class="ki-outline ki-directbox-default fs-3"></i>
                    </span>
                    <span class="menu-title">
                        Campaigns
                    </span>
                </a>
            </div>

            <div class="menu-item">
                <a class="menu-link @if(request()->routeIs('admin.offers.*')) active @endif"
                   href="" title="Offers">
                    <span class="menu-icon">
                        <i class="ki-outline bi-gift fs-3"></i>
                    </span>
                    <span class="menu-title">
                        Offers
                    </span>
                </a>
            </div>
            <div class="menu-item">
                <a class="menu-link @if(request()->routeIs('admin.websites.*')) active @endif"
                   href="" title="Websites">
                    <span class="menu-icon">
                        <i class="fa fa-globe fs-3"></i>
                    </span>
                    <span class="menu-title">
                        Websites
                    </span>
                </a>
            </div>

            <div class="menu-item">
                <a class="menu-link @if(request()->routeIs('admin.partners.*')) active @endif"
                   href="" title="Partners">
                    <span class="menu-icon">
                        <i class="fa fa-users fs-3"></i>
                    </span>
                    <span class="menu-title ">
                        Partners
                    </span>
                </a>
            </div>

        </div>
        <div
            class="menu menu-column menu-title-gray-800 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500"
            id="#kt_aside_menu" data-kt-menu="true">

            <!--begin:Menu item-->
            <div class="menu-item pt-5">
                <!--begin:Menu content-->
                <div class="menu-content">
                    <span class="menu-heading fw-bold text-uppercase fs-7">
                        <span class="fs-7">
                            Nutaku
                        </span>
                    </span>
                </div>
            </div>

            <div class="menu-item">
                <a class="menu-link @if(request()->routeIs('admin.nutaku.*')) active @endif"
                   href="" title="Nutaku">
                    <span class="menu-icon">
                        <i class="fa fa-gamepad fs-3"></i>
                    </span>
                    <span class="menu-title fs-7">
                        Nutaku Offers
                    </span>
                </a>
            </div>
        </div>
        <div
            class="menu menu-column menu-title-gray-800 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500"
            id="#kt_aside_menu" data-kt-menu="true">

            <!--begin:Menu item-->
            <div class="menu-item pt-5">
                <!--begin:Menu content-->
                <div class="menu-content">
                    <span class="menu-heading fw-bold text-uppercase fs-7">
                        <span class="fs-7">
                            MGID
                        </span>
                    </span>
                </div>
            </div>

            <div class="menu-item">
                <a class="menu-link @if(request()->routeIs('admin.mgid.*')) active @endif"
                   href="" title="MGID">
                    <span class="menu-icon">
                        <i class="fa fa-newspaper fs-3"></i>
                    </span>
                    <span class="menu-title fs-7">
                        MGID Offers
                    </span>
                </a>
            </div>
        </div>
        <div
            class="menu menu-column menu-title-gray-800 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500"
            id="#kt_aside_menu" data-kt-menu="true">

            <!--begin:Menu item-->
            <div class="menu-item pt-5">
                <!--begin:Menu content-->
                <div class="menu-content">
                    <span class="menu-heading fw-bold text-uppercase fs-7">
                        <span class="fs-7">
                            Creative
                        </span>
                    </span>
                </div>
            </div>
            <div data-kt-menu-trigger="click" class="menu-item menu-accordion @if(request()->routeIs('admin.creative-banner.*')) here show @endif">
                <span class="menu-link">
                    <span class="menu-icon">
                        <i class="fa fa-image fs-3"></i>
                    </span>
                    <span class="menu-title">Creative Banner</span>
                    <span class="menu-arrow"></span>
                </span>
                <div class="menu-sub menu-sub-accordion" style="@if(request()->routeIs('admin.creative-banner.*')) display: block; @endif">
                    <div
                        class="menu-item">
                        <a class="menu-link  @if(request()->routeIs('admin.creative-banner.campaigns.*')) active @endif"
                           href="">
                        <span class="menu-bullet">
                            <span class="bullet bullet-dot"></span>
                        </span>
                        <span class="menu-title">
                            Campaigns
                        </span>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a class="menu-link @if(request()->routeIs('admin.creative-banner.offers.*')) active @endif"
                           href="">
                            <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                            </span>
                                        <span class="menu-title">
                                Offers
                            </span>
                        </a>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>
