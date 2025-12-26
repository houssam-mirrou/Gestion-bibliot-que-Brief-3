<main class="flex-grow container mx-auto px-4 md:px-8 py-12">

    <div class="flex flex-col md:flex-row justify-between items-end mb-10 gap-4">
        <div>
            <h1 class="text-4xl font-bold text-[#4A4036]">Explore Collection</h1>
            <p class="text-[#8C7B6C] mt-2">Browse our catalog of rare classics and modern tales.</p>
        </div>
        <div class="flex items-center gap-3">
            <span class="text-[#6B5D52] font-medium text-sm">Sort by:</span>
            <select class="bg-white border border-[#E6DCCF] text-[#4A4036] text-sm rounded-lg focus:ring-[#4A4036] focus:border-[#4A4036] block p-2.5">
                <option>Most Popular</option>
                <option>Newest Arrivals</option>
                <option>Alphabetical (A-Z)</option>
            </select>
        </div>
    </div>

    <div class="flex flex-col lg:flex-row gap-10">

        <aside class="w-full lg:w-1/4 h-fit lg:sticky lg:top-40 z-0">
            <div class="bg-white p-6 rounded-xl shadow-sm border border-[#E6DCCF]">

                <div class="mb-8">
                    <label class="block text-sm font-bold text-[#4A4036] mb-2 uppercase tracking-wide">Search</label>
                    <div class="relative">
                        <input type="text" placeholder="Title, author, ISBN..."
                            class="w-full bg-[#FDFBF7] border border-[#E6DCCF] text-[#4A4036] text-sm rounded-lg focus:ring-[#4A4036] focus:border-[#4A4036] block w-full p-3 pl-10" />
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg class="w-4 h-4 text-[#8C7B6C]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                            </svg>
                        </div>
                    </div>
                </div>

                <div class="mb-8">
                    <h3 class="text-sm font-bold text-[#4A4036] mb-4 uppercase tracking-wide border-b border-[#E6DCCF] pb-2">Genres</h3>
                    <ul class="space-y-3">
                        <li>
                            <a href="#" class="flex items-center justify-between group">
                                <span class="text-[#4A4036] font-bold">All Genres</span>
                                <span class="bg-[#4A4036] text-white text-xs px-2 py-0.5 rounded-full">124</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center justify-between group text-[#6B5D52] hover:text-[#4A4036] transition-colors">
                                <span>Fiction</span>
                                <span class="bg-[#FDFBF7] text-[#8C7B6C] group-hover:bg-[#E6DCCF] text-xs px-2 py-0.5 rounded-full transition-colors">42</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center justify-between group text-[#6B5D52] hover:text-[#4A4036] transition-colors">
                                <span>Science & Tech</span>
                                <span class="bg-[#FDFBF7] text-[#8C7B6C] group-hover:bg-[#E6DCCF] text-xs px-2 py-0.5 rounded-full transition-colors">18</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center justify-between group text-[#6B5D52] hover:text-[#4A4036] transition-colors">
                                <span>History</span>
                                <span class="bg-[#FDFBF7] text-[#8C7B6C] group-hover:bg-[#E6DCCF] text-xs px-2 py-0.5 rounded-full transition-colors">25</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center justify-between group text-[#6B5D52] hover:text-[#4A4036] transition-colors">
                                <span>Biographies</span>
                                <span class="bg-[#FDFBF7] text-[#8C7B6C] group-hover:bg-[#E6DCCF] text-xs px-2 py-0.5 rounded-full transition-colors">12</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <div>
                    <h3 class="text-sm font-bold text-[#4A4036] mb-4 uppercase tracking-wide border-b border-[#E6DCCF] pb-2">Status</h3>
                    <label class="flex items-center space-x-3 cursor-pointer group">
                        <input type="checkbox" class="w-5 h-5 text-[#4A4036] bg-[#FDFBF7] border-[#E6DCCF] rounded focus:ring-[#4A4036] focus:ring-2">
                        <span class="text-[#6B5D52] group-hover:text-[#4A4036] transition-colors">Available Only</span>
                    </label>
                </div>
            </div>
        </aside>

        <section class="w-full lg:w-3/4">

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                <?php
                if (empty($books)) {
                    echo '<h1>There\'s n books in the bookshelf';
                } else {
                    foreach ($books as $book) {
                ?>
                        <div class="bg-white rounded-xl shadow-sm border border-[#E6DCCF] overflow-hidden hover:shadow-xl transition-all duration-300 flex flex-col group">
                            <div class="h-56 bg-[#F2EFE9] relative overflow-hidden">
                                <img src="<?php
                                    switch ($book->get_genre()){
                                        case 'Fiction':
                                            echo '/img/fiction.png';
                                            break;
                                        case 'Science':
                                            echo '/img/science.jpg';
                                            break;
                                        case 'History':
                                            echo '/img/history.jpg';
                                            break;
                                        case 'Biography':
                                            echo '/img/biography.jpg';
                                            break;
                                        case 'Fantasy':
                                            echo '/img/fantasy.png';
                                            break;
                                    }
                                         
                                ?>"
                                    class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" alt="Book Cover">
                                <?php if ($book->get_status() == 'borrowed') { ?>
                                    <div class="absolute top-3 right-3 bg-[#F8D7DA] text-[#721C24] text-xs font-bold px-3 py-1 rounded-full shadow-sm">
                                        Borrowed
                                    </div>
                                <?php
                                } else {
                                ?>
                                    <div class="absolute top-3 right-3 bg-[#D4EDDA] text-[#155724] text-xs font-bold px-3 py-1 rounded-full shadow-sm">
                                        <?= $book->get_status() ?>
                                    </div>
                                <?php
                                } ?>
                            </div>
                            <div class="p-5 flex-grow flex flex-col">
                                <div class="text-xs font-bold text-[#8C7B6C] uppercase mb-1 tracking-wider"><?= $book->get_genre() ?></div>
                                <h3 class="text-xl font-bold text-[#4A4036] mb-1 leading-tight"><?= $book->get_title() ?></h3>
                                <p class="text-sm text-[#6B5D52] mb-4">by <?= $book->get_author() ?></p>

                                <div class="mt-auto pt-4 border-t border-[#F2EFE9] flex justify-between items-center">
                                    <span class="text-xs text-[#8C7B6C]">Published <?= $book->get_year() ?></span>
                                    <a href="/book-details" class="text-[#4A4036] font-bold text-sm hover:underline">Details &rarr;</a>
                                </div>
                            </div>
                        </div>
                <?php
                    }
                }
                ?>

            </div>

            <div class="flex justify-center mt-12 gap-2">
                <button class="px-4 py-2 border border-[#E6DCCF] rounded-lg text-[#6B5D52] hover:bg-[#4A4036] hover:text-white transition-colors disabled:opacity-50">
                    &larr; Previous
                </button>
                <button class="px-4 py-2 bg-[#4A4036] text-white rounded-lg font-bold border border-[#4A4036]">1</button>
                <button class="px-4 py-2 border border-[#E6DCCF] rounded-lg text-[#6B5D52] hover:bg-[#4A4036] hover:text-white transition-colors">2</button>
                <button class="px-4 py-2 border border-[#E6DCCF] rounded-lg text-[#6B5D52] hover:bg-[#4A4036] hover:text-white transition-colors">3</button>
                <span class="px-2 py-2 text-[#6B5D52]">...</span>
                <button class="px-4 py-2 border border-[#E6DCCF] rounded-lg text-[#6B5D52] hover:bg-[#4A4036] hover:text-white transition-colors">
                    Next &rarr;
                </button>
            </div>

        </section>
    </div>
</main>