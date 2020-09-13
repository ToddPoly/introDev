<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Search</h1>
    <form action="search" method="POST">
    {{csrf_field()}}
    <p>Please Select a party to view</p>
        <select name="partyDrop">
            @foreach ($parties as $par) 
            <option value="{{$par->name}}">{{$par->name}} {{$par->id}}</option>
            @endforeach
        </select>
        <button type="submit">submit</button>
    </form>

</body>
</html>