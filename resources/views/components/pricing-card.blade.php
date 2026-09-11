@props([
    'plan' => 'Solo',
    'price' => '₱90',
    'period' => '/order',
    'features' => [],
    'highlighted' => false,
])

<div @class([
    'relative isolate flex flex-col rounded-2xl border p-8 shadow-sm transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl hover:z-10',
    'border-palabok-600 bg-palabok-600 text-white shadow-xl lg:-translate-y-4' => $highlighted,
    'border-gray-100 bg-white' => ! $highlighted,
])>
    @if($highlighted)
        <span class="mb-4 inline-block w-fit rounded-full bg-white/20 px-3 py-1 text-xs font-semibold uppercase tracking-wide">Most Popular</span>
    @endif

    <h3 @class(['text-xl font-bold', 'text-white' => $highlighted, 'text-gray-900' => ! $highlighted])>{{ $plan }}</h3>

    <p class="mt-4 flex items-baseline gap-1">
        <span @class(['text-4xl font-extrabold', 'text-white' => $highlighted, 'text-gray-900' => ! $highlighted])>{{ $price }}</span>
        <span @class(['text-sm', 'text-white/70' => $highlighted, 'text-gray-500' => ! $highlighted])>{{ $period }}</span>
    </p>

    <ul class="mt-6 flex-1 space-y-3">
        @foreach($features as $feature)
            <li class="flex items-start gap-2 text-sm">
                <svg xmlns="http://www.w3.org/2000/svg" class="mt-0.5 h-5 w-5 flex-shrink-0 {{ $highlighted ? 'text-white' : 'text-palabok-600' }}" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                </svg>
                <span @class(['text-white/90' => $highlighted, 'text-gray-600' => ! $highlighted])>{{ $feature }}</span>
            </li>
        @endforeach
    </ul>

    <button
        type="button"
        data-open-modal="order-modal"
        data-plan="{{ $plan }}"
        data-price="{{ $price }}{{ $period }}"
        @class([
            'mt-8 inline-flex items-center justify-center rounded-full px-6 py-3 text-sm font-semibold transition active:scale-95',
            'bg-white text-palabok-600 hover:bg-palabok-50' => $highlighted,
            'bg-palabok-600 text-white hover:bg-palabok-700' => ! $highlighted,
        ])
    >
        Order Now
    </button>
</div>
