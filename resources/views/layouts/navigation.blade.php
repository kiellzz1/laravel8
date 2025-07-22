<nav class="bg-gray-900 px-4 py-3 text-white shadow-md z-50">
    <div class="flex justify-between items-center">
        <div class="text-xl font-bold">
            <a href="{{ route('home') }}">Kanaeruu</a>
        </div>

        <!-- Desktop Menu -->
        <ul class="hidden md:flex space-x-6 text-sm font-medium items-center">
            @php
                $links = [
                    'home' => 'Home',
                    'about' => 'About Me',
                    'projects' => 'Projects',
                    'contact' => 'Contact',
                    'profile' => 'Profile'
                ];
            @endphp

            @foreach ($links as $route => $label)
                <li>
                    <a href="{{ route($route) }}"
                       class="relative inline-block px-3 py-2 group transition-all duration-300 ease-in-out">
                        <span class="absolute inset-0
                            {{ Route::is($route) ? 'bg-blue-600 opacity-30' : 'bg-blue-500 opacity-0 group-hover:opacity-20' }}
                            blur-md rounded-full transition-all duration-300"></span>
                        <span class="relative z-10 transition-all duration-300
                            {{ Route::is($route) ? 'text-blue-400 font-semibold' : 'group-hover:text-blue-300' }}">
                            {{ $label }}
                        </span>
                    </a>
                </li>
            @endforeach

            <li>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit"
                            class="relative inline-block px-3 py-2 group transition-all duration-300 ease-in-out">
                        <span class="absolute inset-0 bg-red-500 opacity-0 group-hover:opacity-20 blur-md rounded-full transition-all duration-300"></span>
                        <span class="relative z-10 text-red-400 group-hover:text-red-300">Logout</span>
                    </button>
                </form>
            </li>
        </ul>

        <!-- Mobile Menu -->
        <div class="md:hidden" x-data="{ open: false }">
            <button @click="open = !open">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
            </button>

            <!-- Mobile Links -->
            <div x-show="open" x-transition
                 class="absolute top-16 left-0 w-full bg-gray-800 p-4 space-y-2 z-50 rounded-b-lg shadow-lg">
                @foreach ($links as $route => $label)
                    <a href="{{ route($route) }}"
                       class="relative block px-4 py-2 group transition-all duration-300 ease-in-out">
                        <span class="absolute inset-0
                            {{ Route::is($route) ? 'bg-blue-600 opacity-30' : 'bg-blue-500 opacity-0 group-hover:opacity-20' }}
                            blur-md rounded-md transition-all duration-300"></span>
                        <span class="relative z-10 transition-all duration-300
                            {{ Route::is($route) ? 'text-blue-400 font-semibold' : 'group-hover:text-blue-300' }}">
                            {{ $label }}
                        </span>
                    </a>
                @endforeach
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit"
                            class="relative block w-full text-left px-4 py-2 group transition-all duration-300 ease-in-out">
                        <span class="absolute inset-0 bg-red-500 opacity-0 group-hover:opacity-20 blur-md rounded-md transition-all duration-300"></span>
                        <span class="relative z-10 text-red-400 group-hover:text-red-300">Logout</span>
                    </button>
                </form>
            </div>
        </div>
    </div>
</nav>
