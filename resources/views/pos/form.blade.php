

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
{!! Form::input('text','po_issued',$po->po_issued, ['class'=> 'form-control','id'=>'datetimepicker81']) !!}
    <span class="glyphicon glyphicon-calendar"></span>
    </span>
            </div>
        </div>
    </div>
</div>


<div class="form-group">

    {!! Form::label('mr_list', 'MR:') !!}
    {!! Form::select('mr_list[]',$mr,null,[ 'class'=>'form-control','id'=> 'mr_list' ,'multiple']) !!}
</div>

<div class="form-group">

    {!! Form::label('suppliers_list', 'Supplier') !!}
    {!! Form::select('suppliers_list[]',$suppliers,null,[ 'class'=>'form-control','id'=> 'suppliers_list','multiple' ]) !!}
</div>



<div class="form-group" >
    {!! Form::label('po_materials_cost', 'Materials Cost:') !!}
    {!! Form::text('po_materials_cost',null, ['class'=> 'form-control']) !!}
</div>


<div class="form-group" >
    {!! Form::label('po_freight_cost', 'Freight Cost:') !!}
    {!! Form::text('po_freight_cost',null, ['class'=> 'form-control']) !!}
</div>


<div class="form-group" >
    {!! Form::label('po_total_cost', 'Total Purchase Order Cost:') !!}
    {!! Form::text('po_total_cost',null, ['class'=> 'form-control']) !!}
</div>



<div class="form-group">
    {!! Form::label('po_currency', 'Purchase Order Currency:', ['class'=>'form-control', 'id'=>'po_currency']) !!}
    <div class="row">
        <div class='col-sm-10'>
            {!! Form::radio('po_currency', 'EGP') !!} EGP
            {!! Form::radio('po_currency', 'USD') !!} USD
            {!! Form::radio('po_currency', 'Euro') !!} Euro
            {!! Form::radio('po_currency', 'GBP') !!} POUND

        </div>
    </div>
</div>


<div class="form-group">
    {!! Form::label('po_payment_method', 'Payment Method:' ,['class'=>'form-control', 'id'=>'po_payment_method']) !!}
    <div class="row">
        <div class='col-sm-10'>
            {!! Form::radio('po_payment_method', 'Net 45') !!} Net 45
            {!! Form::radio('po_payment_method', 'Net 30') !!} Net 30
            {!! Form::radio('po_payment_method', 'Cash Aganist Delivery') !!} Cash Aganist Delivery
            {!! Form::radio('po_payment_method', 'Cash Aganist Documents') !!} Cash Aganist Documents
            {!! Form::radio('po_payment_method', 'L/C') !!} L/C
            {!! Form::radio('po_payment_method', 'Advance Payment') !!} Advance Payment


        </div>
    </div>
</div>


<div class="container">
    <div class="form-group">
        {!! Form::label('po_delivery_date', 'Delivery Date:') !!}
        <div class="row">
            <div class='col-sm-6'>
   <span class="input-group-addon">
{!! Form::input('text','po_delivery_date',$po->po_delivery_date, ['class'=> 'form-control','id'=>'datetimepicker86']) !!}
    <span class="glyphicon glyphicon-calendar"></span>
    </span>
            </div>
        </div>
    </div>
</div>


<div class="form-group">
    {!! Form::label('po_delivery_method', 'Delivery Method:',['class'=>'form-control', 'id'=>'po_delivery_method']) !!}
    <div class="row">
        <div class='col-sm-10'>
            {!! Form::radio('po_delivery_method', 'ExWorks') !!} Ex Works
            {!! Form::radio('po_delivery_method', 'FCA') !!} FCA
            {!! Form::radio('po_delivery_method', 'FAS') !!} FAS
            {!! Form::radio('po_delivery_method', 'FOB') !!} FOB
            {!! Form::radio('po_delivery_method', 'CFR') !!} CFR
            {!! Form::radio('po_delivery_method', 'CIF') !!} CIF
            {!! Form::radio('po_delivery_method', 'CPT') !!} CPT
            {!! Form::radio('po_delivery_method', 'CIB') !!} CIB
            {!! Form::radio('po_delivery_method', 'DAP') !!} DAP
            {!! Form::radio('po_delivery_method', 'DAT') !!} DAT
            {!! Form::radio('po_delivery_method', 'DDP') !!} DDP
            {!! Form::radio('po_delivery_method', 'At Mansoura Fields') !!}  Mansoura Fields
            {!! Form::radio('po_delivery_method', 'Suppliers WareHouse') !!} Supplier's WareHouse
            {!! Form::radio('po_delivery_method', 'Free Zone') !!} Free Zone

        </div>
    </div>
</div>







<div class="form-group">

    {!! Form::label('material_list', 'Items') !!}
    {!! Form::select('material_list[]',$material,null,[ 'class'=>'form-control','id'=> 'material_list','multiple' ]) !!}
</div>


<div class="container">
    <div class="form-group">
        {!! Form::label('po_confirmation', 'PO Confirmed Date:') !!}
        <div class="row">
            <div class='col-sm-6'>
   <span class="input-group-addon">
{!! Form::input('text','po_confirmation',$po->po_confirmation, ['class'=> 'form-control','id'=>'datetimepicker82']) !!}
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
{!! Form::input('text','po_loaded_on_ideas',$po->po_loaded_on_ideas, ['class'=> 'form-control','id'=>'datetimepicker83']) !!}
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
{!! Form::input('text','po_approved_on_ideas',$po->po_approved_on_ideas, ['class'=> 'form-control','id'=>'datetimepicker84']) !!}
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
{!! Form::input('text','po_memo_to_fin',$po->po_memo_to_fin, ['class'=> 'form-control','id'=>'datetimepicker85']) !!}
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
{!! Form::input('text','po_reminder_delivery_date',$po->po_reminder_delivery_date, ['class'=> 'form-control','id'=>'datetimepicker87']) !!}
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
{!! Form::input('text','po_mr_received_date',$po->po_mr_received_date, ['class'=> 'form-control','id'=>'datetimepicker88']) !!}
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
{!! Form::input('text','po_mrr_missing_date',$po->po_mrr_missing_date, ['class'=> 'form-control','id'=>'datetimepicker89']) !!}
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
{!! Form::input('text','po_mrr_rejected_date',$po->po_mrr_rejected_date, ['class'=> 'form-control','id'=>'datetimepicker90']) !!}
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
{!! Form::input('text','po_mrr_received_date',$po->po_mrr_received_date, ['class'=> 'form-control','id'=>'datetimepicker91']) !!}
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
{!! Form::input('text','po_invoice_received_date',$po->po_invoice_received_date, ['class'=> 'form-control','id'=>'datetimepicker92']) !!}
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
{!! Form::input('text','po_cover_invoice',$po->po_cover_invoice, ['class'=> 'form-control','id'=>'datetimepicker93']) !!}
    <span class="glyphicon glyphicon-calendar"></span>
    </span>
            </div>
        </div>
    </div>
</div>



<div class="form-group">
    {!! Form::label('po_completed', 'PO Completed:') !!}
    <div class="row">
        <div class='col-sm-6'>
            {!!Form::radio('po_completed',1) !!} Yes
            {!! Form::radio('po_completed', 0) !!} No
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

<script type="text/javascript">
    $('#mr_list').select2({
        placeholder: 'choose a MR',
        tags:true,
        data:[
        ]
    });
</script>

<script type="text/javascript">
    $('#suppliers_list').select2({
        placeholder: 'Supplier',
        tags:true,
        data:[
        ]
    });
</script>


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
