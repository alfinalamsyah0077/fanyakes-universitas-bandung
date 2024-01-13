<?php 
$koneksi = mysqli_connect("localhost", "root", "", "rawat_inap");

$Tanggal = $_POST["tanggal"];
$Jam= $_POST["jam"];
$No_Rekam_Medis = $_POST["nomor_rm"];
$NIK = $_POST["nomor_nik"];
$Nama = $_POST["nama_lengkap"];
$Tanggal_Lahir = $_POST["tanggal_lahirri"];
$Jenis_Kelamin= $_POST["jeniskelamin"];
$Persetujuan_Pasien= $_POST["persetujuanpasien"];
$Informasi_Ketentuan_Pembayaran = $_POST["KetentuanPembayaran"];
$Informasi_tentang_Hak_dan_Kewajiban_Pasien= $_POST["InformasitentangHakdanKewajibanPasien"];
$Informasi_tentang_Tata_Tertib_RS = $_POST["InformasitentangTataTertibRS"];
$Kebutuhan_Penterjemah_Bahasa = $_POST["KebutuhanPenterjemahBahasa"];
$Kebutuhan_Rohaniawan= $_POST["KebutuhanRohaniawan"];
$Pelepasan_Informasi_atau_Kerahasiaan_Informasi = $_POST["PelepasanInformasi"];
$Hasil_Pemeriksaan_dapat_Diberikan_kepada_Pihak_Penjamin = $_POST["Hasil"];
$Hasil_Pemeriksaan_Penunjang_dapat_Diakses_oleh_Peserta_Didik = $_POST["HasilPemeriksaan"];
$Anggota_Keluarga_Lain_yang_dapat_Diberikan_Informasi = $_POST["AnggotaKeluarga"];
$Fasyankes_tertentu_dalam_rangka_rujukan = $_POST["Fasyankes"];
$Submit = $_POST["submit"];

// form rawat inap
$Tanngal_Masuk = $_POST["Tanggal_Masuk"];
$Tanggal_Keluar = $_POST["Tanggal_Keluar"];
$Kelas_Perawatan = $_POST["KelasPerawatan"];
$Ruangan = $_POST["Ruangan"];
$Lantai = $_POST["Lantai"];
$Tempat_Tidur = $_POST["A"];
$Keluhan_Utama = $_POST["KeluhanUtama"];
$Riwayat_Penyakit = $_POST["RiwayatPenyakit"];
$Riwayat_Alergi = $_POST["RiwayatAlergi"];
$Riwayat_Pengobatan = $_POST["RiwayatPengobatan"];
$Tingkat_Kesadaran = $_POST["TingkatKesadaran"];
$Denyut_Jantung = $_POST["DenyutJantung"];
$Pernapasan = $_POST["Pernapasan"];
$Systole = $_POST["Systole"];
$Diastole = $_POST["Diastole"];
$Suhu_Tubuh = $_POST["SuhuTubuh"];
$Kepala = $_POST["Kepala"];
$Mata = $_POST["Mata"];
$Telinga = $_POST["Telinga"];
$Hidung = $_POST["Hidung"];
$Rambut = $_POST["Rambut"];
$Bibir = $_POST["Bibir"];
$Gigi_geligi = $_POST["GigiGeligi"];
$Lidah = $_POST["Lidah"];
$Langit_langit = $_POST["Langit_langit"];
$Leher = $_POST["Leher"];
$Tenggorokan = $_POST["Tenggorokan"];
$Tonsil = $_POST["Tonsil"];
$Dada = $_POST["Dada"];
$Payudara = $_POST["Payudara"];
$Punggung = $_POST["Punggung"];
$Perut = $_POST["Perut"];
$Genital = $_POST["Genital"];
$Anus_atau_dubur = $_POST["Anus/dubur"];
$Lengan_atas = $_POST["Lenganatas"];
$Lengan_bawah = $_POST["Lenganbawah"];
$Jari_tangan = $_POST["Jaritangan"];
$Kuku_tangan = $_POST["Kukutangan"];
$Persendian_tangan = $_POST["Persendiantangan"];
$Tungkai_atas = $_POST["Tungkaiatas"];
$Tungkai_bawah = $_POST["Tungkaibawah"];
$Jari_kaki = $_POST["Jarikaki"];
$Kuku_kaki = $_POST["Kukukaki"];
$Persendian_kaki = $_POST["Persendiankaki"];
$Status_psikologis = $_POST["Statuspsikologis"];
$Sosial_ekonomi = $_POST["Socialekonomi"];
$Spiritual = $_POST["Spiritual"];
$Nama_Obat_yang_digunakan = $_POST["Namaobatyangunakan"];
$Dosis = $_POST["Dosis"];
$Waktu_Penggunaan = $_POST["WaktuPenggunaan"];
$Perencanaan_Pemulangan_Pasien = $_POST["PerencanaanPemulanganPasien"];
$Rencana_Rawat = $_POST["RencanaRawat"];
$Instruksi_Medis_dan_Keperawatan = $_POST["InstruksiMedisdanKeperawatan"];


