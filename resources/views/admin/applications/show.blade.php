@extends('layouts.admin')

@section('content')
    <div class="mb-6">
        <a href="{{ route('admin.applications.index') }}" class="text-sm text-slate-600 hover:text-slate-900">← Back to list</a>
        <h1 class="mt-2 text-2xl font-semibold">{{ $application->full_name }}</h1>
        <p class="mt-1 text-slate-600">Submitted {{ $application->created_at?->format('Y-m-d H:i') }}</p>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
        <div class="bg-white border border-slate-200 rounded-2xl shadow-sm p-5">
            <h2 class="font-semibold text-slate-900">Personal Info</h2>
            <dl class="mt-3 space-y-3 text-sm">
                <div class="flex justify-between gap-4 border-b border-slate-100 pb-3">
                    <dt class="text-slate-500">Email</dt>
                    <dd class="font-medium text-slate-900">{{ $application->email }}</dd>
                </div>
                <div class="flex justify-between gap-4 border-b border-slate-100 pb-3">
                    <dt class="text-slate-500">Phone</dt>
                    <dd class="font-medium text-slate-900">{{ $application->phone }}</dd>
                </div>
                <div class="flex justify-between gap-4 border-b border-slate-100 pb-3">
                    <dt class="text-slate-500">Address</dt>
                    <dd class="text-right font-medium text-slate-900">{{ $application->address }}</dd>
                </div>
                <div class="flex justify-between gap-4 border-b border-slate-100 pb-3">
                    <dt class="text-slate-500">Marital Status</dt>
                    <dd class="font-medium text-slate-900">{{ $application->marital_status }}</dd>
                </div>
                <div class="flex justify-between gap-4">
                    <dt class="text-slate-500">Children</dt>
                    <dd class="font-medium text-slate-900">{{ $application->children_count }}</dd>
                </div>
            </dl>
        </div>

        <div class="bg-white border border-slate-200 rounded-2xl shadow-sm p-5">
            <h2 class="font-semibold text-slate-900">Occupancy</h2>
            <dl class="mt-3 space-y-3 text-sm">
                <div class="flex justify-between gap-4 border-b border-slate-100 pb-3">
                    <dt class="text-slate-500">Occupancy Length</dt>
                    <dd class="font-medium text-slate-900">{{ $application->occupancy_length }}</dd>
                </div>
                <div class="flex justify-between gap-4 border-b border-slate-100 pb-3">
                    <dt class="text-slate-500">Move-in Date</dt>
                    <dd class="font-medium text-slate-900">{{ $application->move_in_date?->format('Y-m-d') }}</dd>
                </div>
                <div class="flex justify-between gap-4 border-b border-slate-100 pb-3">
                    <dt class="text-slate-500">Pets</dt>
                    <dd class="font-medium text-slate-900">{{ $application->pets ? 'Yes' : 'No' }}</dd>
                </div>
                <div class="flex justify-between gap-4 border-b border-slate-100 pb-3">
                    <dt class="text-slate-500">Smokers Count</dt>
                    <dd class="font-medium text-slate-900">{{ $application->smokers_count }}</dd>
                </div>
                <div class="flex justify-between gap-4 border-b border-slate-100 pb-3">
                    <dt class="text-slate-500">Ever Evicted</dt>
                    <dd class="font-medium text-slate-900">{{ $application->ever_evicted ? 'Yes' : 'No' }}</dd>
                </div>
                <div class="flex justify-between gap-4">
                    <dt class="text-slate-500">Vacating Reason</dt>
                    <dd class="text-right font-medium text-slate-900">{{ $application->vacating_reason }}</dd>
                </div>
            </dl>
        </div>

        <div class="bg-white border border-slate-200 rounded-2xl shadow-sm p-5 lg:col-span-2">
            <h2 class="font-semibold text-slate-900">Employment, References & Declaration</h2>
            <div class="mt-4 grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="border border-slate-100 rounded-2xl p-4">
                    <h3 class="font-semibold text-slate-900">Employment</h3>
                    <dl class="mt-3 space-y-3 text-sm">
                        <div class="flex justify-between gap-4">
                            <dt class="text-slate-500">Employer</dt>
                            <dd class="font-medium text-slate-900">{{ $application->employer_name }}</dd>
                        </div>
                        <div class="flex justify-between gap-4">
                            <dt class="text-slate-500">Occupation</dt>
                            <dd class="font-medium text-slate-900">{{ $application->occupation }}</dd>
                        </div>
                        <div class="flex justify-between gap-4">
                            <dt class="text-slate-500">Employment Length</dt>
                            <dd class="font-medium text-slate-900">{{ $application->employment_length }}</dd>
                        </div>
                        <div class="flex justify-between gap-4">
                            <dt class="text-slate-500">Monthly Income</dt>
                            <dd class="font-medium text-slate-900">{{ $application->monthly_income }}</dd>
                        </div>
                    </dl>
                </div>

                <div class="border border-slate-100 rounded-2xl p-4">
                    <h3 class="font-semibold text-slate-900">References</h3>
                    <dl class="mt-3 space-y-3 text-sm">
                        <div class="flex justify-between gap-4">
                            <dt class="text-slate-500">Landlord</dt>
                            <dd class="font-medium text-slate-900">{{ $application->landlord_name }}</dd>
                        </div>
                        <div class="flex justify-between gap-4">
                            <dt class="text-slate-500">Landlord Phone</dt>
                            <dd class="font-medium text-slate-900">{{ $application->landlord_phone }}</dd>
                        </div>
                        <div class="flex justify-between gap-4">
                            <dt class="text-slate-500">Next of Kin</dt>
                            <dd class="font-medium text-slate-900">{{ $application->next_of_kin }}</dd>
                        </div>
                        <div class="flex justify-between gap-4">
                            <dt class="text-slate-500">Relationship</dt>
                            <dd class="font-medium text-slate-900">{{ $application->relationship }}</dd>
                        </div>
                        <div class="flex justify-between gap-4">
                            <dt class="text-slate-500">Next of Kin Phone</dt>
                            <dd class="font-medium text-slate-900">{{ $application->next_of_kin_phone }}</dd>
                        </div>
                    </dl>
                </div>

                <div class="border border-slate-100 rounded-2xl p-4 md:col-span-2">
                    <h3 class="font-semibold text-slate-900">Declaration</h3>
                    <dl class="mt-3 space-y-3 text-sm">
                        <div class="flex justify-between gap-4">
                            <dt class="text-slate-500">Authorized Check</dt>
                            <dd class="font-medium text-slate-900">{{ $application->authorized_check ? 'Yes' : 'No' }}</dd>
                        </div>
                        <div class="flex justify-between gap-4">
                            <dt class="text-slate-500">Information Verified</dt>
                            <dd class="font-medium text-slate-900">{{ $application->information_verified ? 'Yes' : 'No' }}</dd>
                        </div>
                    </dl>
                </div>
            </div>
        </div>
    </div>
@endsection

