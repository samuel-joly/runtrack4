
<!DOCTYPE html>

<html>
	<head>
		<title>Jour 02</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
	</head>

	<body>
		<header>
			<nav class='center-align '>
				<a href='#' class='' >Accueil</a>
				<a href='#' class=''>Inscription</a>
				<a href='#' class=''>Connection</a>
				<a href='#' class=''>Recherche</a>
			</nav>
		</header>



		<main>
			<section>
				<form action='index.php' method='post' class='row'/>
					<div class='col s4'>
						<p class='helper-text '>Gender:</p>
						<label><input type='radio' value='M' name='gender'/><span>Male</span></label>
						<label><input type='radio' value='F' name='gender'/><span>Female</span></label>
					</div>
					
					<label for='email'class='col s4'>Email: <input type='email' name='email' placeholder='Email' required/></label>
					<label for='name'class='col s4'>Name: <input type='text' name='name' placeholder='Name' required/></label>
					<label for='s-name'class='col s4'>Second name: <input type='text' name='s-name' required/></label>
					<label for='location'class='col s4 '>Location: <input type='text' name='location' required/></label>
					<label for='psw'class='col s4 right'>Password: <input type='password' name='psw' required/></label>
					<label for='c-psw'class='col s4 right'>Verify password: <input type='password' name='c-psw' required/></label>
					<p class='helpter-text center-align col s12'>Passions:</p>

					<div class='row center-align left '>
						<p class='col s3'>
							<label>
								<input type='checkbox' name='passion' value='c'/>
								<span>C</span>
							</label>
						</p>

						<p class='col s3 '>
							<label>
								<input type='checkbox' name='passion' value='javascript'/>
								<span>Javascript</span>
							</label>
						</p>

						<p class='col s3'>
							<label>
								<input type='checkbox' name='passion' value='cplus'/>
								<span>C++</span>
							</label>
						</p>

						<p class='col s3'>
							<label>
								<input type='checkbox' name='passion' value='csharp'/>
								<span>C#</span>
							</label>
						</p>


						<p class='col s3'>
							<label>
								<input type='checkbox' name='passion' value='java'/>
								<span>Java</span>
							</label>
						</p>

						<p class='col s3'>
							<label>
								<input type='checkbox' name='passion' value='python'/>
								<span>Python</span>
							</label>
						</p>


						<p class='col s3'>
							<label>
								<input type='checkbox' name='passion' value='html'/>
								<span>HTML</span>
							</label>
						</p>

						<p class='col s3'>
							<label>
								<input type='checkbox' name='passion' value='lua'/>
								<span>LUA</span>
							</label>
						</p>

						<p class='col s3'>
							<label>
								<input type='checkbox' name='passion' value='linux'/>
								<span>Linux</span>
							</label>
						</p>
					</div>						

					<input type='submit' value='Register' name='register' class='col s6 button btn-large'/>
				</form>
			</section>
		</main>



		<footer class='page-footer row'>
				<div class='col s6'>
					<p class='center-align black-text'>This site is provided to you by laPlateforme_</p>
				</div>

				<div class='col s6 row '>
					<a href='#' class='col s6 black-text'>Accueil</a>
					<a href='#' class='col s6 black-text'>Inscription</a>
					<a href='#' class='col s6 black-text'>Connection</a>
					<a href='#' class='col s6 black-text'>Recherche</a>
				</div>

				<div class='footer-copyright col s12'>
					 <p class='black-text'>Copyright 2020 LaPlateforme_</p>
					 <a href='#' class='right black-text '>More info</a>
				</div>
		</footer>
				
	</body>
</html>
