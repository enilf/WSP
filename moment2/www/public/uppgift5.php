<!DOCTYPE html>
<head>
    <html lang="en">
</head>
<body>
    <?php
    
    if(isset($_POST['name'])){
        $user['name'] = $_POST['name'];
        $user['surname'] = $_POST['surname'];
        $user['username'] = $_POST['username'];
        $user['password'] = $_POST['password'];
    }
    else{
        header("location:index.php");
    }

    include('dataBeGone.php');
    cleanData($user);

    ?>
</body>

</html>