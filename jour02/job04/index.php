
<!DOCTYPE html>

<html>
	<head>
		<title>Jour 02</title>
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
	</head>

	<body>
		<header>
			<nav class='teal lighten-4 center-align row'>
				<a href='#' class='text-black col s3'>Accueil</a>
				<a href='#' class='text-black col s3'>Inscription</a>
				<a href='#' class='text-black col s3'>Connection</a>
				<a href='#' class='text-black col s3'>Recherche</a>
			</nav>
		</header>



		<main>
			<section>
				<form action='index.php' method='post' class='row'/>
					<div class='col s3 '>
						<p class='helper-text col s12'>Gender:</p>
						<label><input class='col s6' type='radio' value='M' name='gender'/><span class='col s6'>Male</span></label>
						<label><input class='col s6'type='radio' value='F' name='gender'/><span class='col s6'>Female</span></label>
					</div>
					
					<div for='email'class='input-field col s3'>
						<input type='email' name='email'  required/>
						<label class='valign-center row'>
							Email
							<i class='material-icons col s6 right-align'>email</i>
						</label>
					</div>

					<div for='name'class='input-field col s3'>
						<input type='text' name='name'  required/>
						<label>Name</label>
					</div>

					<div for='s-name'class='input-field col s3'>
						<input type='text' name='s-name' required/>
						<label>Second name</label>

					</div>

					<div class='row left-align left col s3'>
						<p class='helpter-text  col s12'>Passions:</p>
						<p class='col s4'>
							<label>
								<input type='checkbox' name='passion' value='c'/>
								<span>C</span>
							</label>
						</p>

						<p class='col s4 '>
							<label>
								<input type='checkbox' name='passion' value='javascript'/>
								<span>Javascript</span>
							</label>
						</p>

						<p class='col s4'>
							<label>
								<input type='checkbox' name='passion' value='cplus'/>
								<span>C++</span>
							</label>
						</p>

						<p class='col s4'>
							<label>
								<input type='checkbox' name='passion' value='csharp'/>
								<span>C#</span>
							</label>
						</p>


						<p class='col s4'>
							<label>
								<input type='checkbox' name='passion' value='java'/>
								<span>Java</span>
							</label>
						</p>

						<p class='col s4'>
							<label>
								<input type='checkbox' name='passion' value='python'/>
								<span>Python</span>
							</label>
						</p>


						<p class='col s4'>
							<label>
								<input type='checkbox' name='passion' value='html'/>
								<span>HTML</span>
							</label>
						</p>

						<p class='col s4'>
							<label>
								<input type='checkbox' name='passion' value='lua'/>
								<span>LUA</span>
							</label>
						</p>

						<p class='col s4'>
							<label>
								<input type='checkbox' name='passion' value='linux'/>
								<span>Linux</span>
							</label>
						</p>
					</div>						
					<div for='location'class='input-field col s9 '>
						<input type='text' name='location' required/>
						<label class='valign-center row'>
							Location
							<i class='material-icons col s4 right-align'>location_on</i>

						</label>
					</div>
					
					<div for='psw'class='input-field col s4 '>
						<input type='password' name='psw' required/>
						<label class='valign-center row'>
							 Password
							<i class='material-icons col s4 right-align'>lock_outline</i>
						</label>
					</div>
					
					<div for='c-psw'class='input-field col s4 offset-s1'>
						<input type='password' name='c-psw' required/>
						<label class='valign-center row'>
							Verify password
							<i class='material-icons col s3 right-align'>lock_outline</i>
						</label>

						
					</div>

					<div class='col s12'></div>
					<button type='submit' value='Register' name='register' class='col s4 button btn-large valign-wrapper offset-s3 '>
					Register<i class='col s1 material-icons right left-align'>done</i>
					</button>
					
					<span class='row col s4'>
						<label class='col s12 left-align'>
							<input type='checkbox' value='cgu' name='cgu' required/>
							<span>Read and agree the CGU</span>
						</label>

						<label class='col s12 left-align'>
							<input type='checkbox' value='law' name='law' required/>
							<span>Obey the law</span>
						</label>
					</span>
				</form>
			</section>
		</main>



		<footer class='page-footer row teal lighten-4'>
				<div class='col s6'>
					<p class='center-align black-text'>This site is provided to you by laPlateforme_</p>
				</div>

				<div class='col s6 row '>
					<a href='#' class='col s6 black-text'>Accueil</a>
					<a href='#' class='col s6 black-text'>Inscription</a>
					<a href='#' class='col s6 black-text'>Connection</a>
					<a href='#' class='col s6 black-text'>Recherche</a>
				</div>

				<div class='footer-copyright col s12 valign-center'>
					 <p class='black-text'>Copyright 2020 LaPlateforme_</p>
					 <p href='#' class='right row'><a href='#' class='black-text'>More info<i class='material-icons right'>link</i></a></p>
				</div>
		</footer>
				
	</body>
</html>
