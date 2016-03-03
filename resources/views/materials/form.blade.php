

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
    {!! Form::text('m_unit',null , ['class'=> 'form-control']) !!}
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
    {!! Form::label('m_last_unit_price', 'Material unit Price:') !!}
    {!! Form::text('m_last_unit_price',null , ['class'=> 'form-control']) !!}
</div>


<div class="form-group" >
    {!! Form::label('m_last_unit_price_currency', 'Material unit Price Currency:') !!}
    {!! Form::text('m_last_unit_price_currency',null , ['class'=> 'form-control']) !!}
</div>


<div class="form-group" >
    {!! Form::label('m_required', 'Material last Quantity Required:') !!}
    {!! Form::text('m_required',null , ['class'=> 'form-control']) !!}
</div>



<div class="form-group" >
    {!! Form::label('m_identity', 'Material Identity:') !!}
    {!! Form::text('m_identity',null , ['class'=> 'form-control']) !!}
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

