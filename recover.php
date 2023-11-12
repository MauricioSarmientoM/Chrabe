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
            if (isset($_SESSION['changed'])) {
                $query = $connection->prepare("UPDATE users password = ? WHERE username LIKE ?");
                if (!$query) {
                    die("Preparation failed: " . $connection->error);
                }
                $query->bind_param("ss", $_POST['birthday'], $_SESSION['username']);
                if (!$query) {
                    die("Binding parameters failed: " . $query->error);
                }
                if ($query->execute()) {
                    $_SESSION['success'] = 'Update complete! ' . $username . ' is fixed.';
                }
                else {
                    $_SESSION['warning'] = $connection->error;
                }
            }
            else if (isset($_POST['surname']) && isset($_POST['birthday'])) {
                if ($_SESSION['surname'] == $_POST['surname'] && $_SESSION['birthdate'] == $_POST['birthday']) {
                    unset($_SESSION['surname']);
                    unset($_SESSION['birthdate']);
            ?>
            <div class = "content">
                <form class = "flexcolumn form login padding1rem" method = "post" action = "./recover.php">
                    <div class="form__field">
                        <p>Choose a new password.</p>
                        <div class="form__field">
                            <label class = "asidelabel" for = "passwordinput"><svg class="icon"><use xlink:href="#icon-lock"></use></svg><span class="hidden">Password</span></label>
                            <input id = "passwordinput" type = "password" name = "password" placeholder = "Password" placeholder = "Password" pattern="^(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{8,256}$" title="Must contain at least one number and one uppercase, one special character !@#$%^&*, and at least 8 more characters" required/>
                        </div>
                    </div>
                    <div class="form__field">
                        <input type="submit" name = "changed" value="Recover"/>
                    </div>
                </form>
            </div>
            <?php
                    else {
                            echo '<div class="alert alert-warning" role="alert">The recovery has failed.</div>';
                    }
                }
            }
            else {
                if (isset($_POST['username'])){
                    $server = "127.0.0.1";
                    $user = "root";
                    $pass = "";
                    $db = "chrabe";
                    $connection = new mysqli($server, $user, $pass, $db);
                    if ($connection->connect_error) {
                        die("Connection failed: " . $connection->connect_error);
                    }
                    else {
                        $query = "SELECT * FROM users WHERE username LIKE '" . $_POST['username'] . "'";
                        $result = $connection->query($query);
                        if ($result->num_rows > 0) {
                            $row = $result->fetch_assoc();
                            $_SESSION['username'] = $row['username'];
                            $_SESSION['surname'] = $row['surname'];
                            $_SESSION['birthdate'] = $row['birthdate'];
            ?>
            <div class = "content">
                <form class = "flexcolumn form login padding1rem" method = "post" action = "./recover.php">
                    <div class="form__field">
                        <p>Introduce your surname, and birthdate to continue.</p>
                        <div class="form__field">
                            <label class = "asidelabel" for = "surnameinput"><svg class="icon rotate180"><use xlink:href="#icon-half"></use></svg><span class="hidden">Surname</span></label>
                            <input id = "surnameinput" type = "text" name = "surname" placeholder = "Surname" required/>
                        </div>
                        <div class="form__field">
                            <label class = "asidelabel" for = "dateinput"><svg class="icon"><use xlink:href="#icon-cake"></use></svg><span class="hidden">Birthdate</span></label>
                            <input id = "dateinput" type = "date" name = "birthday" required/>
                        </div>
                    </div>
                    <div class="form__field">
                        <input type="submit" value="Recover"/>
                    </div>
                </form>
            </div>
            <?php
                        } else {
                            echo '<div class="alert alert-warning" role="alert">The recovery has failed.</div>';
                        }
                    }
                    else {
                        echo '<div class="alert alert-warning" role="alert">Invalid username.</div>';
                        echo '<p>The username introduced haven\'t found in database, try again.';
                    }
                }
            }
            ?>
        </main>
        <?php include "./scripts/footer.php";?>
    </body>
</html>
