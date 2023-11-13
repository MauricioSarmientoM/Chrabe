<?php session_start()?>
<!DOCTYPE html>
<html lang="en-US" data-bs-theme="dark">
    <head>
        <meta charset = "utf-8"/>
        <meta name = "author" content = "Self Spectrum"/>
        <meta name = "description" content = "Chromatic Aberration main page. Get to know the last new about our games and updates, Talk with the comumnity and share moments!"/>
        <link rel = "icon" href = "./src/chromaber.png" type = "image/png" />
        <link rel = "stylesheet" href = "./css/generalstyling.css"/>
        <link rel = "stylesheet" href = "./css/index.css"/>
        <link rel = "stylesheet" href = "./css/article.css"/>
        <link rel = "stylesheet" href = "./node_modules/bootstrap/dist/css/bootstrap.min.css" />
        <script type = "text/javascript" src="./node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
        <link rel = "stylesheet" href = "./css/login.css"/>
        <title>Chromatic Aberration</title>
        <svg xmlns="http://www.w3.org/2000/svg" class="icons">
            <symbol id="icon-arrow-right" viewBox="0 0 1792 1792">
                <path d="M1600 960q0 54-37 91l-651 651q-39 37-91 37-51 0-90-37l-75-75q-38-38-38-91t38-91l293-293H245q-52 0-84.5-37.5T128 1024V896q0-53 32.5-90.5T245 768h704L656 474q-38-36-38-90t38-90l75-75q38-38 90-38 53 0 91 38l651 651q37 35 37 90z" />
            </symbol>
            <symbol id="icon-lock" viewBox="0 0 1792 1792">
                <path d="M640 768h512V576q0-106-75-181t-181-75-181 75-75 181v192zm832 96v576q0 40-28 68t-68 28H416q-40 0-68-28t-28-68V864q0-40 28-68t68-28h32V576q0-184 132-316t316-132 316 132 132 316v192h32q40 0 68 28t28 68z" />
            </symbol>
            <symbol id="icon-user" viewBox="0 0 1792 1792">
                <path d="M1600 1405q0 120-73 189.5t-194 69.5H459q-121 0-194-69.5T192 1405q0-53 3.5-103.5t14-109T236 1084t43-97.5 62-81 85.5-53.5T538 832q9 0 42 21.5t74.5 48 108 48T896 971t133.5-21.5 108-48 74.5-48 42-21.5q61 0 111.5 20t85.5 53.5 62 81 43 97.5 26.5 108.5 14 109 3.5 103.5zm-320-893q0 159-112.5 271.5T896 896 624.5 783.5 512 512t112.5-271.5T896 128t271.5 112.5T1280 512z" />
            </symbol>
            <symbol id = "icon-half" viewBox="0 0 285.919 285.919">
                <path d="M142.959,0C64.131,0,0,64.132,0,142.96c0,78.828,64.131,142.959,142.959,142.959c78.828,0,142.96-64.131,142.96-142.959 C285.919,64.132,221.787,0,142.959,0z M142.959,260.919V142.96V25c65.043,0,117.96,52.917,117.96,117.96 C260.919,208.003,208.002,260.919,142.959,260.919z"/>
            </symbol>
        </svg>
        <script>
            const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
            const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
        </script>
    </head>
    <body>
	<?php include "./scripts/navbar.php";?>
	<main>
		<?php include "./scripts/banner.php";?>
        <?php
        if (isset($_SESSION['success'])) {
            echo '<div class="alert alert-success" role="alert">'.$_SESSION['success'].'</div>';
            unset($_SESSION['success']);
        }
        if (isset($_SESSION['warning'])) {
            echo '<div class="alert alert-warning" role="alert">'.$_SESSION['warning'].'</div>';
            unset($_SESSION['warning']);
        }
        ?>
            <div class="container text-center">
                <div class="row g-2">
                    <div class="col-6">
                        <div class="p-3">
                            <div class="card mb-3">
                                <img src="./src/bun.jpeg" class="card-img-top" alt="Bun 'Cowsays' Hi mom!">
                                <div class="card-body">
                                    <h5 class="card-title">Bun Works Like a Charm!</h5>
                                    <p class="card-text">Working with Bun, we realize that function just like one might expect from Node.js or Deno.js, but, like, better? Read more to know!</p>
                                    <p class="card-text"><small class="text-body-secondary">Last updated 6 days ago</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="p-3">
                            <div class="card mb-3">
                                <img src="./src/unity.webp" class="card-img-top" alt="Unity go broke and learn">
                                <div class="card-body">
                                    <h5 class="card-title">Unity Has Apologized</h5>
                                    <p class="card-text">But it is actually resolved all this situation? No, but at least there's some kind of home for new and old user, Click here to read!</p>
                                    <p class="card-text"><small class="text-body-secondary">Last updated 6 days ago</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="p-3">
                            <div class="card mb-3">
                                <img src="./src/progress.jpeg" class="card-img-top" alt="Graphical progress in Birthright">
                                <div class="card-body">
                                    <h5 class="card-title">Slow Progress, But Progress Nonetheless</h5>
                                    <p class="card-text">Is this depression? Maybe? And working this slow doesn't make it better, but hey, here we are, doing what I can, not what I want.</p>
                                    <p class="card-text"><small class="text-body-secondary">Last updated 7 days ago</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="p-3">
                            <div class="card mb-3">
                                <img src="./src/raylib.png" class="card-img-top" alt="Raylib, an open source library">
                                <div class="card-body">
                                    <h5 class="card-title">Migrating from Unity?</h5>
                                    <p class="card-text">Raylib is an  open source library for C that allows you to make light weight and fast videogames. Read more here!</p>
                                    <p class="card-text"><small class="text-body-secondary">Last updated 8 days ago</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <section class = "aligntextleft padding2rem splash">
                <h2>What we do</h2>
                <div class = "flexrow">
                    <article align="justify">
                        <p>At our game development studio, our mission is to craft exceptional indie video games that not only meet but exceed the highest standards in the industry. We take pride in our commitment to transparency throughout the entire development process, ensuring that every step is as crystal clear as possible. From concept to release, we maintain open communication channels with our team members and prioritize collaboration to bring out the best in each individual's talents. This dedication to clarity extends beyond our internal operations; we believe in treating our players with the utmost respect, providing them with a seamless and enjoyable gaming experience. By upholding these principles, we aim to create not just games, but immersive worlds that captivate and delight players while fostering a positive and fulfilling work environment for our dedicated team.</p>
                        <p>In our pursuit of excellence, we understand that the success of our indie games hinges on the passion and dedication of our developers. We foster an environment where creativity flourishes, and innovation is encouraged. With a focus on maintaining high standards, we strive to push the boundaries of what indie games can achieve, delivering memorable experiences that resonate with players worldwide. Our commitment to transparency and respect isn't just a principle; it's ingrained in our company culture. By embracing these values, we aim to set a new standard in the gaming industry—one where players feel valued, developers thrive, and our indie games stand out as paragons of quality and integrity.</p>
                    </article>
                    <image class = "img marginleftauto padding1rem" src = "./src/pixiv.png"/>
                </div>
                <h3 class = "aligntextcenter padding2rem">We hope you all like what we do</h3>
            </section>
        </main>
	<?php include "./scripts/footer.php";?>
    </body>
</html>
