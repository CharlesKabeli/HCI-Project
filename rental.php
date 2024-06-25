<?php 

session_start();
if(isset($_SESSION['userid'])){
	$e = $_SESSION['userid'];
	
}
else{
	echo "USERID NOT FOUND!!!!!";}

$conn = new mysqli('localhost','root','','sesotho');?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Album example · Bootstrap v5.0</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/album/">

    

    <!-- Bootstrap core CSS -->
<link href="bootstrap-5.0.2-dist/css/bootstrap.min.css" rel="stylesheet">

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
    align-items: center;
    justify-content: center;

}
	
/*MMSS*/
.box {
    border-radius: 20px;
    width: 900px;
    padding: 30px;
    border: 2px solid orangered;
    background-color: white;
    box-shadow: 1px 1px 2px yellow;
    display: flex;
    flex-direction: column;
}

.box h1 {
    color: #fff;
    text-transform: uppercase;
    font-weight: 700;
    text-align: center;
}

.box input[ type="text"],
.box input[ type="password"] {
   font-size: 20px;
   border: 0;
   background: none;
   display: block;
   margin: 20px auto;
   text-align: center;
   border: 3px solid #0367fd;
   padding: 14px 10px;
   width: 220px;
   outline: none;
   color:#fff;
   border-radius: 24px;
   transition: all .2s ease-in;

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
		p1{ 
			color: black;
			font-weight: bold;
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
			margin-left:250px;
			margin-bottom:20px;}
.book-image {
    width: 20%;
    height: 25%;
    border-radius: 10px; /* You can adjust the border-radius as needed */
    object-fit: cover;
    margin-bottom: 0px; /* Add some margin to separate image from book details */
    display: block;
    margin-left: 0%;
    margin-right: 100%;
}
    </style>

    
  </head>
  <body>
  <div class="wrapper"> 
  <div class="box">
<header>
<div style="display: flex; align-items: center;">
  <div class="navbar navbar-dark bg-dark shadow-sm">
	
    <div class="container">

	  <br></br>
      <nav>
        <ul>
		  <li><a href="index.php">Home</a></li>
        </ul>
      </nav>
    </div>
  </div>
<img  src="image/mokorotlo2.jpg" alt="" width="100" height="100">
	
</div>
</header>

<main>

  <section class="py-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">Sesotho Online Books For Hire</h1>
        <p1 class="lead text-muted">Here is a list of books available for hire. Browse through the gallery and choose your desired book </p1><br></br>
      </div>
    </div>
  </section>

  <div class="album py-5 bg-light">
    <div class="container">

<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
    <?php 
    $sql = "SELECT * FROM books";
    $result = $conn->query($sql);
    $place = 0;
    if (mysqli_num_rows($result) > 0) {
        while($images = mysqli_fetch_assoc($result)){
    ?>
    <div class="col">
        <div class="card shadow-sm">
            <!-- Modified img tag -->
            <img src="BOOKS/<?php echo $images['id']; ?>.jpg" alt="<?php echo $images['title']; ?>" class="book-image">
            <div class="card-body">
                <p1 class="card-text">Title:  <?= $images['title'] ?><br>Author:  <?= $images['author'] ?><br>Year:  <?= $images['year'] ?><br>Description:  <?= $images['description'] ?><br>Price:  <?= $images['price'] ?> Per month<br>Available:  <?= $images['availability'] ?></p1>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                        <form action="payments.php" method="post">
                            <input type="hidden" value="<?= $images['id'] ?>" name="id">
                            <button type="submit" class="borrow-button">Borrow</button><br></br>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php }} ?>
</div>

    </div>
  </div>

</main>

<footer class="text-muted py-5">
  <div class="container">
    <p class="float-end mb-1">
      <br></br><a href="#">Back to top</a><br></br>
    </p>
    <p class="mb-1">&copy; 2023 Sesotho Online</p>
  </div>
</footer>
    <script src="assets/dist/js/bootstrap.bundle.min.js"></script>
	</div>
	</div>
  </body>
</html>