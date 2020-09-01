<?php
include('assets/header.php');?>


<body>
<br>
<br>
    <div class="col mb-4">
        <div class="card text-white bg-info">
        <h2 class="card-title">Tugas 1</h2>
        <p class="card-text"><h4>Buat tulisan dalam sebuah halaman pada web pribadi kalian masing-masing mengenai UDP.<br></h4></p>
        </div>
    </div>
<div class="col mb-4">
    <div class="card">
      <img src="img/udp.jpg" style="height=330; width=977;" position="relative" class="card-img-top" alt="...">
      <div class="card-body">
        <h3 class="card-title">UDP (User Datagram Protocol)</h3>
        <p class="card-text">pertama tama kita akan membahas mengenai UDP, UDP atau User datagram protocol adalah salah satu protokol lapisan transpor TCP/IP yang mendukung komunikasi yang tidak andal (unreliable), 
            tanpa koneksi (connectionless) antara host-host dalam jaringan yang menggunakan TCP/IP <br><br>
            
            <h5>UDP memiliki karakteristik sebagai berikut yaitu:</h5><br>
            1.	Connectionless (tanpa koneksi): Pesan-pesan UDP akan dikirimkan tanpa harus dilakukan proses negosiasi koneksi antara dua host yang hendak berukar informasi.<br>
            2.  Unreliable (tidak andal): Pesan-pesan UDP akan dikirimkan sebagai datagram tanpa adanya nomor urut atau pesan acknowledgment.<br>
            3.  UDP menyediakan mekanisme untuk mengirim pesan-pesan ke sebuah protokol lapisan aplikasi atau proses tertentu di dalam sebuah host dalam jaringan yang menggunakan TCP/IP. <br>
            4.  UDP menyediakan penghitungan checksum berukuran 16-bit terhadap keseluruhan pesan UDP.<br><br>

            <h5>UDP Berfungsi sebagai berikut yaitu:</h5><br>
            1. Protokol yang “ringan” (lightweight): Untuk menghemat sumber daya memori dan prosesor, beberapa protokol lapisan aplikasi membutuhkan penggunaan protokol yang 
            ringan yang dapat melakukan fungsi-fungsi spesifik dengan saling bertukar pesan.<br>
            2. Protokol lapisan aplikasi yang mengimplementasikan layanan keandalan<br>
            3. Protokol yang tidak membutuhkan keandalan. Contoh protokol ini adalah protokol Routing Information Protocol (RIP).<br>
            4. Transmisi broadcast: Karena UDP merupakan protokol yang tidak perlu membuat koneksi terlebih dahulu dengan sebuah host tertentu, maka transmisi broadcast pun dimungkinkan. <br>
            <br>
            <h5>Cara Kerja UDP</h5>
            Paket berisi port client dan port sumber berbentuk file text dikirimkan ke server dalam UDP headerPaket berisi port client dan port sumber berbentuk file audio dikirimkan ke server dalam UDP headerUDP tujuan membaca nomor port tujuan dan memproses dataPaket asli memiliki port tujuan sehingga server dapat mengirimkan data kembali ke ftfp clientUntuk point 3 dan 4 berulang lagi saat server menerima file audio dari clientsaat aplikasi yang ingin mengirim data, UDP tidak akan mem-buffer atau mem-fragmen data.Karena UDP tidak mem-fragmen data, jika data yang lebih besar dari MTU, lapisan IP yang harus mem-fragmen nya        
        
        </p>
      </div>
    </div>
  </div>
  <div class="card">
  <img src="img/cek.png" style="hight=100px;max-width: 540px;" class="card-img-right" alt="...">
  <div class="card-body">
    <h5 class="card-title">Checksum chacking</h5>
    <p class="card-text">Metode Checksum mnegecek dengan menjumlahkan sekumpulan data kemudian mengcomplement jumlahnya, lalu hasilnya ditambahkan pada data sebagai sebuah karakter. Kemudian receivernya akan menghitung ulang checksum dan dilakukan perbandingan nilai data yang dikirim dengan checksum. jikaada perbedaan nilai maka akan terjasdi error dalam pengiriman. Bedanya dengan parity check adalah jumlah bit pada sums lebih besar dan hasil penjumlahan data dengan checksum harus selalu dibuat nol.</p>
    <p class="card-text">Proses disisi pengirim/transmitter<br>
1)      Unit data dibagi ke dalam k seksi dengan masing-masing seksi berisi n-bit data.<br>
2)      Semua seksi data tersebut ditambahkan menggunakan 1’s complement untuk mendapatkan jumlahnya.<br>
3)      Jumlah tersebut kemudian dikomplemenkan dan menjadi nilai checksum.<br>
4)      Checksum dikirim bersama dengan data sebagai unit terakhir dalam paket pengiriman.<br>
<br>
Proses disisi penerima/receiver<br>
1)      Unit data yang diterima kembali dibagi ke dalam k seksi yang masing-masing seksi berisi b-bit data.<br>
2)      Semua seksi unit data tersebut dijumlahkan menggunakan 1’s complement untuk mendapatkan jumlahnya.<br>
3)      Jumlah tersebut kemudian dikomplemenkan.<br>
4)      Jika hasilnya adalah nol, maka data diterima; jika tidak, data akan ditolak.</p><br>
  </div>

