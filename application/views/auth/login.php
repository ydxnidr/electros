	<div class="bg-white rounded-2xl shoadow w-[350px] p-9 space-y-8">
		<div class="flex flex-col items-center justify-center">
			<span class="text-3xl font-semibold text-gray-800">Masuk ke Akun Anda</span>
		</div>
		<form action="" method="post" class="space-y-4">
			<div class="">
				<input type="text" name="username" id="username" placeholder="Nama Pengguna" autocomplete="off" class="rounded-xl w-full px-4 py-2 bg-gray-50 border-transparent focus:outline-none">
			</div>
			<div class="flex flex-col space-y-2">
				<input type="password" name="password" id="password" placeholder="Kata Sandi" autocomplete="off" class="rounded-xl w-full px-4 py-2 bg-gray-50 border-transparent focus:outline-none">
				<span class="flex flex-wrap items-center justify-end">
					<a href="" class="text-[12px] text-end font-semibold text-gray-700 hover:underline">Lupa kata sandi?</a>
				</span>
			</div>
			<div class="flex">
				<button type="submit" class="rounded-2xl flex-1 bg-gray-800 text-white font-bold hover:bg-gray-900 px-3 py-2">Masuk</button>
			</div>
		</form>
		<div class="flex flex-col items-center justify-center">
			<a href="<?= base_url('auth/register') ?>" class="text-sm font-semibold text-gray-800 hover:underline">Belum punya akun?</a>
		</div>
	</div>
