@extends('layouts.app')

@section('content')
    <div class="min-h-[calc(100vh-0px)] flex items-center justify-center px-4 py-10">
        <div class="w-full max-w-3xl text-center">
            <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-blue-50 text-blue-700 border border-blue-100 shadow-sm">
                <span class="inline-block w-2.5 h-2.5 rounded-full bg-blue-600"></span>
                <a href="{{ route('admin.unlock.form') }}" class="text-sm font-medium hover:opacity-90 focus:outline-none focus:ring-2 focus:ring-blue-400 rounded">
                    Secure online submissions
                </a>
            </div>


            <h1 class="mt-7 text-4xl sm:text-6xl font-semibold tracking-tight text-slate-900">
                Rental Application Portal
            </h1>
            <p class="mt-5 text-lg sm:text-xl text-slate-600 max-w-2xl mx-auto">
                Submit your rental application securely online—fast, mobile-friendly, and ready for international applicants.
            </p>

            <div class="mt-9 flex justify-center">
                <a href="{{ route('apply.create') }}" class="inline-flex items-center justify-center px-7 py-3 rounded-2xl bg-blue-600 text-white font-semibold shadow-lg shadow-blue-600/25 hover:bg-blue-700 transition focus:outline-none focus:ring-4 focus:ring-blue-200">
                    Apply Now
                    <svg class="ml-2 -mr-1 w-5 h-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </a>
            </div>

            <div class="mt-10 bg-white/70 backdrop-blur rounded-3xl border border-slate-200 shadow-sm px-5 py-4 text-left">
                <div class="flex items-start gap-3">
                    <div class="mt-0.5 w-10 h-10 rounded-2xl bg-blue-50 border border-blue-100 flex items-center justify-center">
                        <svg class="w-5 h-5 text-blue-600" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 1.5l7 4v6.5c0 5.2-3.2 9.6-7 11-3.8-1.4-7-5.8-7-11V5.5l7-4z" stroke="currentColor" stroke-width="1.5"/>
                            <path d="M9.5 12l1.8 1.8L15.8 9.3" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <div>
                        <p class="text-sm font-semibold text-slate-900">Apply in minutes, anywhere</p>
                        <p class="mt-1 text-sm text-slate-600">Complete your rental application through our secure online form. Submit your information quickly and conveniently for review.</p>
                    </div>
                </div>
            </div>

            <footer class="mt-12 text-sm text-slate-500">
                <div class="flex flex-wrap items-center justify-center gap-x-5 gap-y-2">
                    <a href="#" class="hover:text-slate-900 underline underline-offset-4">Privacy Policy</a>
                    <a href="#" class="hover:text-slate-900 underline underline-offset-4">Terms</a>
                    <span>
                        Contact:
                        <a href="mailto:contact@example.com" class="text-blue-600 hover:text-blue-700 underline underline-offset-4">contact@example.com</a>
                    </span>
                </div>
            </footer>
        </div>
    </div>
@endsection



