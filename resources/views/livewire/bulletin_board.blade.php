<div class="w-full">
    <ul class="content-wrap w-full">
{{--        @foreach($posts as $post)--}}
            <li class="w-5/6 border-2 divide-gray-200 rounded-sm py-2 px-2 mb-2 mx-auto flex justify-between" style="align-items: center">
                <div>
{{--                    <input type="text" value="{{ $post->content }}">--}}
                </div>
                <div class="w-1/6">
                    <button wire:click="add">{{ '編集' }}</button>
                    <p>{{$count}}</p>
                </div>
            </li>
{{--        @endforeach--}}
    </ul>
</div>
