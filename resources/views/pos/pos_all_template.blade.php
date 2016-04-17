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
        <th colspan="8" align="center"  >PURCHASE ORDER</th></tr>
    <tr style="color:rgb(51,51,153);" align="center" >


    </tbody>
</table>
<table class = 'table-border'>

<tr >
    <th>MR No.</th>
    <th >PURCHASE ORDER No.</th>
    <th >Purchase Order Date</th>

</tr>
@foreach($pos as $po)

<tr style="color:rgb(51,51,153);" align="center" >


<th align="center" > {{ $po['po_no'] }} </th>
    <th align="center" >{{ $po['po_issued'] }} </th>


</tr>
@endforeach






</table>
