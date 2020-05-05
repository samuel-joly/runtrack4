
<!DOCTYPE html>

<html>
	<head>
		<title>Jour 02</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
	</head>

	<body>
		<header>
			<nav class='teal lighten-4 center-align '>
				<a href='#' class='red-text text-darken-4' >Accueil</a>
				<a href='#' class='red-text text-darken-4'>Inscription</a>
				<a href='#' class='red-text text-darken-4'>Connection</a>
				<a href='#' class='red-text text-darken-4'>Recherche</a>
			</nav>
		</header>



		<main>
			<section>
				<form action='index.php' method='post'/>
					<p class='helper-text'>Gender:</p>
					<div>
						<label><input type='radio' value='M' name='gender'/><span>Male</span></label>
						<label><input type='radio' value='F' name='gender'/><span>Female</span></label>
					</div>
					
					<label for='email'>Email: <input type='email' name='email' placeholder='Email' required/></label>
					<label for='name'>Name: <input type='text' name='name' placeholder='Name' required/></label>
					<label for='s-name'>Second name: <input type='text' name='s-name' required/></label>
					<label for='location'>Location: <input type='text' name='location' required/></label>
					<label for='psw'>Password: <input type='password' name='psw' required/></label>
					<label for='c-psw'>Verify password: <input type='password' name='c-psw' required/></label>
					<p class='helpter-text center-align'>Passions:</p>

					<div class='row center-align '>
						<p class='col s3  '>
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

					<input type='submit' value='Register' name='register'/>
				</form>
			</section>
		</main>



		<footer>
			<nav>
				<a href='#'>Accueil</a>
				<a href='#'>Inscription</a>
				<a href='#'>Connection</a>
				<a href='#'>Recherche</a>
			</nav>
		</footer>
				
	</body>
</html>
