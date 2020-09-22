<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 class="title">Edit a Contact</h1>
    <form method="POST" action="{{ route('contacts.update', $contact->id) }}">
        {{csrf_field()}}
        {{method_field('PATCH')}}
        <div>
            <input type="text" name="firstName" value="{{contact->firstName}}" placeholder="{{contact->firstName}}">
            <input type="text" name="lastName" value="{{contact->lastName}}" placeholder="{{contact->lastName}}">
            <input type="text" name="phone" value="{{contact->phone}}" placeholder="{{contact->phone}}">
        </div>
        <button type="submit" class="button">Update Contact</button>
    </form>
    

   
    
</body>
</html>