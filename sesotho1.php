<?php
include("conn.php");

// Initialize message variables
$addMessage = $updateMessage = $deleteMessage = "";

// Add Book Function
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit_add"])) {
    $title = $_POST["title"];
    $author = $_POST["author"];
    $publisher = $_POST["publisher"];
    $ISBN = $_POST["ISBN"];

    $sql = "INSERT INTO book (title, author, publisher, ISBN) VALUES ('$title', '$author', '$publisher', '$ISBN')";

    if ($conn->query($sql) == TRUE) {
        $addMessage = "Record added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Update Book Function
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit_update"])) {
    $title = $_POST["update_title"];
    $newTitle = $_POST["new_title"];
    $newAuthor = $_POST["new_author"];
    $newPublisher = $_POST["new_publisher"];
    $newISBN = $_POST["new_ISBN"];

    $sql = "UPDATE book 
            SET title = '$newTitle', author = '$newAuthor', publisher = '$newPublisher', ISBN = '$newISBN' 
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

    $sql = "DELETE FROM book WHERE title = '$title'";

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

   <title style="color: blue;"> Sesotho Books Database</title>
   <link rel="stylesheet" href="sesotho1.css">
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
                // Display the deletion message
                displayMessageAndRedirect(message, 'sesotho1.php');
            }
            return confirmed;
        }
</script>

    </script>
</head>

<body>
    <h1 style="color: white;"> Sesotho Books Database</h1>

    <!-- Add Book Form -->
    <form action="sesotho1.php" method="POST">
        <label for="title" >Title:</label>
        <input type="text" name="title" required placeholder="Enter Book Title">
        <label for="author">Author:</label>
        <input type="text" name="author" required placeholder="Enter Author ID">
        <label for="publisher">Publisher:</label>
        <input type="text" name="publisher" required placeholder="Enter Publisher ID">
        <label for="ISBN">ISBN:</label>
        <input type="text" name="ISBN" required placeholder="Enter Book ISBN">
        <button type="submit" name="submit_add" onclick="displayMessageAndRedirect('<?php echo $addMessage; ?>', 'sesotho1.php');">Add Book</button>
    </form>

    <!-- Display Books -->
    <!--<div class="wrapper">-->
	<h2>Book List</h2>
    <table>
        <tr>
            <th>Title</th>
            <th>Author Surname</th>
            <th>Author Initials</th>
            <th>Publisher</th>
            <th>ISBN</th>
            <th>Actions</th>
        </tr>
        <?php
        // Fetch and display books
        $result = $conn->query("SELECT title, lastName, Initials, PubName, ISBN 
		FROM author JOIN book ON author.AuthorID= book.author JOIN publisher ON publisher.PubID=book.publisher; ");
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['title'] . "</td>";
                echo "<td>" . $row['lastName'] . "</td>";
                echo "<td>" . $row['Initials'] . "</td>";
                echo "<td>" . $row['PubName'] . "</td>";
                echo "<td>" . $row['ISBN'] . "</td>";
                echo "<td>";
                echo "<form id='deleteForm' method='POST' onsubmit='return confirmDelete(\"" . htmlspecialchars($row['title']) . "\", \"" . htmlspecialchars($deleteMessage) . "\");'>";
                echo "<input type='hidden' name='delete_title' value='" . htmlspecialchars($row['title']) . "'>";
                echo "<button type='submit' name='submit_delete'>Delete</button>";
                echo "</form>";
                echo "<form method= 'POST'>";
						echo "<input type='hidden' name='update_title' value='" . $row['title'] . "'>";
                        echo "<input type='text' name='new_title' placeholder='New Title' required>";
                        echo "<input type='text' name='new_author' placeholder='New Author' required>";
                        echo "<input type='text' name='new_publisher' placeholder='New Publisher' required>";
                        echo "<input type='text' name='new_ISBN' placeholder='New ISBN' required>";
                        echo "<button type='submit' name='submit_update' onclick=\"displayMessageAndRedirect('<?php echo $updateMessage; ?>', 'sesotho1.php');\">Update</button>";
						echo "</form>";
					echo "</td>";
                echo "</tr>";
            }
        }
        ?>
    </table>
	</div>
</body>

</html>
