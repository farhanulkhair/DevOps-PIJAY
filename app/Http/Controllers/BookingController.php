<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index(){
        $bookingData = Booking::all();
        return view('dashboard', compact('bookingData'));
    }

    public function create(Request $request){
        
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'tanggal_checkin' => 'required',
            'tanggal_checkout' => 'required',
            'jumlah_tamu' => 'required',
            'kontak' => 'required|numeric',
            'tipe_kamar' => 'required',
            'metode_pembayaran' => 'required',
        ]);
        
        if ($validatedData) {
            Booking::create($validatedData);
            return redirect('/');
        }

    }

    public function edit(Request $request, $id){
        
        $validatedData = $request->validate([
            'nama' => 'required',
            'tanggal_checkin' => 'required',
            'tanggal_checkout' => 'required',
            'jumlah_tamu' => 'required',
            'kontak' => 'required',
            'tipe_kamar' => 'required',
            'metode_pembayaran' => 'required',
        ]);

        if ($validatedData) {
            
            $editingData = Booking::find($id);
           
            $editingData->update($validatedData);
            
            return redirect('/');
        }
    }

    public function destroy($id){
        $data = Booking::findOrFail($id);

        $data->delete();

        return redirect('/');
    }
}
