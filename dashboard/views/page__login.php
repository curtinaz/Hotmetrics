<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- <script async defer crossorigin="anonymous" src="https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v13.0" nonce="QGdxPpu3"></script> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./assets/css/styles.css">
</head>

<script>
        // Carrega o Facebook SDK de forma assíncrona.
        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = "https://connect.facebook.net/pt_BR/sdk.js";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));

        // Ações de acordo com o estado de Login do Cliente
        function statusChangeCallback(response) {
            if (response.status === 'connected') {
                document.querySelector("#loginbutton").style.display = 'none'
                testAPI();
                longLived();
            } else {
                document.querySelector("#loginbutton").style.display = 'block'
            }
        }

        // This function is called when someone finishes with the Login
        function checkLoginState() {
            FB.getLoginStatus(function(response) {
                statusChangeCallback(response);
            });
        }

        window.fbAsyncInit = function() {
            FB.init({
                appId: '249704126803405',
                cookie: true,
                xfbml: true, // parse social plugins on this page
                version: 'v13.0'
            });

            FB.getLoginStatus(function(response) {
                statusChangeCallback(response);
            });

        };



        // Testa a API
        function testAPI() {
            FB.api('/me', function(response) {

            });
        }

        // Retorna o AccessToken do usuário
        function longLived() {
            FB.getLoginStatus(function(response) {
                console.log(response);
                // getSpentPerPeriod('maximum', response.authResponse.accessToken);
            });
        }
    </script>

<body class="text-center">

<div id="fb-root"></div>


    <main class="form-signin">
        <form>
            <h1 class="h3 mb-3 fw-normal">Faça Login</h1>

            <div class="form-floating">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Endereço de E-mail</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Senha</label>
            </div>

            <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" value="remember-me"> Matenha-me conectado
                </label>
            </div>
            <button class="w-100 btn btn-lg btn-primary mb-3" type="submit">Entrar</button>

            <label>Se preferir, você pode: </label>
            <fb:login-button id="loginbutton" onLogin="testAPI()" scope="public_profile,email,read_insights,ads_management,ads_read,business_management" class="fb-login-button w-100" data-width="" data-size="large" data-button-type="login_with" data-layout="default" data-auto-logout-link="false" data-use-continue-as="false"></fb:login-button>

            <p class="mt-5 mb-3 text-muted">&copy; 2022</p>
        </form>
    </main>
</body>

</html>