

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
        <th colspan="18" align="center"  >PURCHASE ORDERS</th>
    </tr>



    </tbody>
</table>
<table class = 'table-border'>

<tr style="color:rgb(19, 54, 153);background-color: #9a9a9a" align="center">
    <th align="center">MR No.</th>
    <th align="center" >P.O No.</th>
    <th align="center">Subject</th>
    <th align="center">P.O Date</th>
    <th align="center">Awarded Supplier</th>
    <th align="center">P.O Total Cost</th>
    <th align="center">P.O Currency</th>
    <th align="center">Purchase Method</th>
    <th align="center">Payment Method</th>
    <th align="center">Delivery Method</th>
    <th align="center">Delivery Date</th>
    <th align="center">Loaded on Ideas</th>
    <th align="center">Actual Receive Date</th>
    <th align="center">Material Receive Report</th>
    <th align="center">Invoice Received Date</th>
    <th align="center">Penalty</th>
    <th align="center">Cover Invoice</th>
    <th align="center">Completed</th>

    </tr>

@foreach($pos as $p)
@foreach($p->mr as $m)
@unless ($p->suppliers->isEmpty())
@foreach($p->suppliers as $s)


<tr style="color:rgb(0, 0, 0);" align="center" >

    <th align="center" > {{ $m->mr_no }} </th>
    <th align="center" > {{ $p->po_no }} </th>
    <th align="center" > {{ $p->po_subject }} </th>
    <th align="center" >{{ $p['po_issued'] }} </th>
    <th align="center" >{{ $s['vname'] }} </th>
    <th align="center" >{{ $p['po_total_cost'] }} </th>
    <th align="center" >{{ $p['po_currency'] }} </th>
    <th align="center" >{{ $p['po_purchase_method'] }} </th>
    <th align="center" >{{ $p['po_payment_method'] }} </th>
    <th align="center" >{{ $p['po_delivery_method'] }} </th>
    <th align="center" >{{ $p['po_delivery_date'] }} </th>
    <th align="center" >{{ $p['po_loaded_on_ideas'] }} </th>
    <th align="center" >{{ $p['po_mr_received_date'] }} </th>
    <th align="center" >{{ $p['po_mrr_received_date'] }} </th>
    <th align="center" >{{ $p['po_invoice_received_date'] }} </th>
    <th align="center" >{{ $p['po_penalty'] }} </th>
    <th align="center" >{{ $p['po_cover_invoice'] }} </th>
    <th align="center" >{{ $p['po_completed'] }} </th>






</tr>
@endforeach
@endunless
@endforeach
@endforeach








</table>
