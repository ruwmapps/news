<?php
namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\AddnewsRequest;
use App\Models\News;
use App\Models\Like;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
    public function news()
    {
        return response()->json(News::get(),200);
    }
    public function topnews()
    {
        return DB::table('news')
            ->join('like', 'news.id', '=', 'like.id_news')
            ->select(DB::raw('count(news.id) likes, news.*'))
            ->groupBy('news.id')
            ->orderByDesc('likes')
            ->get();
    }
    public function addnews(AddnewsRequest $req)
    {
        $news = new News();
        $news->title = $req->query('title');
        $news->description = $req->query('description');
        $news->created_at = new \DateTime();
        $news->updated_at = new \DateTime();
        if ($news->save()) {
            return ['result'=>1];
        }
        return ['result'=>0];
    }
}
