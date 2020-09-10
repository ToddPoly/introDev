<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <table>
    <h2>All Dogs</h2>
    @foreach($dogList as $d)
    <tr> 
    <td>{{$d->name}}</td>
    <td>{{$d->date_of_birth}}</td>
    <td>{{$d->breed->name}}</td>
    </tr>
    @endforeach
    </table>

    <br>

    <table>
    <h2>Labrador Retrievers</h2>
    @foreach($labradorRetrievers as $labs)
    <tr> 
    <td>{{$labs->name}}</td>
    <td>{{$labs->date_of_birth}}</td>
    <td>{{$labs->breed->name}}</td>
    </tr>
    @endforeach
    </table>

    <br>

    <table>
    <h2>Retrievers</h2>
    @foreach($retrievers as $labs)
    <tr> 
    <td>{{$labs->name}}</td>
    <td>{{$labs->date_of_birth}}</td>
    <td>{{$labs->breed->name}}</td>
    </tr>
    @endforeach
    </table>    

    <br>

    <table>
    <h2>Old Dogs</h2>
    @foreach($oldDogs as $old)
    <tr> 
    <td>{{$old->name}}</td>
    <td>{{$old->date_of_birth}}</td>
    <td>{{$old->breed->name}}</td>
    </tr>
    @endforeach
    </table>  

    <br>

    <table>
    <h2>Dog Query</h2>
    @foreach($dogQuery as $q)
    <tr> 
    <td>{{$q->name}}</td>
    <td>{{$q->date_of_birth}}</td>
    <td>{{$q->breed->name}}</td>
    </tr>
    @endforeach
    </table>  

    
</body>
</html>