<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pengaduan Lucu ✨</title>
    <style>
        /* Reset dasar */
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background: linear-gradient(135deg, #a8edea 0%, #fed6e3 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        /* Container Kartu */
        .card {
            background: rgba(255, 255, 255, 0.95);
            padding: 2rem;
            border-radius: 25px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
            width: 100%;
            max-width: 420px; /* Diperlebar sedikit */
            text-align: center;
            transition: transform 0.3s ease;
            border: 4px solid #fff;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        /* Judul */
        h1 {
            color: #ff6b81;
            margin-bottom: 1.5rem;
            font-size: 1.5rem;
        }

        h1 span {
            font-size: 2rem;
            display: block;
            margin-bottom: 0.5rem;
        }

        /* Styling Form */
        .form-group {
            margin-bottom: 1.2rem;
            text-align: left;
        }

        label.lbl-text {
            display: block;
            margin-bottom: 0.5rem;
            color: #555;
            font-weight: bold;
            font-size: 0.9rem;
        }

        input[type="text"], textarea {
            width: 100%;
            padding: 12px 15px;
            border: 2px solid #ddd;
            border-radius: 15px;
            font-size: 1rem;
            transition: all 0.3s;
            background-color: #f9f9f9;
        }

        input[type="text"]:focus, textarea:focus {
            border-color: #ff9ff3;
            background-color: #fff;
            outline: none;
            box-shadow: 0 0 8px rgba(255, 159, 243, 0.3);
        }

        textarea {
            resize: vertical;
            min-height: 80px;
        }

        /* --- STYLE BARU UNTUK KATEGORI --- */
        .kategori-container {
            display: flex;
            justify-content: space-between;
            gap: 10px;
            margin-bottom: 1.2rem;
        }

        /* Menyembunyikan radio button asli */
        .kategori-radio {
            display: none;
        }

        /* Styling label agar terlihat seperti tombol kartu */
        .kategori-label {
            flex: 1;
            padding: 10px 5px;
            background: #f0f0f0;
            border: 2px solid transparent;
            border-radius: 15px;
            text-align: center;
            cursor: pointer;
            transition: all 0.3s;
            font-size: 0.85rem;
            font-weight: bold;
            color: #777;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .kategori-label span {
            font-size: 1.5rem;
            margin-bottom: 4px;
        }

        /* Efek saat dipilih (checked) */
        .kategori-radio:checked + .kategori-label {
            background: #fff;
            border-color: #ff9ff3;
            color: #ff6b81;
            box-shadow: 0 4px 10px rgba(255, 159, 243, 0.3);
            transform: translateY(-2px);
        }

        /* Efek saat hover */
        .kategori-label:hover {
            background: #e8e8e8;
        }
        /* ----------------------------------- */

        /* Tombol Lucu */
        button {
            background: linear-gradient(45deg, #ff9ff3, #feca57);
            border: none;
            padding: 12px 30px;
            border-radius: 50px;
            color: white;
            font-size: 1rem;
            font-weight: bold;
            cursor: pointer;
            margin-top: 10px;
            transition: transform 0.2s, box-shadow 0.2s;
            box-shadow: 0 4px 15px rgba(255, 159, 243, 0.4);
            width: 100%;
        }

        button:hover {
            transform: scale(1.02);
            box-shadow: 0 6px 20px rgba(255, 159, 243, 0.6);
        }

        button:active {
            transform: scale(0.98);
        }

        /* Notifikasi Kecil (Toast) */
        #toast {
            visibility: hidden;
            min-width: 250px;
            background-color: #333;
            color: #fff;
            text-align: center;
            border-radius: 50px;
            padding: 16px;
            position: fixed;
            z-index: 1;
            bottom: 30px;
            left: 50%;
            transform: translateX(-50%);
            font-size: 17px;
            opacity: 0;
            transition: opacity 0.5s, bottom 0.5s;
        }

        #toast.show {
            visibility: visible;
            opacity: 1;
            bottom: 50px;
        }
    </style>
</head>
<body>

    <div class="card">
        <h1><span>💌</span> Form Pengaduan</h1>
        <p style="color: #888; margin-bottom: 20px; font-size: 0.9rem;">Jangan khawatir, kami siap mendengarkan!</p>
        
        <form id="complaintForm" onsubmit="handleForm(event)">
            
            <!-- KATEGORI BARU -->
            <div class="form-group">
                <label class="lbl-text">🏷️ Pilih Kategori</label>
                <div class="kategori-container">
                    
                    <!-- Opsi Keamanan -->
                    <input type="radio" name="kategori" id="kat_keamanan" value="keamanan" class="kategori-radio" required>
                    <label for="kat_keamanan" class="kategori-label">
                        <span>🛡️</span>
                        Keamanan
                    </label>

                    <!-- Opsi Kebersihan -->
                    <input type="radio" name="kategori" id="kat_kebersihan" value="kebersihan" class="kategori-radio">
                    <label for="kat_kebersihan" class="kategori-label">
                        <span>✨</span>
                        Kebersihan
                    </label>

                    <!-- Opsi Fasilitas -->
                    <input type="radio" name="kategori" id="kat_fasilitas" value="fasilitas" class="kategori-radio">
                    <label for="kat_fasilitas" class="kategori-label">
                        <span>🏫</span>
                        Fasilitas
                    </label>

                </div>
            </div>
            <!-- SELESAI KATEGORI -->

            <div class="form-group">
                <label class="lbl-text" for="nis">🆔 NIS Kamu</label>
                <input type="text" id="nis" placeholder="Masukkan NIS..." required>
            </div>

            <div class="form-group">
                <label class="lbl-text" for="lokasi">📍 Lokasi Kejadian</label>
                <input type="text" id="lokasi" placeholder="Di mana ini terjadi?" required>
            </div>

            <div class="form-group">
                <label class="lbl-text" for="keterangan">💬 Ceritakan Detailnya</label>
                <textarea id="keterangan" placeholder="Apa yang terjadi? Cerita lengkapnya ya..." required></textarea>
            </div>

            <button type="submit">Kirim Sekarang 🚀</button>
        </form>
    </div>

    <!-- Elemen untuk pesan sukses -->
    <div id="toast">✅ Laporan terkirim! Terima kasih ya!</div>

    <script>
        // Fungsi sederhana untuk menangani pengiriman form
        function handleForm(e) {
            e.preventDefault(); // Mencegah reload halaman
            
            // Mengambil tombol untuk efek loading sementara
            const btn = e.target.querySelector('button');
            const originalText = btn.innerText;
            
            btn.innerText = "Mengirim... 💌";
            btn.style.transform = "scale(0.95)";
            btn.disabled = true; // Mencegah klik ganda

            // Simulasi pengiriman (1 detik)
            setTimeout(() => {
                // Tampilkan pesan sukses
                showToast();
                
                // Reset form
                e.target.reset();
                
                // Kembalikan tombol
                btn.innerText = originalText;
                btn.style.transform = "scale(1)";
                btn.disabled = false;
            }, 1000);
        }

        // Fungsi menampilkan notifikasi toast
        function showToast() {
            var x = document.getElementById("toast");
            x.className = "show";
            setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
        }
    </script>

</body>
</html>