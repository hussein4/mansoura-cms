<!DOCTYPE html
        PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <style>


        .table-border tr{
            border-right: 3px solid #06553f;
            border-top: 1px solid #06553f;
            border-left: 3px solid #06553f;
            border-bottom: 1px solid #06553f;
            height: 40cm;
            align-content: center;

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
        <th colspan="8" align="center" ><h3> Tenders </h3></th></tr>


    </tbody>
</table>

<table class ="table-border">
    <tr style="color:rgb(19, 54, 153);background-color: #9a9a9a" align="center">

        <th align="center">MR No.</th>

        <th align="center">MR Received</th>

        <th align="center">Tender No.</th>

        <th align="center">Subject</th>

        <th align="center">Identity</th>

        <th align="center">officer</th>

        <th align="center">Issuance Date</th>

        <th align="center">Closing Date</th>

        <th align="center">Invited Vendors</th>

        <th align="center">Technical Opening</th>

        <th align="center">Technical Evaluation</th>

        <th align="center">Commercial Opening</th>
        <th align="center">Commercial Evaluation</th>

        <th align="center">Sending Awarding</th>

        <th align="center">Sending Finance Memo</th>

        <th align="center">Tender Finished</th>



    </tr>
    @foreach($tenders as $tender)
    @foreach($tender->mr as $m)
    @unless ($tender->suppliers->isEmpty())
    @foreach($tender->suppliers as $s)

    <tr>
        <td align="center">{{ $m->mr_no }}</td>
        <td align="center">{{ $m->mr_received_date }}</td>
        <td >{{ $tender->mr_t_no }}</td>
        <td >{{ $tender->mr_t_subject }}</td>
        <td >{{ $tender->mr_t_identity }}</td>
        <td >{{ $tender->mr_t_officer }}</td>
        <td >{{ $tender->mr_t_tender_send_invitation_fax }}</td>
        <td >{{ $tender->mr_t_closing_date}}</td>
        <td >{{ $s->vname}}</td>
        <td >{{ $tender->mr_t_open_tech_envelops}}</td>
        <td >{{ $tender->mr_t_tech_eval_signature}}</td>
        <td >{{ $tender->mr_t_open_commercial_offers}}</td>
        <td >{{ $tender->mr_t_commercial_evaluation_signature}}</td>
        <td >{{ $tender->mr_t_sending_awarding_faxes}}</td>
        <td >{{ $tender->mr_t_sending_fin_memo}}</td>
        <td >{{ $tender->mr_t_finished}}</td>




    </tr>
         @endforeach
            @endunless
    @endforeach
    @endforeach





</table>


</body>
</html>