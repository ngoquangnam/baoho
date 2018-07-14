<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
<title>admin</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Minimal Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
 

<script src="{{ asset('admin/js/jquery.min.js') }}"> </script>

<!-- Custom Theme files -->
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/1.0.0-beta.2/classic/ckeditor.js"></script>


    <link href="{{ asset('admin/css/style.css')  }}" rel='stylesheet' type='text/css' />

<link href="{{ asset('admin/css/font-awesome.css')  }}" rel="stylesheet">
<!-- Mainly scripts -->
<!-- Custom and plugin javascript -->
<link href="{{ asset('admin/css/custom.css')  }}" rel="stylesheet">
<link href="{{ asset('admin/css/bootstrap.css')  }}" rel="stylesheet">



<script src="{{ asset('admin/js/jquery.metisMenu.js') }}"></script>
<script src="{{ asset('admin/js/jquery.slimscroll.min.js') }}"></script>
<script src="{{ asset('admin/js/screenfull.js') }}"></script>
<script src="{{ asset('admin/js/custom.js') }}"></script>
</head>
<body>

    @yield('content')

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
</body>

</html>
