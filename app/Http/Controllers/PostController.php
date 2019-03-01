<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\TemplateEngine as te;

class PostController extends Controller
{
    public function view()
    {
        $posts = \App\Models\Post::all();
        $nama = 'alfian dwi';
        $all =  'halo dua bro {{ $nama }}';

        $template = '
            halo gan {{ $nama }}<br>
            @foreach($posts as $post)
                {{ $post->title }}
                <br>
            @endforeach
        ';

        return $this->render($template, compact('nama', 'posts', 'all'));
    }

    public function render($template, $data = [])
    {
        return app(te::class)->render($template, $data);
    }
}
