<?php

namespace App\Http\Controllers\Api;

// use App\Http\Controllers\Controller;
// use Illuminate\Http\Request;
use App\Models\Article;
use Orion\Concerns\DisableAuthorization;
use Orion\Http\Controllers\Controller;

class ArticlesController extends Controller
{
    use DisableAuthorization;
    protected $model = Article::class;
}
