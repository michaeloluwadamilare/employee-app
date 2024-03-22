<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mint Lounge</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/3f6adae92c.js" crossorigin="anonymous"></script>
    <link href="{{ asset('assets/css/mint.css') }}" rel="stylesheet">

</head>
<body class="bg-dark text-white">

    <header>
   
   
        <nav class="navbar navbar-expand-lg navbar-light p-5">
            
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav h3">
                    <li class="nav-item active mr-5">
                        <a class="nav-link text-white" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item mr-5">
                        <a class="nav-link text-white" href="#">Menu</a>
                    </li>
                    <li class="nav-item mr-5">
                        <a class="nav-link text-white" href="#">About Us</a>
                    </li>
                    <li class="nav-item mr-5">
                        <a class="nav-link text-white" href="#">Policy</a>
                    </li>

                </ul>
            </div>
            <div>
                <span class="badge rounded-pill bg-primary position-absolute" id="badge">5</span>        
                <a class="navbar-brand btn btn-lg btn-light rounded-pill px-3" href="#">Tray <i class="fas fa-hamburger"></i><i class="fas fa-cocktail"></i></a>
            
            </div>
        </nav>

    
        <div class=" container text-white mt-5" id="home">
            <div class="mb-2" > <img src="{{ asset('assets/img/mint_vector_white.png') }}" width="200px" alt=""></div> 
            <h1 class="text-large fs-1 lh-lg " id="hometext">
                MINT
                <br>
                RESTAURANT
                <br>
                AND BAR
            </h1>
            <h3>Menu and Ordering Made Easy</h3>
            
        </div>
    </header>


    <footer>
    
        <div class="px-5 py-3 d-flex flex-wrap flex-row justify-content-between opacity-100 text-muted">
            <div>&copy Mint Bar & Lounge</div>
            <div class="text-white">                
                <a href="https://www.twitter.com/baxx_v" target="_blank" class="twitter text-white"><i class="bi-twitter"></i></a>
                        <a href="https://instagram.com/the.baxx" target="_blank" class="instagram text-white"><i class="bi-instagram"></i></a>
                        <a href="https://wa.me/2348179586771" class="whatsapp text-white" target="_blank"><i class="bi-whatsapp"></i></a></div>
            <div>Created by Notionwave Technologies, {{ date('Y') }} </div>
            
        </div>
    </footer>

    <!-- Bootstrap JS (optional, only if you need Bootstrap JavaScript features) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
