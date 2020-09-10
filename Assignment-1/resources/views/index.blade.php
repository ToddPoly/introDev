<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    ALLO
    
    <table>
    <h2>Politicians</h2>
    @foreach ($politicians as $pol)
    <tr> 
    <td>{{$pol->name}}</td>
    <td>{{$pol->gender}}</td>
    <td>{{$pol->rank}}</td>
    <td>{{$pol->electorate}}</td>
    <td>{{$pol->image}}</td>
    <td>{{$pol->party->name}}</td>
    <td>{{$pol->image}}</td>
    </tr>
    @endforeach
    </table>

    <br>

    <table>
    <h2>Parties</h2>
    @foreach ($parties as $par)
    <tr> 
    <td>{{$par->name}}</td>
    <td>{{$par->image}}</td>
    <td>{{$par->id}}</td>
    </tr>
    @endforeach
    </table>


    
</body>
</html>