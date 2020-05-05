<!DOCTYPE html>

<html>
	<head>
		<title>Jour 02</title>
	</head>

	<body>
		<header>
			<nav>
				<a href='#'>Accueil</a>
				<a href='#'>Inscription</a>
				<a href='#'>Connection</a>
				<a href='#'>Recherche</a>
			</nav>
		</header>



		<main>
			<section>
				<form action='index.php' method='post'/>
					<span>
						<label>Male<input type='radio' value='M' name='gender'/></label>
						<label>Female<input type='radio' value='F' name='gender'/></label>
					</span>
					
					<label for='email'>Email: <input type='email' name='email' required/></label>
					<label for='name'>Name: <input type='text' name='name' required/></label>
					<label for='s-name'>Second name: <input type='text' name='s-name' required/></label>
					<label for='location'>Location: <input type='text' name='location' required/></label>
					<label for='psw'>Password: <input type='password' name='psw' required/></label>
					<label for='c-psw'>Verify password: <input type='password' name='c-psw' required/></label>
					<div>
						<label>C
							<input type='checkbox' name='passion' value='c'/>
						</label>

						<label>Javascript
							<input type='checkbox' name='passion' value='javascript'/>
						</label>

						<label>C++
							<input type='checkbox' name='passion' value='cplus'/>
						</label>

						<label>C#
							<input type='checkbox' name='passion' value='csharp'/>
						</label>


						<label>Java
							<input type='checkbox' name='passion' value='java'/>
						</label>

						<label>Python
							<input type='checkbox' name='passion' value='python'/>
						</label>


						<label>HTML
							<input type='checkbox' name='passion' value='html'/>
						</label>

						<label>LUA
							<input type='checkbox' name='passion' value='lua'/>
						</label>

						<label>Linux
							<input type='checkbox' name='passion' value='linux'/>
						</label>
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
