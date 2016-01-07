

<div class="form-group" >
{!! Form::label('vname', 'Name:') !!}
{!! Form::text('vname', null , ['class'=> 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('vservice', 'Service:') !!}
    {!! Form::textarea('vservice', null , ['class'=> 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('vaddress', 'Address:') !!}
    {!! Form::text('vaddress', null , ['class'=> 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('vfax', 'Fax:') !!}
    {!! Form::text('vfax', null , ['class'=> 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('vphone', 'Phone:') !!}
    {!! Form::text('vphone', null , ['class'=> 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('vmobile', 'Mobile:') !!}
    {!! Form::text('vmobile', null , ['class'=> 'form-control']) !!}
</div>


<div class="form-group">
    {!! Form::label('vemail', 'Email:') !!}
    {!! Form::text('vemail', null , ['class'=> 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('vcontactperson', 'Contact Person:') !!}
    {!! Form::text('vcontactperson', null , ['class'=> 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('vegpcno', 'EGPC No.:') !!}
    {!! Form::text('vegpcno', null , ['class'=> 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('vcapitallimit', 'Capital Limit:') !!}
    {!! Form::text('vcapitallimit', null , ['class'=> 'form-control']) !!}
</div>


<div class="form-group">
    {!! Form::label('vremarks', 'Remarks:') !!}
    {!! Form::textarea('vremarks', null , ['class'=> 'form-control']) !!}
</div>

<div class="form-group">
<!--<select class="tag_list" multiple="multiple" data-tags="true  style="width: 50%">   -->
    {!! Form::label('tag_list', 'Tags:') !!}
    {!! Form::select('tag_list[]',$tags,null,[ 'class'=>'form-control','id'=> 'tag_list' ,'multiple']) !!}
</div>

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


<div class="form-group">
    {!! Form::label('created_on', 'Created On:') !!}
    {!! Form::input('date','created_on', $vlist->created_on , ['class'=> 'form-control']) !!}
</div>


<div class="form-group">
    {!! Form::submit($submitButtonText , ['class' => 'btn btn-primary form-control' ]) !!}
</div>
