<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    {{$contact->firstName}} {{$contact->lastName}} {{$contact->phone}}

    <a href="{{ $contact->id }}/edit" class=button>Edit</a>

    <form method="POST" action="{{ route('contacts.destroy', $contact->id) }}" onsubmit="return confirm('Are you sure you want delete this contact?');">
        {{csrf_field()}}
        {{method_field('DELETE')}}

        <button type="submit" class="button">Delete a contact</button>
    </form>

</body>
</html>