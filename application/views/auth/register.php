    <div class="bg-white rounded-2xl shadow w-[350px] p-9 space-y-8">
        <div class="flex flex-col items-center justify-center">
            <span class="text-3xl font-semibold text-gray-800">Register a New Account</span>
        </div>
        <form action="<?php echo site_url('AuthController/create'); ?>" method="post" class="space-y-4">
            <div class="">
                <input type="text" name="nama_lengkap" id="nama_lengkap" placeholder="Full Name" autocomplete="off" class="rounded-xl w-full px-4 py-2 bg-gray-50 border-transparent focus:outline-none">
            </div>
            <div class="">
                <input type="text" name="username" id="username" placeholder="Username" autocomplete="off" class="rounded-xl w-full px-4 py-2 bg-gray-50 border-transparent focus:outline-none">
            </div>
            <div class="">
                <input type="email" name="email" id="email" placeholder="Email" autocomplete="off" class="rounded-xl w-full px-4 py-2 bg-gray-50 border-transparent focus:outline-none">
            </div>
            <div class="">
                <input type="password" name="password" id="password" placeholder="Password" autocomplete="off" class="rounded-xl w-full px-4 py-2 bg-gray-50 border-transparent focus:outline-none">
            </div>
            <div class="flex">
                <button type="submit" class="rounded-2xl flex-1 bg-gray-800 text-white font-bold hover:bg-gray-900 px-3 py-2">Register</button>
            </div>
        </form>
        <div class="flex flex-col items-center justify-center">
            <a href="<?= base_url('auth/login'); ?>" class="text-sm font-semibold text-gray-800 hover:underline">Already have an account? Login</a>
        </div>
    </div>
