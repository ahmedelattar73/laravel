@extends('index')

@section('title')
    <title> Add New Post </title>
@endsection('title')


@section('meta_desc')
    <meta name="description" content="Free Web tutorials">
    <meta name="keywords" content="HTML,CSS,XML,JavaScript">
@endsection('meta_desc')


@section('content')

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if (session()->has('added_post'))
        <div class="alert alert-success" role="alert">
            {{session()->get('added_post')}}
        </div>
    @endif

    <div class="container">

        <div class="clearfix" >
            <a href="{{ url('news') }}" class="btn btn-danger">All New</a>
        </div>

        <form method="post" action="{{url('news/insert')}}">
            {{csrf_field()}}
            <fieldset >
                <div class="form-group">
                    <label for="disabledTextInput">Title</label>
                    <input type="text" name="title" value="{{old('title')}}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="disabledTextInput">desc</label>
                    <input type="text" name="desc" value="{{old('desc')}}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="disabledTextInput">add by</label>
                    <input type="text" name="add_by"  value="{{old('add_by')}}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="disabledTextInput">content</label>
                    <input type="text" name="content" value="{{old('content')}}"  class="form-control">
                </div>
                <div class="form-group">
                    <label for="disabledSelect">Status</label>
                    <select name="status" class="form-control">
                        <option value="active"   {{old('status')=='active'?'selected':''}}>active</option>
                        <option value="pending"  {{old('status')=='pending'?'selected':'' }}>pending</option>
                        <option value="deactive" {{old('status')=='deactive'?'selected':'' }}>deactive</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </fieldset>
        </form>
    </div>

@endsection('content')