

<div class="form-group" >
    {!! Form::label('po_no', 'PO Number:') !!}
    {!! Form::text('po_no',null , ['class'=> 'form-control']) !!}
</div>

<div class="form-group" >
    {!! Form::label('po_subject', 'Subject:') !!}
    {!! Form::text('po_subject',null, ['class'=> 'form-control']) !!}
</div>

<!--  working datepicker
<div class="form-group">
    {!! Form::label('po_issued', 'PO DATE:') !!}
    {!! Form::input('text','po_issued',Carbon::now(), ['class'=> 'form-control','id'=>'datepicker']) !!}
</div>

-->
<div class="container">
    <div class="form-group">
    {!! Form::label('po_issued', 'PO DATE:') !!}
    <div class="row">
        <div class='col-sm-6'>
   <span class="input-group-addon">
{!! Form::input('text','po_issued','', ['class'=> 'form-control','id'=>'datetimepicker1']) !!}
    <span class="glyphicon glyphicon-calendar"></span>
    </span>
            </div>
        </div>
    </div>
</div>


<div class="form-group">
    {!! Form::label('created_at', 'Created On:') !!}
    {!! Form::input('text','created_at',Carbon::now(), ['class'=> 'form-control','id'=>'datepicker1' ]) !!}
</div>






<div class="form-group">
    <!--<select class="tag_list" multiple="multiple" data-tags="true  style="width: 50%">   -->
    {!! Form::label('tag_list_po', 'Tags:') !!}
    {!! Form::select('tag_list_po[]',$tags,null,[ 'class'=>'form-control','id'=> 'tag_list_po' ,'multiple']) !!}
</div>

<div class="form-group">
    {!! Form::submit($submitButtonText , ['class' => 'btn btn-primary form-control' ]) !!}
</div>



<script type="text/javascript">
    $('#tag_list_po').select2({
        placeholder: 'choose a Tag',
        tags:true,
        data:[
        ]
    });
</script>
<!--
<script>
    $(function() {
        $( "#datepicker" ).datepicker();
    });
</script>

-->
<!--
<script>
    $(function()
    {
         $('#datepicker').datepicker({
             dateFormat: 'yy-m-d ',
             timeFormat:  'H:i:s'
         });

});
        </script>
        -->
<script>
    $(function()
    {
        $('#datetimepicker1').datetimepicker
        ({
            format:'d-M-Y H:m',
            inline:true

         });
    });
</script>
