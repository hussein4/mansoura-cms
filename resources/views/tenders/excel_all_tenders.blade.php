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
    <tr>
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

        <th align="center">Commercial Evaluation</th>

        <th align="center">Awarded Bidder</th>

        <th align="center">P.O Number</th>

        <th align="center">P.O Issuance </th>

        <th align="center">P.O Cost </th>

        <th align="center">P.O Promised Delivery </th>

        <th align="center">Actual Delivery </th>

        <th align="center">Remarks </th>


    </tr>

    @foreach($tenders->mrs as $m)
    <tr>
        <td align="center">{{ $m->mr_no }}</td>
        <td align="center">{{ $m->mr_received_date }}</td>
        <td >{{ $tenders->mr_t_no }}</td>
        <td >{{ $tenders->mr_t_subject }}</td>


    </tr>
         @endforeach







</table>


</body>
</html>