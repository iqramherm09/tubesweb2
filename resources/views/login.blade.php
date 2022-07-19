<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    
    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    
    <div class="container">
        <div class="row justify-content-center pt-5">
            <div class="col-6">
                <main class="form-signin w-100 m-auto">
                  <form action="/login" method="POST">
                    @csrf
                    <h1 class="h3 mb-3 fw-normal">sign in</h1>
                
                    <div class="form-floating">
                      <input type="text" class="form-control" name="username" id="floatingInput" placeholder="name@example.com">
                      <label for="floatingInput">username</label>
                    </div>
                    <div class="form-floating">
                      <input type="password" name="pass" class="form-control" id="floatingPassword" placeholder="Password">
                      <label for="floatingPassword">Password</label>
                    </div>
                
                    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
                  </form>
                </main>
            </div>
        </div>
    </div>


    
  </body>
</html>
