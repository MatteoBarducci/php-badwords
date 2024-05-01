<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="result.php" method="POST">
        <div>
            <textarea name="paragraph" cols="30" rows="10" placeholder="Scrivi qui un paragrafo" required></textarea>
        </div>
        <div>
            <input type="text" name="word" placeholder="Scrivi qui la parola da censurare" required>
        </div>
        <div>
            <button type="submit">Invia</button>
        </div>
    </form>
</body>
</html>
