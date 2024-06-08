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
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://unpkg.com/rolly.js@0.2.1/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <title>Kriptografi</title>
</head>

<body>
    <main class="app">
        <header data-aos="fade-up">
            <div class="left-menu">
                <div class="logo">
                </div>
            </div>
            <div>
                <ul id="home">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                </ul>
            </div>
            <a href="kripto.php" class="btn">Caesar Cipher</a>
        </header>

        <section id="about" class="about" data-scene>
            <div class="main">
                <img src="digital.png" data-aos="zoom-out-right">
                <div class="about-text">
                    <h2 data-aos="fade-up">Kriptografi</h2>
                    <h5 data-aos="zoom-out-left"><span>Proses Utama Kriptografi:</span> </h5>
                    <p data-aos="zoom-out-left">
                        <span> Enkripsi </span>
                        <br> Enkripsi adalah proses mengubah data atau informasi asli (plaintext) menjadi bentuk yang tidak dapat dibaca atau dimengerti oleh pihak yang tidak berwenang (ciphertext). Ini dilakukan dengan menggunakan algoritma matematis yang disebut sebagai algoritma enkripsi, bersama dengan satu atau lebih kunci kriptografi. Tujuan utama enkripsi adalah untuk memastikan kerahasiaan data, sehingga jika data tersebut dicegat atau diakses oleh pihak yang tidak berwenang, data tersebut tetap tidak dapat dimengerti.
                        <br>
                        <br> 
                        <span> Deskripsi </span>
                        <br> Dekripsi adalah proses mengubah ciphertext kembali ke bentuk aslinya (plaintext) menggunakan kunci yang sesuai. Proses ini memungkinkan pihak yang berwenang untuk membaca dan memahami informasi yang telah dienkripsi. Tanpa kunci yang benar, ciphertext akan tetap tidak dapat dimengerti, sehingga menjaga kerahasiaan informasi.
                    </p>
                </div>
            </div>
        </section>

        <section>
            <footer class="main-footer" data-scene>
                <strong data-aos="zoom-out-up" data-aos-offset="0">Copyright &copy; 2024 Kriptografi</strong>
            </footer>
        </section>
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