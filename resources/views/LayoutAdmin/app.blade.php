<!DOCTYPE html>
<html lang="en">
<!--begin Head-->

<head>
    <base href="">
    <title>{{ $title }}</title>
    <meta charset="utf-8" />
    <meta name="description"
        content="The most advanced Bootstrap Admin Theme on Themeforest trusted by 100,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue, Asp.Net Core, Blazor, Django, Flask &amp; Laravel versions. Grab your copy now and get life-time updates for free." />
    <meta name="keywords"
        content="Metronic, Bootstrap, Bootstrap 5, Angular, VueJs, React, Asp.Net Core, Blazor, Django, Flask &amp; Laravel, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title"
        content="Metronic - Bootstrap 5 HTML, VueJS, React, Angular, Asp.Net Core, Blazor, Django, Flask &amp; Laravel Admin Dashboard Theme" />
    <meta property="og:url" content="https://keenthemes.com/metronic" />
    <meta property="og:site_name" content="Keenthemes | Metronic" />
    <link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
    <link rel="shortcut icon" href="{{ asset('assets2/img/logo_sulsel.png') }}" />
    <!--begin Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
    <!--end Fonts-->
    <!--begin Vendor Stylesheets(used by this page)-->

    <link href="{{ asset('assets2/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet"
        type="text/css" />
    <!--end Vendor Stylesheets-->
    <!--begin Global Stylesheets Bundle(used by all pages)-->
    <link href="{{ asset('assets2/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets2/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
    <!--end Global Stylesheets Bundle-->

    <script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
    <style>
        tbody,
        td,
        tfoot,
        th,
        thead,
        tr {
            border-style: none;
        }

        #myTable_wrapper .row {
            margin-bottom: 10px;
        }

        /* Global DataTables Show Entries Styling */
        .dataTables_length {
            display: flex;
        }

        .dataTables_length label {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            font-weight: 500;
            color: var(--bs-gray-700);
            white-space: nowrap;
        }

        .dataTables_length label select {
            width: 75px !important;
            padding: 0.375rem 2.25rem 0.375rem 0.75rem !important;
            font-size: 1rem !important;
            font-weight: 500 !important;
            line-height: 1.5 !important;
            color: var(--bs-gray-700) !important;
            background-color: var(--bs-body-bg) !important;
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%237E8299' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M2 5l6 6 6-6'/%3e%3c/svg%3e") !important;
            background-repeat: no-repeat !important;
            background-position: right 0.75rem center !important;
            background-size: 12px 10px !important;
            border: 1px solid var(--bs-gray-300) !important;
            border-radius: 0.475rem !important;
            transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out !important;
            appearance: none !important;
            -moz-appearance: none !important;
            -webkit-appearance: none !important;
            outline: none !important;
            cursor: pointer;
        }

        .dataTables_length label select:focus {
            border-color: var(--bs-primary) !important;
            box-shadow: none !important;
        }

        .dataTables_length label select:hover {
            border-color: var(--bs-primary) !important;
        }

        [data-theme="dark"] .dataTables_length label {
            color: #a1a5b7;
        }

        [data-theme="dark"] .dataTables_length label select {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%23A1A5B7' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M2 5l6 6 6-6'/%3e%3c/svg%3e") !important;
            border-color: #323248 !important;
            background-color: #1e1e2d !important;
            color: #a1a5b7 !important;
        }

        .dataTables_filter label {
            display: flex;
        }

        .ck.ck-editor {
            color: #000;
        }

        .dataTables_wrapper .dataTables_paginate .paginate_button {
            padding: 0;
            margin: 0px 0px 0px 20px;
        }

        /* Sidebar Logo Styling & Animation */
        .app-sidebar-logo-inner {
            transition: all 0.3s ease;
            overflow: hidden;
            width: 100%;
        }

        .app-sidebar-logo-text {
            transition: opacity 0.3s ease, width 0.3s ease;
            white-space: nowrap;
            opacity: 1;
            width: 100%;
        }

        [data-kt-app-sidebar-minimize="on"] .app-sidebar-logo-text {
            opacity: 0;
            width: 0;
            visibility: hidden;
            pointer-events: none;
        }

        [data-kt-app-sidebar-minimize="on"] .app-sidebar-logo {
            justify-content: center;
            padding-left: 0 !important;
            padding-right: 0 !important;
        }

        [data-kt-app-sidebar-minimize="on"] .app-sidebar-logo-inner {
            justify-content: center;
        }

        [data-kt-app-sidebar-minimize="on"] .app-sidebar-logo-icon {
            margin-right: 0 !important;
        }
    </style>
