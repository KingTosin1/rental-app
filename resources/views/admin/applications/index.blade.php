@extends('layouts.admin')

@section('content')
    @if (!isset($applications))
        <div class="bg-white border border-red-200 text-red-700 p-4 rounded-2xl">No applications variable passed to view.</div>
    @endif

    <div class="flex items-center justify-between gap-4 mb-6">
        <div>
            <h1 class="text-2xl font-semibold">Applications</h1>
            <p class="text-slate-600 mt-1">All submitted rental applications.</p>
        </div>
    </div>

    <div class="bg-white border border-slate-200 rounded-2xl shadow-sm overflow-hidden">
        <div class="overflow-x-auto">
            <table class="min-w-full text-sm">
                <thead class="bg-slate-50">
                    <tr>
                        <th class="text-left px-4 py-3 font-semibold text-slate-700">Full Name</th>
                        <th class="text-left px-4 py-3 font-semibold text-slate-700">Email</th>
                        <th class="text-left px-4 py-3 font-semibold text-slate-700">Phone</th>
                        <th class="text-left px-4 py-3 font-semibold text-slate-700">Date Submitted</th>
                        <th class="text-left px-4 py-3 font-semibold text-slate-700">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($applications as $app)
                        <tr class="border-t border-slate-100">
                            <td class="px-4 py-3 font-medium text-slate-900">{{ $app->full_name }}</td>
                            <td class="px-4 py-3 text-slate-700">{{ $app->email }}</td>
                            <td class="px-4 py-3 text-slate-700">{{ $app->phone }}</td>
                            <td class="px-4 py-3 text-slate-700">{{ $app->created_at?->format('Y-m-d H:i') }}</td>
                            <td class="px-4 py-3">
                                <a href="{{ route('admin.applications.show', $app->id) }}" class="inline-flex items-center justify-center px-3 py-2 rounded-xl bg-blue-600 text-white font-semibold hover:bg-blue-700 transition">
                                    View
                                </a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="px-4 py-10 text-center text-slate-600">No applications yet.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection

