<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>Car Luxe </title>
    <link rel="stylesheet" href= {{asset('css/style.css')}}>
    <link rel="stylesheet" href= {{asset('css/inscription-connexion.css')}}>

</head>
<body>
    
    <!-- header  -->
    <header>
        <!-- menu responsive -->
        
        <div class="menu_toggle">
            <span></span>
        </div>

        <div class="logo">
            <p><span>* </span>CARS<span> *</span></p>
        </div>
        <ul class="menu">
            <li><a href="/">Acceuil</a></li>
            <li><a href="#cars">Véhicules</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
         <button class="login_btn">LOGIN</button>
    </header>
      
      <div class="navigation">
        <button class="button" id="toggle-form-btn">Connexion</button>
      </div>

        <div class='main'>

            <div class="bloc1" id="register-form">
                <div class="texte">
                    <h4>Inscrivez-vous !</h4>
                </div>
                <form action="{{route('inscription')}}" method="POST">
                    @if($errors->any())
                    @foreach ($errors->all() as $error)
                        <p>{{$error}}</p>
                    @endforeach
                    @endif
                    <div class="input1">
                        <div class="inputfield">
                            <input class="input" type="text" name="nomPrenom" id="nomPrenom" placeholder="Nom et Prénom" required><br>
                        </div>
                        <div class="inputfield">
                            <input class="input" type="email" name="email" id="email" placeholder="Email" required>
                        </div>
                        <div class="inputfield">
                            <input class="input" type="text" name="adresse" id="adresse" placeholder="Adresse" required>
                        </div>
                        <div class="inputfield" id="mdp">
                            <input class="input" type="password" name="password" id="password-input" placeholder="Mot de passe" required><br>
                            <i class="toggle-password fa fa-eye-slash" aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="button1">
                        <input class ="button submit" type="submit" name ="inscription" value="S'inscrire">
                    </div>   
                    @csrf
                </form>
            </div>

             <div class="bloc1" id="login-form" style="display:none;">
                <div class="texte">
                    <h4>Se connecter !</h4>
                </div>
                <form action="{{route('connexion')}}" method="POST">

                    <div class="input1">
                        <div class="inputfield">
                            <input class="input" type="email" name="email" id="email" placeholder="Email" required>
                        </div>
                        <div class="inputfield" id="mdp">
                            <input class="input" type="password" name="password" id="pass" placeholder="Mot de passe" required><br>
                            <i class="toggle-pass fa fa-eye-slash" aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="button1">
                        <input class ="button submit" type="submit" name ="connexion" value="Se connecter">
                    </div>   
                    @csrf
                </form>
            </div>
        </div>

    <footer style="position: fixed;">
        <p style="text-align: center">Copyright 2023 </p>
    </footer>

    <script>

        var menu_toggle = document.querySelector('.menu_toggle');
        var menu = document.querySelector('.menu');
        var menu_toggle_span = document.querySelector('.menu_toggle span');

         menu_toggle.onclick = function()
        {
            menu_toggle.classList.toggle('active');
            menu_toggle_span.classList.toggle('active');
            menu.classList.toggle('responsive') ;
        }

        const toggleFormBtn = document.getElementById('toggle-form-btn');
        const loginForm = document.getElementById('login-form');
        const registerForm = document.getElementById('register-form');

        toggleFormBtn.addEventListener('click', function() {
        if (registerForm.style.display === 'none') {
            loginForm.style.display = 'none';
            registerForm.style.display = 'block';
            toggleFormBtn.textContent = 'Se connecter';
        } else {
            loginForm.style.display = 'block';
            registerForm.style.display = 'none';
            toggleFormBtn.textContent = 'S\'inscrire';
        }
        });

        var passwordInput = document.getElementById("password-input");
        var pass = document.getElementById("pass");
        var togglePassword = document.querySelector(".toggle-password");
        var togglePass = document.querySelector(".toggle-pass");

  
        togglePassword.addEventListener("click", function() {

            if (passwordInput.type === "password") {
            passwordInput.type = "text";
            togglePassword.classList.remove("fa-eye-slash");
            togglePassword.classList.add("fa-eye");
            } 
            else {
            passwordInput.type = "password";
            togglePassword.classList.remove("fa-eye");
            togglePassword.classList.add("fa-eye-slash");
            }
        });
        togglePass.addEventListener("click", function() {

            if (pass.type === "password") {
            pass.type = "text";
            togglePass.classList.remove("fa-eye-slash");
            togglePass.classList.add("fa-eye");
            } 
            else {
            pass.type = "password";
            togglePass.classList.remove("fa-eye");
            togglePass.classList.add("fa-eye-slash");
            }
        });

    </script>

    </body>
</html>
