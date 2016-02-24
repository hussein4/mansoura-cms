

<div class="form-group" >
    {!! Form::label('mr_no', 'MR Number:') !!}
    {!! Form::text('mr_no', null , ['class'=> 'form-control']) !!}
</div>



    <div class="form-group">
        {!! Form::label('mr_date', 'MR DATE:') !!}
        <div class="row">
            <div class='col-sm-6'>

{!! Form::input('text','mr_date',$mr->mr_date, ['class'=> 'form-control','id'=>'datetimepicker1']) !!}

            </div>
        </div>
    </div>


<div class="form-group">
    {!! Form::label('mr_received_date', 'Received Date:') !!}
    <div class="row">
        <div class='col-sm-6'>
            {!! Form::input('text','mr_received_date',$mr->mr_received_date, ['class'=> 'form-control','id'=>'datetimepicker2']) !!}
        </div>
    </div>
</div>

<div class="form-group">
    {!! Form::label('mr_received_by_officer_date', 'Received by Officer :') !!}
    <div class="row">
        <div class='col-sm-6'>

            {!! Form::input('text','mr_received_by_officer_date',$mr->mr_received_by_officer_date, ['class'=> 'form-control','id'=>'datetimepicker3']) !!}
        </div>
    </div>
</div>

<div class="form-group">
    {!! Form::label('mr_estimated_cost', 'Estimated Cost:') !!}
    <div class="row">
        <div class='col-sm-6'>

            {!! Form::input('text','mr_estimated_cost',$mr->mr_estimated_cost, ['class'=> 'form-control']) !!}

        </div>
    </div>
</div>


<div class="form-group">
    {!! Form::label('mr_checked_on_egpc_site', 'Checked EGPC Site:') !!}
    <div class="row">
        <div class='col-sm-6'>
            {!! Form::input('text','mr_checked_on_egpc_site',$mr->mr_checked_on_egpc_site, ['class'=> 'form-control','id'=>'datetimepicker8']) !!}
        </div>
    </div>
</div>

<div class="form-group">
    {!! Form::label('mr_rfq', 'RFQ DATE:') !!}
    <div class="row">
        <div class='col-sm-6'>
            {!! Form::input('text','mr_rfq',$mr->mr_rfq, ['class'=> 'form-control','id'=>'datetimepicker9']) !!}
        </div>
    </div>
</div>

<div class="form-group">
    {!! Form::label('mr_rfq_closing_date', 'RFQ Closing Date:') !!}
    <div class="row">
        <div class='col-sm-6'>
            {!! Form::input('text','mr_rfq_closing_date',$mr->mr_rfq_closing_date, ['class'=> 'form-control','id'=>'datetimepicker10']) !!}
        </div>
    </div>
</div>


<div class="form-group">
    {!! Form::label('mr_rfq_reminder', 'RFQ Reminder:') !!}
    <div class="row">
        <div class='col-sm-6'>
            {!! Form::input('text','mr_rfq_reminder',$mr->mr_rfq_reminder, ['class'=> 'form-control','id'=>'datetimepicker11']) !!}

        </div>
    </div>
</div>

<div class="form-group">
    {!! Form::label('mr_offers_open', 'Offers Opening:') !!}
    <div class="row">
        <div class='col-sm-6'>

            {!! Form::input('text','mr_offers_open',$mr->mr_offers_open, ['class'=> 'form-control','id'=>'datetimepicker12']) !!}


        </div>
    </div>
</div>

<div class="form-group">
    {!! Form::label('mr_offers_sent_to_tech_dept', 'Offers sent to Tech Dept:') !!}
    <div class="row">
        <div class='col-sm-6'>
            {!! Form::input('text','mr_offers_sent_to_tech_dept',$mr->mr_offers_sent_to_tech_dept, ['class'=> 'form-control','id'=>'datetimepicker13']) !!}
        </div>
    </div>
</div>

<div class="form-group">
    {!! Form::label('mr_offers_received_from_tech_dept_closing_date', 'Offers Evaluation by Tech. Dept. Closing Date:') !!}
    <div class="row">
        <div class='col-sm-6'>
            {!! Form::input('text','mr_offers_received_from_tech_dept_closing_date',$mr->mr_offers_received_from_tech_dept_closing_date, ['class'=> 'form-control','id'=>'datetimepicker14']) !!}

        </div>
    </div>
</div>

