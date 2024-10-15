<!DOCTYPE html>
<html>

<head>
    <!-- Basic Page Info -->
    <meta charset="utf-8">
    <title>@yield('pageTitle')</title>

    <!-- Site favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('web/assets/img/logo/apex_icon.png') }}" />
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('web/assets/img/logo/apex_icon.png') }}" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('web/assets/img/logo/apex_icon.png') }}" />

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet" />

    <!-- CSS -->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('admin/src/plugins/datatables/css/dataTables.bootstrap4.min.css') }}" />
    <link rel="stylesheet" type="text/css"
        href="{{ asset('admin/src/plugins/datatables/css/responsive.bootstrap4.min.css') }}" />

    <link rel="stylesheet" type="text/css" href="{{ asset('admin/vendors/styles/core.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/vendors/styles/icon-font.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/vendors/styles/style.css') }}" />


    @stack('stylesheets')
</head>

<body>
    {{-- <div class="pre-loader">
        <div class="pre-loader-box">
            <div class="loader-logo text-center">
                <img width="10%" src="{{ asset('web/images/logo.png') }}" alt="" />
            </div>
            <div class="loader-progress" id="progress_div">
                <div class="bar" id="bar1"></div>
            </div>
            <div class="percent" id="percent1">0%</div>
        </div>
    </div> --}}
    <div class="header">
        <div class="header-left">
            <div class="menu-icon bi bi-list"></div>
            <div class="search-toggle-icon bi bi-search" data-toggle="header_search"></div>
        </div>
        <div class="header-right ">
            <div class="dashboard-setting user-notification">
                <div class="dropdown d-none">
                    <a class="dropdown-toggle no-arrow" href="javascript:;" data-option="" data-toggle="right-sidebar">
                        <i class="dw dw-settings2"></i>
                    </a>
                </div>
            </div>
            <div class="user-info-dropdown">
                <div class="dropdown">
                    <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                        <span class="user-name">
                            {{ auth()->user()->first_name }} {{ auth()->user()->last_name }}
                        </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                        <a class="dropdown-item" href="{{ route('admin.dashboard.change.password') }}">
                            <i class="bi bi-gear-fill"></i>
                            Change Password
                        </a>
                        <a class="dropdown-item" href=""
                            onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                            <i class="dw dw-logout"></i>
                            Log Out
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="right-sidebar ">
        <div class="sidebar-title">
            <h3 class="weight-600 font-16 text-blue">
                Layout Settings
                <span class="btn-block font-weight-400 font-12">User Interface Settings</span>
            </h3>
            <div class="close-sidebar" data-toggle="right-sidebar-close">
                <i class="icon-copy ion-close-round"></i>
            </div>
        </div>
        <div class="right-sidebar-body customscroll">
            <div class="right-sidebar-body-content">
                <h4 class="weight-600 font-18 pb-10">Header Background</h4>
                <div class="sidebar-btn-group pb-30 mb-10">
                    <a href="javascript:void(0);" class="btn btn-outline-primary header-white active">White</a>
                </div>

                <h4 class="weight-600 font-18 pb-10">Sidebar Background</h4>
                <div class="sidebar-btn-group pb-30 mb-10">
                    <a href="javascript:void(0);" class="btn btn-outline-primary sidebar-light">White</a>
                </div>
            </div>
        </div>
    </div>

    <div class="left-side-bar">
        <div class="brand-logo">
            <a href="{{ route('dashboard.home') }}">
                <img src="{{ asset('admin/vendors/images/dashboard-area.png') }}" alt="" class="dark-logo" />
            </a>
            <div class="close-sidebar" data-toggle="left-sidebar-close">
                <i class="ion-close-round"></i>
            </div>
        </div>
        <div class="menu-block customscroll ">
            <div class="sidebar-menu">
                    @php
                        $isAdmin = Auth::user()->is_admin;
                    @endphp
                    @if ($isAdmin === 0)
                        <script>
                            setTimeout(function() {
                                window.location.href = "{{ route('home.page') }}";
                            }, 0); // Redirect after 3 seconds
                        </script>
                @else
                    <ul id="accordion-menu">
                        <li class="dropdown">
                            <a href="{{ route('productsPage') }}" class="dropdown-toggle no-arrow">
                                <span class="micon bi bi-pencil-square"></span><span class="mtext">PRODUCTS</span>
                            </a>
                        </li>
                        <li class="dropdown">
                            <a href="{{ route('team.edit') }}" class="dropdown-toggle no-arrow">
                                <span class="micon bi bi-people"></span><span class="mtext">TEAM</span>
                            </a>
                        </li>
                        <li class="dropdown">
                            <a href="{{ route('services.edit') }}" class="dropdown-toggle no-arrow">
                                <span class="micon bi bi-blockquote-left"></span><span class="mtext">SERVICES</span>
                            </a>
                        </li>

                        <li class="dropdown">
                            <a href="{{ route('admin.dashboard.contact') }}" class="dropdown-toggle no-arrow">
                                <span class="micon bi bi-chat"></span><span class="mtext">Contact Messages</span>
                            </a>
                        </li>
                    </ul>
            </div>
        </div>
    </div>
    <div class="mobile-menu-overlay"></div>
    @endif
    <div class="main-container">
        <div class="pd-ltr-20 xs-pd-20-10">
            <div class="min-height-200px ">
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                @if (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif
                @yield('content')
            </div>
        </div>
    </div>
    <!-- js -->
    <script>
        const fileInputs = document.querySelectorAll('.file-input');
        const fileNames = document.querySelectorAll('.file-name');

        fileInputs.forEach((fileInput, i) => {
            fileInput.addEventListener('change', function() {
                const file = fileInputs[i].files[0];
                fileNames[i].textContent = file.name;
            });
        });
    </script>

    <!-- js -->

    <script src="{{ asset('admin/vendors/scripts/dashboard3.js') }}"></script>
    <script src="{{ asset('admin/vendors/scripts/core.js') }}"></script>
    <script src="{{ asset('admin/vendors/scripts/script.min.js') }}"></script>
    <script src="{{ asset('admin/vendors/scripts/process.js') }}"></script>
    <script src="{{ asset('admin/vendors/scripts/layout-settings.js') }}"></script>

    <script src="{{ asset('admin/src/plugins/datatables/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('admin/vendors/scripts/datatable-setting.js') }}"></script>
    <script src="{{ asset('admin/src/plugins/datatables/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('admin/src/plugins/datatables/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('admin/src/plugins/datatables/js/responsive.bootstrap4.min.js') }}"></script>

    <!-- buttons for Export datatable -->
    <script src="{{ asset('admin/src/plugins/datatables/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('admin/src/plugins/datatables/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('admin/src/plugins/datatables/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('admin/src/plugins/datatables/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('admin/src/plugins/datatables/js/buttons.flash.min.js') }}"></script>
    <script src="{{ asset('admin/src/plugins/datatables/js/pdfmake.min.js') }}"></script>
    <script src="{{ asset('admin/src/plugins/datatables/js/vfs_fonts.js') }}"></script>

    <script>
        $(document).ready(function() {
            // Get the current URL
            var currentUrl = window.location.href;

            // Iterate through each anchor tag in the menu
            $('#accordion-menu a').each(function() {
                // Check if the anchor's href matches the current URL
                if ($(this).attr('href') === currentUrl) {
                    // Add the 'active' class to the anchor tag
                    $(this).addClass('active');

                    // Add the 'show' class to the parent li
                    $(this).closest('li').addClass('show');

                    // Change the data-option attribute value to "off"
                    $(this).attr('data-option', 'off');

                    // Trigger the click event on the parent li to keep the dropdown open
                    $(this).closest('li.dropdown').find('> a').click();
                } else {
                    // Change the data-option attribute value to "on" for other elements
                    $(this).attr('data-option', 'on');
                }
            });
        });
    </script>

    @stack('scripts')
</body>

</html>
