<?php
// Redirect to the appropriate service page based on selection
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($_POST['service'] == 'neuro-tv') {
        header("Location: neuro-tv.php");
        exit();
    } elseif ($_POST['service'] == 'neuro-radio') {
        header("Location: neuro-radio.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Welcome to Neuro - Choose Your Experience</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="landing-page">
        <header>
            <h1>Welcome to Neuro!</h1>
            <p>Choose your experience: Are you here for <strong>Video</strong> or <strong>Radio</strong>?</p>
        </header>

        <form method="POST" action="">
            <div class="options-container">
                <div class="option neuro-tv">
                    <img src="neuro-tv-logo.png" alt="Neuro TV Logo">
                    <h2>Neuro TV</h2>
                    <p>Watch live streams and video content.</p>
                    <button type="submit" name="service" value="neuro-tv" class="choose-btn">Go to Neuro TV</button>
                </div>

                <div class="option neuro-radio">
                    <img src="neuro-radio-logo.png" alt="Neuro Radio Logo">
                    <h2>Neuro Radio</h2>
                    <p>Listen to live music and radio shows.</p>
                    <button type="submit" name="service" value="neuro-radio" class="choose-btn">Go to Neuro Radio</button>
                </div>
            </div>
        </form>
    </div>

    <footer>
        <p>&copy; 2024 Neuro Media. All rights reserved.</p>
    </footer>
</body>
</html>