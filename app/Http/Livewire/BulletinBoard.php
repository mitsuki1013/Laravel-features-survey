<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;

class BulletinBoard extends Component
{
    public $postId;
    public $content;

    /**
     * @param int $postId
     */
    public function getId(int $postId)
    {
        $this->postId = $postId;
        $post = Post::find($this->postId);
        $this->content = $post->content;
    }

    /**
     *
     */
    public function update()
    {
        Post::where('id', $this->postId)->update(['content' => $this->content]);
        $this->postId = null;
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function render()
    {
        $posts = Post::all();
        $postId = $this->postId;
        return view('livewire.bulletin_board',
        compact(
            'posts',
            'postId',
        ));
    }
}
