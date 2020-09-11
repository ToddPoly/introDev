<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    ALLO
    <select id="partyDrop">
        @foreach ($parties as $par) 
        <option value="{{$par->name}}">{{$par->name}}   
        @endforeach
    </select>

    
    <table>
    <h2>Politicians</h2>
    @foreach ($politicians as $pol)
    <tr> 
    <td>{{$pol->name}}</td>
    <td>{{$pol->gender}}</td>
    <td>{{$pol->rank}}</td>
    <td>{{$pol->electorate}}</td>
    <td><a href="/{{$pol->image}}"></a></td>
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
    <td>{{$par->image}}</td>
    <td>{{$par->id}}</td>
    </tr>
    @endforeach
    </table>


    
</body>
</html>