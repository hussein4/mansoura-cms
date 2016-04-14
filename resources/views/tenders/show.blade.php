@extends('app')

@section('htmlheader_title')
    Tenders
@endsection


@section('main-content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading"><h3><b>Tenders :</b> {{ $tender->mr_t_no }} </h3></div>

                    <div class="panel-body">



                        <tender>

                            <table id="example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                                <thead>
                                <tbody>

                                <tr>
                                    <th>MR No.</th>
                                @foreach ($tender->mr as $m)
                                        <td><a href=" {{ action('MRsController@show', [$m->slug]) }} " ><span>{{ $m->mr_no }} </span></a>

                                    @endforeach
                                </tr>

                                <tr>
                                    <th>Subject</th>
                                    <td><b>{{ $tender->mr_t_subject }} </b> </td>
                                </tr>

                                <tr>
                                    <th>Officer</th>
                                    <td><b>{{ $tender->mr_t_officer }} </b> </td>
                                </tr>

                                <tr>
                                    <th>Identity</th>
                                    <td>{{ $tender->mr_t_identity }}</td>
                                </tr>
                                <tr>
                                    <th>Estimated Cost</th>
                                    @foreach ($tender->mr as $m)
                                        <td>  {{ $m->mr_estimated_cost }} </td>
                                    @endforeach
                                </tr>

                                <tr>
                                    <th>Currency</th>
                                    @foreach ($tender->mr as $m)
                                        <td>  {{ $m->mr_currency }} </td>
                                    @endforeach
                                </tr>

                                @if(isset($tender->mr_t_willing_fax))
                                <tr>
                                    <th>Willing Fax</th>
                                    <td>{{ $tender->mr_t_willing_fax }}</td>
                                </tr>
                                @endif

                                @if(isset($tender->mr_t_willing_fax_closing_date))
                                <tr>
                                    <th>Willing Fax Closing Day</th>
                                    <td>{{ $tender->mr_t_willing_fax_closing_date }}</td>
                                </tr>
                                @endif

                                @if(isset($tender->mr_t_prepare_draft))
                                <tr>
                                    <th>Prepare Tender's Draft</th>
                                    <td>{{ $tender->mr_t_prepare_draft }}</td>
                                </tr>
                                @endif

                                @if(isset($tender->mr_t_sub_bid_committee_formation_memo))
                                <tr>
                                    <th>Sub Bid-Committee Formation Memo</th>
                                    <td>{{ $tender->mr_t_sub_bid_committee_formation_memo }}</td>
                                </tr>
                                @endif

                                @if(isset($tender->mr_t_tender_criteria_memo))
                                <tr>
                                    <th>Sending Criteria Memo</th>
                                    <td>{{ $tender->mr_t_tender_criteria_memo }}</td>
                                </tr>
                                @endif

                                @if(isset($tender->mr_t_tender_criteria_memo_reply))
                                <tr>
                                    <th>Reply on Criteria Memo</th>
                                    <td>{{ $tender->mr_t_tender_criteria_memo_reply }}</td>
                                </tr>
                                @endif

                                @if(isset($tender->mr_t_tender_call_for_tender_memo))
                                <tr>
                                    <th>Call for Tender Memo</th>
                                    <td>{{ $tender->mr_t_tender_call_for_tender_memo }}</td>
                                </tr>
                                @endif

                                @if(isset($tender->mr_t_tender_call_for_tender_signature))
                                <tr>
                                    <th>Call for Tender Approval</th>
                                    <td>{{ $tender->mr_t_tender_call_for_tender_signature }}</td>
                                </tr>
                                @endif

                                @if(isset($tender->mr_t_tender_send_invitation_fax))
                                    <tr>
                                    <th>Invitation Fax  </th>
                                    <td>{{ $tender->mr_t_tender_send_invitation_fax }}</td>
                                </tr>
                                @endif

                                    @if(isset($tender->mr_t_closing_date))
                                                               <tr>
                                    <th>Tender Closing Date </th>
                                    <td>{{ $tender->mr_t_closing_date }}</td>
                                </tr>
                                    @endif


                                @if(isset($tender->mr_t_clarifications_sent_to_tech_dept))
                                <tr>
                                    <th>Clarifications sent to Tech. Dept. </th>
                                    <td>{{ $tender->mr_t_clarifications_sent_to_tech_dept }}</td>
                                </tr>
                                @endif

                                @if(isset($tender->mr_t_clarifications_received_from_tech_dept))
                                <tr>
                                    <th>Clarifications Received From Tech Dept. </th>
                                    <td>{{ $tender->mr_t_clarifications_received_from_tech_dept }}</td>
                                </tr>
                                @endif

                                @if(isset($tender->mr_t_clarifications_reply_fax))
                                <tr>
                                    <th>Reply on Suppliers Clarifications </th>
                                    <td>{{ $tender->mr_t_clarifications_reply_fax }}</td>
                                </tr>
                                @endif

                                @if(isset($tender->mr_t_open_tech_envelops))
                                <tr>
                                    <th>Technical Envelops Opening </th>
                                    <td>{{ $tender->mr_t_open_tech_envelops }}</td>
                                </tr>
                                @endif

                                @if(isset($tender->mr_t_received_tech_clarifications_from_tech_dept))
                                <tr>
                                    <th>Tech. Clarifications Received from Tech. Dept. </th>
                                    <td>{{ $tender->mr_t_received_tech_clarifications_from_tech_dept }}</td>
                                </tr>
                                @endif

                                @if(isset($tender->mr_t_sending_tech_clarifications_to_suppliers))
                                <tr>
                                    <th>Sending Tech Clarifications to Suppliers </th>
                                    <td>{{ $tender->mr_t_sending_tech_clarifications_to_suppliers }}</td>
                                </tr>
                                @endif

                                @if(isset($tender->mr_t_receive_tech_clarifications_reply))
                                <tr>
                                    <th>Receive Suppliers Reply  </th>
                                    <td>{{ $tender->mr_t_receive_tech_clarifications_reply }}</td>
                                </tr>
                                @endif

                                @if(isset($tender->mr_t_send_tech_clarifications_reply_to_tech_dept))
                                <tr>
                                    <th>Sending Reply to Tech. Dept. </th>
                                    <td>{{ $tender->mr_t_send_tech_clarifications_reply_to_tech_dept }}</td>
                                </tr>
                                @endif
                                @if(isset($tender->mr_t_receive_tech_evaluation_report))
                                <tr>
                                    <th>Receiving Tech. Evaluation Report </th>
                                    <td>{{ $tender->mr_t_receive_tech_evaluation_report }}</td>
                                </tr>
                                @endif

                                @if(isset($tender->mr_t_issue_tech_evaluation))
                                <tr>
                                    <th>Technical Evaluation Issuance </th>
                                    <td>{{ $tender->mr_t_issue_tech_evaluation }}</td>
                                </tr>
                                @endif

                                @if(isset($tender->mr_t_tech_eval_signature))
                                <tr>
                                    <th>Technical Evaluation Signature </th>
                                    <td>{{ $tender->mr_t_tech_eval_signature }}</td>
                                </tr>
                                @endif

                                @if(isset($tender->mr_t_open_commercial_offers))
                                <tr>
                                    <th>Commercial Envelops Opening </th>
                                    <td>{{ $tender->mr_t_open_commercial_offers }}</td>
                                </tr>
                                @endif

                                @if(isset($tender->mr_t_issue_commercial_evaluation))
                                <tr>
                                    <th>Commercial Evaluation Issuance </th>
                                    <td>{{ $tender->mr_t_issue_commercial_evaluation }}</td>
                                </tr>
                                @endif

                                @if(isset($tender->mr_t_commercial_evaluation_signature))
                                <tr>
                                    <th>Commercial Evaluation Signature </th>
                                    <td>{{ $tender->mr_t_commercial_evaluation_signature }}</td>
                                </tr>
                                @endif

                                @if(isset($tender->mr_t_sending_awarding_faxes))
                                <tr>
                                    <th>Sending Awarding Fax </th>
                                    <td>{{ $tender->mr_t_sending_awarding_faxes }}</td>
                                </tr>
                                @endif

                                @if(isset($tender->mr_t_sending_fin_memo))
                                <tr>
                                    <th>Sending Finance Memo </th>
                                    <td>{{ $tender->mr_t_sending_fin_memo }}</td>
                                </tr>
                                @endif


                                </tbody>
                                </thead>


                            </table>

                            @unless ($tender->tags->isEmpty())

                                <h5>Tags:</h5>
                                <ul>
                                    @foreach ($tender->tags as $tag)
                                        <li><a href=" {{ $tag->name }} "><span> {{ $tag->name }} </span></a></li>
                                    @endforeach
                                </ul>
                            @endunless

                            <li><a href="{{ action('TendersController@edit', [$tender->id])  }}"><i class='fa fa-link'></i> <span>Edit Tender No. : {!! $tender->mr_t_no !!}</span></a></li>
                            <li><a href="{{ action('TendersController@exportTender', [$tender->id]) }}"><i class='fa fa-link'></i> <span>Export Tender : {!! $tender->mr_t_no !!}</span></a></li>





                        </tender>


                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('partials.disqus')
@endsection