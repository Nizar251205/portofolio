<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $profile['name'] }} - Kelas SI2A</title>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;600;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/gaya-halaman.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <main class="profile-page">
        <a href="{{ url('/#struktur') }}" class="back-link">
            <i class="fas fa-arrow-left"></i> Kembali ke Struktur Kelas
        </a>
        <article class="profile-panel glass-panel">
            <div class="profile-avatar avatar">
                @if($profile['photo'])
                    <img src="{{ asset($profile['photo']) }}" alt="Foto {{ $profile['name'] }}">
                @else
                    <i class="fas {{ $profile['icon'] }}"></i>
                @endif
            </div>
            <p class="profile-role">{{ $profile['role'] }}</p>
            <h1>{{ $profile['name'] }}</h1>
            <p class="profile-description">{{ $profile['description'] }}</p>
            <dl class="profile-details">
                <div>
                    <dt>Tanggal Lahir</dt>
                    <dd>{{ $profile['birth_date'] }}</dd>
                </div>
                <div>
                    <dt>Nomor Telepon</dt>
                    <dd>{{ $profile['phone'] }}</dd>
                </div>
                <div>
                    <dt>Alamat</dt>
                    <dd>{{ $profile['address'] }}</dd>
                </div>
                <div>
                    <dt>Hobi</dt>
                    <dd>{{ $profile['hobbies'] }}</dd>
                </div>
                <div>
                    <dt>Program Studi</dt>
                    <dd>{{ $profile['study_program'] }}</dd>
                </div>
            </dl>
        </article>
    </main>
</body>
</html>
