function setReturnDate() {
            let borrowDate = new Date(document.getElementById("tgl_peminjaman").value);
            let returnDate = new Date(borrowDate);
            returnDate.setDate(borrowDate.getDate() + 7);

            let formattedDate = returnDate.toISOString().split('T')[0];
            
            document.getElementById("tgl_pengembalian").value = formattedDate;
}


function hitungDenda() {
  const tglPengembalian = new Date(document.getElementById('tgl_pengembalian').value);
  const bukuKembali = new Date(document.getElementById('buku_kembali').value);
  const keterlambatan = document.getElementById('keterlambatan');
  const denda = document.getElementById('denda');

  let tglPengembalianFormatted = tglPengembalian.toISOString().split('T')[0];
  let bukuKembaliFormatted = bukuKembali.toISOString().split('T')[0];
  
  if (bukuKembali > tglPengembalian) {
    keterlambatan.value = 'YA';
    denda.value = 10000
  } else {
    keterlambatan.value = 'Tidak';
    denda.value = 0;
  }
}

window.onload = function() {
  hitungDenda();
}
