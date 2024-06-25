<head>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .offer-card {
            margin: 20px 0;
        }
        .offer-card img {
            height: 200px;
            object-fit: cover;
        }
    </style>
</head>
<body>
    <br>
    
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Products</a></li>
                <li class="nav-item active"><a class="nav-link" href="#">Offers</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link" href="#">Login</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Register</a></li>
            </ul>
        </div>
    </nav>

    <div class="container mt-5">
        <h1 class="text-center">Our Special Offers</h1>
        <p class="text-center">Check out our exclusive offers just for you!</p>

        <div class="row">
            <div class="col-md-4">
                <div class="card offer-card">
                    <img src="{{ asset('images/amazon-great-summer-sale.webp') }}" class="card-img-top" alt="Offer 1">
                    <div class="card-body">
                        <h5 class="card-title">Summer Electronics Sale</h5>
                        <p class="card-text">Enjoy up to 50% off on top brand electronics. Perfect time to upgrade your gadgets for the summer!</p>
                        <a href="#" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card offer-card">
                    <img src="{{ asset('images/7864-posts.article_md.webp') }}" class="card-img-top" alt="Offer 2">
                    <div class="card-body">
                        <h5 class="card-title">BOGO on Home Appliances</h5>
                        <p class="card-text">Upgrade your home with our Buy One Get One Free offer on select appliances. Limited time only!</p>
                        <a href="" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card offer-card">
                    <img src="{{ asset('images/71kp-aTPjDL.webp') }}" class="card-img-top" alt="Offer 3">
                    <div class="card-body">
                        <h5 class="card-title">Fitness Equipment Discount</h5>
                        <p class="card-text">Get 20% off on all fitness equipment. Perfect time to build your home gym and stay healthy!</p>
                        <a href="#" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="bg-light text-center text-lg-start mt-5">
        <div class="text-center p-3">
            &copy; 2024 My Enterprise. All Rights Reserved.
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
