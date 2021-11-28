<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Illuminate\Http\Request;
use Livewire\Component;

class BulletinBoard extends Component
{
    public $count = 0;

    protected $listeners = ['add' => 'increment'];

    public function increment()
    {
        $this->count++;
    }

    public function render()
    {
        $posts = Post::all();
        return view('livewire.bulletin_board', compact('posts'));
    }
}
