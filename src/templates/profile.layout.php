<main class="flex-grow container mx-auto px-4 md:px-8 py-12">

    <div class="flex flex-col md:flex-row gap-8">

        <aside class="w-full md:w-1/3 lg:w-1/4 h-fit md:sticky md:top-32 z-0">

            <div class="bg-white rounded-2xl shadow-sm border border-[#E6DCCF] p-6 text-center mb-6">
                <div class="relative w-24 h-24 mx-auto mb-4">
                    <img src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?auto=format&fit=crop&q=80&w=200"
                        alt="Profile"
                        class="w-full h-full rounded-full object-cover border-4 border-[#FDFBF7] shadow-md">
                    <div class="absolute bottom-0 right-0 bg-green-500 w-5 h-5 rounded-full border-2 border-white"></div>
                </div>

                <h2 class="text-xl font-bold text-[#4A4036]"><?= $current_user->get_first_name() . ' ' . $current_user->get_last_name() ?></h2>
                <p class="text-sm text-[#8C7B6C] mb-4">Member since 2024</p>

                <?php
                if ($_SESSION['role'] == 'admin') {
                    echo '<span class="inline-block px-3 py-1 bg-[#F2EFE9] text-[#4A4036] text-xs font-bold uppercase tracking-wider rounded-full">
                            Admin
                        </span>';
                } else {
                    echo '<span class="inline-block px-3 py-1 bg-[#F2EFE9] text-[#4A4036] text-xs font-bold uppercase tracking-wider rounded-full">
                            Reader
                        </span>';
                }
                ?>

            </div>

            <div class="bg-white rounded-2xl shadow-sm border border-[#E6DCCF] overflow-hidden mb-6">
                <nav class="flex flex-col">
                    <a href="#dashboard" class="px-6 py-4 border-b border-[#F2EFE9] text-[#4A4036] font-bold bg-[#FDFBF7] border-l-4 border-l-[#4A4036]">
                        Dashboard
                    </a>
                    <a href="#loans" class="px-6 py-4 border-b border-[#F2EFE9] text-[#6B5D52] hover:bg-[#FDFBF7] hover:text-[#4A4036] transition-colors">
                        My Books
                    </a>
                    <a href="#settings" class="px-6 py-4 text-[#6B5D52] hover:bg-[#FDFBF7] hover:text-[#4A4036] transition-colors">
                        Settings
                    </a>
                </nav>
            </div>

            <!-- <div class="bg-[#4A4036] rounded-2xl p-6 text-center text-[#FDFBF7]">
                <h3 class="font-bold text-lg mb-2">Become an Author</h3>
                <p class="text-sm text-[#E6DCCF] mb-4">Publish your own books to the library.</p>
                <button class="w-full py-2 bg-[#FDFBF7] text-[#4A4036] font-bold rounded-lg hover:bg-white transition-colors">
                    Upgrade Now
                </button>
            </div> -->

        </aside>

        <div class="w-full md:w-2/3 lg:w-3/4 space-y-8">

            <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                <div class="bg-white p-6 rounded-2xl shadow-sm border border-[#E6DCCF] flex items-center justify-between">
                    <div>
                        <p class="text-xs font-bold text-[#8C7B6C] uppercase">Active Loans</p>
                        <p class="text-3xl font-bold text-[#4A4036]">2</p>
                    </div>
                    <div class="p-3 bg-[#F2EFE9] rounded-full text-[#4A4036]">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                        </svg>
                    </div>
                </div>
                <div class="bg-white p-6 rounded-2xl shadow-sm border border-[#E6DCCF] flex items-center justify-between">
                    <div>
                        <p class="text-xs font-bold text-[#8C7B6C] uppercase">Total Read</p>
                        <p class="text-3xl font-bold text-[#4A4036]">14</p>
                    </div>
                    <div class="p-3 bg-[#F2EFE9] rounded-full text-[#4A4036]">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"></path>
                        </svg>
                    </div>
                </div>
                <div class="bg-white p-6 rounded-2xl shadow-sm border border-[#E6DCCF] flex items-center justify-between">
                    <div>
                        <p class="text-xs font-bold text-[#8C7B6C] uppercase">Returned Late</p>
                        <p class="text-3xl font-bold text-red-500">0</p>
                    </div>
                    <div class="p-3 bg-red-50 rounded-full text-red-500">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                </div>
            </div>

            <div id="loans" class="bg-white rounded-2xl shadow-sm border border-[#E6DCCF] overflow-hidden">
                <div class="px-6 py-4 border-b border-[#F2EFE9] flex justify-between items-center bg-[#FDFBF7]">
                    <h3 class="font-bold text-lg text-[#4A4036]">Currently Borrowed</h3>
                    <a href="/explore" class="text-sm text-[#8C7B6C] hover:text-[#4A4036]">Borrow more &rarr;</a>
                </div>
                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="text-xs text-[#8C7B6C] uppercase border-b border-[#F2EFE9]">
                                <th class="px-6 py-4 font-bold">Book Title</th>
                                <th class="px-6 py-4 font-bold">Borrowed Date</th>
                                <th class="px-6 py-4 font-bold">Due Date</th>
                                <th class="px-6 py-4 font-bold text-right">Status</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-[#F2EFE9] text-sm">
                            <?php
                            if ($raw_data == []) {
                                echo '<p class="p-6 text-center text-[#8C7B6C]">You have not borrowed any books yet.</p>';
                            } else {
                                foreach ($loans as $item):
                                    // Extract objects for easier reading
                                    $borrow = $item['borrow'];
                                    $book   = $item['book'];
                            ?>
                                    <tr class="hover:bg-[#FDFBF7] transition-colors">
                                        <td class="px-6 py-4 flex items-center gap-3">
                                            <div class="h-10 w-8 bg-gray-200 rounded overflow-hidden">
                                                <img src="/img/<?= strtolower($book->get_genre()) ?>.png"
                                                    class="object-cover h-full w-full"
                                                    onerror="this.src='https://images.unsplash.com/photo-1544947950-fa07a98d237f?w=100'">
                                            </div>
                                            <span class="font-bold text-[#4A4036]"><?= $book->get_title() ?></span>
                                        </td>

                                        <td class="px-6 py-4 text-[#6B5D52]"><?= $borrow->get_borrowDate() ?></td>

                                        <td class="px-6 py-4 text-[#6B5D52]">
                                            <?= $borrow->get_returnDate() ? $borrow->get_returnDate() : 'Not returned' ?>
                                        </td>

                                        <td class="px-6 py-4 text-right">
                                            <?php if ($borrow->is_returned()): ?>
                                                <span class="px-2 py-1 bg-green-100 text-green-700 rounded text-xs font-bold">Returned</span>
                                            <?php else: ?>
                                                <span class="px-2 py-1 bg-yellow-100 text-yellow-700 rounded text-xs font-bold">Active</span>
                                            <?php endif; ?>
                                        </td>
                                    </tr>
                            <?php endforeach;
                            } ?>
                            <tr class="hover:bg-[#FDFBF7] transition-colors">
                                <td class="px-6 py-4 flex items-center gap-3">
                                    <div class="h-10 w-8 bg-gray-200 rounded overflow-hidden">
                                        <img src="https://images.unsplash.com/photo-1544947950-fa07a98d237f?w=100" class="object-cover h-full w-full">
                                    </div>
                                    <span class="font-bold text-[#4A4036]">The Old Library</span>
                                </td>
                                <td class="px-6 py-4 text-[#6B5D52]">Dec 24, 2025</td>
                                <td class="px-6 py-4 text-[#6B5D52]">Jan 07, 2026</td>
                                <td class="px-6 py-4 text-right">
                                    <span class="px-2 py-1 bg-green-100 text-green-700 rounded text-xs font-bold">On Time</span>
                                </td>
                            </tr>
                            <tr class="hover:bg-[#FDFBF7] transition-colors">
                                <td class="px-6 py-4 flex items-center gap-3">
                                    <div class="h-10 w-8 bg-gray-200 rounded overflow-hidden">
                                        <img src="https://images.unsplash.com/photo-1512820790803-83ca734da794?w=100" class="object-cover h-full w-full">
                                    </div>
                                    <span class="font-bold text-[#4A4036]">Atomic Habits</span>
                                </td>
                                <td class="px-6 py-4 text-[#6B5D52]">Dec 20, 2025</td>
                                <td class="px-6 py-4 text-[#6B5D52]">Jan 03, 2026</td>
                                <td class="px-6 py-4 text-right">
                                    <span class="px-2 py-1 bg-yellow-100 text-yellow-700 rounded text-xs font-bold">Due Soon</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div id="settings" class="bg-white rounded-2xl shadow-sm border border-[#E6DCCF] overflow-hidden">
                <div class="px-6 py-4 border-b border-[#F2EFE9] bg-[#FDFBF7]">
                    <h3 class="font-bold text-lg text-[#4A4036]">Profile Settings</h3>
                </div>

                <form action="/profile/update" method="POST" class="p-6 space-y-6">

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-bold text-[#4A4036] mb-2">First Name</label>
                            <input type="text" name="first_name" value="<?= $current_user->get_first_name() ?>"
                                class="w-full bg-[#FDFBF7] border border-[#E6DCCF] text-[#4A4036] text-sm rounded-lg focus:ring-[#4A4036] focus:border-[#4A4036] block p-3">
                        </div>
                        <div>
                            <label class="block text-sm font-bold text-[#4A4036] mb-2">Last Name</label>
                            <input type="text" name="last_name" value="<?= $current_user->get_last_name() ?>"
                                class="w-full bg-[#FDFBF7] border border-[#E6DCCF] text-[#4A4036] text-sm rounded-lg focus:ring-[#4A4036] focus:border-[#4A4036] block p-3">
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-bold text-[#4A4036] mb-2">Email Address</label>
                            <input type="email" name="email" value="<?= $current_user->get_email() ?>"
                                class="w-full bg-[#FDFBF7] border border-[#E6DCCF] text-[#4A4036] text-sm rounded-lg focus:ring-[#4A4036] focus:border-[#4A4036] block p-3">
                        </div>
                        <div>
                            <label class="block text-sm font-bold text-[#4A4036] mb-2">Phone Number</label>
                            <input type="tel" name="phone_number" value="<?= $current_user->get_phone_number() ?>"
                                class="w-full bg-[#FDFBF7] border border-[#E6DCCF] text-[#4A4036] text-sm rounded-lg focus:ring-[#4A4036] focus:border-[#4A4036] block p-3">
                        </div>
                    </div>

                    <!-- <div>
                        <label class="block text-sm font-bold text-[#4A4036] mb-2">Biography</label>
                        <textarea name="biography" rows="4" 
                            class="w-full bg-[#FDFBF7] border border-[#E6DCCF] text-[#4A4036] text-sm rounded-lg focus:ring-[#4A4036] focus:border-[#4A4036] block p-3">Just a simple reader who loves sci-fi and history books.</textarea>
                    </div> -->

                    <div class="flex items-center justify-end gap-4 pt-4 border-t border-[#F2EFE9]">
                        <button type="reset" class="px-6 py-2.5 border border-[#E6DCCF] text-[#6B5D52] font-bold rounded-lg hover:bg-[#FDFBF7] transition-colors">
                            Cancel
                        </button>
                        <button type="submit" class="px-6 py-2.5 bg-[#4A4036] text-white font-bold rounded-lg hover:bg-[#362e26] shadow-md transition-colors">
                            Save Changes
                        </button>
                    </div>

                </form>
            </div>

        </div>

    </div>
</main>