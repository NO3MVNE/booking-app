<!-- resources/views/welcome.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Booking App</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f4f4f9;
        }
        .container {
            text-align: center;
            background: white;
            padding: 50px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            font-size: 2.5em;
            margin-bottom: 20px;
            color: #333;
        }
        .buttons {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 30px;
        }
        .button {
            padding: 15px 30px;
            font-size: 1em;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            color: white;
            background-color: #007BFF;
            transition: background-color 0.3s;
        }
        .button:hover {
            background-color: #0056b3;
        }
        .nom{
            text-decoration: underline;
            font-family: sans-serif;
            font-size: large;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome to Booking App</h1>
        <p>Manage your hotel reservations easily and efficiently.</p>
        <div class="buttons">
            <a href="{{ route('internautes.index') }}" class="button">Manage Internautes</a>
            <a href="{{ route('hotels.index') }}" class="button">Manage Hotels</a>
            <a href="{{ route('reservations.index') }}" class="button">Manage Reservations</a>
        </div>
        <p class="nom">DEV202 Nouamane Lakhal</p>
    </div>
    
</body>
</html>
