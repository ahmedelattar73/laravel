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

<div class="container">

    <h1>Hello from all news</h1>

    <form method="POST" action="news/delete">
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
                <th>Action</th>
            </thead>
            <tbody>
            @if(request('msg'))
                <div class="alert alert-success" role="alert">
                    Your post has been deleted
                </div>
                @endif
                {{csrf_field()}}
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
                        <td>
                            <input type="checkbox" name="id[]" value="{{$single_news->id}}">
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div style="padding-top:10px;padding-bottom:30px;">
            <button type="submit" class="btn btn-primary">delete</button>
        </div>
    </form>


    {{--{{ $all_news->links() }}--}}

    <div>
        {!! $all_news->render() !!}
    </div>

    <form method="post" action="{{url('insert/news')}}">

        {{csrf_field()}}

        <fieldset >

            <div class="form-group">
                <label for="disabledTextInput">Title</label>
                <input type="text" name="title" class="form-control">
            </div>

            <div class="form-group">
                <label for="disabledTextInput">desc</label>
                <input type="text" name="desc" class="form-control">
            </div>

            <div class="form-group">
                <label for="disabledTextInput">add by</label>
                <input type="text" name="add_by"  class="form-control">
            </div>

            <div class="form-group">
                <label for="disabledTextInput">content</label>
                <input type="text" name="content"  class="form-control">
            </div>

            <div class="form-group">
                <label for="disabledSelect">Status</label>
                <select name="status" class="form-control">
                    <option value="active">active</option>
                    <option value="active">active</option>
                    <option value="pending">pending</option>
                    <option value="deactive">deactive</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>

        </fieldset>
    </form>

    <div style="height: 40px;"></div>
</div>


</body>
</html>
