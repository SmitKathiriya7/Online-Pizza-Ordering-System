<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Welcome To K's</title>

	<link rel="stylesheet" href="home.css">
	<link rel="stylesheet" href="menu1.css">

	<link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;200;300;400;500;600;700&display=swap"
		rel="stylesheet">
</head>

<body>
<form methode="POST" action="register_form.php">
	<header>
		<!-- <a href="#" class="logo">Food<span>Fun</span></a> -->
		<div class="h-icons">
			<a href="register_form.php"><i class='bx bx-user'></i></a>
		</div>
		<a href="#"><img class="logo" src="logo3.png" alt="logo"></a>
		<ul class="navbar">
			<li><a href="#home">Home</a></li>
			<li><a href="#about">About</a></li>
			<li><a href="./menu1.html">Menu</a></li>
			<li><a href="#contact">Contact</a></li>
		</ul>

		<div class="h-icons">
			<!-- <a href="#"><i class='bx bx-search'></i></a>. -->
			<a href="#"><i class='bx bx-cart'></i></a>
			<div class="bx bx-menu" id="menu-icon"></div>
            <span id="total-item">0</span>
		</div>
	</header>

	<!-- home section -->
	<section class="home" id="home">
		<div class="home-text">
			<h1><span>Welcome</span> to The world of Tasty & Fresh Pizza</h1>
			<p>Lorem ipsum dolor sit amet consectetur adipisicing. <br> Lorem ipsum dolor sit amet consectetur
				adipisicing.</p>
			<a href="#menu" class="btn">Choose a Pizza</a>
		</div>

		<div class="home-img">
			<img src="img/home.png" alt="home">
		</div>
	</section>

	<!-- contact section -->
	<section class="container">
		<div class="main-text">
			<h2>Ingredients</h2>
			<p>Only the Best for You</p>
		</div>

		<div class="container-box">
			<div class="c-mainbox">
				<div class="container-img">
					<img src="./img/ingredients/b1.png" class="container-img1" alt="box1">
				</div>
				<div class="container-text">
					<p>Delicate Dough</p>
				</div>
			</div>

			<div class="c-mainbox">
				<div class="container-img">
					<img src="./img/ingredients/b2.png" class="container-img1" alt="box2">
				</div>
				<div class="container-text">
					<p>Fresh Tomatoes</p>
				</div>
			</div>

			<div class="c-mainbox">
				<div class="container-img">
					<img src="./img/ingredients/b3.png" class="container-img1" alt="box3">
				</div>
				<div class="container-text">
					<p>Alpine Cheese</p>
				</div>
			</div>

			<div class="c-mainbox">
				<div class="container-img">
					<img src="./img/ingredients/b4.png" class="container-img1" alt="box4">
				</div>
				<div class="container-text">
					<p>Black Olives</p>
				</div>
			</div>
			<div class="c-mainbox">
				<div class="container-img">
					<img src="./img/ingredients/b5.png" class="container-img1" alt="box4">
				</div>
				<div class="container-text">
					<p>Mushroom</p>
				</div>
			</div>
			<div class="c-mainbox">
				<div class="container-img">
					<img src="./img/ingredients/b6.png" class="container-img1" alt="box4">
				</div>
				<div class="container-text">
					<p>Onion</p>
				</div>
			</div>
			<div class="c-mainbox">
				<div class="container-img">
					<img src="./img/ingredients/b7.png" class="container-img1" alt="box4">
				</div>
				<div class="container-text">
					<p>Fresh Garlic</p>
				</div>
			</div>
			<div class="c-mainbox">
				<div class="container-img">
					<img src="./img/ingredients/b8.png" class="container-img1" alt="box4">
				</div>
				<div class="container-text">
					<p>Green Pepper</p>
				</div>
			</div>
		</div>

	</section>

	<!-- about section -->
	<section class="about" id="about">
		<div class="about-img">
			<img src="img/a.png" alt="">
		</div>

		<div class="about-text">
			<h2>The Delicious Food<br> For a Good Mood</h2>
			<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque, ipsum?<br><br> Lorem ipsum dolor sit amet
				consectetur adipisicing elit. Deleniti, dolore pariatur! Enim inventore excepturi laudantium
				necessitatibus placeat mollitia, incidunt consequatur.</p>
			<a href="#menu" class="btn">Choose a Pizza</a>
		</div>

	</section>

	<!-- menu section -->

	<section class="menu" id="menu">
		<div class="main-text">
			<h2>Most Popular Pizza</h2>
			<p>We have selected for You<br> the most exquisite tastes around the world</p>
		</div>
		<div class="sml"><span>Small</span></div>
		
		<div class="menu-content">
			<div class="row">
				<img src="img/pizza/m1.jpg" alt="main-product1">
				<div class="menu-text">
					<div class="menu-left">
						<h4>Margarita</h4>
					</div>
					<div class="menu-right">
						<h5>299.00</h5>
					</div>
				</div>
				<div class="star">
					<div>
						<a href="#"><i class='bx bxs-star'></i></a>
						<a href="#"><i class='bx bxs-star'></i></a>
						<a href="#"><i class='bx bxs-star'></i></a>
						<a href="#"><i class='bx bxs-star'></i></a>
						<a href="#"><i class='bx bxs-star'></i></a>
					</div>
					<div class="cartwish">
						<div class="h-icons">
							<a href="#"><i class='bx bx-cart'></i></a>
						</div>
					</div>
				</div>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus, magnam.</p>
			</div>

			<div class="row">
				<img src="img/pizza/m2.jpg" alt="main-product2">
				<div class="menu-text">
					<div class="menu-left">
						<h4>Seven Cheese</h4>
					</div>
					<div class="menu-right">
						<h5>249.00</h5>
					</div>
				</div>
				<div class="star">
					<div>
						<a href="#"><i class='bx bxs-star'></i></a>
						<a href="#"><i class='bx bxs-star'></i></a>
						<a href="#"><i class='bx bxs-star'></i></a>
						<a href="#"><i class='bx bxs-star'></i></a>
						<a href="#"><i class='bx bxs-star'></i></a>
					</div>
					<div class="cartwish">
						<div class="h-icons">
							<a href="#"><i class='bx bx-cart'></i></a>
						</div>
					</div>
				</div>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus, magnam.</p>
			</div>

			<div class="row">
				<img src="img/pizza/m3.jpg" alt="main-product3">
				<div class="menu-text">
					<div class="menu-left">
						<h4>Paneer Special</h4>
					</div>
					<div class="menu-right">
						<h5>229.00</h5>
					</div>
				</div>
				<div class="star">
					<div>
						<a href="#"><i class='bx bxs-star'></i></a>
						<a href="#"><i class='bx bxs-star'></i></a>
						<a href="#"><i class='bx bxs-star'></i></a>
						<a href="#"><i class='bx bxs-star'></i></a>
						<a href="#"><i class='bx bxs-star'></i></a>
					</div>
					<div class="cartwish">
						<div class="h-icons">
							<a href="#"><i class='bx bx-cart'></i></a>
						</div>
					</div>
				</div>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus, magnam.</p>
			</div>

			<div class="row">
				<img src="img/pizza/m4.jpg" alt="main-product4">
				<div class="menu-text">
					<div class="menu-left">
						<h4>Authentic Veg</h4>
					</div>
					<div class="menu-right">
						<h5>289.00</h5>
					</div>
				</div>
				<div class="star">
					<div>
						<a href="#"><i class='bx bxs-star'></i></a>
						<a href="#"><i class='bx bxs-star'></i></a>
						<a href="#"><i class='bx bxs-star'></i></a>
						<a href="#"><i class='bx bxs-star'></i></a>
						<a href="#"><i class='bx bxs-star'></i></a>
					</div>
					<div class="cartwish">
						<div class="h-icons">
							<a href="#"><i class='bx bx-cart'></i></a>
						</div>
					</div>
				</div>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus, magnam.</p>
			</div>
		</div>


		<div class="sml"><span>Medium</span></div>
		<div class="menu-content">
			<div class="row">
				<img src="img/pizza/m1.jpg" alt="main-product1">
				<div class="menu-text">
					<div class="menu-left">
						<h4>Margarita</h4>
					</div>
					<div class="menu-right">
						<h5>429.00</h5>
					</div>
				</div>
				<div class="star">
					<div>
						<a href="#"><i class='bx bxs-star'></i></a>
						<a href="#"><i class='bx bxs-star'></i></a>
						<a href="#"><i class='bx bxs-star'></i></a>
						<a href="#"><i class='bx bxs-star'></i></a>
						<a href="#"><i class='bx bxs-star'></i></a>
					</div>
					<div class="cartwish">
						<div class="h-icons">
							<a href="#"><i class='bx bx-cart'></i></a>
						</div>
					</div>
				</div>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus, magnam.</p>
			</div>

			<div class="row">
				<img src="img/pizza/m2.jpg" alt="main-product2">
				<div class="menu-text">
					<div class="menu-left">
						<h4>Seven Cheese</h4>
					</div>
					<div class="menu-right">
						<h5>449.00</h5>
					</div>
				</div>
				<div class="star">
					<div>
						<a href="#"><i class='bx bxs-star'></i></a>
						<a href="#"><i class='bx bxs-star'></i></a>
						<a href="#"><i class='bx bxs-star'></i></a>
						<a href="#"><i class='bx bxs-star'></i></a>
						<a href="#"><i class='bx bxs-star'></i></a>
					</div>
					<div class="cartwish">
						<div class="h-icons">
							<a href="#"><i class='bx bx-cart'></i></a>
						</div>
					</div>
				</div>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus, magnam.</p>
			</div>

			<div class="row">
				<img src="img/pizza/m3.jpg" alt="main-product3">
				<div class="menu-text">
					<div class="menu-left">
						<h4>Paneer Special</h4>
					</div>
					<div class="menu-right">
						<h5>439.00</h5>
					</div>
				</div>
				<div class="star">
					<div>
						<a href="#"><i class='bx bxs-star'></i></a>
						<a href="#"><i class='bx bxs-star'></i></a>
						<a href="#"><i class='bx bxs-star'></i></a>
						<a href="#"><i class='bx bxs-star'></i></a>
						<a href="#"><i class='bx bxs-star'></i></a>
					</div>
					<div class="cartwish">
						<div class="h-icons">
							<a href="#"><i class='bx bx-cart'></i></a>
						</div>
					</div>
				</div>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus, magnam.</p>
			</div>

			<div class="row">
				<img src="img/pizza/m4.jpg" alt="main-product4">
				<div class="menu-text">
					<div class="menu-left">
						<h4>Authentic Veg</h4>
					</div>
					<div class="menu-right">
						<h5>479.00</h5>
					</div>
				</div>
				<div class="star">
					<div>
						<a href="#"><i class='bx bxs-star'></i></a>
						<a href="#"><i class='bx bxs-star'></i></a>
						<a href="#"><i class='bx bxs-star'></i></a>
						<a href="#"><i class='bx bxs-star'></i></a>
						<a href="#"><i class='bx bxs-star'></i></a>
					</div>
					<div class="cartwish">
						<div class="h-icons">
							<a href="#"><i class='bx bx-cart'></i></a>
						</div>
					</div>
				</div>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus, magnam.</p>
			</div>
		</div>


		<div class="sml"><span>Large</span></div>
		<div class="menu-content">
			<div class="row">
				<img src="img/pizza/m1.jpg" alt="main-product1">
				<div class="menu-text">
					<div class="menu-left">
						<h4>Margarita</h4>
					</div>
					<div class="menu-right">
						<h5>599.00</h5>
					</div>
				</div>
				<div class="star">
					<div>
						<a href="#"><i class='bx bxs-star'></i></a>
						<a href="#"><i class='bx bxs-star'></i></a>
						<a href="#"><i class='bx bxs-star'></i></a>
						<a href="#"><i class='bx bxs-star'></i></a>
						<a href="#"><i class='bx bxs-star'></i></a>
					</div>
					<div class="cartwish">
						<div class="h-icons">
							<a href="#"><i class='bx bx-cart'></i></a>
						</div>
					</div>
				</div>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus, magnam.</p>
			</div>

			<div class="row">
				<img src="img/pizza/m2.jpg" alt="main-product2">
				<div class="menu-text">
					<div class="menu-left">
						<h4>Seven Cheese</h4>
					</div>
					<div class="menu-right">
						<h5>549.00</h5>
					</div>
				</div>
				<div class="star">
					<div>
						<a href="#"><i class='bx bxs-star'></i></a>
						<a href="#"><i class='bx bxs-star'></i></a>
						<a href="#"><i class='bx bxs-star'></i></a>
						<a href="#"><i class='bx bxs-star'></i></a>
						<a href="#"><i class='bx bxs-star'></i></a>
					</div>
					<div class="cartwish">
						<div class="h-icons">
							<a href="#"><i class='bx bx-cart'></i></a>
						</div>
					</div>
				</div>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus, magnam.</p>
			</div>

			<div class="row">
				<img src="img/pizza/m3.jpg" alt="main-product3">
				<div class="menu-text">
					<div class="menu-left">
						<h4>Paneer Special</h4>
					</div>
					<div class="menu-right">
						<h5>569.00</h5>
					</div>
				</div>
				<div class="star">
					<div>
						<a href="#"><i class='bx bxs-star'></i></a>
						<a href="#"><i class='bx bxs-star'></i></a>
						<a href="#"><i class='bx bxs-star'></i></a>
						<a href="#"><i class='bx bxs-star'></i></a>
						<a href="#"><i class='bx bxs-star'></i></a>
					</div>
					<div class="cartwish">
						<div class="h-icons">
							<a href="#"><i class='bx bx-cart'></i></a>
						</div>
					</div>
				</div>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus, magnam.</p>
			</div>

			<div class="row">
				<img src="img/pizza/m4.jpg" alt="main-product4">
				<div class="menu-text">
					<div class="menu-left">
						<h4>Authentic veg</h4>
					</div>
					<div class="menu-right">
						<h5>619.00</h5>
					</div>
				</div>
				<div class="star">
					<div>
						<a href="#"><i class='bx bxs-star'></i></a>
						<a href="#"><i class='bx bxs-star'></i></a>
						<a href="#"><i class='bx bxs-star'></i></a>
						<a href="#"><i class='bx bxs-star'></i></a>
						<a href="#"><i class='bx bxs-star'></i></a>
					</div>
	transition: all .50s ease;
					<div class="cartwish ">
						<div class="h-icons">
							<a href="#"><i class='bx bx-cart'></i></a>
						</div>
					</div>
				</div>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus, magnam.</p>
			</div>
		</div>

	</section>

	<!-- contact section -->

	<section class="contact" id="contact">
		<div class="main-contact">
			<div class="contact-content">
				<h4>Services</h4>
				<li><a href="#home">Home</a></li>
				<li><a href="#about">About</a></li>
				<li><a href="#menu">Menu</a></li>
				<li><a href="#contact">Contact</a></li>
			</div>

			<div class="contact-content">
				<h4>Delivery</h4>
				<li><a href="#home">Uber Eats</a></li>
				<li><a href="#about">DoorDash</a></li>
				<li><a href="#menu">ChowNow</a></li>
				<li><a href="#contact">Toast TakeOut</a></li>
			</div>

			<div class="contact-content">
				<h4>Contact</h4>
				<li><a href="#home">Contact Us</a></li>
				<li><a href="#about">Press Center</a></li>
				<li><a href="#menu">Careers</a></li>
				<li><a href="#contact">FAQ</a></li>
			</div>

			<div class="contact-content">
				<h4>Follow Us</h4>
				<li><a href="#home">TikTok</a></li>
				<li><a href="#about">Twitter</a></li>
				<li><a href="#menu">Facebook</a></li>
				<li><a href="#menu">Instagramm</a></li>
			</div>
		</div>
	</section>

	<div class="last-text">
		<p>© Developed 2023 by K's Team</p>
	</div>
	<a href="#home" class="scroll-top">
		<i class='bx bx-up-arrow-alt'></i>
	</a>


	<!-- extra  -->

	<!-- extra complite  -->


	<!-- custom scrollreveal link -->

	<script src="https://unpkg.com/scrollreveal"></script>

	<!-- custom js link -->
	<script type="text/javascript" src="home.js"></script>
	<script type="text/javascript" src="menu1.js"></script>
</form>
</body>

</html>