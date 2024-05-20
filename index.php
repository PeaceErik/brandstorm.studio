<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brandstorm Studio - Design & Development studio in Aarhus</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/x-icon" href="assets\bs-favicon-150x150.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>

    <!-- GSAP CDN below -->
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/Observer.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollToPlugin.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/MotionPathPlugin.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/TextPlugin.min.js"></script>   
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/EasePack.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/CustomEase.min.js"></script>
</head>

<body>

    <?php include 'parts/header.php' ?>

    <div class="pre-loader">

        <div class="blinder-container">

            <div class="blinder"></div>
            <div class="blinder"></div>
            <div class="blinder"></div>
            <div class="blinder"></div>

        </div>

        <img class="preloader-logo" src="/assets/logo-white.svg" alt="Brandstorm Studio logo">

    </div>


    <section id="hero">

        <h1 class="hero-logo">BRANDSTORM.<br>STUDIO</h1>

        <video id="hero-video" src="./assets/brandstorm_bg_video_30fps.mp4" autoplay loop mute></video>

        <h2 class="hero-txt">
            BRANDSTORM.STUDIO IS A DIGITAL DESIGN STUDIO THAT<br>
            CREATES UNIQUE DIGITAL SOLUTIONS FOR BUSINESSES<BR>
            WHO WANT TO STAND OUT.
        </h2>
        
    </section>


    <section id="our-services">
        
        <div class="headline-container">
            <div class="headline-row">
                <div class="circle"></div>
                <h2>OUR SERVICES</h2>
            </div>
        </div>
        <p> test </p>

    </section>


    <section id="our-approach">
        <h2>test</h2>
    </section>  

    <script type="module" src="parts/preloader.js"></script>
    
</body>

</html>