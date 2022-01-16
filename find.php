<?php include('config/database.php'); ?>
<?php
//Trước khi cho người dùng xâm nhập vào bên trong
//Phải kiểm tra thẻ làm việc
if(!isset($_SESSION['isLoginOK'])){
    header("location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find Event & Group | Meetup</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/css.css">
    <link rel="shortcut icon" href="img/Meetup.png">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light mb-5" style="background: transparent;">
        <div class="container-fluid mt-1">
            <a href="home.php?id=<?php echo $row['email']?>">
                <svg class="mx-4 mt-1" viewBox="0 0 111 40" xmlns="http://www.w3.org/2000/svg" height="34px">
                    <path
                        d="M110.994 23.367a1.687 1.687 0 00-.11-.458c-.37-.962-2.054-.065-2.629.176-1.035.434-2.219 1.006-3.365.678-.317-.091-.224-.361 0-.499.112-.068 3.055-1.733 3.921-5.423 1.386-5.903-2.867-7.545-4.545-7.744-1.706-.202-3.609.061-4.411.384-2.273.913-2.866 2.943-3.023 4.159-.215 1.672-.24 4.59-.447 5.903-.136.865-.78 2.178-2.048 2.053-2.447-.241-3.571-1.18-3.493-2.722.054-1.084.039-1.3.38-3.704.293-2.06.478-2.551.478-3.022 0-1.349-1.813-1.621-2.419-1.014-.468.469-.585 1.426-.702 3.042-.11 1.519-.343 3.495-.644 4.7-.468 1.877-.656 2.014-1.083 2.551-.887 1.116-2.526.77-3.326.009-.47-.448-.534-.845-.443-2.16.091-1.315.306-3.606.608-5.995.263-2.09.082-2.404-.56-2.99-.597-.546-2.884-.465-3.943-.465-1.639 0-1.541.78-1.649 3.44-.047 1.161-.101 2.923-.217 4.287-.188 2.22-4.425 3.89-6.373 3.79-2.019-.104-2.213-3.873-2.34-4.75-.129-.876-.18-8.44.038-8.697.155-.18 1.37-.318 2.755-.589 3.067-.6 3.508-.994 3.512-1.954.002-.471-.028-1.13-.55-1.307-.306-.104-1.1-.222-2.153-.346-3.037-.358-3.465-.248-3.482-.633-.029-.674.035-1.971-.019-2.482C68.58.329 67.108-.093 65.45.017c-.327.021-.78.127-.816.565-.036.439-.033.777-.086 1.52-.117 1.651-.15 1.83-.79 1.827-.57-.003-5.312-.422-6.223-.13-.912.292-.875.913-.948 1.224-.073.31.09 2.173.182 2.977.091.803.267 1.896.376 2.06.11.165.452.631 1.404.512 3.234-.405 5.391-.894 5.829-1.003.437-.11.487-.165.492.182.002.197.084 4.146.098 5.319.023 2.006.362 7.817-5.044 8.718-2.249.375-4.357-.28-5.316-1.337-.544-.6-.277-.678-.037-1.068.364-.593 3.402-4.162.856-7.864-1.501-2.184-5.101-2.357-6.408-1.79-1.013.439-1.832 1.8-1.99 3.46-.488 5.12 2.442 8.287 2.556 8.482.136.234-.376.988-2.166 1.25-2.4.352-6.085-2.543-5.99-2.92.047-.18 1.679-2.853 1.718-5.436.013-.879-.277-2.036-.878-3.205-.602-1.169-2.496-2.973-4.546-2.577-4.824.93-4.274 5.696-3.94 6.997.694 2.69 2.319 5.064 2.584 5.539.361.645-10.207 4.839-10.616.913-.407-3.892 5.371-12.284 4.916-15.54-.41-2.933-2.382-3.547-4.097-3.577-1.667-.03-2.107.236-2.671.564-.325.189-.792.563-1.44-.055-.431-.411-.716-.699-1.172-1.064-.231-.185-.601-.42-1.221-.511-.62-.091-1.422 0-1.932.219-.51.22-.912.603-1.331.968-.42.365-1.483 1.559-2.474 1.119-.43-.191-1.887-.92-2.937-1.375-2.029-.88-4.955.545-6.008 2.421C3.815 10.193.72 21.161.252 22.607c-1.052 3.248 1.33 5.896 4.545 5.744 1.358-.065 2.263-.562 3.121-2.126.496-.903 5.156-13.097 5.502-13.681.252-.425 1.09-.984 1.8-.62.712.366.853 1.128.748 1.845-.17 1.16-3.456 8.6-3.582 9.441-.215 1.432.464 2.228 1.947 2.306 1.016.053 2.029-.313 2.833-1.832.45-.849 5.631-11.248 6.09-11.942.504-.762.91-1.013 1.422-.986.399.02 1.036.123.876 1.319-.156 1.172-4.322 8.803-4.76 10.671-.663 2.834 1.151 6.646 6.01 6.821 2.414.088 8.002-.966 11.15-3.357 1.143-.868.841-.943 1.553-.311 1.025.909 2.927 2.189 4.8 2.189 4.253 0 7.359-2.66 7.5-2.756a.111.111 0 01.145.017c.258.28 2.895 1.751 4.743 1.812 4.399.145 7.004-2.3 7.988-3.451a22.03 22.03 0 001.512-1.987.157.157 0 01.246-.018c.263.29 2.247 3.942 6.188 3.438 2.198-.281 5.467-2.139 5.696-2.39a.1.1 0 01.17.035c.115.318.618 2.11 2.633 3.535 1.652 1.169 4.832 1.403 6.243.626 1.17-.644 1.639-1.056 2.458-1.876.352-.353.888-.71 1.854-.505 1.08.229 3.934.735 4.116.822.205.097.237.47.176.86-.098.614-.33 2.766-.566 4.775-.237 2.009-.994 8.712.8 8.96 1.084.15 2.025-.878 2.274-1.881.624-2.517.738-5.35 1.148-7.78.49-2.893.684-3.704.86-4.027.146-.268.146-.205 2.167-.033 1.4.12 2.536.315 4.223.079 1.398-.196 4.267-1.256 4.113-2.976m-69.897-6.502c-.067.947-.31 1.547-.811 2.419-.313.544-.637.137-.825-.132-.27-.386-1.65-3.744-.596-4.437.297-.195.886-.307 1.312-.068.426.238.683.585.8.972.12.393.164.613.12 1.246m13.092.488c-.123 1.09-.585 1.707-.755 1.936-.301.404-.422.563-.71.27-.234-.238-1.109-2.02-1.235-3.195-.069-.632.106-1.535.636-1.747.558-.223 1.123-.122 1.52.397.623.817.632 1.564.544 2.339M101.7 22.13c-.657.27-.943.105-.905-.982.008-.234 1.063-5.687 3.08-6.675.572-.28 1.152-.268 1.554.18.76.847.56 2.152-.012 3.342-.828 1.727-2.814 3.764-3.717 4.135"
                        fill="#F64060" fill-rule="evenodd"></path>
                </svg>
            </a>
            <form class="form_search" action="find.php" method="post">
                <div class="d-flex">
                    <input type="text" class="form-control" id="txtsearch" name="txtsearch"
                        placeholder="Search for keywords">
                    <input type="text" class="form-control" id="txtlocation" name="txtlocation"
                        placeholder="Enter location">
                    <button style="height: 42px;border-radius: 0px 8px 8px 0px;background: #f65858;padding:0px 13px;"
                        class="border-0 "> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                            fill="currentColor" style="color: white;" class="bi bi-search" viewBox="0 0 16 16">
                            <path
                                d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                        </svg></button>

                </div>
            </form>
            <div class="h-right collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 ">
                    <li class="nav-item mt-2">
                        <?php include('template/language.php'); ?>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="login.php">Log in</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="signup.php">Sign up</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- <header class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <div class="container-fluid">
                        <div class="col-md-6 row">
                            <div class="col-md-2">
                                <a class="navbar-brand" href="#"><img src="images/logo.png" alt="" width="140"
                                        height="40"></a>
                            </div>
                            <div class="col-md-8 ms-4">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Search for keyword"
                                        aria-label="">
                                    <input type="text" class="form-control" placeholder="Enter location" aria-label="">
                                    <button class="btn btn-outline-secondary btn-danger" type="button">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                            fill="currentColor" class="bi bi-search link-light" viewBox="0 0 16 16">
                                            <path
                                                d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                        </svg>
                                </div>
                            </div>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                        </div>
                        <div class="col-md-6">
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                                    <li class="nav-item">
                                        <a class="nav-link" href="addevent.php">Start a new event</a>
                                    </li>
                                    <li class="nav-item mt-2">
                                        <?php
                                            include("template/language.php")
                                        ?>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="login.php">Log in</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="signup.php">Sign up</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </header> -->
    <hr class="mt-0">
    <main class="container">
        <nav>
            <div class="nav nav-tabs mx-5" id="nav-tab" role="tablist">
                <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home"
                    type="button" role="tab" aria-controls="nav-home" aria-selected="true">Events</button>
                <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile"
                    type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Groups</button>
            </div>
        </nav>
        <div class="tab-content mx-5" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                <p class="lead text-muted mt-3">Suggested Events near New York, NY</p>
                <div class="container">
                    <div class="btn-group">
                        <button type="button" class="btn btn-light dropdown-toggle" style="border-radius:100px;"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Any day
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Any day</a></li>
                            <li><a class="dropdown-item" href="#">Starting soon</a></li>
                            <li><a class="dropdown-item" href="#">Today</a></li>
                            <li><a class="dropdown-item" href="#">Tomorrow</a></li>
                            <li><a class="dropdown-item" href="#">This week</a></li>
                            <li><a class="dropdown-item" href="#">This weekend</a></li>
                            <li><a class="dropdown-item" href="#">Next week</a></li>
                            <li><a class="dropdown-item" href="#">Custom</a></li>
                        </ul>
                    </div>

                    <div class="btn-group">
                        <button type="button" class="btn btn-light dropdown-toggle" style="border-radius:100px;"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Any type
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Any type</a></li>
                            <li><a class="dropdown-item" href="#">Online</a></li>
                            <li><a class="dropdown-item" href="#">In person</a></li>
                        </ul>
                    </div>

                    <div class="btn-group">
                        <button type="button" class="btn btn-light dropdown-toggle" style="border-radius:100px;"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Any distance
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Any distance</a></li>
                            <li><a class="dropdown-item" href="#">2 miles</a></li>
                            <li><a class="dropdown-item" href="#">5 miles</a></li>
                            <li><a class="dropdown-item" href="#">10 miles</a></li>
                            <li><a class="dropdown-item" href="#">25 miles</a></li>
                            <li><a class="dropdown-item" href="#">50 miles</a></li>
                            <li><a class="dropdown-item" href="#">100 miles</a></li>
                        </ul>
                    </div>

                    <div class="btn-group">
                        <button type="button" class="btn btn-light dropdown-toggle" style="border-radius:100px;"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Any category
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Any category</a></li>
                            <li><a class="dropdown-item" href="#">Art & Culture</a></li>
                            <li><a class="dropdown-item" href="#">Career & Business</a></li>
                            <li><a class="dropdown-item" href="#">Community & Evironment</a></li>
                            <li><a class="dropdown-item" href="#">Dancing</a></li>
                            <li><a class="dropdown-item" href="#">Games</a></li>
                            <li><a class="dropdown-item" href="#">Health & Wellbeing</a></li>
                            <li><a class="dropdown-item" href="#">Hobbies & Passions</a></li>
                            <li><a class="dropdown-item" href="#">Identity & Language</a></li>
                        </ul>
                    </div>

                    <div class="btn-group">
                        <button type="button" class="btn btn-light dropdown-toggle"
                            style="border-radius:100px; background:#008294; color:#fff;" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Sort by: Relevance
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Sort by: Relevance</a></li>
                            <li><a class="dropdown-item" href="#">Date</a></li>
                            <li><a class="dropdown-item" href="#">Relevance</a></li>
                        </ul>
                    </div>
                </div>
                <hr class="col-md-7">

                <?php 
                            $search =$_POST['txtsearch'];
                            $location=$_POST['txtlocation'];
                            $sql = "SELECT * FROM `tb_event` WHERE name like '%$search%' and location like '%$location%'or content like '%$search%' ";
                            $res = mysqli_query($conn, $sql);
                            $count = mysqli_num_rows($res);
                            if($count>0)
                            {
                                while($row=mysqli_fetch_assoc($res))
                                {
                        ?>

                <div class="row col-md-12">
                    <div class="col-md-2">
                        <img style="border-radius:8px;" src="image/<?php echo $row['img_name'] ?>" width="200"
                            height="100" alt="">
                    </div>
                    <div class="col-md-9 ms-3">
                        <div class="fw-bold" style="font-size: 18px;color: #877457;"><?php echo $row['thoigian'] ?>
                        </div>
                        <div class="fw-bold mt-1"><?php echo $row['name'] ?></div>
                        <div class="text-muted mt-1"><?php echo $row['content'] ?> • <?php echo $row['location'] ?>
                        </div>
                        <div class="mt-4"><?php echo $row['atten'] ?> attendees</div>
                        <div class="col-md-6 d-flex justify-content-end">
                            <i class="bi bi-box-arrow-up"></i>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <hr class="mt-2">
                    </div>
                </div>
                <?php
                                }
                            }
                            else{
                                ?>
                <div class="text-center mt-5">
                    <img src="image/no.png" alt="">
                </div>

                <div class="text-center">
                    <?php
                                echo "<h5 >Sorry, there are no event results for $search near you.</h5>"; ?></div>
                <?php
                            }
                ?>
            </div>
            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                <p class="lead text-muted mt-3">Suggested Groups near New York, NY</p>
                <div class="btn-group">
                    <button type="button" class="btn btn-light dropdown-toggle" style="border-radius:100px;"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Any distance
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Any distance</a></li>
                        <li><a class="dropdown-item" href="#">2 miles</a></li>
                        <li><a class="dropdown-item" href="#">5 miles</a></li>
                        <li><a class="dropdown-item" href="#">10 miles</a></li>
                        <li><a class="dropdown-item" href="#">25 miles</a></li>
                        <li><a class="dropdown-item" href="#">50 miles</a></li>
                        <li><a class="dropdown-item" href="#">100 miles</a></li>
                    </ul>
                </div>

                <div class="btn-group">
                    <button type="button" class="btn btn-light dropdown-toggle" style="border-radius:100px;"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Any category
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Any category</a></li>
                        <li><a class="dropdown-item" href="#">Art & Culture</a></li>
                        <li><a class="dropdown-item" href="#">Career & Business</a></li>
                        <li><a class="dropdown-item" href="#">Community & Evironment</a></li>
                        <li><a class="dropdown-item" href="#">Dancing</a></li>
                        <li><a class="dropdown-item" href="#">Games</a></li>
                        <li><a class="dropdown-item" href="#">Health & Wellbeing</a></li>
                        <li><a class="dropdown-item" href="#">Hobbies & Passions</a></li>
                        <li><a class="dropdown-item" href="#">Identity & Language</a></li>
                    </ul>
                </div>
                <hr>
                <?php 
                            $sql1 = "SELECT * FROM tb_group WHERE name_gr like '%$search%' and location like '%$location%'or content_gr like '%$search%' ";
                            $res1 = mysqli_query($conn, $sql1);
                            $count1 = mysqli_num_rows($res1);
                            if($count1>0)
                            {
                                while($row=mysqli_fetch_assoc($res1))
                                {
                        ?>
                <div class="row col-md-12">
                    <div class="col-md-2">
                        <img style="border-radius:8px;" src="image/<?php echo $row['img_gr'] ?>" width="200"
                            height="100" alt="">
                    </div>
                    <div class="col-md-5 ms-3">

                        <div class="fw-bold" style="font-size: 18px;"><?php echo $row['name_gr'] ?></div>
                        <div class="fw-bold" style="font-size: 16px;color: #877457;"><?php echo $row['location'] ?>
                        </div>
                        <div class="text-muted mt-3"><?php echo $row['content_gr'] ?></div>
                        <div class="text-muted mt-3"><?php echo $row['members'] ?> members • <?php echo $row['mode'] ?>
                            <i class="bi bi-question-circle-fill"></i>
                        </div>
                        <div class="d-flex justify-content-end">
                            <i class="bi bi-box-arrow-up"></i>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <hr class="mt-2">
                    </div>
                </div>
                <?php
                                }
                            }
                ?>
            </div>
        </div>
    </main>
    <?php
        include("template/footer.php")
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>