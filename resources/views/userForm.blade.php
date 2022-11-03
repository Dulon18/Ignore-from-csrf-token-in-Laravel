<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user info</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="card mt-3">
                <div class="card-header bg-info">
                    <h2 class="text-center text-white fw-bold"> User Info</h2>
                </div>
                <div class="card-body mt-3">
                    <form action="{{route('userInfoStore')}}" method="POST">
                    <div class="mb-3 row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Name</label>
                            <div class="col-sm-10">
                                <input type="text"  class="form-control" id="staticEmail" placeholder="Name" name="name">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email"  class="form-control" id="staticEmail" placeholder="email@example.com" name="email">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" id="inputPassword" placeholder="password" name="password">
                            </div>
                        </div>
                        <button class="btn btn-info fw-bold text-white " type="submit">Submit</button>
                    </form>
                </div>
            </div>

        </div>
    </div>

</body>

</html>