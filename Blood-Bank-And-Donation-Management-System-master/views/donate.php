<div class="bg-gray-100 min-h-screen py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-lg mx-auto bg-white rounded-lg shadow-xl overflow-hidden">
        <div class="bg-brand-600 py-6 px-10">
            <h2 class="text-3xl font-extrabold text-white text-center">Become a Donor</h2>
            <p class="mt-2 text-brand-100 text-center">Join our life-saving community</p>
        </div>

        <form class="py-8 px-10 space-y-6" action="/donate" method="POST">

            <div>
                <label for="fullname" class="block text-sm font-medium text-gray-700">Full Name</label>
                <div class="mt-1">
                    <input type="text" name="fullname" id="fullname" required
                        class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-brand-500 focus:border-brand-500 sm:text-sm">
                </div>
            </div>

            <div>
                <label for="mobileno" class="block text-sm font-medium text-gray-700">Mobile Number</label>
                <div class="mt-1">
                    <input type="tel" name="mobileno" id="mobileno" required
                        class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-brand-500 focus:border-brand-500 sm:text-sm">
                </div>
            </div>

            <div>
                <label for="emailid" class="block text-sm font-medium text-gray-700">Email Address</label>
                <div class="mt-1">
                    <input type="email" name="emailid" id="emailid"
                        class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-brand-500 focus:border-brand-500 sm:text-sm">
                </div>
            </div>

            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label for="age" class="block text-sm font-medium text-gray-700">Age</label>
                    <div class="mt-1">
                        <input type="number" name="age" id="age" required min="18" max="65"
                            class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-brand-500 focus:border-brand-500 sm:text-sm">
                    </div>
                </div>
                <div>
                    <label for="gender" class="block text-sm font-medium text-gray-700">Gender</label>
                    <div class="mt-1">
                        <select id="gender" name="gender" required
                            class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-brand-500 focus:border-brand-500 sm:text-sm bg-white">
                            <option value="">Select</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>
                </div>
            </div>

            <div>
                <label for="blood" class="block text-sm font-medium text-gray-700">Blood Group</label>
                <div class="mt-1">
                    <select id="blood" name="blood" required
                        class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-brand-500 focus:border-brand-500 sm:text-sm bg-white">
                        <option value="">Select Blood Group</option>
                        <?php foreach ($blood_groups as $group): ?>
                            <option value="<?= htmlspecialchars($group['blood_group']) ?>">
                                <?= htmlspecialchars($group['blood_group']) ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>

            <div>
                <label for="address" class="block text-sm font-medium text-gray-700">Address</label>
                <div class="mt-1">
                    <textarea id="address" name="address" rows="3" required
                        class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-brand-500 focus:border-brand-500 sm:text-sm"></textarea>
                </div>
            </div>

            <div>
                <button type="submit" name="savedata"
                    class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-brand-600 hover:bg-brand-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-brand-500 transition-colors">
                    Register
                </button>
            </div>
        </form>
    </div>
</div>