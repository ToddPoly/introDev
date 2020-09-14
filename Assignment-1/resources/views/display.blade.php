<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>2020 Politicians</title>
</head>
<body>

    <h1>Search</h1>
    <form action="search" method="POST">
    {{csrf_field()}}
    <p>Please Select a party to view</p>
        <select id="partyDrop" name="partyDrop">
            <option value='0'>All Parties</option> 
            @foreach ($parties as $par) 
            <option value="{{$par->id}}">{{$par->name}}</option>
            @endforeach
        </select>
        <button type="submit">submit</button>
    </form>

    <table>
        <h2>Politicians</h2>
        @foreach ($politicians as $pol)
        <tr> 
        <td>{{$pol->name}}</td>
        <td>{{$pol->gender}}</td>
        <td>{{$pol->rank}}</td>
        <td>{{$pol->electorate}}</td>
        <td><img src="{{asset($pol->image)}}" style="width:250px; Height:150px"></td>
        <td>{{$pol->party->name}}</td>
        <td><img src="{{asset($pol->party->image)}}" style="width:100px; Height:40px"></td>
        </tr>
        @endforeach
    </table>
    
</body>
</html>