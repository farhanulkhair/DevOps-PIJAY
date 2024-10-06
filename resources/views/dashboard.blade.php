<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
    </style>
    <!-- Flowbite CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet" />

<!-- Flowbite JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
  <style>
    .fade-in {
      opacity: 0;
      transform: translateY(20px);
      transition: opacity 2s ease-out, transform 2s ease-out; /* Memperpanjang durasi transisi */
    }

    .fade-in.visible {
      opacity: 1;
      transform: translateY(0);
    }
</style>


    <title>Hotel Booking System</title>
</head>
<body class="bg-white">
    @include('components.navbar')

    {{-- Home --}}
    <div id="1" class="">
    <img src="{{ asset('images/Home.png') }}" alt="Deskripsi gambar" class="w-full h-full object-cover">

    {{-- <div id="default-carousel" class="relative w-full" data-carousel="slide">
            <!-- Carousel wrapper -->
            <div class="relative h-96 overflow-hidden rounded-lg md:h-96">
                <!-- Item 1 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{ asset('images/G1.jpg') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 2 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{ asset('images/G2.jpg') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 3 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{ asset('images/G3.jpg') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 4 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{ asset('images/G4.jpg') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 5 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{ asset('images/G4.jpg') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
            </div>
            <!-- Slider indicators -->
            <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
                <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
            </div>
            <!-- Slider controls -->
            <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                    </svg>
                    <span class="sr-only">Previous</span>
                </span>
            </button>
            <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                    </svg>
                    <span class="sr-only">Next</span>
                </span>
            </button>
        </div> --}}

    <!-- Booking -->
<div id="2" class="pt-28 h-100 fade-in">
        <div class="bg-white rounded-3xl text-white p-10 px-20 shadow-lg">

                <div>

                <h1 class="mb-4 text-4xl text-center text-Biru font-extrabold leading-none tracking-tight md:text-5xl lg:text-6xl">BOKING HOTEL</h1>
                <p class="mb-6 text-lg font-normal text-center text-gray-500 lg:text-xl sm:px-16 xl:px-48 dark:text-gray-400">Isikan data dengan lengkap</p>
                </div>

        <form action="/simpan-data" method="post" class="mb-4 mt-7 mx-8">
            @csrf
                <div class=" bg-gray-300 p-7 pt-5 rounded-3xl focus:shadow-xl border hover:ring-Biru hover:border-Biru">
                    <label for="nama" class="font-poppin font-semibold text-1xl  text-Biru ">Name</label>
                    <input type="text" id="nama" name="nama" class="mt-1 block w-full px-3 py-2 border  text-black font-semibold border-gray-300 rounded-full shadow-sm focus:outline-none focus:ring-Biru focus:border-Biru sm:text-sm" placeholder="Masukkan nama">
                </div>
<div class="flex justify-center items-center gap-10 mt-10 ">
    <div class="w-1/2  bg-gray-300 p-7 pt-5 rounded-3xl border hover:ring-Biru hover:border-Biru">
        <label for="tanggal_checkin" class="mt-5 font-poppin font-semibold text-1xl text-Biru">Check-in</label>
        <input type="date" id="tanggal_checkin" name="tanggal_checkin" class="mt-1 block w-full px-3 py-2 border text-black font-semibold border-gray-300 rounded-full shadow-sm focus:outline-none  focus:ring-Biru focus:border-Biru sm:text-sm">
    </div>

    <div class="w-1/2 bg-gray-300 p-7 pt-5 rounded-3xl focus:shadow-xl border hover:ring-Biru hover:border-Biru">
        <label for="tanggal_checkout" class="mt-3 font-poppin font-semibold text-1xl text-Biru">Check-out</label>
        <input type="date" id="tanggal_checkout" name="tanggal_checkout" class="mt-1 block w-full px-3 py-2 border text-black font-semibold border-gray-300 rounded-full shadow-sm focus:outline-none  focus:ring-Biru focus:border-Biru sm:text-sm">
    </div>
</div>

                <div class=" bg-gray-300 p-7 pt-5 rounded-3xl focus:shadow-xl border hover:ring-Biru hover:border-Biru mt-10">
                    <label for="jumlah_tamu" class="mt-3 font-poppin font-semibold text-1xl text-Biru">Number of Guest</label>
                    <input type="text" id="jumlah_tamu" name="jumlah_tamu" class="mt-1 block w-full px-3 py-2 border text-black font-semibold border-gray-300 rounded-full shadow-sm focus:outline-none  focus:ring-Biru focus:border-Biru sm:text-sm" placeholder="Masukkan jumlah tamu">
                </div>



                <div class="bg-gray-300 p-7 pt-5 rounded-3xl focus:shadow-xl border hover:ring-Biru hover:border-Biru mt-10">
                    <label for="kontak" class="mt-3 font-poppin font-semibold text-1xl text-Biru">Contact</label>
                    <input type="number" id="kontak" name="kontak" class="mt-1 block w-full px-3 py-2 border text-black font-semibold border-gray-300 rounded-full shadow-sm focus:outline-none  focus:ring-Biru focus:border-Biru sm:text-sm" placeholder="Masukkan kontak anda">
                </div>

                <div class="bg-gray-300 p-7 pt-5 rounded-3xl focus:shadow-xl border hover:ring-Biru hover:border-Biru mt-10">
                    <label for="tipe_kamar" class="mt-3 font-poppin font-semibold text-1xl text-Biru">Room Type</label>
                    <select id="tipe_kamar" name="tipe_kamar" class="mt-1 block w-full px-3 py-2 border text-black font-semibold border-gray-300 rounded-full shadow-sm focus:outline-none  focus:ring-Biru focus:border-Biru sm:text-sm"  aria-placeholder="Silahkan Pilih">
                        <option disabled selected value="">Choose Room Type</option>
                        <option value="single room">Single Room</option>
                        <option value="double room">Double Room</option>
                        <option value="suite">Suite</option>
                        <option value="family room">Family Room</option>
                    </select>
                </div>

                <div class="bg-gray-300 p-7 pt-5 rounded-3xl focus:shadow-xl border hover:ring-Biru hover:border-Biru mt-10">
                    <label for="metode_pembayaran" class="mt-3 font-poppin font-semibold text-1xl text-Biru">Payment Method</label>
                    <select id="metode_pembayaran" name="metode_pembayaran" class="mt-1 block w-full px-3 py-2 border text-black font-semibold border-gray-300 rounded-full shadow-sm focus:outline-none  focus:ring-Biru focus:border-Biru sm:text-sm" placeholder="Tanggal Checkin">
                        <option disabled selected value="">Choose Payment Method</option>
                        <option value="qris">Qris</option>
                        <option value="transfer bank">Bank Transfer</option>
                        <option value="tunai">Cash</option>
                    </select>
                 </div>

                <div class="pt-10 text-right">
                    <a href="javascript:scroll(2)">
                        <button type="submit" class="bg-blue-500 px-5 py-2 rounded-md font-semibold text-white hover:bg-blue-700">Book</button>
                    </a>
                </div>
        </form>
        </div>
    </div>




    <!-- History -->
    <div id="3" class="p-24 pt-28 h-screen pl-72 pr-72">
        <div class="rounded-lg text-white p-10">
            <h1 class="font-bold text-left text-4xl">Booking History</h1>
                    <div>
            <h1 class="mb-4 text-4xl text-center text-Biru font-extrabold leading-none tracking-tight md:text-5xl lg:text-6xl">BOOKING HISTORY</h1>
            <p class="mb-6 text-lg font-normal text-center text-gray-500 lg:text-xl sm:px-16 xl:px-48 dark:text-gray-400">Anda dapat mengedit data yang telah dilakukan</p>
        </div>


<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-sm font-medium text-gray-500 uppercase tracking-wider">Name</th>
                            <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-sm font-medium text-gray-500 uppercase tracking-wider">Check-in</th>
                            <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-sm font-medium text-gray-500 uppercase tracking-wider">Check-out</th>
                            <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-sm font-medium text-gray-500 uppercase tracking-wider">Number of Guests</th>
                            <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-sm font-medium text-gray-500 uppercase tracking-wider">Contact</th>
                            <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-sm font-medium text-gray-500 uppercase tracking-wider">Room Type</th>
                            <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-sm font-medium text-gray-500 uppercase tracking-wider">Payment Method</th>
                            <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-sm font-medium text-gray-500 uppercase tracking-wider">Action</th>
                        </tr>
        </thead>
        <tbody>
            @foreach ($bookingData as $bd)
                            <tr class="font-poppin">
                                <td class="px-6 py-4 whitespace-nowrap text-black font-semibold">{{$bd->nama}}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-black font-semibold">{{$bd->tanggal_checkin}}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-black font-semibold">{{$bd->tanggal_checkout}}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-black font-semibold">{{$bd->jumlah_tamu}}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-black font-semibold">{{$bd->kontak}}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-black font-semibold">{{$bd->tipe_kamar}}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-black font-semibold">{{$bd->metode_pembayaran}}</td>
                                <td class="flex flex-row gap-2 pt-2">
                                    <button onclick="editFunction({{$bd->id}}, '{{$bd->nama}}', '{{$bd->tanggal_checkin}}', '{{$bd->tanggal_checkout}}', '{{$bd->jumlah_tamu}}', '{{$bd->kontak}}', '{{$bd->tipe_kamar}}', '{{$bd->metode_pembayaran}}')" class="bg-gray-500 hover:bg-gray-600 rounded-md px-2 py-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L6.832 19.82a4.5 4.5 0 0 1-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 0 1 1.13-1.897L16.863 4.487Zm0 0L19.5 7.125" />
                                        </svg>
                                    </button>
                                    <form action="/hapus-data/{{$bd->id}}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="bg-red-700 hover:bg-red-950 rounded-md px-2 py-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                            </svg>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
        </tbody>
    </table>
</div>
    </div>
    <div id="alert" class="hidden fixed top-25 right-5 bg-green-500 text-white p-4 rounded-lg shadow-lg flex items-center space-x-4 transition transform duration-500 ease-in-out">
    <div>
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
        </svg>
    </div>
    <div>
        <p class="font-semibold">Success!</p>
        <p>Your booking has been completed.</p>
    </div>
    <button id="closeAlert" class="bg-green-600 hover:bg-green-700 rounded-full p-2 focus:outline-none">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
        </svg>
    </button>
</div>



    {{-- Edit Form --}}
    <div id="editForm" class="fixed top-0 left-0 font-poppin bg-black/50 w-screen h-screen justify-center items-center hidden">

        <form id="editFormUpdate" method="POST" class="h-2/3 w-1/2 bg-white rounded-lg px-12 justify-center flex flex-col gap-4">
            @csrf
            <h1 class="font-bold text-center text-3xl pt-1">Edit Booking</h1>

            <input type="text" name="nama" id="edit_nama" class="w-full px-3 py-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="Update Nama">
            <input type="date" name="tanggal_checkin" id="edit_tanggal_checkin" class="w-full px-3 py-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="Tanggal Checkin">
            <input type="date" name="tanggal_checkout" id="edit_tanggal_checkout" class="w-full px-3 py-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="Tanggal Checkout">
            <input type="text" name="jumlah_tamu" id="edit_jumlah_tamu" class="w-full px-3 py-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="Update Jumlah Tamu">

            <input type="number" name="kontak" id="edit_kontak" class="w-full px-3 py-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="Update Kontak">

            <select name="tipe_kamar" id="edit_tipe_kamar" class="w-full px-3 py-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="Update Tipe Kamar">
                <option value="single room">Single Room</option>
                <option value="double room">Double Room</option>
                <option value="suite">Suite</option>
                <option value="family room">Family Room</option>
            </select>

            <select name="metode_pembayaran" id="edit_metode_pembayaran" class="w-full px-3 py-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="Masukkan Metode Pembayaran">
                <option value="qris">Qris</option>
                <option value="transfer bank">Bank Transfer</option>
                <option value="tunai">Cash</option>
            </select>

            <div class="pt-0 text-right">
                <button type="button" onclick="closeModal()" class="bg-red-500 px-5 py-2 rounded-md font-semibold text-white hover:bg-red-700 mr-2">Cancel</button>
                <button onclick="submitEditForm()" class="bg-blue-500 px-5 py-2 rounded-md font-semibold text-white hover:bg-blue-700">Save</button>
            </div>
        </form>

    </div>

    <script>
        let selectedEditingDataId;
        const editForm = document.getElementById("editForm");
        const editFormUpdate = document.getElementById("editFormUpdate");


        function editFunction(id, nama, tanggal_checkin, tanggal_checkout, jumlah_tamu, kontak, tipe_kamar, metode_pembayaran){
            selectedEditingDataId = id;
            console.log("ID: ", id);

            editForm.classList.remove('hidden');
            editForm.classList.add('flex');

            document.getElementById("edit_nama").value = nama;
            document.getElementById("edit_tanggal_checkin").value = tanggal_checkin;
            document.getElementById("edit_tanggal_checkout").value = tanggal_checkout;
            document.getElementById("edit_jumlah_tamu").value = jumlah_tamu;
            document.getElementById("edit_kontak").value = kontak;
            document.getElementById("edit_tipe_kamar").value = tipe_kamar.toLowerCase();
            document.getElementById("edit_metode_pembayaran").value = metode_pembayaran.toLowerCase();

        }

        function closeModal() {
            editForm.classList.add('hidden');
            editForm.classList.remove('flex');
        }

        const submitEditForm = () => {
            console.log("SELECTED ID: ", selectedEditingDataId);
            editFormUpdate.action = `/edit-data/${selectedEditingDataId}`;
        }

        function openModal() {
            editForm.classList.add('flex');
            editForm.classList.remove('hidden')
        }

            document.addEventListener("DOMContentLoaded", function() {
      const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            entry.target.classList.add('visible'); // Tambah class 'visible' saat elemen terlihat
          } else {
            entry.target.classList.remove('visible'); // Hapus class 'visible' saat elemen keluar dari viewport
          }
        });
      });

      const fadeInElements = document.querySelectorAll('.fade-in');
      fadeInElements.forEach(el => observer.observe(el));


    });

function showAlert() {
    const alertBox = document.getElementById('alert');
    alertBox.classList.remove('hidden');
    alertBox.classList.add('translate-x-0', 'opacity-100');

    setTimeout(() => {
        hideAlert();
    }, 5000); // Auto-hide after 5 seconds
}

function hideAlert() {
    const alertBox = document.getElementById('alert');
    alertBox.classList.add('hidden');
}

// Close alert when clicking the close button
document.getElementById('closeAlert').addEventListener('click', hideAlert);

// Show alert when form is submitted
document.getElementById('formBoking').addEventListener('submit', function(event) {
    event.preventDefault();
    if (this.checkValidity()) {
        showAlert();
        // Submit form if needed
        // this.submit();
    } else {
        alert("Please fill in all required fields.");
    }
});


    </script>
</body>
</html>
