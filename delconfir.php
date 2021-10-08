<?php
$file = "save/notebook.txt";
$tujuan = "save/sampah/catatan-lama.txt";
copy($file, $tujuan);

if (!unlink($file))
{
echo "<script>alert('Gagal Menghapus, Kamu tidak memiliki Catatan');document.location='akses-admin-page.html'</script>";
}
else 
{
echo "<script>alert('Catatan Kamu Berhasil Dihapus');document.location='akses-admin-page.html'</script>";
}

?>