<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="min-h-screen flex flex-col bg-[#FDFBF7] text-[#4A4036]"> 
    <header class="shadow-md bg-[#FDFBF7] sticky top-0 z-50">
    <nav class="flex justify-between items-center px-6 py-4 w-full max-w-screen-2xl mx-auto">
        
        <div class="flex flex-row items-center gap-6 md:gap-8">
            <img src="/img/library_logo.png" class="h-16 w-auto object-contain">
            
            <div class="flex flex-row gap-8 items-center">
                <h1 class="text-2xl font-bold text-[#4A4036] whitespace-nowrap hidden lg:block">Creamy library</h1>
                
                <div class="hidden md:block">
                    <ul class="flex gap-6 items-center">
                        <li>
                            <a href="/"
                                class="text-sm font-medium transition-transform duration-300 inline-block <?= isUrl('/') ? 'text-[#4A4036] font-bold scale-105 border-b-2 border-[#4A4036]' : 'text-[#8C7B6C] hover:scale-105 hover:font-bold hover:text-[#4A4036]' ?>">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="/explore"
                                class="text-sm font-medium transition-transform duration-300 inline-block <?= isUrl('/explore') ? 'text-[#4A4036] font-bold scale-105 border-b-2 border-[#4A4036]' : 'text-[#8C7B6C] hover:scale-105 hover:font-bold hover:text-[#4A4036]' ?>">
                                Explore
                            </a>
                        </li>
                        <li>
                            <a href="/services"
                                class="text-sm font-medium transition-transform duration-300 inline-block <?= isUrl('/services') ? 'text-[#4A4036] font-bold scale-105 border-b-2 border-[#4A4036]' : 'text-[#8C7B6C] hover:scale-105 hover:font-bold hover:text-[#4A4036]' ?>">
                                Services
                            </a>
                        </li>
                        <li>
                            <a href="/propos"
                                class="text-sm font-medium transition-transform duration-300 inline-block <?= isUrl('/propos') ? 'text-[#4A4036] font-bold scale-105 border-b-2 border-[#4A4036]' : 'text-[#8C7B6C] hover:scale-105 hover:font-bold hover:text-[#4A4036]' ?>">
                                About
                            </a>
                        </li>
                        <li>
                            <a href="/contact"
                                class="text-sm font-medium transition-transform duration-300 inline-block <?= isUrl('/contact') ? 'text-[#4A4036] font-bold scale-105 border-b-2 border-[#4A4036]' : 'text-[#8C7B6C] hover:scale-105 hover:font-bold hover:text-[#4A4036]'  ?>">
                                Contact
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div>
            <ul class="flex gap-3 items-center">
                <?php if (!isset($_SESSION['role'])) {
                    echo '<li>
                            <a href="/sign-in" class="px-6 py-2.5 inline-block border-2 border-[#4A4036] text-[#4A4036] font-bold text-sm rounded-full hover:bg-[#4A4036] hover:text-white transition-all duration-300">
                                Sign In
                            </a>
                          </li>';
                    
                    echo '<li>
                            <a href="/sign-up" class="px-6 py-2.5 inline-block border-2 border-[#4A4036] bg-[#4A4036] text-white font-bold text-sm rounded-full hover:bg-transparent hover:text-[#4A4036] transition-all duration-300 shadow-md">
                                Sign Up
                            </a>
                          </li>';
                } else {
                    if ($_SESSION['role'] == 'admin') {
                        echo '<li><a href="/admin" class="px-6 py-2.5 inline-block border-2 border-transparent hover:border-[#4A4036] text-[#4A4036] font-bold text-sm rounded-full transition-all duration-300">Admin</a></li>';
                    } else {
                        echo '<li><a href="/profile" class="px-6 py-2.5 inline-block border-2 border-transparent hover:border-[#4A4036] text-[#4A4036] font-bold text-sm rounded-full transition-all duration-300">Profile</a></li>';
                    }
                    // Sign Out is an outline button
                    echo '<li>
                            <a href="/sign-out" class="px-6 py-2.5 inline-block border-2 border-[#4A4036] text-[#4A4036] font-bold text-sm rounded-full hover:bg-[#4A4036] hover:text-white transition-all duration-300">
                                Sign out
                            </a>
                          </li>';
                }
                ?>
            </ul>
        </div>
    </nav>
</header> 
