<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Kelas SI2A</title>
    <meta name="description" content="Informasi Struktur Kelas, Jadwal Piket, dan Uang Kas Kelas SI2A">
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;600;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/gaya-halaman.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <nav class="navbar">
        <div class="logo">Kelas <span>SI2A</span></div>
        <ul class="nav-links">
            <li><a href="#home">Beranda</a></li>
            <li><a href="#struktur">Struktur</a></li>
            <li><a href="#piket">Jadwal Piket</a></li>
            <li><a href="#kas">Uang Kas</a></li>
        </ul>
        <div class="mobile-menu-btn"><i class="fas fa-bars"></i></div>
    </nav>

    <main>
        <!-- Hero Section -->
        <section id="home" class="hero">
            <div class="hero-content">
                <h1>Selamat Datang di <br><span class="gradient-text">Kelas SI2A</span></h1>
                <p>Website resmi kelas yang menyediakan informasi seputar struktur kelas, jadwal piket harian, serta transparansi pencatatan uang kas.</p>
                <a href="#struktur" class="btn primary-btn">Jelajahi Kelas</a>
            </div>
            <div class="hero-image">
                <div class="shape shape-1"></div>
                <div class="shape shape-2"></div>
                <div class="shape shape-3"></div>
            </div>
        </section>

        <!-- Struktur Kelas -->
        <section id="struktur" class="section">
            <h2 class="section-title">Struktur <span class="gradient-text">Organisasi</span></h2>
            <div class="org-chart">
                <a href="{{ route('profil', 'agin-sugiwa') }}" class="card chief profile-card">
                    <div class="avatar"><i class="fas fa-user-tie"></i></div>
                    <h3>Agin Sugiwa</h3>
                    <p>Wali Dosen</p>
                </a>
                <div class="connector"></div>
                <div class="leadership-row">
                    <a href="{{ route('profil', 'al-ikhsan') }}" class="card leader profile-card">
                        <div class="avatar"><i class="fas fa-crown"></i></div>
                        <h3>AL Ikhsan</h3>
                        <p>Ketua Kelas</p>
                    </a>
                    <a href="{{ route('profil', 'muhammad-nizar-zulhaqy') }}" class="card vice-leader profile-card">
                        <div class="avatar"><i class="fas fa-user-shield"></i></div>
                        <h3>Muhammad Nizar Zulhaqy</h3>
                        <p>Wakil Ketua</p>
                    </a>
                </div>
                <div class="row">
                    <a href="{{ route('profil', 'aulia') }}" class="card profile-card">
                        <div class="avatar"><i class="fas fa-book"></i></div>
                        <h3>Aulia</h3>
                        <p>Sekretaris</p>
                    </a>
                    <a href="{{ route('profil', 'alya-putri') }}" class="card profile-card">
                        <div class="avatar"><i class="fas fa-wallet"></i></div>
                        <h3>Alya Putri</h3>
                        <p>Bendahara</p>
                    </a>
                </div>
            </div>
        </section>

        <!-- Jadwal Piket -->
        <section id="piket" class="section">
            <h2 class="section-title">Jadwal <span class="gradient-text">Piket</span></h2>
            <div class="schedule-grid">
                <div class="schedule-card">
                    <div class="day-header">Senin</div>
                    <ul>
                        <li>Mahasiswa 1</li>
                        <li>Mahasiswa 2</li>
                        <li>Mahasiswa 3</li>
                    </ul>
                </div>
                <div class="schedule-card">
                    <div class="day-header">Selasa</div>
                    <ul>
                        <li>Mahasiswa 6</li>
                        <li>Mahasiswa 7</li>
                        <li>Mahasiswa 8</li>
                    </ul>
                </div>
                <div class="schedule-card">
                    <div class="day-header">Rabu</div>
                    <ul>
                        <li>Mahasiswa 11</li>
                        <li>Mahasiswa 12</li>
                        <li>Mahasiswa 13</li>
                    </ul>
                </div>
                <div class="schedule-card">
                    <div class="day-header">Kamis</div>
                    <ul>
                        <li>Mahasiswa 16</li>
                        <li>Mahasiswa 17</li>
                        <li>Mahasiswa 18</li>
                    </ul>
                </div>
                <div class="schedule-card">
                    <div class="day-header">Jumat</div>
                    <ul>
                        <li>Mahasiswa 21</li>
                        <li>Mahasiswa 22</li>
                        <li>Mahasiswa 23</li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- Uang Kas -->
        <section id="kas" class="section">
            <h2 class="section-title">Pencatatan <span class="gradient-text">Uang Kas</span></h2>
            
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul style="padding-left: 20px;">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="kas-dashboard">
                <div class="balance-card">
                    <h3>Total Saldo</h3>
                    <div class="balance-amount">Rp {{ number_format($totalBalance ?? 0, 0, ',', '.') }}</div>
                </div>
                
                <div class="kas-form glass-panel">
                    <h3>Tambah Transaksi</h3>
                    <form action="/transaction" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="type">Jenis</label>
                            <select id="type" name="type" required>
                                <option value="in">Pemasukan (Bayar Kas)</option>
                                <option value="out">Pengeluaran (Beli Keperluan)</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="name">Keterangan / Nama</label>
                            <input type="text" id="name" name="name" placeholder="Cth: Budi bayar kas / Beli spidol" required>
                        </div>
                        <div class="form-group">
                            <label for="amount">Nominal (Rp)</label>
                            <input type="number" id="amount" name="amount" placeholder="Cth: 5000" min="1" required>
                        </div>
                        <button type="submit" class="btn primary-btn w-100">Simpan Transaksi</button>
                    </form>
                </div>
            </div>

            <div class="transactions-container glass-panel mt-2">
                <h3>Riwayat Transaksi</h3>
                <div class="table-responsive">
                    <table class="transaction-table">
                        <thead>
                            <tr>
                                <th>Tanggal</th>
                                <th>Keterangan</th>
                                <th>Jenis</th>
                                <th>Nominal</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($transactions as $trx)
                                <tr>
                                    <td>{{ \Carbon\Carbon::parse($trx->date)->format('d M Y') }}</td>
                                    <td>{{ $trx->name }}</td>
                                    <td>
                                        <span class="{{ $trx->type == 'in' ? 'type-in' : 'type-out' }}">
                                            @if($trx->type == 'in')
                                                <i class="fas fa-arrow-down"></i> Pemasukan
                                            @else
                                                <i class="fas fa-arrow-up"></i> Pengeluaran
                                            @endif
                                        </span>
                                    </td>
                                    <td class="{{ $trx->type == 'in' ? 'type-in' : 'type-out' }}">
                                        {{ $trx->type == 'in' ? '+' : '-' }}Rp {{ number_format($trx->amount, 0, ',', '.') }}
                                    </td>
                                    <td>
                                        <form action="/transaction/{{ $trx->id }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus transaksi ini?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn-delete">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" style="text-align: center; color: var(--text-secondary);">Belum ada data transaksi</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; 2026 Kelas SI2A. All rights reserved.</p>
    </footer>

    <script src="{{ asset('js/interaksi-halaman.js') }}"></script>
</body>
</html>
