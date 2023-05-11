<?php

namespace App\Http\Controllers\Admin;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminImagesController extends AdminController
{
    public function deleteImageArticle(Article $article, Request $request) {
        if (Storage::disk("public")->delete($article->img)) {
            $article->img = null;
            $article->save();
            return response()->json(["success" => "ok"]);
        }
    }
}
