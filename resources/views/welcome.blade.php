<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Treni</title>
</head>
<body>
    <main>
     @foreach ($trains as $item)
            {{ $item }} <br>;
     @endforeach
    </main>
</body>
</html>