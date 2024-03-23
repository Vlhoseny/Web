<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gamers Hub</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="globle.css">
    <link rel="shortcut icon" href="img/GH_Gaming_Copy.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" 
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <header>
        <nav class="container">
            <div class="nav1 flex">
                <div class="icons flex">
                    <i class="fa-solid fa-magnifying-glass"></i>               
                 </div>
                <div class="lsbtn flex">
                    <button id="signupBtn">SIGN UP</button>
                    <script>
                        document.getElementById("signupBtn").addEventListener("click", function() {
                            window.location.href = "register.html";
                        });
                    </script>
                </div>
            </div>
            <div class="mainnav flex">
                <div class="logo">
                    <h1><a href="/">Gamers<span>Hub</span></a></h1>
                </div>
                <div class="navlist">
                    <ul class="flex">
                        <li><a href="/" class="active">Home</a></li>
                        <li><a href="/">About</a></li>
                        <li><a href="/">Games<i class="fa-solid fa-angle-down"></i></a></li>
                        <li><a href="/">Community</a></li>
                        <li><a href="/">Contact</a></li>  
                    </ul>
                </div>
            </div>
        </nav>
        <div class="headercont container flex">
            <div class="labels flex">
                <div class="flex">
                    <i class="fa-solid fa-tv"></i>
                    <h3 class="flex">
                        <a href="/">PLAYSTATION 5</a>
                        <span>,</span>
                        <a href="/">STEAM</a>
                    </h3>
                </div>
                <div class="flex">
                    <i class="fa-solid fa-tags"></i>
                    <h3 class="flex">
                        <a href="/">ACTION</a>
                        <span>,</span>
                        <a href="/">ADVANTURE</a>
                    </h3>
                </div>
            </div>
            <h1 id="header_title">Baldur's Gate 3</h1>
            <p>   Keep your faith strong and don't let games get in the way of pray.</p>
            <div class="headbtn flex">
                <a href="/" id="d_btn1"><button class="button type1"></button></a>
                <a href="/" id="d_btn1"><button class="button type2"></button></a>
            </div>
        </div>
    </header>
<div class="dots flex">
    <div class="dot"></div>
    <div class="dot"></div>
    <div class="dot"></div>
</div>
    <main>
        <div class="threebox container flex">
            <div class="cbox">
                <img src="img/playstation-god-of-war-i116582.jpg" alt="title">
                <div class="cboxde">
                    <h5>Featured Games</h5>
                    <h2>Gamers Hub</h2>
                    <p>Keep your faith strong and don't let games get in the way of pray.</p>
                    <a href="/">All GAMES</a>
                </div>
            </div>
            <div class="cbox">
                <img src="img/zombie.jpg" alt="title">
                <div class="cboxde">
                    <h5>Featured Games</h5>
                    <h2>GamersHub</h2>
                    <p>Keep your faith strong and don't let games get in the way of pray.</p>
                    <a href="/">All GAMES</a>
                </div>
            </div>
            <div class="cbox">
                <img src="img/world-of-warcraft-wrath-of-the-lich-king-hd-wallpaper-1440x900.jpg" alt="title">
                <div class="cboxde">
                    <h5>Featured Games</h5>
                    <h2>GamersHub</h2>
                    <p>Keep your faith strong and don't let games get in the way of pray. </p>
                    <a href="/">All GAMES</a>
                </div>
            </div>
        </div>
        <div class="container filter flex">
            <button class="active">ALL</button>
            <button>PLAYSTATION 4</button>
            <button>UPLAY</button>
            <button>XBOX ONE</button>
            <button>ORIGIN</button>
            <button>STEAM</button>
        </div>
        <div class="gamecards container flex">
        <?php
