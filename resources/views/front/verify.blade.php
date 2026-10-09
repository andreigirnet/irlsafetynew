@extends('front.app')

@section('content')
    <div class="py-16 lg:py-24 bg-surfaceLight min-h-screen text-textMain">
        <div class="max-w-xl mx-auto px-4 sm:px-6 lg:px-8">

            <!-- Page Header -->
            <div class="text-center mb-10">
                <h1 class="font-display text-3xl sm:text-4xl font-extrabold text-textMain tracking-tight mb-2" id="titleCertificate">
                    Check a certificate
                </h1>
                <p class="text-textMuted text-sm sm:text-base">
                    Enter the certificate ID printed on a certificate of completion to check whether we issued it.
                </p>
            </div>

            <!-- Check Card -->
            <div class="bg-cardLight border border-slate-200 rounded-2xl p-8 sm:p-10 shadow-sm overflow-hidden relative">

                <div class="mb-8">
                    <h2 class="font-display font-bold text-xl text-textMain mb-1">Certificate check</h2>
                    <p class="text-textMuted text-sm">Enter the certificate ID below.</p>
                </div>

                <!-- Session Alerts -->
                @if(session('success'))
                    <div class="bg-emeraldLight text-emeraldPrimary p-4 rounded-xl mb-6 border border-emeraldBorder text-sm font-semibold flex items-center gap-2" role="status">
                        <span aria-hidden="true">✓</span> <span>{{ session('success') }}</span>
                    </div>
                @endif

                @if(session('fail'))
                    <div class="bg-rose-50 text-rose-800 p-4 rounded-xl mb-6 border border-rose-200 text-sm font-semibold flex items-center gap-2" role="alert">
                        <span aria-hidden="true">✕</span> <span>{{ session('fail') }}</span>
                    </div>
                @endif

                <!-- Form -->
                <form action="{{ route('certificate.verify') }}" method="POST" class="space-y-6">
                    @csrf
                    <div>
                        <label for="unique_id" class="block text-sm font-semibold text-textMain mb-2">Certificate ID</label>
                        <input type="text"
                               name="unique_id"
                               id="unique_id"
                               class="w-full bg-surfaceLight border border-slate-200 rounded-xl px-4 py-3.5 text-textMain text-sm focus:outline-none focus:border-emeraldPrimary transition"
                               placeholder="Enter certificate ID"
                               autocomplete="off"
                               required>
                    </div>
                    <button type="submit" class="w-full bg-emeraldPrimary hover:bg-emeraldHover text-white font-semibold py-3.5 rounded-xl transition-all shadow-md shadow-emeraldPrimary/20 text-center">
                        Check certificate
                    </button>
                </form>

                <!-- Disclaimer -->
                <div class="mt-8 pt-6 border-t border-slate-100 text-sm text-textMuted leading-relaxed">
                    <p class="mb-3">
                        This is a private certificate of completion issued by Progressive Velocity Fast Solutions Limited. It shows that the named person completed our training. It is not a State-accredited qualification.
                    </p>
                    <p class="mb-0">
                        Progressive Velocity Fast Solutions Limited, company number (CRO) 822301, 51 Bracken Road, Dublin, D18 CV48, Ireland.
                    </p>
                </div>

            </div>

        </div>
    </div>
@endsection