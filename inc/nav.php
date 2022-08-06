<!-- This example requires Tailwind CSS v2.0+ -->
<div class="relative bg-white shadow">
    <div class="mx-auto">
        <div class="flex text-left justify-start items-center py-4">
            <div><a href="/">Sandhuz Innovation</a></div>
            <div class="md:hidden">
                <button type="button" onclick="openMobMenu()" class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500" aria-expanded="false">
                    <span class="sr-only">Open menu</span>
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
            <nav class="hidden md:flex space-x-10">
                <a href="/index.php" class="text-base font-medium text-gray-500 hover:text-gray-900"> Home </a>
                <a href="/services.php" class="text-base font-medium text-gray-500 hover:text-gray-900"> Services </a>
                <a href="/about-us.php" class="text-base font-medium text-gray-500 hover:text-gray-900"> About us </a>
                <a href="/contact-us.php" class="text-base font-medium text-gray-500 hover:text-gray-900"> Contact us </a>
            </nav>
        </div>
    </div>
    <div class="absolute top-0 inset-x-0 p-2 transition transform origin-top-right md:hidden" id="mobileMenu">
        <div class="rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 bg-white divide-y-2 divide-gray-50">
            <div class="pt-5 pb-6 px-5">
                <div class="flex items-center justify-between">
                    <div>
                        <div><a href="/">Sandhuz Innovation</a></div>
                    </div>
                    <div class="-mr-2">
                        <button type="button" onclick="closeMobMenu()" class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                            <span class="sr-only">Close menu</span>
                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <div class="py-6 px-5 space-y-6">
                <div class="grid grid-cols-1 gap-y-4 gap-x-8">
                    <a href="/index.php" class="text-base font-medium text-gray-900 hover:text-gray-700"> Home </a>
                    <a href="/services.php" class="text-base font-medium text-gray-900 hover:text-gray-700"> Services </a>
                    <a href="/about-us.php" class="text-base font-medium text-gray-900 hover:text-gray-700"> About us </a>
                    <a href="/contact-us.php" class="text-base font-medium text-gray-900 hover:text-gray-700"> Contact us </a>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    var mobileMenu = document.getElementById('mobileMenu')
    mobileMenu.style.display = 'none'
    var openMobMenu = () => {
        mobileMenu.style.display = 'block'
    }
    var closeMobMenu = () =>{
        mobileMenu.style.display = 'none'
    }
</script>