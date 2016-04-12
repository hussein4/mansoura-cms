@extends('app')

@section('htmlheader_title')
    Supplier
@endsection


@section('main-content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading"><h3><b>Material Description:</b> {{ $material->m_description }}</h3></div>

                    <div class="panel-body">


                        <material>

                            <table id="example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                                <thead>
                                <tbody>

                                @if(isset($material->m_code) && !empty($material->m_code) )
                                <tr>
                                    <th>Material Part No.</th>
                                    <td>{{ $material->m_code }}</td>
                                </tr>
                                @endif

                                @if(isset($material->m_mesc) && !empty($material->m_mesc) )
                                    <tr>
                                        <th>Material M.E.S.C</th>
                                        <td>{{ $material->m_mesc }}</td>
                                    </tr>
                                @endif

                                @if(isset($material->m_unit) && !empty ($material->m_unit) )
                                <tr>
                                    <th>Material Unit </th>
                                    <td>{{ $material->m_unit }}</td>
                                </tr>
                                @endif

                                @if(isset($material->m_stock) && !empty($material->m_stock) )
                                <tr>
                                    <th>Material Stock</th>
                                    <td>{{ $material->m_stock }}</td>
                                </tr>
                                @endif

                                @if(isset($material->m_min) )
                                <tr>
                                    <th>Material minimum Stock</th>
                                    <td>{{ $material->m_min }}</td>
                                </tr>
                                @endif

                                @if(isset($material->m_max))
                                <tr>
                                    <th>Material Maximum Stock</th>
                                    <td>{{ $material->m_max }}</td>
                                </tr>
                                @endif


                                @if(isset($material->m_consumption))
                                    <tr>
                                        <th>Material Yearly Consumption</th>
                                        <td>{{ $material->m_consumption }}</td>
                                    </tr>
                                @endif

                                @if(isset($material->m_reorder))
                                    <tr>
                                        <th>Material Reorder Quantity</th>
                                        <td>{{ $material->m_reorder }}</td>
                                    </tr>
                                @endif


                                @if(isset($material->m_required) && !empty($material->m_required))
                                    <tr>
                                        <th>Material Last Required Quantity</th>
                                        <td>{{ $material->m_required }}</td>
                                    </tr>
                                @endif


                                @if(isset($material->m_last_unit_price))
                                    <tr>
                                        <th>Material Last Unit Price</th>
                                        <td>{{ $material->m_last_unit_price }} {{ $material->m_last_unit_price_currency }}</td>
                                    </tr>
                                @endif



                                @if(isset($material->m_unit_price_conv_rate))
                                    <tr>
                                        <th>Material Last Unit Price Conversion Rate</th>
                                        <td>{{ $material->m_unit_price_conv_rate }}</td>
                                    </tr>
                                @endif



                                @if(isset($material->m_identity))
                                <tr>
                                    <th>Material Identity</th>
                                    <td>{{ $material->m_identity }}</td>
                                </tr>
                                @endif


                                @if(isset($material->m_requesting_dept))
                                    <tr>
                                        <th>Material Requesting Dept.</th>
                                        <td>{{ $material->m_requesting_dept }}</td>
                                    </tr>
                                @endif



                                @if(isset($material->m_usage))
                                <tr>
                                    <th>Material Usage</th>
                                    <td>{{ $material->m_usage }}</td>
                                </tr>
                                @endif


                                @if(isset($material->m_company))
                                    <tr>
                                        <th>Company</th>
                                        <td>{{ $material->m_company }}</td>
                                    </tr>
                                @endif


                                @if(isset($material->m_remarks))
                                <tr>
                                    <th>Remarks</th>
                                    <td>{{ $material->m_remarks }}</td>
                                </tr>
                                @endif


                                @if(isset($material->m_last_update_date))
                                    <tr>
                                        <th>Last Updated</th>
                                        <td>{{ $material->m_last_update_date }}</td>
                                    </tr>
                                @endif


                             </tbody>
                                </thead>


                            </table>

                            @unless ($material->tags->isEmpty())

                                <h5>Tags:</h5>
                                <ul>
                                    @foreach ($material->tags as $tag)
                                        <li>  <a href=" {{ action('TagsController@show', [$tag->slug]) }} " > <span> {{ $tag->name }} </span></a></li>

                                    @endforeach
                                </ul>
                            @endunless


                            <li><a href=" {{ action('MaterialsController@edit', [$material->id]) }} "><i class='fa fa-link'></i> <span>Edit Material : {!! $material->m_description !!}</span></a></li>
                        </material>


                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('partials.disqus')
@endsection