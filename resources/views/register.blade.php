<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-5 mx-auto mt-3">
                <h1 class="text-center">Register Form</h1>
                <div class="form card p-4" method="POST" action="">
                    @csrf
                    <div>
                        <label>Name</label><br>
                        <input type="text" placeholder="Enter your name" name='name' class="form-control">
                    </div>
                    <div>
                        <label>Email</label><br>
                        <input type="text" placeholder="Enter your email" name='email' class="form-control">
                    </div>
                    <div>
                        <label>Password</label><br>
                        <input type="password" placeholder="Enter your password" name='loginpassword'
                            class="form-control">
                    </div>
                    <div>
                        <label>Conform password</label><br>
                        <input type="conform password" placeholder="Enter your conform password" name='conform password'
                            class="form-control">
                    </div>
                    <!-- button -->
                        <button type=submit name='submit button' class="btn btn-primary mt-3">Submit</button>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
            crossorigin="anonymous"></script>
</body>

</html>