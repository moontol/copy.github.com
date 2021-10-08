<!DOCTYPE html>
<html>
<head>
               <title>Note</title>
                <meta charset="utf-8" />
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <link rel="icon" type="image/png" href="book.ico"/>
                <link rel="stylesheet" type="text/css" href="kotak.css">
                <link rel="stylesheet" type="text/css" href="css.css">
</head>
<body>
                <form class="kotak" action="terima.php" method="get"> 
                     <center>   <div class="form-row form-title-row">
                                <span class="form-title">
                                 SIMPLE NOTE</span>
                                   <img src="book.ico" width="5%" height="7%" >
                        </div>

                        <textarea rows="2" cols="30" name="Judul   =" placeholder="&ensp;Tuliskan Judul disini"></textarea><br/>
                        <br>
                   
                        <textarea rows="8" cols="40" name="Message =" placeholder="&ensp;Tempelkan Isi disini "></textarea>

                        <br/>
                        <br> 
                        <input class="write" type="submit"  value="&ensp;TulisKan&ensp;">&ensp; &ensp; &ensp; &ensp;
                        <input type="reset" class="reset" value="&ensp;Reset&ensp;">
                        <br>
                        <br>
                        <a href="memeriksanote.php" class="openbook" target="blank">Lihat Catatan &rarr;</a>
                        
                        </center>

                       <a href="#popup" class="info">&ensp;More Information&ensp;</a>

                       
                </form> 

                <!--popup 1-->
               <div id="popup">
                     <div class="window">
                           <a href="#" class="close-button" title="close">x</a>
                    <p>Kamu bebas menuliskan apapun, Tapi jangan tuliskan data penting.!!!<br>Karna siapapun dapat melihatnya.</p>
                    <br>
                    <a href="#option" class="kotak-kecil">&ensp;More Option&ensp;</a>
                   &ensp; &ensp; &ensp;
                    <a href="https://biiwahyu.ga/" class="admin" target="blank">&ensp; Follow Admin &rarr;&ensp;</a>

                  </div>
               </div>


               <!--popup-option-->
               <div id="option">
                     <div class="window">
                        <a href="index.php#popup" class="close-button" title="close">x</a>
                         <center><p>Verifikasi Akses</p></center><br>
                         <form class="loginadmin" method="post" action="kodeakses.php">
                            <input type="text" name="kode" placeholder="&ensp;Kode Akses">
                            <input type="submit" name="submit" value="&ensp;verifi&ensp;">
                         </form>
                     </div>
               </div>


               <!--popup pesan -->
               <div id="option_">
                     <div class="window">
                        <a href="index.php#popup" class="close-button" title="close">x</a>
                        <center><p>Mampus Gatau Kodenya;v</p></center><br>
                         <form  method="post" action="kodeakses.php">
                            <input type="text" name="kode" placeholder="&ensp;Kode Akses">
                            <input type="submit" name="submit" value="&ensp;verifi&ensp;">
                         </form>
                         <br>
                         <a href="tombolputusasa.html" class="kotak-kecil"> &ensp; Dapatkan Kode Akses &rarr; &ensp;</a>
                     </div>
               </div>

               <!--Popup pesan jika ada penyusup-->
               <div id="nfd">
                     <div class="window">
                        <a href="#" class="close-button" title="close">x</a>
                        <center><p>Mau Akses Tapi Ga punya Kode Ya.?<br>
                           <br><h1 class="h">Mampus Kau Anjeng</h1></p></center>
                     </div>
               </div>

               <!--Popup pesan jika file catatan tidak ada-->
               <div id="notfound">
                     <div class="window">
                        <a href="#" class="close-button" title="close">x</a>
                        <center><p>Belum Ada History<br>silahkan tulis dan kamu bisa melihat tulisanmu nanti.</p></center>
                     </div>
               </div>
 
</body>
</html>