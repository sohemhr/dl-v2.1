<?php

namespace App\Http\Controllers\User;

use App\Models\Contact;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Layanan;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contactGet = Contact::orderBy('contacts.created_at', 'DESC')
                                ->join('layanans', 'contacts.contact_subjek', '=', 'layanans.layanan_kode')
                                ->select('contacts.contact_status', 'contacts.contact_nama', 'layanans.layanan_nama', 'contacts.contact_email', 'contacts.contact_hp', 'contacts.created_at', 'contacts.contact_uuid')
                                ->get();
        $data = [
            'title'     => 'Contact',
            'subtitle'  => 'Data Contact',
            'contactGet' => $contactGet
        ];

        return view('user.contact.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $getLayanan = Layanan::orderBy('layanan_kode', 'ASC')->get();
        $data = [
            'title'     => 'Contact',
            'subtitle'  => 'Tambah Contact',
            'getLayanan' => $getLayanan
        ];

        return view('user.contact.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate
        $request->validate([
            'contact_nama'      => ['required', 'max:255',],
            'contact_email'     => ['required', 'max:255', 'email'],
            'contact_hp'        => ['required', 'numeric'],
            'contact_subjek' => ['required'],
            'contact_isi'    => ['required']
        ]);

        // Create a post
        Contact::create([
            'contact_uuid' => Str::uuid()->toString(),
            'contact_nama' => $request->contact_nama,
            'contact_email' => $request->contact_email,
            'contact_hp'    => $request->contact_hp,
            'contact_subjek' => $request->contact_subjek,
            'contact_isi'    => $request->contact_isi,
            'contact_status' => '1'
        ]);

        // Redirect back to dashboard
        return back()->with('success', 'Okay.. Data Contact telah di tambahakan..');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $uuid)
    {
        Contact::where('contact_uuid', $uuid)->update(['contact_status'    => '0']);
        $contactGet = Contact::where('contact_uuid', $uuid)
                                    ->join('layanans', 'contacts.contact_subjek', '=', 'layanans.layanan_kode')->get();
        $getLayanan = Layanan::orderBy('layanan_kode', 'ASC')->get();
        $data = [
            'title'     => 'Contact',
            'subtitle'  => 'Detail Contact',
            'contactGet'    => $contactGet,
            'getLayanan' => $getLayanan
        ];

        return view('user.contact.edit', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $uuid)
    {
        // Validate
        $request->validate([
            'contact_nama'      => ['required', 'max:255',],
            'contact_email'     => ['required', 'max:255', 'email'],
            'contact_hp'        => ['required', 'numeric'],
            'contact_subjek' => ['required'],
            'contact_isi'    => ['required']
        ]);

        // Update the post
        Contact::where('contact_uuid', $uuid)->update([
            'contact_uuid' => Str::uuid()->toString(),
            'contact_nama' => $request->contact_nama,
            'contact_email' => $request->contact_email,
            'contact_hp'    => $request->contact_hp,
            'contact_subjek' => $request->contact_subjek,
            'contact_isi'    => $request->contact_isi
        ]);

        // Redirect to dashboard
        return redirect()->route('contact.index')->with('success', 'Data Contact telah di perbaharui..');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $uuid)
    {
        // Delete the post
        Contact::where('contact_uuid', $uuid)->delete();

        // Redirect back to dashboard
        return back()->with('delete', 'Data Telah di Hapus dari Database..');
    }

    public function chats(Request $request)
    {
        return redirect('https://wa.me/' . $request->contact_hp_chats);
    }
}
