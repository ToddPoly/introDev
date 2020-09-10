<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <img alt="pizzatime" src="https://f4.bcbits.com/img/a3267934918_10.jpg" style="width:100%; height:200px">
    <form action="thankYou" method="POST">
    {{csrf_field()}}
    <table>
        <tr>
            <th>

            </th>
        </tr>
        @foreach($formData as $field=>$value)​
        @if($field != "_token")
        {{$field}}  {{$value}}<br>​
        @endif

        @if($value == "Cheese")
        @php($cost+=5)
        @elseif($value == "Mushrooms")
        @php($cost+=8)
        @elseif($value == "Pepperoni")
        @php($cost+=100)
        @endif

        @endforeach
    </table>

    <p>The total cost is ${{$cost}}</p>
    <input type="hidden" name="total" value={{$cost}}>
    <button type="submit">Confirm Order</button>
    </form>
    
</body>
</html>