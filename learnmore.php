<!DOCTYPE html>
<html lang="en-US" data-bs-theme="dark">
	<head>
        <meta charset = "utf-8"/>
        <meta name = "author" content = "Self Spectrum"/>
        <meta name = "description" content = "Chromatic Aberration main page. Get to know the last new about our games and updates, Talk with the comumnity and share moments!"/>
        <link rel = "icon" href = "./src/chromaber.png" type = "image/png" />
        <link rel = "stylesheet" href = "./css/generalstyling.css"/>
        <link rel = "stylesheet" href = "./css/login.css"/>
        <link rel = "stylesheet" href = "./css/learnmore.css"/>
        <link rel = "stylesheet" href = "./node_modules/bootstrap/dist/css/bootstrap.min.css" />
        <script type = "text/javascript" src="./node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
        <title>Chromatic Aberration</title>
        <svg xmlns="http://www.w3.org/2000/svg" class="icons">
            <symbol id="icon-arrow-right" viewBox="0 0 1792 1792">
                <path d="M1600 960q0 54-37 91l-651 651q-39 37-91 37-51 0-90-37l-75-75q-38-38-38-91t38-91l293-293H245q-52 0-84.5-37.5T128 1024V896q0-53 32.5-90.5T245 768h704L656 474q-38-36-38-90t38-90l75-75q38-38 90-38 53 0 91 38l651 651q37 35 37 90z" />
            </symbol>
            <symbol id = "icon-letter" viewBox="0 0 75.294 75.294">
                <g>
                    <path d="M66.097,12.089h-56.9C4.126,12.089,0,16.215,0,21.286v32.722c0,5.071,4.126,9.197,9.197,9.197h56.9 c5.071,0,9.197-4.126,9.197-9.197V21.287C75.295,16.215,71.169,12.089,66.097,12.089z M61.603,18.089L37.647,33.523L13.691,18.089 H61.603z M66.097,57.206h-56.9C7.434,57.206,6,55.771,6,54.009V21.457l29.796,19.16c0.04,0.025,0.083,0.042,0.124,0.065 c0.043,0.024,0.087,0.047,0.131,0.069c0.231,0.119,0.469,0.215,0.712,0.278c0.025,0.007,0.05,0.01,0.075,0.016 c0.267,0.063,0.537,0.102,0.807,0.102c0.001,0,0.002,0,0.002,0c0.002,0,0.003,0,0.004,0c0.27,0,0.54-0.038,0.807-0.102 c0.025-0.006,0.05-0.009,0.075-0.016c0.243-0.063,0.48-0.159,0.712-0.278c0.044-0.022,0.088-0.045,0.131-0.069 c0.041-0.023,0.084-0.04,0.124-0.065l29.796-19.16v32.551C69.295,55.771,67.86,57.206,66.097,57.206z"/>
                </g>
            </symbol>
            <symbol id = "icon-half" viewBox="0 0 285.919 285.919">
                <path d="M142.959,0C64.131,0,0,64.132,0,142.96c0,78.828,64.131,142.959,142.959,142.959c78.828,0,142.96-64.131,142.96-142.959 C285.919,64.132,221.787,0,142.959,0z M142.959,260.919V142.96V25c65.043,0,117.96,52.917,117.96,117.96 C260.919,208.003,208.002,260.919,142.959,260.919z"/>
            </symbol>
            <symbol id="icon-lock" viewBox="0 0 1792 1792">
                <path d="M640 768h512V576q0-106-75-181t-181-75-181 75-75 181v192zm832 96v576q0 40-28 68t-68 28H416q-40 0-68-28t-28-68V864q0-40 28-68t68-28h32V576q0-184 132-316t316-132 316 132 132 316v192h32q40 0 68 28t28 68z" />
            </symbol>
            <symbol id="icon-user" viewBox="0 0 1792 1792">
                <path d="M1600 1405q0 120-73 189.5t-194 69.5H459q-121 0-194-69.5T192 1405q0-53 3.5-103.5t14-109T236 1084t43-97.5 62-81 85.5-53.5T538 832q9 0 42 21.5t74.5 48 108 48T896 971t133.5-21.5 108-48 74.5-48 42-21.5q61 0 111.5 20t85.5 53.5 62 81 43 97.5 26.5 108.5 14 109 3.5 103.5zm-320-893q0 159-112.5 271.5T896 896 624.5 783.5 512 512t112.5-271.5T896 128t271.5 112.5T1280 512z" />
            </symbol>
        </svg>
	</head>
	<body>
        <nav>
            <ul class = "navbarNav">
                <li class = "navbarItem">
                    <a class = "navbarLink" href = "index.html">
                        <span>
                            <img class = "round" src = "./src/chromaber.png" alt = "Chromatic Aberration Logo" width = "60" height = "60"/>
                        </span>
                        <p class = "linkText">Home</p>
                    </a>
                </li>
                <li class = "navbarItem" data-bs-toggle="modal" data-bs-target="#loginModal">
                    <a class = "navbarLink" href = "#">
                        <span>
                            <svg class="navbaricon"><use xlink:href="#icon-user"></use></svg>
                        </span>
                        <p class = "linkText">Login</p>
                    </a>
                </li>
            </ul>
        </nav>
        <script>
            const myModal = document.getElementById('loginModal')
            const myInput = document.getElementById('login')

            myModal.addEventListener('shown.bs.modal', () => {
                myInput.focus()
            })
        </script>
        <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- https://enlear.academy/31-example-login-form-for-website-42abc6f6d525 -->
                        <div class="content">
                            <form action = "" method="POST" class="form login">
                                <div class="form__field">
                                    <label class = "asidelabel" for="login__username"><svg class="icon"><use xlink:href="#icon-user"></use></svg><span class="hidden">Username</span></label>
                                    <input autocomplete="username" id="login__username" type="text" name="username" class="form__input" placeholder="Username" required>
                                </div>
                                <div class="form__field">
                                    <label class = "asidelabel" for="login__password"><svg class="icon"><use xlink:href="#icon-lock"></use></svg><span class="hidden">Password</span></label>
                                    <input id="login__password" type="password" name="password" class="form__input" placeholder="Password" required>
                                </div>
                                <div class="form__field">
                                    <input type="submit" value="Log In">
                                </div>
                            </form>
                            <p class="text--center">Not a member? <a href="signin.html"><i>Sign in now</i></a> <svg class="icon"><use xlink:href="#icon-arrow-right"></use></svg></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <main>
            <div id="carouselCaptions" class="carousel slide carousel-fade boxShadow content" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="./src/birthright.png" class="d-block carousel-img" alt="...">
                        <div class="carousel-caption d-md-block">
                            <h1 class = "white">Chromatic Aberration</h1>
                            <p class = "white transBG">Working hard in bring the best quality.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="./src/isaac.png" class="d-block carousel-img" alt="...">
                        <div class="carousel-caption d-md-block">
                            <h1 class = "white">Chromatic Aberration</h1>
                            <p class = "white transBG">Total transparency and support when needed.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="./src/dimg.png" class="d-block carousel-img" alt="...">
                        <div class="carousel-caption d-md-block">
                            <h1 class = "white">Chromatic Aberration</h1>
                            <p class = "white transBG">Compromise with our players.</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <div class = "presgrid content boxShadow">
                <h2 class = "title">Who we are</h2>
                <p class = "article">
                    Chromatic Aberration is small organization from Chile full with <i>hopes</i> and <i>dreams</i>, focused in making videogames. The last 6 years, the team has been working on <i>polish</i> and <i>improve</i> their abilities, whether are informatic or artistic skills.
                    Several projects have been created in these years, but rarely one sees the light of the sun since <i>always</i> seems to be some sort of problem with the development, making impossible or quite difficult it's publication. Yey, we don't surrender and keep working on our projects
                    with the same love and illusion like the first day!
                </p>
                <div class="inside-card mb-3 crom">
                    <img src="./src/abercroma.jpg" class="card-img-top" alt="Aberración Cromática">
                    <div class="padding1rem">
                        <i>Aberración Cromática</i> was the first try of going outside and show our works to the world.
                    </div>
                </div>
                <div class="inside-card mb-3 octan">
                    <img src="./src/octan.png" class="card-img-top" alt="Octa(n)">
                    <div class="padding1rem">
                        <i>Octa(n)</i> is a parallel project in an attempt of making useful tools for the everyday people.
                    </div>
                </div>
            </div>

            <div class="container text-center">
                <div class="row g-1">
                    <div class="col-4">
                        <div class="p-3">
                            <div class="card mb-3">
                                <img src="./src/twim.jpg" class="card-img-top" alt="Twim Blark Me">
                                <div class="card-body">
                                    <h5 class="card-title">Twim Blark Me</h5>
                                    <p class="card-text">Digital painter and animator, expert in his area, can't dissapoint!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="p-3">
                            <div class="card mb-3">
                                <img src="./src/hyperstrident.png" class="card-img-top" alt="Hyper Strident">
                                <div class="card-body">
                                    <h5 class="card-title">Hyper Strident</h5>
                                    <p class="card-text">Unique musician and productor, nobody like him when he's in charge!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="p-3">
                            <div class="card mb-3">
                                <img src="./src/ss.jpg" class="card-img-top" alt="Self Spectrum">
                                <div class="card-body">
                                    <h5 class="card-title">Self Spectrum</h5>
                                    <p class="card-text">Game developer and game designer, fighting against depression.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class = "content width100 flexrow transBG boxShadow">
                <p class = "padding4rem">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. In a fermentum nibh. Donec ac sapien et velit consectetur viverra nec non est. Donec ac orci at neque malesuada eleifend in non tellus. Ut ultricies pretium dolor ornare dictum. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a eros ut magna blandit semper. Praesent non justo a ante eleifend porta eu ornare ipsum. Integer a eros quis felis porttitor egestas vitae nec elit. Praesent et enim eleifend, euismod elit a, malesuada dui. Nam et luctus magna. Duis ut risus est.
                </p>
                <p class = "padding4rem">
                    Morbi tempor tincidunt lacus, ac vestibulum nisl suscipit sit amet. Maecenas lectus nisl, lacinia sit amet nibh non, lobortis egestas urna. Morbi pretium, sem eget molestie eleifend, diam quam elementum eros, ac vehicula odio nulla sed turpis. Vestibulum sollicitudin, diam vitae porta laoreet, magna turpis dapibus urna, at feugiat felis erat eu dui. Praesent ultricies volutpat velit id aliquet. Duis bibendum auctor dui, quis dictum lacus posuere vel. Nam ante tellus, efficitur pellentesque massa eget, egestas ornare tellus. Cras mattis finibus leo, id lacinia odio consequat eget.
                </p>
            </div>
            <div class = "content width100 flexrow transBG boxShadow">
                <image class = "img marginleftauto marginrightauto padding1rem" src = "./src/pixiv.png"/>
                <image class = "img marginleftauto marginrightauto padding1rem" src = "./src/pixiv.png"/>
                <image class = "img marginleftauto marginrightauto padding1rem" src = "./src/pixiv.png"/>
                <image class = "img marginleftauto marginrightauto padding1rem" src = "./src/pixiv.png"/>
                <image class = "img marginleftauto marginrightauto padding1rem" src = "./src/pixiv.png"/>
            </div>
        </main>
        <footer>
            <div class = "width100 flexrow alignitemcenter">
                <div class="mapouter">
                    <div class="gmap_canvas">
                        <iframe class="gmap_iframe round1rem" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=400&amp;height=400&amp;hl=en&amp;q=Universidad of Atacama&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
                    </div>
                </div>
                <form action = "" method="POST" class="form login padding2rem marginleftauto">
                    <div class="form__field">
                        <label class = "asidelabel" for="name"><svg class="icon"><use xlink:href="#icon-half"></use></svg><span class="hidden">Name</span></label>
                        <input autocomplete="name" id="name" type="text" name="name" class="form__input" placeholder="Name" required>
                    </div>
                    <div class="form__field">
                        <label class = "asidelabel" for="login__password"><svg class="icon"><use xlink:href="#icon-letter"></use></svg><span class="hidden">Email</span></label>
                        <input id="email" type="email" name="email" class="form__input" placeholder="Email" required>
                    </div>
                    <div class="form__field">
                        <label class = "asidelabel" for="issue"><svg class="icon"><use xlink:href="#icon-arrow-right"></use></svg><span class="hidden">Issue</span></label>
                        <input id="issue" type="text" name="issue" class="form__input" placeholder="Issue" required>
                    </div>
                    <div class="form__field">
                        <input type="textarea" name="message" class="form__input" placeholder="Message" required>
                    </div>
                    <div class="form__field">
                        <input type="submit" value="Send">
                    </div>
                </form> 
            </div>
            <div class="flexrow">
                <div class="col mb-3 BG0">
                    <a href="index.html">
                        <img class = "footerLogo" src = "./src/logolight.png" alt = "Chromatic Aberration Logo" width = "500px"/>
                    </a>
                </div>
                <div class="col-6 col-md-2 mb-3">
                    <h3>Projects</h3>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0">Birthright</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0">DOOMED</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0">TOH: Between Realms</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0">Scars: Purpouse</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0">Dream Assault</a></li>
                    </ul>
                </div>
                <div class="col-6 col-md-2 mb-3">
                    <h3>About Us</h3>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0">Code of Ethics</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0">Resources</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0">Community</a></li>
                        <li class="nav-item mb-2"><a href="learnmore.html" class="nav-link p-0">Learn More</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>
            <div class="d-flex flex-column flex-sm-row justify-content-between border-top">
                <i class = "footerDetails">🄯2023 Celeste Marambio, Powered by Andres Alfaro A</i>
                <ul class="list-unstyled d-flex padding1rem">
                    <li class="ms-3"><a href = "#" data-bs-toggle="tooltip" data-bs-title="chromaber@gmail.com" data-bs-placement="top"><img src = "./src/gmail.png" height = "50px"/></a></li>
                    <li class="ms-3"><a href = "#" data-bs-toggle="tooltip" data-bs-title="Universidad de Atacama" data-bs-placement="top"><img src = "./src/maps.webp" height = "50px"/></a></li>
                    <li class="ms-3"><a href = "#" data-bs-toggle="tooltip" data-bs-title="@SelfSpectrum" data-bs-placement="top"><img src = "./src/tele.png" height = "50px"/></a></li>
                    <li class="ms-3"><a target = "_blank" href = "https://www.youtube.com/@aberracioncromatica771" data-bs-toggle="tooltip" data-bs-title="YouTube" data-bs-placement="top"><img src = "./src/youtube.png" height = "50px"/></a></li>
                    <li class="ms-3"><a target = "_blank" href = "https://www.instagram.com/selfspectrum/" data-bs-toggle="tooltip" data-bs-title="Instagram" data-bs-placement="top"><img src = "./src/insta.png" height = "50px"/></a></li>
                    <li class="ms-3"><a target = "_blank" href = "https://www.tumblr.com/selfspectrum" data-bs-toggle="tooltip" data-bs-title="Tumblr" data-bs-placement="top"><img src = "./src/tumblr.png" height = "50px"/></a></li>
                </ul>
            </div>
        </footer>
	</body>
</html>