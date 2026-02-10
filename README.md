# PRO-SYS v2.1 (Bootstrap)

Inisiasi project **PRO-SYS (Integrated Manufacturing System)** berbasis **PHP Native + MySQL**.

## Struktur Utama

- `config/` konfigurasi aplikasi dan database.
- `layout/` komponen UI global.
- `modules/` modul bisnis per domain.
- `assets/img/signatures/` penyimpanan tanda tangan digital.
- `assets/img/ncr_proof/` penyimpanan bukti foto NCR/NG.
- `install.sql` skema database awal sesuai context v2.1.

## Menjalankan Lokal

1. Buat database dari `install.sql`.
2. Sesuaikan environment variable DB (`DB_HOST`, `DB_DATABASE`, `DB_USERNAME`, `DB_PASSWORD`) bila diperlukan.
3. Jalankan web server PHP:

```bash
php -S 0.0.0.0:8000
```

4. Akses `http://localhost:8000`.

## Catatan Roadmap Berikutnya

- Implementasi detail modul **Engineering Gatekeeper**.
- Shop floor logic **START-HOLD-CLOSE** dengan timer countdown.
- Integrasi upload dan render **digital signature** ke dokumen cetak.
