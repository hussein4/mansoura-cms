<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>



<!--
<link href="{!! url('/css/all.css') !!}" rel="stylesheet" type="text/css" />
-->



<!--
<link href="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.1/css/select2.min.css" rel="stylesheet" />

<script src= "http://code.jquery.com/jquery.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.1/js/select2.min.js"></script>
-->

@include('partials.htmlheader')

<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="skin-blue sidebar-mini ">
<div class="wrapper">




    @include('partials.mainheader')

    @include('partials.sidebar')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">



        @include('partials.contentheader')



        @include('flash::message')

        <!-- Main content -->
        <section class="content">



            <link href="{{ asset('/css/all.css') }}" rel="stylesheet" type="text/css" > </link>
            <script src ="{{ asset('/js/all.js') }}" type="text/javascript" > </script>

            <script type="text/javascript" src="/bower_components/jquery/jquery.min.js"></script>
            <script type="text/javascript" src="/bower_components/moment/min/moment.min.js"></script>
            <script type="text/javascript" src="/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
            <script type="text/javascript" src="/bower_components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
            <link rel="stylesheet" href="/bower_components/bootstrap/dist/css/bootstrap.min.css" />
            <link rel="stylesheet" href="/bower_components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css" />
            <!-- Your Page Content Here -->
            @yield('main-content')



        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->

    @include('partials.controlsidebar')
<!--
    <script> src ="http://code.jquery.com/jquery.js"</script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.1/js/select2.min.js"></script>
-->



    @include('partials.footer')

</div><!-- ./wrapper -->


@include('partials.scripts')


</body>
</html>