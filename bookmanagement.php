<?php
include("conn.php");

// Initialize message variables
$addMessage = $updateMessage = $deleteMessage = "";


// Update Book Function
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit_update"])) {
    $title = $_POST["update_title"];
    $newTitle = $_POST["new_title"];
    $newAuthor = $_POST["new_author"];
    $newPublisher = $_POST["new_publisher"];
    $newyear = $_POST["new_year"];
	$newprice = $_POST["new_price"];
	$newdescription = $_POST["new_description"];
	$newavailability = $_POST["new_availability"];

    $sql = "UPDATE books 
            SET title = '$newTitle', author = '$newAuthor', publisher = '$newPublisher', year = '$newyear', price = '$newprice', description = '$newdescription', availability ='$newavailability' 
            WHERE title = '$title'";

    if ($conn->query($sql) == TRUE) {
        $updateMessage = "Record updated successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Delete Book Function
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit_delete"])) {
    $title = $_POST["delete_title"];

    $sql = "DELETE FROM books WHERE title = '$title'";

    if ($conn->query($sql) == TRUE) {
        $deleteMessage = "Record deleted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

?>

<!DOCTYPE html>
<html>

<head>
   <link rel="stylesheet" href="bookmanagement.css">
    <script>
        // JavaScript function to display messages and redirect
        function displayMessageAndRedirect(message, redirectUrl) {
            alert(message);
            window.location.href = redirectUrl;
        }

        // JavaScript function to confirm deletion
    function confirmDelete(title, message) {
        var confirmed = confirm("Are you sure you want to delete the record with title: '" + title + "'?");
        if (confirmed) {
            alert(message); // Display the deletion message
			window.location.href = 'edit.php';
        }
        return confirmed;
    }
 
</script>

    </script>
</head>

<body>
    <div style="display: flex; align-items: center;">
		<button id="homeBtn" style="margin-left: 10px;" type="button" onclick="window.location.href='index.php';">Home</button>
        <img src="image/mokorotlo2.jpg" alt="" width="100" height="100">
    </div>
  <!-- Display Books -->
    <br></br>
    <h2>Available Books</h2>
    <table>
        <tr>
            <th>Title</th>
            <th>Author</th>
            <th>Publisher</th>
            <th>Year</th>
            <th>Price</th>
            <th>Description</th>
            <th>Availability</th>
            <th>Image</th>
            <th>Actions</th>
        </tr>
        <?php
        // Fetch and display books
        $result = $conn->query("SELECT id, title, author, publisher, year, description, price, availability FROM books ");
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['title'] . "</td>";
                echo "<td>" . $row['author'] . "</td>";
                echo "<td>" . $row['publisher'] . "</td>";
                echo "<td>" . $row['year'] . "</td>";
                echo "<td>" . $row['price'] . "</td>";
                echo "<td>" . $row['description'] . "</td>";
                echo "<td>" . $row['availability'] . "</td>";
                echo "<td><img src='books/{$row['id']}.jpg' alt='{$row['title']}' style='width: 100%; height: 100%; border-radius: 10px; object-fit: cover; margin-bottom: 0px; display: block; margin-left: 0%; margin-right: 100%;'></td>";
                echo "<td>";
                echo "<form method='POST' onsubmit='return confirmDelete(\"" . htmlspecialchars($row['title']) . "\", \"" . htmlspecialchars($deleteMessage) . "\");'>";
                echo "<input type='hidden' name='delete_title' value='" . htmlspecialchars($row['title']) . "'>";
                echo "<button type='submit' name='submit_delete' class='button-delete'>Delete</button>";
                echo "</form>";
                echo "<a href='edit.php?title=" . urlencode($row['title']) . "'>Edit</a>";
                echo "</td>";
                echo "</tr>";
            }
        }
        ?>
    </table>
	<h1> Click the following button to add a new book </h1>
	<button id="btn"  type="submit" onclick="window.location.href='addbook.php';">Add Book</button>
	<br></br>
	<br></br>
</body>

</html>