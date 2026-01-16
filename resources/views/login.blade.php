<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-5 mx-auto mt-3">
                <h1 class="text-center">Login page</h1>
                <form action="" class="card p-3">
                    @csrf
                    <input type="email" placeholder='Enter your email' name='email' class="form-control mt-3">
                    <input type="password" placeholder="Enter your password" name='password' class="form-control mt-3" >
                    <div class="d-grid gap-2">
                        <button class="btn btn-primary mt-3">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div><script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    
</body>
</html>