<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku Tamu</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background: url(image/msg-1811202959-28636.jpg);
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            font-family: sans-serif;
        }

        .input {
            position: fixed;
            top: 50%;
            left: 570px;
            transform: translate(-30%, -50%);
            background: #dddddd;
            padding: 5%;
            width: 300px;
            border: 3px solid #0ea88f;
            border-radius: 15px;
        }

        .input h1 {
            text-align: center;
            color: black;
            font-size: 30px;
            font-family: sans-serif;
            letter-spacing: 0;
            padding-top: 0;
            margin-top: -20px;
        }

        .box-input {
            justify-content: space-between;
            margin: 5px;
            padding: 8px 0;
        }

        form {
            max-width: 500px;
            margin: auto;
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input, textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
        }

        .btn-input {
            background: #0ea88f;
            color: black;
            padding: 10px 15px;
            border: 1px solid #0ea88f;
            cursor: pointer;
            width: 40%;
            border-radius: 10px;
            font-weight: bold;
        }

        button:hover {
            background-color: #0ea88f;
        }
    </style>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $name = htmlspecialchars($_POST["name"]);
        $email = htmlspecialchars($_POST["email"]);
        $message = htmlspecialchars($_POST["message"]);

        echo "Nama: " . $name . "<br>";
        echo "Email: " . $email . "<br>";
        echo "Pesan: " . $message . "<br>";
    }
    ?>

</head>
<body>
    <div class="input">
        <h1>Buku Tamu</h1>
        <form action="#" method="post">
            <div class="box-input">
            <label for="name">Nama:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="message">Pesan:</label>
            <textarea id="message" name="message" rows="4" required></textarea>
            </div>
            <button type="submit" name="kirim" class="btn-input">Kirim</button>
        </form>
    </div>
</body>
</html>
