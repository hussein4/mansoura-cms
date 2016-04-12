@extends('app')

@section('htmlheader_title')
    Home
@endsection


@section('main-content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading"><h3><b>Materials</b></h3></div>

                    <div class="panel-body">

                        <po>

                            <table id="example" class="table stripe row-border order-column" width="100%" cellspacing="0">
                                <thead>
                                <tr>
                                    <th>Material Description</th>
                                    <th>Material Part No.</th>
                                    <th>Material M.E.S.C</th>
                                    <th>Material Unit</th>
                                    <th>Material Stock</th>
                                    <th>Material Min</th>
                                    <th>Material Max</th>
                                    <th>Material  Unit Price </th>

                                </tr>
                                </thead>
                                @foreach($material as $m)
                                    <tbody>
                                    <tr>

                                        <td><a href=" {{ action('MaterialsController@show', [$m->slug])  }}"> {{ $m->m_description }} </a></td>
                                        <td>{{ $m->m_code }}</td>
                                        <td>{{ $m->m_mesc }}</td>
                                        <td>{{ $m->m_unit }}</td>
                                        <td>{{ $m->m_stock }}</td>
                                        <td>{{ $m->m_min }}</td>
                                        <td>{{ $m->m_max }}</td>
                                        <td>{{ $m->m_last_unit_price }} {{ $m->m_last_unit_price_currency }} </td>
                                        <td></td>

                                    </tr>
                                    </tbody>


                                @endforeach

                            </table>
                            <a href="material_s/import">Import Material(s) </a>
                        </po>


                    </div>
                </div>
            </div>
        </div>
    </div>

    {!! $material->render() !!}
@endsection
