

<div class="form-group" >
    {!! Form::label('mr_no', 'MR Number:') !!}
    {!! Form::text('mr_no', null , ['class'=> 'form-control']) !!}
</div>
<!--
<div class="form-group">
    {!! Form::label('mr_date', 'MR Date:') !!}
    {!! Form::input('date', 'mr_date',null, ['class'=> 'form-control','id'=>'datepicker' ]) !!}
</div>

-->


    <div class="form-group">
        {!! Form::label('mr_date', 'MR DATE:') !!}
        <div class="row">
            <div class='col-sm-6'>

{!! Form::input('text','mr_date',$mr->mr_date, ['class'=> 'form-control','id'=>'datetimepicker1']) !!}


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

