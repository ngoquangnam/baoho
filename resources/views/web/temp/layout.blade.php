<!DOCTYPE html>
<html>
<head>

    <title>Cửa hàng bảo hộ lao Đức Sơn| Chuyên cung cấp đồ bảo hộ chất lượng cao</title>
    <!--/tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="keywords" content=""/>
<meta name="csrf-token" content="{{ csrf_token() }}">
    <script type="application/x-javascript"> addEventListener("load", function () {
        setTimeout(hideURLbar, 0);
    }, false);

    function hideURLbar() {
        window.scrollTo(0, 1);
    } </script>
    <!--//tags -->
    <link href="{{ asset('web/css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all"/>
    <link href="{{ asset('web/css/style.css') }}" rel="stylesheet" type="text/css" media="all"/>
    <link href="{{ asset('web/css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('web/css/easy-responsive-tabs.css') }}" rel='stylesheet' type='text/css'/>
    <!-- //for bootstrap working -->
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
    <link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,900italic,700italic'
          rel='stylesheet' type='text/css'>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
</head>
<body>
    <!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js#xfbml=1&version=v2.12&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!-- Your customer chat code -->
<div class="fb-customerchat"
  attribution="setup_tool"
  page_id="177187782943702"
  theme_color="#fa3c4c"
  logged_in_greeting="Chào bạn!"
  logged_out_greeting="Chào bạn!">
</div>

    @include('web.detail.header')

    @include('web.detail.header-bot')

    @include('web.detail.model1')

    @include('web.detail.model2')

    @include('web.detail.banner-top')

    @include('web.detail.banner')

    
    <div id="app">

    @include('web.detail.new')


    @include('web.detail.grids')

    @include('web.detail.footer')
    
    
    @include('web.detail.login')

    </div>
    @include('web.detail.js')
  <script src="{{ asset('web/js/jquery.flexisel.js')}}"></script>
  <script>
    $(window).load(function () {
      $("#flexiselDemo1").flexisel({
        visibleItems: 4,
        animationSpeed: 1000,
        autoPlay: true,
        autoPlaySpeed: 3000,
        pauseOnHover: true,
        enableResponsiveBreakpoints: true,
        responsiveBreakpoints: {
          portrait: {
            changePoint: 480,
            visibleItems: 1
          },
          landscape: {
            changePoint: 640,
            visibleItems: 2
          },
          tablet: {
            changePoint: 768,
            visibleItems: 3
          }
        }
      });

    });
  </script>
  <script>
  !function() {
  var t; if (t = window.botsify = window.botsify = window.botsify || [], !t.init) 
  return t.invoked ? void (window.console && console.error && console.error("Botsify snippet included twice.")) : (
  t.load =function(e){  var o,n;    o=document.createElement("script"); e.type="text/javscript"; o.async=!0; 
  o.crossorigin="anonymous";o.src="https://botsify.com/web-bot/script/"+e+"/botsify.js";
  n=document.getElementsByTagName("script")[0]; n.parentNode.insertBefore(o,n); });
  }(); botsify.load('OVInAENAW5VoDEiBbKBKDKSoNb8vtDhwPbeFreDK');
</script>
</body>
</html>