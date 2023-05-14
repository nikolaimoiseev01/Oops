<?php

namespace App\View\Components;

use App\Models\Post;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Posts extends Component
{
    public $title;

    /**
     * Create a new component instance.
     */
    public function __construct($title) {
        $this->title = $title;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $posts = Post::orderBy('position', 'asc')->get();
        return view('components.posts', [
            'posts' => $posts
        ]);
    }
}
