// javascript ajax untuk transaksi
  // element yang dibutuhkan
  var keyword = document.getElementById('nomor_rekening_nasabah');
  var input = document.getElementById('nasabah');

  // tambah event ketika keyword ditulis
  keyword.addEventListener('keyup', function() {
    // buat object ajax
    var ajax = new XMLHttpRequest();

    // cek kesiapan ajax
    ajax.onreadystatechange = function() {
        if(ajax.readyState == 4 && ajax.status == 200 ){
            input.innerHTML = ajax.responseText;
        }
    }

    // sebelum mengeksekusi ajax, pastikan keyword ada, jika tidak, jangan tampilkan DOM
    if(keyword != ""){
        // eksekusi ajax
        ajax.open('GET', 'ajax/transaksi_ajax.php?keyword=' + keyword.value, true);
        ajax.send();
    }
  });