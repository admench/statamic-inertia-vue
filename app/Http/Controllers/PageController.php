<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;
use Statamic\Facades\Entry;
use Statamic\Facades\Site;

class PageController extends Controller
{
    public function __invoke(Request $request, ?string $slug = null): Response
    {
        $site = Site::current();
        $uri = !$slug ? '/' : '/'.$slug;
        $content = Entry::query()
          ->where('site', $site)
          ->where('collection', 'pages')
          ->where('uri', $uri)
          ->first();

        return Inertia::render('Page', [
            'content' => $content,
        ]);
    }
}
