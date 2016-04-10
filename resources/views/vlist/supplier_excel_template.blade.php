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
        <th colspan="8" align="center" ><h3> Supplier </h3></th></tr>
    <tr  style="color:rgb(51,51,153);background-color: #9a9a9a;  " >
        <th colspan="8"  align="center" ><h3> {{ $vlist->vname }} </h3></th>
    </tr>

    </tbody>
</table>

<table class ="table-border">


        <tr>
            <th align="right">Service:</th><td colspan="7">{{ $vlist->vservice }}</td>
             </tr>
        <tr>
            <th align="right">Phone:</th><td colspan="7">{{ $vlist->vphone }}
        </tr>
    <tr>
        <th align="right">Fax:</th><td colspan="7">{{ $vlist->vfax }}
    </tr>
    <tr>
        <th align="right">Mobile:</th><td colspan="7">{{$vlist->vmobile}}
    </tr>
    <tr>
        <th align="right">Contact Person:</th><td colspan="7">{{$vlist->vcontactperson}}
    </tr>
    <tr>
    <th align="right">Address:</th><td colspan="7">{{$vlist->vaddress}}
        </tr>
    <tr>
    <th align="right">EGPC No.:</th><td colspan="7">{{$vlist->vegpcno}}
        </tr>
    <tr>
    <th align="right">Capital Limit:</th><td colspan="7">{{$vlist->vcapitallimit}}
        </tr>

    <tr>
    <th align="right">Grade:</th><td colspan="7">{{$vlist->vgrade}}
        </tr>
    <tr>
    <th align="right">Remarks:</th><td colspan="7">{{$vlist->vremarks}}
        </tr>

    <tr>
    <th align="right">Last Update:</th><td colspan="7">{{$vlist->updated_at}}
        </tr>




</table>


</body>
</html>