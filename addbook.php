<?php
include("conn.php");

$addMessage = ""; // Initialize message variable

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit_add"])) {
    $title = $_POST["title"];
    $author = $_POST["author"];
    $publisher = $_POST["publisher"];
    $year = $_POST["year"];
    $price = $_POST["price"];
    $description = $_POST["description"];
    $availability = $_POST["availability"];

    // Handle image upload
    if ($_FILES['image']['error'] == UPLOAD_ERR_OK) {
        $imageData = file_get_contents($_FILES['image']['tmp_name']);
        $imageData = base64_encode($imageData);
    }

    $sql = "INSERT INTO books (title, author, publisher, year, price, description, availability, image_data) VALUES ('$title', '$author', '$publisher', '$year', '$price', '$description', '$availability', '$imageData')";

    if ($conn->query($sql) == TRUE) {
        $addMessage = "Record added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Add Book - Sesotho Books Database</title>
</head>

<body>
    <div class="wrapper">
        <div class="box">
            <img src="image/mokorotlo2.jpg" alt="" width="100" height="100">

            <!-- Add Book Form -->
            <form action="addbook.php" method="POST" enctype="multipart/form-data">
                <ul class="form-list">
                    <li class="form-item">
                        <label for="title">Title:</label>
                        <input type="text" name="title" required placeholder="Enter Book Title">
                    </li>

                    <li class="form-item">
                        <label for="author">Author:</label>
                        <input type="text" name="author" required placeholder="Enter Author's names">
                    </li>

                    <li class="form-item">
                        <label for="publisher">Publisher:</label>
                        <input type="text" name="publisher" required placeholder="Enter Publisher's names">
                    </li>

                    <li class="form-item">
                        <label for="year">Year:</label>
                        <input type="text" name="year" required placeholder="Enter Book's year of Publication">
                    </li>

                    <li class="form-item">
                        <label for="price">Price:</label>
                        <input type="text" name="price" required placeholder="Enter the book hire price">
                    </li>

                    <li class="form-item">
                        <label for="description">Description:</label>
                        <input type="text" name="description" required placeholder="Enter book description">
                    </li>

                    <li class="form-item">
                        <label for="availability">Availability:</label>
                        <input type="text" name="availability" required placeholder="Enter book availability (YES/NO)">
                    </li>

                    <li class="form-item">
                        <label for="image">Image:</label>
                        <input type="file" name="image" accept="image/*">
                    </li>
                </ul>

                <button type="submit" name="submit_add">Add Book</button>
            </form>

            <!-- Display Add Message -->
            <p><?php echo $addMessage; ?></p>

            <!-- Back to Home Link -->
            <br></br>
            <a href="bookmanagement.php">Back to book list</a>
        </div>
    </div>
</body>
    <style>
	
	/* MFMFM */
	@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700&display=swap');

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body{
    font-family: "Montserrat",
    sens-serif;
    background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(image/finally.webp);
	
    
}
        .wrapper {
            border: 2px solid transparent;
            display: flex;
            height: 150vh;
            align-items: center;
            justify-content: center;
        }
	
/*MMSS*/
.box {
    border-radius: 20px;
    width: 500px;
    padding: 30px;
    border: 2px solid orangered;
    background-color: white;
    box-shadow: 1px 1px 2px yellow;
    display: block;
    flex-direction: column;
	color: black;
}

.box h1 {
    color: #fff;
    text-transform: uppercase;
    font-weight: 700;
    text-align: center;
}
	

      h1{
        font-size:50;}
		color:white;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
	  
       nav ul {
          list-style-type: none;
        }

        nav ul li {
          display: inline;
          margin-right: 20px;
        }

        nav ul li a {
          color: white;
          text-decoration: none;
        }
        a{
          display: inline-block;
          padding: 10px 20px;
          background-color: #333;
          color: #fff;
          text-decoration: none;
          border-radius: 10px;
          transition: background-color 0.1s ease;
        }
		
		a:hover {
          background-color: blue;
        }
		
		 .borrow-button {
          margin-left: 0px;
          display: block;
          width:40%;
          padding: 5px;
          border: none;
          border-radius: 3px;
          background-color: blue;
          color: #fff;
          text-align: center;
          text-decoration: none;
          cursor: pointer;
          transition: background-color 0.1s ease;
        }

        .borrow-button:hover {
          background-color: green;
        }
		
		 .col {
          
          background-color: white;
          border-radius: 10px;
          transition: transform 0.3s ease;
        }
       .col:hover {
          transform: translateY(-5px);
        }
		img{
			display:border;
			border-radius:100px;
			margin-left:160px;
			margin-bottom:20px;}
.form-list {
    list-style-type: none;
    padding: 0;
}

.form-item {
    margin-bottom: 20px;
    display: block;
    flex-direction: column;
}

.form-item label {
    margin-bottom: 5px;
    color: black;
}
</style>

</html>
