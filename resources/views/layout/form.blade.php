<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> Test View </title>

</head>
<body>



    <form method="POST" action="{{ url('view') }}">
        {{ csrf_field() }}
        <input type="text" placeholder="Name" name="name">
        <input type="email" placeholder="Email" name="email">
        <input type="password" placeholder="Password" name="password">
        <button>Send</button>
    </form>


</body>
</html>
