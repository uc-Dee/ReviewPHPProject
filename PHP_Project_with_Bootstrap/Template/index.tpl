<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Project</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="../css/index.css">

</head>

<body>
    <div class="my_nav p-2 border-bottom shadow-sm">
        <div class="row">
            <div class="col-2">
                <a href="http://localhost/smarty/PHP_Project_with_Bootstrap/Template/"><img src="uCertifyLogo.png"
                        class="img1" width="150" height="40" alt="uCertify Logo"></a>
            </div>
            <div class="col-8">
                <h2 class="text-center">uCertify Test Prep</h2>
            </div>
        </div>
    </div>
    <!-- Image and text -->
    {$content}

</body>

</html>