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

        body {
          font-family: Arial, sans-serif;
          background-color: #f4f4f4;
        }

        .signup-container {
          width: 500px;
          margin: 50px auto;
          background-color: #fff;
          padding: 30px;
          border-radius: 5px;
          box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .below-names input[type="text"]{
            text-align:left;
            width:100%;}
         .below-names input[type="password"]{
            text-align:left;
            width:100%;}
          .below-names input[type="email"]{
            text-align:left;
            width:100%;}
          .below-names select{
            text-align:left;
            width:100%;}

        h2 {
          text-align: center;
          margin-bottom: 20px;
          color: #333;
        }

        input[type="text"],
        input[type="password"],
        input[type="email"],
        select {
          width: calc(50% - 5px);
          padding: 10px;
          margin-bottom: 15px;
          border-radius: 3px;
          border: 1px solid #ccc;
          display: inline-block;
        }

        input[type="submit"] {
          width: 100%;
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
        @media(max-width: 768px) {
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
		img{
			display:border;
			border-radius:100px;
			margin-left:150px;
			margin-bottom:20px;}
    </style>
</head>
<body>
<div class="signup-container">
	 <img  src="image/mokorotlo2.jpg" alt="" width="100" height="100">
    <h2>Sign Up For Sesotho Online</h2>
    <form method="post" action="process.php">
		<div class="names">
			<input type="text" placeholder="First Name" name="firstName" required>
            <input type="text" placeholder="Last Name" name="lastName" required>
		</div>
            
			<input type="email" placeholder="Email Address" name="email" required><br>
            <input type="text" placeholder="Username" name="username" required><br>
            <input type="password" placeholder="Password" name="password" required><br>
        <input type="submit" value="Sign Up">
    </form>
	
</div>
</body>
</html>
