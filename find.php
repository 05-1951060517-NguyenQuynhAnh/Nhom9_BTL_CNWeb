<?php include('config/database.php'); ?>
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
    <link rel="stylesheet" href="css/trangchu_style.css">
    <link rel="shortcut icon" href="img/Meetup.png">
</head>

<body>
    <header class="container-fluid">
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
                                        <a class="nav-link" href="#">Start a new group</a>
                                    </li>
                                    <li class="nav-item">
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
    </header>
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
                        <div class="text-muted mt-1"><?php echo $row['content'] ?> • <?php echo $row['location'] ?></div>
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
                                echo "<h5>Sorry, there are no event results for $search near you.</h5>";
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
                            $sql1 = "SELECT * FROM tb_group ";
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