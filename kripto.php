<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Scheherazade+New:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="https://unpkg.com/rolly.js@0.2.1/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <title>Kriptografi</title>
</head>
<body>
<main class="app">
	<header data-aos="fade-up">
    <div class="left-menu">
      <div class="logo">
        <a href="login.php" class="brand-link"></a>    
      </div>
    </div>
    <div>
      <ul id="home">
        <li><a href="index.php" >Home</a></li>
				<li><a href="about.php">About</a></li>
      </ul>
    </div>
  </header>

  <section data-scene><br><br><br>
  <h1 class="h1 text-gray-900 mb-4 text-center" data-aos="zoom-out" align="center">Enkripsi & Deskripsi</h1>
    <div class="row">
      <div class="column">
        <div class="card">
          <h1 align="center">Enkripsi</h1>
          <!--form input text dan key -->
          <form class="form" align="center" method="POST"> 
            <h2 class="h6 text-gray-900 mb-4 fw-blod">Input : </h2>
            <div class="form-group">
              <input id="username" type="text" name="input_text" class="form-control form-control-user" placeholder="Masukkan text" required>
            </div>
            <div class="form-group">
              <input id="username" type="number" name="input_key" class="form-control form-control-user" placeholder="Key" required>
            </div>
            <input type="submit" name="enkripsi" value="Enkripsi" class="btn1"><br><br><hr><br>
            <h2 class="h6 text-gray-900 mb-4 fw-blod">Output : </h2>
            <!-- output hasil enkripsi dan deskripsi -->
            <div class="my-2">   
              <?php 
                function cipher($char, $key){ //membuat fungsi cipher
                  if (ctype_alpha($char)) { //cek alphabet atau tidak
                    $nilai = ord(ctype_upper($char) ? 'A' : 'a'); 
                    $ch = ord($char); //konvensi ke karakter ASCII
                    $mod = fmod($ch + $key - $nilai, 26); //perhitangan modulus
                    $hasil = chr($mod + $nilai);  //hasil modulus ditambah dengan nilai dan konversi ke bentuk alphabet
                    return $hasil;
                  } else { //mengembalikan nilai inputan jika selain alphabet
                    return $char;
                  }
                }
                if(isset($_POST['enkripsi'])){ //cek enkripsi
                  $text_input = $_POST['input_text']; //deklarasi text inputan
                  $kunci = $_POST['input_key']; //deklarasi number key
                  $chars = str_split($text_input); //variabel untuk menampung data yang diinput
                  $enkripsi = ""; //variable penampung enkripsi
                  foreach ($chars as $char) { //perulangan untuk menampilkan data array
                    $enkripsi .= cipher($char, $kunci); //menjalankan fungsi cipher
                  }
                  $chars_enkripsi = str_split($enkripsi); //variabel untuk menampung data yang dienkripsi untuk dideskripsikan
                  $deskripsi = ""; //variable penampung deskripsi
                  foreach ($chars_enkripsi as $char) { //perulangan untuk menampilkan data array
                    $deskripsi .= cipher($char, 26 - $kunci); //mengembalikan fungsi cipher
                  }
                  //pemanggilan variable untuk ditampilkan di output
                  echo "	
                    <p> Hasil enkripsi : <strong>"."$enkripsi"."</strong></p> 
                    <p> Text yang dienkripsi : <strong>"."$deskripsi"."</strong></p>
                    <p> Key : <strong>"."$kunci"."</strong></p>
                  ";
                }
              ?>
            </div>
          </form>
        </div>
      </div>

      <div class="column">
        <div class="card"  >
          <h1 align="center">Deskripsi</h1>
          <!--form input text dan key -->
          <form class="form" align="center" method="POST"> 
            <h2 class="h6 text-gray-900 mb-4 fw-blod">Input : </h2>
            <div class="form-group">
              <input id="username" type="text" name="input_text" class="form-control form-control-user" placeholder="Masukkan text" required>
            </div>
            <div class="form-group">
              <input id="username" type="number" name="input_key" class="form-control form-control-user" placeholder="Key" required>
            </div>
            <input type="submit" name="deskripsi" value="Deskripsi" class="btn2">
            <br><br><hr><br>

            <h2 class="h6 text-gray-900 mb-4 fw-blod">Output : </h2>
            <!-- output hasil deskripsi -->
            <div class="my-2">
              <?php 
                function cipher2($char, $key){ //membuat fungsi cipher
                  if (ctype_alpha($char)) { //cek alphabet atau tidak
                    $nilai = ord(ctype_upper($char) ? 'A' : 'a'); 
                    $ch = ord($char); //konvensi ke karakter ASCII
                    $mod = fmod($ch + $key - $nilai, 26); //perhitangan modulus
                    $hasil = chr($mod + $nilai);  //hasil modulus ditambah dengan nilai dan konversi ke bentuk alphabet
                    return $hasil;
                  } else { //mengembalikan nilai inputan jika selain alphabet
                    return $char;
                  }
                }
                if(isset($_POST['deskripsi'])){ //cek enkripsi
                  $text_input = $_POST['input_text']; //deklarasi text inputan
                  $kunci = $_POST['input_key']; //deklarasi number key

                  $chars = str_split($text_input); //variabel untuk menampung data yang diinput
                  $deskripsi = ""; //variable penampung deskripsi

                  foreach ($chars as $char) { //perulangan untuk menampilkan data array
                    $deskripsi .= cipher($char, 26 - $kunci); //mengembalikan fungsi cipher
                  }

                  $chars_enkripsi = str_split($deskripsi); //variabel untuk menampung data yang dienkripsi untuk dienkripsikan
                  $enkripsi = ""; //variable penampung enkripsi

                  foreach ($chars_enkripsi as $char) { //perulangan untuk menampilkan data array
                    $enkripsi .= cipher($char, $kunci); //menjalankan fungsi cipher
                  }

                  //pemanggilan variable untuk ditampilkan di output
                  echo "	
                      <p> Hasil deskripsi : <strong>"."$deskripsi"."</strong></p>
                      <p> Text yang dideskripsi : <strong>"."$enkripsi"."</strong></p>
                      <p> Key : <strong>"."$kunci"."</strong></p>
                  ";

                }
              ?>
            </div>
          </form>
        </div>
      </div>
    </div>

  </section>

    <footer class="main-footer" data-scene>
      <strong data-aos="zoom-out-up" data-aos-offset="0">Copyright &copy; 2024 Kriptografi</strong>
    </footer>
</main>

    <script src="https://unpkg.com/rolly.js@0.2.1/dist/rolly.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
        const r = rolly({
        view: document.querySelector('.app'),
        native: true,
        // other options
        });
        r.init();

        AOS.init({
            duration: 1500 
        });
        
    </script>
</body>
</html>