// pemeriksaan penunjang
$Jam_pemeriksaan = $_POST["jam"];
$Tanggal_periksa= $_POST["tanggal"];
$Status_Puasa_Pasien = $_POST["StatusPuasaPasien"];
$Diagnosis_Awal_Masuk= $_POST["DiagnosisAwal/Masuk"];
$Diagnosis_Primer_atau_Utama= $_POST["DiagnosisPrimer/Utama"];
$Diagnosis_Sekunder_atau_Penyerta = $_POST["DiagnosisSekunder/Penyerta"];
$Nama_Pasien = $_POST["NamaPasien"];
$Nama_Dokter_Yang_Memberi_Penjelasan = $_POST["NamaDokter"];
$Nama_Petugas_Yang_Mendampingi= $_POST["NamaPetugasyangmendapingi"];
$Nama_Keluarga_Pasien= $_POST["NamaKeluargaPasien"];
$Tindakan_Yang_Dilakukan = $_POST["TindakanYangDilakukan"];
$Konsekuensi_Dari_Tindakan= $_POST["KonsekuensiDariTindakan"];
$Persetujuan_atau_Penolakan_Tindakan= $_POST["Persetujuan/PenolakanTindakan"];
$Tanggal_Pemberian_Penjelasan_Tindakan = $_POST["TanggalPemberianPenjelasanTindakan"];
$Kondisi_Saat_Meninggalkan_Rumah_Sakit= $_POST["KondisiSaatMeninggalkanRumahSakit"];
$Rencana_Tindak_Lanjut = $_POST["RencanaTindakLanjut"];
$Kontrol_ke = $_POST["kontrolke"];
$Kontrol_tindak_lanjut = $_POST["Tanggaltindaklanjut"];
$Dalam_Keadaan_Darurat_Dapat_Menghubung = $_POST["DalamKeadaanDaruratDapatMenghubungi"];
$Sarana_transportasi_untuk_rujuk = $_POST["DalamKeadaanDaruratDapatMenghubungi"];

// laboratorium
$Nama_Pemeriksaan = $_POST["NamaPemeriksaan"];
$Nomor_Permintaan = $_POST["NomorPermintaan"];
$Waktu_Permintaan = $_POST["WaktuPermintaan"];
$Dokter_Pengirim= $_POST["DokterPengirim"];
$No_Telepon_Dokter_Pengirim= $_POST["NoTeleponDokterPengirim"];
$Nama__FANYAKES_yang_Mengirim_Spesimen_Klinis = $_POST["NamaFasilitasPelayananKesehatan"];
$Unit_Pengirim= $_POST["UnitPengirim"];
$Prioritas_Pemeriksaan= $_POST["PrioritasPemeriksaan"];
$Diagnosis_atau_Masalah = $_POST["Diagnosis/Masalah"];
$Catatan_Permintaan = $_POST["CatatanPermintaan"];
$Metode_Pengiriman_Hasil = $_POST["MetodePengirimanHasil"];
$Asal_Sumber_Spesimen_Klinis = $_POST["AsalSumberSpesimenKlinis"];
$Lokasi_Pengambilan_Spesimen_Klinis = $_POST["LokasiPengambilanSpesimenKlinis"];
$Jumlah_Spesimen_Klinis = $_POST["JumlahSpesimenKlinis"];
$Volume_Spesimen_Klinis = $_POST["VolumeSpesimenKlinis"];
$Metode_Pengambilan_Spesimen_Klinis = $_POST["Cara/MetodePengambilanSpesimenKlinis"];
$Waktu_Pengambilan_Spesimen_Klinis = $_POST["WaktuPengambilanSpesimenKlinis"];
$Kondisi_Spesimen_Klinis_pada_saat_Pengambilan = $_POST["KondisiSpesimenKlinispadasaatPengambilan"];
$Waktu_Fiksasi_Spesimen_Klinis = $_POST["WaktuFiksasiSpesimenKlinis"];
$Cairan_Fiksasi = $_POST["CairanFiksasi(ml)"];
$Volume_Cairan_Fiksasi = $_POST["VolumeCairanFiksasi(ml)"];
$Nama_Petugas_yang_Mengambil_Spesimen_Klinis = $_POST["NamaPetugasyangMengambilSpesimenKlinis"];
$Nama_Petugas_yang_Mengantarkan_Spesimen_Klinis = $_POST["NamaPetugasyangMengantarkanSpesimenKlinis"];
$Nama_Petugas_yang_Menerima_Spesimen_Klinis = $_POST["NamaPetugasyangMenerimaSpesimenKlinis"];
$Nama_Petugas_yang_Menganalisis_Spesimen_Klinis= $_POST["NamaPetugasyangMenganalisisSpesimenKlinis"];
$Waktu_Pengujian_dan_Pengolahan_Spesimen_Klinis= $_POST["WaktuPemeriksaan/PengujiandanPengolahanSpesimenKlinis"];
$Hasil_Pemeriksaan = $_POST["HasilPemeriksaan"];
$Interpretasi_Hasil_Pemeriksaan = $_POST["InterpretasiHasilPemeriksaan"];
$Nama_Dokter_yang_Memvalidasi_Hasil_Pemeriksa = $_POST["NamaDokteryangMemvalidasi"];
$Nama_Dokter_yang_Menginterpretasi_Hasil_Pemeriksaan = $_POST["NamaDokteryangMenginterpretasiHasilPemeriksaan"];
$Waktu_Hasil_Pemeriksaan_Keluar_dari_Laboratorium = $_POST["WaktuHasilPemeriksaanKeluardariLaboratorium"];
$Waktu_Hasil_Pemeriksaan_Laboratorium_Diterima_Unit_Pengirim = $_POST["WaktuHasilPemeriksaanLaboratoriumDiterimaUnitPengirim"];
$Nama_Fasilitas_Kesehatan_yang_Melakukan_Pemeriksaan= $_POST["NamaFasilitasKesehatanyangMelakukanPemeriksaan"];

