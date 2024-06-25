<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Store Website</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>   
<body>
    
    <section>

        <nav>

            <div class="logo">
                <img src="image/mokorotlo2.jpg"> 
            </div>
            
<br></br>

			
			<div class="dropdown">
<br></br>
<br></br>
				<div class="language-options">
<br></br>
				</div>	
			</div>
			<script src="script.js"></script>			

	<div class="dropdown" onclick="toggleMenu()">
			<button class="dropbtn">Menu</button>
			<div class="dropdown-content">
				   <a href="#">Home</a>
           <a href="Literature.html" class="nav-item nav-link">Literature</a></li> 
					 <a href="study.html" class="nav-item nav-link">Study</a>
					 <a href="Dictionary.html" class="nav-item nav-link">Dictionary</a>
					 <a href="login.html" class="nav-item nav-link">Login</a>
			</div>		 
  </div>
            
        </nav>

        <div class="main">

            <div class="main_tag">
                <h2>SESOTHO ONLINE</span></h2>

                <p>
                    <b>Welcome to Sesotho Online, a website for the African language Southern Sotho, spoken by the Basotho people in Lesotho and the Republic of South Africa.</b>
                </p>

            </div>

            <div class="main_img">
                <img src=>
            </div>

        </div>

    </section>





    <!--About-->

    <div class="about">

        <div class="about_image">
            <img src="image/about.png">
        </div>
        <div class="about_tag">
            <h1>About Us</h1>
            <p>
                Join us in our mission to keep the Southern Sotho language alive and thriving. <br> Sesotho Online is your gateway to a world of Southern Sotho literature, knowledge, and culture...
            </p>
			<a href="about us.php" class="about_btn">Read More</a>
        </div>

    </div>



    <!--Books-->

    <div class="featured_boks">

        <h1>Featured Books</h1>

        <div class="featured_book_box">

            <div class="featured_book_card">

                <div class="featurde_book_img">
                    <img src="books2/Book-1.jpg">
                </div>

                <div class="featurde_book_tag">
                    
                    <p class="writer">Sebolai Matlosa</p>

                    <p class="book_price"><sub><del></del></sub></p>
					<a href="login.html" class="f_btn">View</a>	
                </div>               

            </div>

            <div class="featured_book_card">

                <div class="featurde_book_img">
                    <img src="books2/Book-2.jpg">
                </div>

                <div class="featurde_book_tag">
                    <p class="writer">Khotso Nkhatho</p>
                    <p class="book_price"><sub><del></del></sub></p>
                    <a href="login.html" class="f_btn">View</a>
                </div>               

            </div>

            <div class="featured_book_card">

                <div class="featurde_book_img">
                    <img src="books2/Book-3.jpg">
                </div>

                <div class="featurde_book_tag">
                    <p class="writer">Fezekile Futhwa</p>
                    <p class="book_price"><sub><del></del></sub></p>
                    <a href="login.html" class="f_btn">View</a>
                </div>               

            </div>

            <div class="featured_book_card">

                <div class="featurde_book_img">
                    <img src="books2/Book-4.jpg">
                </div>

                <div class="featurde_book_tag">
                    <p class="writer">Ts'eliso Maseela Thibella</p>
                    <p class="book_price"><sub><del></del></sub></p>
                    <a href="login.html" class="f_btn">View</a>
                </div>               

            </div>

            <div class="featured_book_card">

                <div class="featurde_book_img">
                    <img src="books2/Book-5.jpg">
                </div>

                <div class="featurde_book_tag">
                    <p class="writer">Thejane L. E. A</p>
                    <p class="book_price"><sub><del></del></sub></p>
                    <a href="login.html" class="f_btn">View</a>
                </div>               

            </div>
            
            <div class="featured_book_card">

                <div class="featurde_book_img">
                    <img src="books2/Book-6.jpg">
                </div>

                <div class="featurde_book_tag">
                    <p class="writer">Masiea R. J. R</p>
                    <p class="book_price"><sub><del></del></sub></p>
                    <a href="login.html" class="f_btn">View</a>
                </div>               

            </div>

            <div class="featured_book_card">

                <div class="featurde_book_img">
                    <img src="books2/Book-7.jpg">
                </div>

                <div class="featurde_book_tag">
                    <p class="writer">Matlowane P. Mokhele</p>
                    <p class="book_price"><sub><del></del></sub></p>
                    <a href="login.html" class="f_btn">View</a>
                </div>               

            </div>

        </div>

    </div>
    
	<script>
			    document.addEventListener("DOMContentLoaded", function(){
				    var dropdownButton=document.getElementsById("language-dropdown");
					var languageOptions=document.querySelector(".language-options");
					
					function toggleLanguageOptions(){
					    if (languageOptions.style.display==="block"){
						    languageOptions.style.display="none";
					} else{
                        languageOptions.style.display="block";
                    }
                }
                dropdownButton.addEventListener("click", function(){
                    toggleLanguageOptions();
                })
                document.addEventListener("click", function(event){
                    if (!languageOptions.contains(event.target)&&event.target !==dropdownButton){
                        languageOptions.style.display="none";
                    }
                });
            });
        </script>



    <!--Footer-->

    <footer>
        <div class="footer_main">

            <div class="tag">
                <h1>Related websites</h1>

                
            </div>


    </footer>





    
