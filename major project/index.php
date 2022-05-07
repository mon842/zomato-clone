<?php require 'partials/favicon.php' ?>
<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: login.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- font-awesome -->
    <script src="https://kit.fontawesome.com/2a5be3dfac.js" crossorigin="anonymous"></script>

    <!-- own css -->
    <link rel="stylesheet" href="style.css">

    <title>Zomato clone</title>
</head>
<body>
    <!-- header -->
    <header>
        <nav>
            <a href="" class="applink" style="font-size:20px">
                <svg xmlns="http://www.w3.org/2000/svg" fill="#FFFFFF" width="10" height="10" viewBox="0 0 20 20" aria-labelledby="icon-svg-title- icon-svg-desc-" role="img" class="sc-rbbb40-0 gvsUip" style="user-select: auto;"><title style="user-select: auto;">download-app</title><path d="M18.5793 9.18939H16.5865H16.3199C15.7307 9.18939 15.2529 9.6672 15.2529 10.2583V10.3742C15.2529 10.9659 15.7307 11.444 16.3207 11.444H18.3156H18.5793C19.1696 11.444 19.6488 10.9639 19.6488 10.3742L19.6477 10.2569C19.6488 9.6672 19.1696 9.18939 18.5793 9.18939Z" style="user-select: auto;"></path><path d="M18.5804 6.52262H18.1097V1.35122C18.1097 0.607964 17.5017 0 16.7582 0H7.84167C7.09841 0 6.49045 0.608249 6.49045 1.35122V5.06151C4.69196 6.07821 2.83696 7.14029 2.83296 7.14286C1.82597 7.5573 0.350586 8.89453 0.350586 12.0522C0.350586 12.3342 0.369139 12.5945 0.395113 12.846C0.40339 12.9197 0.412524 12.9904 0.422514 13.0615C0.448488 13.2462 0.481027 13.4229 0.519845 13.5907C0.533831 13.6506 0.544678 13.7131 0.559805 13.7705C0.612039 13.9646 0.67255 14.1467 0.740482 14.32C0.774733 14.4059 0.811839 14.4841 0.84923 14.5646C0.88919 14.6494 0.929436 14.7327 0.972535 14.8106C1.02249 14.9045 1.07244 14.995 1.12724 15.0809C1.14037 15.1009 1.15464 15.1192 1.16805 15.1394C2.46847 17.1052 4.8675 17.114 4.8675 17.114H6.49045V18.6494C6.49045 19.3918 7.09841 19.9997 7.84167 19.9997H16.7579C17.5014 19.9997 18.1094 19.3915 18.1094 18.6494V16.7767H18.3155V16.7755H18.5784C19.1695 16.7755 19.6487 16.2974 19.6476 15.7063L19.6487 15.5898C19.6476 14.9996 19.1695 14.5229 18.5792 14.5229H18.3155H16.5861H16.3195C15.7292 14.5229 15.2525 15.0007 15.2525 15.5907V15.7091C15.2525 16.2977 15.7304 16.7775 16.3203 16.7775H17.1692V17.5008H7.43036V7.79877C7.91959 7.48851 8.37256 7.18995 8.63088 6.98987C9.93957 5.97774 11.1818 5.17169 11.3499 4.4407C11.5688 3.49222 10.8407 2.69302 9.57765 3.34922C9.17976 3.55587 8.36315 4.00885 7.43036 4.53261V2.14129L17.1692 2.14271V6.52205H16.5861V6.52319H16.3209C15.7304 6.52319 15.2511 7.001 15.2511 7.59269V7.70858C15.2511 8.29999 15.7303 8.77665 16.3195 8.77665H16.5846H18.3141H18.5798C19.1695 8.77665 19.6476 8.29884 19.6476 7.70858V7.58955C19.6487 7.00186 19.1709 6.52262 18.5804 6.52262ZM12.2986 17.9752C12.6731 17.9752 12.9751 18.2774 12.9751 18.6511C12.9751 19.0255 12.6728 19.3267 12.2986 19.3267C11.9256 19.3267 11.6242 19.0247 11.6242 18.6511C11.6247 18.2786 11.927 17.9752 12.2986 17.9752ZM13.7266 1.30098H10.8735C10.7839 1.30098 10.7097 1.2282 10.7097 1.13829C10.7097 1.04695 10.7839 0.974169 10.8735 0.974169H13.7266C13.8163 0.974169 13.8893 1.04667 13.8893 1.13829C13.8893 1.22792 13.8163 1.30098 13.7266 1.30098Z" style="user-select: auto;"></path><path d="M18.5788 11.8561H18.3151H16.3193C15.7302 11.8561 15.251 12.3353 15.251 12.9253V13.0423C15.251 13.6329 15.7291 14.1107 16.3193 14.1107H16.5845H18.3139H18.5782C19.1693 14.1107 19.646 13.6329 19.6474 13.0423V12.9253C19.6472 12.3353 19.1705 11.8561 18.5788 11.8561Z" style="user-select: auto;"></path></svg>
                Get the App
            </a>
            <ul>
                <li>
                    <a href="index.php">Home</a>
                </li>
                <li>
                    <a href="resturant.php">Add resturant</a>
                </li>
                <li>
                    <a class="btn btn-primary" href="/major%20project/logout.php" role="button">Logout</a>
                </li>
                <li>
                    <?php echo '<div id="acc"><a  href="acc.html">'.$_SESSION['username'].'</a></div>'?>
                </li>
                
                
            </ul>
        </nav>
        
        <section>
            <img src="https://b.zmtcdn.com/web_assets/8313a97515fcb0447d2d77c276532a511583262271.png" class="brand" alt="" role="presentation" style="user-select: auto;">
            <h1  class="head_line">Discover drinks in</h1>
            <div class="inputs">
                <svg xmlns="http://www.w3.org/2000/svg" fill="#FF7E8B" width="20" height="25" viewBox="0 0 20 20" aria-labelledby="icon-svg-title- icon-svg-desc-" role="img" class="sc-rbbb40-0 iRDDBk" style="user-select: auto;"><title style="user-select: auto;">location-fill</title><path d="M10.2 0.42c-4.5 0-8.2 3.7-8.2 8.3 0 6.2 7.5 11.3 7.8 11.6 0.2 0.1 0.3 0.1 0.4 0.1s0.3 0 0.4-0.1c0.3-0.2 7.8-5.3 7.8-11.6 0.1-4.6-3.6-8.3-8.2-8.3zM10.2 11.42c-1.7 0-3-1.3-3-3s1.3-3 3-3c1.7 0 3 1.3 3 3s-1.3 3-3 3z" style="user-select: auto;"></path></svg>
                <input type="text" placeholder="Kolkata" id="search_address">
                <svg xmlns="http://www.w3.org/2000/svg" id="search_arrow" fill="#4F4F4F" width="12" height="12" viewBox="0 0 20 20" aria-labelledby="icon-svg-title- icon-svg-desc-" role="img" class="sc-rbbb40-0 ezrcri"><title>down-triangle</title><path d="M20 5.42l-10 10-10-10h20z"></path></svg>
                <svg xmlns="http://www.w3.org/2000/svg" fill="#828282" width="18" height="18" viewBox="0 0 20 20" aria-labelledby="icon-svg-title- icon-svg-desc-" role="img" class="sc-rbbb40-0 iwHbVQ"><title>Search</title><path d="M19.78 19.12l-3.88-3.9c1.28-1.6 2.080-3.6 2.080-5.8 0-5-3.98-9-8.98-9s-9 4-9 9c0 5 4 9 9 9 2.2 0 4.2-0.8 5.8-2.1l3.88 3.9c0.1 0.1 0.3 0.2 0.5 0.2s0.4-0.1 0.5-0.2c0.4-0.3 0.4-0.8 0.1-1.1zM1.5 9.42c0-4.1 3.4-7.5 7.5-7.5s7.48 3.4 7.48 7.5-3.38 7.5-7.48 7.5c-4.1 0-7.5-3.4-7.5-7.5z"></path></svg>
                <input type="text" placeholder="Search for resturants or dish" class="search2">
                <div class="location-bx" id="location-bx">
                    <div class="loc">
                        <h3><svg xmlns="http://www.w3.org/2000/svg" fill="#EF4F5F" width="14" height="14" viewBox="0 0 20 20" aria-labelledby="icon-svg-title- icon-svg-desc-" role="img" class="sc-rbbb40-0 kyPUnV"><title>current-location</title><path d="M13.58 10c0 1.977-1.603 3.58-3.58 3.58s-3.58-1.603-3.58-3.58c0-1.977 1.603-3.58 3.58-3.58v0c1.977 0 3.58 1.603 3.58 3.58v0zM20 9.52v0.96c0 0.265-0.215 0.48-0.48 0.48v0h-1.72c-0.447 3.584-3.256 6.393-6.802 6.836l-0.038 0.004v1.72c0 0.265-0.215 0.48-0.48 0.48v0h-0.96c-0.265 0-0.48-0.215-0.48-0.48v0-1.72c-3.575-0.455-6.375-3.262-6.816-6.802l-0.004-0.038h-1.74c-0.265 0-0.48-0.215-0.48-0.48v0-0.96c0-0.265 0.215-0.48 0.48-0.48v0h1.74c0.445-3.578 3.245-6.385 6.781-6.836l0.039-0.004v-1.72c0-0.265 0.215-0.48 0.48-0.48v0h0.96c0.265 0 0.48 0.215 0.48 0.48v0 1.72c3.584 0.447 6.393 3.256 6.836 6.802l0.004 0.038h1.72c0.265 0 0.48 0.215 0.48 0.48v0zM15.96 10c0-3.292-2.668-5.96-5.96-5.96s-5.96 2.668-5.96 5.96c0 3.292 2.668 5.96 5.96 5.96v0c3.292 0 5.96-2.668 5.96-5.96v0z"></path></svg>
                            Detect current-location
                        </h3>
                        <p>Using GPS</p>
                        <hr>
                    </div>
                    <h3>Recent Location</h3>
                    <div class="recent">
                        <a href="">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="#1C1C1C" width="15" height="15" viewBox="0 0 20 20" aria-labelledby="icon-svg-title- icon-svg-desc-" role="img" class="sc-rbbb40-0 jKmKoK"><title>time</title><path d="M14.76 9.040h-4.22l-2.58-4.28c-0.147-0.354-0.489-0.598-0.889-0.598-0.53 0-0.96 0.43-0.96 0.96 0 0.227 0.079 0.436 0.211 0.6l-0.001-0.002 2.86 4.76c0.172 0.278 0.474 0.46 0.82 0.46 0 0 0 0 0.001 0h4.76c0.467-0.070 0.822-0.469 0.822-0.95s-0.354-0.88-0.817-0.949l-0.005-0.001zM10 0c-5.523 0-10 4.477-10 10s4.477 10 10 10c5.523 0 10-4.477 10-10v0c0-5.523-4.477-10-10-10v0zM10 18.58c-4.739 0-8.58-3.841-8.58-8.58s3.841-8.58 8.58-8.58c4.739 0 8.58 3.841 8.58 8.58v0c0 4.739-3.841 8.58-8.58 8.58v0z"></path></svg>
                            kolkata, Howarh
                        </a>
                        <a href="">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="#1C1C1C" width="15" height="15" viewBox="0 0 20 20" aria-labelledby="icon-svg-title- icon-svg-desc-" role="img" class="sc-rbbb40-0 jKmKoK"><title>time</title><path d="M14.76 9.040h-4.22l-2.58-4.28c-0.147-0.354-0.489-0.598-0.889-0.598-0.53 0-0.96 0.43-0.96 0.96 0 0.227 0.079 0.436 0.211 0.6l-0.001-0.002 2.86 4.76c0.172 0.278 0.474 0.46 0.82 0.46 0 0 0 0 0.001 0h4.76c0.467-0.070 0.822-0.469 0.822-0.95s-0.354-0.88-0.817-0.949l-0.005-0.001zM10 0c-5.523 0-10 4.477-10 10s4.477 10 10 10c5.523 0 10-4.477 10-10v0c0-5.523-4.477-10-10-10v0zM10 18.58c-4.739 0-8.58-3.841-8.58-8.58s3.841-8.58 8.58-8.58c4.739 0 8.58 3.841 8.58 8.58v0c0 4.739-3.841 8.58-8.58 8.58v0z"></path></svg>
                            Sonagchi
                        </a>
                        <a href="">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="#1C1C1C" width="15" height="15" viewBox="0 0 20 20" aria-labelledby="icon-svg-title- icon-svg-desc-" role="img" class="sc-rbbb40-0 jKmKoK"><title>time</title><path d="M14.76 9.040h-4.22l-2.58-4.28c-0.147-0.354-0.489-0.598-0.889-0.598-0.53 0-0.96 0.43-0.96 0.96 0 0.227 0.079 0.436 0.211 0.6l-0.001-0.002 2.86 4.76c0.172 0.278 0.474 0.46 0.82 0.46 0 0 0 0 0.001 0h4.76c0.467-0.070 0.822-0.469 0.822-0.95s-0.354-0.88-0.817-0.949l-0.005-0.001zM10 0c-5.523 0-10 4.477-10 10s4.477 10 10 10c5.523 0 10-4.477 10-10v0c0-5.523-4.477-10-10-10v0zM10 18.58c-4.739 0-8.58-3.841-8.58-8.58s3.841-8.58 8.58-8.58c4.739 0 8.58 3.841 8.58 8.58v0c0 4.739-3.841 8.58-8.58 8.58v0z"></path></svg>
                            Saorapuli
                        </a>
                        <hr>
                    </div>
                </div>
            </div>
        </section>
    </header>

    <!-- Main-content -->
    <div class="container1">
        <div class="card">
            <div class="cards">
                <a href="">
                    <div class="img">
                        <img alt="Order Online" src="https://b.zmtcdn.com/webFrontend/e5b8785c257af2a7f354f1addaf37e4e1647364814.jpeg?output-format=webp&amp;fit=around|402:360&amp;crop=402:360;*,*" loading="lazy" class="sc-s1isp7-5 fyZwWD" style="user-select: auto;">
                        
                    </div>
                    <h3>Online Order</h3>
                </a>
            </div>
        </div>
        <div class="card">
            <div class="cards">
                <a href="">
                    <div class="img">
                        <img alt="Dining Out" src="https://b.zmtcdn.com/webFrontend/d026b357feb0d63c997549f6398da8cc1647364915.jpeg?output-format=webp&amp;fit=around|402:360&amp;crop=402:360;*,*" loading="lazy" class="sc-s1isp7-5 fyZwWD" style="user-select: auto;">
                        
                    </div>
                    <h3>Dining Out</h3>
                </a>
            </div>
        </div>
        <div class="card">
            <div class="cards">
                <a href="">
                    <div class="img">
                        <img alt="Nightlife and Clubs" src="https://b.zmtcdn.com/webFrontend/d9d80ef91cb552e3fdfadb3d4f4379761647365057.jpeg?output-format=webp&amp;fit=around|402:360&amp;crop=402:360;*,*" loading="lazy" class="sc-s1isp7-5 fyZwWD">
                        
                    </div>
                    <h3>Nightlife</h3>
                </a>
            </div>
        </div>
        <div class="card">
            <div class="cards">
                <a href="">
                    <div class="img">
                        <img alt="Pro and Pro Plus" src="https://b.zmtcdn.com/webFrontend/7c5da5fa471e5e5f26745709f60498a71647365004.jpeg?output-format=webp&amp;fit=around|402:360&amp;crop=402:360;*,*" loading="lazy" class="sc-s1isp7-5 fyZwWD">
                        
                    </div>
                    <h3>Lunch</h3>
                </a>
            </div>
        </div>
        <div class="card">
            <div class="cards">
                <a href="">
                    <div class="img">
                        <img alt="Order Online" src="https://b.zmtcdn.com/webFrontend/e5b8785c257af2a7f354f1addaf37e4e1647364814.jpeg?output-format=webp&amp;fit=around|402:360&amp;crop=402:360;*,*" loading="lazy" class="sc-s1isp7-5 fyZwWD" style="user-select: auto;">
                        
                    </div>
                    <h3>Online Order food</h3>
                </a>
            </div>
        </div>
    </div>

    <div class="container2">
        <h1>Collections</h1>
        <div class="tagline">
            <h4>Explore curated lists of top restaurants, cafes, pubs, and bars in Kolkata, based on trends</h4>
            <a href="resturant.php">Add resturant of Kolkata<svg xmlns="http://www.w3.org/2000/svg" fill="#FF7E8B" width="12" height="12" viewBox="0 0 20 20" aria-labelledby="icon-svg-title- icon-svg-desc-" role="img" class="sc-rbbb40-0 ezrcri" style="user-select: auto;"><title style="user-select: auto;">right-triangle</title><path d="M5 0.42l10 10-10 10v-20z" style="user-select: auto;"></path></svg></a>
        </div>
        <div class="cards">
            <div class="card">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTHDXwYlwxReApH-3ssGr7vUeZtUL-613Rc2Q&usqp=CAU" alt="" srcset="">
                <h2>Most Romantic resturants<span>20 new places</span></h2>
            </div>
            <div class="card">
                <img src="https://b.zmtcdn.com/data/pictures/chains/5/19057945/aaf35b067cde055a0a93729d4ac21ee6.jpeg?fit=around|771.75:416.25&crop=771.75:416.25;*,*" alt="" srcset="">
                <h2>Most Romantic resturants<span>20 new places</span></h2>
            </div>
            <div class="card">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSbBH-EnM4E1XfvYBb3qBOV1zELXQXOt_EN8A&usqp=CAU" alt="" srcset="">
                <h2>Most Romantic resturants<span>20 new places</span></h2>
            </div>
            <div class="card">
                <img src="https://www.thenewsminute.com/sites/default/files/styles/slideshow_image_size/public/Hyd_Dum_biryani_biriyani_1200_picxy_30122020.jpg?itok=68QCBcZx" alt="" srcset="">
                <h2>Most Romantic resturants<span>20 new places</span></h2>
            </div>
        </div>
    </div>

    <div class="container3">
        <h1>Popular localities in and around<span> Kolkata</span></h1>
        <div class="cities">
            <li>
                <a href="">Area (22 places)</a>
                <svg xmlns="http://www.w3.org/2000/svg" fill="#1C1C1C" width="15" height="15" viewBox="0 0 20 20" aria-labelledby="icon-svg-title- icon-svg-desc-" role="img" class="sc-rbbb40-0 jKmKoK" style="user-select: auto;"><title style="user-select: auto;">chevron-right</title><path d="M6.98 15.94c-0.3-0.28-0.3-0.76 0-1.060l4.46-4.46-4.46-4.48c-0.3-0.28-0.3-0.76 0-1.060s0.76-0.28 1.060 0l5 5c0.28 0.3 0.28 0.78 0 1.060l-5 5c-0.3 0.3-0.78 0.3-1.060 0z" style="user-select: auto;"></path></svg>
            </li>
            <li>
                <a href="">Area (22 places)</a>
                <svg xmlns="http://www.w3.org/2000/svg" fill="#1C1C1C" width="15" height="15" viewBox="0 0 20 20" aria-labelledby="icon-svg-title- icon-svg-desc-" role="img" class="sc-rbbb40-0 jKmKoK" style="user-select: auto;"><title style="user-select: auto;">chevron-right</title><path d="M6.98 15.94c-0.3-0.28-0.3-0.76 0-1.060l4.46-4.46-4.46-4.48c-0.3-0.28-0.3-0.76 0-1.060s0.76-0.28 1.060 0l5 5c0.28 0.3 0.28 0.78 0 1.060l-5 5c-0.3 0.3-0.78 0.3-1.060 0z" style="user-select: auto;"></path></svg>
            </li>
            <li>
                <a href="">Area (22 places)</a>
                <svg xmlns="http://www.w3.org/2000/svg" fill="#1C1C1C" width="15" height="15" viewBox="0 0 20 20" aria-labelledby="icon-svg-title- icon-svg-desc-" role="img" class="sc-rbbb40-0 jKmKoK" style="user-select: auto;"><title style="user-select: auto;">chevron-right</title><path d="M6.98 15.94c-0.3-0.28-0.3-0.76 0-1.060l4.46-4.46-4.46-4.48c-0.3-0.28-0.3-0.76 0-1.060s0.76-0.28 1.060 0l5 5c0.28 0.3 0.28 0.78 0 1.060l-5 5c-0.3 0.3-0.78 0.3-1.060 0z" style="user-select: auto;"></path></svg>
            </li>
            <li>
                <a href="">Area (22 places)</a>
                <svg xmlns="http://www.w3.org/2000/svg" fill="#1C1C1C" width="15" height="15" viewBox="0 0 20 20" aria-labelledby="icon-svg-title- icon-svg-desc-" role="img" class="sc-rbbb40-0 jKmKoK" style="user-select: auto;"><title style="user-select: auto;">chevron-right</title><path d="M6.98 15.94c-0.3-0.28-0.3-0.76 0-1.060l4.46-4.46-4.46-4.48c-0.3-0.28-0.3-0.76 0-1.060s0.76-0.28 1.060 0l5 5c0.28 0.3 0.28 0.78 0 1.060l-5 5c-0.3 0.3-0.78 0.3-1.060 0z" style="user-select: auto;"></path></svg>
            </li>
            <li>
                <a href="">Area (22 places)</a>
                <svg xmlns="http://www.w3.org/2000/svg" fill="#1C1C1C" width="15" height="15" viewBox="0 0 20 20" aria-labelledby="icon-svg-title- icon-svg-desc-" role="img" class="sc-rbbb40-0 jKmKoK" style="user-select: auto;"><title style="user-select: auto;">chevron-right</title><path d="M6.98 15.94c-0.3-0.28-0.3-0.76 0-1.060l4.46-4.46-4.46-4.48c-0.3-0.28-0.3-0.76 0-1.060s0.76-0.28 1.060 0l5 5c0.28 0.3 0.28 0.78 0 1.060l-5 5c-0.3 0.3-0.78 0.3-1.060 0z" style="user-select: auto;"></path></svg>
            </li>
            <li>
                <a href="">Area (22 places)</a>
                <svg xmlns="http://www.w3.org/2000/svg" fill="#1C1C1C" width="15" height="15" viewBox="0 0 20 20" aria-labelledby="icon-svg-title- icon-svg-desc-" role="img" class="sc-rbbb40-0 jKmKoK" style="user-select: auto;"><title style="user-select: auto;">chevron-right</title><path d="M6.98 15.94c-0.3-0.28-0.3-0.76 0-1.060l4.46-4.46-4.46-4.48c-0.3-0.28-0.3-0.76 0-1.060s0.76-0.28 1.060 0l5 5c0.28 0.3 0.28 0.78 0 1.060l-5 5c-0.3 0.3-0.78 0.3-1.060 0z" style="user-select: auto;"></path></svg>
            </li>
        </div>
    </div>    


    <!-- app info -->
    <div class="app_data">
        <div class="left_box">
            <img alt="get-zomato-app" src="https://b.zmtcdn.com/data/o2_assets/a500ffc2ab483bc6a550aa635f4e55531648107832.png" class="sc-s1isp7-5 jQwYOW" style="user-select: auto;">
        </div>
        <div class="right_box">
            <h1>Get the Zomato app</h1>
            <h4>We will send you a link, open it on your phone to download the app</h4>
            <div class="radio_btn">
                <label for="">
                    <input type="radio" name="" id="">Email
                </label>
                <label for="">
                    <input type="radio" name="" id="">Phone
                </label>
            </div>
            <div class="input">
                <input type="text" placeholder="Please enter your email">
                <a href="#" class="button" style=" padding:8px">Share app link</a>
            </div>
        </div>
    </div>
<hr>


    <!-- footer -->
    <?php require 'partials/footer.php' ?>
    
    <!-- own javascript -->
    <script src="app.js"></script>
</body>
</html>