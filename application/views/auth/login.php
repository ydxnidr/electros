<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Electros</title>
    <link rel="shortcut icon" href="" type="image/x-icon">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/style.css">
</head>
<body class="bg-gray-200 flex flex-wrap items-center justify-center h-screen">
    <div class="bg-white rounded-2xl shoadow w-[350px] p-9 space-y-8">
        <div class="flex flex-col items-center justify-center">
            <span class="text-3xl font-semibold text-gray-800">Login to your Account</span>
        </div>
        <form action="" method="post" class="space-y-5">
            <div class="">
                <input type="text" name="user_id" id="user_id" placeholder="ID Admin" autocomplete="off" class="rounded-xl w-full px-4 py-2 bg-gray-50 border-transparent focus:outline-none">
            </div>
            <div class="">
                <input type="password" name="password" id="password" placeholder="Password" autocomplete="off" class="rounded-xl w-full px-4 py-2 bg-gray-50 border-transparent focus:outline-none">
            </div>
            <div class="flex">
                <button type="submit" class="rounded-2xl flex-1 bg-gray-800 text-white font-bold hover:bg-gray-900 px-3 py-2">Login</button>
            </div>
        </form>
        <div class="flex flex-col items-center justify-center">
            <a href="" class="text-sm font-semibold text-gray-800 hover:underline">Forgot the password?</a>
        </div>
    </div>
    <script src=""></script>
</body>
</html>