</body>
<style>
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: sans-serif;
}
@media screen and (max-width: 768px){}

.search_bar{
    width: 230px;
    height: 30px;
    background: rgba(202,202,202);
    border-radius: 25px;
}
.search_bar input{
    width: 200px;
    padding: 2px 0;
    position: relative;
    top: 17%;
    left: 6%;
    border: none;
    outline: none;
    font-size: 13px;
    background: none;
}

.search_bar button{
    padding: 7px 15px;
    background: #3498db;
    border: none;
    margin-top: 15px;
    border-radius: 25px;
    color: black;
    cursor: pointer;
  
}
.search_button p{
    margin: 10px;
    color: black;
    font-size: 20px;
    font-weight: 800;

}
.search_bar:hover > .search_button{
    border-left: 5px solid black;
}	

.dropdown, .search-bar{
	display: inline-block;
	margin-right: 20px;
}	
.dropbtn {
	background-color: #3498db;
	color: white;
	padding: 10px;
	border: none;
}
}

/*menu*/
.dropdown {
	position: relative;
	display: inline-block;
}
.dropdown-content {
	display: none;
	position: absolute;
	background-color: #3498db
	min-width: 100px;
	box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
	z-index: 1;
}
.dropdown-content a {
    color: black;
    font-weight: bold; /* Set the text weight to bold */
    padding: 12px 16px;
    text-decoration: none; /* Use none instead of bold for text-decoration */
    display: block;
}

.dropdown-content a:hover {
	background-color:#0000ff;
	color: white;
}
.dropdown:hover .dropdown-content{
	display: block;

}
.dropdown:hover .dropbtn{
	background-color: #3498db;
}	


.logo img{
		display:border;
		height:100%;
		width:100%;
		border-radius:100px;
		margin-left:160px;
		margin-bottom:20px;}
.dropbtn {
	background-color: #3498db;
	color: black;
	padding: 10px;
	border: none;
}

/*Language*/
.dropdown {
	position: relative;
	display: inline-block;
}
.dropdown-options {
	display: none;
	position: absolute;
	background-color: black;
	min-width: 100px;
	box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
	z-index: 1;
}
.language-options a{
	color: 3498db;
	padding: 12px 16px;
	text-decoration: none;
	display: block;
}
.language-options a:hover{	
    background-color:#0000ff;
	color: white;
}
.dropdown:hover .language-options{
	display: block;
}
.dropdown:hover .dropbtn{
	background-color: #3498db;
}
.dropbtn {
	background-color: #3498db;
	color: black;
	padding: 10px;
	border: none;
}
section{
	z-index: 1;
    width: 100%;
    height: 100vh;
    background-image: url(image/ls.jpeg);
    background-size: cover;
    background-position: center;
}

section nav{
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: space-around;
    box-shadow: 0 0 10px #3498db;
    background: #fff;
    position: fixed;
    left: 0;
    z-index: 100;
}

section nav .logo img{
    width: 100px;
    cursor: pointer;
    margin: 8px 0;
}

section nav ul{
    list-style: none;
}

section nav li{
    display: inline-block;
    padding: 0 10px;
}

section nav li a{
    text-decoration: none;
    color: #000;
}

section nav li a:hover{
    color: ##0000ff;
}

section nav .social_icon i{
    margin: 0 5px;
    font-size: 18px;
}

section nav .social_icon i:hover{
    color: #3498db;
    cursor: pointer;
}

section .main{
    display: flex;
    align-items: center;
    justify-content: space-around;
    position: relative;
    top: 10%;
}

section .main h2{
    position: relative;
    font-size: 70px;
    top: 80px;
    left: 25px;
	color: white;
}

section .main h2 span{
    color: #3498db;
}

section .main p{
    width: 500px;
    text-align: left;
    line-height: 30px;
    position: relative;
    top: 100px;
    left: 40px;
	color: white;
}

