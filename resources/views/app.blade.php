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



<!--  conflict with select 2
            <script type="text/javascript" src="/bower_components/jquery/dist/jquery.js"></script>
-->
            <script type="text/javascript" src="/bower_components/moment/moment.js"></script>
  <script type="text/javascript" src="/bower_components/bootstrap/dist/js/bootstrap.js"></script>




  <script type="text/javascript" src="/bower_components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>

  <script type="text/javascript" src="/bower_components/dropzone/dropzone.js"></script>


  <link rel="stylesheet" href="/bower_components/bootstrap/dist/css/bootstrap.css" />

  <link rel="stylesheet" href="/bower_components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css" />
     <script id="dsq-count-scr" src="//mansoura-cms.disqus.com/count.js" async></script>



                        <script type="text/javascript" src="/node_modules/npm-zepto/zepto/src/zepto.js"></script>

                        <link rel="stylesheet" href="/bower_components/iCheck/skins/flat/red.css" />
                       <script type="text/javascript" src="/bower_components/iCheck/icheck.js"></script>
     <link rel="stylesheet" href="/vendor/selectize/css/selectize.bootstrap3.css" rel="stylesheet" />


     <script type="text/javascript" src="/vendor/selectize/js/standalone/selectize.min.js"></script>

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