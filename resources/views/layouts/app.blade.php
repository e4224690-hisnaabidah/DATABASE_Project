<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Omah Kerang | Daftar Menu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&family=Pacifico&display=swap" rel="stylesheet">
    <style>
        body {
            background-color: #FFF0C4;
            font-family: 'Poppins', sans-serif;
            color: #3a3a3a;
        }

        /* Navbar */
        .navbar {
            background: linear-gradient(90deg, #800000, #990E0E);
            box-shadow: 0 3px 10px rgba(128, 0, 0, 0.4);
        }

        .navbar-brand {
            font-family: 'Pacifico', cursive;
            color: #FFF0C4 !important;
            font-size: 1.8rem;
            letter-spacing: 1px;
        }

        .navbar-brand:hover {
            color: white !important;
        }

        /* Hero Section */
        .hero {
            background: linear-gradient(135deg, #800000, #990E0E);
            color: #FFF0C4;
            text-align: center;
            padding: 60px 20px;
            border-radius: 20px;
            margin-bottom: 40px;
            box-shadow: 0 4px 15px rgba(128,0,0,0.3);
        }
        .hero h1 {
            font-family: 'Pacifico', cursive;
            font-size: 2.8rem;
            margin-bottom: 10px;
        }
        .hero p {
            font-size: 1.1rem;
        }

        /* Card & Table */
        .card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(128,0,0,0.15);
            background: #fff;
        }
        .card:hover {
            transform: translateY(-3px);
            transition: 0.3s;
            box-shadow: 0 6px 20px rgba(128,0,0,0.25);
        }

        table thead {
            background-color: #800000;
            color: #FFF0C4;
        }
        table tbody tr:hover {
            background-color: rgba(255, 240, 196, 0.6);
        }

        /* Button Styles */
        .btn-primary {
            background-color: #800000;
            border-color: #800000;
            font-weight: 600;
        }
        .btn-primary:hover {
            background-color: #990E0E;
        }

        .btn-success {
            background-color: #990E0E;
            border: none;
        }
        .btn-success:hover {
            background-color: #800000;
        }

        .btn-secondary {
            background-color: #FFF0C4;
            color: #800000;
            border: 2px solid #800000;
            font-weight: 600;
        }
        .btn-secondary:hover {
            background-color: #800000;
            color: #FFF0C4;
        }

        footer {
            background-color: #800000;
            color: #FFF0C4;
            text-align: center;
            padding: 15px 0;
            font-size: 0.9rem;
            border-top: 3px solid #990E0E;
            margin-top: 60px;
        }

        /* Alert */
        #alertMessage {
            animation: fadeIn 0.5s ease-in-out;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-10px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg mb-4">
        <div class="container">
            <a class="navbar-brand" href="{{ route('menus.index') }}">🍤 Omah Kerang</a>
        </div>
    </nav>

    <div class="container">
        <div class="hero">
            <h1>Daftar menu di Omah Kerang!</h1>
        </div>

        @if(session('success'))
            <div id="alertMessage" class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
            </div>
            <script>
                setTimeout(() => {
                    const alertBox = document.getElementById('alertMessage');
                    if (alertBox) {
                        alertBox.classList.remove('show');
                        alertBox.classList.add('fade');
                        setTimeout(() => alertBox.remove(), 500);
                    }
                }, 3000);
            </script>
        @endif

        @yield('content')
    </div>

    <footer>
        <p>© 2025 Omah Kerang | Rasa Laut, Bikin Ketagihan 💞</p>
    </footer>
</body>
</html>
