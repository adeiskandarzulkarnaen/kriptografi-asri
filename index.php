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
    <link rel="stylesheet" href="https://unpkg.com/rolly.js@0.2.1/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="style.css">
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
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
            </ul>
        </div>
        <a href="kripto.php" class="btn">Caesar Cipher</a>
    </header>

    <section class="background" data-scene>
        <div class="container centered-text">
            <div class="text" data-aos="zoom-out" data-aos-delay="1000">
                <h1>ASRI NURJATI RAHAYU (2006028)<br>TUGAS AKHIR MATAKULIAH KRIPTOGRAFI</h1>
            </div>
        </div>
    </section>
</main>

<script src="https://unpkg.com/rolly.js@0.2.1/dist/rolly.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script>
    const r = rolly({
        view: document.querySelector('.app'),
        native: true,
    });
    r.init();

    AOS.init({
        duration: 1500 
    });
</script>
</body>
</html>