</head>
<!--end Head-->
<!--begin Body-->

<body data-kt-name="metronic" id="kt_app_body" data-kt-app-layout="dark-sidebar" data-kt-app-header-fixed="true"
    data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-hoverable="true"
    data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true"
    data-kt-app-sidebar-push-footer="true" data-kt-app-toolbar-enabled="true" class="app-default">
    <!--begin Theme mode setup on page load-->
    <script>
        if (document.documentElement) {
            const defaultThemeMode = "system";
            const name = document.body.getAttribute("data-kt-name");
            let themeMode = localStorage.getItem("kt_" + (name !== null ? name + "_" : "") + "theme_mode_value");
            if (themeMode === null) {
                if (defaultThemeMode === "system") {
                    themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
                } else {
                    themeMode = defaultThemeMode;
                }
            }
            document.documentElement.setAttribute("data-theme", themeMode);
        }
    </script>
    <div class="d-flex flex-column flex-root app-root" id="kt_app_root">
        <!--begin Page-->
        <div class="app-page flex-column flex-column-fluid" id="kt_app_page">
            <!--begin Header-->
            @include('LayoutAdmin.header')
            <!--end Header-->
            <!--begin Wrapper-->
            <div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
                @include('LayoutAdmin.sidebar')
                <!--begin Main-->
                <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
                    <!--begin Content wrapper-->
                    <div class="d-flex flex-column flex-column-fluid">
                        <!--begin Toolbar-->
                        <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
                            <!--begin Toolbar container-->
                            <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
                                <!--begin Page title-->
                                <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                                    <!--begin Title-->
                                    <h1
                                        class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
                                        {{ $title }}</h1>
                                    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                                        <!--begin Item-->
                                        <li class="breadcrumb-item text-muted">Dinas Kelautan & Perikanan </li>
                                        <!--end Item-->
                                    </ul>
                                </div>
                                <div class="ms-auto">
                                    @yield('modal-add')
                                </div>
                            </div>
                            <!--end Toolbar container-->
                        </div>
                        <!--end Toolbar-->
                        <!--begin Content-->
                        <div id="kt_app_content" class="app-content flex-column-fluid">
                            <!--begin Content container-->
                            <div id="kt_app_content_container" class="app-container container-fluid">
                                @include('sweetalert::alert')

                                @yield('content')
                            </div>
                            <!--end Content container-->
                        </div>
                        <!--end Content-->
                    </div>
                    @include('LayoutAdmin.footer')
                </div>
            </div>
        </div>
    </div>
    <script>
        var hostUrl = "assets/";
    </script>
    <script src="{{ asset('assets2/plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ asset('assets2/js/scripts.bundle.js') }}"></script>

    <script src="https://cdn.amcharts.com/lib/5/index.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/radar.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/map.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/worldLow.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/continentsLow.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/usaLow.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZonesLow.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZoneAreasLow.js"></script>
    <script src="{{ asset('assets2/plugins/custom/datatables/datatables.bundle.js') }}"></script>

    <script src="{{ asset('assets2/js/widgets.bundle.js') }}"></script>
    <script src="{{ asset('assets2/js/custom/utilities/modals/upgrade-plan.js') }}"></script>
    <script src="{{ asset('assets2/js/custom/utilities/modals/create-app.js') }}"></script>
    <script src="{{ asset('assets2/js/custom/utilities/modals/new-target.js') }}"></script>
    <script src="{{ asset('assets2/js/custom/utilities/modals/users-search.js') }}"></script>

    <script>
        const editorElement = document.querySelector('#editor');
        if (editorElement) {
            ClassicEditor
                .create(editorElement, {
                    ckfinder: {
                        uploadUrl: "{{ route('ckeditor.upload', ['_token' => csrf_token()]) }}",
                    },
                })
                .catch(error => {
                    console.error(error);
                });
        }
    </script>
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>

    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>


</body>

</html>
