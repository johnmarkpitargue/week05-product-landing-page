@props(['icon' => '🍜', 'title' => 'Feature', 'description' => ''])

<div class="group rounded-2xl border border-gray-100 bg-white p-6 shadow-sm transition hover:-translate-y-1 hover:shadow-lg">
    <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-xl bg-palabok-50 text-2xl transition group-hover:bg-palabok-600">
        <span class="transition group-hover:scale-110">{{ $icon }}</span>
    </div>
    <h3 class="text-lg font-semibold text-gray-900">{{ $title }}</h3>
    <p class="mt-2 text-sm leading-relaxed text-gray-600">{{ $description }}</p>
</div>
