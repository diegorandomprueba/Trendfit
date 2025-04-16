<nav class="bg-black text-white p-4">
    <div class="container mx-auto flex justify-between items-center">
        <a href="{{ route('home') }}" class="text-2xl font-bold text-orange-500">Trendfit</a>
        <ul class="flex space-x-6">
            <li><a href="{{ route('home') }}" class="hover:text-orange-500 {{ request()->routeIs('home') ? 'text-orange-500' : '' }}">Portada</a></li>
            <li><a href="{{ route('about') }}" class="hover:text-orange-500 {{ request()->routeIs('about') ? 'text-orange-500' : '' }}">Presentación</a></li>
            <li><a href="{{ route('about') }}" class="hover:text-orange-500">Quien Somos</a></li>
            <li><a href="{{ route('register') }}" class="hover:text-orange-500 {{ request()->routeIs('register') ? 'text-orange-500' : '' }}">Registro</a></li>
            <li><a href="{{ route('cart') }}" class="hover:text-orange-500 {{ request()->routeIs('cart') ? 'text-orange-500' : '' }}">Compra</a></li>
            <li><a href="#contacto" class="hover:text-orange-500">Contacto</a></li>
        </ul>
        <div class="flex items-center space-x-6">
            <a href="{{ route('cart') }}" class="text-white hover:text-orange-500 relative">
                <i class="fas fa-shopping-cart text-xl"></i>
                @auth
                <span class="absolute -top-2 -right-2 bg-orange-500 text-xs w-5 h-5 flex items-center justify-center rounded-full">
                    {{ auth()->user()->cartItems->count() }}
                </span>
                @endauth
            </a>
            @auth
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="bg-orange-500 px-4 py-2 rounded text-white hover:bg-orange-600 transition duration-200 ease-in-out">
                        Cerrar Sesión
                    </button>
                </form>
            @else
                <a href="{{ route('login') }}" class="bg-orange-500 px-4 py-2 rounded text-white hover:bg-orange-600 transition duration-200 ease-in-out">Login</a>
            @endauth
        </div>
    </div>
</nav>