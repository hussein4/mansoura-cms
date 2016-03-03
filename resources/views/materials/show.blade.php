@extends('app')

@section('htmlheader_title')
    Supplier
@endsection


@section('main-content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Material : {{ $material->m_code }}</div>

                    <div class="panel-body">


                        <material>

                            <table id="example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                                <thead>
                                <tbody>
                                <tr>
                                    <th>Material Description</th>
                                    <td>{{ $material->m_description }}</td>
                                </tr>

                                <tr>
                                    <th>Material Unit</th>
                                    <td>{{ $material->m_unit }}</td>
                                </tr>


                                <tr>
                                    <th>Material Stock</th>
                                    <td>{{ $material->m_stock }}</td>
                                </tr>
                                <tr>
                                    <th>Material minimum Stock</th>
                                    <td>{{ $material->m_min }}</td>
                                </tr>

                                <tr>
                                    <th>Material Maximum Stock</th>
                                    <td>{{ $material->m_max }}</td>
                                </tr>

                                <tr>
                                    <th>Material Unit Price</th>
                                    <td>{{ $material->m_last_unit_price }}</td>
                                </tr>

                                <tr>
                                    <th>Material Unit Price Currency</th>
                                    <td>{{ $material->m_last_unit_price_currency }}</td>
                                </tr>

                                </thead>

                                </tbody>
                            </table>

                            @unless ($material->tags->isEmpty())

                                <h5>Tags:</h5>
                                <ul>
                                    @foreach ($material->tags as $tag)
                                        <li> {{ $tag->name }}</li>
                                    @endforeach
                                </ul>
                            @endunless


                            <li><a href=" {{ action('MaterialsController@edit', [$material->id]) }} "><i class='fa fa-link'></i> <span>Edit Material : {!! $materialaterial->po_no !!}</span></a></li>
                        </material>


                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('partials.disqus')
@endsection