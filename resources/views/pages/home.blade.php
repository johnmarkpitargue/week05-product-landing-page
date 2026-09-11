@extends('layouts.app')

@section('title', "Belen's Special Palabok — Authentic Homemade Palabok")

@section('content')

    <x-hero />

    {{-- FEATURES SECTION --}}
    <section id="features" class="mx-auto max-w-7xl px-6 py-24 lg:px-8">
        <div class="reveal mx-auto max-w-2xl text-center">
            <span class="section-label">Why customers love us</span>
            <h2 class="mt-3 text-3xl font-bold text-gray-900 sm:text-4xl">What makes our palabok special</h2>
            <p class="mt-4 text-gray-600">Every bowl is cooked in small batches using ingredients sourced fresh from the local wet market — made with love and passion.</p>
        </div>

        <div class="reveal-stagger mt-16 grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
            <x-feature-card icon="🍤" title="Fresh Shrimp Sauce" description="Our signature annatto‑shrimp sauce is simmered daily using fresh shrimp heads for real seafood flavor." />
            <x-feature-card icon="🥚" title="Quality Toppings" description="Boiled egg, tinapa flakes, chicharon, and spring onion — generously piled on every order." />
            <x-feature-card icon="🏪" title="Fresh Daily Pick-up" description="Ready for pick-up at our Liliw store, always cooked fresh the same day you order." />
            <x-feature-card icon="🎉" title="Catering Packages" description="Bulk trays perfect for fiestas, birthdays, and office parties, good for 10–50 persons." />
            <x-feature-card icon="🌾" title="Fresh Rice Noodles" description="We use springy bihon noodles cooked to order so they never turn soggy." />
            <x-feature-card icon="💵" title="Easy Cash Reservation" description="Reserve through Messenger, pay cash on pick-up — no online payment needed." />
        </div>
    </section>

    {{-- PRODUCT SHOWCASE SECTION --}}
    <section class="bg-palabok-50/60 py-24">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="reveal grid grid-cols-1 items-center gap-12 lg:grid-cols-2">

                <div class="grid grid-cols-2 gap-4">
                    <img src="https://images.unsplash.com/photo-1626804475297-411878cbf9c1?auto=format&fit=crop&w=600&q=80" alt="Close-up bowl of palabok topped with shrimp, egg, and chicharon" class="col-span-2 h-56 w-full rounded-2xl object-cover shadow-lg transition duration-500 hover:scale-[1.02]">
                    <img src="https://images.unsplash.com/photo-1585032226651-759b368d7246?auto=format&fit=crop&w=400&q=80" alt="Fresh rice noodles and toppings being prepared" class="h-40 w-full rounded-2xl object-cover shadow-lg transition duration-500 hover:scale-[1.02]">
                    <img src="https://images.unsplash.com/photo-1512058564366-18510be2db19?auto=format&fit=crop&w=400&q=80" alt="Packed palabok order ready for pick-up" class="h-40 w-full rounded-2xl object-cover shadow-lg transition duration-500 hover:scale-[1.02]">
                </div>

                <div>
                    <span class="section-label">Made Fresh, Every Batch</span>
                    <h2 class="mt-3 text-3xl font-bold text-gray-900 sm:text-4xl">See exactly what goes into every order</h2>
                    <p class="mt-4 text-gray-600">From simmering the sauce to packing your order, everything is made the same day you pick it up — no shortcuts, no reheats.</p>

                    <ul class="mt-8 space-y-4">
                        <li class="flex items-start gap-3">
                            <span class="mt-1 h-2 w-2 flex-shrink-0 rounded-full bg-palabok-600"></span>
                            <span class="text-gray-700"><strong>Cooked same-day</strong> — your order is made fresh, not reheated from a batch cooked days ago.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="mt-1 h-2 w-2 flex-shrink-0 rounded-full bg-palabok-600"></span>
                            <span class="text-gray-700"><strong>Reserve ahead</strong> — message us your order and pick-up time, skip the wait.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="mt-1 h-2 w-2 flex-shrink-0 rounded-full bg-palabok-600"></span>
                            <span class="text-gray-700"><strong>Cash on pick-up</strong> — simple, no online payment required.</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    {{-- PRICING SECTION --}}
    <section id="pricing" class="mx-auto max-w-7xl overflow-visible px-6 py-24 lg:px-8">
        <div class="reveal mx-auto max-w-2xl text-center">
            <span class="section-label">Pricing</span>
            <h2 class="mt-3 text-3xl font-bold text-gray-900 sm:text-4xl">Choose the size that fits your cravings</h2>
            <p class="mt-4 text-gray-600">Simple, transparent pricing — from a solo bowl to a full catering tray.</p>
        </div>

        <div class="reveal-stagger mt-16 grid grid-cols-1 items-end gap-8 pt-4 lg:grid-cols-3">
            <x-pricing-card
                plan="Solo"
                price="₱90"
                period="/solo bowl"
                :features="['Good for 1 person', 'Shrimp‑annatto sauce', 'Egg & chicharon topping', 'Dine‑in or takeout']"
            />
            <x-pricing-card
                plan="Family"
                price="₱550"
                period="/family pack"
                :highlighted="true"
                :features="['Good for 4–5 persons', 'Extra toppings included', 'Free calamansi & sawsawan', 'Ready in 20–30 mins for pick-up']"
            />
            <x-pricing-card
                plan="Bilao"
                price="₱1,500"
                period="/catering tray"
                :features="['Good for 25–30 persons', 'Custom toppings on request', 'Reserve 1 day in advance', 'Dedicated event coordinator']"
            />
        </div>
    </section>

    {{-- TESTIMONIALS SECTION --}}
    <section id="testimonials" class="bg-gray-50 py-24">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="reveal mx-auto max-w-2xl text-center">
                <span class="section-label">Testimonials</span>
                <h2 class="mt-3 text-3xl font-bold text-gray-900 sm:text-4xl">Loved by families and offices alike</h2>
            </div>

            <div class="reveal-stagger mt-16 grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3">
                <x-testimonial-card
                    photo="https://randomuser.me/api/portraits/women/68.jpg"
                    name="Maricel Santos"
                    position="Regular Customer"
                    review="Pinaka masarap na palabok sa Liliw! Sauce alone is worth it. Order na kami tuwing Sabado."
                />
                <x-testimonial-card
                    photo="https://randomuser.me/api/portraits/men/32.jpg"
                    name="Jerome Villanueva"
                    position="Office Team Lead"
                    review="We ordered the catering tray for our office party — arrived on time, food was fresh, and everyone asked where we got it."
                />
                <x-testimonial-card
                    photo="https://randomuser.me/api/portraits/women/44.jpg"
                    name="Ate Belen's Loyal Suki"
                    position="Neighbor & Regular"
                    review="Sobrang consistent yung lasa, parang lutong bahay talaga. Favorite namin every fiesta season."
                />
            </div>
        </div>
    </section>

    {{-- CALL TO ACTION SECTION --}}
    <section id="contact" class="mx-auto max-w-7xl px-6 py-24 lg:px-8">
        <div class="reveal relative overflow-hidden rounded-3xl bg-palabok-600 px-8 py-16 text-center shadow-xl sm:px-16">
            <div class="absolute -right-10 -top-10 h-56 w-56 rounded-full bg-white/10"></div>
            <div class="absolute -bottom-10 -left-10 h-56 w-56 rounded-full bg-white/10"></div>

            <h2 class="relative text-3xl font-bold text-white sm:text-4xl">Craving palabok tonight?</h2>
            <p class="relative mx-auto mt-4 max-w-xl text-palabok-50">
                Reserve your loyalty rewards, book your event catering, or just send us a message — we'd love to feed you.
            </p>
            <div class="relative mt-8 flex flex-col items-center justify-center gap-4 sm:flex-row">
                <button type="button" data-open-modal="order-modal" data-context="Loyalty Rewards Registration"
                    class="inline-flex items-center justify-center rounded-full bg-white px-6 py-3 text-sm font-semibold text-palabok-600 shadow-md transition hover:bg-palabok-50 active:scale-95">
                    Register Now
                </button>
                <button type="button" data-open-modal="order-modal" data-context="Catering / Bulk Order Inquiry"
                    class="inline-flex items-center justify-center rounded-full border border-white/60 px-6 py-3 text-sm font-semibold text-white transition hover:bg-white/10 active:scale-95">
                    Contact for Catering
                </button>
                <a href="https://www.facebook.com/belenspecialpalabok" target="_blank" rel="noopener"
                    class="inline-flex items-center justify-center rounded-full border border-white/60 px-6 py-3 text-sm font-semibold text-white transition hover:bg-white/10 active:scale-95">
                    Message us on Facebook
                </a>
            </div>
        </div>
    </section>

@endsection
