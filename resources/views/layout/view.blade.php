<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> Test View</title>

</head>
<body>


<h1>Hello from View Page</h1>

<ul>
    @if($emp)
        <li> Name: {{ $data['name'] }} </li>
    @endif
    <li> email: {{ $data['email'] }} </li>
    <li> password: {{ $data['password'] }} </li>
</ul>

</body>
</html>
