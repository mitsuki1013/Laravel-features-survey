<div class="w-full">
    <ul class="content-wrap w-full">
        @foreach($posts as $post)
        <li wire:key="{{ $post->id }}" class="w-5/6 border-2 divide-gray-200 rounded-sm py-2 px-2 mb-2 mx-auto">
            <form class="flex justify-between" style="align-items: center" wire:submit.prevent="update">
                @csrf
                @if ($postId !== $post->id || $postId === null)
                <div>
                  <p>{{ $post->content }}</p>
                </div>
                <div wire:key="{{ $post->id }}+edit" class="content-edit w-1/6">
                    <button type="button" wire:click="getId({{ $post->id }})">編集</button>
                </div>
                @endif
                @if ($postId === $post->id)
                <div>
                    <input type="text" wire:model="content" name="content">
                </div>
                <div wire:key="{{ $post->id }}+done" class="w-1/6 ">
                    <button type="submit">完了</button>
                </div>
                @endif
            </form>
        </li>
        @endforeach
    </ul>
</div>

