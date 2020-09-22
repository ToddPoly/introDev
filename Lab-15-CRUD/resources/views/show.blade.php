<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    {{$contact->firstName}} {{$contact->lastName}} {{$contact->phone}}

    <a href="{{ $contact->id }}/edit" class=button>Edit
     
    
</body>
</html>