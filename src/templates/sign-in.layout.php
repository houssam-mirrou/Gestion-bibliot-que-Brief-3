<main class="flex-grow w-full bg-[#FDFBF7] flex items-center justify-center py-12 px-6">

    <div class="bg-white rounded-3xl shadow-xl border border-[#E6DCCF] overflow-hidden max-w-5xl w-full flex flex-col md:flex-row min-h-[600px]">

        <div class="hidden md:block w-1/2 relative">
            <img src="https://images.unsplash.com/photo-1506880018603-83d5b814b5a6?auto=format&fit=crop&q=80&w=800" 
                 alt="Open Book with Coffee" 
                 class="absolute inset-0 w-full h-full object-cover">
            
            <div class="absolute inset-0 bg-[#4A4036] bg-opacity-40 flex flex-col justify-between p-12">
                <div>
                    <img src="/img/library_logo.png" alt="Logo" class="h-16 w-auto opacity-80 mb-4">
                </div>
                <div class="mt-auto">
                    <blockquote class="text-[#FDFBF7] text-2xl font-bold leading-tight mb-4">
                        "Reading is dreaming with open eyes."
                    </blockquote>
                </div>
            </div>
        </div>

        <div class="w-full md:w-1/2 p-8 md:p-12 lg:p-16 flex flex-col justify-center">
            
            <div class="text-center md:text-left mb-10">
                <h1 class="text-4xl font-extrabold text-[#4A4036] mb-3">Welcome Back</h1>
                <p class="text-[#6B5D52]">Please enter your details to access your library.</p>
            </div>

            <form action="/login" method="POST" class="space-y-6">
                
                <div>
                    <label for="email" class="block mb-2 text-sm font-bold text-[#4A4036]">Email Address</label>
                    <input type="email" id="email" name="email" placeholder="name@company.com" required
                        class="w-full bg-[#FDFBF7] border border-[#E6DCCF] text-[#4A4036] text-sm rounded-lg focus:ring-[#4A4036] focus:border-[#4A4036] block p-3.5 placeholder-[#8C7B6C] transition-colors">
                </div>

                <div>
                    <div class="flex justify-between items-center mb-2">
                        <label for="password" class="block text-sm font-bold text-[#4A4036]">Password</label>
                        <a href="#" class="text-xs font-bold text-[#8C7B6C] hover:text-[#4A4036] hover:underline">Forgot Password?</a>
                    </div>
                    <input type="password" id="password" name="password" placeholder="••••••••" required
                        class="w-full bg-[#FDFBF7] border border-[#E6DCCF] text-[#4A4036] text-sm rounded-lg focus:ring-[#4A4036] focus:border-[#4A4036] block p-3.5 placeholder-[#8C7B6C] transition-colors">
                </div>

                <div class="flex items-start">
                    <div class="flex items-center h-5">
                        <input id="remember" name="remember" type="checkbox" class="w-4 h-4 border border-[#E6DCCF] rounded bg-[#FDFBF7] focus:ring-3 focus:ring-[#E6DCCF] text-[#4A4036]">
                    </div>
                    <div class="ml-3 text-sm">
                        <label for="remember" class="font-medium text-[#6B5D52]">Remember me</label>
                    </div>
                </div>

                <button type="submit" class="w-full text-white bg-[#4A4036] hover:bg-[#362e26] focus:ring-4 focus:ring-[#E6DCCF] font-bold rounded-lg text-sm px-5 py-4 text-center transition-all duration-300 shadow-md transform hover:-translate-y-0.5">
                    Sign In
                </button>
                
                <p class="text-sm font-light text-center text-[#6B5D52] pt-4">
                    Don't have an account yet? <a href="/sign-up" class="font-bold text-[#4A4036] hover:underline">Create an account</a>
                </p>

            </form>
        </div>
    </div>

</main>