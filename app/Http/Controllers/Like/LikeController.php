<?php

namespace App\Http\Controllers\Like;

use App\Http\Controllers\Controller;
use App\Http\Requests\LikeRequest;
use App\Models\Like;

class LikeController extends Controller
{
    public function uplike(LikeRequest $req)
    {
        $like = new Like();
        $like->id_user = $req->query('iduser');
        $like->id_news = $req->query('idnews');
        if ($like->save()) {
            return 1;
        }
        return 0;

    }
    public function downlike(LikeRequest $req)
    {
        if (Like::where('id_user', '=', $req->query('iduser'))->where('id_news', '=', $req->query('idnews'))->delete()) {
            return 1;
        }
        return 0;

    }
}
