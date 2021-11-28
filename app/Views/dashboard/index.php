<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $title; ?></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>


<nav class="navbar navbar-expand-sm bg-primary navbar-dark">
    <a class="navbar-brand" href="index.php">Home</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="Profile">Profile</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="attendance">Attendance</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="auth/logout">Logout</a>
            </li>
        </ul>
    </div>
</nav>
    <div class="container">
        <div class="row" style="margin-top: 40px">
            <div class="col-md-4"></div>
            <div class="col-md-4 col-md-offset-4">
                <h4><?= $title; ?></h4><hr>
                <table>
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th></th>
                    </tr>
                    </thead>
                    <?php
                    $loggedUserID = session()->get('loggedUser');

                    if ($loggedUserID == '1'):?>
                    <h1>Hi Admin</h1>
                    <?php endif; ?>
                    <tbody>
                    <tr>
                        <td><?= ucfirst($userInfo['name']); ?></td>
                        <td><?= $userInfo['pak_number']; ?></td>
                        <td><a href="<?= site_url('auth/logout'); ?>">Logout</a></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>