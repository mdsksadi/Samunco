<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Plugins CSS File -->
        <link rel="stylesheet" href="{{ asset('/public/dashboard-template/css/bootstrap.min.css') }}">

        <!-- Main CSS File -->
        <link rel="stylesheet" href="{{ asset('/public/dashboard-template/css/style.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('/public/dashboard-template/vendor/fontawesome-free/css/all.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('/public/dashboard-template/vendor/simple-line-icons/css/simple-line-icons.min.css') }}">
    </head>
    <body>
    <div class="page-wrapper">
        @include('dashboard.common.header')
        @yield('body')
        @include('dashboard.common.footer')
	    <a id="scroll-top" href="#top" title="Top" role="button"><i class="icon-angle-up"></i></a>
    </div>
        <script type="text/javascript">
        WebFontConfig = {
            google: { families: [ 'Open+Sans:300,400,600,700,800','Poppins:300,400,500,600,700' ] }
        };
        (function(d) {
            var wf = d.createElement('script'), s = d.scripts[0];
            wf.src = "{{ asset('/public/dashboard-template/js/webfont.js') }}";
            wf.async = true;
            s.parentNode.insertBefore(wf, s);
        })(document);
    </script>
    <script src="{{ asset('/public/dashboard-template/js/jquery.min.js') }}"></script>
	<script src="{{ asset('/public/dashboard-template/js/bootstrap.bundle.min.js') }}"></script>
	<script src="{{ asset('/public/dashboard-template/js/plugins.min.js') }}"></script>

	<!-- Main JS File -->
	<script src="{{ asset('/public/dashboard-template/js/main.min.js') }}"></script>
    @yield('script')
    </body>
    
</html>
