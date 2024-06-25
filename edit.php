<?php
include("conn.php");

// Initialize message variables
$updateMessage = "";

// Fetch the book details based on the title from the URL parameter
if (isset($_GET['title'])) {
    $title = $_GET['title'];
    $result = $conn->query("SELECT * FROM books WHERE title = '$title'");

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
    } else {
        echo "Error: Book not found.";
        exit();
    }
}

// Update Book Function
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit_update"])) {
    $newTitle = $_POST["new_title"];
    $newAuthor = $_POST["new_author"];
    $newPublisher = $_POST["new_publisher"];
    $newyear = $_POST["new_year"];
    $newprice = $_POST["new_price"];
    $newdescription = $_POST["new_description"];
    $newavailability = $_POST["new_availability"];

    // Handle image update
    if ($_FILES['new_image']['error'] == UPLOAD_ERR_OK) {
        $newImageData = file_get_contents($_FILES['new_image']['tmp_name']);
        $newImageData = base64_encode($newImageData);

        $updateImageSql = "UPDATE books SET image_data = '$newImageData' WHERE title = '$newTitle'";
        $conn->query($updateImageSql);
    }

    $sql = "UPDATE books 
            SET title = '$newTitle', author = '$newAuthor', publisher = '$newPublisher', year = '$newyear', price = '$newprice', description = '$newdescription', availability ='$newavailability' 
            WHERE title = '$title'";

    if ($conn->query($sql) == TRUE) {
        $updateMessage = "Record updated successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title style="color: blue;"> Edit Book - Sesotho Books Database</title>
</head>

<body>
<div class="wrapper">
<div class="box">
<img  src="image/mokorotlo2.jpg" alt="" width="100" height="100">

    <!-- Update Book Form -->
<!-- ... (previous HTML) -->

<form action="edit.php?title=<?php echo urlencode($title); ?>" method="POST" enctype="multipart/form-data">
    <ul class="form-list">
        <li class="form-item">
            <label for="new_title">Title:</label>
            <input type="text" name="new_title" required value="<?php echo $row['title']; ?>">
        </li>

        <li class="form-item">
            <label for="new_author">Author:</label>
            <input type="text" name="new_author" required value="<?php echo $row['author']; ?>">
        </li>

        <li class="form-item">
            <label for="new_publisher">Publisher:</label>
            <input type="text" name="new_publisher" required value="<?php echo $row['publisher']; ?>">
        </li>

        <li class="form-item">
            <label for="new_year">Year:</label>
            <input type="text" name="new_year" required value="<?php echo $row['year']; ?>">
        </li>

        <li class="form-item">
            <label for="new_price">Price:</label>
            <input type="text" name="new_price" required value="<?php echo $row['price']; ?>">
        </li>

        <li class="form-item">
            <label for="new_description">Description:</label>
            <input type="text" name="new_description" required value="<?php echo $row['description']; ?>">
        </li>

        <li class="form-item">
            <label for="new_availability">Availability:</label>
            <input type="text" name="new_availability" required value="<?php echo $row['availability']; ?>">
        </li>

        <li class="form-item">
            <label for="new_image">New Image:</label>
            <input type="file" name="new_image" accept="image/*">
        </li>
    </ul>

    <button type="submit" name="submit_update">Update Book</button>
</form>

<!-- ... (remaining HTML) -->


    <!-- Display Update Message -->
    <p><?php echo $updateMessage; ?></p>

    <!-- Back to Home Link -->
   <br></br> <a href="bookmanagement.php">Back to book list</a>
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
