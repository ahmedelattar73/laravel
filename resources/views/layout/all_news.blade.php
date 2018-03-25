@extends('index')

@section('title')
    <title> All news page </title>
@endsection('title')


@section('meta_desc')
    <meta name="description" content="Free Web tutorials">
    <meta name="keywords" content="HTML,CSS,XML,JavaScript">
@endsection('meta_desc')


@section('content')

    <div class="container">

        <h1>Hello from all news</h1>

        <div class="clearfix" >
            <a href="{{ url('news/add') }}" class="btn btn-danger">Add New</a>
        </div>

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

        <div style="height: 40px;"></div>
    </div>

@endsection('content')