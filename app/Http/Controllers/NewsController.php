<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;


class NewsController extends Controller
{

    public function all_news(Request $request)
    {
        $all_news = News::orderBy('id', 'desc')->paginate(5);
        //$all_news = News::orderBy('id', 'desc')->get(['desc', 'id']);
        return view('layout.all_news', ['all_news'=>$all_news]);
    }

    public function insert_news()
    {
/*        News::create([
            'title'     => request('title'),
            'desc'      => request('desc'),
            'content'   => request('content'),
            'add_by'    => request('add_by'),
            'status'    => request('status')
        ]);*/

        $add = new News;
        $add->title = request('title');
        $add->desc = request('desc');
        $add->content = request('content');
        $add->add_by = request('add_by');
        $add->status = request('status');
        $add->save();

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
        return redirect()->action('NewsController@all_news', ['msg' => 'deleted']);
    }

}
