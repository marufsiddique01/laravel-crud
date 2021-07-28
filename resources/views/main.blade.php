<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel 7 homepage</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>

<body>

    <div class="container">

        <div class="row">
            <h1>Add your product here</h1>
            <a class="btn btn-success" href="{{ route("product.index") }}">Add your product</a>
        </div>
    </div>


</body>

</html>