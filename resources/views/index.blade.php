<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form to make check out</title>
</head>

<body>
<h1>let say this is final page before check out page</h1>
    <form action="{{url('checkout')}}" method="POST">
        @csrf
        <button>check out proccess</button>
    </form>
</body>
</html>