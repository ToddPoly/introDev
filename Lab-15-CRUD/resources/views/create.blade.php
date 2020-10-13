<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width='device-width', initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 class="title">Create a contact</h1>
    <form method="POST" action="{{ route('contacts.store') }}">
        {{csrf_field()}}
        <div>
            <input type="text" name="firstName" value="{{old('firstName')}}">
            <input type="text" name="lastName" value="{{old('lastName')}}">
            <input type="text" name="phone" value="{{old('phone')}}">
        </div>

        <button type="submit" class="button">Create</button>
    </form>
    
</body>
</html>