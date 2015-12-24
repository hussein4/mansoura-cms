

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
    {!! Form::label('vemail', 'Email:') !!}
    {!! Form::text('vemail', null , ['class'=> 'form-control']) !!}
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
<!--<select class="tag_list" multiple="multiple" data-tags="true  style="width: 50%">   -->
    {!! Form::label('tag_list', 'Tags:') !!}
    {!! Form::select('tag_list[]',$tags,null,[ 'class'=>'form-control','id'=> 'tag_list' ,'multiple']) !!}
</div>



<div class="form-group">
    {!! Form::label('created_on', 'Created On:') !!}
    {!! Form::input('date','created_on', $vlist->created_on , ['class'=> 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::submit($submitButtonText , ['class' => 'btn btn-primary form-control' ]) !!}
</div>

<script type="text/javascript">

    $('#tag_list').select2({
        placeholder: 'choose a Tag',
        tags:true,
        data:[

        ]

    });

</script>




