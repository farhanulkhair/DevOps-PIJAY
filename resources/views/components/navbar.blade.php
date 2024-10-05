<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Sedan:ital@0;1&display=swap');
    </style>
    <title>Document</title>
</head>
<body>
    <!-- Navbar -->
    <div class="flex px-4 py-0 md:px-40 bg-orange-200 fixed top-0 left-0 w-full border border-spacing-1 justify-center">
        <!-- Menu -->
        <div >
            <ul class="flex gap-5 font-semibold text-black text-lg" >
                <li class="p-2 m-4 hover:bg-orange-600 duration-[0.2s] rounded-md">
                    <a href="javascript:scroll(1)">Booking</a>
                </li>
                <li class="p-2 m-4 hover:bg-orange-600 duration-[0.2s] rounded-md">
                    <a href="javascript:scroll(2)">Riwayat</a>
                </li>
            </ul>
        </div>
        <!-- End of menu -->
    </div>
    <!-- End of navbar -->

    <script>
      function scroll(sectionid) {
        var id = document.getElementById(sectionid);
        id.scrollIntoView({ behavior: "smooth" });
      }
    </script>
</body>
</html>