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
                    <th colspan="4" align="right"  ><h3>NO.:</h3></th>
                    <th align="center" ><h3>{{$po->po_no}}</h3></th></tr>
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
            <tr><th colspan="8">With reference to our Quotation no......... dated ....... and your offer  dated ........ </th></tr>
            <tr><th colspan="8" >Please supply the below Materials described with the following terms and conditions:</th></tr>
            <tr><th colspan="8">Please state our purchase order no. in all your invoices</th></tr>
        </table>

        <table class="table-border">
            <thead>
                <tr style="color:rgb(51,51,153); background-color: #9a9a9a;">
                    <th colspan="2" align="center" bgcolor="#9a9a9a"> PAYMENT TERM</th>
                    <th colspan="3" align="center" bgcolor="#9a9a9a">DELIVERY TIME</th>
                    <th align="center" >DELIVERY TERM</th>
                    <th align="center" >SHIPPED VIA</th>
                    <th align="center" >CURRENCY</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan="2" align="center" >{{$po->po_payment_method}}</td>
                    <td colspan="3" align="center" >{{$po->po_delivery_date}}</td>

                    <td align="center" >{{$po->po_delivery_method}}</td>
                    <td></td>
                    <td align="center">{{$po->po_currency}}</td>
                </tr>
            </tbody>
        </table>

        <table class="table-border">
            <tr style="color:rgb(51,51,153); background-color: #9a9a9a;">
                <th align="center">ITEM</th>
                <th align="center" >M.E.S.C.</th>
                <th align="center" >DESCRIPTION</th>
                <th align="center">QTY</th>
                <th align="center">UNIT</th>
                <th align="center">REC.</th>
                <th align="center">UNIT PRICE</th>
                <th align="center">TOTAL PRICE</th>
            </tr>
            <?php $i=1?>
            <?php $total_price=0?>
            @foreach($po->material as $material)
            <?php $unit_price = $material->m_required * $material->m_last_unit_price?>
            <tr>
                <td align="center" align="center">{{$i}}</td>
                <td align="center" align="center" >{{$material->m_mesc}}</td>
                <td align="center" align="center">{{$material->m_description}}</td>
                <td align="center" align="center" >{{$material->m_required}}</td>
                <td align="center" align="center">{{$material->m_unit}}</td>
                <td></td>
                <td align="center" align="center" >{{$material->m_last_unit_price}}</td>
                <td align="center" align="center" >{{$unit_price}}</td>
            </tr>
            <?php $i++?>
            <?php $total_price += $unit_price?>
            @endforeach
            <tr>
                <td colspan="6"></td>
                <th align="center" >SUB-TOTAL</th>
                <td align="center">{{$total_price}}</td>
            </tr>
            <tr>
                <td colspan="6"></td>
                <th align="center" >FREIGHT</th>
                <td align="center">{{$po->po_freight_cost}}</td>
            </tr>
            <tr>
                <td colspan="6"></td>
                <th align="center">OTHER</th>
                <td align="center">-</td>
            </tr>
            <tr>
                <td colspan="6"></td>

                <th align="center" >TOTAL</th>
                <td align="center" >{{$po->po_total_cost}}</td>
            </tr>
        </table>
        
        <table>
            <tr>
                <th colspan="3" >Prepared and Checked:</th>
                <td colspan="2"></td>
                <th align="center" >Approved:</th>
            </tr>
            <tr></tr><tr></tr><tr></tr>


                <tr>
                    <th  colspan="2" align="center"  ></th>

                    <td colspan="4"></td>

                    <th colspan="2" align="center" >Inas Ahmed Hafez </th>
                </tr>



            <tr>
                <td colspan="6"></td>
                <th colspan="2" align="center" >Materials , Services & Stock Control </th>
             </tr>
            <tr>
                <td colspan="6"></td>
                <th colspan="2" align="center">General Mgr.</th>
            </tr>
        </table>
        
        <table class="table-border">
            <tr style="color:rgb(51,51,153); background-color: #9a9a9a;">
                <th align="center">M.R. No.</th>
                <th align="center">REQUISITIONER</th>
                <th colspan="2" align="center" >CHARGE</th>
                <th colspan="2" align="center">USED FOR</th>
                <th align="center" >RECEIVED</th>
                <th align="center" >APPROVED</th>
            </tr>
            @foreach($po->material as $material)
            <tr>
                <td align="center">{{$po->mr()->first()->mr_no}}</td>
                <td align="center">{{$material->m_requesting_dept}}</td>
                <td colspan="2" align="center" >DMWBEL</td>
                <td colspan="2" align="center" >{{$material->m_usage}}</td>
                <td align="center" ></td>
                <td align="center"></td>
                <td align="center"></td>
            </tr>
            @endforeach
        </table>
        
        <table >
            <tr style="color:rgb(51,51,153); background-color: #9a9a9a;">
                <th colspan="2" align="right">P.O. NUMBER: </th>
                <td align ="left">{{$po->po_no}}</td>
            </tr>
        </table>

            <tr tr style="color:rgb(51,51,153); background-color: #9a9a9a;">
                <th colspan="3" align="center" >General Terms & Conditions</th>
            </tr>

    </body>
</html>