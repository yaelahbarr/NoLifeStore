<!-- component -->
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NoLifeStore</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
</head>

<body class="bg-blue-200">
    <nav class="bg-blue-800 border-b border-gray-300 fixed w-full top-0 z-50">
        <div class="flex justify-between items-center px-9">
            <div class="ml-1">
                <div class="h-20 flex items-center justify-center text-4xl font-bold text-white">
                    NoLifeStore
                </div>
            </div>

            <div class="space-x-4">
                <button>
                    <i class="fas fa-bell text-lg"></i>
                </button>
            
            </div>
        </div>
    </nav>

    <div id="sideNav" class="bg-gray-800 lg:block hidden bg-white w-64 h-screen fixed rounded-none border-none">
        <div class="p-4 space-y-4">
            <!-- Sidebar -->
            <br>
            <br>
            <a href="/dashboard" aria-label="dashboard" class="px-4 py-3 flex items-center space-x-4 rounded-md text-gray-500 group hover:bg-gray-700">
                <i class="fas fa-home text-white"></i>
                <span class="-mr-1 font-medium">Dashboard</span>
            </a>

            <a href="/customer" class="px-4 py-3 flex items-center space-x-4 rounded-md text-gray-500 group hover:bg-gray-700">
                <i class="fas fa-chart-line text-white"></i>
                <span>Customer</span>
            </a>
            <a href="/stock" class="px-4 py-3 flex items-center space-x-4 rounded-md text-gray-500 group hover:bg-gray-700">
                <i class="fas fa-cube text-white"></i>
                <span>Stock</span>
            </a>
            <a href="/order" class="px-4 py-3 flex items-center space-x-4 rounded-md text-gray-500 group hover:bg-gray-700">
                <i class="fab fa-amazon-pay text-white"></i>
                <span>Order</span>
            </a>
            <form action="/logout" method="post">
                @csrf
                    <button type="submit" class="px-4 py-3 flex items-center space-x-4 rounded-md text-gray-500 group hover:bg-gray-700">
                        <i class="fas fa-sign-out-alt text-white"></i>
                        <span>Logout</span>
                    </button>
            </form>
        </div>
    </div>
    
    <div class="lg:ml-64 lg:pl-4 lg:flex lg:flex-col lg:w-75% mt-5 mx-10">
        @yield('container')
    </div>



    @include('sweetalert::alert')

    <!-- Script  -->
    <script>
        const menuBtn = document.getElementById('menuBtn');
        const sideNav = document.getElementById('sideNav');

        menuBtn.addEventListener('click', () => {
            sideNav.classList.toggle('hidden');
        });
    </script>



</body>

</html>