include("connection.php");
$query="SELECT * FROM games ;";
$sql=mysqli_query($con,$query); 
if(mysqli_num_rows($sql)>0)
{
while($row=mysqli_fetch_array($sql))
{
?>
            <div class="card">
                <div class="cardimg">
                    <a href="/">
                    <img src="<?php echo  $row['Game_image'];?>" alt=""></span>
                    </a>
                    <div class="tegs">
                        <a href="/">ACTION</a>
                        <a href="/">ADVANTURE</a>
                        <i class="fa-solid fa-tags"></i>
                    </div>
                </div>
                <div class="cardinfo">
                    <h2><?php echo  $row['Game_name'];?></h2>
                    <div class="playteg flex">
                        <i class="fa-solid fa-tv"></i>
                        <h3 class="flex">
                            <a href="/">PLAYSTATION 5</a>
                            <span>,</span>
                            <a href="/">STEAM</a>
                        </h3>
                    </div>
                    <p>Keep your faith strong and don't let games get in the way of pray. </p>
                </div>
            </div>
            <?php }}?>

        <div class="allgamebtn flex container">
            <a href="/">
                <button>ALL GAMES</button>
            </a>
        </div>
        <div class="newrelesed flex">
            <div class="container">
                <div class="newretitle">
                    <h2>Spider Man 2</h2>
                    <h2>Is released!</h2>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel, debitis dolorum nostrum laudantium odio
                    blanditiis repudiandae autem. Culpa cum numquam voluptates consequatur saepe similique? Ea
                    repudiandae quo culpa corporis officiis?</p>
                <div class="flex">
                    <a href="/">buy now</a>
                </div>
            </div>
        </div>
        <div class="featuredgames container flex">
            <h2>Upcoming&nbsp;<span>games</span></h2>
            <div class="fgamescards flex">
                <div class="fcard">
                    <img src="img/Lastofus.png" alt="">
                    <div class="fcarddetails">
                        <div class="tegs2 flex">
                            <div class="teg flex">
                                <i class="fa-solid fa-tv"></i>
                                <h3 class="flex">
                                    <a href="/">Steam</a>
                                    <a href="/">PS 5</a>
                                </h3>
                            </div>
                            <div class="teg flex">
                                <i class="fa-solid fa-tags"></i>
                                <h3 class="flex">
                                    <a href="/">Open World</a>
                                    <a href="/">Zombie</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="fhovercont">
                        <h2>The Last of Us II </h2>
                    </div>
                </div>
                <div class="fcard">
                    <img src="img/liesofp-1702510493314.jpg" alt="">
                    <div class="fcarddetails">
                        <div class="tegs2 flex">
                            <div class="teg flex">
                                <i class="fa-solid fa-tv"></i>
                                <h3 class="flex">
                                    <a href="/">Steam</a>
                                    <a href="/">PS 5</a>
                                </h3>
                            </div>
                            <div class="teg flex">
                                <i class="fa-solid fa-tags"></i>
                                <h3 class="flex">
                                    <a href="/">Magic</a>
                                    <a href="/">Souls</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="fhovercont">
                        <h2>Lies Of P</h2>
                    </div>
                </div>
                <div class="fcard">
                    <img src="img/hellblade_2_senua_s_saga-711830110-large.jpg" alt="">
                    <div class="fcarddetails">
                        <div class="tegs2 flex">
                            <div class="teg flex">
                                <i class="fa-solid fa-tv"></i>
                                <h3 class="flex">
                                    <a href="/">Steam</a>
                                    <a href="/">Xbox</a>
                                </h3>
                            </div>
                            <div class="teg flex">
                                <i class="fa-solid fa-tags"></i>
                                <h3 class="flex">
                                    <a href="/">Advanture</a>
                                    <a href="/">Action</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="fhovercont">
                        <h2>Hell Blade II</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="blogandnews flex">
            <div class="container">
                <h2>blog&nbsp;<span>& news</span></h2>
                <div class="threecards flex">
                    <div class="tcard">
                        <img src="img/Mount.jpg" alt="">
                        <div class="tcarddetails">
                            <h3>About Mount&Blade</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium, magnam?</p>
                            <div class="postby flex">
                                <div class="flex">
                                    <i class="fa-brands fa-centercode"></i>
                                    <h5>TaleWorlds Entertainment</h5>
                                </div>
                                <div class="flex">
                                    <i class="fa-solid fa-folder-open"></i>
                                    <h5>video</h5>
                                </div>
                            </div>
                            <div class="posttime flex">
                                <i class="fa-regular fa-clock"></i>
                                <h5>March 15, 2024</h5>
                            </div>
                        </div>
                    </div>
                    <div class="tcard">
                        <img src="img/Gta6.png" alt="">
                        <div class="tcarddetails">
                            <h3>New Trailer is Released!</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium, magnam?</p>
                            <div class="postby flex">
                                <div class="flex">
                                    <i class="fa-brands fa-centercode"></i>
                                    <h5>Rockstar Games</h5>
                                </div>
                                <div class="flex">
                                    <i class="fa-solid fa-folder-open"></i>
                                    <h5>video</h5>
                                </div>
                            </div>
                            <div class="posttime flex">
                                <i class="fa-regular fa-clock"></i>
                                <h5>September 13, 2024</h5>
                            </div>
                        </div>
                    </div>
                    <div class="tcard">
                        <img src="img/Best-Star-Wars-games-on-PC.jpg" alt="">
                        <div class="tcarddetails">
                            <h3>Discount On Star Wars Game</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium, magnam?</p>
                            <div class="postby flex">
                                <div class="flex">
                                    <i class="fa-brands fa-centercode"></i>
                                    <h5>Electronic Arts</h5>
                                </div>
                                <div class="flex">
                                    <i class="fa-solid fa-folder-open"></i>
                                    <h5>video</h5>
                                </div>
                            </div>
                            <div class="posttime flex">
                                <i class="fa-regular fa-clock"></i>
                                <h5>March 19, 2024</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="gamesearch flex">
            <div class="container flex">
                <div class="mainnav flex">
                <div class="logo">
                    <h1><a href="/">Gamers<span>Hub</span></a></h1>
                </div>
            </div>
        </div>
    </div>
    </main>
    <footer>
        <section class="footersec container flex">
            <div class="footerh2 flex">
                <h2>about&nbsp;<span>us</span></h2>
                <h2>latest&nbsp;<span>news</span></h2>
                <h2>apps&nbsp;<span>& platforms</span></h2>
            </div>
            <div class="flex footermenu">
                <div class="faboutus">
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repellat doloribus voluptates, possimus quos dolorem animi sit nulla cumque eaque ipsa.</p>
                    <div class="flex">
                        <ul class="flex">
                            <li><a href="/"><i class="fa-solid fa-caret-right"></i>Home</a></li>
                            <li><a href="/"><i class="fa-solid fa-caret-right"></i>Blog</a></li>
                            <li><a href="/"><i class="fa-solid fa-caret-right"></i>Games</a></li>
                            <li><a href="/"><i class="fa-solid fa-caret-right"></i>About</a></li>
                        </ul>
                        <ul class="flex">
                            <li><a href="/"><i class="fa-solid fa-caret-right"></i>Team</a></li>
                            <li><a href="/"><i class="fa-solid fa-caret-right"></i>Community</a></li>
                            <li><a href="/"><i class="fa-solid fa-caret-right"></i>eSport</a></li>
                            <li><a href="/"><i class="fa-solid fa-caret-right"></i>Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="latestnews">
                    <div class="fnews flex">
                        <div class="fnewscard flex">
                            <img src="img/Mount.jpg" alt="">
                            <div class="fnewsdetails">
                                <h4> Mount&Blade</h4>
                                <p><i class="fa-regular fa-clock"></i><span>September 15, 2024</span></p>
                            </div>
                        </div>
                        <div class="fnewscard flex">
                            <img src="img/Gta6.png" alt="">
                            <div class="fnewsdetails">
                                <h4>Gta V</h4>
                                <p><i class="fa-regular fa-clock"></i><span>September 13, 2024</span></p>
                            </div>
                        </div>
                        <div class="fnewscard flex">
                            <img src="img/Best-Star-Wars-games-on-PC.jpg" alt="">
                            <div class="fnewsdetails">
                                <h4>  Star Wars </h4>
                                <p><i class="fa-regular fa-clock"></i><span>September 19, 2024</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="appsec">
                    <div class="platform flex">
                        <div class="apps flex">
                            <i class="fa-brands fa-apple"></i>
                            <div class="appde">
                                <h4>Buy now via</h4>
                                <h4>Apple Store</h4>
                            </div>
                        </div>
                        <div class="apps flex">
                            <i class="fa-brands fa-google-play"></i>
                            <div class="appde">
                                <h4>Buy now via</h4>
                                <h4>Google Play</h4>
                            </div>
                        </div>
                        <div class="apps flex">
                            <i class="fa-brands fa-steam"></i>
                            <div class="appde">
                                <h4>Buy now via</h4>
                                <h4>Steam</h4>
                            </div>
                        </div>
                        <div class="apps flex">
                            <i class="fa-brands fa-windows"></i>
                            <div class="appde">
                                <h4>Buy now via</h4>
                                <h4>windows</h4>
                            </div>
                        </div>
                        <div class="apps flex">
                            <i class="fa-brands fa-amazon"></i>
                            <div class="appde">
                                <h4>Buy now via</h4>
                                <h4>Amezon</h4>
                            </div>
                        </div>
                        <div class="apps flex">
                            <i class="fa-brands fa-paypal"></i>
                            <div class="appde">
                                <h4>Buy now via</h4>
                                <h4>Paypal</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="copyrightsec flex">
            <div class="copyright container flex">
                <div class="flex">
                    <h2>Gamers<span>Hub</span></h2>
                    <p>Copyright &copy; 2024 GamersHub - All rights reserved.</p>
                </div>
                <ul class="flex">
                    <li><a href="/" class="factive">Home</a></li>
                    <li><a href="/">Help Center</a></li>
                    <li><a href="/">Contact</a></li>
                    <li><a href="/">Career</a></li>
                    <li><a href="/">Advertise</a></li>
                    <li><a href="/">Terms and Conditions</a></li>
                </ul>
            </div>
        </section>
    </footer>

        
<script src="script.js"></script>
</body>
</html>