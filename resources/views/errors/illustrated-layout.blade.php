<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
@include('components.head')
<!-- Styles -->
    <style>
        html {
            line-height: 1.15;
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
        }

        body {
            margin: 0;
        }

        header,
        nav,
        section {
            display: block;
        }

        figcaption,
        main {
            display: block;
        }

        a {
            background-color: transparent;
            -webkit-text-decoration-skip: objects;
        }

        strong {
            font-weight: inherit;
        }

        strong {
            font-weight: bolder;
        }

        code {
            font-family: monospace, monospace;
            font-size: 1em;
        }

        dfn {
            font-style: italic;
        }

        svg:not(:root) {
            overflow: hidden;
        }

        button,
        input {
            font-family: sans-serif;
            font-size: 100%;
            line-height: 1.15;
            margin: 0;
        }

        button,
        input {
            overflow: visible;
        }

        button {
            text-transform: none;
        }

        button,
        html [type="button"],
        [type="reset"],
        [type="submit"] {
            -webkit-appearance: button;
        }

        button::-moz-focus-inner,
        [type="button"]::-moz-focus-inner,
        [type="reset"]::-moz-focus-inner,
        [type="submit"]::-moz-focus-inner {
            border-style: none;
            padding: 0;
        }

        button:-moz-focusring,
        [type="button"]:-moz-focusring,
        [type="reset"]:-moz-focusring,
        [type="submit"]:-moz-focusring {
            outline: 1px dotted ButtonText;
        }

        legend {
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            color: inherit;
            display: table;
            max-width: 100%;
            padding: 0;
            white-space: normal;
        }

        [type="checkbox"],
        [type="radio"] {
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            padding: 0;
        }

        [type="number"]::-webkit-inner-spin-button,
        [type="number"]::-webkit-outer-spin-button {
            height: auto;
        }

        [type="search"] {
            -webkit-appearance: textfield;
            outline-offset: -2px;
        }

        [type="search"]::-webkit-search-cancel-button,
        [type="search"]::-webkit-search-decoration {
            -webkit-appearance: none;
        }

        ::-webkit-file-upload-button {
            -webkit-appearance: button;
            font: inherit;
        }

        menu {
            display: block;
        }

        canvas {
            display: inline-block;
        }

        template {
            display: none;
        }

        [hidden] {
            display: none;
        }

        html {
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            font-family: sans-serif;
        }

        *,
        *::before,
        *::after {
            -webkit-box-sizing: inherit;
            box-sizing: inherit;
        }

        p {
            margin: 0;
        }

        button {
            background: transparent;
            padding: 0;
        }

        button:focus {
            outline: 1px dotted;
            outline: 5px auto -webkit-focus-ring-color;
        }

        *,
        *::before,
        *::after {
            border-width: 0;
            border-style: solid;
            border-color: #dae1e7;
        }

        button,
        [type="button"],
        [type="reset"],
        [type="submit"] {
            border-radius: 0;
        }

        button,
        input {
            font-family: inherit;
        }

        input::-webkit-input-placeholder {
            color: inherit;
            opacity: .5;
        }

        input:-ms-input-placeholder {
            color: inherit;
            opacity: .5;
        }

        input::-ms-input-placeholder {
            color: inherit;
            opacity: .5;
        }

        input::placeholder {
            color: inherit;
            opacity: .5;
        }

        button,
        [role=button] {
            cursor: pointer;
        }

        .bg-transparent {
            background-color: transparent;
        }

        .bg-white {
            background-color: #fff;
        }

        .bg-teal-light {
            background-color: #64d5ca;
        }

        .bg-blue-dark {
            background-color: #2779bd;
        }

        .bg-indigo-light {
            background-color: #7886d7;
        }

        .bg-purple-light {
            background-color: #a779e9;
        }

        .bg-no-repeat {
            background-repeat: no-repeat;
        }

        .bg-cover {
            background-size: cover;
        }

        .border-grey-light {
            border-color: #dae1e7;
        }

        .hover\:border-grey:hover {
            border-color: #b8c2cc;
        }

        .rounded-lg {
            border-radius: .5rem;
        }

        .border-2 {
            border-width: 2px;
        }

        .hidden {
            display: none;
        }

        .flex {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
        }

        .items-center {
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
        }

        .justify-center {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
        }

        .font-sans {
            font-family: Nunito, sans-serif;
        }

        .font-light {
            font-weight: 300;
        }

        .font-bold {
            font-weight: 700;
        }

        .font-black {
            font-weight: 900;
        }

        .h-1 {
            height: .25rem;
        }

        .leading-normal {
            line-height: 1.5;
        }

        .m-8 {
            margin: 2rem;
        }

        .my-3 {
            margin-top: .75rem;
            margin-bottom: .75rem;
        }

        .mb-8 {
            margin-bottom: 2rem;
        }

        .max-w-sm {
            max-width: 30rem;
        }

        .min-h-screen {
            min-height: 100vh;
        }

        .py-3 {
            padding-top: .75rem;
            padding-bottom: .75rem;
        }

        .px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem;
        }

        .pb-full {
            padding-bottom: 100%;
        }

        .absolute {
            position: absolute;
        }

        .relative {
            position: relative;
        }

        .pin {
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
        }

        .text-black {
            color: #22292f;
        }

        .text-grey-darkest {
            color: #3d4852;
        }

        .text-grey-darker {
            color: #606f7b;
        }

        .text-2xl {
            font-size: 1.5rem;
        }

        .text-5xl {
            font-size: 3rem;
        }

        .uppercase {
            text-transform: uppercase;
        }

        .antialiased {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        .tracking-wide {
            letter-spacing: .05em;
        }

        .w-16 {
            width: 4rem;
        }

        .w-full {
            width: 100%;
        }

        @media (min-width: 768px) {
            .md\:bg-left {
                background-position: left;
            }

            .md\:bg-right {
                background-position: right;
            }

            .md\:flex {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
            }

            .md\:my-6 {
                margin-top: 1.5rem;
                margin-bottom: 1.5rem;
            }

            .md\:min-h-screen {
                min-height: 100vh;
            }

            .md\:pb-0 {
                padding-bottom: 0;
            }

            .md\:text-3xl {
                font-size: 1.875rem;
            }

            .md\:text-15xl {
                font-size: 9rem;
            }

            .md\:w-1\/2 {
                width: 50%;
            }
        }

        @media (min-width: 992px) {
            .lg\:bg-center {
                background-position: center;
            }
        }
    </style>
</head>
<body class="authentication-bg" data-layout="detached"
      data-layout-config='{"leftSidebarCondensed":false,"darkMode":true, "showRightSidebarOnStart": false}'>

<div class="account-pages pt-2 pt-sm-5 pb-4 pb-sm-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xxl-4 col-lg-5">
                <div class="card">
                    <!-- Logo -->
                    <div class="card-header pt-4 pb-4 text-center bg-primary">
                        <svg height="75" viewBox="0 0 316 316" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M305.8 81.125C305.77 80.995 305.69 80.885 305.65 80.755C305.56 80.525 305.49 80.285 305.37 80.075C305.29 79.935 305.17 79.815 305.07 79.685C304.94 79.515 304.83 79.325 304.68 79.175C304.55 79.045 304.39 78.955 304.25 78.845C304.09 78.715 303.95 78.575 303.77 78.475L251.32 48.275C249.97 47.495 248.31 47.495 246.96 48.275L194.51 78.475C194.33 78.575 194.19 78.725 194.03 78.845C193.89 78.955 193.73 79.045 193.6 79.175C193.45 79.325 193.34 79.515 193.21 79.685C193.11 79.815 192.99 79.935 192.91 80.075C192.79 80.285 192.71 80.525 192.63 80.755C192.58 80.875 192.51 80.995 192.48 81.125C192.38 81.495 192.33 81.875 192.33 82.265V139.625L148.62 164.795V52.575C148.62 52.185 148.57 51.805 148.47 51.435C148.44 51.305 148.36 51.195 148.32 51.065C148.23 50.835 148.16 50.595 148.04 50.385C147.96 50.245 147.84 50.125 147.74 49.995C147.61 49.825 147.5 49.635 147.35 49.485C147.22 49.355 147.06 49.265 146.92 49.155C146.76 49.025 146.62 48.885 146.44 48.785L93.99 18.585C92.64 17.805 90.98 17.805 89.63 18.585L37.18 48.785C37 48.885 36.86 49.035 36.7 49.155C36.56 49.265 36.4 49.355 36.27 49.485C36.12 49.635 36.01 49.825 35.88 49.995C35.78 50.125 35.66 50.245 35.58 50.385C35.46 50.595 35.38 50.835 35.3 51.065C35.25 51.185 35.18 51.305 35.15 51.435C35.05 51.805 35 52.185 35 52.575V232.235C35 233.795 35.84 235.245 37.19 236.025L142.1 296.425C142.33 296.555 142.58 296.635 142.82 296.725C142.93 296.765 143.04 296.835 143.16 296.865C143.53 296.965 143.9 297.015 144.28 297.015C144.66 297.015 145.03 296.965 145.4 296.865C145.5 296.835 145.59 296.775 145.69 296.745C145.95 296.655 146.21 296.565 146.45 296.435L251.36 236.035C252.72 235.255 253.55 233.815 253.55 232.245V174.885L303.81 145.945C305.17 145.165 306 143.725 306 142.155V82.265C305.95 81.875 305.89 81.495 305.8 81.125ZM144.2 227.205L100.57 202.515L146.39 176.135L196.66 147.195L240.33 172.335L208.29 190.625L144.2 227.205ZM244.75 114.995V164.795L226.39 154.225L201.03 139.625V89.825L219.39 100.395L244.75 114.995ZM249.12 57.105L292.81 82.265L249.12 107.425L205.43 82.265L249.12 57.105ZM114.49 184.425L96.13 194.995V85.305L121.49 70.705L139.85 60.135V169.815L114.49 184.425ZM91.76 27.425L135.45 52.585L91.76 77.745L48.07 52.585L91.76 27.425ZM43.67 60.135L62.03 70.705L87.39 85.305V202.545V202.555V202.565C87.39 202.735 87.44 202.895 87.46 203.055C87.49 203.265 87.49 203.485 87.55 203.695V203.705C87.6 203.875 87.69 204.035 87.76 204.195C87.84 204.375 87.89 204.575 87.99 204.745C87.99 204.745 87.99 204.755 88 204.755C88.09 204.905 88.22 205.035 88.33 205.175C88.45 205.335 88.55 205.495 88.69 205.635L88.7 205.645C88.82 205.765 88.98 205.855 89.12 205.965C89.28 206.085 89.42 206.225 89.59 206.325C89.6 206.325 89.6 206.325 89.61 206.335C89.62 206.335 89.62 206.345 89.63 206.345L139.87 234.775V285.065L43.67 229.705V60.135ZM244.75 229.705L148.58 285.075V234.775L219.8 194.115L244.75 179.875V229.705ZM297.2 139.625L253.49 164.795V114.995L278.85 100.395L297.21 89.825V139.625H297.2Z"/>
                        </svg>
                    </div>

                    <div class="card-body p-4">
                        <div class="text-center">
                            <h1 class="text-error">@yield('code', __('Oh no'))</h1>
                            <h4 class="text-uppercase text-danger mt-3">@yield('message')</h4>
                            <p class="text-muted mt-3">It's looking like you may have taken a wrong turn. Don't worry...
                                it
                                happens to the best of us. Here's a
                                little tip that might help you get back on track.</p>

                            <a href="{{ app('router')->has('home') ? route('home') : url('/') }}">
                                <button class="btn btn-info mt-3">
                                    <i class="mdi mdi-reply"></i> {{ __('Go Home') }}
                                </button>
                            </a>
                        </div>
                    </div> <!-- end card-body-->
                </div>
                <!-- end card -->
            </div> <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</div>
<!-- end page -->

@include('components.footer')

@include('components.scripts')


</body>
</html>
