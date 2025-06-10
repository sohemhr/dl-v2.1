<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BackupController extends Controller
{
    public function index()
    {
        $data = [
            'title'     => 'Backup Database',
            'subtitle'  => 'Backup Database Button'
        ];

        return view('user.backup.backup', $data);
    }

    public function backup(Request $request)
    {
        try {
            // Konfigurasi database
            $dbHost = env('DB_HOST');
            $dbName = env('DB_DATABASE');
            $dbUser = env('DB_USERNAME');
            $dbPass = env('DB_PASSWORD');

            // Nama file backup
            $backupFileName = 'backup_' . $dbName . '_' . date('Y-m-d_H-i-s') . '.sql';

            // Perintah mysqldump untuk backup
            $command = "mysqldump --user={$dbUser} --password={$dbPass} --host={$dbHost} {$dbName} > " . storage_path("app/backup/{$backupFileName}");

            // Eksekusi perintah
            exec($command);

            // Path file backup
            $filePath = storage_path("app/backup/{$backupFileName}");

            // Cek apakah file berhasil dibuat
            if (file_exists($filePath)) {
                // Download file backup
                return response()->download($filePath)->deleteFileAfterSend(true);
            } else {
                return redirect()->back()->with('error', 'Gagal membuat backup database.');
            }
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }
}
