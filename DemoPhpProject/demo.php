<!DOCTYPE html>
<html>
<head>
    <title>Simple PHP Project (No Database)</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f0f4f5;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .container {
            background: white;
            padding: 25px;
            width: 450px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        input, textarea {
            width: 100%;
            padding: 10px;
            margin-top: 8px;
            border: 1px solid #bbb;
            border-radius: 5px;
            font-size: 15px;
        }
        button {
            background: #1a73e8;
            color: white;
            padding: 10px;
            width: 100%;
            border: none;
            margin-top: 12px;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background: #0b59c1;
        }
        .result {
            background: #ddf1d6;
            border-left: 5px solid #4CAF50;
            padding: 10px;
            margin-top: 15px;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Feedback Form</h2>
    <p>Please enter your name and message below:</p>

    <form method="POST">
        <label><b>Your Name</b></label>
        <input type="text" name="username" required>

        <label><b>Your Message</b></label>
        <textarea name="message" rows="4" required></textarea>

        <button type="submit">Submit</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = htmlspecialchars($_POST['username']);
        $msg = htmlspecialchars($_POST['message']);

        echo "<div class='result'>
                <h3>Thank you, $name!</h3>
                <p><b>Your message:</b> $msg</p>
              </div>";
    }
    ?>
</div>

</body>
</html>
