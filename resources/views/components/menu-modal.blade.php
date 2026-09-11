<div id="menu-modal" class="js-modal fixed inset-0 z-[100] hidden items-center justify-center bg-black/50 px-4 py-8">
    <div class="modal-panel relative max-h-[85vh] w-full max-w-2xl overflow-y-auto rounded-3xl bg-white p-6 shadow-2xl sm:p-8">

        <button type="button" data-close-modal aria-label="Close menu" class="absolute right-5 top-5 rounded-full p-1 text-gray-400 transition hover:bg-gray-100 hover:text-gray-600">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>

        <span class="section-label">Full Menu</span>
        <h3 class="mt-1 text-2xl font-bold text-gray-900 sm:text-3xl">Belen's Special Palabok</h3>
        <p class="mt-1 text-sm text-gray-500">Cash only · Pick-up at our Liliw, Laguna store · Open Daily 9 AM – 6 PM</p>

        {{-- PALABOK SPECIALTIES --}}
        <div class="mt-8">
            <h4 class="text-sm font-bold uppercase tracking-wide text-palabok-600">🍤 Palabok Specialties</h4>
            <ul class="mt-3 divide-y divide-gray-100">
                <li class="menu-item flex items-center gap-4 py-3">
                    <img src="https://th.bing.com/th/id/OIP.816hC_hFcqMcIhp8_ymNJwHaG0?w=163&h=181&c=7&r=0&o=7&pid=1.7&rm=3" alt="Solo Palabok" class="menu-thumb h-16 w-16 flex-shrink-0 rounded-xl object-cover shadow-sm">
                    <div class="flex flex-1 items-center justify-between gap-3">
                        <div>
                            <p class="font-semibold text-gray-900">Solo Palabok</p>
                            <p class="text-xs text-gray-500">Good for 1 person, egg & chicharon topping</p>
                        </div>
                        <span class="font-bold text-palabok-600">₱90</span>
                    </div>
                </li>
                <li class="menu-item flex items-center gap-4 py-3">
                    <img src="https://th.bing.com/th/id/OIP.xl8zpKZ5d6-qqDNNfm6p2AAAAA?w=272&h=180&c=7&r=0&o=7&pid=1.7&rm=3" alt="Family Palabok Pack" class="menu-thumb h-16 w-16 flex-shrink-0 rounded-xl object-cover shadow-sm">
                    <div class="flex flex-1 items-center justify-between gap-3">
                        <div>
                            <p class="font-semibold text-gray-900">Family Palabok Pack</p>
                            <p class="text-xs text-gray-500">Good for 4–5 persons, extra toppings included</p>
                        </div>
                        <span class="font-bold text-palabok-600">₱550</span>
                    </div>
                </li>
                <li class="menu-item flex items-center gap-4 py-3">
                    <img src="https://th.bing.com/th/id/OIP.kqwbkhBwNZhf9HBJXY6xNAHaE3?w=299&h=196&c=7&r=0&o=7&pid=1.7&rm=3" alt="Bilao Palabok Catering" class="menu-thumb h-16 w-16 flex-shrink-0 rounded-xl object-cover shadow-sm">
                    <div class="flex flex-1 items-center justify-between gap-3">
                        <div>
                            <p class="font-semibold text-gray-900">Bilao Palabok (Catering)</p>
                            <p class="text-xs text-gray-500">Good for 25–30 persons, custom toppings on request</p>
                        </div>
                        <span class="font-bold text-palabok-600">₱1,500</span>
                    </div>
                </li>
                <li class="menu-item flex items-center gap-4 py-3">
                    <img src="https://th.bing.com/th/id/OIP.jx4WMBqHVSJzzDeBWQcMOgHaFj?w=198&h=180&c=7&r=0&o=7&pid=1.7&rm=3" alt="Extra toppings" class="menu-thumb h-16 w-16 flex-shrink-0 rounded-xl object-cover shadow-sm">
                    <div class="flex flex-1 items-center justify-between gap-3">
                        <div>
                            <p class="font-semibold text-gray-900">Extra Toppings (per add-on)</p>
                            <p class="text-xs text-gray-500">Egg, chicharon, tinapa flakes, or shrimp</p>
                        </div>
                        <span class="font-bold text-palabok-600">₱25</span>
                    </div>
                </li>
            </ul>
        </div>

        {{-- OTHER NOODLE DISHES --}}
        <div class="mt-8">
            <h4 class="text-sm font-bold uppercase tracking-wide text-palabok-600">🍜 Other Noodle Dishes</h4>
            <ul class="mt-3 divide-y divide-gray-100">
                <li class="menu-item flex items-center gap-4 py-3">
                    <img src="https://th.bing.com/th/id/OIP.ERQrb43MJfLev4koQGScvAHaEc?w=237&h=180&c=7&r=0&o=7&pid=1.7&rm=3" alt="Pancit Bihon" class="menu-thumb h-16 w-16 flex-shrink-0 rounded-xl object-cover shadow-sm">
                    <div class="flex flex-1 items-center justify-between gap-3">
                        <div>
                            <p class="font-semibold text-gray-900">Pancit Bihon (Solo)</p>
                            <p class="text-xs text-gray-500">Stir-fried rice noodles with vegetables & pork</p>
                        </div>
                        <span class="font-bold text-palabok-600">₱80</span>
                    </div>
                </li>
                <li class="menu-item flex items-center gap-4 py-3">
                    <img src="https://th.bing.com/th/id/OIP.ZpZRd_Ic2ZkZSdHUEhcomwHaE7?w=233&h=180&c=7&r=0&o=7&pid=1.7&rm=3" alt="Pancit Canton" class="menu-thumb h-16 w-16 flex-shrink-0 rounded-xl object-cover shadow-sm">
                    <div class="flex flex-1 items-center justify-between gap-3">
                        <div>
                            <p class="font-semibold text-gray-900">Pancit Canton (Solo)</p>
                            <p class="text-xs text-gray-500">Egg noodles with mixed vegetables & pork slices</p>
                        </div>
                        <span class="font-bold text-palabok-600">₱85</span>
                    </div>
                </li>
                <li class="menu-item flex items-center gap-4 py-3">
                    <img src="https://th.bing.com/th/id/OIP.p5Sdpt_TkMSwkdl1rTTy4gHaFj?w=209&h=180&c=7&r=0&o=7&pid=1.7&rm=3" alt="Pancit Combo" class="menu-thumb h-16 w-16 flex-shrink-0 rounded-xl object-cover shadow-sm">
                    <div class="flex flex-1 items-center justify-between gap-3">
                        <div>
                            <p class="font-semibold text-gray-900">Pancit Bihon-Canton Combo (Family)</p>
                            <p class="text-xs text-gray-500">Good for 4–5 persons</p>
                        </div>
                        <span class="font-bold text-palabok-600">₱480</span>
                    </div>
                </li>
            </ul>
        </div>

        {{-- SIDES & EXTRAS --}}
        <div class="mt-8">
            <h4 class="text-sm font-bold uppercase tracking-wide text-palabok-600">🥟 Sides & Extras</h4>
            <ul class="mt-3 divide-y divide-gray-100">
                <li class="menu-item flex items-center gap-4 py-3">
                    <img src="https://th.bing.com/th/id/OIP.9tcFPvpU0vEIaMKVVuXf_gHaLG?w=203&h=304&c=7&r=0&o=7&pid=1.7&rm=3" alt="Lumpiang Shanghai" class="menu-thumb h-16 w-16 flex-shrink-0 rounded-xl object-cover shadow-sm">
                    <div class="flex flex-1 items-center justify-between gap-3">
                        <div>
                            <p class="font-semibold text-gray-900">Lumpiang Shanghai (10 pcs)</p>
                            <p class="text-xs text-gray-500">Crispy pork spring rolls with sweet chili dip</p>
                        </div>
                        <span class="font-bold text-palabok-600">₱120</span>
                    </div>
                </li>
                <li class="menu-item flex items-center gap-4 py-3">
                    <img src="https://th.bing.com/th/id/OIP.NkQlwJgkiQCTrdeNl-wEigHaE8?w=238&h=180&c=7&r=0&o=7&pid=1.7&rm=3" alt="Puto" class="menu-thumb h-16 w-16 flex-shrink-0 rounded-xl object-cover shadow-sm">
                    <div class="flex flex-1 items-center justify-between gap-3">
                        <div>
                            <p class="font-semibold text-gray-900">Puto (5 pcs)</p>
                            <p class="text-xs text-gray-500">Steamed rice cakes, a classic palabok pairing</p>
                        </div>
                        <span class="font-bold text-palabok-600">₱50</span>
                    </div>
                </li>
                <li class="menu-item flex items-center gap-4 py-3">
                    <img src="https://th.bing.com/th/id/OIP.jx4WMBqHVSJzzDeBWQcMOgHaFj?w=198&h=180&c=7&r=0&o=7&pid=1.7&rm=3" alt="Chicharon" class="menu-thumb h-16 w-16 flex-shrink-0 rounded-xl object-cover shadow-sm">
                    <div class="flex flex-1 items-center justify-between gap-3">
                        <div>
                            <p class="font-semibold text-gray-900">Chicharon (extra pack)</p>
                            <p class="text-xs text-gray-500">Crushed pork cracklings, great for extra crunch</p>
                        </div>
                        <span class="font-bold text-palabok-600">₱40</span>
                    </div>
                </li>
            </ul>
        </div>

        {{-- BEVERAGES / SOFTDRINKS --}}
        <div class="mt-8">
            <h4 class="text-sm font-bold uppercase tracking-wide text-palabok-600">🥤 Beverages</h4>
            <ul class="mt-3 divide-y divide-gray-100">
                <li class="menu-item flex items-center gap-4 py-3">
                    <img src="https://images.unsplash.com/photo-1622483767028-3f66f32aef97?auto=format&fit=crop&w=200&q=80" alt="Softdrinks in can" class="menu-thumb h-16 w-16 flex-shrink-0 rounded-xl object-cover shadow-sm">
                    <div class="flex flex-1 items-center justify-between gap-3">
                        <div>
                            <p class="font-semibold text-gray-900">Softdrinks (Coke, Sprite, Royal) — 8 oz</p>
                            <p class="text-xs text-gray-500">In can</p>
                        </div>
                        <span class="font-bold text-palabok-600">₱25</span>
                    </div>
                </li>
                <li class="menu-item flex items-center gap-4 py-3">
                    <img src="https://images.unsplash.com/photo-1554866585-cd94860890b7?auto=format&fit=crop&w=200&q=80" alt="Softdrinks 1.5L" class="menu-thumb h-16 w-16 flex-shrink-0 rounded-xl object-cover shadow-sm">
                    <div class="flex flex-1 items-center justify-between gap-3">
                        <div>
                            <p class="font-semibold text-gray-900">Softdrinks — 1.5L</p>
                            <p class="text-xs text-gray-500">Good for sharing with family packs</p>
                        </div>
                        <span class="font-bold text-palabok-600">₱75</span>
                    </div>
                </li>
                <li class="menu-item flex items-center gap-4 py-3">
                    <img src="https://images.unsplash.com/photo-1544145945-f90425340c7e?auto=format&fit=crop&w=200&q=80" alt="Buko Juice" class="menu-thumb h-16 w-16 flex-shrink-0 rounded-xl object-cover shadow-sm">
                    <div class="flex flex-1 items-center justify-between gap-3">
                        <div>
                            <p class="font-semibold text-gray-900">Buko Juice (bottled)</p>
                            <p class="text-xs text-gray-500">Fresh coconut juice, made in-house</p>
                        </div>
                        <span class="font-bold text-palabok-600">₱45</span>
                    </div>
                </li>
                <li class="menu-item flex items-center gap-4 py-3">
                    <img src="https://images.unsplash.com/photo-1560023907-5f339617ea30?auto=format&fit=crop&w=200&q=80" alt="Bottled water" class="menu-thumb h-16 w-16 flex-shrink-0 rounded-xl object-cover shadow-sm">
                    <div class="flex flex-1 items-center justify-between gap-3">
                        <div>
                            <p class="font-semibold text-gray-900">Bottled Water</p>
                            <p class="text-xs text-gray-500">500ml</p>
                        </div>
                        <span class="font-bold text-palabok-600">₱20</span>
                    </div>
                </li>
            </ul>
        </div>

        <button
            type="button"
            data-close-modal
            data-open-modal="order-modal"
            data-context="Menu Order"
            class="btn-primary mt-8 w-full"
        >
            Order from this menu
        </button>
    </div>
</div>
