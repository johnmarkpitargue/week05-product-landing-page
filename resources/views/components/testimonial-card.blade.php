@props(['photo' => '', 'name' => 'Customer', 'position' => '', 'review' => ''])

<div class="rounded-2xl border border-gray-100 bg-white p-8 shadow-sm transition hover:shadow-lg">
    <div class="mb-4 flex text-palabok-500">
        @for ($i = 0; $i < 5; $i++)
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 fill-current" viewBox="0 0 20 20">
                <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
            </svg>
        @endfor
    </div>
    <p class="text-sm leading-relaxed text-gray-600">"{{ $review }}"</p>
    <div class="mt-6 flex items-center gap-3">
        <img src="{{ $photo }}" alt="{{ $name }}" class="h-12 w-12 rounded-full object-cover">
        <div>
            <p class="text-sm font-semibold text-gray-900">{{ $name }}</p>
            <p class="text-xs text-gray-500">{{ $position }}</p>
        </div>
    </div>
</div>
