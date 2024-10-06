<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
    </style>
    <title>Hotel Booking System</title>
</head>
<body class="bg-customBg">
    @include('components.navbar')

    {{-- Home --}}
    <div id="1" class="p-24 pt-28 px-44 h-screen items-center">
        <div class="flex justify-between bg-customCard rounded-lg shadow-lg p-4">
            <div class="flex-1 p-2">
                <h1 class="font-bold text-left text-4xl">Book Hotel Now</h1>
                <p class="pt-5 text-justify">Hotel Booking System adalah sistem yang memudahkan anda dalam melakukan booking kamar hotel. 
                    Anda dapat melakukan booking kamar hotel dengan mudah dan cepat. 
                    Anda juga dapat melihat riwayat booking yang telah anda lakukan sebelumnya.
                </p>
            </div>
            <div class="flex-1 p-2">
                <h1 class="font-bold text-left text-4xl">Selamat Datang di Hotel Booking System</h1>
                <p class="pt-5 text-justify">Hotel Booking System adalah sistem yang memudahkan anda dalam melakukan booking kamar hotel. 
                    Anda dapat melakukan booking kamar hotel dengan mudah dan cepat. 
                    Anda juga dapat melihat riwayat booking yang telah anda lakukan sebelumnya.
                </p>
            </div>
        </div>
    </div>

    <!-- Booking -->
    <div id="2" class="p-24 pt-28 pl-72 pr-72 h-100">
        <div class="bg-customCard rounded-lg text-white p-10 glow-border">
        <h1 class="font-bold text-left text-4xl">Formulir Booking</h1>
        <form action="/simpan-data" method="post" class="mb-4 mt-7">
            @csrf
                <div class="pt-0">
                    <label for="nama" class="font-poppin font-semibold text-1xl">Name</label>
                    <input type="text" id="nama" name="nama" class="mt-1 block w-full px-3 py-2 border text-black font-semibold border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="Masukkan nama">
                </div>

                <div class="pt-5">
                    <label for="tanggal_checkin" class="mt-5 font-poppin font-semibold text-1xl">Check-in</label>
                    <input type="date" id="tanggal_checkin" name="tanggal_checkin" class="mt-1 block w-full px-3 py-2 border text-black font-semibold border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                </div>

                <div class="pt-5">
                    <label for="tanggal_checkout" class="mt-3 font-poppin font-semibold text-1xl">Check-out</label>
                    <input type="date" id="tanggal_checkout" name="tanggal_checkout" class="mt-1 block w-full px-3 py-2 border text-black font-semibold border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                </div>

                <div class="pt-5">
                    <label for="jumlah_tamu" class="mt-3 font-poppin font-semibold text-1xl">Number of Guest</label>
                    <input type="text" id="jumlah_tamu" name="jumlah_tamu" class="mt-1 block w-full px-3 py-2 border text-black font-semibold border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="Masukkan jumlah tamu">
                </div>

                <div class="pt-5">
                    <label for="kontak" class="mt-3 font-poppin font-semibold text-1xl">Contact</label>
                    <input type="number" id="kontak" name="kontak" class="mt-1 block w-full px-3 py-2 border text-black font-semibold border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="Masukkan kontak anda">
                </div>

                <div class="pt-5">
                    <label for="tipe_kamar" class="mt-3 font-poppin font-semibold text-1xl">Room Type</label>
                    <select id="tipe_kamar" name="tipe_kamar" class="mt-1 block w-full px-3 py-2 border text-black font-semibold border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"  aria-placeholder="Silahkan Pilih">
                        <option disabled selected value="">Choose Room Type</option>
                        <option value="single room">Single Room</option>
                        <option value="double room">Double Room</option>
                        <option value="suite">Suite</option>
                        <option value="family room">Family Room</option>
                    </select>
                </div>

                <div class="pt-5">
                    <label for="metode_pembayaran" class="mt-3 font-poppin font-semibold text-1xl">Payment Method</label>
                    <select id="metode_pembayaran" name="metode_pembayaran" class="mt-1 block w-full px-3 py-2 border text-black font-semibold border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="Tanggal Checkin">
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
        <div class="bg-customCard rounded-lg text-white p-10 glow-border">
            <h1 class="font-bold text-left text-4xl">Booking History</h1>
            <div class="pt-10 overflow-x-auto rounded-lg">
                <table class="min-w-full divide-y divide-gray-600">
                    <thead>
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
                    <tbody class="bg-white divide-y divide-gray-600">
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
                                        <button type="submit" class="bg-gray-500 hover:bg-gray-600 rounded-md px-2 py-2">
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
    </script>
</body>
</html>