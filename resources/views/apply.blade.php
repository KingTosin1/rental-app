@extends('layouts.app')

@section('content')
    <div class="min-h-screen px-4 py-10">
        <div class="max-w-3xl mx-auto">
            <div class="mb-6 flex items-start justify-between gap-4">
                <div>
                    <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-blue-50 text-blue-700 border border-blue-100 shadow-sm">
                        <span class="inline-block w-2 h-2 rounded-full bg-blue-600"></span>
                        <span class="text-xs font-semibold">Secure Rental Application</span>
                    </div>
                    <h2 class="mt-3 text-2xl sm:text-3xl font-semibold tracking-tight">Rental Application</h2>
                    <p class="mt-2 text-slate-600">Complete all sections to submit securely. Fields marked required must be provided.</p>
                </div>
                <a href="{{ route('home') }}" class="text-sm text-slate-500 hover:text-slate-900">Back to home</a>
            </div>

            <div class="relative bg-white border border-slate-200 rounded-3xl shadow-sm overflow-hidden">
                <div class="h-2 bg-gradient-to-r from-blue-600 via-blue-500 to-indigo-500"></div>
                <div class="p-6 sm:p-8">
<form method="POST" action="{{ route('apply.store') }}" class="space-y-8" id="applicationForm">
                        
                        <div class="px-6 sm:px-8 pt-7 pb-1">
                            <div class="flex flex-wrap items-center gap-3 text-sm text-slate-600">
                                <span class="inline-flex items-center gap-2 rounded-full bg-slate-50 border border-slate-200 px-3 py-1">
                                    <span class="w-2 h-2 rounded-full bg-blue-600"></span>
                                    <span>Personal</span>
                                </span>
                                <span class="inline-flex items-center gap-2 rounded-full bg-slate-50 border border-slate-200 px-3 py-1">
                                    <span class="w-2 h-2 rounded-full bg-blue-600"></span>
                                    <span>Occupancy</span>
                                </span>
                                <span class="inline-flex items-center gap-2 rounded-full bg-slate-50 border border-slate-200 px-3 py-1">
                                    <span class="w-2 h-2 rounded-full bg-blue-600"></span>
                                    <span>Employment</span>
                                </span>
                                <span class="inline-flex items-center gap-2 rounded-full bg-slate-50 border border-slate-200 px-3 py-1">
                                    <span class="w-2 h-2 rounded-full bg-blue-600"></span>
                                    <span>References</span>
                                </span>
                                <span class="inline-flex items-center gap-2 rounded-full bg-slate-50 border border-slate-200 px-3 py-1">
                                    <span class="w-2 h-2 rounded-full bg-blue-600"></span>
                                    <span>Declaration</span>
                                </span>
                            </div>
                        </div>
                        <div class="px-6 sm:px-8 pb-8">
                        @csrf

                        <!-- PERSONAL INFO -->
                        <section>
                            <h3 class="text-lg font-semibold text-slate-900">Personal Info</h3>
                            <div class="mt-4 grid grid-cols-1 sm:grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-sm font-medium text-slate-700" for="full_name">Full Name</label>
                                    <input id="full_name" name="full_name" type="text" value="{{ old('full_name') }}" required
                                           class="mt-1 w-full rounded-xl border border-slate-200 px-4 py-3 shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500" />
                                    @error('full_name')<p class="mt-1 text-sm text-red-600">{{ $message }}</p>@enderror
                                </div>

                                <div>
                                    <label class="block text-sm font-medium text-slate-700" for="email">Email</label>
                                    <input id="email" name="email" type="email" value="{{ old('email') }}" required
                                           class="mt-1 w-full rounded-xl border border-slate-200 px-4 py-3 shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500" />
                                    @error('email')<p class="mt-1 text-sm text-red-600">{{ $message }}</p>@enderror
                                </div>

                                <div>
                                    <label class="block text-sm font-medium text-slate-700" for="phone">Phone</label>
                                    <input id="phone" name="phone" type="text" value="{{ old('phone') }}" required
                                           class="mt-1 w-full rounded-xl border border-slate-200 px-4 py-3 shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500" />
                                    @error('phone')<p class="mt-1 text-sm text-red-600">{{ $message }}</p>@enderror
                                </div>

                                <div>
                                    <label class="block text-sm font-medium text-slate-700" for="marital_status">Marital Status</label>
                                    <select id="marital_status" name="marital_status" required
                                            class="mt-1 w-full rounded-xl border border-slate-200 px-4 py-3 shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white">
                                        <option value="" disabled {{ old('marital_status') === null ? 'selected' : '' }}>Select</option>
                                        <option value="single" {{ old('marital_status') === 'single' ? 'selected' : '' }}>Single</option>
                                        <option value="married" {{ old('marital_status') === 'married' ? 'selected' : '' }}>Married</option>
                                        <option value="complicated" {{ old('marital_status') === 'complicated' ? 'selected' : '' }}>Complicated</option>
                                    </select>
                                    @error('marital_status')<p class="mt-1 text-sm text-red-600">{{ $message }}</p>@enderror
                                </div>

                                <div class="sm:col-span-2">
                                    <label class="block text-sm font-medium text-slate-700" for="address">Address</label>
                                    <textarea id="address" name="address" rows="3" required
                                              class="mt-1 w-full rounded-xl border border-slate-200 px-4 py-3 shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500">{{ old('address') }}</textarea>
                                    @error('address')<p class="mt-1 text-sm text-red-600">{{ $message }}</p>@enderror
                                </div>

                                <div>
                                    <label class="block text-sm font-medium text-slate-700" for="children_count">Number of Children</label>
                                    <input id="children_count" name="children_count" type="number" min="0" value="{{ old('children_count') }}" required
                                           class="mt-1 w-full rounded-xl border border-slate-200 px-4 py-3 shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500" />
                                    @error('children_count')<p class="mt-1 text-sm text-red-600">{{ $message }}</p>@enderror
                                </div>
                            </div>
                        </section>

                        <!-- OCCUPANCY -->
                        <section>
                            <h3 class="text-lg font-semibold text-slate-900">Occupancy</h3>
                            <div class="mt-4 grid grid-cols-1 sm:grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-sm font-medium text-slate-700" for="occupancy_length">Desired Length of Occupancy</label>
                                    <input id="occupancy_length" name="occupancy_length" type="text" value="{{ old('occupancy_length') }}" required
                                           class="mt-1 w-full rounded-xl border border-slate-200 px-4 py-3 shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500" />
                                    @error('occupancy_length')<p class="mt-1 text-sm text-red-600">{{ $message }}</p>@enderror
                                </div>

                                <div>
                                    <label class="block text-sm font-medium text-slate-700" for="move_in_date">Move-in Date</label>
                                    <input id="move_in_date" name="move_in_date" type="date" value="{{ old('move_in_date') }}" required
                                           class="mt-1 w-full rounded-xl border border-slate-200 px-4 py-3 shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500" />
                                    @error('move_in_date')<p class="mt-1 text-sm text-red-600">{{ $message }}</p>@enderror
                                </div>

                                <div>
                                    <label class="block text-sm font-medium text-slate-700">Pets</label>
                                    <div class="mt-2 flex items-center gap-4">
                                        @php $pets = old('pets'); @endphp
                                        <label class="inline-flex items-center gap-2">
                                            <input type="radio" name="pets" value="1" {{ $pets === '1' ? 'checked' : '' }} required />
                                            <span class="text-sm text-slate-700">Yes</span>
                                        </label>
                                        <label class="inline-flex items-center gap-2">
                                            <input type="radio" name="pets" value="0" {{ $pets === '0' ? 'checked' : '' }} {{ $pets === null ? 'checked' : '' }} required />
                                            <span class="text-sm text-slate-700">No</span>
                                        </label>
                                    </div>
                                    @error('pets')<p class="mt-1 text-sm text-red-600">{{ $message }}</p>@enderror
                                </div>

                                <div>
                                    <label class="block text-sm font-medium text-slate-700" for="smokers_count">Smokers Count</label>
                                    <input id="smokers_count" name="smokers_count" type="number" min="0" value="{{ old('smokers_count') }}" required
                                           class="mt-1 w-full rounded-xl border border-slate-200 px-4 py-3 shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500" />
                                    @error('smokers_count')<p class="mt-1 text-sm text-red-600">{{ $message }}</p>@enderror
                                </div>

                                <div>
                                    <label class="block text-sm font-medium text-slate-700">Ever Evicted</label>
                                    <div class="mt-2 flex items-center gap-4">
                                        @php $everEvicted = old('ever_evicted'); @endphp
                                        <label class="inline-flex items-center gap-2">
                                            <input type="radio" name="ever_evicted" value="1" {{ $everEvicted === '1' ? 'checked' : '' }} required />
                                            <span class="text-sm text-slate-700">Yes</span>
                                        </label>
                                        <label class="inline-flex items-center gap-2">
                                            <input type="radio" name="ever_evicted" value="0" {{ $everEvicted === '0' ? 'checked' : '' }} {{ $everEvicted === null ? 'checked' : '' }} required />
                                            <span class="text-sm text-slate-700">No</span>
                                        </label>
                                    </div>
                                    @error('ever_evicted')<p class="mt-1 text-sm text-red-600">{{ $message }}</p>@enderror
                                </div>

                                <div class="sm:col-span-2">
                                    <label class="block text-sm font-medium text-slate-700" for="vacating_reason">Reason for Vacating</label>
                                    <textarea id="vacating_reason" name="vacating_reason" rows="3" required
                                              class="mt-1 w-full rounded-xl border border-slate-200 px-4 py-3 shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500">{{ old('vacating_reason') }}</textarea>
                                    @error('vacating_reason')<p class="mt-1 text-sm text-red-600">{{ $message }}</p>@enderror
                                </div>
                            </div>
                        </section>

                        <!-- EMPLOYMENT -->
                        <section>
                            <h3 class="text-lg font-semibold text-slate-900">Employment</h3>
                            <div class="mt-4 grid grid-cols-1 sm:grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-sm font-medium text-slate-700" for="employer_name">Employer Name</label>
                                    <input id="employer_name" name="employer_name" type="text" value="{{ old('employer_name') }}" required
                                           class="mt-1 w-full rounded-xl border border-slate-200 px-4 py-3 shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500" />
                                    @error('employer_name')<p class="mt-1 text-sm text-red-600">{{ $message }}</p>@enderror
                                </div>

                                <div>
                                    <label class="block text-sm font-medium text-slate-700" for="occupation">Occupation</label>
                                    <input id="occupation" name="occupation" type="text" value="{{ old('occupation') }}" required
                                           class="mt-1 w-full rounded-xl border border-slate-200 px-4 py-3 shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500" />
                                    @error('occupation')<p class="mt-1 text-sm text-red-600">{{ $message }}</p>@enderror
                                </div>

                                <div>
                                    <label class="block text-sm font-medium text-slate-700" for="employment_length">Employment Length</label>
                                    <input id="employment_length" name="employment_length" type="text" value="{{ old('employment_length') }}" required
                                           class="mt-1 w-full rounded-xl border border-slate-200 px-4 py-3 shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500" />
                                    @error('employment_length')<p class="mt-1 text-sm text-red-600">{{ $message }}</p>@enderror
                                </div>

                                <div>
                                    <label class="block text-sm font-medium text-slate-700" for="monthly_income">Monthly Income</label>
                                    <input id="monthly_income" name="monthly_income" type="number" step="0.01" value="{{ old('monthly_income') }}" required
                                           class="mt-1 w-full rounded-xl border border-slate-200 px-4 py-3 shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500" />
                                    @error('monthly_income')<p class="mt-1 text-sm text-red-600">{{ $message }}</p>@enderror
                                </div>
                            </div>
                        </section>

                        <!-- REFERENCES -->
                        <section>
                            <h3 class="text-lg font-semibold text-slate-900">References</h3>
                            <div class="mt-4 grid grid-cols-1 sm:grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-sm font-medium text-slate-700" for="landlord_name">Landlord Name</label>
                                    <input id="landlord_name" name="landlord_name" type="text" value="{{ old('landlord_name') }}" required
                                           class="mt-1 w-full rounded-xl border border-slate-200 px-4 py-3 shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500" />
                                    @error('landlord_name')<p class="mt-1 text-sm text-red-600">{{ $message }}</p>@enderror
                                </div>

                                <div>
                                    <label class="block text-sm font-medium text-slate-700" for="landlord_phone">Landlord Phone</label>
                                    <input id="landlord_phone" name="landlord_phone" type="text" value="{{ old('landlord_phone') }}" required
                                           class="mt-1 w-full rounded-xl border border-slate-200 px-4 py-3 shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500" />
                                    @error('landlord_phone')<p class="mt-1 text-sm text-red-600">{{ $message }}</p>@enderror
                                </div>

                                <div>
                                    <label class="block text-sm font-medium text-slate-700" for="next_of_kin">Next of Kin</label>
                                    <input id="next_of_kin" name="next_of_kin" type="text" value="{{ old('next_of_kin') }}" required
                                           class="mt-1 w-full rounded-xl border border-slate-200 px-4 py-3 shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500" />
                                    @error('next_of_kin')<p class="mt-1 text-sm text-red-600">{{ $message }}</p>@enderror
                                </div>

                                <div>
                                    <label class="block text-sm font-medium text-slate-700" for="relationship">Relationship</label>
                                    <input id="relationship" name="relationship" type="text" value="{{ old('relationship') }}" required
                                           class="mt-1 w-full rounded-xl border border-slate-200 px-4 py-3 shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500" />
                                    @error('relationship')<p class="mt-1 text-sm text-red-600">{{ $message }}</p>@enderror
                                </div>

                                <div class="sm:col-span-2">
                                    <label class="block text-sm font-medium text-slate-700" for="next_of_kin_phone">Next of Kin Phone</label>
                                    <input id="next_of_kin_phone" name="next_of_kin_phone" type="text" value="{{ old('next_of_kin_phone') }}" required
                                           class="mt-1 w-full rounded-xl border border-slate-200 px-4 py-3 shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500" />
                                    @error('next_of_kin_phone')<p class="mt-1 text-sm text-red-600">{{ $message }}</p>@enderror
                                </div>
                            </div>
                        </section>

                        <!-- DECLARATION -->
                        <section>
                            <h3 class="text-lg font-semibold text-slate-900">Declaration</h3>

                            <div class="mt-4 space-y-4">
                                @php $authorized = old('authorized_check'); @endphp
                                <label class="flex items-start gap-3 rounded-2xl border border-slate-200 p-4 bg-white">
                                    <input type="checkbox" name="authorized_check" value="1" {{ $authorized === '1' ? 'checked' : '' }} required class="mt-1" />
                                    <span class="text-sm text-slate-700">
                                        I authorize background/reference checks.
                                    </span>
                                </label>
                                @error('authorized_check')<p class="text-sm text-red-600">{{ $message }}</p>@enderror

                                @php $infoVerified = old('information_verified'); @endphp
                                <label class="flex items-start gap-3 rounded-2xl border border-slate-200 p-4 bg-white">
                                    <input type="checkbox" name="information_verified" value="1" {{ $infoVerified === '1' ? 'checked' : '' }} class="mt-1" />
                                    <span class="text-sm text-slate-700">
                                        I confirm my information is true.
                                    </span>
                                </label>
                            </div>
                        </section>

                        <!-- SUBMIT -->
                        <div class="flex flex-col sm:flex-row items-stretch sm:items-center justify-between gap-4">
                            <p class="text-sm text-slate-500">By submitting, you accept our policies.</p>

                            <button type="submit" id="submitBtn" class="inline-flex items-center justify-center px-6 py-3 rounded-xl bg-blue-600 text-white font-semibold shadow-lg shadow-blue-600/20 hover:bg-blue-700 transition disabled:opacity-60 disabled:cursor-not-allowed">
                                <span id="submitLabel">Submit Application</span>
                                <span id="submitSpinner" class="hidden ml-3" aria-hidden="true">
                                    <svg class="animate-spin h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v4l3-3-3-3v4a8 8 0 00-8 8z"></path>
                                    </svg>
                                </span>
                            </button>
                        </div>

                        <script>
                            const form = document.getElementById('applicationForm');
                            const btn = document.getElementById('submitBtn');
                            const label = document.getElementById('submitLabel');
                            const spinner = document.getElementById('submitSpinner');

                            form.addEventListener('submit', () => {
                                btn.disabled = true;
                                label.textContent = 'Submitting...';
                                spinner.classList.remove('hidden');
                            });
                        </script>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection



