<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<title>{{ config('app.name', 'Laravel') }}</title>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>

<!-- Fonts -->
<link rel="dns-prefetch" href="//fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

<!-- Styles -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link href="{{asset('assets/css/jquery-jvectormap-1.2.2.css')}}" rel="stylesheet" type="text/css"/>
<link href="{{asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css"/>
<link href="{{asset('assets/css/app-modern.min.css')}}" rel="stylesheet" type="text/css" id="light-style"/>
<link href="{{asset('assets/css/app-modern-dark.min.css')}}" rel="stylesheet" type="text/css" id="dark-style"/>
{{--
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
--}}
{{--<link href="https://unpkg.com/filepond@^4/dist/filepond.css" rel="stylesheet" />--}}
