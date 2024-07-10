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
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Teacher Details</div>

                    <div class="card-body">
                        <p><strong>Name:</strong> {{ $teacher->name }}</p>
                        <p><strong>Email:</strong> {{ $teacher->phone }}</p>
                        <p><strong>Email:</strong> {{ $teacher->department }}</p>

                        <!-- Add more details as needed -->
                        <a href="{{ route('teachers.index') }}" class="btn btn-primary">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>