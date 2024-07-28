<!DOCTYPE html>

<html lang="en">
  <!--begin::Head-->
  <head>
      
    <base href="../../">
    <meta charset="utf-8" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title') | Directoreel </title>
    <meta name="description" content="Login page example" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!--begin::Fonts-->
		<link rel="canonical" href="https://directoreel.com" />
		<!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Page Custom Styles(used by this page)-->
		<link href="{!! url('assets/css/pages/login/classic/login-4.css'); !!}" rel="stylesheet" type="text/css" />
		<!--end::Page Custom Styles-->
		<!--begin::Global Theme Styles(used by all pages)-->
		<link href="{!! url('assets/plugins/global/plugins.bundle.css'); !!}" rel="stylesheet" type="text/css" />
		<link href="{!! url('assets/plugins/custom/prismjs/prismjs.bundle.css'); !!}" rel="stylesheet" type="text/css" />
		<link href="{!! url('assets/css/style.bundle.css'); !!}" rel="stylesheet" type="text/css" />
		<!--end::Global Theme Styles-->
		<!--begin::Layout Themes(used by all pages)-->
		<link href="{!! url('assets/css/themes/layout/header/base/light.css'); !!}" rel="stylesheet" type="text/css" />
		<link href="{!! url('assets/css/themes/layout/header/menu/light.css'); !!}" rel="stylesheet" type="text/css" />
		<link href="{!! url('assets/css/themes/layout/brand/dark.css'); !!}" rel="stylesheet" type="text/css" />
		<link href="{!! url('assets/css/themes/layout/aside/dark.css'); !!}" rel="stylesheet" type="text/css" />
		<!--end::Layout Themes-->
		<link rel="shortcut icon" href="{!! url('assets/media/logos/directoreel_icon.png'); !!}" />
	</head>
	<!--end::Head-->




  <!--begin::Body-->



<!--begin::Content-->
<!--begin::Body-->
	<body id="kt_body" style="background-color: rgba(7, 6, 6, 0.918)" class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
		<!--begin::Main-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Login-->
			<div class="login login-4 login-signin-on d-flex flex-row-fluid" id="kt_login">
				<div class="d-flex flex-center flex-row-fluid bgi-size-cover bgi-position-top bgi-no-repeat" style="background-image: url('assets/media/bg/bg-3.jpg');">
					<div class="login-form text-center p-7 position-relative overflow-hidden">
						
						<!--begin::Login Header-->
						<div class="d-flex flex-center mb-15">
							<a href="{{ route('dashboard'); }}">
								<img src="{!! url('assets/media/logos/directoreel_logo2.png'); !!}" class="max-h-75px" alt="" />
							</a>
						</div>
						<!--end::Login Header-->
            
            @yield('content')

          </div>
          <!--end::Content body-->
        </div>
        <!--end::Content-->
      </div>
      <!--end::Login-->
    </div>
    <!--end::Main-->


        <!--begin::Content footer-->
            <div
            class="d-flex justify-content-lg-start justify-content-center align-items-end py-7 py-lg-0" style="padding:20px;"
          >
                <div class="text-dark-50 font-size-lg font-weight-bolder mr-10">
                  <span class="mr-1">2021 ©</span>
                      <a
                        href="https://www.directoreel.com"
                        target="_blank"
                        class="text-dark-75 text-hover-primary"
                        >Directoreel Limited</a
                      >
                </div>
                <a href="https://www.directoreel.com/terms" class="text-primary font-weight-bolder font-size-lg"
                  >Terms & Conditions</a
                >
          </div>
      <!--end::Content footer-->



		<script>var HOST_URL = "https://directoreel.com";</script>
		<!--begin::Global Config(global config for global JS scripts)-->
		<script>var KTAppSettings = { "breakpoints": { "sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1400 }, "colors": { "theme": { "base": { "white": "#ffffff", "primary": "#3699FF", "secondary": "#E5EAEE", "success": "#1BC5BD", "info": "#8950FC", "warning": "#FFA800", "danger": "#F64E60", "light": "#E4E6EF", "dark": "#181C32" }, "light": { "white": "#ffffff", "primary": "#E1F0FF", "secondary": "#EBEDF3", "success": "#C9F7F5", "info": "#EEE5FF", "warning": "#FFF4DE", "danger": "#FFE2E5", "light": "#F3F6F9", "dark": "#D6D6E0" }, "inverse": { "white": "#ffffff", "primary": "#ffffff", "secondary": "#3F4254", "success": "#ffffff", "info": "#ffffff", "warning": "#ffffff", "danger": "#ffffff", "light": "#464E5F", "dark": "#ffffff" } }, "gray": { "gray-100": "#F3F6F9", "gray-200": "#EBEDF3", "gray-300": "#E4E6EF", "gray-400": "#D1D3E0", "gray-500": "#B5B5C3", "gray-600": "#7E8299", "gray-700": "#5E6278", "gray-800": "#3F4254", "gray-900": "#181C32" } }, "font-family": "Poppins" };</script>
		<!--end::Global Config-->
		<!--begin::Global Theme Bundle(used by all pages)-->
		<script src="{!! url('assets/plugins/global/plugins.bundle.js'); !!}"></script>
		<script src="{!! url('assets/plugins/custom/prismjs/prismjs.bundle.js'); !!}"></script>
		<script src="{!! url('assets/js/scripts.bundle.js'); !!}"></script>
		<!--end::Global Theme Bundle-->
		<!--begin::Page Scripts(used by this page)-->
		<script src="{!! url('assets/js/pages/custom/login/login-general.js'); !!}"></script>
		<!--end::Page Scripts-->


  </body>
  <!--end::Body-->
</html>
