<!doctype html>
<html dir="rtl" lang="il">
<head>
    @extends('layouts.index.header')
    @extends('layouts.add-apartment.header')
</head>
<body>
@include('layouts.add-apartment.navbar')
<div class="details">
    <div class="wrapper-880">
        {{--ACCORDION--}}
        <div class="accordion" id="accordionExample">
            <div class="accordion" id="accordionExample">
                @include('layouts.add-apartment.part1')
                @include('layouts.add-apartment.part2')
                @include('layouts.add-apartment.part3')
                @include('layouts.add-apartment.part4')
                @include('layouts.add-apartment.part5')
                @include('layouts.add-apartment.part6')
                @include('layouts.add-apartment.part7')
            </div>
        </div>
        {{--END ACCORDION--}}
    </div>
</div>
</body>
