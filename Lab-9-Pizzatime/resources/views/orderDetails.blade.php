<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>

            </th>
        </tr>
        @foreach($formData as $field=>$value)​
        @if($field != "_token")
        {{$field}}  {{$value}}<br>​
        @endif
        @endforeach
    </table>
    
</body>
</html>