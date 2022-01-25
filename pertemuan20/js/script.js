// memanggil jquery dpt mnggunakan $ . namun jika id tambahkan tanda pagar 
$(document).ready(function() {
  
  // hilangkan tombol cari dg jquery
  $('#tombol-cari').hide();


  // mmbuat event ketika keyword dituliskan cth 1 (sblm using jquery)
  // var keyword = document.getElementById('keyword');
  // keyword.addEventListener('keyup', function() {
  //   console.log('ok');
  // }); => cth 

  // mmbuat event ketika keyword dituliskan cth 2 (stlh using jquery)
  $('#keyword').on('keyup', function() {
      // munculkan icon loading
      $('.loader').show();

      // ajax menggunakan load
      // $('#container').load('ajax/mahasiswa.php?keyword=' + $('#keyword').val());



      // ajax menggunakan $.get
      $.get('ajax/mahasiswa.php?keyword=' + $('#keyword').val(), function(data) {

        $('#container').html(data);
        $('.loader').hide();

      });


  });


});