section .main .main_tag .main_btn{
    background: #3498db;
    padding: 10px 20px;
    position: relative;
    top: 200px;
    left: 25px;
    color: #fff;
    text-decoration: none;
}

section .main .main_img img{
    width: 100%;
    position: relative;
    top: 90px;
    left: 20px;
}




/*services*/

.services{
    width: 100%;
    height: auto;
    margin: 35px 0;
}

.services .services_box{
    width: 95%;
    margin: 0 auto;
    display: flex;
    align-items: center;
    justify-content: space-around;
}

.services .services_box .services_card{
    text-align: center;
    width: 310px;
    height: auto;
    box-shadow: 0 0 8px #3498db;
    padding: 15px 10px;
}

.services .services_box .services_card i{
    color: #3498db;
    font-size: 45px;
    margin-bottom: 15px;
    cursor: pointer;
}

.services .services_box .services_card h3{
    margin-bottom: 10px;
}




/*about*/

.about{
    width: 100%;
    height: auto;
    padding: 20px;
    display: flex;
    align-items: center;
    justify-content: space-around;
}

.about .about_image img{
    width: 450px;
}

.about .about_tag h1{
    font-size: 50px;
    position: relative;
    bottom: 35px;
}

.about .about_tag p{
    line-height: 22px;
    width: 650px;
    text-align: justify;
    margin-bottom: 15px;
}

.about .about_tag .about_btn{
    padding: 10px 20px;
    background: #3498db;
    color: black;
    text-decoration: none;
    position: relative;
    top: 50px;
}



/*Books*/

.featured_boks{
    width: 100%;
    height: 100vh;
    padding: 70px 0;
}

.featured_boks h1{
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 30px;
    font-size: 45px;
}

.featured_boks .featured_book_box{
    width: 95%;
    height: 60vh;
    margin: 0 auto;
    display: grid;
    grid-template-columns: 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr;
    overflow: hidden;
    overflow-x: scroll;
}

.featured_boks .featured_book_box .featured_book_card{
    width: 250px;
    height: 420px;
    text-align: center;
    padding: 5px;
    border: 1px solid #3498db;
    margin: auto 20px;
}

.featured_boks .featured_book_box .featured_book_card:hover{
    box-shadow: 0 0 5px #3498db;
}

.featured_boks .featured_book_box .featured_book_card .featurde_book_img img{
    width: 150px;
	height: 200px;
}

.featured_boks .featured_book_box .featured_book_card .featurde_book_tag h2{
    margin: 12px;
}

.featured_boks .featured_book_box .featured_book_card .featurde_book_tag .writer{
    color: #919191;
}

.featured_boks .featured_book_box .featured_book_card .featurde_book_tag .categories{
    color: #3498db;
    margin-top: 8px;
}

.featured_boks .featured_book_box .featured_book_card .featurde_book_tag .book_price{
    margin-top: 8px;
    font-weight: bold;
    margin-bottom: 15px;
}

.featured_boks .featured_book_box .featured_book_card .featurde_book_tag .book_price sub{
    font-weight: 100;
    padding: 0 5px;
}

.featured_boks .featured_book_box .featured_book_card .featurde_book_tag .f_btn{
    padding: 8px 20px;
    border: 2px solid #3498db;
    text-decoration: none;
    color: #000;
}

::-webkit-scrollbar{
    width: 10px;
    height: 5px;
}

::-webkit-scrollbar-track{
    box-shadow: inset 0 0 8px rgba(0,0,0,0.2);
}

::-webkit-scrollbar-thumb{
    background: #3498db;
    border-radius: 10px;
}








/*Footer*/

footer{
    width: 100%;
    background: #eaeaea;
}

footer .footer_main{
    width: 100%;
    display: flex;
    justify-content: space-around;
}

footer .footer_main .tag{
    margin: 10px 0;
}

footer .footer_main .tag img{
    width: 100px;
    margin-bottom: 10px;
}

footer .footer_main .tag p{
    width: 250px;
    line-height: 22px;
    text-align: justify;
}

footer .footer_main .tag h1{
    font-size: 25px;
    margin: 25px 0;
    color: #000;
}

footer .footer_main .tag a{
    display: block;
    color: black;
    text-decoration: none;
    margin: 10px 0;
}

footer .footer_main .tag i{
    margin-right: 10px;
}

footer .footer_main .tag .social_link i{
    margin: 0 5px;
}

}

footer .end{
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 15px;
    color: #000;
}

footer .end span{
    color: #3498db;
    margin-left: 10px;
}
</style>
</html>