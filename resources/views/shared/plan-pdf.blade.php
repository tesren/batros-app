<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{__('Plan de pago')}} {{$plan->name}} - {{__('Unidad')}} {{$unit->name}}</title>

    <style>
        body{
            font-family: Arial, Helvetica, sans-serif !important;
        }
        table{
            width: 100%;
            font-size: 30px;
        }
        
    </style>

</head>
<body>

    @php
        if( isset($plan->discount) ){
            $discount = $unit->price * ($plan->discount/100);
            $final = $unit->price - $discount;
        }
        else{
            $final = $unit->price;
        }

        $enganche = ($final) * ($plan->down_payment/100);
        $closing = ($final) * ($plan->closing_payment/100);
        $meses = ($final) * ($plan->months_percent/100);
        if(isset($meses) and isset($plan->months_quantity)){                        
            $mes = $meses / ($plan->months_quantity);
        }else{
            $mes = 0;
        }
    @endphp


    <h1 style="text-align: center;">{{__('Plan de pago')}} {{$plan->name}}</h1>
    <h2 style="text-align: center;">{{__('Unidad')}} {{$unit->name}} Batros Marina Residences</h2>

    <table>

        <tbody>

            <tr>
                <td>{{__('Precio de Lista')}}</td>
                <td>${{ number_format($unit->price, 2) }} {{$unit->currency}}</td>
            </tr>

            @isset($plan->discount)
                <tr>
                    <td style="text-align: end;">{{__('Descuento del')}} {{$plan->discount}}%</td>
                    <td>${{ number_format($discount, 2) }} {{$unit->currency}}</td>
                </tr>

                <tr>
                    <td style="text-align: end;">{{__('Precio Final')}} </td>
                    <td>${{ number_format($final, 2) }} {{$unit->currency}}</td>
                </tr>

            @endisset

            <tr>
                <td style="text-align: end;">{{$plan->down_payment}}% {{__('de Enganche')}} </td>
                <td>${{ number_format($enganche, 2) }} {{$unit->currency}}</td>
            </tr>

            @if ($meses != 0)
                <tr>
                    <td style="text-align: end;">{{$plan->months_percent}}% {{__('en')}} {{$plan->months_quantity}} {{__('Mensualidades')}}</td>
                    <td class="text-end fs-4">${{ number_format($meses, 2) }} {{$unit->currency}} 
                    </td>
                </tr>
            @endif
            
            @isset($plan->closing_payment)
                <tr>
                    <td style="text-align: end;">{{$plan->closing_payment}}% {{__('Pago Final')}} </td>
                    <td>${{ number_format($closing, 2) }} {{$unit->currency}}</td>
                </tr>
            @endisset

        </tbody>

    </table>

    <h5>{{__('Creado el dia')}} {{date("d/m/Y")}}</h5>
    
</body>
</html>