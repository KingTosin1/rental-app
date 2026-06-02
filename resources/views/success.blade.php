@extends('layouts.app')

@section('content')
    <div class="min-h-screen flex items-center justify-center px-4 py-12">
        <div class="w-full max-w-xl">
            <div class="relative overflow-hidden bg-white border border-slate-200 rounded-3xl shadow-sm p-8">
                <div class="absolute top-0 left-0 right-0 h-2 bg-gradient-to-r from-blue-600 via-blue-500 to-indigo-500"></div>

                <div class="relative">
                    <div class="w-14 h-14 rounded-2xl bg-blue-50 flex items-center justify-center border border-blue-100">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7 text-blue-600" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.707a1 1 0 00-1.414-1.414L9 10.172 7.707 8.879a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                    </div>

                    <h2 class="mt-6 text-3xl font-semibold tracking-tight">Application submitted</h2>
                    <p class="mt-3 text-slate-600">
                        Thank you! Your rental application has been securely received. We’ve also made it visible in Admin for review.
                    </p>

                    <div class="mt-6 grid grid-cols-1 sm:grid-cols-2 gap-3">
                        <div class="rounded-2xl border border-slate-200 bg-slate-50 p-4">
                            <p class="text-xs font-semibold text-slate-600">Next step</p>
                            <p class="mt-1 text-sm font-medium text-slate-900">Keep your phone/email accessible.</p>
                        </div>
                        <div class="rounded-2xl border border-slate-200 bg-slate-50 p-4">
                            <p class="text-xs font-semibold text-slate-600">Privacy</p>
                            <p class="mt-1 text-sm font-medium text-slate-900">Your information is stored safely.</p>
                        </div>
                    </div>

                    <div class="mt-8 flex flex-col sm:flex-row gap-3">
                        <a href="{{ route('apply.create') }}" class="inline-flex items-center justify-center px-6 py-3 rounded-xl border border-slate-200 text-slate-700 font-semibold hover:bg-slate-50 transition">
                            Submit another
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


