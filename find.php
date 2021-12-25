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
                                        <a class="nav-link" aria-current="page" href=""><i class="bi bi-globe2"></i>
                                            English</a>
                                    </li>
                                    <li class="nav-item">
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-link text-dark text-decoration-none"
                                            data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            Log in
                                        </button>

                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModal" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="container">
                                                            <div class="row">
                                                                <div class="col-md ">
                                                                    <div id="first">
                                                                        <div class="myform form">
                                                                            <form class="form-signin" width="100">
                                                                                <div class="text-center">
                                                                                    <img class="mb-4"
                                                                                        src="images/logo2.png" alt=""
                                                                                        width="52" height="52">
                                                                                    <h1
                                                                                        class="h3 mb-3 mt-0 font-weight-normal">
                                                                                        Log in
                                                                                    </h1>
                                                                                    <a>Not a member yet?</a> <a
                                                                                        class="text-decoration-none"
                                                                                        href="signup.php">Sign up</a>
                                                                                </div>

                                                                                <label for="inputEmail"
                                                                                    class="sr-only">Email
                                                                                </label>
                                                                                <input type="email" id="inputEmail"
                                                                                    class="form-control" required
                                                                                    autofocus>
                                                                                <label for="inputPassword"
                                                                                    class="sr-only">Password</label>
                                                                                <input type="password"
                                                                                    id="inputPassword"
                                                                                    class="form-control" required>
                                                                                <div class="checkbox mb-3">
                                                                                    <label>
                                                                                        <input type="checkbox"
                                                                                            value="remember-me">
                                                                                        Keep me signed in
                                                                                    </label>
                                                                                </div>
                                                                                <button
                                                                                    class="col-md-12 btn btn-lg btn-danger btn-block"
                                                                                    type="submit">Log in</button>
                                                                                <hr class="mt-5">
                                                                                <div class=" justify-content">
                                                                                    <div class="col-sm mt-5"><button
                                                                                            type="button"
                                                                                            class="col-md-12 btn btn-icon btn-outline-dark text-left"><span><img
                                                                                                    src="https://i.imgur.com/URmkevm.png"
                                                                                                    class="img-fluid mr-1"
                                                                                                    width="25"></span>
                                                                                            Login with Facebook</button>
                                                                                    </div>
                                                                                    <div class="col-sm mt-3"><button
                                                                                            type="button"
                                                                                            class="col-md-12 btn btn-icon btn-outline-dark text-left "><span><img
                                                                                                    src="https://img.icons8.com/color/48/000000/google-logo.png"
                                                                                                    class="img-fluid mr-1"
                                                                                                    width="25"></span>
                                                                                            Log in with Google</button>
                                                                                    </div>
                                                                                    <div class="col-sm mt-3">
                                                                                        <button type="button"
                                                                                            class="col-md-12 btn btn-icon btn-outline-dark text-left "><span><img
                                                                                                    src="https://avatars.githubusercontent.com/u/10639145?s=280&v=4"
                                                                                                    class="img-fluid mr-1"
                                                                                                    width="25"></span>
                                                                                            Log in with Apple</button>
                                                                                    </div>
                                                                                    <div class="text-center mt-3">
                                                                                        <a class="text-decoration-none"
                                                                                            href="">Issues with log
                                                                                            in?</a>
                                                                                    </div>
                                                                                </div>
                                                                            </form>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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
                <p class="lead mt-3">Friends event near NewYork, NY</p>
                <div class="container">
                    <div class="btn-group">
                        <button type="button" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown"
                            aria-expanded="false">
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
                        <button type="button" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Any type
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Any type</a></li>
                            <li><a class="dropdown-item" href="#">Online</a></li>
                            <li><a class="dropdown-item" href="#">In person</a></li>
                        </ul>
                    </div>

                    <div class="btn-group">
                        <button type="button" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown"
                            aria-expanded="false">
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
                        <button type="button" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown"
                            aria-expanded="false">
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
                        <button type="button" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown"
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

                <div class="row col-md-12">
                    <div class="col-md-2">
                        <img src="images/ev1.jpg" width="200" height="100" alt="">
                    </div>
                    <div class="col-md-9 ms-3">
                        <div>MON, JAN 3 @ 8:80 AM 2022</div>
                        <div>Speed FRIENDING (New Year, New Friends)</div>
                        <div>The New York Social Group (20,000+ members!)• New York, NY </div>
                        <div>4 attendees</div>
                        <div class="col-md-6 d-flex justify-content-end">
                            <i class="bi bi-box-arrow-up"></i>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <hr class="mt-3">
                    </div>
                </div>

                <div class="row col-md-12">
                    <div class="col-md-2">
                        <img src="images/ev2.jpg" width="200" height="100" alt="">
                    </div>
                    <div class="col-md-9 ms-3">
                        <div>TUE, JAN4 @ 7:30 AM 2022</div>
                        <div>Speed-Friending</div>
                        <div>Young Professionals & Graduate students Group • Boston, MA </div>
                        <div>100 attendees</div>
                        <div class="col-md-6 d-flex justify-content-end">
                            <i class="bi bi-box-arrow-up"></i>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <hr class="mt-3">
                    </div>
                </div>

                <div class="row col-md-12">
                    <div class="col-md-2">
                        <img src="images/a1.jpg" width="200" height="100" alt="">
                    </div>
                    <div class="col-md-9 ms-3">
                        <div>FRI, JAN 7 @ 6:30 AM 2022</div>
                        <div>In-Person Speed Friending</div>
                        <div>The New York Social Group (20,000+ members!)• New York, NY </div>
                        <div>7 attendees</div>
                        <div class="col-md-6 d-flex justify-content-end">
                            <i class="bi bi-box-arrow-up"></i>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <hr class="mt-3">
                    </div>
                </div>

                <div class="row col-md-12">
                    <div class="col-md-2">
                        <img src="images/ev3.jpg" width="200" height="100" alt="">
                    </div>
                    <div class="col-md-9 ms-3">
                        <div>MON, DEC 27 @ 8:00 AM 2021</div>
                        <div>Speed Friending Event</div>
                        <div>NYC Speed Friending Group • New York, NY </div>
                        <div>11 attendees</div>
                        <div class="col-md-6 d-flex justify-content-end">
                            <i class="bi bi-box-arrow-up"></i>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <hr class="mt-3">
                    </div>
                </div>

                <div class="row col-md-12">
                    <div class="col-md-2">
                        <img src="images/ev4.jpg" width="200" height="100" alt="">
                    </div>
                    <div class="col-md-9 ms-3">
                        <div>THU, DEC 30 @ 9:00 AM 2021</div>
                        <div>Meet New Friends on Zoom</div>
                        <div>International Friend Connection East Coast• New York, NY </div>
                        <div>50 attendees</div>
                        <div class="col-md-6 d-flex justify-content-end">
                            <i class="bi bi-box-arrow-up"></i>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <hr class="mt-3">
                    </div>
                </div>

                <div class="row col-md-12">
                    <div class="col-md-2">
                        <img src="images/ev4.jpg" width="200" height="100" alt="">
                    </div>
                    <div class="col-md-9 ms-3">
                        <div>THU, JAN 6 @ 9:00 AM 2022</div>
                        <div>Meet New Friends on Zoom</div>
                        <div>International Friend Connection East Coast• New York, NY </div>
                        <div>11 attendees</div>
                        <div class="col-md-6 d-flex justify-content-end">
                            <i class="bi bi-box-arrow-up"></i>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <hr class="mt-3">
                    </div>
                </div>

                <div class="row col-md-12">
                    <div class="col-md-2">
                        <img src="images/ev5.jpg" width="200" height="100" alt="">
                    </div>
                    <div class="col-md-9 ms-3">
                        <div>SAT, DEC 25 @ 8:30 PM 2021</div>
                        <div>Casual meetup to make friends</div>
                        <div>T.F.A.G. INTERNATIONAL • Mumbai, IN </div>
                        <div>1 attendees</div>
                        <div class="col-md-6 d-flex justify-content-end">
                            <i class="bi bi-box-arrow-up"></i>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <hr class="mt-3">
                    </div>
                </div>

                <div class="row col-md-12">
                    <div class="col-md-2">
                        <img src="images/ev5.jpg" width="200" height="100" alt="">
                    </div>
                    <div class="col-md-9 ms-3">
                        <div>SUN, DEC 26 @ 8:30 PM 2021</div>
                        <div>Casual meetup to make friends</div>
                        <div>T.F.A.G. INTERNATIONAL • Mumbai, IN </div>
                        <div>1 attendees</div>
                        <div class="col-md-6 d-flex justify-content-end">
                            <i class="bi bi-box-arrow-up"></i>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <hr class="mt-3">
                    </div>
                </div>

                <div class="row col-md-12">
                    <div class="col-md-2">
                        <img src="images/ev5.jpg" width="200" height="100" alt="">
                    </div>
                    <div class="col-md-9 ms-3">
                        <div>WED, DEC 29 @ 8:30 PM 2021</div>
                        <div>Casual meetup to make friends</div>
                        <div>T.F.A.G. INTERNATIONAL • Mumbai, IN </div>
                        <div>1 attendees</div>
                        <div class="col-md-6 d-flex justify-content-end">
                            <i class="bi bi-box-arrow-up"></i>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <hr class="mt-3">
                    </div>
                </div>

            </div>
            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                <p class="lead mt-3">Friends event near NewYork, NY</p>
                <div class="btn-group">
                        <button type="button" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown"
                            aria-expanded="false">
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
                        <button type="button" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown"
                            aria-expanded="false">
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
                <div class="row col-md-12">
                    <div class="col-md-2">
                        <img src="images/gr1.jpg" width="200" height="120" alt="">
                    </div>
                    <div class="col-md-5 ms-3">
                        <div>Long Island Friends</div>
                        <div>MELVILLE, NY</div>
                        <div class="mt-3">This is a a group for people who live and work in NY and the surrounding area,
                            but who recognize we are in one of the greate...</div>
                        <div class="mt-3">1484 members · Public <i class="bi bi-question-circle-fill"></i></div>
                        <div class="d-flex justify-content-end">
                            <i class="bi bi-box-arrow-up"></i>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <hr class="mt-3">
                    </div>
                </div>
                <div class="row col-md-12">
                    <div class="col-md-2">
                        <img src="images/a2.jpg" width="200" height="120" alt="">
                    </div>
                    <div class="col-md-5 ms-3">
                        <div>NYC and Long Island Friends</div>
                        <div>NEW YORK, NY</div>
                        <div class="mt-3">This is a a group for people who live and work in NY and the surrounding area,
                            but who recognize we are in one of the greate...</div>
                        <div class="mt-3">1300 members · Public <i class="bi bi-question-circle-fill"></i></div>
                        <div class="d-flex justify-content-end">
                            <i class="bi bi-box-arrow-up"></i>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <hr class="mt-3">
                    </div>
                </div>
                <div class="row col-md-12">
                    <div class="col-md-2">
                        <img src="images/gr2.jpg" width="200" height="120" alt="">
                    </div>
                    <div class="col-md-5 ms-3">
                        <div>Friends of Pauley</div>
                        <div>WOODBURY, NY</div>
                        <div class="mt-3">This is a a group where are going to be doing diffrent activitis on Long Island. Some of these will be bowling, game nights,...</div>
                        <div class="mt-3">87 members · Public <i class="bi bi-question-circle-fill"></i></div>
                        <div class="d-flex justify-content-end">
                            <i class="bi bi-box-arrow-up"></i>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <hr class="mt-3">
                    </div>
                </div>
                <div class="row col-md-12">
                    <div class="col-md-2">
                        <img src="images/gr3.jpg" width="200" height="120" alt="">
                    </div>
                    <div class="col-md-5 ms-3">
                        <div>Outdoor Friends Group</div>
                        <div>JERICHO, NY</div>
                        <div class="mt-3">This group is of people looking to meet others outdoors during this challenging time. Outdoors will include and talk, gather...</div>
                        <div class="mt-3">425 members · Public <i class="bi bi-question-circle-fill"></i></div>
                        <div class="d-flex justify-content-end">
                            <i class="bi bi-box-arrow-up"></i>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <hr class="mt-3">
                    </div>
                </div>
                <div class="row col-md-12">
                    <div class="col-md-2">
                        <img src="images/gr4.jpg" width="200" height="120" alt="">
                    </div>
                    <div class="col-md-5 ms-3">
                        <div>Resistance Meals w/Friends</div>
                        <div>OLD BETHPAGE, NY</div>
                        <div class="mt-3">If you have to ask what the resistances is or you have to Google it, this is not the group for you. This group if for those who are... </div>
                        <div class="mt-3">40 members · Public <i class="bi bi-question-circle-fill"></i></div>
                        <div class="d-flex justify-content-end">
                            <i class="bi bi-box-arrow-up"></i>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <hr class="mt-3">
                    </div>
                </div>
                <div class="row col-md-12">
                    <div class="col-md-2">
                        <img src="images/gr5.jpg" width="200" height="120" alt="">
                    </div>
                    <div class="col-md-5 ms-3">
                        <div>Friends Forever Bus Tour Club</div>
                        <div>SMITHTOWN, NY</div>
                        <div class="mt-3">Welcome to the Friend's Forever Bus Tour Club. We offer One day Bus Tours and Multi Day Bus Tours for Individuals and Groups...</div>
                        <div class="mt-3">2429 members · Public <i class="bi bi-question-circle-fill"></i></div>
                        <div class="d-flex justify-content-end">
                            <i class="bi bi-box-arrow-up"></i>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <hr class="mt-3">
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer class="text-center text-lg-start bg-dark text-white mt-5">
        <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
            <!-- Left -->
            <div class="  container text-center text-md-start mt-5">
                <span class="hidden sm:block font-semibold ">Create your own Meetup group.</span>
                <button class="ms-3 text-white inline-flex ml-4 px-4 py-2  border-3 border-white rounded-md bg-dark">Get
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
                    <img src="images/download_en-US(1).svg" alt="" class="me-3" height="38px" width="128px">
                    <img src="images/download_en-US.svg" alt="" height="38px" width="128px">
                </div>
            </div>
            <div class="row mt-5">
                <div class="finish">
                    <span class="link-light me-3">© 2021 Meetup</span>
                    <a href="" class="link-light text-decoration-none me-3">Terms of Service</a></li>
                    <a href="" class="link-light text-decoration-none me-3">Privacy Policy</a></li>
                    <a href="" class="link-light text-decoration-none me-3">Cookie Policy</a></li>
                    <a href="" class="link-light text-decoration-none me-3">Help</a></li>


                </div>
            </div>

    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>