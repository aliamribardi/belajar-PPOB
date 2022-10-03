<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="row" style="margin-top: 100px">
            <div class="col" style="margin-left: 400px">
                <form action="">
                    <div class="card shadow" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title text-center my-3">Register</h5>
                            <div class="form-group mb-3">
                                <label for="email">Name :</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="email">Email :</label>
                                <input type="email" name="email" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="email">Password :</label>
                                <input type="password" name="password" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="email">Password :</label>
                                <input type="password" name="password_confirmation" class="form-control">
                            </div>
                            <div class="form-group text-center">
                                <button class="btn btn-primary mb-2">Register</button>
                                <p style="font-size: 9px">sudah memiliki akun ? <a href="{{ Route('login') }}">login</a></p>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>