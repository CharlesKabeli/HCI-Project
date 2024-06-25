<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <style>
        /* Resetting default margin and padding for all elements */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700&display=swap');

        body {
            font-family: "Montserrat", sans-serif;
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(image/finally.webp);
            color: white;
            font-weight: bold;
        }

        .box {
            border-radius: 20px;
            width: 600px;
            padding: 30px;
            border: 2px solid orangered;
            background-color: rgba(0, 0, 0, 0.4);
            box-shadow: 1px 1px 2px yellow;
            display: flex;
            flex-direction: column;
            align-items: center; /* Align items in the center horizontally */
            text-align: center;
        }

        .wrapper {
            border: 2px solid transparent;
            display: flex;
            height: 150vh;
            align-items: center;
            justify-content: center;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: white;
        }

.form-group {
    display: flex;
    flex-direction: row; /* Adjusted to row */
    align-items: center;
    margin-bottom: 20px;
}

label {
    margin-right: 10px; /* Added margin-right */
    color: white;
}

input[type="text"],
input[type="password"],
input[type="email"] {
    font-size: 20px;
    border: 0;
    background: none;
    display: list;
    margin: 10px auto; /* Adjusted margin */
    text-align: center;
    border: 3px solid #0367fd;
    padding: 14px 10px;
    width: 220px;
    outline: none;
    color: #fff;
    border-radius: 24px;
    transition: all .2s ease-in;
}


        input[type="text"]:focus,
        input[type="password"]:focus,
        input[type="email"]:focus {
            width: 200px;
            border-color: #ffc400ec;
        }

        input[type="submit"] {
            width: 220px; /* Adjusted width */
            padding: 10px;
            border: none;
            border-radius: 3px;
            background-color: #333;
            color: #fff;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: blue;
        }

        /* Responsive styling for smaller screens */
        @media (max-width: 768px) {
            .signup-container {
                width: 90%;
            }
            input[type="text"],
            input[type="password"],
            input[type="email"],
            select {
                width: 100%;
            }
        }

        img {
            display: border;
            border-radius: 100px;
            margin-left: 10px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
<div class="wrapper">
    <div class="box">
        <div class="signup-container">
            <img src="image/mokorotlo2.jpg" alt="" width="100" height="100">
            <h2>Sign Up</h2>

<!-- ... (previous HTML) -->

<form method="post" action="process.php">
    <div class="form-group">
        <label for="firstName">Enter the first name:</label>
        <input type="text" id="firstName" name="firstName" required>
    </div>

    <div class="form-group">
        <label for="lastName">Enter the surname:</label>
        <input type="text" id="lastName" name="lastName" required>
    </div>

    <div class="form-group">
        <label for="email">Enter the email address:</label>
        <input type="email" id="email" name="email" required>
    </div>

    <div class="form-group">
        <label for="username">Enter the username:</label>
        <input type="text" id="username" name="username" required>
    </div>

    <div class="form-group">
        <label for="password">Enter the password:</label>
        <input type="password" id="password" name="password" required>
    </div>

    <input type="submit" value="Sign Up">
</form>

<!-- ... (remaining HTML) -->


        </div>
    </div>
</div>
</body>
</html>
