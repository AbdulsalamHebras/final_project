<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Category</title>
</head>

<body>
    <form action="{{ route('category.store') }}" method="POST">
        @csrf
        <label for="name">Category Name</label>
        <input type="text" name="name" id="name" value="{{ old('name') }}">
        @error('name')
            <span class="text-danger">{{ $message }}</span>
        @enderror
        <input type="submit" value="Send">
    </form>
</body>

</html>
