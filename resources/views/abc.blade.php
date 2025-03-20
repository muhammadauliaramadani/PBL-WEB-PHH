<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Efek Terhisap Scroll</title>
    <style>
        /* Global Styles */
        body {
            height: 200vh; /* Biar ada ruang buat scroll */
            margin: 0;
            background-color: #111;
            color: white;
            font-family: Arial, sans-serif;
            text-align: center;
        }

        /* Navbar */
        header {
            position: fixed;
            top: 0;
            width: 100%;
            background: rgba(0, 0, 0, 0.8);
            padding: 10px 0;
            text-align: center;
            z-index: 1000;
        }

        nav ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        nav ul li {
            display: inline;
            margin: 0 15px;
        }

        nav ul li a {
            color: white;
            text-decoration: none;
        }

        /* Container */
        .container {
            position: relative;
            width: 100%;
            height: 100vh; /* Biar ada area buat efek tarik */
            overflow: hidden;
        }

        /* Box */
        .box {
            width: 100px;
            height: 100px;
            background-color: red;
            border-radius: 10px;
            position: fixed;
            top: 20%;
            left: 50%;
            transform: translate(-50%, 0);
            transition: transform 0.3s ease-out;
        }
    </style>
</head>
<body>

    <header>
        <nav>
            <ul>
                <li><a href="#">Beranda</a></li>
                <li><a href="#">Tentang Kami</a></li>
                <li><a href="#">Kontak</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <div class="container">
            <div class="box"></div>
        </div>

        <h1>Web Sederhana</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque, consequatur.</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque, consequatur.</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque, consequatur.</p>
    </main>

    <script>
        window.addEventListener("scroll", () => {
            let scrollY = window.scrollY;
            let box = document.querySelector(".box");

            // Elemen bergerak turun semakin scroll ke bawah
            let newY = Math.min(50 + scrollY * 0.3, 80); // Batas maksimum 80%
            box.style.transform = `translate(-50%, ${newY}%)`;
        });
    </script>

</body>
</html>
