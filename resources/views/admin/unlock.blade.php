@extends('layouts.admin')

@section('content')
    <div class="max-w-md mx-auto">
        <div class="text-center mb-6">
            <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-blue-50 text-blue-700 border border-blue-100 shadow-sm">
                <span class="inline-block w-2.5 h-2.5 rounded-full bg-blue-600"></span>
                <span class="text-sm font-medium">Admin Access</span>
            </div>
            <h1 class="mt-4 text-2xl font-semibold">Enter password</h1>
            <p class="mt-2 text-sm text-slate-600">To view submitted rental applications.</p>
        </div>

        <form method="POST" action="{{ route('admin.unlock') }}" class="bg-white border border-slate-200 rounded-2xl shadow-sm p-5">
            @csrf

            <div>
                <label class="block text-sm font-medium text-slate-700" for="password">Password</label>
                <input id="password" name="password" type="password" required
                       class="mt-1 w-full rounded-xl border border-slate-200 px-4 py-3 shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500"
                       autocomplete="current-password" />

                @error('password')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <button type="submit"
                    class="mt-5 w-full inline-flex items-center justify-center px-4 py-3 rounded-xl bg-blue-600 text-white font-semibold shadow-lg shadow-blue-600/25 hover:bg-blue-700 transition focus:outline-none focus:ring-4 focus:ring-blue-200">
                Unlock admin
            </button>

          <!--  <p class="mt-4 text-xs text-slate-500 text-center">Hint: password is 0907.</p> -->
        </form>
    </div>
@endsection

