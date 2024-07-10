<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
   
    <div class="container">
        <h1>Teachers List</h1>

        <ul class="list-group">
            @foreach ($teachers as $teacher)
            <li class="list-group-item">{{ $teacher->name }} {{ $teacher->phone }}</li>
            @endforeach
        </ul>

        {{ $teachers->links() }}
        <!-- Render pagination links -->
    </div>
</body>

</html>