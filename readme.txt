DOKUMENTASI 

C : CREATE
U : UPDATE
R : READ
D : DELETE

ADMIN : CRUD DATA ADMIN 
	CRUD DATA USER	
	CRUD DATA JENIS PERTANDINGAN 
	CRUD DATA PERTANDINGAN	
	CRUD DATA TIKET	
	CRUD BERITA 
	VALIDASI BUKTI PEMBAYARAN 
	CD DATA PEMESANAN 

Front Office : R Data Admin
	       R Data User
	       CRU Data Jenis Pertandingan
	       CRU Data Pertandingan
	       CRU Data Tiket
	       R Berita
               Validasi Bukti Pembayaran
	       C Data Pemesanan

Content Writer : R Data Admin
	         R Data User
	       	 R Data Jenis Pertandingan
	       	 R Data Pertandingan
	       	 R Data Tiket
	         CRUD Berita

Fitur : Otomatis logout jika mengupdate data akun yang sedang login
	Otomatis set status pertandingan "Belum Dimulai" saat menambahkan data pertandingan
	Otomatis menampilan pertandingan dengan status "Belum Dimulai" saat menambahkan data Tiket
	Otomatis menampilkan berita dan jadwal pertandingan di halam web utama
	Otomatis merubah status pemesanan menjadi Selesai saat memvalidasi data
	
	Pemesanan lewat admin 
          -jika stok tiket habis maka tidak akan di tampilkan
	  - hanya menampilkan jadwal pertandingan dengan status belum dimulai
	  -Jika pembeli belum memiliki akun maka akan di buatkan secara otomatis oleh sistem dengan memasukan email
	  -Tidak perlu mengupload bukti pembayaran karena sudah otomatis "Selesai"
          -Stok Tiket akan berkurang otomatis berdasarkan jumlah tiket yang dibelidibeli
	

	