<?php
include('config/database.php');
?>

<?php
//Trước khi cho người dùng xâm nhập vào bên trong
//Phải kiểm tra thẻ làm việc
if(!isset($_SESSION['isLoginOK'])){
    header("location:login.php");
}
?>
<?php 
   $email= $_GET['id'];
   $sql = "SELECT * FROM `tb_member` WHERE email='$email';";
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0){
    $row = mysqli_fetch_assoc($result);
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/style2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
        crossorigin="anonymous" />
    <link rel="shortcut icon" href="img/Meetup.png">
    <link rel="stylesheet" href="css/css.css">
</head>

<body>
    <!--Header-->
    <nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom">
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
                        placeholder="Enter location" value="<?php echo $row['location']?>">
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
                    <li class="nav-item mt-2 me-4">
                        <span style="font-size:14px;color:#138dab" class="fw-bold">Start a new group - 30% off!</span>
                    </li>
                    <li class="nav-item me-4">
                        <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                class="bi bi-chat-left link-dark mt-3" viewBox="0 0 16 16">
                                <path
                                    d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                            </svg></a>

                    </li>
                    <li class="nav-item me-4">
                        <a href="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                class="bi bi-bell link-dark mt-3" viewBox="0 0 16 16">
                                <path
                                    d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zM8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z" />
                            </svg>
                        </a>
                    </li>
                    <li class="nav-item me-3">
                        <div class="btn-group">
                            <div class="dropdown-toggle" data-bs-toggle="dropdown">
                                <img style="border-radius: 30px;height: 48px;width: 48px;" class="avatar"
                                    src="image/<?php echo $row['avatar']?>" alt="">
                            </div>
                            <ul class="dropdown-menu dropdown-menu-end" style="font-size:13px;letter-spacing: 0.65px;">
                                <li><a class="dropdown-item text-muted fw-light" href="#">Your events</a></li>
                                <li><a class="dropdown-item text-muted fw-light" href="#">Your groups</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item text-muted fw-light"
                                        href="member.php?id=<?php echo $row['user_id']; ?>">My Profile</a></li>
                                <li><a class="dropdown-item text-muted fw-light" href="#">Settings</a></li>
                                <li><a class="dropdown-item text-muted fw-light" href="#">Help</a></li>
                                <li><a class="dropdown-item text-muted fw-light" href="logout.php">Log out</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
            </li>
            </ul>
        </div>
        </div>
    </nav>
    <main>
        <div class="container-header">
            <!--phần đầu tiên của nội dung-->
            <div class="header">
                <div class="col-md-12 text-center mb-5 mt-5">
                    <img src="img/welcomeBike.svg" alt="" class="img-fluid rounded">
                    <div class="mt-3">
                        <h1>Welcome to Meetup,<?php echo $row['name']?>!</h1>
                    </div>
                </div>
                <div class="card__container">
                    <div class="card-item">
                        <div class="card-img">
                            <svg width="90" height="80" viewBox="0 0 90 80" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M52.654 71.78a26.581 26.581 0 006.72-1.711 35.788 35.788 0 006.304-3.3 52.74 52.74 0 008.064-6.457c2.755-2.692 5.04-5.724 6.674-9.207.6-1.279 1.152-2.61 1.377-4.039.17-1.081.512-2.148.568-3.232.08-1.577.071-3.174-.078-4.745-.3-3.16-1.446-6.043-3.27-8.635-.997-1.418-2-2.852-3.17-4.125-1.212-1.32-2.615-2.468-3.959-3.664a108.527 108.527 0 00-3.474-2.971c-1.725-1.41-3.402-2.897-5.238-4.147-2.338-1.593-4.707-3.19-7.455-4.043-2.663-.829-5.394-1.124-8.127-.525-2.392.524-4.48 1.702-6.305 3.38-2.017 1.856-3.275 4.166-4.106 6.697-.607 1.849-.944 3.786-1.114 5.741-.14 1.611-.25 3.234-.54 4.82-.304 1.67-.592 3.357-1.23 4.952-.906 2.261-1.819 4.52-2.686 6.797-.76 2-1.232 4.078-1.563 6.194a17.38 17.38 0 00-.025 5.194c.468 3.236 1.417 6.293 3.463 8.944 1.217 1.577 2.471 3.098 4.11 4.25a22.584 22.584 0 002.488 1.543c1.05.551 2.15 1.005 2.768 1.29 3.537 1.111 6.627 1.377 9.804.999z"
                                    fill="#E6A386"></path>
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M46.31 38.623c-1.18 1.015-2.567 1.713-4.03 2.288-2.092.823-4.183 1.651-6.302 2.422-1.354.492-2.719.987-4.148 1.295a17.19 17.19 0 01-6.095.208 19.885 19.885 0 01-5.73-1.727c-1.674-.79-3.23-1.823-4.707-3.063a24.068 24.068 0 01-4.461-4.973A21.184 21.184 0 018.4 30.207c-1.079-3.075-1.436-6.114-1.013-9.062.27-1.887.837-3.642 1.737-5.231.783-1.383 1.767-2.573 2.895-3.619.896-.831 1.971-1.45 3.09-1.999 1.337-.653 2.777-1.06 4.294-1.261 2.376-.316 4.816-.07 7.307.704 1.998.62 3.902 1.574 5.76 2.67.846.5 1.629 1.154 2.44 1.739 1.131.815 2.267 1.622 3.39 2.45 1.048.771 2.09 1.551 3.118 2.353 1.302 1.017 2.602 2.036 3.776 3.235 1.109 1.133 2.072 2.368 2.832 3.736a12.12 12.12 0 011.448 4.372c.303 2.363-.155 4.422-1.267 6.222-.509.824-1.17 1.498-1.897 2.107z"
                                    fill="#97CAD1"></path>
                                <path
                                    d="M25.826 25.826a3.93 3.93 0 013.93-3.93h26.387a6.176 6.176 0 016.175 6.175v20.212a6.176 6.176 0 01-6.175 6.175H32a6.176 6.176 0 01-6.175-6.175V25.826z"
                                    fill="#fff"></path>
                                <rect x="24.141" y="20.211" width="36.493" height="32.563" rx="5.053" stroke="#00455D"
                                    stroke-width="1.684" stroke-linecap="round" stroke-linejoin="round"></rect>
                                <path
                                    d="M34.247 17.404V23.3M50.528 17.404V23.3M24.983 30.878h35.37M36.492 41.545l4.492 3.65 6.737-8.422"
                                    stroke="#00455D" stroke-width="1.684" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                                <circle opacity="0.5" cx="11.509" cy="36.773" r="4.211" fill="#212121"></circle>
                                <circle opacity="0.5" cx="42.668" cy="60.073" r="2.807" fill="#212121"></circle>
                                <circle opacity="0.5" cx="71.02" cy="33.966" r="1.965" fill="#212121"></circle>
                            </svg>
                        </div>
                        <div class="card-content">
                            <h4 class="card-content-title">Find your first event</h4>
                            <p class="card-content-text">Events are happening 24/7. What do you want to do?</p>
                            <a class="btn-card text-nowrap" href="./find.php">Discover Events</a>
                        </div>
                    </div>
                    <div class="card-item">
                        <div class="card-img">
                            <svg width="96" height="84" viewBox="0 0 96 84" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M47.936 66.71c-1.223 1.05-2.659 1.772-4.172 2.368-2.166.852-4.33 1.71-6.524 2.506-1.4.51-2.814 1.022-4.293 1.341a17.796 17.796 0 01-6.309.216 20.58 20.58 0 01-5.932-1.788c-1.732-.818-3.343-1.887-4.871-3.17a24.913 24.913 0 01-4.618-5.148 21.93 21.93 0 01-2.521-5.037c-1.117-3.183-1.487-6.328-1.05-9.38.281-1.953.867-3.769 1.8-5.415.81-1.43 1.829-2.663 2.995-3.745.928-.86 2.04-1.502 3.2-2.069 1.383-.677 2.874-1.097 4.444-1.306 2.459-.326 4.984-.072 7.563.729 2.069.642 4.038 1.63 5.962 2.764.876.517 1.686 1.194 2.526 1.8 1.17.844 2.346 1.68 3.51 2.536a144.71 144.71 0 013.226 2.436c1.348 1.053 2.693 2.107 3.909 3.348 1.148 1.173 2.144 2.451 2.93 3.867a12.548 12.548 0 011.5 4.525c.313 2.446-.16 4.578-1.312 6.44-.526.853-1.212 1.551-1.963 2.182z"
                                    fill="#7A1D47"></path>
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M34.075 21.064a27.519 27.519 0 00-2.421 6.756 37.048 37.048 0 00-.817 7.32 54.59 54.59 0 00.872 10.657c.716 3.923 1.996 7.639 4.039 11.056.75 1.255 1.572 2.5 2.668 3.52.83.771 1.547 1.683 2.445 2.357 1.307.982 2.682 1.899 4.117 2.68 2.886 1.573 6.023 2.257 9.302 2.192 1.795-.035 3.606-.065 5.375-.332 1.834-.276 3.631-.815 5.436-1.277 1.528-.39 3.05-.807 4.56-1.261 2.208-.665 4.455-1.243 6.591-2.095 2.72-1.085 5.46-2.193 7.784-4.057 2.253-1.806 4.087-3.978 5.155-6.67.935-2.356 1.133-4.83.748-7.368-.424-2.804-1.679-5.22-3.37-7.399-1.235-1.59-2.702-3.001-4.282-4.279-1.301-1.052-2.63-2.086-3.823-3.252-1.257-1.228-2.538-2.452-3.537-3.923-1.417-2.086-2.827-4.177-4.279-6.239-1.276-1.81-2.786-3.418-4.41-4.926a17.99 17.99 0 00-4.443-3.028c-3.047-1.472-6.22-2.426-9.68-2.205-2.056.132-4.088.327-6.024 1.066-.944.36-1.878.764-2.766 1.243-1.08.582-2.107 1.263-2.708 1.629-3.001 2.391-5.017 4.889-6.532 7.835z"
                                    fill="#E6A386"></path>
                                <circle cx="27.604" cy="35.739" r="6.102" fill="#fff"></circle>
                                <circle cx="61.309" cy="35.739" r="6.102" fill="#fff"></circle>
                                <circle cx="44.456" cy="32.834" r="7.264" fill="#fff"></circle>
                                <path
                                    d="M27.604 43.003c-5.701 0-10.467 4.103-11.638 9.583-.304 1.425.907 2.62 2.364 2.62h18.548c1.457 0 2.668-1.195 2.364-2.62-1.171-5.48-5.937-9.583-11.638-9.583zM61.31 43.003c-5.702 0-10.468 4.103-11.638 9.583-.305 1.425.906 2.62 2.364 2.62h18.547c1.458 0 2.669-1.195 2.364-2.62-1.17-5.48-5.936-9.583-11.638-9.583z"
                                    fill="#fff"></path>
                                <path
                                    d="M44.166 41.26c-7.482 0-13.694 5.647-14.898 13.061-.234 1.439.97 2.629 2.428 2.629h24.94c1.457 0 2.661-1.19 2.428-2.629-1.205-7.414-7.416-13.061-14.898-13.061z"
                                    fill="#fff"></path>
                                <circle cx="28.766" cy="34.577" r="6.102" stroke="#00455D" stroke-width="1.979"
                                    stroke-linecap="round" stroke-linejoin="round"></circle>
                                <circle cx="62.471" cy="34.577" r="6.102" stroke="#00455D" stroke-width="1.979"
                                    stroke-linecap="round" stroke-linejoin="round"></circle>
                                <circle cx="45.619" cy="31.671" r="7.264" stroke="#00455D" stroke-width="1.979"
                                    stroke-linecap="round" stroke-linejoin="round"></circle>
                                <path
                                    d="M28.767 41.26c-5.702 0-10.468 4.102-11.638 9.583-.305 1.425.906 2.62 2.364 2.62H38.04c1.458 0 2.669-1.195 2.364-2.62-1.17-5.48-5.936-9.583-11.638-9.583zM62.472 41.26c-5.702 0-10.467 4.102-11.638 9.583-.305 1.425.906 2.62 2.364 2.62h18.547c1.458 0 2.669-1.195 2.364-2.62-1.17-5.48-5.936-9.583-11.637-9.583z"
                                    fill="#fff" stroke="#00455D" stroke-width="1.979" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                                <path
                                    d="M45.329 39.516c-7.482 0-13.694 5.648-14.898 13.062-.234 1.438.97 2.629 2.428 2.629h24.94c1.457 0 2.662-1.19 2.428-2.63-1.204-7.413-7.416-13.06-14.898-13.06z"
                                    fill="#fff" stroke="#00455D" stroke-width="1.979" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                            </svg>
                        </div>
                        <div class="card-content">
                            <h4 class="card-content-title">Join your first group</h4>
                            <p class="card-content-text">As a member, you’ll receive updates each time your group
                                schedules new events.</p>
                            <a class="btn-card text-center" href="./find.php">Join group</a>
                        </div>
                    </div>
                </div>
            </div>
            <!--End header-->
            <!--Main-->
            <div class="find_checkout ">
                <div class=" container ">
                    <div class="row mt-5 ">

                        <div class="col-md-6">

                            <div class="row mt-5 mb-5">
                                <h3 class="mb-3 fw-bold"> Find your next event:</h3>
                                <!--find your next event-->
                                <form action="find.php" class="search-form row mb-3" method="post">
                                    <div class="search-event col-md-6 border">
                                        <i class="bi bi-search"></i>
                                        <input class="border-0 mb-3" type="text" name="txtsearch" id=""
                                            placeholder="Find your next event">
                                    </div>
                                    <div class="search-event col-md-6 border">
                                        <i class="bi bi-geo-alt-fill"></i>
                                        <input class="border-0 mb-3" type="text" name="txtlocation" id=""
                                            placeholder="Locaton">
                                    </div>

                                <div class="d-flex p-0 mt-3">

                                    <select class=" search-event col-md-6 border " data-trigger=""
                                        name="choices-single-defaul">
                                        <option placeholder="" value="">Online + In person</option>
                                        <option>Online</option>
                                        <option>In person</option>
                                    </select>

                                    <div class="search-event col-md-6 border">
                                        <input class="border-0 mb-3 " type="date" id="birthday" name="birthday"></input>
                                    </div>
                                </div>
                                <button class="search mt-4 p-2">Search</button>
                                </form>
                            </div>
                        </div>
                        <!--Check out what's happpening-->
                        <div class="checkout col-md-6 mt-5 mb-5">
                            <div class="checkout-content">
                                <h3 class="checkout-content-title fw-bold">Check out what's happening</h3>
                                <div class="btncheckout">
                                    <button class="filter-options me-1 mt-3">Starting soon</button>
                                    <button class="filter-options me-1 mt-3">Today</button>
                                    <button class="filter-options me-1 mt-3">Tomorrow</button>
                                    <button class="filter-options me-1 mt-3">This week</button>
                                    <button class="filter-options me-1 mt-3">Online</button>
                                    <button class="filter-options me-1 mt-3">In person</button>
                                    <button class="filter-options me-1 mt-3">Trending near you</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Attend an event strarting soon-->
        <div class="attend_event  bg-white mt-3">
            <div class=" container">
                <div class="groups">
                    <div class="d-flex mb-4">
                        <div class="col-md-10 mt-5">

                            <h3 class="d-inline fw-bold ">Attend an event starting soon</h3>
                        </div>
                        <div class="col-md mt-5" style="padding-left:35px ">

                            <a href="" class="d-inline" style="color: #008294;">Explore more events</a>
                        </div>
                    </div>
                    <div class="container">

                        <div class="owl-carousel carousel1" style="height:500px;">
                            <?php 
            
                            //Lấy dữ liệu từ cơ sở dữ liệu
                            //SQL Query
                            $sql2 = "SELECT * FROM tb_event ";

                            //Thực hiện truy vấn
                            $res2 = mysqli_query($conn, $sql2);

                            //Count Rows
                            $count2 = mysqli_num_rows($res2);

                            //Kiểm tra  
                            if($count2>0)
                            {
                                //có 
                                while($row=mysqli_fetch_assoc($res2))
                                {
                        ?>
                            <div class="item">
                                <div class="col">
                                    <a href="#" class="text-decoration-none">
                                        <div class="card-body pe-2 ps-0">
                                            <img src="image/<?php echo $row['img_name']; ?>" style="border-radius: 8px;"
                                                alt="">
                                            <div class="online_event px-2">
                                                <svg style="color:#757575;" xmlns="http://www.w3.org/2000/svg"
                                                    width="14" height="14" fill="currentColor"
                                                    class="bi bi-camera-video-fill" viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd"
                                                        d="M0 5a2 2 0 0 1 2-2h7.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 4.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 13H2a2 2 0 0 1-2-2V5z" />
                                                </svg>
                                                <p class="mb-0 ms-1 fw-bold"
                                                    style="font-size:12px;color:#757575;margin-top:-2px">Online Event
                                                </p>
                                            </div>
                                            <div class="px-2">

                                                <h6 class="mt-3" style="font-size: 14px;color: #877457;">
                                                    <?php echo $row['thoigian']; ?></h5>
                                                    <h6 class=" fw-bold link-dark" style="font-size: 17px;">
                                                        <?php echo $row['name']; ?> </h6>
                                                    <p class="text-muted mt-3 mb-4" style="font-size: 13.5px;">
                                                        <?php echo $row['content']; ?>
                                                    </p>
                                                    <div class=" mt-3 d-inline text-muted" style="margin-right:100px;">
                                                        <?php echo $row['atten'] ?> attendees
                                                    </div>
                                                    <div class=" d-inline">
                                                        <button class="border-0 bg-white "><i
                                                                class="bi bi-box-arrow-up"></i></button>
                                                        <button class="border-0 bg-white"><i
                                                                class="bi bi-star"></i></button>
                                                    </div>

                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <!-- <div class="item">
                                <div class="col">
                                    <a href="#" class="text-decoration-none">
                                        <div class="card-body pe-2 ps-0">
                                            <img src="img/2event.webp" style="border-radius: 8px;" alt="">
                                            <div class="online_event px-2">
                                                <svg style="color:#757575;" xmlns="http://www.w3.org/2000/svg"
                                                    width="14" height="14" fill="currentColor"
                                                    class="bi bi-camera-video-fill" viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd"
                                                        d="M0 5a2 2 0 0 1 2-2h7.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 4.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 13H2a2 2 0 0 1-2-2V5z" />
                                                </svg>
                                                <p class="mb-0 ms-1 fw-bold"
                                                    style="font-size:12px;color:#757575;margin-top:-2px">Online Event
                                                </p>
                                            </div>
                                            <div class="px-2">

                                                <h6 class="mt-3" style="font-size: 14px;color: #877457;">WED, JAN 5 @
                                                    6:00
                                                    PM ICT</h5>
                                                    <h6 class=" fw-bold link-dark" style="font-size: 17px;">[Atelier A
                                                        DISTANCE] Un design thinking sprint accéléré, 2 H</h6>
                                                    <p class="text-muted mt-3 mb-4" style="font-size: 13.5px;">Découvrir
                                                        le
                                                        design thinking...
                                                    </p>
                                                    <div class="mt-3 d-inline text-muted" style="margin-right:100px;">20
                                                        attendees
                                                    </div>
                                                    <div class="d-inline">
                                                        <button class="border-0 bg-white"><i
                                                                class="bi bi-box-arrow-up"></i></button>
                                                        <button class="border-0 bg-white"><i
                                                                class="bi bi-star"></i></button>
                                                    </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div> -->
                            <!-- <div class="item">
                                <div class="col">
                                    <a href="#" class="text-decoration-none">
                                        <div class="card-body pe-2 ps-0">
                                            <img src="img/3event.webp" style="border-radius: 8px;" alt="">
                                            <div class="online_event px-2">
                                                <svg style="color:#757575;" xmlns="http://www.w3.org/2000/svg"
                                                    width="14" height="14" fill="currentColor"
                                                    class="bi bi-camera-video-fill" viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd"
                                                        d="M0 5a2 2 0 0 1 2-2h7.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 4.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 13H2a2 2 0 0 1-2-2V5z" />
                                                </svg>
                                                <p class="mb-0 ms-1 fw-bold"
                                                    style="font-size:12px;color:#757575;margin-top:-2px">Online Event
                                                </p>
                                            </div>
                                            <div class="px-2">

                                                <h6 class="mt-3" style="font-size: 14px;color: #877457;">SAT, JAN 1 @
                                                    7:00
                                                    AM ICT</h5>
                                                    <h6 class=" fw-bold link-dark" style="font-size: 17px;">MedTech
                                                        Zürich
                                                        #7 - Introduction to sensor data analysis</h6>
                                                    <p class="text-muted mt-3 mb-4" style="font-size: 13.5px;">OASIS
                                                        MedTech Zürich
                                                    </p>
                                                    <div class="mt-3 d-inline text-muted" style="margin-right:100px;">8
                                                        attendees
                                                    </div>
                                                    <div class="d-inline">
                                                        <button class="border-0 bg-white"><i
                                                                class="bi bi-box-arrow-up"></i></button>
                                                        <button class="border-0 bg-white"><i
                                                                class="bi bi-star"></i></button>
                                                    </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div> -->
                            <!-- <div class="item">
                                <div class="col">
                                    <a href="#" class="text-decoration-none">
                                        <div class="card-body pe-2 ps-0">
                                            <img src="img/4event.webp" style="border-radius: 8px;" alt="">
                                            <div class="online_event px-2">
                                                <svg style="color:#757575;" xmlns="http://www.w3.org/2000/svg"
                                                    width="14" height="14" fill="currentColor"
                                                    class="bi bi-camera-video-fill" viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd"
                                                        d="M0 5a2 2 0 0 1 2-2h7.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 4.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 13H2a2 2 0 0 1-2-2V5z" />
                                                </svg>
                                                <p class="mb-0 ms-1 fw-bold"
                                                    style="font-size:12px;color:#757575;margin-top:-2px">Online Event
                                                </p>
                                            </div>
                                            <div class="px-2">

                                                <h6 class="mt-3" style="font-size: 14px;color: #877457;">SAT, JAN 1 @
                                                    7:00
                                                    AM ICT</h5>
                                                    <h6 class=" fw-bold link-dark" style="font-size: 17px;">Meet 4
                                                        friends
                                                        online 英会話 [1-on-1 every 15 mins] 8:30pm - 9:30pm </h6>
                                                    <p class="text-muted mt-3 mb-4" style="font-size: 13.5px;">[大阪]
                                                        English-is-Fun
                                                    </p>
                                                    <div class="mt-3 d-inline text-muted" style="margin-right:100px;">29
                                                        attendees
                                                    </div>
                                                    <div class="d-inline">
                                                        <button class="border-0 bg-white"><i
                                                                class="bi bi-box-arrow-up"></i></button>
                                                        <button class="border-0 bg-white"><i
                                                                class="bi bi-star"></i></button>
                                                    </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div> -->
                            <!-- <div class="item">
                                <div class="col">
                                    <a href="#" class="text-decoration-none">
                                        <div class="card-body pe-2 ps-0">
                                            <img src="img/5event.webp" style="border-radius: 8px;" alt="">
                                            <div class="online_event px-2">
                                                <svg style="color:#757575;" xmlns="http://www.w3.org/2000/svg"
                                                    width="14" height="14" fill="currentColor"
                                                    class="bi bi-camera-video-fill" viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd"
                                                        d="M0 5a2 2 0 0 1 2-2h7.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 4.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 13H2a2 2 0 0 1-2-2V5z" />
                                                </svg>
                                                <p class="mb-0 ms-1 fw-bold"
                                                    style="font-size:12px;color:#757575;margin-top:-2px">Online Event
                                                </p>
                                            </div>
                                            <div class="px-2">

                                                <h6 class="mt-3" style="font-size: 14px;color: #877457;">SAT, JAN 1 @
                                                    7:00
                                                    AM ICT</h5>
                                                    <h6 class=" fw-bold link-dark" style="font-size: 17px;">OASIS
                                                        CHRISTIAN
                                                        SINGLES NEW YEARS EVE ZOOM CELEBRATION</h6>
                                                    <p class="text-muted mt-3 mb-4" style="font-size: 13.5px;">OASIS
                                                        Tri-State Christian Singles Events
                                                    </p>
                                                    <div class="mt-3 d-inline text-muted" style="margin-right:100px;">22
                                                        attendees
                                                    </div>
                                                    <div class="d-inline">
                                                        <button class="border-0 bg-white"><i
                                                                class="bi bi-box-arrow-up"></i></button>
                                                        <button class="border-0 bg-white"><i
                                                                class="bi bi-star"></i></button>
                                                    </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div> -->
                            <!-- <div class="item">
                                <div class="col">
                                    <a href="#" class="text-decoration-none">
                                        <div class="card-body pe-2 ps-0">
                                            <img src="img/1event.webp" style="border-radius: 8px;" alt="">
                                            <div class="online_event px-2">
                                                <svg style="color:#757575;" xmlns="http://www.w3.org/2000/svg"
                                                    width="14" height="14" fill="currentColor"
                                                    class="bi bi-camera-video-fill" viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd"
                                                        d="M0 5a2 2 0 0 1 2-2h7.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 4.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 13H2a2 2 0 0 1-2-2V5z" />
                                                </svg>
                                                <p class="mb-0 ms-1 fw-bold"
                                                    style="font-size:12px;color:#757575;margin-top:-2px">Online Event
                                                </p>
                                            </div>
                                            <div class="px-2">

                                                <h6 class="mt-3" style="font-size: 14px;color: #877457;">SAT, JAN 1 @
                                                    7:00
                                                    AM ICT</h5>
                                                    <h6 class=" fw-bold link-dark" style="font-size: 17px;">OASIS
                                                        CHRISTIAN
                                                        SINGLES NEW YEARS EVE ZOOM CELEBRATION</h6>
                                                    <p class="text-muted mt-3 mb-4" style="font-size: 13.5px;">OASIS
                                                        Tri-State Christian Singles Events
                                                    </p>
                                                    <div class="mt-3 d-inline text-muted" style="margin-right:100px;">22
                                                        attendees
                                                    </div>
                                                    <div class="d-inline">
                                                        <button class="border-0 bg-white"><i
                                                                class="bi bi-box-arrow-up"></i></button>
                                                        <button class="border-0 bg-white"><i
                                                                class="bi bi-star"></i></button>
                                                    </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div> -->
                            <?php
                            }
                        }
                       mysqli_close($conn);
                    ?>
                            <div class="item">
                                <div class="col">
                                    <div class="card-body pe-2 ps-0">
                                        <svg width="96" height="84" viewBox="0 0 96 84" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M47.936 66.71c-1.223 1.05-2.659 1.772-4.172 2.368-2.166.852-4.33 1.71-6.524 2.506-1.4.51-2.814 1.022-4.293 1.341a17.796 17.796 0 01-6.309.216 20.58 20.58 0 01-5.932-1.788c-1.732-.818-3.343-1.887-4.871-3.17a24.913 24.913 0 01-4.618-5.148 21.93 21.93 0 01-2.521-5.037c-1.117-3.183-1.487-6.328-1.05-9.38.281-1.953.867-3.769 1.8-5.415.81-1.43 1.829-2.663 2.995-3.745.928-.86 2.04-1.502 3.2-2.069 1.383-.677 2.874-1.097 4.444-1.306 2.459-.326 4.984-.072 7.563.729 2.069.642 4.038 1.63 5.962 2.764.876.517 1.686 1.194 2.526 1.8 1.17.844 2.346 1.68 3.51 2.536a144.71 144.71 0 013.226 2.436c1.348 1.053 2.693 2.107 3.909 3.348 1.148 1.173 2.144 2.451 2.93 3.867a12.548 12.548 0 011.5 4.525c.313 2.446-.16 4.578-1.312 6.44-.526.853-1.212 1.551-1.963 2.182z"
                                                fill="#7A1D47"></path>
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M34.075 21.064a27.519 27.519 0 00-2.421 6.756 37.048 37.048 0 00-.817 7.32 54.59 54.59 0 00.872 10.657c.716 3.923 1.996 7.639 4.039 11.056.75 1.255 1.572 2.5 2.668 3.52.83.771 1.547 1.683 2.445 2.357 1.307.982 2.682 1.899 4.117 2.68 2.886 1.573 6.023 2.257 9.302 2.192 1.795-.035 3.606-.065 5.375-.332 1.834-.276 3.631-.815 5.436-1.277 1.528-.39 3.05-.807 4.56-1.261 2.208-.665 4.455-1.243 6.591-2.095 2.72-1.085 5.46-2.193 7.784-4.057 2.253-1.806 4.087-3.978 5.155-6.67.935-2.356 1.133-4.83.748-7.368-.424-2.804-1.679-5.22-3.37-7.399-1.235-1.59-2.702-3.001-4.282-4.279-1.301-1.052-2.63-2.086-3.823-3.252-1.257-1.228-2.538-2.452-3.537-3.923-1.417-2.086-2.827-4.177-4.279-6.239-1.276-1.81-2.786-3.418-4.41-4.926a17.99 17.99 0 00-4.443-3.028c-3.047-1.472-6.22-2.426-9.68-2.205-2.056.132-4.088.327-6.024 1.066-.944.36-1.878.764-2.766 1.243-1.08.582-2.107 1.263-2.708 1.629-3.001 2.391-5.017 4.889-6.532 7.835z"
                                                fill="#E6A386"></path>
                                            <circle cx="27.604" cy="35.739" r="6.102" fill="#fff"></circle>
                                            <circle cx="61.309" cy="35.739" r="6.102" fill="#fff"></circle>
                                            <circle cx="44.456" cy="32.834" r="7.264" fill="#fff"></circle>
                                            <path
                                                d="M27.604 43.003c-5.701 0-10.467 4.103-11.638 9.583-.304 1.425.907 2.62 2.364 2.62h18.548c1.457 0 2.668-1.195 2.364-2.62-1.171-5.48-5.937-9.583-11.638-9.583zM61.31 43.003c-5.702 0-10.468 4.103-11.638 9.583-.305 1.425.906 2.62 2.364 2.62h18.547c1.458 0 2.669-1.195 2.364-2.62-1.17-5.48-5.936-9.583-11.638-9.583z"
                                                fill="#fff"></path>
                                            <path
                                                d="M44.166 41.26c-7.482 0-13.694 5.647-14.898 13.061-.234 1.439.97 2.629 2.428 2.629h24.94c1.457 0 2.661-1.19 2.428-2.629-1.205-7.414-7.416-13.061-14.898-13.061z"
                                                fill="#fff"></path>
                                            <circle cx="28.766" cy="34.577" r="6.102" stroke="#00455D"
                                                stroke-width="1.979" stroke-linecap="round" stroke-linejoin="round">
                                            </circle>
                                            <circle cx="62.471" cy="34.577" r="6.102" stroke="#00455D"
                                                stroke-width="1.979" stroke-linecap="round" stroke-linejoin="round">
                                            </circle>
                                            <circle cx="45.619" cy="31.671" r="7.264" stroke="#00455D"
                                                stroke-width="1.979" stroke-linecap="round" stroke-linejoin="round">
                                            </circle>
                                            <path
                                                d="M28.767 41.26c-5.702 0-10.468 4.102-11.638 9.583-.305 1.425.906 2.62 2.364 2.62H38.04c1.458 0 2.669-1.195 2.364-2.62-1.17-5.48-5.936-9.583-11.638-9.583zM62.472 41.26c-5.702 0-10.467 4.102-11.638 9.583-.305 1.425.906 2.62 2.364 2.62h18.547c1.458 0 2.669-1.195 2.364-2.62-1.17-5.48-5.936-9.583-11.637-9.583z"
                                                fill="#fff" stroke="#00455D" stroke-width="1.979" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                            <path
                                                d="M45.329 39.516c-7.482 0-13.694 5.648-14.898 13.062-.234 1.438.97 2.629 2.428 2.629h24.94c1.457 0 2.662-1.19 2.428-2.63-1.204-7.413-7.416-13.06-14.898-13.06z"
                                                fill="#fff" stroke="#00455D" stroke-width="1.979" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                        </svg>
                                        <div class="card-content">
                                            <h4 class="card-content-title">Join your first group</h4>
                                            <p class="card-content-text">As a member, you’ll receive updates each time
                                                your
                                                group
                                                schedules new events.</p>
                                            <a class="btn-card text-center" href="./find_home.php">Join group</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--Stories from Meetup-->
        <div class="stories bg-white ">
            <div class="container ">
                <h2 class="display-7 mb-3 text-center fw-bold">Stories from Meetup</h2>
                <p class="text-center mt-3 "><a href="join_meetup.php" class="">Subscribe to the Community Matters blog
                    </a>for the latest news from Meetup including community building tips, product updates, event
                    recordings, and more!</p>
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <div class="card border-0">
                            <a href="#"> <img src="img/first_story_member.webp" class="card-img-top" alt="..."></a>
                            <div class="card-body px-0 ">
                                <h5 class="card-title"><a href="card-title" class="link-dark  fw-bold">Three Ways To
                                        Make Coworker Friendships While Working From Home</a></h5>
                                <p class="card-text text-muted mt-3">Work friendships don't need to fade just
                                    because you're working remotely. Here are three fun ways you can get to know
                                    your colleagues.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3 ">
                        <div class="card border-0">
                            <a href="#"><img src="img/second_story_member.webp" class="card-img-top" alt="..."></a>
                            <div class="card-body px-0">
                                <h5 class="card-title"><a href="card-title" class="link-dark  fw-bold">Get Creative:
                                        Artistic Hobbies Do More Than Pass the Time</a></h5>
                                <p class="card-text text-muted mt-3">Reduce stress, improve your mood, and connect
                                    with others by pursuing your new artistic hobby through Meetup.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 mb-3 ">
                        <div class="card border-0">
                            <a href=""><img src="img/third_story_member.webp" class="card-img-top" alt="..."></a>
                            <div class="card-body px-0">
                                <h5 class="card-title"><a href="card-title" class="link-dark fw-bold">Three Ways to
                                        Make Coworker Friendships While Working From Home</a></h5>
                                <p class="card-text text-muted mt-3">Work friendships don’t need to fade just
                                    because you’re working remotely. Here are three fun ways you can get to know
                                    your colleagues.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
    <!--FOOTER-->
    <div class=footer>
        <footer class="text-center text-lg-start bg-dark text-white">
            <section class="d-flex justify-content-lg-between p-2 border-bottom">
                <!-- Left -->
                <div class="  container text-center text-md-start mt-3">
                    <span class="hidden sm:block font-semibold ">Create your own Meetup group.</span>
                    <button
                        class="ms-3 text-white inline-flex ml-4 px-4 py-2  border-3 border-white rounded-md bg-dark">Get
                        Started</button>
                </div>
            </section>
            <section class="">
                <div class="container text-center text-md-start mt-5">
                    <!-- Grid row -->
                    <div class="row mt-3">
                        <!-- Grid column -->
                        <div class="col-md-3 col-lg-4 col-xl-3  mb-4 text-decoration-none">
                            <!-- Content -->
                            <h5 class=" fw-bold mb-4">
                                <i class="fas fa-gem "></i>Your Account
                            </h5>
                            <div class="col-md-3 col-lg-2 col-xl-2  mb-4 ">
                                <!-- Links -->
                                <p>
                                    <a href="#!" class="text-decoration-none text-light">Settings</a>
                                </p>
                                <p>
                                    <a href="#!" class="text-decoration-none text-light">Log out</a>
                                </p>
                                <p>
                                    <a href="#!" class="text-decoration-none text-light">Help</a>
                                </p>
                            </div>
                        </div>

                        <!-- Grid column -->
                        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4 ">
                            <!-- Links -->
                            <h5 class=" fw-bold mb-4">
                                Discover
                            </h5>
                            <p>
                                <a href="#!" class="text-decoration-none  text-light">Groups</a>
                            </p>
                            <p>
                                <a href="#!" class="text-decoration-none text-light">Calendar</a>
                            </p>
                            <p>
                                <a href="#!" class="text-decoration-none text-light">Topics</a>
                            </p>
                            <p>
                                <a href="#!" class="text-decoration-none text-light">Cities</a>
                            </p>
                            <p>
                                <a href="#!" class="text-decoration-none text-light">Online Events</a>
                            </p>
                            <p>
                                <a href="#!" class="text-decoration-none text-light">Local Guides</a>
                            </p>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                            <!-- Links -->
                            <h5 class=" fw-bold mb-4">
                                Meetup
                            </h5>
                            <p>
                                <a href="#!" class="text-decoration-none text-light">About</a>
                            </p>
                            <p>
                                <a href="#!" class="text-decoration-none text-light">Blog</a>
                            </p>
                            <p>
                                <a href="#!" class="text-decoration-none text-light">Careers</a>
                            </p>
                            <p>
                                <a href="#!" class="text-decoration-none text-light">Apps</a>
                            </p>
                        </div>

                    </div>
            </section>
            <div class="f-bottom container text-center text-md-start mt-5">
                <div class="row">
                    <div class="col">
                        <span class=" ">Follow us</span>
                        <div class="icons ">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                                class="bi bi-facebook me-4" viewBox="0 0 16 16">
                                <path
                                    d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                                class="bi bi-twitter me-4" viewBox="0 0 16 16">
                                <path
                                    d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                                class="bi bi-youtube me-4" viewBox="0 0 16 16">
                                <path
                                    d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                                class="bi bi-instagram me-4" viewBox="0 0 16 16">
                                <path
                                    d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                            </svg>

                        </div>
                    </div>
                    <div class="col ">

                    </div>
                    <div class="col ">
                        <img src="img/download_en-US (1).svg" alt="" class="me-3" height="38px" width="128px">
                        <img src="img/download_en-US.svg" alt="" height="38px" width="128px">
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="finish mb-5">
                        <span class="link-light me-3">© 2021 Meetup</span>
                        <a href="" class="link-light text-decoration-none me-3">Terms of Service</a></li>
                        <a href="" class="link-light text-decoration-none me-3">Privacy Policy</a></li>
                        <a href="" class="link-light text-decoration-none me-3">Cookie Policy</a></li>
                        <a href="" class="link-light text-decoration-none me-3">Help</a></li>
                    </div>
                </div>
        </footer>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous"></script>
    <!-- Owl Carousel -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <!-- custom JS code after importing jquery and owl -->
    <script type="text/javascript">
    $(document).ready(function() {
        $(".owl-carousel").owlCarousel();
    });

    $('.carousel1').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 4
            }
        }
    })
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>