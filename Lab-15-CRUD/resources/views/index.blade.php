<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    @foreach ($contacts as $contact)
    <li> 
        <a href="{{route('contacts.show', $contact->id) }}">
        {{$contact->firstName}} {{$contact->lastName}} {{$contact->phone}}
        </a>
    </li>
    @endforeach

    <a href="{{route('contacts.create')}}">Create a contact</a>

    
</body>
</html>