// RADIOLOGI
$Nama_Pemeriksaan_Radiologi = $_POST["NamaPemeriksaanRadiologi"];
$Jenis_Pemeriksaan_Radiologi = $_POST["JenisPemeriksaanRadiologi"];
$Nomor_Permintaan_Radiologi = $_POST["NomorPermintaanRadiologi"];
$Waktu_Permintaan_Radiologi = $_POST["WaktuPermintaanRadiologi"];
$Dokter_Pengirim_Radiologi= $_POST["DokterPengirimRadiologi"];
$No_Telpon_Dokter_Pengirim= $_POST["NomorTeleponDokterPengirim"];
$Nama_Fasilitas_Kesehatan_yang_Mengirim_Permintaan_Radiologi = $_POST["NamaFasilitasKesehatanyangMengirimPermintaanRadiologi"];
$Unit_Pengirim_Permintaan_Radiologi = $_POST["UnitPengirimPermintaanRadiologi"];
$Prioritas_Pemeriksaan_Radiologi = $_POST["PrioritasPemeriksaanradiologi"];
$Diagnosis= $_POST["DiagnosisKerja/Masalahradiologi"];
$Catatan_Permintaan_Radiologi = $_POST["CatatanPermintaanradiologi"];
$Metode_Penyampaian_Hasil_Pemeriksaan_Radiologi = $_POST["MetodePengirimanHasilradiologi"];
$Status_Alergi_Pasien_terhadap_Bahan_Kontras= $_POST["StatusAlergiPasienterhadapBahanKontras/ZatLainnya"];
$Status_Kehamilan= $_POST["StatusKehamilan"];
$Tanggal_dan_Waktu_Pemeriksaan_Radiologi = $_POST["TanggaldanWaktuPemeriksaanRadiologi"];
$Jenis_Bahan_Kontras= $_POST["JenisBahanKontras"];
$Nama_Dokter_yang_Menginterpretasi_Hasil_Pemeriksaan= $_POST["NamaDokteryangMenginterpretasiHasilPemeriksaan"];
$Interpretasi_Radiologi= $_POST["InterpretasiRadiologi"];

