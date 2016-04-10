@extends('app')

@section('htmlheader_title')
    Supplier
@endsection


@section('main-content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading"><h3><b>Tags :</b> {{ $tag->name }} </h3></div>

                    <div class="panel-body">


                        

                            <table id="example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                                <thead>
                                <tbody>

                                <tr>
                                    <th colspan="2">Suppliers</th>

                                </tr>


                                @foreach ($tag->vlist as $suppliers)
                                    <tr>

                                        <td>
                                            <li>  <a href=" {{ action('VlistsController@show', [$suppliers->slug]) }} " > <span> {{ $suppliers->vname }} </span></a></li>
                                        </td>

                                    </tr>
                                @endforeach

                                <tr>
                                    <th colspan="2">Material</th>

                                </tr>


                                @foreach ($tag->material as $materials)
                                    <tr>

                                        <td>
                                            <li>  <a href=" {{ action('MaterialsController@show', [$materials->slug]) }} " > <span> {{ $materials->m_description }} </span></a></li>
                                        </td>

                                    </tr>
                                @endforeach

                                <tr>
                                    <th colspan="2">Budgetry Material Request.</th>

                                </tr>
                                @foreach ($tag->budgetry as $b)
                                    <tr>
                                        <td>
                                            <li>  <a href=" {{ action('BudgetriesController@show', [$b->slug]) }} " > <span> {{ $b->mr_b_no }} </span></a></li>
                                        </td>

                                    </tr>

                                @endforeach
                                <tr>
                                    <th colspan="2">Material Request No.</th>

                                </tr>
                                @foreach ($tag->mr as $mrs)
                                    <tr>
                                        <td>
                                            <li>  <a href=" {{ action('MRsController@show', [$mrs->slug]) }} " > <span> {{ $mrs->mr_no }} </span></a></li>
                                        </td>

                                    </tr>

                                @endforeach


                                <tr>
                                    <th colspan="2">Tender No.</th>
                                </tr>

                                @foreach ($tag->tender as $tenders)
                                    <tr>

                                        <td>
                                            <li>  <a href=" {{ action('TendersController@show', [$tenders->slug]) }} " > <span> {{ $tenders->mr_t_no }} </span></a></li>
                                        </td>
                                    </tr>
                                @endforeach


                                <tr>
                                    <th colspan="2">Purchase Order No.</th>
                                </tr>

                                @foreach ($tag->po as $pos)
                                    <tr>

                                        <td>
                                            <li>  <a href=" {{ action('POsController@show', [$pos->slug]) }} " > <span> {{ $pos->po_no }} </span></a></li>
                                        </td>
                                    </tr>
                                @endforeach



                                </tbody>
                                </thead>
                                </table>
                            
                        </div>
                </div>
            </div>
        </div>
    </div>
@endsection