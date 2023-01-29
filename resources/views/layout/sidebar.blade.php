<div class="iq-sidebar  sidebar-default  ">
    <div class="iq-sidebar-logo d-flex align-items-end justify-content-between">
        <a href="../backend/index.html" class="header-logo">
            <img src="{{ asset('datum') }}/assets/images/logo.png" class="img-fluid rounded-normal light-logo"
                alt="logo">
            <img src="{{ asset('datum') }}/assets/images/logo-dark.png"
                class="img-fluid rounded-normal d-none sidebar-light-img" alt="logo">
            <span>Judul App</span>
        </a>
        <div class="side-menu-bt-sidebar-1">
            <svg xmlns="http://www.w3.org/2000/svg" class="text-light wrapper-menu" width="30" fill="none"
                viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </div>
    </div>
    <div class="data-scrollbar" data-scroll="1">
        <nav class="iq-sidebar-menu">
            <ul id="iq-sidebar-toggle" class="side-menu">
                <?php
                if (Auth::user()->role == 'admin') {
                ?>
                <li class="{{ Request::is('/admin/home') ? 'active' : '' }}
                    sidebar-layout">
                    <a href="{{ url('/admin/home') }}" class="svg-icon">
                        <i class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                            </svg>
                        </i>
                        <span class="ml-2">Dashboard</span>
                    </a>
                </li>
                <?php
                } elseif (Auth::user()->role == 'user') {
                ?>
                <li class="{{ Request::is('/user/home') ? 'active' : '' }}
                    sidebar-layout">
                    <a href="{{ url('/user/home') }}" class="svg-icon">
                        <i class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                            </svg>
                        </i>
                        <span class="ml-2">Dashboard</span>
                    </a>
                </li>
                <?php } ?>
                <li class="px-3 pt-3 pb-2">
                    <span class="text-uppercase small font-weight-bold">Component</span>
                </li>
                <?php
                if (Auth::user()->role == 'user') {
                ?>
                <li class="{{ Request::is('biodata', 'biodata/add_form') ? 'active' : '' }} sidebar-layout">
                    <a href="{{ route('index-biodata') }}" class="svg-icon">
                        <i class="">
                            <svg class="svg-icon" id="iq-chart-1" width="18" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 13v-1m4 1v-3m4 3V8M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z"
                                    style="stroke-dasharray: 96, 116; stroke-dashoffset: 0;"></path>
                            </svg>
                        </i>
                        <span class="ml-2">Biodata</span>
                    </a>
                </li>
                <?php
                } elseif (Auth::user()->role == 'admin') {
                ?>
                <li class="{{ Request::is('list') ? 'active' : '' }} sidebar-layout">
                    <a href="{{ route('index-data') }}" class="svg-icon">
                        <i class="">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 002.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 00-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25zM6.75 12h.008v.008H6.75V12zm0 3h.008v.008H6.75V15zm0 3h.008v.008H6.75V18z" />
                            </svg>

                        </i>
                        <span class="ml-2">Daftar Form</span>
                    </a>
                </li>
                <?php } ?>
            </ul>
        </nav>
        <div class="pt-5 pb-5"></div>
    </div>
</div>