// TERAPI
$Nama_Tindakan = $_POST["NamaTindakandanKodeICD9"];
$Petugas_yang_Melaksanakan = $_POST["PetugasyangMelaksanakan"];
$Tanggal_Pelaksanaan_Tindakan = $_POST["TanggalPelaksanaanTindakan"];
$Waktu_Mulai_Tindakan = $_POST["WaktuMulaiTindakan"];
$Waktu_Selesai_Tindakan= $_POST["WaktuSelesaiTindakan"];
$Alat_Medis_yang_Digunakan= $_POST["AlatMedisyangDigunakan"];
$BMHP = $_POST["BMHP"];
$Tanggal_Penulisan_Resep = $_POST["TanggalPenulisanResep"];
$ID_Resep = $_POST["IDResep"];
$Nama_Obat= $_POST["NamaObat"];
$ID_Obat = $_POST["IDObat"];
$Bentuk = $_POST["Bentuk/Sediaan"];
$Jumlah_Obat = $_POST["JumlahObat"];
$Rute_Pemberian = $_POST["Metode/RutePemberian"];
$Dosis_Obat_yang_Diberikan = $_POST["DosisObatyangDiberikan"];
$Unit = $_POST["Unitradiologi"];
$Frekuensi_atau_Interval = $_POST["Frekuensi/Interval"];
$Aturan_Tambahan = $_POST["AturanTambahan"];
$Catatan_Resep = $_POST["StatusResep"];
$Dokter_Penulis_Resep = $_POST["Dokteryangmenulisresep"];

$query1 = "INSERT INTO  general_consent VALUES('$Tanggal','$Jam','$No_Rekam_Medis','$NIK','$Nama','$Tanggal_Lahir','$Jenis_Kelamin','$Persetujuan_Pasien','$Informasi_Ketentuan_Pembayaran','$Informasi_tentang_Hak_dan_Kewajiban_Pasien',
'$Informasi_tentang_Tata_Tertib_RS','$Kebutuhan_Penterjemah_Bahasa','$Kebutuhan_Rohaniawan',
'$Pelepasan_Informasi_atau_Kerahasiaan_Informasi','$Hasil_Pemeriksaan_dapat_Diberikan_kepada_Pihak_Penjamin',
'$Hasil_Pemeriksaan_Penunjang_dapat_Diakses_oleh_Peserta_Didik',
'$Anggota_Keluarga_Lain_yang_dapat_Diberikan_Informasi','$Fasyankes_tertentu_dalam_rangka_rujukan','$Submit')";

mysqli_query($koneksi, $query1);

$query2 = "INSERT INTO rawat_inap VALUES('$No_Rekam_Medis','$NIK','$Nama','$Tanngal_Masuk','$Tanggal_Keluar','$Kelas_Perawatan',
'$Ruangan','$Lantai','$Tempat_Tidur','$Keluhan_Utama',
'$Riwayat_Penyakit','$Riwayat_Alergi','$Riwayat_Pengobatan',
'$Tingkat_Kesadaran','$Denyut_Jantung','$Pernapasan','$Systole',
'$Diastole','$Suhu_Tubuh','$Kepala','$Mata','$Telinga','$Hidung',
'$Rambut','$Bibir','$Gigi_geligi','$Lidah','$Langit_langit','$Leher ',
'$Tenggorokan','$Tonsil','$Dada','$Payudara','$Punggung','$Perut',
'$Genital','$Anus_atau_dubur','$Lengan_atas','$Lengan_bawah','$Jari_tangan',
'$Kuku_tangan','$Persendian_tangan','$Tungkai_atas','$Tungkai_bawah',
'$Jari_kaki','$Kuku_kaki','$Persendian_kaki','$Status_psikologis',
'$Sosial_ekonomi','$Spiritual','$Nama_Obat_yang_digunakan',
'$Dosis','$Waktu_Penggunaan','$Perencanaan_Pemulangan_Pasien',
'$Rencana_Rawat','$Instruksi_Medis_dan_Keperawatan','$Submit')";

mysqli_query($koneksi, $query2);

$query3 = "INSERT INTO penunjang VALUES('$No_Rekam_Medis','$NIK','$Nama',
'$Jam_pemeriksaan','$Tanggal_periksa','$Status_Puasa_Pasien',
'$Diagnosis_Awal_Masuk','$Diagnosis_Primer_atau_Utama',
'$Diagnosis_Sekunder_atau_Penyerta','$Nama_Pasien',
'$Nama_Dokter_Yang_Memberi_Penjelasan','$Nama_Petugas_Yang_Mendampingi',
'$Nama_Keluarga_Pasien','$Tindakan_Yang_Dilakukan','$Konsekuensi_Dari_Tindakan','$Persetujuan_atau_Penolakan_Tindakan',
'$Tanggal_Pemberian_Penjelasan_Tindakan',
'$Kondisi_Saat_Meninggalkan_Rumah_Sakit',
'$Rencana_Tindak_Lanjut','$Kontrol_ke','$Kontrol_tindak_lanjut',
'$Dalam_Keadaan_Darurat_Dapat_Menghubung',
'$Sarana_transportasi_untuk_rujuk','$Submit')";

