

<div class="form-group" >
    {!! Form::label('mr_no', 'MR Number:') !!}
    {!! Form::text('mr_no', null , ['class'=> 'form-control' ,'placeholder'=>'MANS 000-00']) !!}
</div>



    <div class="form-group">
        {!! Form::label('mr_date', 'MR DATE:') !!}
        <div class="row">
            <div class='col-sm-6'>

{!! Form::input('text','mr_date',null, ['class'=> 'form-control','id'=>'datetimepicker21']) !!}

            </div>
        </div>
    </div>


<div class="form-group">
    {!! Form::label('mr_received_date', 'Received Date:') !!}
    <div class="row">
        <div class='col-sm-6'>
            {!! Form::input('text','mr_received_date',null, ['class'=> 'form-control','id'=>'datetimepicker22']) !!}
        </div>
    </div>
</div>



<div class="form-group">
    {!! Form::label('mr_officer', 'Officer:') !!}
    <div class="row">
        <div class='col-sm-10'>
            {!! Form::radio('mr_officer', 'Hussein') !!} Hussein
            {!! Form::radio('mr_officer', 'Islam') !!} Islam
            {!! Form::radio('mr_officer', 'Nehal') !!} Nehal
            {!! Form::radio('mr_officer', 'Ahmed') !!} Ahmed
            {!! Form::radio('mr_officer', 'Yasser') !!} Yasser
            {!! Form::radio('mr_officer', 'Amira') !!} Amira
            {!! Form::radio('mr_officer', 'Ayman') !!} Ayman
            {!! Form::radio('mr_officer', 'Mahmoud') !!} Mahmoud
             </div>
    </div>
</div>


<div class="form-group">
    {!! Form::label('mr_received_by_officer_date', 'Received by Officer :') !!}
    <div class="row">
        <div class='col-sm-6'>

            {!! Form::input('text','mr_received_by_officer_date',$mr->mr_received_by_officer_date, ['class'=> 'form-control','id'=>'datetimepicker23']) !!}
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
    {!! Form::label('mr_currency', 'Currency:') !!}
    <div class="row">
        <div class='col-sm-10'>
            {!! Form::radio('mr_currency', 'EGP') !!} EGP
            {!! Form::radio('mr_currency', 'USD') !!} USD
            {!! Form::radio('mr_currency', 'Euro') !!} Euro
            {!! Form::radio('mr_currency', 'Sterling') !!} Sterling

        </div>
    </div>
</div>



<div class="form-group">

    {!! Form::label('material_mr_list', 'Materials Description:') !!}
    {!! Form::select('material_mr_list[]',$materials,null,[ 'class'=>'form-control','id'=> 'material_mr_list' ,'multiple']) !!}
</div>


<div class="form-group">
    {!! Form::label('mr_checked_on_egpc_site', 'Checked EGPC Site:') !!}
    <div class="row">
        <div class='col-sm-6'>
            {!! Form::input('text','mr_checked_on_egpc_site',$mr->mr_checked_on_egpc_site, ['class'=> 'form-control','id'=>'datetimepicker24']) !!}
        </div>
    </div>
</div>

<div class="form-group">
    {!! Form::label('mr_rfq', 'RFQ DATE:') !!}
    <div class="row">
        <div class='col-sm-6'>
            {!! Form::input('text','mr_rfq',$mr->mr_rfq, ['class'=> 'form-control','id'=>'datetimepicker25']) !!}
        </div>
    </div>
</div>

<div class="form-group">
    {!! Form::label('mr_rfq_closing_date', 'RFQ Closing Date:') !!}
    <div class="row">
        <div class='col-sm-6'>
            {!! Form::input('text','mr_rfq_closing_date',$mr->mr_rfq_closing_date, ['class'=> 'form-control','id'=>'datetimepicker26']) !!}
        </div>
    </div>
</div>


<div class="form-group">
    {!! Form::label('mr_rfq_reminder', 'RFQ Reminder:') !!}
    <div class="row">
        <div class='col-sm-6'>
            {!! Form::input('text','mr_rfq_reminder',$mr->mr_rfq_reminder, ['class'=> 'form-control','id'=>'datetimepicker27']) !!}

        </div>
    </div>
</div>

<div class="form-group">
    {!! Form::label('mr_offers_open', 'Offers Opening:') !!}
    <div class="row">
        <div class='col-sm-6'>

            {!! Form::input('text','mr_offers_open',$mr->mr_offers_open, ['class'=> 'form-control','id'=>'datetimepicker28']) !!}


        </div>
    </div>
</div>

<div class="form-group">
    {!! Form::label('mr_offers_sent_to_tech_dept', 'Offers sent to Tech Dept:') !!}
    <div class="row">
        <div class='col-sm-6'>
            {!! Form::input('text','mr_offers_sent_to_tech_dept',$mr->mr_offers_sent_to_tech_dept, ['class'=> 'form-control','id'=>'datetimepicker29']) !!}
        </div>
    </div>
</div>

