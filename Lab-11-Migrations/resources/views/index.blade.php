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
            <th>id</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Phone Number</th>
        </tr>
        @foreach($people as $person)​
        <tr>
        <td>{{$person->id}}</td>
        <td>{{$person->firstName}}</td>
        <td>{{$person->lastName}}</td>
        <td>{{$person->phone}}</td>
        </tr>
        @endforeach
    </table>
    
</body>
</html>