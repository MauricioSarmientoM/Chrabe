<?php session_start();?>
<!DOCTYPE html>
<html lang="en-US" data-bs-theme="dark">
	<head>
        <meta charset = "utf-8"/>
        <meta name = "author" content = "Self Spectrum"/>
        <meta name = "description" content = "Chromatic Aberration main page. Get to know the last new about our games and updates, Talk with the comumnity and share moments!"/>
        <link rel = "icon" href = "./src/chromaber.png" type = "image/png" />
        <link rel = "stylesheet" href = "./css/generalstyling.css"/>
        <link rel = "stylesheet" href = "./css/signin.css"/>
        <link rel = "stylesheet" href = "./node_modules/bootstrap/dist/css/bootstrap.min.css" />
        <script type = "text/javascript" src="./node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
        <link rel = "stylesheet" href = "./css/login.css"/>
        <title>Chromatic Aberration</title>
        <svg xmlns="http://www.w3.org/2000/svg" class="icons">
            <symbol id="icon-lock" viewBox="0 0 1792 1792">
                <path d="M640 768h512V576q0-106-75-181t-181-75-181 75-75 181v192zm832 96v576q0 40-28 68t-68 28H416q-40 0-68-28t-28-68V864q0-40 28-68t68-28h32V576q0-184 132-316t316-132 316 132 132 316v192h32q40 0 68 28t28 68z" />
            </symbol>
            <symbol id="icon-user" viewBox="0 0 1792 1792">
                <path d="M1600 1405q0 120-73 189.5t-194 69.5H459q-121 0-194-69.5T192 1405q0-53 3.5-103.5t14-109T236 1084t43-97.5 62-81 85.5-53.5T538 832q9 0 42 21.5t74.5 48 108 48T896 971t133.5-21.5 108-48 74.5-48 42-21.5q61 0 111.5 20t85.5 53.5 62 81 43 97.5 26.5 108.5 14 109 3.5 103.5zm-320-893q0 159-112.5 271.5T896 896 624.5 783.5 512 512t112.5-271.5T896 128t271.5 112.5T1280 512z" />
            </symbol>
            <symbol id = "icon-cake" viewBox="0 0 24 24">
                <path d="M20.8894 13V14H20.0194C19.2794 14 18.6794 14.6 18.6794 15.35V15.65C18.6794 16.4 18.0794 17 17.3294 17C16.5894 17 15.9894 16.4 15.9894 15.65V15.35C15.9894 14.6 15.3794 14 14.6394 14C13.8994 14 13.2994 14.6 13.2994 15.35V15.65C13.2994 16.4 12.6894 17 11.9494 17C11.2094 17 10.5994 16.4 10.5994 15.65V15.35C10.5994 14.6 9.99938 14 9.25938 14C8.51938 14 7.90938 14.6 7.90938 15.35V15.65C7.90938 16.4 7.30938 17 6.56938 17C5.81938 17 5.21937 16.4 5.21937 15.65V15.33C5.21937 14.59 4.62938 13.99 3.89938 13.98H3.10938V13C3.10938 11.62 4.14938 10.45 5.55938 10.11C5.83938 10.04 6.12938 10 6.43938 10H17.5594C17.8694 10 18.1594 10.04 18.4394 10.11C19.8494 10.45 20.8894 11.62 20.8894 13Z"/>
                <path d="M18.4405 7.17V8.58C18.1505 8.52 17.8605 8.5 17.5605 8.5H6.44055C6.14055 8.5 5.85055 8.53 5.56055 8.59V7.17C5.56055 5.97 6.64055 5 7.98055 5H16.0205C17.3605 5 18.4405 5.97 18.4405 7.17Z"/>
                <path d="M8.75 3.54844V5.00844H7.98C7.72 5.00844 7.48 5.03844 7.25 5.09844V3.54844C7.25 3.19844 7.59 2.89844 8 2.89844C8.41 2.89844 8.75 3.19844 8.75 3.54844Z"/>
                <path d="M16.75 3.32812V5.09812C16.52 5.02813 16.28 4.99813 16.02 4.99813H15.25V3.32812C15.25 2.91813 15.59 2.57812 16 2.57812C16.41 2.57812 16.75 2.91813 16.75 3.32812Z"/>
                <path d="M12.75 2.82V5H11.25V2.82C11.25 2.37 11.59 2 12 2C12.41 2 12.75 2.37 12.75 2.82Z"/>
                <path d="M22 21.2505C22 21.6605 21.66 22.0005 21.25 22.0005H2.75C2.34 22.0005 2 21.6605 2 21.2505C2 20.8405 2.34 20.5005 2.75 20.5005H3.11V15.4805H3.72V15.5505C3.72 16.8905 4.6 18.1305 5.91 18.4205C6.93 18.6605 7.9 18.3305 8.56 17.6805C8.94 17.3005 9.56 17.2905 9.94 17.6705C10.46 18.1805 11.17 18.5005 11.95 18.5005C12.73 18.5005 13.44 18.1905 13.96 17.6705C14.34 17.3005 14.95 17.3005 15.34 17.6805C15.99 18.3305 16.96 18.6605 17.99 18.4205C19.3 18.1305 20.18 16.8905 20.18 15.5505V15.5005H20.89V20.5005H21.25C21.66 20.5005 22 20.8405 22 21.2505Z"/>
            </symbol>
            <symbol id = "icon-letter" viewBox="0 0 75.294 75.294">
                <g>
                    <path d="M66.097,12.089h-56.9C4.126,12.089,0,16.215,0,21.286v32.722c0,5.071,4.126,9.197,9.197,9.197h56.9 c5.071,0,9.197-4.126,9.197-9.197V21.287C75.295,16.215,71.169,12.089,66.097,12.089z M61.603,18.089L37.647,33.523L13.691,18.089 H61.603z M66.097,57.206h-56.9C7.434,57.206,6,55.771,6,54.009V21.457l29.796,19.16c0.04,0.025,0.083,0.042,0.124,0.065 c0.043,0.024,0.087,0.047,0.131,0.069c0.231,0.119,0.469,0.215,0.712,0.278c0.025,0.007,0.05,0.01,0.075,0.016 c0.267,0.063,0.537,0.102,0.807,0.102c0.001,0,0.002,0,0.002,0c0.002,0,0.003,0,0.004,0c0.27,0,0.54-0.038,0.807-0.102 c0.025-0.006,0.05-0.009,0.075-0.016c0.243-0.063,0.48-0.159,0.712-0.278c0.044-0.022,0.088-0.045,0.131-0.069 c0.041-0.023,0.084-0.04,0.124-0.065l29.796-19.16v32.551C69.295,55.771,67.86,57.206,66.097,57.206z"/>
                </g>
            </symbol>
            <symbol id = "icon-half" viewBox="0 0 285.919 285.919">
                <path d="M142.959,0C64.131,0,0,64.132,0,142.96c0,78.828,64.131,142.959,142.959,142.959c78.828,0,142.96-64.131,142.96-142.959 C285.919,64.132,221.787,0,142.959,0z M142.959,260.919V142.96V25c65.043,0,117.96,52.917,117.96,117.96 C260.919,208.003,208.002,260.919,142.959,260.919z"/>
            </symbol>
	</svg>
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
			<div class = "content">
				<form class = "flexcolumn form login padding1rem" method = "post" action = "./scripts/insert.php">
						<div class="form__field">
                        	<label class = "asidelabel" for = "nameinput"><svg class="icon"><use xlink:href="#icon-half"></use></svg><span class="hidden">Name</span></label>
                       		<input id = "nameinput" type = "text" name = "name" placeholder = "Name" pattern="^[a-zA-Z\u00C0-\u00FF\u0400-\u04FF\s]{1,128}$" title = "Only letters are allowed in names, and can't be longer than 128 characters" required/>
                   		</div>
						<div class="form__field">
							<label class = "asidelabel" for = "surnameinput"><svg class="icon rotate180"><use xlink:href="#icon-half"></use></svg><span class="hidden">Surname</span></label>
							<input id = "surnameinput" type = "text" name = "surname" placeholder = "Surname" pattern="^[a-zA-Z\u00C0-\u00FF\u0400-\u04FF\s]{1,128}$" title = "Only letters are allowed in surnames, and can't be longer than 128 characters" required/>
						</div>
						<div class="form__field">
							<label class = "asidelabel" for = "userinput"><svg class="icon"><use xlink:href="#icon-user"></use></svg><span class="hidden">Username</span></label>
							<input id = "userinput" type = "text" name = "username" placeholder = "Username" pattern="^[a-zA-Z0-9\u00C0-\u00FF\u0400-\u04FF\u00F1\u00D1]{1,128}$" title = "Can't contain whitespaces or be longer than 128 characters" required/>
						</div>
						<div class="form__field">
							<label class = "asidelabel" for = "passwordinput"><svg class="icon"><use xlink:href="#icon-lock"></use></svg><span class="hidden">Password</span></label>
							<input id = "passwordinput" type = "password" name = "password" placeholder = "Password" placeholder = "Password" pattern="^(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{8,256}$" title="Must contain at least one number and one uppercase, one special character !@#$%^&*, and at least 8 more characters" required/>
						</div>
						<div class="form__field">
							<label class = "asidelabel" for = "emailinput"><svg class="icon"><use xlink:href="#icon-letter"></use></svg><span class="hidden">Email</span></label>
							<input id = "emailinput" type = "email" name = "email" placeholder = "Email" required/>
						</div>
        	            		<div class="form__field">
                	        		<label class = "asidelabel" for = "dateinput"><svg class="icon"><use xlink:href="#icon-cake"></use></svg><span class="hidden">Birthdate</span></label>
                        			<input id = "dateinput" type = "date" name = "birthday" required/>
                    			</div>
	                    		<div class="mb-3">
        	                		<label for="sexSelect" class="form-label">Choose your sex</label>
                		        	<select id="sexSelect" class="form-select" required>
                            				<option>Female</option>
                            				<option>Male</option>
                            				<option>Normal</option>
	                       		 	</select>
						<input id = "sexinput" type = "hidden" name = "sex" value = ""/>
        	            		</div>
                    			<div class="mb-3">
                        			<label for="interestSelect" class="form-label">Choose your interests</label>
	                        		<select id="interestSelect" class="form-select" required>
        		              			<option>Community Member</option>
	                        	    		<option>Beta Testing</option>
		                            		<option>Development</option>
        		                    		<option>Collaborator</option>
						</select>
						<input id = "interestinput" type = "hidden" name = "interest" value = ""/>
	                    		</div>
			     		<input type="submit" value = "Submit" onclick = "setData()"/>
					<script type="text/javascript">
					function setData() {
						document.getElementById("sexinput").value = document.getElementById("sexSelect").value;
						document.getElementById("interestinput").value = document.getElementById("interestSelect").value;
					}
					</script>
		  		</form>
			</div>
		</main>
		<?php include "./scripts/footer.php"?>
	</body>
</html>
