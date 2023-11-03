<!-- https://www.youtube.com/watch?v=biOMz4puGt8&t=328s&pp=ygUMZmlyZXNoaXAgY3Nz -->
<nav>
	<ul class = "navbarNav">
                <li class = "navbarItem">
                    	<a class = "navbarLink" href = "index.php">
                        	<span>
                            		<img class = "round" src = "./src/chromaber.png" alt = "Chromatic Aberration Logo" width = "60" height = "60"/>
                        	</span>
                        	<p class = "linkText">Home</p>
                    	</a>
                </li>
		<?php if (isset($_SESSION['username'])) : ?>
		<li class = "navbarItem">	
                    	<a class = "navbarLink" href = "./scripts/logout.php">
                     		<span>
                	      		<svg class="navbaricon"><use xlink:href="#icon-user"></use></svg>
        	               	</span>
				<p class = "linkText"><?php echo $_SESSION['username']; ?></p>
			</a>
		</li>
		<?php else : ?>
                <li class = "navbarItem" data-bs-toggle="modal" data-bs-target="#loginModal">
                    	<a class = "navbarLink" href = "#">
                        	<span>
                            		<svg class="navbaricon"><use xlink:href="#icon-user"></use></svg>
                        	</span>
                        	<p class = "linkText">Login</p>
                    	</a>
		</li>
		<?php endif; ?>
		<?php if ($_SESSION['username'] == "SelfSpectrum") : ?>
                <li class = "navbarItem">
                    	<a class = "navbarLink" href = "../gestor.php">
                        	<span>
                            		<svg class="navbaricon"><use xlink:href="#icon-half"></use></svg>
                        	</span>
                        	<p class = "linkText">Gestor</p>
                    	</a>
		</li>
		<?php endif; ?>
	</ul>
</nav>
<?php if (!isset($_SESSION['username'])) : ?>
<script>
	const myModal = document.getElementById('loginModal')
	const myInput = document.getElementById('login')
	myModal.addEventListener('shown.bs.modal', () => { myInput.focus() })
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
					<form action = "./scripts/login.php" method="post" class="form login">
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
   					<p class="text--center">Not a member? <a href="signin.php"><i>Sign in now</i></a> <svg class="icon"><use xlink:href="#icon-arrow-right"></use></svg></p>
				</div>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>
