<main class="flex-grow w-full bg-[#FDFBF7] flex items-center justify-center py-12 px-6">

    <div class="bg-white rounded-3xl shadow-xl border border-[#E6DCCF] overflow-hidden max-w-5xl w-full flex flex-col md:flex-row min-h-[600px]">

        <div class="hidden md:block w-1/2 relative">
            <img src="https://images.unsplash.com/photo-1521587760476-6c12a4b040da?auto=format&fit=crop&q=80&w=800" 
                 alt="Library Shelves" 
                 class="absolute inset-0 w-full h-full object-cover">
            
            <div class="absolute inset-0 bg-[#4A4036] bg-opacity-40 flex flex-col justify-between p-12">
                <div>
                    <img src="/img/library_logo.png" alt="Logo" class="h-16 w-auto opacity-90 mb-4"> </div>
                <div>
                    <blockquote class="text-[#FDFBF7] text-2xl font-bold leading-tight mb-4">
                        "A room without books is like a body without a soul."
                    </blockquote>
                    <p class="text-[#E6DCCF] font-medium">— Marcus Tullius Cicero</p>
                </div>
            </div>
        </div>

        <div class="w-full md:w-1/2 p-8 md:p-12 lg:p-16 flex flex-col justify-center">
            
            <div class="text-center md:text-left mb-8">
                <h1 class="text-3xl font-extrabold text-[#4A4036] mb-2">Join the Club</h1>
                <p class="text-[#6B5D52]">Start your journey as a reader or author today.</p>
            </div>

            <form action="/register" method="POST" class="space-y-5">
                
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                    <div>
                        <label for="first_name" class="block mb-2 text-sm font-bold text-[#4A4036]">First Name</label>
                        <input type="text" id="first_name" name="first_name" placeholder="Sarah" required
                            class="w-full bg-[#FDFBF7] border border-[#E6DCCF] text-[#4A4036] text-sm rounded-lg focus:ring-[#4A4036] focus:border-[#4A4036] block p-3 placeholder-[#8C7B6C] transition-colors">
                    </div>
                    <div>
                        <label for="last_name" class="block mb-2 text-sm font-bold text-[#4A4036]">Last Name</label>
                        <input type="text" id="last_name" name="last_name" placeholder="Connor" required
                            class="w-full bg-[#FDFBF7] border border-[#E6DCCF] text-[#4A4036] text-sm rounded-lg focus:ring-[#4A4036] focus:border-[#4A4036] block p-3 placeholder-[#8C7B6C] transition-colors">
                    </div>
                </div>

                <div>
                    <label for="email" class="block mb-2 text-sm font-bold text-[#4A4036]">Email Address</label>
                    <input type="email" id="email" name="email" placeholder="name@company.com" required
                        class="w-full bg-[#FDFBF7] border border-[#E6DCCF] text-[#4A4036] text-sm rounded-lg focus:ring-[#4A4036] focus:border-[#4A4036] block p-3 placeholder-[#8C7B6C] transition-colors">
                </div>

                <div>
                    <label for="phone_number" class="block mb-2 text-sm font-bold text-[#4A4036]">Phone Number</label>
                    <input type="tel" id="phone_number" name="phone_number" placeholder="+212 6 00 00 00 00" 
                        class="w-full bg-[#FDFBF7] border border-[#E6DCCF] text-[#4A4036] text-sm rounded-lg focus:ring-[#4A4036] focus:border-[#4A4036] block p-3 placeholder-[#8C7B6C] transition-colors">
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                    <div>
                        <label for="password" class="block mb-2 text-sm font-bold text-[#4A4036]">Password</label>
                        <input type="password" id="password" name="password" placeholder="••••••••" required
                            class="w-full bg-[#FDFBF7] border border-[#E6DCCF] text-[#4A4036] text-sm rounded-lg focus:ring-[#4A4036] focus:border-[#4A4036] block p-3 placeholder-[#8C7B6C] transition-colors">
                    </div>
                    <div>
                        <label for="confirm_password" class="block mb-2 text-sm font-bold text-[#4A4036]">Confirm Password</label>
                        <input type="password" id="confirm_password" name="confirm_password" placeholder="••••••••" required
                            class="w-full bg-[#FDFBF7] border border-[#E6DCCF] text-[#4A4036] text-sm rounded-lg focus:ring-[#4A4036] focus:border-[#4A4036] block p-3 placeholder-[#8C7B6C] transition-colors">
                    </div>
                </div>

                <div class="flex items-start">
                    <div class="flex items-center h-5">
                        <input id="terms" aria-describedby="terms" type="checkbox" class="w-4 h-4 border border-[#E6DCCF] rounded bg-[#FDFBF7] focus:ring-3 focus:ring-[#E6DCCF] text-[#4A4036]" required>
                    </div>
                    <div class="ml-3 text-sm">
                        <label for="terms" class="font-medium text-[#6B5D52]">I accept the <a href="#" class="text-[#4A4036] hover:underline font-bold">Terms and Conditions</a></label>
                    </div>
                </div>

                <button type="submit" class="w-full text-white bg-[#4A4036] hover:bg-[#362e26] focus:ring-4 focus:ring-[#E6DCCF] font-bold rounded-lg text-sm px-5 py-3.5 text-center transition-all duration-300 shadow-md transform hover:-translate-y-0.5">
                    Create Account
                </button>
                
                <p class="text-sm font-light text-center text-[#6B5D52]">
                    Already have an account? <a href="/sign-in" class="font-bold text-[#4A4036] hover:underline">Sign In here</a>
                </p>

            </form>
        </div>
    </div>

</main>