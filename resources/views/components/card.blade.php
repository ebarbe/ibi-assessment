<div class="w-1/4 p-4">
    <div class="bg-white shadow-lg rounded-lg">
        <div class="p-4">
            <p class="text-xl font-semibold">{{ $title }}</p>
            @isset($items)
                <ul class="mt-4">
                    @foreach($items as $item)
                        <li>{{ $item->title }}</li>
                    @endforeach
                </ul>
            @endif
        </div>
    </div>
</div>