<main class="flex-grow w-full bg-[#FDFBF7]">

    <section class="pt-16 pb-20 px-6 text-center">
        <div class="container mx-auto max-w-4xl">
            <span class="text-[#8C7B6C] font-bold tracking-widest text-sm uppercase mb-4 block">Our Ecosystem</span>
            <h1 class="text-4xl md:text-5xl font-extrabold text-[#4A4036] mb-6 leading-tight">
                Connecting <span class="text-[#8C7B6C]">Readers</span> with <span class="text-[#8C7B6C]">Storytellers</span>.
            </h1>
            <p class="text-[#6B5D52] text-lg leading-relaxed max-w-2xl mx-auto">
                We bridge the gap between imagination and consumption. Whether you want to manage your reading list or distribute your own work, our platform handles the data seamlessly.
            </p>
        </div>
    </section>

    <section class="pb-24 px-6">
        <div class="container mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 lg:gap-12">

                <div class="group bg-white rounded-2xl p-10 border border-[#E6DCCF] shadow-sm hover:shadow-xl transition-all duration-300 relative overflow-hidden">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-[#F2EFE9] rounded-bl-full -mr-10 -mt-10 opacity-50 transition-transform group-hover:scale-110"></div>
                    
                    <div class="relative z-10">
                        <div class="w-14 h-14 bg-[#4A4036] text-white rounded-lg flex items-center justify-center mb-6 text-2xl">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                            </svg>
                        </div>

                        <h3 class="text-2xl font-bold text-[#4A4036] mb-3">Reader Service</h3>
                        <p class="text-[#6B5D52] mb-6">
                            Utilizing our secure borrowing system, you can access our catalog instantly. We track your reading history and due dates automatically.
                        </p>

                        <ul class="space-y-3 mb-8 text-sm text-[#4A4036]">
                            <li class="flex items-start">
                                <span class="mr-2 text-[#8C7B6C] font-bold">✓</span>
                                Browse by Genre, Title, or Author.
                            </li>
                            <li class="flex items-start">
                                <span class="mr-2 text-[#8C7B6C] font-bold">✓</span>
                                One-click borrowing (creates an <code class="bg-[#F2EFE9] px-1 rounded text-xs">emprunt</code> record).
                            </li>
                            <li class="flex items-start">
                                <span class="mr-2 text-[#8C7B6C] font-bold">✓</span>
                                Manage active loans in your dashboard.
                            </li>
                        </ul>

                        <?php if(isset($_SESSION['user_id'])): ?>
                            <a href="/explore" class="inline-block w-full text-center py-3 border-2 border-[#4A4036] text-[#4A4036] font-bold rounded-lg hover:bg-[#4A4036] hover:text-white transition-colors">
                                Start Borrowing
                            </a>
                        <?php else: ?>
                            <a href="/sign-up" class="inline-block w-full text-center py-3 border-2 border-[#4A4036] text-[#4A4036] font-bold rounded-lg hover:bg-[#4A4036] hover:text-white transition-colors">
                                Sign Up to Read
                            </a>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="group bg-white rounded-2xl p-10 border border-[#E6DCCF] shadow-sm hover:shadow-xl transition-all duration-300 relative overflow-hidden">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-[#E6DCCF] rounded-bl-full -mr-10 -mt-10 opacity-50 transition-transform group-hover:scale-110"></div>
                    
                    <div class="relative z-10">
                        <div class="w-14 h-14 bg-[#8C7B6C] text-white rounded-lg flex items-center justify-center mb-6 text-2xl">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                            </svg>
                        </div>

                        <h3 class="text-2xl font-bold text-[#4A4036] mb-3">Author Platform</h3>
                        <p class="text-[#6B5D52] mb-6">
                            Upgrade your account role to <span class="font-bold text-[#4A4036]">'author'</span> and distribute your work. You retain control over your titles and genres.
                        </p>

                         <ul class="space-y-3 mb-8 text-sm text-[#4A4036]">
                            <li class="flex items-start">
                                <span class="mr-2 text-[#8C7B6C] font-bold">✓</span>
                                Publish new books into the <code class="bg-[#F2EFE9] px-1 rounded text-xs">livre</code> registry.
                            </li>
                            <li class="flex items-start">
                                <span class="mr-2 text-[#8C7B6C] font-bold">✓</span>
                                Set distribution dates and genres.
                            </li>
                            <li class="flex items-start">
                                <span class="mr-2 text-[#8C7B6C] font-bold">✓</span>
                                Build your Author Biography.
                            </li>
                        </ul>

                        <?php if(isset($_SESSION['user_id'])): ?>
                            <a href="/profile" class="inline-block w-full text-center py-3 bg-[#4A4036] text-white font-bold rounded-lg hover:bg-[#362e26] transition-colors">
                                Manage Publications
                            </a>
                        <?php else: ?>
                            <a href="/sign-up" class="inline-block w-full text-center py-3 bg-[#4A4036] text-white font-bold rounded-lg hover:bg-[#362e26] transition-colors">
                                Join as Author
                            </a>
                        <?php endif; ?>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="bg-[#E8E4D9] py-20 border-y border-[#D6CDBF]">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-3xl font-bold text-[#4A4036] mb-12">How Our Platform Works</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 relative">
                <div class="hidden md:block absolute top-10 left-0 w-full h-1 bg-[#D6CDBF] z-0"></div>

                <div class="relative z-10 bg-[#FDFBF7] p-8 rounded-xl shadow-md border border-[#E6DCCF]">
                    <div class="w-20 h-20 mx-auto bg-[#4A4036] text-white rounded-full flex items-center justify-center text-2xl font-bold mb-4 border-4 border-[#E8E4D9]">1</div>
                    <h4 class="text-xl font-bold text-[#4A4036] mb-2">Register</h4>
                    <p class="text-sm text-[#6B5D52]">
                        We create your profile in the <br><code class="text-xs bg-gray-200 px-1 rounded">user</code> table.
                    </p>
                </div>

                <div class="relative z-10 bg-[#FDFBF7] p-8 rounded-xl shadow-md border border-[#E6DCCF]">
                    <div class="w-20 h-20 mx-auto bg-[#4A4036] text-white rounded-full flex items-center justify-center text-2xl font-bold mb-4 border-4 border-[#E8E4D9]">2</div>
                    <h4 class="text-xl font-bold text-[#4A4036] mb-2">Choose Role</h4>
                    <p class="text-sm text-[#6B5D52]">
                        Read as a <b>User</b> or upgrade to <b>Author</b> to publish.
                    </p>
                </div>

                <div class="relative z-10 bg-[#FDFBF7] p-8 rounded-xl shadow-md border border-[#E6DCCF]">
                    <div class="w-20 h-20 mx-auto bg-[#4A4036] text-white rounded-full flex items-center justify-center text-2xl font-bold mb-4 border-4 border-[#E8E4D9]">3</div>
                    <h4 class="text-xl font-bold text-[#4A4036] mb-2">Interact</h4>
                    <p class="text-sm text-[#6B5D52]">
                        Authors add <b>Books</b>.<br>Users create <b>Loans</b>.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 px-6 bg-[#FDFBF7]">
        <div class="container mx-auto max-w-5xl bg-[#4A4036] rounded-3xl p-12 md:p-16 text-center relative overflow-hidden shadow-2xl">
            <div class="absolute top-0 left-0 w-64 h-64 bg-white opacity-5 rounded-full -translate-x-1/2 -translate-y-1/2"></div>
            <div class="absolute bottom-0 right-0 w-64 h-64 bg-white opacity-5 rounded-full translate-x-1/2 translate-y-1/2"></div>
            
            <h2 class="text-3xl md:text-4xl font-bold text-[#FDFBF7] mb-6 relative z-10">Start your collection today.</h2>
            <p class="text-[#E6DCCF] text-lg mb-10 max-w-xl mx-auto relative z-10">
                Join a growing community of readers and writers. It's free to get started.
            </p>
            
            <a href="/sign-up" class="inline-block px-10 py-4 bg-[#FDFBF7] text-[#4A4036] font-bold text-lg rounded-xl hover:scale-105 hover:shadow-lg transition-transform duration-300 relative z-10">
                Create Account
            </a>
        </div>
    </section>

</main>