</div>

  <div class="card-deck">
  <div class="card mb-3" style="max-width: 540px;">
  <div class="row">
    <div class="col-md-4">
        <br>
      <img src="img/tcpip.png" class="card-img" alt="...">

    </div>
    <div class="col-md-8">
      <div class="card-body text-white bg-info">
        <h5 class="card-title">Model TCP/IP</h5>
        <p class="card-text">Gambar disamping adalah model referensi TCP/IP, TCP/IP sebenarnya berupa sederetan protokol. Dengan kata lain, TCP/IP merupakan kumpulan protokol yang asli bermaksud membuat sebuah protokol yang dapat melintasi lingkungan jaringan yang beraneka ragam dan mempunyai kemampuan menjalankkan rute ganda untuk sampai ke tujuan akhir.<br><br><br><br><br> </p>
      </div>
    </div>
  </div>
 
</div>
<div class="card mb-3" style="max-width: 1280px;">
  <div class="row">
    <div class="col-md-4">
        <br>
      <img src="img/trans.jpg" style="hight=450px;max-width: 900px;" class="card-img" alt="...">

    </div>
    <div class="col-md-8">
      <div class="card-body text-white bg-info">
        <h5 class="card-title">Transport Layer</h5>
        <p class="card-text">Gambar disamping adalah Transport layer, Transport layer berfungsi sebagai:<br>
        1. Berfungsi untuk menerima data dari session layer,
        memecah data menjadi bagian – bagian yang lebih kecil,
        meneruskan data ke network layer dan menjamin semua
        potongan data tersebut bisa tiba di sisi penerima dengan
        benar.<br>
        2. Menentukan jenis layanan untuk session layer dan pada giliranya jenis layanan bagi para pemakai jaringan.<br>
        3. Menyediakan koneksi end to end ( ujung ke ujung ) di
        antara komputer – komputer. Memastikan ketiga layer
        terendah bekerja dengan benar serta menyediakan aliran
        data yang transparan, dan logis antara end user dengan
        jaringan yang dipilihnya.<br>
        5. Merupakan layer yang menyediakan layanan bagi user lokal.<br>
        6. Bertugas untuk menciptakanframe, memisahkannya dan menggabungkanya kembali.<br>

 </p>
      </div>
    </div>
  </div>
    </div>
</div>
<span>
<div class="col mb-4">
        <div class="card ">
        <h5 class="card-title">Mengapa model Referensi dibuat berlayer?</h5>
        <p class="card-text">a. Setiap lapisan memiliki fungsi dan proses yang berbeda.<br>
        b. Fungsi setiap lapisan dipilih berdasarkan penetapan protokol yang telah memenuhi standar internasional.<br>
        c. Sebuah lapisan harus dibuat bila diperlukan tingkat abstraksi yang berbeda.<br>
        d. Batasan lapisan harus ditentukan agar dapat meminimalkan arus informasi yang melewati interface.<br>
        e. Jumlah lapisan diusahakan sesedikit mungkin sehingga arsitektur jaringan tidak menjadi sulit dipakai.<br>
</p>
        </div>
    </div>
    <div class="card mb-3">
    <h3 class="card-title">Port Number</h3>
  <img src="img/port.jpg" style="hight=100px;max-width: 540px;" class="card-img-top" alt="...">
  <div class="card-body">

    <p class="card-text">Port adalah soket atau jack koneksi yang terletak di luar unit sistem sebagai tempat kabel-kabel yang berbeda ditancapkan. Setiap port pasti berbeda fungsi dan bentuk fisiknya. Port-port tersebut adalah port serial, port paralel, port SCSI (dibaca “scuzzy”), port USB.</p>
    <p class="card-text"><h5>Apa Fugsi Port ?</h5>
Selama ini kita biasanya memanfaatkan port-port tersebut untuk mentransmisikan data.<br>
1. Port serial digunakan untuk mentransmisikan data dari jarak jauh secara lambat, seperti keyboard, mouse, monitor, dan modem dial-up. <br>
2. Port paralel untuk mentransmisikan data pada jarak yang pendek secara cepat. Port ini sering dipakai untuk menghubungkan printer, disk eksternal, atau tape magnetik untuk bacup. <br>
3. Port SCSI (small computer system interface), untuk mentransmisikan data secara cepat bahkan dapat dipakai untuk 7 alat sekaligus atau “daisy chain“. Contoh daisy chain : dari SCSI kontroller kemudian disambungkan ke perangkat hardisk drive 
    eksternal, dari HDD eksternal disambungkan secara seri ke perangkat yang lain seperti tape drive, kemudian dari tape drive tsb bisa juga disambungkan ke CD/DVD drive dan seterusnya. <br>
4. Port USB (universal serial bus), untuk mentransmisikan data hingga 127 periferal dalam rangkaian daisy chain. <br>
5. Port tambahan khusus seperti : FireWire, MIDI, IrDa, Bluetooth, dan ethernet. Fire Wire berfungsi untuk camcorder, pemutar DVD, dan TV. Sedangkan port MIDI (musical instrument
    digital interface) untuk menghubungkan instrumen musik. Kemudian port IrDA (Infrared Data Association) untuk koneksi nirkabel sejauh beberapa kaki. Port Bluetooth adalah gelombang radio jarak pendek yang bisa menstransmisikan sejauh 9 m. <br>
6. Port ethernet adalah untuk LAN.</p><br>
  </div>
</div>

<?php
include('assets/footer.php');
?>