<div class="form-group">
    {!! Form::label('mr_offers_received_from_tech_dept_closing_date', 'Offers Evaluation by Tech. Dept. Closing Date:') !!}
    <div class="row">
        <div class='col-sm-6'>
            {!! Form::input('text','mr_offers_received_from_tech_dept_closing_date',$mr->mr_offers_received_from_tech_dept_closing_date, ['class'=> 'form-control','id'=>'datetimepicker30']) !!}

        </div>
    </div>
</div>

<div class="form-group">
    {!! Form::label('mr_offers_received_from_tech_dept_reminder', 'Reminder For Offers sent to Tech Dept:') !!}
    <div class="row">
        <div class='col-sm-6'>
            {!! Form::input('text','mr_offers_received_from_tech_dept_reminder',$mr->mr_offers_received_from_tech_dept_reminder, ['class'=> 'form-control','id'=>'datetimepicker31']) !!}

        </div>
    </div>
</div>
<div class="form-group">
    {!! Form::label('mr_offers_clarifications_sent_to_suppliers', 'Clarifications sent to Suppliers:') !!}
    <div class="row">
        <div class='col-sm-6'>

            {!! Form::input('text','mr_offers_clarifications_sent_to_suppliers',$mr->mr_offers_clarifications_sent_to_suppliers, ['class'=> 'form-control','id'=>'datetimepicker32']) !!}

        </div>
    </div>
</div>

<div class="form-group">
    {!! Form::label('mr_offers_clarifications_closing_date', 'Clarifications Closing Date:') !!}
    <div class="row">
        <div class='col-sm-6'>
            {!! Form::input('text','mr_offers_clarifications_closing_date',$mr->mr_offers_clarifications_closing_date, ['class'=> 'form-control','id'=>'datetimepicker33']) !!}

        </div>
    </div>
</div>

<div class="form-group">
    {!! Form::label('mr_offers_clarifications_received_from_supplier_reminder', 'Supplier Reminder Fax:') !!}
    <div class="row">
        <div class='col-sm-6'>
            {!! Form::input('text','mr_offers_clarifications_received_from_supplier_reminder',$mr->mr_offers_clarifications_received_from_supplier_reminder, ['class'=> 'form-control','id'=>'datetimepicker34']) !!}
        </div>
    </div>
</div>

<div class="form-group">
    {!! Form::label('mr_offers_clarifications_received_from_supplier', 'Clarifications Received from Suppliers:') !!}
    <div class="row">
        <div class='col-sm-6'>
            {!! Form::input('text','mr_offers_clarifications_received_from_supplier',$mr->mr_offers_clarifications_received_from_supplier, ['class'=> 'form-control','id'=>'datetimepicker35']) !!}
        </div>
    </div>
</div>


<div class="form-group">
    {!! Form::label('mr_offers_clarifications_sent_to_tech', 'Clarifications sent to Tech. Dept.:') !!}
    <div class="row">
        <div class='col-sm-6'>
            {!! Form::input('text','mr_offers_clarifications_sent_to_tech',$mr->mr_offers_clarifications_sent_to_tech, ['class'=> 'form-control','id'=>'datetimepicker36']) !!}
        </div>
    </div>
</div>

<div class="form-group">
    {!! Form::label('mr_sent_for_budget_expansion', 'Budget Expansion Memo:') !!}
    <div class="row">
        <div class='col-sm-6'>
            {!! Form::input('text','mr_sent_for_budget_expansion',$mr->mr_sent_for_budget_expansion, ['class'=> 'form-control','id'=>'datetimepicker37']) !!}
        </div>
    </div>
</div>

<div class="form-group">
    {!! Form::label('mr_sent_for_budget_expansion_reminder', 'Budget Expansion Reminder:') !!}
    <div class="row">
        <div class='col-sm-6'>
            {!! Form::input('text','mr_sent_for_budget_expansion_reminder',$mr->mr_sent_for_budget_expansion_reminder, ['class'=> 'form-control','id'=>'datetimepicker38']) !!}
        </div>
    </div>
</div>

<div class="form-group">
    {!! Form::label('mr_offers_evaluation', 'Offers Evaluation') !!}
    <div class="row">
        <div class='col-sm-6'>
            {!! Form::input('text','mr_offers_evaluation',$mr->mr_offers_evaluation, ['class'=> 'form-control','id'=>'datetimepicker39']) !!}
        </div>
    </div>
</div>



<div class="form-group">

    {!! Form::label('po_mr_list', 'PO:') !!}
    {!! Form::select('po_mr_list[]',$po,null,[ 'class'=>'form-control','id'=> 'po_mr_list' ,'multiple']) !!}
</div>

<div class="form-group">

    {!! Form::label('tag_list_mr', 'Tags:') !!}
    {!! Form::select('tag_list_mr[]',$tags,null,[ 'class'=>'form-control','id'=> 'tag_list_mr' ,'multiple']) !!}
</div>



<div class="form-group">
    {!! Form::submit($submitButtonText , ['class' => 'btn btn-primary form-control' ]) !!}
</div>


