<?php
namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
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
}
