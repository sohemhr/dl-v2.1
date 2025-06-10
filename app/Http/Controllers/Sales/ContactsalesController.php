<?php

namespace App\Http\Controllers\Sales;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactsalesController extends Controller
{
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

        return view('sales.contact.index', $data);
    }

    public function show(string $uuid)
    {
        Contact::where('contact_uuid', $uuid)->update(['contact_status'    => '0']);
        $contactGet = Contact::where('contact_uuid', $uuid)
            ->join('layanans', 'contacts.contact_subjek', '=', 'layanans.layanan_kode')->get();
        $data = [
            'title'     => 'Contact',
            'subtitle'  => 'Detail Contact',
            'contactGet'    => $contactGet
        ];

        return view('sales.contact.edit', $data);
    }

    public function chats(Request $request)
    {
        return redirect('https://wa.me/' . $request->contact_hp_chats);
    }
}
