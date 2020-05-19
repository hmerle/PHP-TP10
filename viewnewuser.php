<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Register</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta charset="utf-8">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Accueil</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="viewnewuser.php">Register</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="viewlogin.php">Log in</a>
            </li>
        </ul>
    </div>
</nav>
<br>
<form action="viewnewuser.php?func=addUser" method="post">
    <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1">
    </div>
    <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Register</label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</body>
<?php

function addUser(){
    include 'connexpdo.php';

    $dsn = 'pgsql:host=localhost;port=5432;dbname=etudiants;';
    $user = 'postgres';
    $password = 'new_password';
    $idcon = connexpdo($dsn, $user, $password);
    $query = "SELECT * FROM etudiant";
    $result = $idcon->prepare();
    $result->execute();
    $res = $result->fetch();
    echo $res;
}