<div class="form-group">
    {!! Form::label('mr_offers_received_from_tech_dept_reminder', 'Reminder For Offers sent to Tech Dept:') !!}
    <div class="row">
        <div class='col-sm-6'>
            {!! Form::input('text','mr_offers_received_from_tech_dept_reminder',$mr->mr_offers_received_from_tech_dept_reminder, ['class'=> 'form-control','id'=>'datetimepicker24']) !!}

        </div>
    </div>
</div>
<div class="form-group">
    {!! Form::label('mr_offers_clarifications_sent_to_suppliers', 'Clarifications sent to Suppliers:') !!}
    <div class="row">
        <div class='col-sm-6'>

            {!! Form::input('text','mr_offers_clarifications_sent_to_suppliers',$mr->mr_offers_clarifications_sent_to_suppliers, ['class'=> 'form-control','id'=>'datetimepicker15']) !!}

        </div>
    </div>
</div>

<div class="form-group">
    {!! Form::label('mr_offers_clarifications_closing_date', 'Clarifications Closing Date:') !!}
    <div class="row">
        <div class='col-sm-6'>
            {!! Form::input('text','mr_offers_clarifications_closing_date',$mr->mr_offers_clarifications_closing_date, ['class'=> 'form-control','id'=>'datetimepicker16']) !!}

        </div>
    </div>
</div>

<div class="form-group">
    {!! Form::label('mr_offers_clarifications_received_from_supplier_reminder', 'Supplier Reminder Fax:') !!}
    <div class="row">
        <div class='col-sm-6'>
            {!! Form::input('text','mr_offers_clarifications_received_from_supplier_reminder',$mr->mr_offers_clarifications_received_from_supplier_reminder, ['class'=> 'form-control','id'=>'datetimepicker17']) !!}
        </div>
    </div>
</div>

<div class="form-group">
    {!! Form::label('mr_offers_clarifications_received_from_supplier', 'Clarifications Received from Suppliers:') !!}
    <div class="row">
        <div class='col-sm-6'>
            {!! Form::input('text','mr_offers_clarifications_received_from_supplier',$mr->mr_offers_clarifications_received_from_supplier, ['class'=> 'form-control','id'=>'datetimepicker18']) !!}
        </div>
    </div>
</div>


<div class="form-group">
    {!! Form::label('mr_offers_clarifications_sent_to_tech', 'Clarifications sent to Tech. Dept.:') !!}
    <div class="row">
        <div class='col-sm-6'>
            {!! Form::input('text','mr_offers_clarifications_sent_to_tech',$mr->mr_offers_clarifications_sent_to_tech, ['class'=> 'form-control','id'=>'datetimepicker19']) !!}
        </div>
    </div>
</div>

<div class="form-group">
    {!! Form::label('mr_sent_for_budget_expansion', 'Budget Expansion Memo:') !!}
    <div class="row">
        <div class='col-sm-6'>
            {!! Form::input('text','mr_sent_for_budget_expansion',$mr->mr_sent_for_budget_expansion, ['class'=> 'form-control','id'=>'datetimepicker20']) !!}
        </div>
    </div>
</div>

<div class="form-group">
    {!! Form::label('mr_sent_for_budget_expansion_reminder', 'Budget Expansion Reminder:') !!}
    <div class="row">
        <div class='col-sm-6'>
            {!! Form::input('text','mr_sent_for_budget_expansion_reminder',$mr->mr_sent_for_budget_expansion_reminder, ['class'=> 'form-control','id'=>'datetimepicker21']) !!}
        </div>
    </div>
</div>

<div class="form-group">
    {!! Form::label('mr_offers_evaluation', 'Offers Evaluation:') !!}
    <div class="row">
        <div class='col-sm-6'>
            {!! Form::input('text','mr_offers_evaluation',$mr->mr_offers_evaluation, ['class'=> 'form-control','id'=>'datetimepicker23']) !!}
        </div>
    </div>
</div>




<div class="form-group">
    <!--<select class="tag_list" multiple="multiple" data-tags="true  style="width: 50%">   -->
    {!! Form::label('tag_list_mr', 'Tags:') !!}
    {!! Form::select('tag_list_mr[]',$tags,null,[ 'class'=>'form-control','id'=> 'tag_list_mr' ,'multiple']) !!}
</div>


<div class="form-group">
    {!! Form::label('created_at', 'Created On:') !!}
    {!! Form::input('date','created_on', $mr->created_at , ['class'=> 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::submit($submitButtonText , ['class' => 'btn btn-primary form-control' ]) !!}
</div>

<script type="text/javascript">

    $('#tag_list_mr').select2({
        placeholder: 'choose a Tag',
        tags:true,
        data:[

        ]

    });

</script>

