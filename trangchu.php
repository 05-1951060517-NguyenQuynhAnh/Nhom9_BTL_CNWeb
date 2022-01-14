<?php include('config/database.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/trangchu.css">
    <title>Meetup - We are what we do</title>
    <link rel="shortcut icon" href="img/Meetup.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
        crossorigin="anonymous" />
</head>

<body>
    <!-- Background ---------------------------------------------------------------------------------------->
    <div class="background">
        <img class="img1" src="https://secure.meetupstatic.com/next/images/blobs/red-blob.svg" alt="">
        <img class="img2" src="https://secure.meetupstatic.com/next/images/blobs/yellow-blob.svg" alt="">
        <img class="img3" src="https://secure.meetupstatic.com/next/images/blobs/green-blob.svg" alt="">
    </div>
    <div class="container-fruid">
        <nav class="navbar navbar-expand-lg navbar-light mb-5" style="background: transparent;">
            <div class="container-fluid mt-1">
                <svg class="mx-4 mt-1" viewBox="0 0 111 40" xmlns="http://www.w3.org/2000/svg" height="34px">
                    <path
                        d="M110.994 23.367a1.687 1.687 0 00-.11-.458c-.37-.962-2.054-.065-2.629.176-1.035.434-2.219 1.006-3.365.678-.317-.091-.224-.361 0-.499.112-.068 3.055-1.733 3.921-5.423 1.386-5.903-2.867-7.545-4.545-7.744-1.706-.202-3.609.061-4.411.384-2.273.913-2.866 2.943-3.023 4.159-.215 1.672-.24 4.59-.447 5.903-.136.865-.78 2.178-2.048 2.053-2.447-.241-3.571-1.18-3.493-2.722.054-1.084.039-1.3.38-3.704.293-2.06.478-2.551.478-3.022 0-1.349-1.813-1.621-2.419-1.014-.468.469-.585 1.426-.702 3.042-.11 1.519-.343 3.495-.644 4.7-.468 1.877-.656 2.014-1.083 2.551-.887 1.116-2.526.77-3.326.009-.47-.448-.534-.845-.443-2.16.091-1.315.306-3.606.608-5.995.263-2.09.082-2.404-.56-2.99-.597-.546-2.884-.465-3.943-.465-1.639 0-1.541.78-1.649 3.44-.047 1.161-.101 2.923-.217 4.287-.188 2.22-4.425 3.89-6.373 3.79-2.019-.104-2.213-3.873-2.34-4.75-.129-.876-.18-8.44.038-8.697.155-.18 1.37-.318 2.755-.589 3.067-.6 3.508-.994 3.512-1.954.002-.471-.028-1.13-.55-1.307-.306-.104-1.1-.222-2.153-.346-3.037-.358-3.465-.248-3.482-.633-.029-.674.035-1.971-.019-2.482C68.58.329 67.108-.093 65.45.017c-.327.021-.78.127-.816.565-.036.439-.033.777-.086 1.52-.117 1.651-.15 1.83-.79 1.827-.57-.003-5.312-.422-6.223-.13-.912.292-.875.913-.948 1.224-.073.31.09 2.173.182 2.977.091.803.267 1.896.376 2.06.11.165.452.631 1.404.512 3.234-.405 5.391-.894 5.829-1.003.437-.11.487-.165.492.182.002.197.084 4.146.098 5.319.023 2.006.362 7.817-5.044 8.718-2.249.375-4.357-.28-5.316-1.337-.544-.6-.277-.678-.037-1.068.364-.593 3.402-4.162.856-7.864-1.501-2.184-5.101-2.357-6.408-1.79-1.013.439-1.832 1.8-1.99 3.46-.488 5.12 2.442 8.287 2.556 8.482.136.234-.376.988-2.166 1.25-2.4.352-6.085-2.543-5.99-2.92.047-.18 1.679-2.853 1.718-5.436.013-.879-.277-2.036-.878-3.205-.602-1.169-2.496-2.973-4.546-2.577-4.824.93-4.274 5.696-3.94 6.997.694 2.69 2.319 5.064 2.584 5.539.361.645-10.207 4.839-10.616.913-.407-3.892 5.371-12.284 4.916-15.54-.41-2.933-2.382-3.547-4.097-3.577-1.667-.03-2.107.236-2.671.564-.325.189-.792.563-1.44-.055-.431-.411-.716-.699-1.172-1.064-.231-.185-.601-.42-1.221-.511-.62-.091-1.422 0-1.932.219-.51.22-.912.603-1.331.968-.42.365-1.483 1.559-2.474 1.119-.43-.191-1.887-.92-2.937-1.375-2.029-.88-4.955.545-6.008 2.421C3.815 10.193.72 21.161.252 22.607c-1.052 3.248 1.33 5.896 4.545 5.744 1.358-.065 2.263-.562 3.121-2.126.496-.903 5.156-13.097 5.502-13.681.252-.425 1.09-.984 1.8-.62.712.366.853 1.128.748 1.845-.17 1.16-3.456 8.6-3.582 9.441-.215 1.432.464 2.228 1.947 2.306 1.016.053 2.029-.313 2.833-1.832.45-.849 5.631-11.248 6.09-11.942.504-.762.91-1.013 1.422-.986.399.02 1.036.123.876 1.319-.156 1.172-4.322 8.803-4.76 10.671-.663 2.834 1.151 6.646 6.01 6.821 2.414.088 8.002-.966 11.15-3.357 1.143-.868.841-.943 1.553-.311 1.025.909 2.927 2.189 4.8 2.189 4.253 0 7.359-2.66 7.5-2.756a.111.111 0 01.145.017c.258.28 2.895 1.751 4.743 1.812 4.399.145 7.004-2.3 7.988-3.451a22.03 22.03 0 001.512-1.987.157.157 0 01.246-.018c.263.29 2.247 3.942 6.188 3.438 2.198-.281 5.467-2.139 5.696-2.39a.1.1 0 01.17.035c.115.318.618 2.11 2.633 3.535 1.652 1.169 4.832 1.403 6.243.626 1.17-.644 1.639-1.056 2.458-1.876.352-.353.888-.71 1.854-.505 1.08.229 3.934.735 4.116.822.205.097.237.47.176.86-.098.614-.33 2.766-.566 4.775-.237 2.009-.994 8.712.8 8.96 1.084.15 2.025-.878 2.274-1.881.624-2.517.738-5.35 1.148-7.78.49-2.893.684-3.704.86-4.027.146-.268.146-.205 2.167-.033 1.4.12 2.536.315 4.223.079 1.398-.196 4.267-1.256 4.113-2.976m-69.897-6.502c-.067.947-.31 1.547-.811 2.419-.313.544-.637.137-.825-.132-.27-.386-1.65-3.744-.596-4.437.297-.195.886-.307 1.312-.068.426.238.683.585.8.972.12.393.164.613.12 1.246m13.092.488c-.123 1.09-.585 1.707-.755 1.936-.301.404-.422.563-.71.27-.234-.238-1.109-2.02-1.235-3.195-.069-.632.106-1.535.636-1.747.558-.223 1.123-.122 1.52.397.623.817.632 1.564.544 2.339M101.7 22.13c-.657.27-.943.105-.905-.982.008-.234 1.063-5.687 3.08-6.675.572-.28 1.152-.268 1.554.18.76.847.56 2.152-.012 3.342-.828 1.727-2.814 3.764-3.717 4.135"
                        fill="#F64060" fill-rule="evenodd"></path>
                </svg>
                <div class="h-right collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0 ">
                        <li class="nav-item">
                            <a class="nav-link active " aria-current="page" href="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor"
                                    class="bi bi-globe2" viewBox="0 0 16 16">
                                    <path
                                        d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm7.5-6.923c-.67.204-1.335.82-1.887 1.855-.143.268-.276.56-.395.872.705.157 1.472.257 2.282.287V1.077zM4.249 3.539c.142-.384.304-.744.481-1.078a6.7 6.7 0 0 1 .597-.933A7.01 7.01 0 0 0 3.051 3.05c.362.184.763.349 1.198.49zM3.509 7.5c.036-1.07.188-2.087.436-3.008a9.124 9.124 0 0 1-1.565-.667A6.964 6.964 0 0 0 1.018 7.5h2.49zm1.4-2.741a12.344 12.344 0 0 0-.4 2.741H7.5V5.091c-.91-.03-1.783-.145-2.591-.332zM8.5 5.09V7.5h2.99a12.342 12.342 0 0 0-.399-2.741c-.808.187-1.681.301-2.591.332zM4.51 8.5c.035.987.176 1.914.399 2.741A13.612 13.612 0 0 1 7.5 10.91V8.5H4.51zm3.99 0v2.409c.91.03 1.783.145 2.591.332.223-.827.364-1.754.4-2.741H8.5zm-3.282 3.696c.12.312.252.604.395.872.552 1.035 1.218 1.65 1.887 1.855V11.91c-.81.03-1.577.13-2.282.287zm.11 2.276a6.696 6.696 0 0 1-.598-.933 8.853 8.853 0 0 1-.481-1.079 8.38 8.38 0 0 0-1.198.49 7.01 7.01 0 0 0 2.276 1.522zm-1.383-2.964A13.36 13.36 0 0 1 3.508 8.5h-2.49a6.963 6.963 0 0 0 1.362 3.675c.47-.258.995-.482 1.565-.667zm6.728 2.964a7.009 7.009 0 0 0 2.275-1.521 8.376 8.376 0 0 0-1.197-.49 8.853 8.853 0 0 1-.481 1.078 6.688 6.688 0 0 1-.597.933zM8.5 11.909v3.014c.67-.204 1.335-.82 1.887-1.855.143-.268.276-.56.395-.872A12.63 12.63 0 0 0 8.5 11.91zm3.555-.401c.57.185 1.095.409 1.565.667A6.963 6.963 0 0 0 14.982 8.5h-2.49a13.36 13.36 0 0 1-.437 3.008zM14.982 7.5a6.963 6.963 0 0 0-1.362-3.675c-.47.258-.995.482-1.565.667.248.92.4 1.938.437 3.008h2.49zM11.27 2.461c.177.334.339.694.482 1.078a8.368 8.368 0 0 0 1.196-.49 7.01 7.01 0 0 0-2.275-1.52c.218.283.418.597.597.932zm-.488 1.343a7.765 7.765 0 0 0-.395-.872C9.835 1.897 9.17 1.282 8.5 1.077V4.09c.81-.03 1.577-.13 2.282-.287z" />
                                </svg>
                                English</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">Log in</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">Sign up</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <main class="pt-5 px-5">
            <!-- Phần Intro ------------------------------------------------------------------------------------------>
            <div class="row pt-5">
                <div class="col-md-6 ">
                    <h1 class="my_intro mr-3">Celebrating 20 years of real connections on Meetup</h1>
                    <p class="my_intro mt-4">
                        Whatever you’re looking to do this year, Meetup can help.
                        For 20 years, people have turned to Meetup to meet people,
                        make friends, find support, grow a business, and explore their interests.
                        Thousands of events are happening every day—join the fun.</p>
                </div>
                <div class="col-md-6 ">
                    <img src="img/online_events.svg" alt="" class="img-fluid rounded">
                </div>
            </div>
            <!--  ----------------------------------------------------------------------------------------------------->
            <div class="row mt-5 ">
                <div class="col-md">
                    <figure class="figure">
                        <img src="img/category1.webp" class="figure-img img-fluid rounded mb-1"
                            style="border-radius:8px;" alt="...">
                        <figcaption class="figure-caption">
                            <a href="figure-cation" class="fw-bold">Make new friends
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                    class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                                </svg>
                            </a>
                        </figcaption>
                    </figure>
                </div>
                <div class="col-md">
                    <figure class="figure">
                        <img src="img/category2.webp" class="figure-img img-fluid rounded mb-1"
                            style="border-radius:8px;" alt="...">
                        <figcaption class="figure-caption">
                            <a href="figure-cation" class="fw-bold">Explore the outdoors<svg
                                    xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                    class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                                </svg> </a>
                        </figcaption>
                    </figure>
                </div>
                <div class="col-md">
                    <figure class="figure">
                        <img src="img/category3.webp" class="figure-img img-fluid rounded mb-1"
                            style="border-radius:8px;" alt="...">
                        <figcaption class="figure-caption">
                            <a href="figure-cation" class="fw-bold"> Connect over tech <svg
                                    xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                    class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                                </svg> </a>
                        </figcaption>
                    </figure>
                </div>
            </div>
            <!--  --------------------------------------------------------------------------------------------------->
            <div class="scroll_container mt-4">
                <button class="items">Boost your career</button>
                <button class="items">Find your zen</button>
                <button class="items">Get moving</button>
                <button class="items">Share language + oulture</button>
                <button class="items">Read with friends</button>
                <button class="items">Write together</button>
                <button class="items">Home your craft</button>
            </div>
            <!-- Phần tìm kiếm ---------------------------------------------------------------------------------------->
            <div class="row mt-5 px-1">
                <div class="col-md-6">
                    <div class="row pe-4">
                        <h3 class="mt-5 mb-4 p-0" style="font-weight:800;letter-spacing: -0.75px;word-spacing:-2px;">
                            What do you want to do?</h3>
                        <div class="location col p-0 me-2 ">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-search" viewBox="0 0 16 16">
                                <path
                                    d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                            </svg>
                            <input class="text_search" type="text" placeholder="Search for tennis" aria-label="Search">
                        </div>
                        <div class="location col p-0 ">

                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="18" fill="currentColor"
                                class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                <path
                                    d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
                            </svg>
                            <input class="text_search" type="text" placeholder="Location" aria-label="Search">
                        </div>
                        <button class="search mt-4 p-2">Search</button>
                    </div>
                </div>
                <div class="col-md pt-5 px-5">
                    <div class="row">
                        <h3 class=" mb-4" style="font-weight:800;letter-spacing: -0.75px;word-spacing:-2px;">See what’s
                            happening</h3>
                        <div class="scroll_container" style="white-space:normal">
                            <button class="items mb-2 me-1">Starting soon</button>
                            <button class="items me-1">Today</button>
                            <button class="items me-1">Tomorrow</button>
                            <button class="items me-1">This week</button>
                            <button class="items me-1">Online</button>
                            <button class="items me-1">In person</button>
                            <button class="items me-1">Trending near you</button>
                        </div>

                    </div>
                </div>
            </div>
            <!-- Phần Meetup works ------------------------------------------------------------------------------------------------------>
            <div class="ivents mt-5 pt-4">
                <div class="main_featured row text-center">
                    <h3 class="text-center fw-bold ">How Meetup works</h3>
                    <p class="mb-0 ">Meet new people who share your interests through online and in-person events. It’s
                        free to create an account.</p>
                    <div class="col-md px-4">
                        <figure class="figure">
                            <img src="img/handsUp.svg" class="figure-img img-fluid rounded" alt="...">
                            <h5 class="fw-bold mt-2"><a href="">Join a group </a> </h5>
                            <figcaption class="figure-caption mt-3">Do what you love, meet others who love it, find your
                                community. The rest is history!</figcaption>
                        </figure>
                    </div>
                    <div class="col-md pt-2 px-4">
                        <figure class="figure">
                            <img src="img/ticket.svg" class="figure-img img-fluid rounded" alt="...">
                            <h5 class="fw-bold mt-2"><a href="">Find an event</a> </h5>
                            <figcaption class="figure-caption mt-3 ">Events are happening on just about any topic you
                                can think of, from online gaming and photography to yoga and hiking.</figcaption>
                        </figure>
                    </div>
                    <div class="col-md px-4">
                        <figure class="figure">
                            <img src="img/joinGroup.svg" class="figure-img img-fluid rounded" alt="...">
                            <h5 class="fw-bold mt-2"><a href="">Start a group</a></h5>
                            <figcaption class="figure-caption mt-3 ">You don’t have to be an expert to gather people
                                together and explore shared interests.</figcaption>
                        </figure>
                    </div>
                </div>
            </div>
            <div class="join text-center mt-5 pt-3 mb-5">
                <a href="#"><button>Join Meetup</button></a>
            </div>
            <!-- Upcoming online events --------------------------------------------------------------------------------------------------------------->
            <div class="groups">
                <div class="d-flex mb-4">
                    <div class="col-md-10">

                        <h3 class="d-inline fw-bold">Upcoming online events</h3>
                    </div>
                    <div class="col-md" style="padding-left:35px ">

                        <a href="" class="d-inline" style="color: #008294;">Explore more events</a>
                    </div>
                </div>
                <div class="container p-0">
                    <div class="owl-carousel carousel1" style="height:500px;">
                        <?php 
            
                            //Getting Foods from Database that are active and featured
                            //SQL Query
                            $sql2 = "SELECT * FROM tb_event ";

                            //Execute the Query
                            $res2 = mysqli_query($conn, $sql2);

                            //Count Rows
                            $count2 = mysqli_num_rows($res2);

                            //CHeck whether food available or not
                            if($count2>0)
                            {
                                //Food Available
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
                                            <svg style="color:#757575;" xmlns="http://www.w3.org/2000/svg" width="14"
                                                height="14" fill="currentColor" class="bi bi-camera-video-fill"
                                                viewBox="0 0 16 16">
                                                <path fill-rule="evenodd"
                                                    d="M0 5a2 2 0 0 1 2-2h7.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 4.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 13H2a2 2 0 0 1-2-2V5z" />
                                            </svg>
                                            <p class="mb-0 ms-1 fw-bold"
                                                style="font-size:12px;color:#757575;margin-top:-2px">Online Event </p>
                                        </div>
                                        <div class="px-2">

                                            <h5 class="mt-3" style="font-size: 14px;color: #877457;">
                                                <?php echo $row['thoigian']; ?></h5>
                                                <h6 class=" fw-bold link-dark" style="font-size: 17px;">
                                                    <?php echo $row['content']; ?></h6>
                                                <p class="text-muted mt-3 mb-5" style="font-size: 13.5px;">
                                                    <?php echo $row['name']; ?>
                                                </p>

                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <?php
                            }
                        }
                       
                    ?>
                    </div>
                </div>
            </div>
            <!-- <div class="groups">
                <div class="d-flex mb-4">
                    <div class="col-md-10">

                        <h3 class="d-inline fw-bold">Upcoming online events</h3>
                    </div>
                    <div class="col-md" style="padding-left:35px ">

                        <a href="" class="d-inline" style="color: #008294;">Explore more events</a>
                    </div>
                </div>
                <div class="container p-0">

                    <div class="owl-carousel carousel1" style="height:500px;">
                        <div class="item">
                            <div class="col">
                                <a href="#" class="text-decoration-none">
                                    <div class="card-body pe-2 ps-0">
                                        <img src="img/398x224.webp" style="border-radius: 8px;" alt="">
                                        <div class="online_event px-2">
                                            <svg  style="color:#757575;"xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                fill="currentColor" class="bi bi-camera-video-fill" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd"
                                                    d="M0 5a2 2 0 0 1 2-2h7.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 4.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 13H2a2 2 0 0 1-2-2V5z" />
                                            </svg>
                                            <p class="mb-0 ms-1 fw-bold" style="font-size:12px;color:#757575;margin-top:-2px">Online Event   </p>
                                        </div>
                                        <div class="px-2">

                                            <h6 class="mt-3" style="font-size: 14px;color: #877457;">MON, JAN 3 @ 7:00
                                                AM ICT</h5>
                                                <h6 class=" fw-bold link-dark" style="font-size: 17px;">New York & New
                                                    Jersey Virtual
                                                    Dating</h6>
                                                <p class="text-muted mt-3 mb-5" style="font-size: 13.5px;">New York
                                                    Matchmaking Dating
                                                </p>
                                                <div class="avatar">
                                                    <div class="row ">
                                                        <div class="col">

                                                            <img class="avatar_3 d-inline" src="img/30x30 (2).webp"
                                                                style="border-radius: 20px; border: 2px solid white; height:30px; width:30px"
                                                                alt="">
                                                            <img class="avatar_2 d-inline" src="img/30x30 (1).webp"
                                                                style="border-radius: 20px; border: 2px solid white;height:30px; width:30px"
                                                                alt="">
                                                            <img class="avatar_1 d-inline " src="img/30x30.webp"
                                                                style="border-radius: 20px; border: 2px solid white;height:30px; width:30px"
                                                                alt="">
                                                            <p class="text-muted pt-1 "
                                                                style="font-size:15px; margin-left:80px;">210</p>
                                                        </div>
                                                        <div class="col">

                                                        </div>
                                                        <div class="col">
                                                            <svg style="margin-left:50px;color:#b3b3b3;"
                                                                xmlns="http://www.w3.org/2000/svg" width="20"
                                                                height="20" fill="currentColor"
                                                                class="bi bi-box-arrow-up" viewBox="0 0 16 16">
                                                                <path fill-rule="evenodd"
                                                                    d="M3.5 6a.5.5 0 0 0-.5.5v8a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5v-8a.5.5 0 0 0-.5-.5h-2a.5.5 0 0 1 0-1h2A1.5 1.5 0 0 1 14 6.5v8a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 14.5v-8A1.5 1.5 0 0 1 3.5 5h2a.5.5 0 0 1 0 1h-2z" />
                                                                <path fill-rule="evenodd"
                                                                    d="M7.646.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 1.707V10.5a.5.5 0 0 1-1 0V1.707L5.354 3.854a.5.5 0 1 1-.708-.708l3-3z" />
                                                            </svg>
                                                        </div>
                                                    </div>

                                                </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="col">
                                <a href="#" class="text-decoration-none">
                                    <div class="card-body pe-2 ps-0">
                                        <img src="img/event1.webp" style="border-radius: 8px;" alt="">
                                        <div class="online_event px-2">
                                            <svg  style="color:#757575;"xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                fill="currentColor" class="bi bi-camera-video-fill" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd"
                                                    d="M0 5a2 2 0 0 1 2-2h7.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 4.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 13H2a2 2 0 0 1-2-2V5z" />
                                            </svg>
                                            <p class="mb-0 ms-1 fw-bold" style="font-size:12px;color:#757575;margin-top:-2px">Online Event   </p>
                                        </div>
                                        <div class="px-2">

                                            <h6 class="mt-3" style="font-size: 14px;color: #877457;">MON, JAN 3 @ 7:00
                                                AM ICT</h5>
                                                <h6 class=" fw-bold link-dark" style="font-size: 17px;">New Jersey
                                                    Virtual Dating</h6>
                                                <p class="text-muted mt-3 mb-5" style="font-size: 13.5px;">New Jersey
                                                    Matchmaking Dating
                                                </p>
                                                <div class="avatar">
                                                    <div class="row ">
                                                        <div class="col mt-3">

                                                            <img class="avatar_3 d-inline" src="img/av2.webp"
                                                                style="border-radius: 20px; border: 2px solid white; height:30px; width:30px"
                                                                alt="">
                                                            <img class="avatar_2 d-inline" src="img/av1.webp"
                                                                style="border-radius: 20px; border: 2px solid white;height:30px; width:30px"
                                                                alt="">
                                                            <img class="avatar_1 d-inline " src="img/30x30.webp"
                                                                style="border-radius: 20px; border: 2px solid white;height:30px; width:30px"
                                                                alt="">
                                                            <p class="text-muted pt-1 "
                                                                style="font-size:15px; margin-left:80px;">71</p>
                                                        </div>
                                                        <div class="col">

                                                        </div>
                                                        <div class="col">
                                                            <svg style="margin-left:50px;color:#b3b3b3;"
                                                                xmlns="http://www.w3.org/2000/svg" width="20"
                                                                height="20" fill="currentColor"
                                                                class="bi bi-box-arrow-up" viewBox="0 0 16 16">
                                                                <path fill-rule="evenodd"
                                                                    d="M3.5 6a.5.5 0 0 0-.5.5v8a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5v-8a.5.5 0 0 0-.5-.5h-2a.5.5 0 0 1 0-1h2A1.5 1.5 0 0 1 14 6.5v8a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 14.5v-8A1.5 1.5 0 0 1 3.5 5h2a.5.5 0 0 1 0 1h-2z" />
                                                                <path fill-rule="evenodd"
                                                                    d="M7.646.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 1.707V10.5a.5.5 0 0 1-1 0V1.707L5.354 3.854a.5.5 0 1 1-.708-.708l3-3z" />
                                                            </svg>
                                                        </div>
                                                    </div>

                                                </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="col">
                                <a href="#" class="text-decoration-none">
                                    <div class="card-body pe-2 ps-0">
                                        <img src="img/event2.webp" style="border-radius: 8px;" alt="">
                                        <div class="online_event px-2">
                                            <svg  style="color:#757575;"xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                fill="currentColor" class="bi bi-camera-video-fill" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd"
                                                    d="M0 5a2 2 0 0 1 2-2h7.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 4.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 13H2a2 2 0 0 1-2-2V5z" />
                                            </svg>
                                            <p class="mb-0 ms-1 fw-bold" style="font-size:12px;color:#757575;margin-top:-2px">Online Event   </p>
                                        </div>
                                        <div class="px-2">

                                            <h6 class="mt-3" style="font-size: 14px;color: #877457;">SAT, JAN 1 @ 7:00
                                                AM ICT</h5>
                                                <h6 class=" fw-bold link-dark" style="font-size: 17px;">OASIS CHRISTIAN
                                                    SINGLES NEW YEARS EVE ZOOM CELEBRATION</h6>
                                                <p class="text-muted mt-3 mb-4" style="font-size: 13.5px;">OASIS
                                                    Tri-State Christian Singles Events
                                                </p>
                                                <div class="avatar">
                                                    <div class="row ">
                                                        <div class="col">

                                                            <img class="avatar_3 d-inline" src="img/av4.webp"
                                                                style="border-radius: 20px; border: 2px solid white; height:30px; width:30px"
                                                                alt="">
                                                            <img class="avatar_2 d-inline" src="img/av3.webp"
                                                                style="border-radius: 20px; border: 2px solid white;height:30px; width:30px"
                                                                alt="">
                                                            <img class="avatar_1 d-inline " src="img/av1.webp"
                                                                style="border-radius: 20px; border: 2px solid white;height:30px; width:30px"
                                                                alt="">
                                                            <p class="text-muted pt-1 "
                                                                style="font-size:15px; margin-left:80px;">56</p>
                                                        </div>
                                                        <div class="col">

                                                        </div>
                                                        <div class="col">
                                                            <svg style="margin-left:50px;color:#b3b3b3;"
                                                                xmlns="http://www.w3.org/2000/svg" width="20"
                                                                height="20" fill="currentColor"
                                                                class="bi bi-box-arrow-up" viewBox="0 0 16 16">
                                                                <path fill-rule="evenodd"
                                                                    d="M3.5 6a.5.5 0 0 0-.5.5v8a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5v-8a.5.5 0 0 0-.5-.5h-2a.5.5 0 0 1 0-1h2A1.5 1.5 0 0 1 14 6.5v8a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 14.5v-8A1.5 1.5 0 0 1 3.5 5h2a.5.5 0 0 1 0 1h-2z" />
                                                                <path fill-rule="evenodd"
                                                                    d="M7.646.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 1.707V10.5a.5.5 0 0 1-1 0V1.707L5.354 3.854a.5.5 0 1 1-.708-.708l3-3z" />
                                                            </svg>
                                                        </div>
                                                    </div>

                                                </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="col">
                                <a href="#" class="text-decoration-none">
                                    <div class="card-body pe-2 ps-0">
                                        <img src="img/event3.webp" style="border-radius: 8px;" alt="">
                                        <div class="online_event px-2">
                                            <svg  style="color:#757575;"xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                fill="currentColor" class="bi bi-camera-video-fill" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd"
                                                    d="M0 5a2 2 0 0 1 2-2h7.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 4.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 13H2a2 2 0 0 1-2-2V5z" />
                                            </svg>
                                            <p class="mb-0 ms-1 fw-bold" style="font-size:12px;color:#757575;margin-top:-2px">Online Event   </p>
                                        </div>
                                        <div class="px-2">

                                            <h6 class="mt-3" style="font-size: 14px;color: #877457;">FRI, JAN 14 @ 7:00
                                                AM ICT</h5>
                                                <h6 class=" fw-bold link-dark" style="font-size: 17px;">First Ever NYC
                                                    Young Professionals Book Club Meeting </h6>
                                                <p class="text-muted mt-3 mb-4" style="font-size: 13.5px;">NYC Young
                                                    Professionals Book Club
                                                </p>
                                                <div class="avatar">
                                                    <div class="row ">
                                                        <div class="col">

                                                            <img class="avatar_3 d-inline" src="img/30x30 (2).webp"
                                                                style="border-radius: 20px; border: 2px solid white; height:30px; width:30px"
                                                                alt="">
                                                            <img class="avatar_2 d-inline" src="img/av6.webp"
                                                                style="border-radius: 20px; border: 2px solid white;height:30px; width:30px"
                                                                alt="">
                                                            <img class="avatar_1 d-inline " src="img/av5.webp"
                                                                style="border-radius: 20px; border: 2px solid white;height:30px; width:30px"
                                                                alt="">
                                                            <p class="text-muted pt-1 "
                                                                style="font-size:15px; margin-left:80px;">40</p>
                                                        </div>
                                                        <div class="col">

                                                        </div>
                                                        <div class="col">
                                                            <svg style="margin-left:50px;color:#b3b3b3;"
                                                                xmlns="http://www.w3.org/2000/svg" width="20"
                                                                height="20" fill="currentColor"
                                                                class="bi bi-box-arrow-up" viewBox="0 0 16 16">
                                                                <path fill-rule="evenodd"
                                                                    d="M3.5 6a.5.5 0 0 0-.5.5v8a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5v-8a.5.5 0 0 0-.5-.5h-2a.5.5 0 0 1 0-1h2A1.5 1.5 0 0 1 14 6.5v8a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 14.5v-8A1.5 1.5 0 0 1 3.5 5h2a.5.5 0 0 1 0 1h-2z" />
                                                                <path fill-rule="evenodd"
                                                                    d="M7.646.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 1.707V10.5a.5.5 0 0 1-1 0V1.707L5.354 3.854a.5.5 0 1 1-.708-.708l3-3z" />
                                                            </svg>
                                                        </div>
                                                    </div>

                                                </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="col">
                                <a href="#" class="text-decoration-none">
                                    <div class="card-body pe-2 ps-0">
                                        <img src="img/event4.webp" style="border-radius: 8px;" alt="">
                                        <div class="online_event px-2">
                                            <svg  style="color:#757575;"xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                fill="currentColor" class="bi bi-camera-video-fill" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd"
                                                    d="M0 5a2 2 0 0 1 2-2h7.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 4.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 13H2a2 2 0 0 1-2-2V5z" />
                                            </svg>
                                            <p class="mb-0 ms-1 fw-bold" style="font-size:12px;color:#757575;margin-top:-2px">Online Event   </p>
                                        </div>
                                        <div class="px-2">

                                            <h6 class="mt-3" style="font-size: 14px;color: #877457;">SUN, JAN 2 @ 11:00
                                                PM ICT</h5>
                                                <h6 class=" fw-bold link-dark" style="font-size: 17px;">Van Gogh Museum
                                                    - Amsterdam: Livestream Art Tour</h6>
                                                <p class="text-muted mt-3 mb-4" style="font-size: 13.5px;">New York
                                                    History and Culture - ...
                                                </p>
                                                <div class="avatar">
                                                    <div class="row ">
                                                        <div class="col">

                                                            <img class="avatar_3 d-inline" src="img/av9.webp"
                                                                style="border-radius: 20px; border: 2px solid white; height:30px; width:30px"
                                                                alt="">
                                                            <img class="avatar_2 d-inline" src="img/av8.webp"
                                                                style="border-radius: 20px; border: 2px solid white;height:30px; width:30px"
                                                                alt="">
                                                            <img class="avatar_1 d-inline " src="img/av7.webp"
                                                                style="border-radius: 20px; border: 2px solid white;height:30px; width:30px"
                                                                alt="">
                                                            <p class="text-muted pt-1 "
                                                                style="font-size:15px; margin-left:80px;">306</p>
                                                        </div>
                                                        <div class="col">

                                                        </div>
                                                        <div class="col">
                                                            <svg style="margin-left:50px;color:#b3b3b3;"
                                                                xmlns="http://www.w3.org/2000/svg" width="20"
                                                                height="20" fill="currentColor"
                                                                class="bi bi-box-arrow-up" viewBox="0 0 16 16">
                                                                <path fill-rule="evenodd"
                                                                    d="M3.5 6a.5.5 0 0 0-.5.5v8a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5v-8a.5.5 0 0 0-.5-.5h-2a.5.5 0 0 1 0-1h2A1.5 1.5 0 0 1 14 6.5v8a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 14.5v-8A1.5 1.5 0 0 1 3.5 5h2a.5.5 0 0 1 0 1h-2z" />
                                                                <path fill-rule="evenodd"
                                                                    d="M7.646.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 1.707V10.5a.5.5 0 0 1-1 0V1.707L5.354 3.854a.5.5 0 1 1-.708-.708l3-3z" />
                                                            </svg>
                                                        </div>
                                                    </div>

                                                </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="col">
                                <a href="#" class="text-decoration-none">
                                    <div class="card-body pe-2 ps-0">
                                        <img src="img/event5.webp" style="border-radius: 8px;" alt="">
                                        <div class="online_event px-2">
                                            <svg  style="color:#757575;"xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                fill="currentColor" class="bi bi-camera-video-fill" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd"
                                                    d="M0 5a2 2 0 0 1 2-2h7.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 4.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 13H2a2 2 0 0 1-2-2V5z" />
                                            </svg>
                                            <p class="mb-0 ms-1 fw-bold" style="font-size:12px;color:#757575;margin-top:-2px">Online Event   </p>
                                        </div>
                                        <div class="px-2">

                                            <h6 class="mt-3" style="font-size: 14px;color: #877457;">SAT, JAN 8 @ 11:00
                                                PM ICT</h5>
                                                <h6 class=" fw-bold link-dark" style="font-size: 17px;">Online
                                                    Spanish-English Language Exchange - New Year's Resolution!</h6>
                                                <p class="text-muted mt-3 mb-4" style="font-size: 13.5px;">Spanglish
                                                    Languages and Culture ...
                                                <div class="avatar">
                                                    <div class="row ">
                                                        <div class="col">

                                                            <img class="avatar_3 d-inline" src="img/av11.webp"
                                                                style="border-radius: 20px; border: 2px solid white; height:30px; width:30px"
                                                                alt="">
                                                            <img class="avatar_2 d-inline" src="img/av1.webp"
                                                                style="border-radius: 20px; border: 2px solid white;height:30px; width:30px"
                                                                alt="">
                                                            <img class="avatar_1 d-inline " src="img/av10.webp"
                                                                style="border-radius: 20px; border: 2px solid white;height:30px; width:30px"
                                                                alt="">
                                                            <p class="text-muted pt-1 "
                                                                style="font-size:15px; margin-left:80px;">26</p>
                                                        </div>
                                                        <div class="col">

                                                        </div>
                                                        <div class="col">
                                                            <svg style="margin-left:50px;color:#b3b3b3;"
                                                                xmlns="http://www.w3.org/2000/svg" width="20"
                                                                height="20" fill="currentColor"
                                                                class="bi bi-box-arrow-up" viewBox="0 0 16 16">
                                                                <path fill-rule="evenodd"
                                                                    d="M3.5 6a.5.5 0 0 0-.5.5v8a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5v-8a.5.5 0 0 0-.5-.5h-2a.5.5 0 0 1 0-1h2A1.5 1.5 0 0 1 14 6.5v8a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 14.5v-8A1.5 1.5 0 0 1 3.5 5h2a.5.5 0 0 1 0 1h-2z" />
                                                                <path fill-rule="evenodd"
                                                                    d="M7.646.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 1.707V10.5a.5.5 0 0 1-1 0V1.707L5.354 3.854a.5.5 0 1 1-.708-.708l3-3z" />
                                                            </svg>
                                                        </div>
                                                    </div>

                                                </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="col">
                                <a href="#" class="text-decoration-none">
                                    <div class="card-body pe-2 ps-0">
                                        <img src="img/event6.webp" style="border-radius: 8px;" alt="">
                                        <div class="online_event px-2">
                                            <svg  style="color:#757575;"xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                fill="currentColor" class="bi bi-camera-video-fill" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd"
                                                    d="M0 5a2 2 0 0 1 2-2h7.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 4.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 13H2a2 2 0 0 1-2-2V5z" />
                                            </svg>
                                            <p class="mb-0 ms-1 fw-bold" style="font-size:12px;color:#757575;margin-top:-2px">Online Event   </p>
                                        </div>
                                        <div class="px-2">

                                            <h6 class="mt-3" style="font-size: 14px;color: #877457;">WED, JAN 12 @ 6:30
                                                AM ICT</h5>
                                                <h6 class=" fw-bold link-dark" style="font-size: 17px;">Web3 Blockchain
                                                    Game Development with Unity3D and ChainSafe
                                                </h6>
                                                <p class="text-muted mt-3 mb-4" style="font-size: 13.5px;">Big Apple
                                                    DeFi
                                                </p>
                                                <div class="avatar">
                                                    <div class="row ">
                                                        <div class="col">

                                                            <img class="avatar_3 d-inline" src="img/av1.webp"
                                                                style="border-radius: 20px; border: 2px solid white; height:30px; width:30px"
                                                                alt="">
                                                            <img class="avatar_2 d-inline" src="img/av1.webp"
                                                                style="border-radius: 20px; border: 2px solid white;height:30px; width:30px"
                                                                alt="">
                                                            <img class="avatar_1 d-inline " src="img/av12.webp"
                                                                style="border-radius: 20px; border: 2px solid white;height:30px; width:30px"
                                                                alt="">
                                                            <p class="text-muted pt-1 "
                                                                style="font-size:15px; margin-left:80px;">33</p>
                                                        </div>
                                                        <div class="col">

                                                        </div>
                                                        <div class="col">
                                                            <svg style="margin-left:50px;color:#b3b3b3;"
                                                                xmlns="http://www.w3.org/2000/svg" width="20"
                                                                height="20" fill="currentColor"
                                                                class="bi bi-box-arrow-up" viewBox="0 0 16 16">
                                                                <path fill-rule="evenodd"
                                                                    d="M3.5 6a.5.5 0 0 0-.5.5v8a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5v-8a.5.5 0 0 0-.5-.5h-2a.5.5 0 0 1 0-1h2A1.5 1.5 0 0 1 14 6.5v8a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 14.5v-8A1.5 1.5 0 0 1 3.5 5h2a.5.5 0 0 1 0 1h-2z" />
                                                                <path fill-rule="evenodd"
                                                                    d="M7.646.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 1.707V10.5a.5.5 0 0 1-1 0V1.707L5.354 3.854a.5.5 0 1 1-.708-.708l3-3z" />
                                                            </svg>
                                                        </div>
                                                    </div>

                                                </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div> -->
            <!-- Phần Popular groups ------------------------------------------------------------------------------------------------------------------>
            <div class="groups" style="margin-bottom:150px; height:300px">
                <div class="d-flex mb-4">
                    <div class="col-md-10">

                        <h3 class="d-inline fw-bold">Popular Groups</h3>
                    </div>
                    <div class="col-md" style="padding-left:35px ">

                        <a href="" class="d-inline" style="color: #008294;">Explore more groups</a>
                    </div>
                </div>
                <div class="container p-0">

                    <div class="owl-carousel carousel2">
                    <?php 
            
                        //Getting Foods from Database that are active and featured
                        //SQL Query
                        $sql = "SELECT * FROM tb_group ";

                        //Execute the Query
                        $res = mysqli_query($conn, $sql);

                        //Count Rows
                        $count = mysqli_num_rows($res);

                        //CHeck whether food available or not
                        if($count>0)
                        {
                            //Food Available
                            while($row=mysqli_fetch_assoc($res))
                            {
                    ?>
                        <div class="item">
                            <div class="col p-0 border me-3">
                                <div class="group_card " style="padding: 12px;">
                                    <a href="" class="text-decoration-none">
                                        <div class="d-flex items-center border-bottom pb-3">
                                            <div class=" me-3">
                                                <img src="image/<?php echo $row['img_gr']?>" alt=""
                                                    style="height:55px ;width:55px; border-radius:7px">
                                            </div>
                                            <h5 class="mt-1 fw-bold link-dark">
                                            <?php echo $row['name_gr']?>
                                            </h5>
                                        </div>
                                    </a>
                                    <a href="" class="text-decoration-none">
                                        <div class="mt-3">
                                            <p class="mb-2"><?php echo $row['time']?></p>
                                            <h6 class="fw-bold link-dark"><?php echo $row['content_gr']?></h6>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <?php
                                }
                            }
                        ?>
                       
                    </div>
                </div>

            </div>
            <!-- Phần app store ------------------------------------------------------------------------------------------------------------>
            <div class="row" style="margin-bottom: 200px;">
                <div class="col p-0">
                    <img src="img/ScreenIos.webp" alt="" style="height: 368px; width: 248px;">
                </div>
                <div class="col-md-6 p-0">
                    <div class="text-center">
                        <img src="img/logo2.png" alt="" weight="88" height="88">
                        <div class=" fw-bold fs-5 mt-3">Stay connected.</div>
                        <div class=" fw-bold fs-5">Download the app.</div>
                        <div class="col mt-4">
                            <img src="img/download_en-US.svg" alt="" weight="150" height="48" class="me-4">
                            <img src="img/download_en-US (1).svg" alt="" weight="150" height="45">
                        </div>
                    </div>
                </div>
                <div class="col">
                    <img src="img/ScreenAndroid.webp" alt="" style="height: 368px; width: 248px;">
                </div>
            </div>
            <!-- Phần Stories ------------------------------------------------------------------------------------------------------------------->
            <div class="stories pb-5">
                <p class="text-center fw-bold mb-0 text">Stories from Meetup</p>
                <p class="text-center mt-1 title">People on Meetup have fostered community, learned new skills, started
                    businesses, and made life-long friends. Learn how.</p>
                <div class="row mt-4 pt-2">
                    <div class="col-md-4 mb-3">
                        <div class="card border-0">
                            <img src="img/first_article.webp" class="card-img-top" alt="...">
                            <div class="card-body px-0 ">
                                <h5 class="card-title"><a href="card-title"
                                        class="link-dark text-decoration-none fw-bold">Three Ways To Make Coworker
                                        Friendships While Working From Home</a></h5>
                                <p class="card-text text-muted mt-3">Work friendships don't need to fade just because
                                    you're working remotely. Here are three fun ways you can get to know your
                                    colleagues.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3 ">
                        <div class="card border-0">
                            <img src="img/second_article.webp" class="card-img-top" alt="...">
                            <div class="card-body px-0">
                                <h5 class="card-title"><a href="card-title"
                                        class="link-dark text-decoration-none fw-bold">Five Ways to Feel More
                                        Connected</a></h5>
                                <p class="card-text text-muted mt-3">Since Meetup began nearly 20 years ago, we've
                                    fostered connections between more than 50 million pepple in 190 countries worldwide.
                                    Here are five simple strategiies to help you feel more connected and improve your
                                    wellbeing.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3 ">
                        <div class="card border-0">
                            <img src="img/third_article.webp" class="card-img-top" alt="...">
                            <div class="card-body px-0">
                                <h5 class="card-title"><a href="card-title"
                                        class="link-dark text-decoration-none fw-bold">How To Live Your Best Social
                                        Life</a></h5>
                                <p class="card-text text-muted mt-3">Social interaction is a key part of any healthy
                                    lifestyle. Discover all different kinds of events that'll help you maintain a fun
                                    and fulfilling social life.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <!-- Phần footer --------------------------------------------------------------------------------------------------------------->
        <?php
            include("template/footer.php")
        ?>
    </div>
    <!--Jquery -->
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

    $('.carousel2').owlCarousel({
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
                items: 3
            }
        }
    })
    </script>
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