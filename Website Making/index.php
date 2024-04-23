<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <title>Lucy's Cafe</title>

   <!-- font style sa ilalim nito lols    -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
   <!-- custom style sa ilalim nito another lols -->
   <link rel="stylesheet" href="style1.css">

</head>
<body>

<!-- Dito mag uumpisa ang header -->
<header class="header">
    
    <a href="#" class="logo">
        <img src="cafelucy4.png" alt="Lucy's Cafe">
    </a>

    <nav class="navbar">
        <a href="#home">Home</a>
        <a href="#about">About</a>
        <a href="#menu">Menu</a>
        <a href="#specialty">Specialty</a>
        <a href="#review">Review</a>
        <a href="#find-us">Find Us</a>
        <a href="#blogs">Blogs</a>
    </nav>

    <div class="icons">
        <div class="fas fa-search" id="search-btn"></div>
        <div class="fas fa-shopping-cart" id="cart-btn"></div>
        <div class="fas fa-bars" id="menu-btn"></div>
    </div>

    <div class="search-form">
        <input type="search" id="search-box" placeholder="Find your taste...">
        <label for="search-box" class="fas fa-search"></label>
    </div>

    <div class="cart-items-container">
        <div class="cart-item">
            <span class="fas fa-times"></span>
            <img src="cafelucy4.png" alt="">
            <div class="content">
                <h3>Food #1</h3>
                <div class="price">₱159/ -</div>
            </div>
        </div>
        <div class="cart-item">
            <span class="fas fa-times"></span>
            <img src="cafelucy4.png" alt="">
            <div class="content">
                <h3>Food #2</h3>
                <div class="price">₱159/ -</div>
            </div>
        </div>
        <div class="cart-item">
            <span class="fas fa-times"></span>
            <img src="cafelucy4.png" alt="">
            <div class="content">
                <h3>Food #3</h3>
                <div class="price">₱159/ -</div>
            </div>
        </div>
        <div class="cart-item">
            <span class="fas fa-times"></span>
            <img src="cafelucy4.png" alt="">
            <div class="content">
                <h3>Food #4</h3>
                <div class="price">₱159/ -</div>
            </div>
        </div>
        <a href="#" class="btn">Order Now</a>
    </div>
    
</header>




<!-- Dito matatapos ang header -->


<!-- home section dito -->

<section class="home" id="home">
    <div class="content">
        <h3>Your neighborhood hole-in-the-wall café!</h3>
        <p>Morning and afternoon taste</p>
        <a href="#" class="btn">Eat</a>
    </div>
</section>

<!-- home section matatapos dito -->


<!-- about section ay maguumpisa -->

<section class="about" id="about">
    <h1 class="heading"><span>About</span> Us</h1>

    <div class="row">
        <div class="image">
            <img src="bg-img.png" alt="">
        </div>
        <div class="content">
            <h3>taste the great...</h3>
            <p>lorem ist panum ke lo preom</p>
            <p>Lorem ist panum est lsrumen past ko sinb tey</p>
            <a href="#" class="btn">learn more</a>
        </div>
        
    </div>
</section>

<!--- about section ay tapos na-->

    <!-- js link sa ilalim nito lolol -->
    <script src="script.js"></script>
</body>
</html>