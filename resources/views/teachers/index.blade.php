<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    @if (session('success'))
    <div class="alert alert-success" role="alert">
        {{ session('success') }}
    </div>
    @endif

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Name</th>
                <th>Phone</th>
                <th>Department</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($teachers as $teacher)
            <tr>
                <td>{{ $teacher->name }}</td>
                <td>{{ $teacher->phone }}</td>
                <td>{{ $teacher->department }}</td>
                <td>
                    <a href="{{ route('teachers.show', $teacher->id) }}" class="btn btn-info">View</a>
                    <a href="{{ route('teachers.edit', $teacher->id) }}" class="btn btn-primary">Edit</a>
                    <form action="{{ route('teachers.destroy', $teacher->id) }}" method="POST"
                        style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger"
                            onclick="return confirm('Are you sure you want to delete this teacher?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>