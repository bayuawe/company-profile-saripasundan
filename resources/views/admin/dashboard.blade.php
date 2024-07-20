<x-app-layout>
    <div class="py-5">
        <div class="overflow-hidden p-10 shadow-sm sm:rounded-lg flex flex-col gap-y-5">

            <div class="flex flex-col gap-y-5">
                <h1 class="text-2xl font-bold">Dashboard</h1>
                <h2 class="text-xl font-semibold">
                    <span id="greeting"></span>, {{ Auth::user()->name }}!
                </h2>
            </div>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li class="py-5 bg-red-500 text-white font-bold">
                                {{ $error }}
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <!-- Grid -->
            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6">
                <div class="flex flex-col bg-white shadow-sm rounded-xl">
                    <div
                        class="group w-full rounded-lg bg-yellow-400 p-5 transition relative duration-300 cursor-pointer hover:translate-y-[3px] hover:shadow-[0_-8px_0px_0px_#EAB308]">
                        <p class="text-white text-2xl font-bold">{{ $users->count() }}</p>
                        <p class="text-white text-sm font-bold">Users</p>
                        <img src="{{ asset('images/icons/users-48.png') }}" alt="User Icon" height="36"
                            width="36"
                            class="group-hover:opacity-100 absolute right-[10%] top-[50%] translate-y-[-50%] opacity-20 transition group-hover:scale-110 duration-300">
                    </div>
                </div>
                <div class="flex flex-col bg-white shadow-sm rounded-xl">
                    <div
                        class="group w-full rounded-lg bg-yellow-400 p-5 transition relative duration-300 cursor-pointer hover:translate-y-[3px] hover:shadow-[0_-8px_0px_0px_#EAB308]">
                        <p class="text-white text-2xl font-bold">{{ $my_categories->count() }}</p>
                        <p class="text-white text-sm font-bold">Product Categories</p>
                        <img src="{{ asset('images/icons/category-48.png') }}" alt="User Icon" height="36"
                            width="36"
                            class="group-hover:opacity-100 absolute right-[10%] top-[50%] translate-y-[-50%] opacity-20 transition group-hover:scale-110 duration-300">
                    </div>
                </div>
                <div class="flex flex-col bg-white shadow-sm rounded-xl">
                    <div
                        class="group w-full rounded-lg bg-yellow-400 p-5 transition relative duration-300 cursor-pointer hover:translate-y-[3px] hover:shadow-[0_-8px_0px_0px_#EAB308]">
                        <p class="text-white text-2xl font-bold">{{ $my_products->count() }}</p>
                        <p class="text-white text-sm font-bold">Products</p>
                        <img src="{{ asset('images/icons/cake-48.png') }}" alt="User Icon" height="36" width="36"
                            class="group-hover:opacity-100 absolute right-[10%] top-[50%] translate-y-[-50%] opacity-20 transition group-hover:scale-110 duration-300">
                    </div>
                </div>
                <div class="flex flex-col bg-white shadow-sm rounded-xl">
                    <div
                        class="group w-full rounded-lg bg-yellow-400 p-5 transition relative duration-300 cursor-pointer hover:translate-y-[3px] hover:shadow-[0_-8px_0px_0px_#EAB308]">
                        <p class="text-white text-2xl font-bold">{{ $my_careers->count() }}</p>
                        <p class="text-white text-sm font-bold">Careers</p>
                        <img src="{{ asset('images/icons/chef-hat-48.png') }}" alt="User Icon" height="36"
                            width="36"
                            class="group-hover:opacity-100 absolute right-[10%] top-[50%] translate-y-[-50%] opacity-20 transition group-hover:scale-110 duration-300">
                    </div>
                </div>

            </div>
            <!-- End Grid -->

            <div class="bg-white p-5 rounded-lg shadow-lg w-full overflow-x-auto">
                <h2 class="text-xl font-bold mb-4">Category Chart</h2>
                <div class="w-full">
                    <canvas id="categoryChart"></canvas>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<script>
    function updateGreeting() {
        const now = new Date();
        const hour = now.getHours();
        let greeting;

        if (hour >= 5 && hour < 12) {
            greeting = 'Good Morning';
        } else if (hour >= 12 && hour < 18) {
            greeting = 'Good Afternoon';
        } else if (hour >= 18 && hour < 21) {
            greeting = 'Good Evening';
        } else {
            greeting = 'Good Night';
        }

        document.getElementById('greeting').innerText = greeting;
    }

    // Update greeting immediately and then every minute
    updateGreeting();
    setInterval(updateGreeting, 60000);

    // Prepare data for Chart.js
    const categoryLabels = @json($categories->pluck('name'));
    const productCounts = @json($categories->pluck('products_count'));

    // Chart.js example
    const ctx = document.getElementById('categoryChart').getContext('2d');
    const categoryChart = new Chart(ctx, {
        type: 'bar', // Change this to 'line', 'pie', 'doughnut', etc. for different chart types
        data: {
            labels: categoryLabels,
            datasets: [{
                label: 'Number of Products',
                data: productCounts,
                backgroundColor: 'rgba(54, 162, 235, 0.2)',
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>
