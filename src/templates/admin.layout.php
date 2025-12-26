<main class="flex-grow container mx-auto px-4 md:px-8 py-12">

    <div class="flex flex-col lg:flex-row gap-8">

        <aside class="w-full lg:w-1/4 h-fit lg:sticky lg:top-40 z-0">

            <div class="bg-white rounded-2xl shadow-sm border border-[#E6DCCF] p-6 text-center mb-6">
                <div class="relative w-24 h-24 mx-auto mb-4">
                    <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?auto=format&fit=crop&q=80&w=200"
                        alt="Admin Profile"
                        class="w-full h-full rounded-full object-cover border-4 border-[#4A4036] shadow-md">
                    <div class="absolute bottom-0 right-0 bg-[#4A4036] w-6 h-6 rounded-full border-2 border-white flex items-center justify-center">
                        <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                </div>

                <h2 class="text-xl font-bold text-[#4A4036]">Admin User</h2>
                <p class="text-sm text-[#8C7B6C] mb-4">System Administrator</p>
            </div>

            <div class="bg-white rounded-2xl shadow-sm border border-[#E6DCCF] overflow-hidden">
                <nav class="flex flex-col">
                    <a href="#loans" class="px-6 py-4 border-b border-[#F2EFE9] text-[#4A4036] font-bold bg-[#FDFBF7] border-l-4 border-l-[#4A4036]">
                        Active Loans
                    </a>
                    <a href="#inventory" class="px-6 py-4 border-b border-[#F2EFE9] text-[#6B5D52] hover:bg-[#FDFBF7] hover:text-[#4A4036] transition-colors">
                        Book Inventory
                    </a>
                    <a href="#settings" class="px-6 py-4 text-[#6B5D52] hover:bg-[#FDFBF7] hover:text-[#4A4036] transition-colors">
                        My Settings
                    </a>
                </nav>
            </div>
        </aside>

        <div class="w-full lg:w-3/4 space-y-10">

            <div id="loans" class="bg-white rounded-2xl shadow-sm border border-[#E6DCCF] overflow-hidden">
                <div class="px-6 py-5 border-b border-[#F2EFE9] bg-[#FDFBF7]">
                    <h3 class="font-bold text-lg text-[#4A4036] flex items-center gap-2">
                        <svg class="w-5 h-5 text-[#8C7B6C]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        Current Borrowed Books
                    </h3>
                </div>

                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="text-xs text-[#8C7B6C] uppercase bg-[#FDFBF7] border-b border-[#E6DCCF]">
                                <th class="px-6 py-4 font-bold">Reader</th>
                                <th class="px-6 py-4 font-bold">Book Borrowed</th>
                                <th class="px-6 py-4 font-bold text-right">Action</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-[#F2EFE9] text-sm">
                            <tr class="hover:bg-[#FDFBF7] transition-colors">
                                <td class="px-6 py-4">
                                    <div class="flex items-center gap-3">
                                        <div class="w-8 h-8 rounded-full bg-blue-100 text-blue-600 flex items-center justify-center font-bold text-xs">JD</div>
                                        <div>
                                            <p class="font-bold text-[#4A4036]">John Doe</p>
                                            <p class="text-xs text-[#8C7B6C]">ID: #42</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="flex items-center gap-3">
                                        <div class="w-8 h-10 bg-gray-200 rounded overflow-hidden">
                                            <img src="https://images.unsplash.com/photo-1544947950-fa07a98d237f?w=100" class="w-full h-full object-cover">
                                        </div>
                                        <div>
                                            <p class="font-bold text-[#4A4036]">The Old Library</p>
                                            <p class="text-xs text-[#8C7B6C]">ID: #101</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 text-right">
                                    <button class="text-xs bg-red-50 text-red-600 px-3 py-1 rounded-full font-bold hover:bg-red-100 border border-red-100 transition-colors">
                                        Force Return
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div id="inventory" class="bg-white rounded-2xl shadow-sm border border-[#E6DCCF] overflow-hidden">
                <div class="px-6 py-5 border-b border-[#F2EFE9] bg-[#FDFBF7] flex justify-between items-center">
                    <h3 class="font-bold text-lg text-[#4A4036]">Library Inventory</h3>

                    <button onclick="document.getElementById('addBookModal').classList.remove('hidden')"
                        class="bg-[#4A4036] text-white text-sm font-bold px-4 py-2 rounded-lg hover:bg-[#362e26] transition-colors flex items-center gap-2 shadow-sm">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                        </svg>
                        Add New Book
                    </button>
                </div>

                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse">

                        <thead>
                            <tr class="text-xs text-[#8C7B6C] uppercase bg-[#FDFBF7] border-b border-[#E6DCCF]">
                                <th class="px-6 py-4 font-bold">Book Title</th>
                                <th class="px-6 py-4 font-bold">Author Name</th>
                                <th class="px-6 py-4 font-bold">Genre</th>
                                <th class="px-6 py-4 font-bold text-right">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-[#F2EFE9] text-sm">
                            <?php
                            if (empty($books)) {
                                echo 'there\'s no book in the bookshelf';
                            } else {
                                foreach ($books as $book) {
                                    $show_book = new Book($book['title'], $book['author'], $book['year'], $book['status'], $book['genre']);
                            ?>
                                    <tr class="hover:bg-[#FDFBF7] transition-colors">
                                        <td class="px-6 py-4 font-bold text-[#4A4036]"><?= $show_book->get_title() ?></td>
                                        <td class="px-6 py-4 text-[#6B5D52]"><?= $show_book->get_author() ?></td>
                                        <td class="px-6 py-4"><span class="bg-[#F2EFE9] text-[#4A4036] px-2 py-1 rounded-md text-xs font-bold"><?= $show_book->get_genre() ?></span></td>
                                        <td class="px-6 py-4 text-right">
                                            <button class="text-red-500 hover:text-red-700 p-2 hover:bg-red-50 rounded-full transition-colors" title="Delete Book">
                                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                                </svg>
                                            </button>
                                        </td>
                                    </tr>

                            <?php
                                }
                            }
                            ?>

                        </tbody>
                    </table>
                </div>
            </div>

            <div id="settings" class="bg-white rounded-2xl shadow-sm border border-[#E6DCCF] overflow-hidden">
                <div class="px-6 py-5 border-b border-[#F2EFE9] bg-[#FDFBF7]">
                    <h3 class="font-bold text-lg text-[#4A4036]">Admin Profile Settings</h3>
                </div>

                <form action="/admin/profile/update" method="POST" class="p-8 space-y-6">

                    <div class="flex flex-col md:flex-row gap-8 items-start">

                        <div class="w-full md:w-1/3 flex flex-col items-center text-center">
                            <div class="w-32 h-32 bg-[#F2EFE9] rounded-full border-4 border-white shadow-md mb-4 flex items-center justify-center text-[#8C7B6C] overflow-hidden relative group">
                                <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?auto=format&fit=crop&q=80&w=200" class="w-full h-full object-cover">
                                <div class="absolute inset-0 bg-black bg-opacity-50 hidden group-hover:flex items-center justify-center cursor-pointer transition-all">
                                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    </svg>
                                </div>
                                <input type="file" name="avatar" class="absolute inset-0 opacity-0 cursor-pointer">
                            </div>
                            <button type="button" class="text-xs text-[#4A4036] font-bold hover:underline">Change Picture</button>
                        </div>

                        <div class="w-full md:w-2/3 space-y-6">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label class="block text-sm font-bold text-[#4A4036] mb-2">First Name</label>
                                    <input type="text" name="first_name" value="Admin"
                                        class="w-full bg-[#FDFBF7] border border-[#E6DCCF] text-[#4A4036] rounded-lg p-3 focus:ring-[#4A4036] focus:border-[#4A4036]">
                                </div>
                                <div>
                                    <label class="block text-sm font-bold text-[#4A4036] mb-2">Last Name</label>
                                    <input type="text" name="last_name" value="User"
                                        class="w-full bg-[#FDFBF7] border border-[#E6DCCF] text-[#4A4036] rounded-lg p-3 focus:ring-[#4A4036] focus:border-[#4A4036]">
                                </div>
                            </div>

                            <div>
                                <label class="block text-sm font-bold text-[#4A4036] mb-2">Email Address</label>
                                <input type="email" name="email" value="admin@creamylibrary.ma"
                                    class="w-full bg-[#FDFBF7] border border-[#E6DCCF] text-[#4A4036] rounded-lg p-3 focus:ring-[#4A4036] focus:border-[#4A4036]">
                            </div>

                            <div>
                                <label class="block text-sm font-bold text-[#4A4036] mb-2">Phone Number</label>
                                <input type="tel" name="phone_number" value="+212 6 00 00 00 00"
                                    class="w-full bg-[#FDFBF7] border border-[#E6DCCF] text-[#4A4036] rounded-lg p-3 focus:ring-[#4A4036] focus:border-[#4A4036]">
                            </div>
                        </div>
                    </div>

                    <hr class="border-[#F2EFE9]">

                    <div>
                        <h4 class="font-bold text-[#4A4036] mb-4">Security</h4>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-sm font-bold text-[#4A4036] mb-2">New Password</label>
                                <input type="password" name="new_password" placeholder="Leave blank to keep current"
                                    class="w-full bg-[#FDFBF7] border border-[#E6DCCF] text-[#4A4036] rounded-lg p-3 focus:ring-[#4A4036] focus:border-[#4A4036]">
                            </div>
                            <div>
                                <label class="block text-sm font-bold text-[#4A4036] mb-2">Confirm Password</label>
                                <input type="password" name="confirm_password" placeholder="Confirm new password"
                                    class="w-full bg-[#FDFBF7] border border-[#E6DCCF] text-[#4A4036] rounded-lg p-3 focus:ring-[#4A4036] focus:border-[#4A4036]">
                            </div>
                        </div>
                    </div>

                    <div class="flex items-center justify-end gap-4 pt-4">
                        <button type="reset" class="px-6 py-2.5 border border-[#E6DCCF] text-[#6B5D52] font-bold rounded-lg hover:bg-[#FDFBF7] transition-colors">
                            Discard
                        </button>
                        <button type="submit" class="px-6 py-2.5 bg-[#4A4036] text-white font-bold rounded-lg hover:bg-[#362e26] shadow-md transition-colors">
                            Update Profile
                        </button>
                    </div>

                </form>
            </div>

        </div>
    </div>

    <div id="addBookModal" class="<?= empty($errors) ? 'hidden' : '' ?> fixed inset-0 bg-black bg-opacity-50 z-50 flex items-center justify-center p-4 backdrop-blur-sm">
        <div class="bg-white rounded-2xl w-full max-w-2xl shadow-2xl overflow-hidden animate-fade-in-up">

            <div class="bg-[#4A4036] p-6 flex justify-between items-center">
                <h3 class="text-xl font-bold text-white">Add New Book</h3>
                <button onclick="document.getElementById('addBookModal').classList.add('hidden')" class="text-[#E6DCCF] hover:text-white">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>

            <form action="" method="POST" class="p-8 space-y-6">

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="col-span-2">
                        <label class="block text-sm font-bold text-[#4A4036] mb-2">Book Title</label>
                        <input value ="<?= isset($fields['title']) ? $fields['title'] : '' ?>" type="text" name="title" required placeholder="e.g. The Hobbit"
                            class="w-full bg-[#FDFBF7] border border-[#E6DCCF] text-[#4A4036] rounded-lg p-3 focus:ring-[#4A4036] focus:border-[#4A4036]">
                        <?php
                        if (isset($errors['title'])) {
                            echo '<p class="mt-2 text-sm text-red-600 dark:text-red-400">
                            ' . $errors['title'] . '
                        </p>';
                        }
                        ?>
                    </div>

                    <div>
                        <label class="block text-sm font-bold text-[#4A4036] mb-2">Author Name</label>
                        <input value ="<?= isset($fields['author']) ? $fields['author'] : '' ?>" type="text" name="author_name" required placeholder="e.g. J.R.R. Tolkien"
                            class="w-full bg-[#FDFBF7] border border-[#E6DCCF] text-[#4A4036] rounded-lg p-3 focus:ring-[#4A4036] focus:border-[#4A4036]">
                        <?php
                        if (isset($errors['author'])) {
                            echo '<p class="mt-2 text-sm text-red-600 dark:text-red-400">
                            ' . $errors['author'] . '
                        </p>';
                        }
                        ?>
                    </div>

                    <div>
                        <label class="block text-sm font-bold text-[#4A4036] mb-2">Genre</label>
                        <select name="genre" class="w-full bg-[#FDFBF7] border border-[#E6DCCF] text-[#4A4036] rounded-lg p-3 focus:ring-[#4A4036] focus:border-[#4A4036]">
                            <option value="Fiction">Fiction</option>
                            <option value="Science">Science</option>
                            <option value="History">History</option>
                            <option value="Biography">Biography</option>
                            <option value="Fantasy">Fantasy</option>
                        </select>
                        <?php
                        if (isset($errors['genre'])) {
                            echo '<p class="mt-2 text-sm text-red-600 dark:text-red-400">
                            ' . $errors['genre'] . '
                        </p>';
                        }
                        ?>
                    </div>


                    <div>
                        <label class="block text-sm font-bold text-[#4A4036] mb-2">Date of Distribution</label>
                        <select name="year" required class="w-full bg-[#FDFBF7] border border-[#E6DCCF] text-[#4A4036] rounded-lg p-3 focus:ring-[#4A4036] focus:border-[#4A4036]">
                            <?php
                            $currentYear = date("Y");
                            // Loops from current year down to 1900
                            for ($i = $currentYear; $i >= 1700; $i--) {
                                echo "<option value='$i'>$i</option>";
                            }
                            ?>
                        </select>
                        <?php
                        if (isset($errors['date'])) {
                            echo '<p class="mt-2 text-sm text-red-600 dark:text-red-400">
                            ' . $errors['date'] . '
                        </p>';
                        }
                        ?>
                    </div>
                </div>

                <div class="flex justify-end gap-4 pt-4 border-t border-[#F2EFE9]">
                    <button type="button" onclick="document.getElementById('addBookModal').classList.add('hidden')"
                        class="px-6 py-2.5 border border-[#E6DCCF] text-[#6B5D52] font-bold rounded-lg hover:bg-[#FDFBF7] transition-colors">
                        Cancel
                    </button>
                    <button type="submit" class="px-6 py-2.5 bg-[#4A4036] text-white font-bold rounded-lg hover:bg-[#362e26] shadow-md transition-colors">
                        Save Book
                    </button>
                </div>

            </form>
        </div>
    </div>

</main>