<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>hik</title>
    <link rel="icon" href="images/hik_icon.jpg" type="image/x-icon"/>
    <link rel="shortcut icon" href="images/hik_icon.jpg" type="image/x-icon"/>
    <link rel="stylesheet" type="text/css" href="styles/styles.css">
    <link rel="stylesheet" type="text/css" href="styles/home.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-2.2.1.min.js"
            integrity="sha256-gvQgAFzTH6trSrAWoH1iPo9Xc96QxSZ3feW6kem+O00=" crossorigin="anonymous"></script>

    <!-- Bootstrap's CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
          integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- Bootstrap's Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css"
          integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

    <!-- Bootstrap's JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
            integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>



</head>

<body>

<div class="navBar">
    <a href="http://hikweb.eu/"><img id="logo" src="images/hik_medium.jpg"></a>
    <nav>
        <ul>
            <li>
                <a href="index.php" class="active"><p >Home</p></a>
            </li>
            <li>
                <a href="html/users.html"><p>Users</p></a>
            </li>
            <li>
                <a href="html/about.html"><p>About</p></a>
            </li>
            <li id="sign_up">
                <a href=""><p>Log In / Register</p></a>
            </li>
        </ul>
    </nav>

    <hr id="main_hr">

</div>
    <div class="postAndnavleft">
<div class="navBarLeft">

    <nav>
        <ul>

            <li>
                <a href=""><p>First</p></a>
            </li>
            <li>
                <a href=""><p>Second</p></a>
            </li>
            <li>
                <a href=""><p>Third</p></a>
            </li>
        </ul>
    </nav>


</div>
<div class="newPostUp">
    <form action="php/post.php" method="post" id="postForm">
        <label for ="new_post">New Post</label>
        <textarea form ="postForm" placeholder="New post" id ="new_post" name="new_post" class="form-control" rows="3"></textarea>
        <div class="nickTaker">
        <label for="nick" id="nickLabel">Name</label>
        <input type="text" name="nick" id="nick" class="form-control" placeholder="Name">
        </div>
        <input class="btn btn-default" type="submit" value="Submit">
    </form>
</div>

        </div>


</body>
</html>