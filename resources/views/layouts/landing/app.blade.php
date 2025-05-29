
<!DOCTYPE html>
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Form CRM</title>

    <link rel="stylesheet" href="{{ asset('public/assets/landing/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/assets/landing/css/customize-animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/assets/landing/css/odometer.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/assets/landing/css/owl.min.css') }}" />
    <link rel="stylesheet" href="{{asset('public/assets/admin')}}/css/vendor.min.css">
    <link rel="stylesheet" href="{{asset('public/assets/admin')}}/vendor/icon-set/style.css">
    <link rel="stylesheet" href="{{asset('public/assets/admin/css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('public/assets/admin/css/toastr.css') }}">
    <link rel="stylesheet" href="{{ asset('public/assets/landing/css/main.css') }}"/>

    <link rel="stylesheet" href="{{asset('public/assets/admin/intltelinput/css/intlTelInput.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/admin/css/toastr.css')}}">
    <!-- CSS Front Template -->
    <link rel="stylesheet" href="{{asset('public/assets/admin/css/owl.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/admin/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/admin/css/theme.minc619.css?v=1.0')}}">
    <link rel="stylesheet" href="{{asset('public/assets/admin/css/style.css')}}">


    <link rel="icon" type="image/x-icon" href="#">
</head>

<body>
    <!-- ==== Preloader ==== -->
    <div id="landing-loader"></div>
    <!-- ==== Preloader ==== -->
    <!-- ==== Header Section Starts Here ==== -->
    <header>
        <div class="navbar-bottom">
            <div class="container">
                <div class="navbar-bottom-wrapper">
                    <ul class="menu">
                        <li>
                            <a id="home-link" href="{{route('home')}}" class=""><span>Inicio</span></a>
                        </li>
                        <li>
                            <a href="{{route('form')}}" class=""><span>Registro en el Formulario</span></a>
                        </li>
                        <li>
                            <a href="{{route('provinces')}}" class=""><span>Registro en las Provincias</span></a>
                        </li>
                        <li>
                            <a href="{{route('form-suitecrm')}}" class=""><span>Form SuiteCRM</span></a>
                        </li>
                        <li>
                            <a href="{{route('provi-suitecrm')}}" class=""><span>Provincia SuiteCRM</span></a>
                        </li>
                    </ul>
                    <div class="nav-toggle d-lg-none ms-auto me-3">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                        <div class="dropdown--btn-hover position-relative">
                            <a class="dropdown--btn border-0 px-3 header--btn text-capitalize d-flex" href="javascript:void(0)">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" width="20">
                                    <path d="M16.555 5.412a8.028 8.028 0 00-3.503-2.81 14.899 14.899 0 011.663 4.472 8.547 8.547 0 001.84-1.662zM13.326 7.825a13.43 13.43 0 00-2.413-5.773 8.087 8.087 0 00-1.826 0 13.43 13.43 0 00-2.413 5.773A8.473 8.473 0 0010 8.5c1.18 0 2.304-.24 3.326-.675zM6.514 9.376A9.98 9.98 0 0010 10c1.226 0 2.4-.22 3.486-.624a13.54 13.54 0 01-.351 3.759A13.54 13.54 0 0110 13.5c-1.079 0-2.128-.127-3.134-.366a13.538 13.538 0 01-.352-3.758zM5.285 7.074a14.9 14.9 0 011.663-4.471 8.028 8.028 0 00-3.503 2.81c.529.638 1.149 1.199 1.84 1.66zM17.334 6.798a7.973 7.973 0 01.614 4.115 13.47 13.47 0 01-3.178 1.72 15.093 15.093 0 00.174-3.939 10.043 10.043 0 002.39-1.896zM2.666 6.798a10.042 10.042 0 002.39 1.896 15.196 15.196 0 00.174 3.94 13.472 13.472 0 01-3.178-1.72 7.973 7.973 0 01.615-4.115zM10 15c.898 0 1.778-.079 2.633-.23a13.473 13.473 0 01-1.72 3.178 8.099 8.099 0 01-1.826 0 13.47 13.47 0 01-1.72-3.178c.855.151 1.735.23 2.633.23zM14.357 14.357a14.912 14.912 0 01-1.305 3.04 8.027 8.027 0 004.345-4.345c-.953.542-1.971.981-3.04 1.305zM6.948 17.397a8.027 8.027 0 01-4.345-4.345c.953.542 1.971.981 3.04 1.305a14.912 14.912 0 001.305 3.04z" />
                                </svg>
                            </a>
                            <ul class="dropdown-list py-0" style="min-width:120px; top:100%">
                                    <li class="py-0">
                                        <a class="" href="#">
                                            Es
                                        </a>
                                    </li>
                                    <li>
                                        <hr class="dropdown-divider my-0">
                                    </li>
                            </ul>
                        </div>
                    <div class="dropdown--btn-hover position-relative">
                        <a class="dropdown--btn header--btn text-capitalize d-flex align-items-center" href="{{route('registers')}}">
                            <span class="me-1">Registros</span>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </header>
    <!-- ==== Header Section Ends Here ==== -->
    <script src="{{ asset('public/assets/landing/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('public/assets/landing/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('public/assets/admin') }}/js/toastr.js"></script>
    @yield('content')
    <!-- ======= Footer Section ======= -->
    <script src="{{ asset('public/assets/landing/js/viewport.jquery.js') }}"></script>
    <script src="{{ asset('public/assets/landing/js/wow.min.js') }}"></script>
    <script src="{{ asset('public/assets/landing/js/odometer.min.js') }}"></script>
    <script src="{{ asset('public/assets/landing/js/owl.min.js') }}"></script>
    <script src="{{ asset('public/assets/landing/js/main.js') }}"></script>
    <script src="{{asset('public/assets/admin/intltelinput/js/intlTelInput.min.js')}}"></script>
    <script src="{{asset('public/assets/admin')}}/js/theme.min.js"></script>
    @stack('script_2')

</body>

</html>
