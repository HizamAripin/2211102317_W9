<!DOCTYPE html>
<html>
<head>
    <title>Form Kontak</title>
</head>
<body>
    <h1>Form Kontak</h1>

    @if(session('success'))
        <p style="color: green">{{ session('success') }}</p>
    @endif

    <form action="{{ route('contact.store') }}" method="POST">
        @csrf
        <label>Nama:</label>
        <input type="text" name="name" required><br><br>

        <label>Email:</label>
        <input type="email" name="email" required><br><br>

        <button type="submit">Simpan</button>
    </form>
</body>
</html>
