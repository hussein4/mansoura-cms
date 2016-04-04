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
        </style>
    </head>
    <body class="page">
        <table>
            <tbody>
                <tr style="color:rgb(51,51,153);"><th><h2>PURCHASE ORDER</h2></th></tr>
                <tr style="color:rgb(51,51,153);"><th><h3>NO.</h3></th><th><h3>{{$po->po_no}}</h3></th></tr>
            </tbody>
        </table>
        <table>
            @foreach($po->suppliers as $supplier)
            <tr>
                <th>To:</th><td>{{$supplier->vname}}</td>
                <td></td>
                <th>Tel:</th><td>{{$supplier->vphone}}</td>
            </tr>
            <tr>
                <th>Attn.</th><td>{{$supplier->vcontactperson}}</td>
                <td></td>
                <th>Fax:</th><td>{{$supplier->vfax}}</td>
            </tr>
            <tr>
                <th>Address</th><td>{{$supplier->vaddress}}</td>
                <td></td>
                <th>P.O. Date:</th><td>{{$po->po_date}}</td>
            </tr>
            @endforeach
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <th>No. Of Pages:</th>
                <td>1</td>
            </tr>
        </table>
        <table>
            <tr><th>With reference to our Contract # </th></tr>
            <tr><th>Please supply the below Materials described with the following terms and conditions:</th></tr>
            <tr><th>Please state our purshase order no. in all your invoices</th></tr>
        </table>
        
        <table class="table-border">
            <thead>
                <tr>
                    <th>PAYMENT TERM</th>
                    <th>DELIVERY TIME</th>
                    <th>DELIVERY TERM</th>
                    <th>SHIPPED VIA</th>
                    <th>CURRENCY</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{$po->po_payment_method}}</td>
                    <td>{{$po->po_delivery_date}}</td>
                    <td>{{$po->po_delivery_method}}</td>
                    <td></td>
                    <td>{{$po->po_currency}}</td>
                </tr>
            </tbody>
        </table>
        
        <table class="table-border">
            <tr>
                <th>ITEM</th>
                <th>M.E.S.C.</th>
                <th>DESCRIPTION</th>
                <th>QTY</th>
                <th>UNIT</th>
                <th>REC.</th>
                <th>UNIT PRICE</th>
                <th>TOTAL PRICE</th>
            </tr>
            <tr>
                @foreach($po->material as $material)
                <td>{{$material->id}}</td>
                <td>{{$material->m_mesc}}</td>
                <td>{{$material->m_description}}</td>
                <td>{{$material->m_required}}</td>
                <td>{{$material->m_unit}}</td>
                <td></td>
                <td>{{$material->m_last_unit_price}}</td>
                <td></td>
                @endforeach
            </tr>
        </table>
    </body>
</html>