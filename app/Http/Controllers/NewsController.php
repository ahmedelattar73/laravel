<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;


class NewsController extends Controller
{


/*    public function __construct()
    {
        $this->middleware('news');
    }*/

    public function all_news(Request $request)
    {
        $all_news = News::orderBy('id', 'desc')->paginate(5);
        //$all_news = News::orderBy('id', 'desc')->get(['desc', 'id']);
        return view('layout.all_news', ['all_news'=>$all_news]);
    }

    public function add_post_form ()
    {
        return view('layout.form');
    }

    public function insert_news()
    {
        $customMessages = [
            'title'     => trans('admin.title'),
            'desc'      => trans('admin.desc'),
            'content'   => trans('admin.content'),
            'add_by'    => trans('admin.add_by'),
            'status'    => trans('admin.status')
        ];

        $data = $this->validate(request(), [
            'title'     => 'required',
            'desc'      => 'required',
            'content'   => 'required',
            'add_by'    => 'required',
            'status'    => 'required'
        ], [], $customMessages);

        News::create($data);

        session()->flash('added_post', trans('admin.post_added'));

/*        $add = new News;
        $add->title     = request('title');
        $add->desc      = request('desc');
        $add->content   = request('content');
        $add->add_by    = request('add_by');
        $add->status    = request('status');
        $add->save();*/

        //return redirect('allnews');
        return back();
    }

    public function delete($id = null)
    {
        if ($id != null)
        {
            $item = News::find($id);
            $item->delete();
        } elseif ( request()->has('id') ) {
            News::destroy(request('id'));
        }
        return redirect('news');
    }

}
