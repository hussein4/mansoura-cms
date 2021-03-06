

<div class="form-group" >
    {!! Form::label('m_code', 'Material Part No.:') !!}
    {!! Form::text('m_code',null , ['class'=> 'form-control']) !!}
</div>

<div class="form-group" >
    {!! Form::label('m_mesc', 'M.E.S.C.:') !!}
    {!! Form::text('m_mesc',null , ['class'=> 'form-control']) !!}
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
            {!! Form::radio('m_unit', 'JT') !!} JT
            {!! Form::radio('m_unit', 'PC') !!} PC
            {!! Form::radio('m_unit', 'ASSY') !!} ASSY
            {!! Form::radio('m_unit', 'SET') !!} SET
            {!! Form::radio('m_unit', 'BOX') !!} BOX
            {!! Form::radio('m_unit', 'KIT') !!} KIT
            {!! Form::radio('m_unit', 'CAN') !!} CAN
            {!! Form::radio('m_unit', 'PACK') !!} PACK
            {!! Form::radio('m_unit', 'Litre') !!} Litre
            {!! Form::radio('m_unit', 'Galoon') !!} Galoon
            {!! Form::radio('m_unit', 'Drum') !!} Drum
            {!! Form::radio('m_unit', 'inch') !!} inch
            {!! Form::radio('m_unit', 'Ft') !!} ft
            {!! Form::radio('m_unit', 'MT') !!} MT
            {!! Form::radio('m_unit', 'REEL') !!} REEL
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


<div class="form-group" >
    {!! Form::label('m_reorder', 'Reorder quantity:') !!}
    {!! Form::text('m_reorder',null , ['class'=> 'form-control']) !!}
</div>

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
            {!! Form::radio('m_last_unit_price_currency', 'GBP') !!} Pound

        </div>
    </div>
</div>


<div class="form-group" >
    {!! Form::label('m_unit_price_conv_rate', 'Unit Price Conversion rate:') !!}
    {!! Form::text('m_unit_price_conv_rate',null , ['class'=> 'form-control']) !!}
</div>



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
    {!! Form::label('m_company', 'Company:') !!}
    <div class="row">
        <div class='col-sm-10'>
            {!! Form::radio('m_company', '51') !!} 51 Qantara
            {!! Form::radio('m_company', '52') !!} 52 Mansoura
            {!! Form::radio('m_company', '53') !!} 53 MANS W/H
            {!! Form::radio('m_company', '54') !!} 54 Rawda

        </div>
    </div>
</div>


<div class="form-group" >
    {!! Form::label('m_requesting_dept', 'Material Requesting Dept.:') !!}
    <div class="row">
        <div class='col-sm-10'>
            {!! Form::radio('m_requesting_dept', 'Operations') !!} Operations
            {!! Form::radio('m_requesting_dept', 'Projects') !!} Projects
            {!! Form::radio('m_requesting_dept', 'Admin') !!} Admin
            {!! Form::radio('m_requesting_dept', 'IT') !!} IT
            {!! Form::radio('m_requesting_dept', 'EXP') !!} EXP

        </div>
    </div>
</div>


<div class="form-group" >
    {!! Form::label('m_usage', 'Material Usage:') !!}
    {!! Form::text('m_usage',null , ['class'=> 'form-control']) !!}
</div>



<div class="form-group" >
    {!! Form::label('m_remarks', 'Material Remarks.:') !!}
    {!! Form::text('m_remarks',null , ['class'=> 'form-control']) !!}
</div>


<div class="form-group">
    {!! Form::label('m_last_update_date', 'Last Update:') !!}
    <div class="row">
        <div class='col-sm-6'>

            {!! Form::input('text','m_last_update_date',null, ['class'=> 'form-control','id'=>'datetimepicker120']) !!}

        </div>
    </div>
</div>


<div class="form-group">

    {!! Form::label('tag_material_list', 'Tags:') !!}
    {!! Form::select('tag_material_list[]',$tags,null,[ 'class'=>'form-control','id'=> 'tag_material_list' ,'multiple']) !!}
</div>

<div class="form-group">
    {!! Form::submit($submitButtonText , ['class' => 'btn btn-primary form-control' ]) !!}
</div>

