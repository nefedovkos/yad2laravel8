<!doctype html>
<html dir="rtl" lang="il">
<head>
@extends('layouts.index.header')
</head>
<body>
<div class="container-fluid" style="height: 5px; background-color: #ff7100;"></div>
@include('layouts.index.main-menu')
<div class="container-fluid" style="height: 1px; background-color: #eeeeee;"></div>
@include('layouts.index.sub-menu')
<div class="container-fluid" style="height: 5px; background-color: #eeeeee;"></div>
@include('layouts.index.content')
@include('layouts.index.login-modal')
@include('layouts.index.register-modal')
{{--@include('layouts.index.register2-modal')--}}
@include('layouts.index.restore-modal')
@include('layouts.index.footer')

</body>
</html>
