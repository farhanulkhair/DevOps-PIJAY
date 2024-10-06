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
    <div class="flex items-center px-4 py-0 md:px-40 bg-Biru fixed top-0 left-0 w-full z-40 rounded-b-full shadow-2xl ">
        {{-- Logo --}}
        <div class="flex-shrink-0 px-3 py-3">
            <a href="javascript:scroll(1)">
                <img src="{{ asset('images/logoHotel.jpeg') }}" alt="logo" class="w-14 h-14 rounded-full">
            </a>
        </div>
        {{-- End of logo --}}

        <!-- Menu -->
        <div class="flex-1 flex justify-end text-center">
            <ul class="flex justify-center gap-5 font-semibold text-white text-lg">
                <li class="p-2 m-4 hover:scale-90 hover:text-hijau duration-[0.2s] rounded-md">
                    <a href="javascript:scroll(1)">Home</a>
                </li>
                <li class="p-2 m-4 hover:scale-90 hover:text-hijau duration-[0.2s] rounded-md">
                    <a href="javascript:scroll(2)">Booking</a>
                </li>
                <li class="p-2 m-4 hover:scale-90 hover:text-hijau duration-[0.2s] rounded-md">
                    <a href="javascript:scroll(3)">History</a>
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
