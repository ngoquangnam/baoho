@extends('admin.layout')

@section('content')
    <div id="wrapper">
        @include('admin.notification')

        @include('admin.nav')

        <div id="page-wrapper" class="gray-bg dashbard-1">

            <!--content-->

        </div>
        <div class="clearfix"></div>
    </div>
    <!---->
    <!--scrolling js-->
    <!--//scrolling js-->
    <script src="{{ asset('admin/js/jquery.nicescroll.js') }}"></script>
    <!--//scrolling js-->
@endsection