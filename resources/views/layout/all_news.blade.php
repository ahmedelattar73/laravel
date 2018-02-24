<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> Test View</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

</head>
<body>

<h1>Hello from all news</h1>

<table class="table table-bordered">
    <thead>
        <th>id</th>
        <th>title</th>
        <th>add by</th>
        <th>desc</th>
        <th>content</th>
        <th>status</th>
        <th>created at</th>
        <th>updated at</th>
    </thead>
    <tbody>
        @foreach($all_news as $single_news)
            <tr>
                <td>{{$single_news->id}}</td>
                <td>{{$single_news->title}}</td>
                <td>{{$single_news->add_by}}</td>
                <td>{{$single_news->desc}}</td>
                <td>{{$single_news->content}}</td>
                <td>{{$single_news->status}}</td>
                <td>{{$single_news->created_at}}</td>
                <td>{{$single_news->updated_at}}</td>
            </tr>
        @endforeach
    </tbody>
</table>


{{--{{ $all_news->links() }}--}}

{!! $all_news->render() !!}


</body>
</html>
