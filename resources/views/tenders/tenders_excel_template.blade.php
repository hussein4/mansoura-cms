<!DOCTYPE html
        PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <style>


        .table-border tr{
            border-right: 1px solid #000000;
            border-top: 4px solid #000000;
            border-left: 1px solid #000000;
            border-bottom: 1px solid #000000;
        }

        .table-border-bottom tr{
            border-bottom: 2px solid #000000;
        }

        .table-border-top tr{
            border-top: 2px solid #000000;
        }

    </style>
</head>
<body class="page">
<table >
    <tbody>
    <tr style="color:rgb(51,51,153);background-color: #9a9a9a; font-weight: 400; ">
        <th colspan="1" align="right"  >Tender No.:</th><td ><h3>{{ $tenders->mr_t_no }}</h3></td>
    </tr>
    <tr style="color:rgb(51,51,153);background-color: #9a9a9a; font-weight: 400; ">
        <th colspan="1" align="right"  >Subject: </th><td><h3>{{ $tenders->mr_t_subject }}</h3></td>
    </tr>



    </tbody>
</table>
<table class="table-border">

    @foreach($tenders->mr as $m)
        <tr>
            <th align="right">MR No:</th><td align="center">{{ $m->mr_no }}</td>
        </tr>
        <tr>
            <th align="right">MR Estimated Cost:</th><td align="center">{{ $m->mr_estimated_cost }} {{ $m->mr_currency }}</td>
        </tr>

        <tr>
            <th align="right">MR Received Date:</th><td align="center">{{ $m->mr_received_date }}</td>
        </tr>
        <tr>
            <th align="right">MR Received Date:</th><td align="center">{{ $m->mr_received_by_officer_date }}</td>
        </tr>
        <tr>
            <th align="right">MR Received Date:</th><td align="center">{{ $m->mr_required_date }}</td>
        </tr>


    @endforeach


    <tr>
        <th align="right">Identity:</th><td align="center">{{ $tenders->mr_t_identity }}</td>
    </tr>

    <tr>
        <th align="right">Officer:</th><td align="center">{{ $tenders->mr_t_officer }}</td>
    </tr>


    <tr style="color:rgb(51,51,153);background-color: #9a9a9a; font-weight: 400; ">
        <th> Tender Document Preparation Phase</th>
    </tr>

    <tr>
        <th align="right">Draft Prepared:</th><td align="center">{{ $tenders->mr_t_prepare_draft }}</td>
    </tr>

    <tr>
        <th align="right">Memo For Sub-Bid Committee Formation:</th><td align="center">{{ $tenders->mr_t_sub_bid_committee_formation_memo }}</td>
    </tr>

    <tr>
        <th align="right">Tender Criteria Memo:</th><td align="center">{{ $tenders->mr_t_tender_criteria_memo }}</td>
    </tr>

    <tr>
        <th align="right">Reply on Tender Criteria Memo:</th><td align="center">{{ $tenders->mr_t_tender_criteria_memo_reply }}</td>
    </tr>

    <tr>
        <th align="right">Call For Tender Memo:</th><td align="center">{{ $tenders->mr_t_tender_call_for_tender_memo }}</td>
    </tr>

    <tr>
        <th align="right">Call For Tender Memo Signature:</th><td align="center">{{ $tenders->mr_t_tender_call_for_tender_signature }}</td>
    </tr>


    <tr style="color:rgb(51,51,153);background-color: #9a9a9a; font-weight: 400; ">
        <th> Tender Issuance Phase</th>
    </tr>

    <tr>
        <th align="right">Invitation Fax:</th><td align="center">{{ $tenders->mr_t_tender_send_invitation_fax }}</td>
    </tr>

    <tr>
        <th align="right">Tender's Closing Date:</th><td align="center">{{ $tenders->mr_t_closing_date }}</td>
    </tr>

    <tr>
        <th align="right">Clarifications Sent to Technical Dept.:</th><td align="center">{{ $tenders->mr_t_clarifications_sent_to_tech_dept }}</td>
    </tr>

    <tr>
        <th align="right">Clarifications Received From Technical Dept.:</th><td align="center">{{ $tenders->mr_t_clarifications_received_from_tech_dept }}</td>
    </tr>

    <tr>
        <th align="right">Clarifications sent to Suppliers.:</th><td align="center">{{ $tenders->mr_t_clarifications_reply_fax }}</td>
    </tr>

    <tr style="color:rgb(51,51,153);background-color: #9a9a9a; font-weight: 400; ">
        <th> Technical Evaluation Phase</th>
    </tr>

    <tr>
        <th align="right">Technical Offers Opening.:</th><td align="center">{{ $tenders->mr_t_open_tech_envelops }}</td>
    </tr>

    <tr>
        <th align="right">Technical Clarifications Received from Tech. Dept.:</th><td align="center">{{ $tenders->mr_t_received_tech_clarifications_from_tech_dept }}</td>
    </tr>

    <tr>
        <th align="right">Sending Technical Clarifications to Suppliers.:</th><td align="center">{{ $tenders->mr_t_sending_tech_clarifications_to_suppliers }}</td>
    </tr>

    <tr>
        <th align="right">Sending Technical Clarifications Reply to Tech. Dept.:</th><td align="center">{{ $tenders->mr_t_receive_tech_clarifications_reply }}</td>
    </tr>

    <tr>
        <th align="right">Receive Technical Evaluation Report:</th><td align="center">{{ $tenders->mr_t_receive_tech_evaluation_report }}</td>
    </tr>

    <tr>
        <th align="right">Technical Evaluation Issuance:</th><td align="center">{{ $tenders->mr_t_issue_tech_evaluation }}</td>
    </tr>

    <tr>
        <th align="right">Technical Evaluation Approval:</th><td align="center">{{ $tenders->mr_t_tech_eval_signature }}</td>
    </tr>

    <tr style="color:rgb(51,51,153);background-color: #9a9a9a; font-weight: 400; ">
        <th> Commercial Evaluation Phase</th>
    </tr>

    <tr>
        <th align="right">Commercial Offers Opening:</th><td align="center">{{ $tenders->mr_t_open_commercial_offers }}</td>
    </tr>

    <tr>
        <th align="right">Commercial Evaluation Issuance:</th><td align="center">{{ $tenders->mr_t_issue_commercial_evaluation }}</td>
    </tr>

    <tr>
        <th align="right">Commercial Evaluation Approval:</th><td align="center">{{ $tenders->mr_t_commercial_evaluation_signature }}</td>
    </tr>

    <tr>
        <th align="right">Sending Awarding Fax:</th><td align="center">{{ $tenders->mr_t_sending_awarding_faxes }}</td>
    </tr>

    <tr>
        <th align="right">Sending Finance Memo:</th><td align="center">{{ $tenders->mr_t_sending_fin_memo }}</td>
    </tr>

    <tr>
        <th align="right">Tender Completed:</th><td align="center">{{ $tenders->mr_t_finished }}</td>
    </tr>


    @foreach($tenders->tags as $tag)

        <tr>
            <th align="right">Tag:</th><td align="center">{{ $tag->name }}</td>
        </tr>

    @endforeach






</table>




</body>
</html>