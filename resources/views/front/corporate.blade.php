@extends('front.app')

@section('content')
<div class="py-16 lg:py-24 bg-surfaceLight min-h-screen text-textMain" x-data="corporateCalculator()">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- Header Section -->
        <div class="text-center max-w-3xl mx-auto mb-16">
            <div class="inline-flex items-center space-x-2 bg-emeraldLight border border-emeraldBorder px-3.5 py-1.5 rounded-full text-xs font-semibold text-emeraldPrimary mb-4">
                <span class="w-2 h-2 rounded-full bg-sageAccent animate-pulse"></span>
                <span>B2B & Employee Solutions</span>
            </div>
            <h1 class="font-display text-4xl sm:text-5xl font-extrabold text-textMain tracking-tight mb-4">
                Corporate Bulk Training
            </h1>
            <p class="text-textMuted text-base sm:text-lg">
                Equip your team with online training. Buy in bulk for your company and automatically unlock special volume discounts.
            </p>
        </div>

        <!-- Main Grid Layout -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">

            <!-- Left Column: Course Overview & Corporate Info Card -->
            <div class="lg:col-span-7 bg-cardLight border border-slate-200 rounded-3xl p-8 sm:p-10 shadow-sm space-y-8">
                <div>
                    <span class="text-xs font-bold text-emeraldPrimary uppercase tracking-wider block mb-2">Enterprise Offering</span>
                    <h2 class="font-display text-2xl sm:text-3xl font-bold text-textMain mb-4">Manual Handling Corporate Package</h2>
                    <p class="text-textMuted text-sm leading-relaxed mb-6">
                        Ideal for companies, warehouses, and teams needing multi-employee training. Includes online theory modules, assessments, and remote practical video reviews.
                    </p>

                    <ul class="space-y-3 text-sm text-textMain">
                        <li class="flex items-center space-x-3">
                            <i class="fa-solid fa-check text-emeraldPrimary"></i>
                            <span>Multi-user account allocation</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <i class="fa-solid fa-check text-emeraldPrimary"></i>
                            <span>Automated 10% discount applied instantly for 10+ courses</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <i class="fa-solid fa-check text-emeraldPrimary"></i>
                            <span>Certificate with verifiable unique id after completion of training, issued by our company</span>
                        </li>
                    </ul>
                </div>

                <!-- Verified Business Details Box (Pulled from config/global.php) -->
                <div class="bg-surfaceLight border border-slate-200 rounded-2xl p-6 space-y-3 text-xs sm:text-sm text-textMuted">
                    <div class="font-bold text-textMain uppercase tracking-wider text-xs mb-1">Corporate Provider Info</div>
                    <p><strong class="text-textMain">Company:</strong> {{ config('global.business_name') }} (CRO {{ config('global.business_number') }})</p>
                    <p><strong class="text-textMain">Address:</strong> {{ config('global.business_address') }}</p>
                    <p><strong class="text-textMain">Direct Support Line:</strong> <a href="tel:{{ config('global.phone') }}" class="text-emeraldPrimary font-semibold hover:underline">{{ config('global.phone') }}</a></p>
                </div>
            </div>

            <!-- Right Column: Interactive Quantity & Bulk Pricing Calculator Card -->
            <div class="lg:col-span-5 bg-gradient-to-br from-emeraldDark to-emerald-900 text-white rounded-3xl p-8 sm:p-10 shadow-xl relative overflow-hidden flex flex-col justify-between">
                <div class="absolute inset-0 opacity-10 bg-[radial-gradient(#10B981_1px,transparent_1px)] [background-size:16px_16px]"></div>

                <div class="relative z-10 space-y-6">
                    <div class="flex justify-between items-center border-b border-emerald-800/60 pb-4">
                        <span class="font-display font-bold text-lg">Bulk Calculator</span>
                        <span class="text-xs bg-emerald-800/80 text-emerald-200 px-3 py-1 rounded-full font-semibold">€{{ config('global.course_price') }} / course</span>
                    </div>

                    <!-- Quantity Adjuster -->
                    <div class="space-y-2">
                        <label class="block text-xs font-semibold uppercase tracking-wider text-slate-300">Select Number of Employee Courses</label>
                        <div class="flex items-center gap-4 bg-emerald-950/60 border border-emerald-800/60 rounded-2xl p-3">
                            <button @click="qty = Math.max(1, qty - 1)" class="w-10 h-10 bg-emerald-900 hover:bg-emerald-800 text-white font-bold rounded-xl flex items-center justify-center transition cursor-pointer">-</button>
                            <input type="number" x-model.number="qty" min="1" class="w-full bg-transparent text-center font-bold text-2xl text-white focus:outline-none">
                            <button @click="qty++" class="w-10 h-10 bg-emerald-900 hover:bg-emerald-800 text-white font-bold rounded-xl flex items-center justify-center transition cursor-pointer">+</button>
                        </div>
                    </div>

                    <!-- Dynamic Math Breakdown -->
                    <div class="bg-emerald-950/40 border border-emerald-800/40 rounded-2xl p-5 space-y-3">
                        <div class="flex justify-between text-sm text-slate-300">
                            <span>Retail Price (<span x-text="qty"></span> courses):</span>
                            <span class="font-semibold text-white">€<span x-text="retailTotal().toFixed(2)"></span></span>
                        </div>

                        <!-- Conditional Discount Row -->
                        <template x-if="qty >= 10">
                            <div class="space-y-2 pt-2 border-t border-emerald-800/50">
                                <div class="flex justify-between text-sm text-sageAccent font-semibold">
                                    <span>Bulk Discount (10% OFF):</span>
                                    <span>-€<span x-text="discountAmount().toFixed(2)"></span></span>
                                </div>
                                <div class="text-xs bg-sageAccent/20 text-sageAccent p-2 rounded-xl text-center font-bold">
                                    🎉 €<span x-text="discountAmount().toFixed(2)"></span> Saved with bulk discount!
                                </div>
                            </div>
                        </template>

                        <template x-if="qty < 10">
                            <div class="text-xs text-amber-300 bg-amber-950/30 border border-amber-800/30 p-2 rounded-xl text-center">
                                Add <span x-text="10 - qty"></span> more course-(s) to unlock an automatic 10% bulk discount!
                            </div>
                        </template>

                        <div class="flex justify-between items-center pt-3 border-t border-emerald-800/60">
                            <span class="text-base font-bold">Final Total:</span>
                            <span class="text-3xl font-extrabold text-sageAccent">€<span x-text="finalTotal().toFixed(2)"></span></span>
                        </div>
                    </div>
                </div>

                <!-- Action Button to Add to Cart -->
                <div class="relative z-10 pt-8">
                    <button @click="addCorporatePackageToCart()" 
                            class="w-full bg-sageAccent hover:bg-emerald-500 text-emeraldDark font-bold py-4 rounded-2xl transition-all shadow-lg text-center cursor-pointer flex items-center justify-center gap-2">
                        <i class="fa-solid fa-cart-shopping"></i>
                        <span>Add Bulk Package to Cart (€<span x-text="finalTotal().toFixed(2)"></span>)</span>
                    </button>
                </div>

            </div>

        </div>
    </div>
</div>

<script>
    function corporateCalculator() {
        return {
            qty: 10,
            unitPrice: {{ config('global.course_price') }},
            
            retailTotal() {
                return this.qty * this.unitPrice;
            },
            
            discountAmount() {
                if (this.qty >= 10) {
                    return this.retailTotal() * 0.10;
                }
                return 0;
            },
            
            finalTotal() {
                return this.retailTotal() - this.discountAmount();
            },
            
            addCorporatePackageToCart() {
                $store.cart.addItem({
                    id: 1,
                    name: 'Manual Handling Training (Corporate Course x' + this.qty + ')',
                    price: this.unitPrice,
                    quantity: this.qty
                });
            }
        }
    }
</script>
@endsection