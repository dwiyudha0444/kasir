<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MASPOS Login</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: sans-serif;
            min-height: 100vh;
            background: linear-gradient(to bottom, #007bff 50%, #fff 50%);
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 50px;
            color: white;
        }

        .header-title {
            font-size: 24px;
            font-weight: bold;
        }

        .header-contact {
            font-size: 14px;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: calc(100vh - 100px); /* Mengurangi tinggi header */
            padding: 20px;
        }

        .form {
            background-color: #fff;
            padding: 30px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            width: 350px;
        }

        .form h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .form input[type="text"],
        .form input[type="password"] {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .form input[type="password"] {
            display: flex;
            align-items: center;
            position: relative;
        }

        .form input[type="password"]::after {
            content: "\f06e";
            font-family: FontAwesome;
            position: absolute;
            right: 12px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            color: #ccc;
        }

        .form button {
            width: 100%;
            background-color: #007bff;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-top: 10px;
        }

        .form button:hover {
            background-color: #0069d9;
        }
    </style>
</head>
<body>
    <div class="header">
        <div class="header-title">
            MASPOS
        </div>
        <div class="header-contact">
            Telp: (021) 1234-5678
        </div>
    </div>
    <div class="container">
        <div class="form">
            <h2>Login</h2>
            <form>
                <input type="text" id="username" placeholder="Username">
                <input type="password" id="password" placeholder="Password">
                <button type="submit">Login</button>
            </form>
        </div>
    </div>
</body>
</html>