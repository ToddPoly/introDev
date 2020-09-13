<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <table>
        @foreach($polQuery as $p)​
        <tr>
        <td>{{$p->name}}</td>
        <td>{{$p->id}}</td>
        </tr>       
        @endforeach
    </table>

    <table>
        <h2>Politicians</h2>
        @foreach ($politicians as $pol)
        <tr> 
        <td>{{$pol->name}}</td>
        <td>{{$pol->gender}}</td>
        <td>{{$pol->rank}}</td>
        <td>{{$pol->electorate}}</td>
        <td><img src="{{asset($pol->image)}}" style="width:250px; Height:100px"></td>
        <td>{{$pol->party->name}}</td>
        </tr>
        @endforeach
    </table>

    <br>

    <table>
        <h2>Parties</h2>
        @foreach ($parties as $par)
        <tr> 
        <td>{{$par->name}}</td>
        <td><img src="{{asset($par->image)}}" style="width:100px; Height:50px"></td>
        </tr>
        @endforeach
    </table>
    
</body>
</html>