<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <title>2020 Politicians</title>
</head>
<body>

    <h1>2020 Politicians</h1>
    <!-- <form action="search" method="POST">
    {{csrf_field()}}
    <p>Please Select a party to view</p>
        <div class="select">
        <select id="partyDrop" name="partyDrop">
            <option value='0'>All Parties</option> 
            @foreach ($parties as $par) 
            <option value="{{$par->id}}">{{$par->name}}</option>
            @endforeach
        </select>
        </div>
        <button type="submit" class="button">submit</button>
    </form> -->

    <div>
        <table class="container">
            <th>Name</th>
            <th>Gender</th>
            <th>Rank</th>
            <th>Electorate</th>
            <th>Image</th>
            <th>Party</th>
            <th>Party Image</th>
            <th>Poll Results</th>
            <th></th>
            <h2>Politicians</h2>
            @foreach ($politicians as $pol)
            <tr role="row"> 
            <td role="cell">{{$pol->name}}</td>
            <td role="cell">{{$pol->gender}}</td>
            <td role="cell">{{$pol->rank}}</td>
            <td role="cell">{{$pol->electorate}}</td>
            <td role="cell"><img src="{{asset($pol->image)}}" style="width:250px; Height:200px"></td>
            <td role="cell">{{$pol->party->name}}</td>
            <td role="cell"><img src="{{asset($pol->party->image)}}" style="width:100px; Height:40px"></td>
            <td role="cell">{{$pol->party->pollResult}}</td>
            </tr>
            @endforeach
        </table>
    </div>
    
</body>
</html>