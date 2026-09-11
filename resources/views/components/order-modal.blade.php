<div id="order-modal" class="js-modal fixed inset-0 z-[100] hidden items-center justify-center bg-black/50 px-4 py-8">
    <div class="modal-panel relative w-full max-w-lg rounded-3xl bg-white p-6 shadow-2xl sm:p-8">

        <button type="button" data-close-modal aria-label="Close" class="absolute right-5 top-5 rounded-full p-1 text-gray-400 transition hover:bg-gray-100 hover:text-gray-600">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>

        <span class="section-label">Place Your Order</span>
        <h3 class="mt-1 text-2xl font-bold text-gray-900">Let's get you fed</h3>
        <p id="order-modal-subtitle" class="mt-1 text-sm text-gray-500">Tell us what you'd like — we'll confirm by phone or Messenger.</p>

        {{-- Quick contact options --}}
        <div class="mt-6 grid grid-cols-2 gap-3">
            <a href="tel:+639274496817" class="flex flex-col items-center gap-1 rounded-xl border border-gray-200 py-3 text-xs font-semibold text-gray-700 transition hover:border-palabok-400 hover:text-palabok-600">
                <span class="text-lg">📞</span> Call
            </a>
            <a href="https://m.me/belenspecialpalabok" target="_blank" rel="noopener" class="flex flex-col items-center gap-1 rounded-xl border border-gray-200 py-3 text-xs font-semibold text-gray-700 transition hover:border-palabok-400 hover:text-palabok-600">
                <span class="text-lg">💬</span> Messenger
            </a>
        </div>

        <div class="my-6 flex items-center gap-3">
            <span class="h-px flex-1 bg-gray-100"></span>
            <span class="text-xs font-medium uppercase tracking-wide text-gray-400">Or send order details</span>
            <span class="h-px flex-1 bg-gray-100"></span>
        </div>

        {{-- Order form: builds a pre-filled WhatsApp message, no backend needed --}}
        <form id="order-form" class="space-y-4">
            <div>
                <label for="order-name" class="block text-sm font-medium text-gray-700">Your Name</label>
                <input type="text" id="order-name" required placeholder="Juan Dela Cruz"
                    class="mt-1 w-full rounded-xl border border-gray-300 px-4 py-2.5 text-sm focus:border-palabok-500 focus:outline-none focus:ring-1 focus:ring-palabok-500">
            </div>

            <div>
                <label for="order-contact" class="block text-sm font-medium text-gray-700">Contact Number</label>
                <input type="tel" id="order-contact" required placeholder="09XX XXX XXXX"
                    class="mt-1 w-full rounded-xl border border-gray-300 px-4 py-2.5 text-sm focus:border-palabok-500 focus:outline-none focus:ring-1 focus:ring-palabok-500">
            </div>

            <div>
                <label for="order-selected-plan" class="block text-sm font-medium text-gray-700">Order / Plan</label>
                <select id="order-selected-plan" required
                    class="mt-1 w-full rounded-xl border border-gray-300 bg-white px-4 py-2.5 text-sm focus:border-palabok-500 focus:outline-none focus:ring-1 focus:ring-palabok-500">
                    <option value="General Inquiry">General Inquiry</option>
                    <optgroup label="🍤 Palabok Specialties">
                        <option value="Solo Palabok (₱90)">Solo Palabok — ₱90</option>
                        <option value="Family Palabok Pack (₱550)">Family Palabok Pack — ₱550</option>
                        <option value="Bilao Palabok (Catering) (₱1,500)">Bilao Palabok (Catering) — ₱1,500</option>
                        <option value="Extra Toppings (per add-on) (₱25)">Extra Toppings (per add-on) — ₱25</option>
                    </optgroup>
                    <optgroup label="🍜 Other Noodle Dishes">
                        <option value="Pancit Bihon (Solo) (₱80)">Pancit Bihon (Solo) — ₱80</option>
                        <option value="Pancit Canton (Solo) (₱85)">Pancit Canton (Solo) — ₱85</option>
                        <option value="Pancit Bihon-Canton Combo (Family) (₱480)">Pancit Bihon-Canton Combo (Family) — ₱480</option>
                    </optgroup>
                    <optgroup label="🥟 Sides & Extras">
                        <option value="Lumpiang Shanghai (10 pcs) (₱120)">Lumpiang Shanghai (10 pcs) — ₱120</option>
                        <option value="Puto (5 pcs) (₱50)">Puto (5 pcs) — ₱50</option>
                        <option value="Chicharon (extra pack) (₱40)">Chicharon (extra pack) — ₱40</option>
                    </optgroup>
                    <optgroup label="🥤 Beverages">
                        <option value="Softdrinks (Coke, Sprite, Royal) — 8 oz (₱25)">Softdrinks (Coke, Sprite, Royal) — 8 oz — ₱25</option>
                        <option value="Softdrinks — 1.5L (₱75)">Softdrinks — 1.5L — ₱75</option>
                        <option value="Buko Juice (bottled) (₱45)">Buko Juice (bottled) — ₱45</option>
                        <option value="Bottled Water (₱20)">Bottled Water — ₱20</option>
                    </optgroup>
                    <optgroup label="Other">
                        <option value="Catering / Bulk Order Inquiry">Catering / Bulk Order Inquiry</option>
                        <option value="Loyalty Rewards Registration">Loyalty Rewards Registration</option>
                    </optgroup>
                </select>
            </div>

            <div>
                <label for="order-details" class="block text-sm font-medium text-gray-700">Additional Details (optional)</label>
                <textarea id="order-details" rows="3" placeholder="Pick-up time, extra toppings, allergies, etc."
                    class="mt-1 w-full rounded-xl border border-gray-300 px-4 py-2.5 text-sm focus:border-palabok-500 focus:outline-none focus:ring-1 focus:ring-palabok-500"></textarea>
            </div>

            <p class="text-xs text-gray-400">Cash only · Pick-up at our Liliw, Laguna store.</p>

            <button type="submit" class="btn-primary w-full">Send Order via Messenger</button>

            <p id="order-form-confirmation" class="hidden rounded-lg bg-green-50 px-4 py-2 text-center text-sm font-medium text-green-700">
                Opening Messenger with your order details — see you soon! 🍜
            </p>
        </form>
    </div>
</div>
