<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    @yield('seo')
    {!! \App\Option::getvalue('pageheader') !!}
    <meta name="google-site-verification" content="{!! \App\Option::getvalue('google_veri') !!}" />
    <meta property="fb:admins" content="{{\App\Option::getvalue('fb_admin_id')}}" />
    <meta property="fb:app_id" content="{{\App\Option::getvalue('fb_app')}}" />
    <script src="https://apis.google.com/js/platform.js" async defer>
      {lang: 'vi'}
    </script>
</head>
<body>
{{--Facebook--}}
<div id="fb-root"></div>
<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.8";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));
</script>

{{--Quảng cáo AdNow--}}
<script type="text/javascript">
  (sc_adv_out = window.sc_adv_out || []).push({
    id : "448910",
    domain : "n.ads3-adnow.com"
  });
</script>
<script type="text/javascript" src="//st-n.ads3-adnow.com/js/adv_out.js"></script>

<div class="wrapper" id="backOnTop">
@include('partials.navibar')

<div class="ads container">
    {!! \App\Option::getvalue('ads_header') !!}
</div>

@yield('content')

    <!-- Footer -->
    <div class="clearfix"></div>
    <div class="ads container">
        {!! \App\Option::getvalue('ads_footer') !!}
    </div>

    <div class="footer">
        <div class="container">
            <div class="hidden-xs col-sm-5">
                {!! \App\Option::getvalue('copyright') !!}
            </div>
			<div>
                Truyện được đăng với mục đích sưu tầm chia sẻ phi lợi nhuận trong cộng đồng yêu thích tiểu thuyết, đồng thời giúp đỡ các bạn không có điều kiện đọc truyện do giới hạn về ngôn ngữ, địa phương, hay điều kiện tìm mua sách... có thể tiếp cận tác phẩm.
            </div>
            <ul class="col-xs-12 col-sm-7 list-unstyled">
                <li class="text-right pull-right">
					<span class="glyphicon glyphicon-envelope"></span>
                    <a href="{{url('contact')}}" title="Liên hệ">Liên hệ</a> - <a href="{{url('tos')}}" title="Điều khoản sử dụng">Lời ngõ</a> <a href="{{url('sitemap.xml')}}" title="Sitemap" target="_blank"></a><a class="backtop" href="#backOnTop" rel="nofollow" title="Lên Trên"><span class="glyphicon glyphicon-upload"></span></a>
                </li>
                <li class="hidden-xs tag-list"></li>
            </ul>
        </div>
    </div>
</div> <!-- #Wrapper -->

<!-- Jquery -->
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<!-- bootstrap -->
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<!-- My Script -->
<script src="{{ asset('assets/js/dinhquochan.js') }}"></script>

<script type="text/javascript">
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','__gaTracker');

    __gaTracker('create', '{!! \App\Option::getvalue('google_analytics') !!}', 'auto');
    __gaTracker('set', 'forceSSL', true);
    __gaTracker('send','pageview');
</script>

{!! \App\Option::getvalue('pagefooter') !!}

</body>
</html>