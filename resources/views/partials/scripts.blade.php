<!-- REQUIRED JS SCRIPTS -->
<!--
<<link rel ="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.1/css/select2.min.css"  />
<script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.1/js/select2.min.js"></script>
-->



<!-- jQuery 2.1.4 -->
<!--
<script src="  //asset('/plugins/jQuery/jQuery-2.1.4.min.js') }}"></script>
-->
<!-- Bootstrap 3.3.2 JS -->
<!--
<script src="  //asset('/js/bootstrap.min.js') }}" type="text/javascript"></script>

-->
<!-- AdminLTE App -->
<script src="{{ asset('/js/app.min.js') }}" type="text/javascript"></script>


<!--
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
-->
<!-- for date picker
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
-->
<!--
<link rel="stylesheet" type="text/css" href="/jquery.datetimepicker.css"/ >
-->
<!--
<script src="//code.jquery.com/jquery-1.10.2.js"></script>

-->
<!-- for date picker
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
-->
<!--
<script src="/build/jquery.datetimepicker.full.min.js"></script>

-->


<!--
<script src="//code.jquery.com/jquery.js"></script>
<script> src="/maxcdn.bootstrapcdn/bootstrap/3.2.0/js/bootstrap.min.js"</script>
  -->
<script>
    $('#flash-overlay-modal').modal();
   // $('div.alert').not('.alert-important').delay(3000).slideUp(300);   //for success message
</script>

<!--
<script src="http://code.jquery.com/jquery.js"> </script>
<script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.1/js/select2.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
-->

<!-- Optionally, you can add Slimscroll and FastClick plugins.
      Both of these plugins are recommended to enhance the
      user experience. Slimscroll is required when using the
      fixed layout. -->


<script>


    $(function()
    {
        $('#datetimepicker1').datetimepicker
        ({


            format: 'DD-MMMM-YYYY hh:00 A',

            inline:true,
            sideBySide: true
        });
    });
</script>


<script type="text/javascript">
    $('#tag_list').select2({
        placeholder: 'choose a Tag',
        tags:true,
        data:[
        ]
    });
</script>


