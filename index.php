<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Universidad Tecnologica del Estado de Puebla</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <?php
    session_start();
    ?>
    <header>
        <nav>
           <div class="logo">
                <a href="index.php">
                    <img src="fotosbuap/logo_utp.png" alt="Logo UTP">
                </a>
            </div>
            <ul>
                <?php if (isset($_SESSION['user_id'])) { ?>
                    <li><a href="ejercicios.php">Lecciones</a></li>
                    <li><a href="logout.php">Cerrar sesión</a></li>
                <?php } else { ?>
                    <li><a href="login.php">Lecciones</a></li>
                    <li><a href="registro.php">Registro</a></li>
                    <li><a href="login.php">Iniciar sesión</a></li>
                <?php } ?>
            </ul>
        </nav>
    </header>

    <main>
        <section id="slider">
            <div class="slide">
                <img src="fotosbuap/buapinicio1.jpeg" alt="Slide 1">
            </div>
            <div class="slide">
                <img src="fotosbuap/buapinicio2.jpeg" alt="Slide 2">
            </div>
            <div class="slide">
                <img src="fotosbuap/buapinicio3.jpeg" alt="Slide 3">
            </div>
        </section>

        <section id="descripcion">
            <h2>Bienvenido a los cursos de la UTP</h2>
            <p>Aquí encontrarás lecciones interactivas para aprender y practicar conceptos</p>
        </section>

        <section id="materias">
            <div class="card">
                <img src="fotosbuap/matematicas.jpeg" alt="Matemáticas">
                <h3>Matemáticas</h3>
                <a href="ejercicios.php" class="btn">Ver curso</a>
            </div>
            <div class="card">
                <img src="fotosbuap/literatura.jpeg" alt="Literatura">
                <h3>Literatura</h3>
                <a href="literatura.php" class="btn">Ver curso</a>
            </div>
            <div class="card">
                <img src="fotosbuap/quimica.jpeg" alt="Química">
                <h3>Química</h3>
                <a href="quimica.php" class="btn">Ver curso</a>
            </div>
            <div class="card">
                <img src="fotosbuap/fisica.jpeg" alt="Física">
                <h3>Física</h3>
                <a href="fisica.php" class="btn">Ver curso</a>
            </div>
            <div class="card">
                <img src="fotosbuap/ingles.jpeg" alt="Inglés">
                <h3>Inglés</h3>
                <a href="ingles.php" class="btn">Ver curso</a>
            </div>
            <div class="card">
                <img src="fotosbuap/historia.jpeg" alt="Historia">
                <h3>Historia</h3>
                <a href="historia.php" class="btn">Ver curso</a>
            </div>
        </section>
    </main>

    <footer>
        <p>© 2024 UTP. Todos los derechos reservados.</p>
    </footer>

    <script>
        let slideIndex = 0;
        showSlides();

        function showSlides() {
            let slides = document.querySelectorAll('.slide');
            for (let i = 0; i < slides.length; i++) {
                slides[i].style.display = 'none';
            }
            slideIndex++;
            if (slideIndex > slides.length) {slideIndex = 1}
            slides[slideIndex-1].style.display = 'block';
            setTimeout(showSlides, 3000); // Cambia la imagen cada 3 segundos
        }
    </script>
</body>
</html>
