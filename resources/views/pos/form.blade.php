

<div class="form-group" >
    {!! Form::label('po_no', 'PO Number:') !!}
    {!! Form::text('po_no',null , ['class'=> 'form-control']) !!}
</div>

<div class="form-group" >
    {!! Form::label('po_subject', 'Subject:') !!}
    {!! Form::text('po_subject',null, ['class'=> 'form-control']) !!}
</div>


<div class="container">
    <div class="form-group">
    {!! Form::label('po_issued', 'PO DATE:') !!}
    <div class="row">
        <div class='col-sm-6'>
   <span class="input-group-addon">
{!! Form::input('text','po_issued',$po->po_issued, ['class'=> 'form-control','id'=>'datetimepicker60']) !!}
    <span class="glyphicon glyphicon-calendar"></span>
    </span>
            </div>
        </div>
    </div>
</div>


<div class="container">
    <div class="form-group">
        {!! Form::label('po_confirmation', 'PO Confirmed Date:') !!}
        <div class="row">
            <div class='col-sm-6'>
   <span class="input-group-addon">
{!! Form::input('text','po_confirmation',$po->po_confirmation, ['class'=> 'form-control','id'=>'datetimepicker61']) !!}
    <span class="glyphicon glyphicon-calendar"></span>
    </span>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="form-group">
        {!! Form::label('po_loaded_on_ideas', 'PO Loaded on Ideas:') !!}
        <div class="row">
            <div class='col-sm-6'>
   <span class="input-group-addon">
{!! Form::input('text','po_loaded_on_ideas',$po->po_loaded_on_ideas, ['class'=> 'form-control','id'=>'datetimepicker62']) !!}
    <span class="glyphicon glyphicon-calendar"></span>
    </span>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="form-group">
        {!! Form::label('po_approved_on_ideas', 'PO. Approved on Ideas:') !!}
        <div class="row">
            <div class='col-sm-6'>
   <span class="input-group-addon">
{!! Form::input('text','po_approved_on_ideas',$po->po_approved_on_ideas, ['class'=> 'form-control','id'=>'datetimepicker63']) !!}
    <span class="glyphicon glyphicon-calendar"></span>
    </span>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="form-group">
        {!! Form::label('po_memo_to_fin', 'Finance Memo:') !!}
        <div class="row">
            <div class='col-sm-6'>
   <span class="input-group-addon">
{!! Form::input('text','po_memo_to_fin',$po->po_memo_to_fin, ['class'=> 'form-control','id'=>'datetimepicker64']) !!}
    <span class="glyphicon glyphicon-calendar"></span>
    </span>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="form-group">
        {!! Form::label('po_delivery_date', 'Delivery Date:') !!}
        <div class="row">
            <div class='col-sm-6'>
   <span class="input-group-addon">
{!! Form::input('text','po_delivery_date',$po->po_delivery_date, ['class'=> 'form-control','id'=>'datetimepicker65']) !!}
    <span class="glyphicon glyphicon-calendar"></span>
    </span>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="form-group">
        {!! Form::label('po_reminder_delivery_date', 'Delivery Date Reminder:') !!}
        <div class="row">
            <div class='col-sm-6'>
   <span class="input-group-addon">
{!! Form::input('text','po_reminder_delivery_date',$po->po_reminder_delivery_date, ['class'=> 'form-control','id'=>'datetimepicker66']) !!}
    <span class="glyphicon glyphicon-calendar"></span>
    </span>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="form-group">
        {!! Form::label('po_mr_received_date', 'Materials Received Date:') !!}
        <div class="row">
            <div class='col-sm-6'>
   <span class="input-group-addon">
{!! Form::input('text','po_mr_received_date',$po->po_mr_received_date, ['class'=> 'form-control','id'=>'datetimepicker67']) !!}
    <span class="glyphicon glyphicon-calendar"></span>
    </span>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="form-group">
        {!! Form::label('po_mrr_missing_date', 'Missing From MRR:') !!}
        <div class="row">
            <div class='col-sm-6'>
   <span class="input-group-addon">
{!! Form::input('text','po_mrr_missing_date',$po->po_mrr_missing_date, ['class'=> 'form-control','id'=>'datetimepicker68']) !!}
    <span class="glyphicon glyphicon-calendar"></span>
    </span>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="form-group">
        {!! Form::label('po_mrr_rejected_date', 'Rejected From MRR:') !!}
        <div class="row">
            <div class='col-sm-6'>
   <span class="input-group-addon">
{!! Form::input('text','po_mrr_rejected_date',$po->po_mrr_rejected_date, ['class'=> 'form-control','id'=>'datetimepicker69']) !!}
    <span class="glyphicon glyphicon-calendar"></span>
    </span>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="form-group">
        {!! Form::label('po_mrr_received_date', 'MRR Received Date:') !!}
        <div class="row">
            <div class='col-sm-6'>
   <span class="input-group-addon">
{!! Form::input('text','po_mrr_received_date',$po->po_mrr_received_date, ['class'=> 'form-control','id'=>'datetimepicker70']) !!}
    <span class="glyphicon glyphicon-calendar"></span>
    </span>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="form-group">
        {!! Form::label('po_invoice_received_date', 'Invoice Received Date:') !!}
        <div class="row">
            <div class='col-sm-6'>
   <span class="input-group-addon">
{!! Form::input('text','po_invoice_received_date',$po->po_invoice_received_date, ['class'=> 'form-control','id'=>'datetimepicker71']) !!}
    <span class="glyphicon glyphicon-calendar"></span>
    </span>
            </div>
        </div>
    </div>
</div>


<div class="form-group" >
    {!! Form::label('po_penalty', 'Penalty:') !!}
    {!! Form::text('po_penalty',null, ['class'=> 'form-control']) !!}
</div>

<div class="container">
    <div class="form-group">
        {!! Form::label('po_cover_invoice', 'Invoice Cover:') !!}
        <div class="row">
            <div class='col-sm-6'>
   <span class="input-group-addon">
{!! Form::input('text','po_cover_invoice',$po->po_cover_invoice, ['class'=> 'form-control','id'=>'datetimepicker72']) !!}
    <span class="glyphicon glyphicon-calendar"></span>
    </span>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="form-group">
        {!! Form::label('po_completed', 'Completed:') !!}
        <div class="row">
            <div class='col-sm-6'>
   <span class="input-group-addon">
{!! Form::input('text','po_completed',$po->po_completed, ['class'=> 'form-control','id'=>'datetimepicker73']) !!}
    <span class="glyphicon glyphicon-calendar"></span>
    </span>
            </div>
        </div>
    </div>
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
