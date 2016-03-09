

<div class="form-group" >
    {!! Form::label('m_code', 'Material Code:') !!}
    {!! Form::text('m_code',null , ['class'=> 'form-control']) !!}
</div>


<div class="form-group" >
    {!! Form::label('m_description', 'Material Description:') !!}
    {!! Form::text('m_description',null , ['class'=> 'form-control']) !!}
</div>

<div class="form-group" >
    {!! Form::label('m_unit', 'Material Unit:') !!}
    <div class="row">
        <div class='col-sm-10'>
            {!! Form::radio('m_unit', 'Ea') !!} Ea
            {!! Form::radio('m_unit', 'Litre') !!} Litre
            {!! Form::radio('m_unit', 'Galoon') !!} Galoon
            {!! Form::radio('m_unit', 'Drum') !!} Drum
            {!! Form::radio('m_unit', 'inch') !!} inch
            {!! Form::radio('m_unit', 'Foot') !!} ft
            {!! Form::radio('m_unit', 'Meter') !!} Meter
            {!! Form::radio('m_unit', 'Kilo Meter') !!} KM
            {!! Form::radio('m_unit', 'LB') !!} Libra
            {!! Form::radio('m_unit', 'KG') !!} KG
            {!! Form::radio('m_unit', 'Ton') !!} Ton


</div>
        </div>
    </div>



<div class="form-group" >
    {!! Form::label('m_consumption', 'Material Consumption per Year:') !!}
    {!! Form::text('m_consumption',null , ['class'=> 'form-control']) !!}
</div>


<div class="form-group" >
    {!! Form::label('m_max', 'Material Max Stock:') !!}
    {!! Form::text('m_max',null , ['class'=> 'form-control']) !!}
</div>


<div class="form-group" >
    {!! Form::label('m_min', 'Material Minimum Stock:') !!}
    {!! Form::text('m_min',null , ['class'=> 'form-control']) !!}
</div>

<div class="form-group" >
    {!! Form::label('m_stock', 'Material at Stock:') !!}
    {!! Form::text('m_stock',null , ['class'=> 'form-control']) !!}
</div>

<!--
<div class="form-group" >
    {!! Form::label('m_last_unit_price', 'Material unit Price:') !!}
    {!! Form::text('m_last_unit_price',null , ['class'=> 'form-control']) !!}
</div>


<div class="form-group" >
    {!! Form::label('m_last_unit_price_currency', 'Material unit Price Currency:') !!}
    <div class="row">
        <div class='col-sm-10'>
            {!! Form::radio('m_last_unit_price_currency', 'EGP') !!} EGP
            {!! Form::radio('m_last_unit_price_currency', 'USD') !!} USD
            {!! Form::radio('m_last_unit_price_currency', 'Euro') !!} Euro
            {!! Form::radio('m_last_unit_price_currency', 'Sterling') !!} Sterling

        </div>
    </div>
</div>

-->

<div class="form-group" >
    {!! Form::label('m_required', 'Material last Quantity Required:') !!}
    {!! Form::text('m_required',null , ['class'=> 'form-control']) !!}
</div>



<div class="form-group" >
    {!! Form::label('m_identity', 'Material Identity:') !!}
    <div class="row">
    <div class='col-sm-10'>
        {!! Form::radio('m_identity', 'Expense') !!} Expense
        {!! Form::radio('m_identity', 'Movable Assets') !!} Movable Assets
        {!! Form::radio('m_identity', 'Fixed Assets') !!}Fixed Assets
    </div>
    </div>
</div>


<div class="form-group" >
    {!! Form::label('m_usage', 'Material Usage:') !!}
    {!! Form::text('m_usage',null , ['class'=> 'form-control']) !!}
</div>


<div class="form-group" >
    {!! Form::label('m_requesting_dept', 'Material Requesting Dept.:') !!}
    {!! Form::text('m_requesting_dept',null , ['class'=> 'form-control']) !!}
</div>

<div class="form-group" >
    {!! Form::label('m_remarks', 'Material Remarks.:') !!}
    {!! Form::text('m_remarks',null , ['class'=> 'form-control']) !!}
</div>




<div class="form-group">

    {!! Form::label('tag_material_list', 'Tags:') !!}
    {!! Form::select('tag_material_list[]',$tags,null,[ 'class'=>'form-control','id'=> 'tag_material_list' ,'multiple']) !!}
</div>

<div class="form-group">
    {!! Form::submit($submitButtonText , ['class' => 'btn btn-primary form-control' ]) !!}
</div>