mysqli_query($koneksi, $query3);

$query4 = "INSERT INTO laboratorium VALUES ('$No_Rekam_Medis','$NIK','$Nama',
'$Nama_Pemeriksaan ','$Nomor_Permintaan','$Waktu_Permintaan',
'$Dokter_Pengirim','$No_Telepon_Dokter_Pengirim',
'$Nama__FANYAKES_yang_Mengirim_Spesimen_Klinis',
'$Unit_Pengirim','$Prioritas_Pemeriksaan','$Diagnosis_atau_Masalah',
'$Diagnosis_atau_Masalah','$Metode_Pengiriman_Hasil',
'$Asal_Sumber_Spesimen_Klinis','$Lokasi_Pengambilan_Spesimen_Klinis',
'$Jumlah_Spesimen_Klinis','$Volume_Spesimen_Klinis'
,'$Metode_Pengambilan_Spesimen_Klinis',
'$Waktu_Pengambilan_Spesimen_Klinis',
'$Kondisi_Spesimen_Klinis_pada_saat_Pengambilan',
'$Waktu_Fiksasi_Spesimen_Klinis','$Cairan_Fiksasi','$Volume_Cairan_Fiksasi',
'$Nama_Petugas_yang_Mengambil_Spesimen_Klinis',
'$Nama_Petugas_yang_Mengantarkan_Spesimen_Klinis',
'$Nama_Petugas_yang_Menerima_Spesimen_Klinis','$Nama_Petugas_yang_Menganalisis_Spesimen_Klinis',
'$Waktu_Pengujian_dan_Pengolahan_Spesimen_Klinis','$Hasil_Pemeriksaan',
'$Interpretasi_Hasil_Pemeriksaan','$Nama_Dokter_yang_Memvalidasi_Hasil_Pemeriksa',
'$Nama_Dokter_yang_Menginterpretasi_Hasil_Pemeriksaan',
'$Waktu_Hasil_Pemeriksaan_Keluar_dari_Laboratorium',
'$Waktu_Hasil_Pemeriksaan_Laboratorium_Diterima_Unit_Pengirim',
'$Nama_Fasilitas_Kesehatan_yang_Melakukan_Pemeriksaan','$Submit')";

mysqli_query($koneksi,$query4);

$query5 = "INSERT INTO radiologi VALUES ('$No_Rekam_Medis','$NIK','$Nama',
'$Nama_Pemeriksaan_Radiologi','$Jenis_Pemeriksaan_Radiologi',
'$Nomor_Permintaan_Radiologi ','$Waktu_Permintaan_Radiologi',
'$Dokter_Pengirim_Radiologi','$No_Telpon_Dokter_Pengirim',
'$Nama_Fasilitas_Kesehatan_yang_Mengirim_Permintaan_Radiologi',
'$Unit_Pengirim_Permintaan_Radiologi','$Prioritas_Pemeriksaan_Radiologi',
'$Diagnosis','$Catatan_Permintaan_Radiologi ','$Metode_Penyampaian_Hasil_Pemeriksaan_Radiologi',
'$Status_Alergi_Pasien_terhadap_Bahan_Kontras','$Status_Kehamilan',
'$Tanggal_dan_Waktu_Pemeriksaan_Radiologi','$Jenis_Bahan_Kontras',
'$Nama_Dokter_yang_Menginterpretasi_Hasil_Pemeriksaan',
'$Interpretasi_Radiologi','$Submit')";

mysqli_query($koneksi,$query5);

$query6 = "INSERT INTO terapi VALUES ('$No_Rekam_Medis','$NIK','$Nama',
'$Nama_Tindakan','$Petugas_yang_Melaksanakan',
'$Tanggal_Pelaksanaan_Tindakan','$Waktu_Mulai_Tindakan',
'$Waktu_Selesai_Tindakan','$Alat_Medis_yang_Digunakan','$BMHP',
'$Tanggal_Penulisan_Resep','$ID_Resep','$Nama_Obat','$ID_Obat',
'$Bentuk','$Jumlah_Obat ','$Rute_Pemberian','$Dosis_Obat_yang_Diberikan',
'$Unit','$Frekuensi_atau_Interval','$Aturan_Tambahan','$Catatan_Resep',
'$Dokter_Penulis_Resep','$Submit')";

mysqli_query($koneksi,$query6);

?>