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
        </style>
    </head>
    <body class="page">
        <table>
            <tbody>
                <tr style="color:rgb(51,51,153);">
                    <th colspan="8" align="center">PURCHASE ORDER</th></tr>
                <tr style="color:rgb(51,51,153);" align="center" ><th colspan="4" align="right"  ><h3>NO.:</h3></th><th align="center" ><h3>{{$po->po_no}}</h3></th></tr>
            </tbody>
        </table>
        <table>
            @foreach($po->suppliers as $supplier)
            <tr>
                <th align="right">To:</th><td colspan="3">{{$supplier->vname}}</td>
                <td></td><td></td>
                <th align="right">Tel:</th><td align="left">{{$supplier->vphone}}</td>
            </tr>
            <tr>
                <th align="right">Attn.:</th><td colspan="3">{{$supplier->vcontactperson}}</td>
                <td></td><td></td>
                <th align="right">Fax:</th><td align="left">{{$supplier->vfax}}</td>
            </tr>
            <tr>
                <th align="right" >Address:</th><td colspan="3">{{$supplier->vaddress}}</td>
                <td></td><td></td>
                <th align="right">P.O. Date:</th><td>{{$po->po_issued}}</td>
            </tr>
            @endforeach
            <tr>
                <td></td><td></td><td></td><td></td> <td></td> <td></td>


                <th align="right">No. Of Pages:</th>
                <td align="left">2</td>
            </tr>
        </table>
        <table>
            <tr><th colspan="8">With reference to our Contract # </th></tr>
            <tr><th colspan="8" >Please supply the below Materials described with the following terms and conditions:</th></tr>
            <tr><th colspan="8">Please state our purchase order no. in all your invoices</th></tr>
        </table>

        <table class="table-border">
            <thead>
                <tr style="color:rgb(51,51,153);">
                    <th colspan="2" align="center" bgcolor="#9a9a9a"> PAYMENT TERM</th>
                    <th colspan="3" align="center" bgcolor="#9a9a9a">DELIVERY TIME</th>
                    <th align="center" >DELIVERY TERM</th>
                    <th align="center" >SHIPPED VIA</th>
                    <th align="center" >CURRENCY</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan="2">{{$po->po_payment_method}}</td>
                    <td>{{$po->po_delivery_date}}</td>
                    <td>{{$po->po_delivery_method}}</td>
                    <td></td>
                    <td>{{$po->po_currency}}</td>
                </tr>
            </tbody>
        </table>

        <table class="table-border">
            <tr style="color:rgb(51,51,153);">
                <th>ITEM</th>
                <th>M.E.S.C.</th>
                <th>DESCRIPTION</th>
                <th>QTY</th>
                <th>UNIT</th>
                <th>REC.</th>
                <th>UNIT PRICE</th>
                <th>TOTAL PRICE</th>
            </tr>
            <?php $i=1?>
            <?php $total_price=0?>
            @foreach($po->material as $material)
            <?php $unit_price = $material->m_required * $material->m_last_unit_price?>
            <tr>
                <td>{{$i}}</td>
                <td>{{$material->m_mesc}}</td>
                <td>{{$material->m_description}}</td>
                <td>{{$material->m_required}}</td>
                <td>{{$material->m_unit}}</td>
                <td></td>
                <td>{{$material->m_last_unit_price}}</td>
                <td>{{$unit_price}}</td>
            </tr>
            <?php $i++?>
            <?php $total_price += $unit_price?>
            @endforeach
            <tr>
                <td colspan="6"></td>
                <th>SUB-TOTAL</th>
                <td>{{$total_price}}</td>
            </tr>
            <tr>
                <td colspan="6"></td>
                <th>FREIGHT</th>
                <td>{{$po->po_freight_cost}}</td>
            </tr>
            <tr>
                <td colspan="6"></td>
                <th>OTHER</th>
                <td>-</td>
            </tr>
            <tr>
                <td colspan="6"></td>

                <th>TOTAL</th>
                <td>{{$po->po_total_cost}}</td>
            </tr>
        </table>
        
        <table>
            <tr>
                <th colspan="3" >Prepared and Checked:</th>
                <td colspan="6"></td>
                <th>Approved:</th>
            </tr>
            <tr></tr>
            <tr></tr>
            <tr>
                <td colspan="7"></td>
                <th>Materials & Services Gen. Mgr.</th>
            </tr>
        </table>
        
        <table class="table-border">
            <tr style="color:rgb(51,51,153);">
                <th>M.R. No.</th>
                <th>REQUISITIONER</th>
                <th>CHARGE</th>
                <th>USED FOR</th>
                <th></th>
                <th>RECEIVED</th>
                <th>APPROVED</th>
            </tr>
            @foreach($po->material as $material)
            <tr>
                <td>{{$po->mr()->first()->mr_no}}</td>
                <td>{{$material->m_requesting_dept}}</td>
                <td></td>
                <td>{{$material->m_usage}}</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            @endforeach
        </table>
        
        <table class="table-border-bottom">
            <tr>
                <th colspan="2" >P.O. NUMBER: </th>
                <td align ="left">{{$po->po_no}}</td>
            </tr>
            <tr></tr>
            <tr>
                <th colspan="3" >GENERAL TERMS</th>
            </tr>
        </table>
    </body>
</html>