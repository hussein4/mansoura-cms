
<div class="form-group">
    {!! Form::label('mr_b_no', 'MR NO') !!}
    <div class="row">
        <div class='col-sm-6'>

            {!! Form::input('text','mr_b_no',$budgetry->mr_b_no, ['class'=> 'form-control']) !!}
        </div>
    </div>
</div>


<div class="form-group">
    {!! Form::label('mr_b_subject', 'MR Subject') !!}
    <div class="row">
        <div class='col-sm-6'>

            {!! Form::input('text','mr_b_subject',$budgetry->mr_b_subject, ['class'=> 'form-control']) !!}
        </div>
    </div>
</div>



<div class="form-group">
    {!! Form::label('mr_b_date', 'MR Date') !!}
    <div class="row">
        <div class='col-sm-6'>

            {!! Form::input('text','mr_b_date',$budgetry->mr_b_date, ['class'=> 'form-control','id'=>'datetimepicker3']) !!}
        </div>
    </div>
</div>


<div class="form-group">
    {!! Form::label('mr_b_received_date', 'MR Received Date') !!}
    <div class="row">
        <div class='col-sm-6'>

            {!! Form::input('text','mr_b_received_date',$budgetry->mr_b_received_date, ['class'=> 'form-control','id'=>'datetimepicker4']) !!}
        </div>
    </div>
</div>

<div class="form-group">
    {!! Form::label('mr_b_received_by_officer_date', 'MR Received by Officer Date') !!}
    <div class="row">
        <div class='col-sm-6'>

            {!! Form::input('text','mr_b_received_by_officer_date',$budgetry->mr_b_received_by_officer_date,['class'=> 'form-control','id'=>'datetimepicker5']) !!}
        </div>
    </div>
</div>


<div class="form-group">
    {!! Form::label('mr_budgetry_rfq', 'Budgetry RFQ') !!}
    <div class="row">
        <div class='col-sm-6'>

            {!! Form::input('text','mr_budgetry_rfq',$budgetry->mr_budgetry_rfq, ['class'=> 'form-control','id'=>'datetimepicker6']) !!}
        </div>
    </div>
</div>

<div class="form-group">
    {!! Form::label('mr_rfq_budgetry_closing_date', 'Budgetry Offer Closing Date:') !!}
    <div class="row">
        <div class='col-sm-6'>
            {!! Form::input('text','mr_rfq_budgetry_closing_date',$budgetry->mr_rfq_budgetry_closing_date, ['class'=> 'form-control','id'=>'datetimepicker7']) !!}

        </div>
    </div>
</div>

<div class="form-group">
    {!! Form::label('mr_rfq_budgetry_reminder', 'Budgetry Offer Reminder:') !!}
    <div class="row">
        <div class='col-sm-6'>
            {!! Form::input('text','mr_rfq_budgetry_reminder',$budgetry->mr_rfq_budgetry_reminder, ['class'=> 'form-control','id'=>'datetimepicker8']) !!}
        </div>
    </div>
</div>

<div class="form-group">
    {!! Form::label('mr_budgetry_memo', 'Budgetry Memo To Technical Dept.:') !!}
    <div class="row">
        <div class='col-sm-6'>
            {!! Form::input('text','mr_budgetry_memo',$budgetry->mr_budgetry_memo, ['class'=> 'form-control','id'=>'datetimepicker9']) !!}
        </div>
    </div>
</div>


<div class="form-group">
    {!! Form::label('mr_b_estimated_cost', 'Budgetry Estimated Cost.:') !!}
    <div class="row">
        <div class='col-sm-6'>
            {!! Form::input('text','mr_b_estimated_cost',$budgetry->mr_b_estimated_cost, ['class'=> 'form-control']) !!}
        </div>
    </div>
</div>


<div class="form-group">
    {!! Form::label('mr_currency', 'Currency:') !!}
    <div class="row">
        <div class='col-sm-6'>
            {!! Form::select('mr_currency',['1'=>'EGP' ,'2'=>'USD' ,'3'=>'Euro' ,'4'=>'Sterling'],$budgetry->mr_currency, ['class'=> 'form-control','id'=>'currency_list']) !!}
        </div>
    </div>
</div>



<div class="form-group">

    {!! Form::label('tag_list_budgetry', 'Tags:') !!}
    {!! Form::select('tag_list_budgetry[]',$tags,null,[ 'class'=>'form-control','id'=> 'tag_list_budgetry' ,'multiple']) !!}
</div>



<div class="form-group">
    {!! Form::submit($submitButtonText , ['class' => 'btn btn-primary form-control' ]) !!}
</div>