<div class="bg-gray-100 min-h-screen py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-7xl mx-auto">

        <!-- Search Section -->
        <div class="bg-white rounded-lg shadow-md mb-8 overflow-hidden">
            <div class="bg-brand-600 py-6 px-8">
                <h2 class="text-2xl font-bold text-white">Need Blood?</h2>
                <p class="text-brand-100">Find a donor near you</p>
            </div>
            <div class="p-8">
                <form action="/need-blood" method="GET" class="flex flex-col sm:flex-row gap-4 items-end">
                    <div class="w-full sm:w-1/3">
                        <label for="blood" class="block text-sm font-medium text-gray-700 mb-1">Select Blood
                            Group</label>
                        <select id="blood" name="blood" required
                            class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-brand-500 focus:border-brand-500 sm:text-sm bg-white">
                            <option value="">Select</option>
                            <?php foreach ($blood_groups as $group): ?>
                                <option value="<?= htmlspecialchars($group['blood_group']) ?>" <?= (isset($_GET['blood']) && $_GET['blood'] == $group['blood_group']) ? 'selected' : '' ?>>
                                    <?= htmlspecialchars($group['blood_group']) ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div>
                        <button type="submit" name="search"
                            class="w-full flex justify-center py-2 px-6 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-brand-600 hover:bg-brand-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-brand-500 transition-colors">
                            Search Donors
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Results Section -->
        <?php if ($searchBox): ?>
            <h3 class="text-xl font-bold text-gray-900 mb-6">Available Donors</h3>

            <?php if (count($donors) > 0): ?>
                <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
                    <?php foreach ($donors as $donor): ?>
                        <div class="bg-white overflow-hidden shadow rounded-lg border-l-4 border-brand-500">
                            <div class="px-4 py-5 sm:p-6">
                                <div class="flex items-center mb-4">
                                    <div class="flex-shrink-0 bg-brand-100 rounded-full p-2">
                                        <svg class="h-6 w-6 text-brand-600" xmlns="http://www.w3.org/2000/svg" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                        </svg>
                                    </div>
                                    <div class="ml-4">
                                        <h4 class="text-lg font-bold text-gray-900"><?= htmlspecialchars($donor['donor_name']) ?>
                                        </h4>
                                        <span
                                            class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-red-100 text-red-800">
                                            <?= htmlspecialchars($donor['donor_blood']) ?>
                                        </span>
                                    </div>
                                </div>

                                <div class="space-y-2 text-sm text-gray-600">
                                    <div class="flex items-start">
                                        <svg class="h-5 w-5 text-gray-400 mr-2" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20" fill="currentColor">
                                            <path
                                                d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                                        </svg>
                                        <?= htmlspecialchars($donor['donor_number']) ?>
                                    </div>
                                    <div class="flex items-start">
                                        <svg class="h-5 w-5 text-gray-400 mr-2" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20" fill="currentColor">
                                            <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                                            <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                                        </svg>
                                        <?= htmlspecialchars($donor['donor_mail']) ?>
                                    </div>
                                    <div class="flex items-start">
                                        <svg class="h-5 w-5 text-gray-400 mr-2" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        <?= htmlspecialchars($donor['donor_address']) ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php else: ?>
                <div class="bg-white shadow rounded-lg p-6 text-center">
                    <svg class="mx-auto h-12 w-12 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <h3 class="mt-2 text-sm font-medium text-gray-900">No Donors Found</h3>
                    <p class="mt-1 text-sm text-gray-500">We couldn't find any donors with that blood group.</p>
                </div>
            <?php endif; ?>
        <?php endif; ?>

    </div>
</div>