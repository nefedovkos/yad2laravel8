
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <!-- Styles -->
    {{--Awesome font icons--}}
    <link rel="stylesheet" href="{{ asset('external/font-awesome-pro/css/all.css') }}" >
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
{{--    <link href="{{ asset('css/add-new-apartments-style.css') }}" rel="stylesheet">--}}
    <link href="{{ asset('css/index/modal-login.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Rubik">


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

