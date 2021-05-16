<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;

class CreatePost extends Component
{
    public $open = false;

    public $title, $content;

    protected $rules = [
        'title' => 'required|max:10',
        'content' => 'required|max:100'
    ];
 
    public function updated($propertyName){
        $this->validateOnly($propertyName);
    }

    public function render()
    {
        return view('livewire.create-post');
    }

    public function save(){

        $this->validate();

        Post::create([
            'title' => $this->title,
            'content' => $this->content
        ]);
        //creacion de evento

        $this->reset(['open','title', 'content']);
        $this->emitTp('show-posts','render');
        $this->emit('alert','El post se creó sastifactoriamente');
    }
}
