@extends('app')

@section('htmlheader_title')
    Upload Materials
@endsection

@section('main-content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading"><h3><b>Import Materials from excel</b></h3></div>

                    <div class="panel-body">
                        {!! Form::open(['url'=>'material_s/import','method'=>'PUT', 'files' => TRUE]) !!}
                        <div class="field">
                            {!! Form::token() !!}
                            {!! Form::label('file') !!}
                            {!! Form::file('file') !!}
                        </div>

                        <div class="field">
                            {!! Form::submit('submit', ['class' => 'btn btn-success']) !!}
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
