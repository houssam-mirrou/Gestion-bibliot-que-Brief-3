<main class="flex-grow w-full bg-[#FDFBF7]">

    <div class="container mx-auto px-6 py-12">

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 xl:gap-24 items-start">

            <div class="lg:sticky lg:top-24 w-full">

                <a href="/explore" class="inline-flex items-center gap-2 text-[#8C7B6C] hover:text-[#4A4036] font-bold mb-6 transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                    </svg>
                    Back to Collection
                </a>

                <div class="relative w-full rounded-2xl shadow-2xl overflow-hidden border border-[#E6DCCF] group">
                    <div class="aspect-[1.22/1] bg-[#F2EFE9] relative">
                        <img src="<?php
                                    $g = strtolower(trim($book->get_genre()));
                                    switch ($g) {
                                        case 'fiction':
                                            echo '/img/fiction.png';
                                            break;
                                        case 'science':
                                            echo '/img/science.jpg';
                                            break;
                                        case 'history':
                                            echo '/img/history.jpg';
                                            break;
                                        case 'biography':
                                            echo '/img/biography.jpg';
                                            break;
                                        case 'fantasy':
                                            echo '/img/fantasy.png';
                                            break;
                                        default:
                                            echo 'https://images.unsplash.com/photo-1544947950-fa07a98d237f?w=932';
                                            break;
                                    }
                                    ?>"
                            alt="Book Cover"
                            class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">

                        <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    </div>
                </div>

                <div class="grid grid-cols-3 gap-4 mt-6">
                    <div class="text-center p-4 bg-white rounded-xl border border-[#E6DCCF] shadow-sm">
                        <p class="text-xs text-[#8C7B6C] uppercase font-bold mb-1">Year</p>
                        <p class="text-xl font-bold text-[#4A4036]"><?= $book->get_year() ?></p>
                    </div>
                    <div class="text-center p-4 bg-white rounded-xl border border-[#E6DCCF] shadow-sm">
                        <p class="text-xs text-[#8C7B6C] uppercase font-bold mb-1">Genre</p>
                        <p class="text-lg font-bold text-[#4A4036] truncate px-1"><?= $book->get_genre() ?></p>
                    </div>
                    <div class="text-center p-4 bg-white rounded-xl border border-[#E6DCCF] shadow-sm">
                        <p class="text-xs text-[#8C7B6C] uppercase font-bold mb-1">Rating</p>
                        <div class="flex items-center justify-center gap-1 text-[#4A4036] font-bold text-lg">
                            <span>4.8</span>
                            <svg class="w-4 h-4 text-yellow-500 fill-current" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex flex-col h-full pt-2">

                <div class="mb-8 border-b border-[#E6DCCF] pb-8">
                    <div class="flex flex-wrap gap-2 mb-4">
                        <?php if ($book->get_status() == 'available'): ?>
                            <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-bold bg-green-100 text-green-800">
                                <span class="w-2 h-2 rounded-full bg-green-600"></span> Available
                            </span>
                        <?php else: ?>
                            <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-bold bg-red-100 text-red-800">
                                <span class="w-2 h-2 rounded-full bg-red-600"></span> Borrowed
                            </span>
                        <?php endif; ?>
                        <span class="px-3 py-1 rounded-full text-xs font-bold bg-[#E6DCCF] text-[#6B5D52] uppercase tracking-wider">
                            <?= $book->get_genre() ?>
                        </span>
                    </div>

                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-black text-[#4A4036] mb-4 leading-tight">
                        <?= $book->get_title() ?>
                    </h1>

                    <p class="text-xl text-[#6B5D52]">
                        Written by <a href="#" class="text-[#4A4036] font-bold border-b-2 border-[#E6DCCF] hover:border-[#4A4036] transition-colors"><?= $book->get_author() ?></a>
                    </p>
                </div>

                <div class="flex flex-col sm:flex-row gap-4 mb-12">
                    <?php if ($book->get_status() == 'available' && isset($_SESSION['role'])):
                        if (($_SESSION['role']) == 'reader') {
                    ?>
                            <form action="" method="POST" class="flex-grow">
                                <input type="hidden" name="book_id" value="<?= $book->get_id() ?>">
                                <button type="submit" class="w-full py-4 bg-[#4A4036] text-white text-lg font-bold rounded-xl shadow-lg hover:bg-[#362e26] transform active:scale-95 transition-all">
                                    Borrow Now
                                </button>
                            </form>
                        <?php
                        } else {
                        ?>
                            <button disabled class="flex-grow py-4 bg-gray-200 text-gray-500 text-lg font-bold rounded-xl cursor-not-allowed">
                                Your an admin you can't borrow books
                            </button>
                        <?php
                        }
                        ?>


                    <?php else: ?>
                        <?php if ($book->get_status() == 'borrowed') {
                        ?>
                            <button disabled class="flex-grow py-4 bg-gray-200 text-gray-500 text-lg font-bold rounded-xl cursor-not-allowed">
                                Book is currently borrowed
                            </button>
                        <?php
                        } else { ?>
                            <button disabled class="flex-grow py-4 bg-gray-200 text-gray-500 text-lg font-bold rounded-xl cursor-not-allowed">
                                Sign up to Borrow
                            </button>
                        <?php
                        } ?>
                    <?php endif; ?>

                    <button class="px-6 py-4 border-2 border-[#E6DCCF] rounded-xl hover:bg-white hover:border-[#4A4036] text-[#4A4036] transition-colors" title="Add to Wishlist">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                        </svg>
                    </button>
                </div>

                <div class="prose prose-lg max-w-none text-[#6B5D52] mb-12">
                    <h3 class="text-[#4A4036] font-bold text-2xl mb-4">Synopsis</h3>
                    <p class="leading-relaxed mb-4">
                        <?= $book->get_description() ?? "In a world of imagination and depth, this story unfolds with gripping intensity. The author masterfully weaves characters and settings into a tapestry that explores the very essence of the human condition." ?>
                    </p>
                    <p class="leading-relaxed">
                        Celebrated for its unique narrative voice and compelling structure, this book stands as a testament to the power of storytelling in the <?= strtolower($book->get_genre()) ?> genre.
                    </p>
                </div>

                <div class="bg-white p-6 rounded-2xl border border-[#E6DCCF] flex items-center gap-6 shadow-sm mb-12">
                    <div class="w-16 h-16 rounded-full bg-[#4A4036] text-[#FDFBF7] flex items-center justify-center text-xl font-bold flex-shrink-0">
                        <?= substr($book->get_author(), 0, 1) ?>
                    </div>
                    <div>
                        <p class="text-xs text-[#8C7B6C] uppercase font-bold mb-1">About the Author</p>
                        <h4 class="text-lg font-bold text-[#4A4036]"><?= $book->get_author() ?></h4>
                        <a href="#" class="text-sm text-[#8C7B6C] hover:text-[#4A4036] underline decoration-dotted">View author profile &rarr;</a>
                    </div>
                </div>

                <div>
                    <h3 class="text-[#4A4036] font-bold text-xl mb-6">More like this</h3>
                    <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                        <a href="#" class="group block">
                            <div class="aspect-[4/3] bg-gray-200 rounded-lg overflow-hidden mb-2">
                                <img src="https://images.unsplash.com/photo-1544947950-fa07a98d237f?w=400" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                            </div>
                            <p class="font-bold text-[#4A4036] text-sm truncate">The Old Library</p>
                        </a>
                        <a href="#" class="group block">
                            <div class="aspect-[4/3] bg-gray-200 rounded-lg overflow-hidden mb-2">
                                <img src="https://images.unsplash.com/photo-1512820790803-83ca734da794?w=400" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                            </div>
                            <p class="font-bold text-[#4A4036] text-sm truncate">Atomic Habits</p>
                        </a>
                        <a href="#" class="group block">
                            <div class="aspect-[4/3] bg-gray-200 rounded-lg overflow-hidden mb-2">
                                <img src="https://images.unsplash.com/photo-1495446815901-a7297e633e8d?w=400" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                            </div>
                            <p class="font-bold text-[#4A4036] text-sm truncate">Cosmos</p>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</main>