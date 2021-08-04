
  // element yang dibutuhkan
  var keyword = document.getElementById('keyword');
  var tombolCari = document.getElementById('tombol_cari');
  var tabel = document.getElementById('tabel_cari');

  // tambah event ketika keyword ditulis
  keyword.addEventListener('keyup', function() {
    // buat object ajax
    var ajax = new XMLHttpRequest();

    // cek kesiapan ajax
    ajax.onreadystatechange = function() {
        if(ajax.readyState == 4 && ajax.status == 200 ){
            tabel.innerHTML = ajax.responseText;
        }
    }

    // eksekusi ajax
    ajax.open('GET', 'ajax/nasabah.php?keyword=' + keyword.value, true);
    ajax.send();

  });