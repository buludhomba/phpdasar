// ambil elemen2 yg dibtuhkan
var keyword = document.getElementById('keyword');
  if( keyword) {
      keyword.addEventListener('keyup', function() {

        // buat objek ajax
    var xhr = new XMLHttpRequest();

    // cek kesiapan ajax
    xhr.onreadystatechange = function() {
        if( xhr.readyState == 4 && xhr.status == 200 ) {
            container.innerHTML = xhr.responseText;
        }
    }

    // eksekusi ajax
    xhr.open('GET', 'ajax/mahasiswa.php?keyword=' +keyword.value, true);
    xhr.send();

      });

  }

var tombolCari = document.getElementById('tombol-cari');
var container = document.getElementById('container');

// // tambhkn event ktika keyword ditulis
// keyword.addEventListener('keyup', function() {
    
//     // buat objek ajax
//     var xhr = new XMLHttpRequest();

//     // cek kesiapan ajax
//     xhr.onreadystatechange = function() {
//         if( xhr.readyState == 4 && xhr.status == 200 ) {
//             container.innerHTML = xhr.responseText;
//         }
//     }

//     // eksekusi ajax
//     xhr.open('GET', 'ajax/mahasiswa.php?keyword=' +keyword.value, true);
//     xhr.send();

// });