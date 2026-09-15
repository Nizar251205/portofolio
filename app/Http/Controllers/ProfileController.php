<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;

class ProfileController extends Controller
{
    private array $profiles = [
        'agin-sugiwa' => [
            'name' => 'Agin Sugiwa',
            'role' => 'Wali Dosen',
            'icon' => 'fa-user-tie',
            'photo' => null,
            'birth_date' => 'Belum diisi',
            'phone' => 'Belum diisi',
            'address' => 'Belum diisi',
            'hobbies' => 'Belum diisi',
            'study_program' => 'Belum diisi',
            'description' => 'Mendampingi dan membimbing kelas SI2A.',
        ],
        'al-ikhsan' => [
            'name' => 'AL Ikhsan',
            'role' => 'Ketua Kelas',
            'icon' => 'fa-crown',
            'photo' => null,
            'birth_date' => 'Belum diisi',
            'phone' => 'Belum diisi',
            'address' => 'Belum diisi',
            'hobbies' => 'Belum diisi',
            'study_program' => 'Belum diisi',
            'description' => 'Mengkoordinasikan kegiatan dan kebutuhan kelas SI2A.',
        ],
        'muhammad-nizar-zulhaqy' => [
            'name' => 'Muhammad Nizar Zulhaqy',
            'role' => 'Wakil Ketua',
            'icon' => 'fa-user-shield',
            'photo' => 'images/profil/nizar.jpeg',
            'birth_date' => '25 Desember 2005',
            'phone' => '089616760806',
            'address' => 'Kp Kalapa Dua RT12/04, Desa Cicadas, Kecamatan Binong, Kabupaten Subang.',
            'hobbies' => 'Bermain game, Bermain sepak bola, Membaca buku',
            'study_program' => 'D3 Sistem Informasi',
            'description' => 'Membantu ketua dalam mengoordinasikan kelas SI2A.',
        ],
        'aulia' => [
            'name' => 'Aulia',
            'role' => 'Sekretaris',
            'icon' => 'fa-book',
            'photo' => null,
            'birth_date' => 'Belum diisi',
            'phone' => 'Belum diisi',
            'address' => 'Belum diisi',
            'hobbies' => 'Belum diisi',
            'study_program' => 'Belum diisi',
            'description' => 'Mengelola pencatatan dan administrasi kelas SI2A.',
        ],
        'alya-putri' => [
            'name' => 'Alya Putri',
            'role' => 'Bendahara',
            'icon' => 'fa-wallet',
            'photo' => null,
            'birth_date' => 'Belum diisi',
            'phone' => 'Belum diisi',
            'address' => 'Belum diisi',
            'hobbies' => 'Belum diisi',
            'study_program' => 'Belum diisi',
            'description' => 'Mengelola pencatatan uang kas kelas SI2A.',
        ],
    ];

    public function show(string $slug): Response
    {
        abort_unless(isset($this->profiles[$slug]), 404);

        return response()->view('profil', [
            'profile' => $this->profiles[$slug],
        ]);
    }
}
