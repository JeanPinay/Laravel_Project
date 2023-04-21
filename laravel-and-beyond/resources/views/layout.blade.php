<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/css/style.css">

    <title>Cat_Astrology</title>
</head>
<body>

@include ('header')
@yield ('homepage')
@yield ('signs')
@yield ('contact')
@yield ('contactSubmitted')
@yield ('flex')
@yield ('flexSubmitted')
@yield ('cats')
@include ('footer')
</body>
</html>