<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f5f8fa;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .card {
            background: white;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            text-align: center;
        }
        h2 {
            color: #2c7be5;
        }
        p {
            color: #333;
        }
        .success {
            background: #d4edda;
            color: #155724;
            padding: 10px;
            border-radius: 8px;
            margin-bottom: 15px;
        }
        a {
            display: inline-block;
            margin-top: 15px;
            padding: 8px 15px;
            background: #2c7be5;
            color: white;
            text-decoration: none;
            border-radius: 6px;
        }
        a:hover {
            background: #1a5fc4;
        }
    </style>
</head>
<body>
    <div class="card">
        @if(session('success'))
            <div class="success">{{ session('success') }}</div>
        @endif


        <h2>Selamat Datang di Dashboard 🎉</h2>
        <p>Kamu berhasil login ke sistem!</p>


        <a href="/auth">Logout</a>
    </div>
</body>
</html>
