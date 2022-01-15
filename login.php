
<button type="button" class="btn btn-link text-dark text-decoration-none" data-bs-toggle="modal"
    data-bs-target="#exampleModal1">
    Log in
</button>
<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col-md ">
                            <div id="first">
                                <div class="myform form">
                                    <form class="form-signin" width="100" action="process_login.php" method="post">
                                        <div class="text-center">
                                            <img class="mb-4" src="images/logo2.png" alt="" width="52" height="52">
                                            <h1 class="h3 mb-3 mt-0 font-weight-normal">
                                                Log in
                                            </h1>
                                            <a>Not a member yet?</a> <a class="text-decoration-none"
                                                href="signup.php">Sign up</a>
                                        </div>
                                        <label for="inputEmail" class="sr-only" >Email
                                        </label>
                                        <input type="email" id="inputEmail" class="form-control"name="txtEmail" required autofocus>
                                        <label for="inputPassword" class="sr-only">Password</label>
                                        <input type="password" id="inputPassword" class="form-control"name="txtPass" required>
                                        <div class="checkbox mb-3">
                                            <label>
                                                <input type="checkbox" value="remember-me">
                                                Keep me signed in
                                            </label>
                                            <?php
                                            if(isset($_GET['error'])){
                                                echo "<h5 style ='color:red'>{$_GET['error']}</h5>";
                                            }
                                            ?>
                                        </div>
                                        <button class="col-md-12 btn btn-lg btn-danger btn-block" type="submit"
                                            name="btnLogin">Log
                                            in</button>
                                        <hr class="mt-5">
                                        <div class=" justify-content">
                                            <div class="col-sm mt-5"><button type="button"
                                                    class="col-md-12 btn btn-icon btn-outline-dark text-left"><span><img
                                                            src="https://i.imgur.com/URmkevm.png" class="img-fluid mr-1"
                                                            width="25"></span>
                                                    Login with Facebook</button>
                                            </div>
                                            <div class="col-sm mt-3"><button type="button"
                                                    class="col-md-12 btn btn-icon btn-outline-dark text-left "><span><img
                                                            src="https://img.icons8.com/color/48/000000/google-logo.png"
                                                            class="img-fluid mr-1" width="25"></span>
                                                    Log in with Google</button>
                                            </div>
                                            <div class="col-sm mt-3">
                                                <button type="button"
                                                    class="col-md-12 btn btn-icon btn-outline-dark text-left "><span><img
                                                            src="https://avatars.githubusercontent.com/u/10639145?s=280&v=4"
                                                            class="img-fluid mr-1" width="25"></span>
                                                    Log in with Apple</button>
                                            </div>
                                            <div class="text-center mt-3">
                                                <a class="text-decoration-none" href="">Issues with log
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