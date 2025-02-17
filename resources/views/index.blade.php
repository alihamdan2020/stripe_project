<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form to make check out</title>
</head>

<body>
<h1>let say this is final page before check out page</h1>
    <form id="form" action="{{url('checkout')}}" method="POST">
        @csrf
        <button onclick="jm(event)">check out proccess</button>
    </form>
    <script>
        let a =document.getElementById("form");
        function jm(event){
            event.preventDefault();
           if(confirm("are you want to pay ???")) 
           a.submit();
        }
    </script>
</body>
</html>