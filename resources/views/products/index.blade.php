<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ultras - Modern Clothing Store</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <!-- Font Awesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Google Fonts (Poppins) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            color: #000;
        }
        :root {
            --primary-color: #000000;
            --secondary-color: #6c757d;
        }

        /* Header */
        .header {
            border-bottom: 1px solid #e9ecef;
        }
        .main-nav .nav-link {
            color: var(--primary-color);
            font-weight: 500;
            padding: 1rem !important;
        }
        .main-nav .nav-link:hover {
            color: var(--secondary-color);
        }
        .header-icons a {
            color: var(--primary-color);
            font-size: 1.2rem;
            margin-left: 1.5rem;
        }

        /* Hero Section */
        .hero-section {
            position: relative;
            overflow: hidden;
            padding: 12rem 0;
            color: #fff;
        }
        #hero-video {
            position: absolute;
            top: 50%;
            left: 50%;
            min-width: 100%;
            min-height: 100%;
            width: auto;
            height: auto;
            z-index: -100;
            transform: translateX(-50%) translateY(-50%);
            background-size: cover;
        }
        .hero-section::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0,0,0,0.4);
            z-index: -1;
        }
        .hero-content {
             position: relative;
             z-index: 2;
        }
        .hero-section h1 {
            font-size: 4rem;
            font-weight: 700;
        }
        .hero-section p {
            font-size: 1.25rem;
        }
        .hero-section .btn-light {
            padding: 0.8rem 2.5rem;
            border-radius: 50px;
            font-weight: 600;
        }
        
        /* Product Card */
        .product-card {
            background: #fff;
            border: 1px solid #e4e7ed;
            position: relative;
            transition: all 0.3s ease;
            height: 100%;
            display: flex;
            flex-direction: column;
            min-height: 420px; /* Ensures all cards are the same height */
        }
        .product-card:hover {
            box-shadow: 0px 10px 30px rgba(0,0,0,0.1);
            transform: translateY(-5px);
        }
        .product-img {
            position: relative;
            overflow: hidden;
            height: 260px; /* Fixed height for all product images */
            display: flex;
            align-items: center;
            justify-content: center;
            background: #f8f9fa;
        }
        .product-img img {
            max-height: 100%;
            width: auto;
            max-width: 100%;
            object-fit: cover;
            display: block;
            margin: 0 auto;
        }
        .card-body {
            flex: 1 1 auto;
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
        }
        .product-badge {
            position: absolute;
            left: 15px;
            top: 15px;
            background: var(--primary-color);
            color: #fff;
            padding: 2px 10px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 700;
            z-index: 10;
        }
        .product-card .card-body {
            text-align: center;
        }
        .product-price {
            color: var(--primary-color);
            font-weight: 700;
        }
        .product-old-price {
            text-decoration: line-through;
            color: #8d99ae;
        }
        .product-actions {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            padding: 15px;
            background: rgba(255, 255, 255, 0.9);
            transform: translateY(100%);
            transition: all 0.3s ease;
            opacity: 0;
        }
        .product-card:hover .product-actions {
            transform: translateY(0);
            opacity: 1;
        }
        .product-actions .btn {
            background: var(--primary-color);
            color: white;
            border: none;
            font-size: 14px;
        }
        
        /* Footer */
        .footer {
            background-color: #f8f9fa;
        }
        .footer h5 {
            font-weight: 600;
        }
        .footer a {
            text-decoration: none;
            color: #6c757d;
        }
        .footer a:hover {
            color: #000;
        }

        /* Typewriter Effect */
        .typewriter {
            display: inline-block;
            border-right: 2px solid #222;
            white-space: nowrap;
            overflow: hidden;
            animation: blink-caret 0.7s step-end infinite;
        }
        @keyframes blink-caret {
            0%, 100% { border-color: #222; }
            50% { border-color: transparent; }
        }
    </style>
</head>
<body>

    <!-- HEADER -->
    <header class="header bg-white py-3">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <a href="#" class="fs-4 fw-bold text-dark text-decoration-none">ULTRAS.</a>
                <nav class="main-nav d-none d-lg-block">
                    <ul class="nav">
                        <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Shop</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Women</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Sale</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
                    </ul>
                </nav>
                <div class="header-icons">
                    <a href="#"><i class="fas fa-search"></i></a>
                    <a href="#"><i class="far fa-user"></i></a>
                    <a href="#"><i class="fas fa-shopping-bag"></i></a>
                </div>
            </div>
        </div>
    </header>

    <!-- HERO SECTION -->
    <section class="hero-section text-center">
        <video playsinline autoplay muted loop id="hero-video">
            <source src="/videos/fashion_video_banner.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>

        <div class="container hero-content">
            <h1 class="display-3">New Season Arrivals</h1>
            <p class="mb-4">Check out all the new trends</p>
            <a href="#" class="btn btn-light">Shop Now</a>
        </div>
    </section>

    <!-- PRODUCTS SECTION -->
    <div class="container py-5">
        <h2 class="text-center fw-bold mb-5">
            <span id="typewriter-most-popular" class="typewriter"></span>
        </h2>
        
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-xl-4 g-4">
            <!-- Product 1 -->
            <div class="col">
                <div class="card product-card h-100">
                    <div class="product-img">
                         <img src="https://i.pinimg.com/736x/ad/de/1c/adde1ca528dd4dfc7cf1a9bdd77aaf55.jpg" alt="Brown Suede Jacket" class="card-img-top">
                        <div class="product-badge">NEW</div>
                        <div class="product-actions">
                             <a href="#" class="btn w-100">
                                <i class="fa fa-shopping-cart"></i> Add to Cart
                            </a>
                        </div>
                    </div>
                    <a href="#" class="text-dark text-decoration-none">
                        <div class="card-body d-flex flex-column">
                            <p class="card-text text-muted small">JACKETS</p>
                            <h5 class="card-title fs-6 flex-grow-1">Brown Suede Jacket</h5>
                            <div>
                                <span class="h5 product-price">$185.00</span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <!-- Product 2 -->
            <div class="col">
                <div class="card product-card h-100">
                    <div class="product-img">
                         <img src="https://i.pinimg.com/1200x/c7/c5/58/c7c558162131f2a21d8807d06c9d22db.jpg" alt="Beige Trench Coat" class="card-img-top">
                        <div class="product-badge">SALE</div>
                        <div class="product-actions">
                             <a href="#" class="btn w-100">
                                <i class="fa fa-shopping-cart"></i> Add to Cart
                            </a>
                        </div>
                    </div>
                    <a href="#" class="text-dark text-decoration-none">
                        <div class="card-body d-flex flex-column">
                            <p class="card-text text-muted small">OUTERWEAR</p>
                            <h5 class="card-title fs-6 flex-grow-1">Beige Trench Coat</h5>
                            <div>
                                <span class="h5 product-price">$250.00</span>
                                <span class="product-old-price ms-2">$320.00</span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <!-- Product 3 -->
            <div class="col">
                <div class="card product-card h-100">
                    <div class="product-img">
                         <img src="https://i.pinimg.com/1200x/48/11/be/4811be0b31ff7762b8c5bae022d4b936.jpg" alt="Grey Wool Coat" class="card-img-top">
                        <div class="product-actions">
                             <a href="#" class="btn w-100">
                                <i class="fa fa-shopping-cart"></i> Add to Cart
                            </a>
                        </div>
                    </div>
                    <a href="#" class="text-dark text-decoration-none">
                        <div class="card-body d-flex flex-column">
                            <p class="card-text text-muted small">COATS</p>
                            <h5 class="card-title fs-6 flex-grow-1">Grey Wool Coat</h5>
                            <div>
                                <span class="h5 product-price">$295.00</span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <!-- Product 4 -->
            <div class="col">
                <div class="card product-card h-100">
                    <div class="product-img">
                         <img src="https://i.pinimg.com/736x/69/9d/f9/699df95fe42f900991c986dc95d50924.jpg" alt="Leather Biker Jacket" class="card-img-top">
                        <div class="product-badge">BESTSELLER</div>
                        <div class="product-actions">
                             <a href="#" class="btn w-100">
                                <i class="fa fa-shopping-cart"></i> Add to Cart
                            </a>
                        </div>
                    </div>
                    <a href="#" class="text-dark text-decoration-none">
                        <div class="card-body d-flex flex-column">
                            <p class="card-text text-muted small">JACKETS</p>
                            <h5 class="card-title fs-6 flex-grow-1">Leather Biker Jacket</h5>
                            <div>
                                <span class="h5 product-price">$210.00</span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <!-- Women's Section -->
        <h2 class="text-center fw-bold mb-5 mt-5 pt-4">
            <span id="typewriter-for-women" class="typewriter"></span>
        </h2>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-xl-4 g-4">
            <!-- Product 1 -->
            <div class="col">
                <div class="card product-card h-100">
                    <div class="product-img">
                         <img src="https://i.pinimg.com/1200x/48/11/be/4811be0b31ff7762b8c5bae022d4b936.jpg" alt="Grey Wool Coat" class="card-img-top">
                        <div class="product-actions">
                             <a href="#" class="btn w-100">
                                <i class="fa fa-shopping-cart"></i> Add to Cart
                            </a>
                        </div>
                    </div>
                    <a href="#" class="text-dark text-decoration-none">
                        <div class="card-body d-flex flex-column">
                            <p class="card-text text-muted small">COATS</p>
                            <h5 class="card-title fs-6 flex-grow-1">Grey Wool Coat</h5>
                            <div>
                                <span class="h5 product-price">$295.00</span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <!-- Product 2 -->
            <div class="col">
                <div class="card product-card h-100">
                    <div class="product-img">
                         <img src="https://i.pinimg.com/736x/69/9d/f9/699df95fe42f900991c986dc95d50924.jpg" alt="Leather Biker Jacket" class="card-img-top">
                        <div class="product-badge">BESTSELLER</div>
                        <div class="product-actions">
                             <a href="#" class="btn w-100">
                                <i class="fa fa-shopping-cart"></i> Add to Cart
                            </a>
                        </div>
                    </div>
                    <a href="#" class="text-dark text-decoration-none">
                        <div class="card-body d-flex flex-column">
                            <p class="card-text text-muted small">JACKETS</p>
                            <h5 class="card-title fs-6 flex-grow-1">Leather Biker Jacket</h5>
                            <div>
                                <span class="h5 product-price">$210.00</span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <!-- Product 3 -->
            <div class="col">
                <div class="card product-card h-100">
                    <div class="product-img">
                        <img src="https://i.pinimg.com/1200x/75/17/8f/75178f11bbb6892c0757567997405bdc.jpg" alt="fashion" class="card-img-top">
                        <div class="product-actions">
                                <a href="#" class="btn w-100">
                                    <i class="fa fa-shopping-cart"></i> Add to Cart   
                                </a>
                        </div>
                    </div>
                    <a href="#" class="text-dark text-decoration-none">
                        <div class="card-body d-flex flex-column">
                            <p class="card-text text-muted small">JACKETS</p>
                            <h5 class="card-title fs-6 flex-grow-1">Black Leather Jacket</h5>
                            <div>
                                <span class="h5 product-price">$180.00</span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <!-- Pagination Links -->
        <div class="d-flex justify-content-center mt-5">
            {{ $products->links() }}
        </div>
    </div>

    <!-- FOOTER -->
    <footer class="footer border-top pt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4">
                    <h5>ULTRAS.</h5>
                    <p class="text-muted">The best place to find your style. High-quality clothing for every occasion.</p>
                </div>
                <div class="col-md-2 offset-md-1 mb-4">
                    <h5>Shop</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">All Collections</a></li>
                        <li><a href="#">Winter Edition</a></li>
                        <li><a href="#">Discount</a></li>
                    </ul>
                </div>
                <div class="col-md-2 mb-4">
                    <h5>Company</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">Affiliates</a></li>
                    </ul>
                </div>
                <div class="col-md-2 mb-4">
                    <h5>Support</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">FAQs</a></li>
                        <li><a href="#">Cookie Policy</a></li>
                        <li><a href="#">Terms of Use</a></li>
                    </ul>
                </div>
            </div>
            <div class="text-center text-muted border-top pt-4 mt-4">
                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script>
function typeWriterEffect(element, text, speed = 80, pause = 1200) {
    let i = 0;
    function type() {
        if (i <= text.length) {
            element.textContent = text.substring(0, i);
            i++;
            setTimeout(type, speed);
        } else {
            setTimeout(() => {
                i = 0;
                type();
            }, pause);
        }
    }
    type();
}

document.addEventListener("DOMContentLoaded", function() {
    const mostPopular = document.getElementById("typewriter-most-popular");
    const forWomen = document.getElementById("typewriter-for-women");
    if (mostPopular) {
        typeWriterEffect(mostPopular, "Most Popular");
    }
    if (forWomen) {
        typeWriterEffect(forWomen, "For Women");
    }
});
</script>
</body>
</html>

