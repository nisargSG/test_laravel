<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>


    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{ route('teachers.update', $teacher->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $teacher->name }}">
        </div>
        <div class="form-group">
            <label for="phone">Phone</label>
            <input type="phone" class="form-control" id="phone" name="phone" value="{{ $teacher->phone }}">
        </div>
        <div class="form-group">
            <label for="department">department</label>
            <input type="department" class="form-control" id="department" name="department"
                value="{{ $teacher->department }}">
        </div>
        <!-- Add more fields as needed -->
        <button type="submit" class="btn btn-primary">Update</button>
    </form>

</body>

</html>