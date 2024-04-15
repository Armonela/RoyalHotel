<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comforter&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sarina&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="spa.css">
    <title>Spa</title>
</head>
<body>
    <section class="pare">
        <div class="yll1"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
         <nav class="epara">
          <ul>
              <li><a href="services.php">Services</a></li>
              <li><a href="rooms.php">Rooms</a></li>
              <li><a href="galerry.php">Galerry</a></li>
              <li id="titull">Royal Hotel</li>
              <li><a href="location.php">Location</a></li>
              <li><a href="booking.php">Booking</a></li>
          </ul>
         </nav>
    </section>

    <section class="foto">
        <h1>Services</h1>
    </section>

    <section class="trupi">
        <div class="image-gallery">
            <div class="item">
            <img src="image/spa1.jpeg" alt="Image 1" class="gallery-image" onmouseover="expandImage(this)" onclick="hideImage()">
            </div>
            <div class="item">
            <img src="image/spa2.jpeg" alt="Image 2" class="gallery-image" onmouseover="expandImage(this)" onclick="hideImage()">
            </div>
            <div class="item">
            <img src="image/spa3.jpeg" alt="Image 3" class="gallery-image" onmouseover="expandImage(this)" onclick="hideImage()">
            </div>
            <div class="item">
            <img src="image/spa4.jpeg" alt="Image 4" class="gallery-image" onmouseover="expandImage(this)" onclick="hideImage()">   
            </div>
        </div>
        
        <div class="overlay" id="overlay" onclick="hideImage()">
            <span class="close-button" onclick="hideImage()">&times;</span>
            <img src="" alt="Large Image" class="overlay-image" id="overlay-image">
        </div>
        
              <script>
        function expandImage(image) {
            var overlay = document.getElementById("overlay");
            var overlayImage = document.getElementById("overlay-image");
        
            overlay.style.display = "flex";
            overlayImage.src = image.src;
        }
        
        function hideImage() {
            var overlay = document.getElementById("overlay");
            overlay.style.display = "none";
        }
              </script>
    </section>

    <section class="foter">
        <div class="grid-container">
                <div class="grid-item">
                  <div class="yll"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
                    <h1 id="royal">Royal  Hotel</h1>
                    <p>Bologna,Italy Avangu Street <br>345,4567 code foo</p>
    
                </div>
                <div class="grid-item">
                    <h2>Our Services</h2>
                    <p>
                        Rooms <br>
                        Entertainment <br>
                        Room services
                    </p>
                </div>
                <div class="grid-item">
                    <h2>Support</h2>
                    <p>
                        Contacts <br>
                        Privacy policy <br>
                        Help
                    </p>
                </div>
                <div class="grid-item">
                    <h2>Contacts</h2>
                    <p>+34 678 56 34 <br>
                        royal.hotel@gmail.com <br>
                        Social Media <br>
                        <div class="social">
                        <a href="https://www.instagram.com/theroyaliow/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                        <a href="https://uk.linkedin.com/company/the-royal-hotel-iowv" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a>
                        <a href=""><i class="fa-brands fa-twitter"></i></a>
                        <a href="https://www.facebook.com/TheRoyalIOW/" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
                        </div>
                    </p>
                </div>
            </div>
            <br>
         </section>
</body>
</html>