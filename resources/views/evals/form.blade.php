
<!-- radio buttons -->

<div class="form-group ">

    {!! Form::label('quality', 'Quality:', ['class'=> 'form-control' ,'id'=>'iCheck']) !!}
    {!! Form::radio('quality','1','disabled') !!} Bad Quality
    {!! Form::radio('quality','2','disabled') !!} Accepted Quality
    {!! Form::radio('quality','3','disabled') !!} Good Quality
    {!! Form::radio('quality','4',true) !!} Excellent Quality
</div>
<div class="form-group ">
    {!! Form::label('delivery', 'Delivery:', ['class'=> 'form-control' ,'id'=>'iCheck']) !!}
    {!! Form::radio('delivery','1','disabled') !!} Bad Delivery
    {!! Form::radio('delivery','2','disabled') !!} Accepted Delivery
    {!! Form::radio('delivery','3','disabled') !!} Good Delivery
    {!! Form::radio('delivery','4',true) !!} Excellent Delivery
</div>

<div class="form-group ">

    {!! Form::label('bidbond', 'Bid & Performance Bond:', ['class'=> 'form-control' ,'id'=>'iCheck']) !!}
    {!! Form::radio('bidbond','1','disabled') !!} Does Not provide
    {!! Form::radio('bidbond','2','disabled') !!} Some Time Provides
    {!! Form::radio('bidbond','3','disabled') !!} Frequent Provides
    {!! Form::radio('bidbond','4',true) !!} Always Provide

</div>

<div class="form-group ">

    {!! Form::label('desc', 'Descripency:', ['class'=> 'form-control' ,'id'=>'iCheck']) !!}
    {!! Form::radio('desc','1','disabled') !!} Incomplete Documents
    {!! Form::radio('desc','2','disabled') !!} Some Missing Data
    {!! Form::radio('desc','3','disabled') !!} Accepted Documents
    {!! Form::radio('desc','4',true) !!} Complete Documents

</div>
