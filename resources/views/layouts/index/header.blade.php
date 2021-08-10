<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <!-- Styles -->
    {{--Bootstrap--}}
{{--    <link href="{{ asset('external/bootstrap/bootstrap.css') }}" rel="stylesheet">--}}
    {{--Awesome font icons--}}
    <link rel="stylesheet" href="{{ asset('external/font-awesome-pro/css/all.css') }}" >
    {{--jQuery UI--}}
    <link href="{{ asset('external/jquery-ui/jquery-ui.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/add-new-apartments-style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/modal-login.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Rubik">


    <!-- External Scripts -->
    <script src="{{ asset('external/font-awesome-pro/pro.js') }}" ></script>
    <script src="{{ asset('external/jquery-3.6.0.js') }}" ></script>
    <script src="{{ asset('external/jquery-ui/jquery-ui.js') }}" ></script>
    <script src="{{ asset('external/popper.js') }}" ></script>
{{--    <script src="{{ asset('external/bootstrap/bootstrap.js') }}" ></script>--}}

    <!-- My Scripts -->
    <script src="{{ asset('js/accordion.js') }}" ></script>
    <script src="{{ asset('js/app.js') }}" ></script>
    {{--    <script src="{{ asset('js/add-new-apartments.js') }}" ></script>--}}
    <script src="{{ asset('js/login-form.js') }}" ></script>


    <script>
        $(document).ready(function(){
            $('accordion-title').click(function(){
                $(this).next('accordion-content').toggle();
            });
        });
    </script>

    <title>נכסים להשכרה  | השכרה | נדלן יד2</title>
</head>
