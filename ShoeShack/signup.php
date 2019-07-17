<?php include 'header.php'; ?>

<div class="container">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <form action="signupHandler.php" method="post">
                <div class="form-group">
                    <label for="firstname">First name</label>
                    <span class="btn-danger">
                                <?php
                                if(isset($_GET['fError']))
                                {
                                    echo "Firstname is required";
                                }
                                ?>
                            </span>
                    <input type="text" name="firstname" class="form-control" id="firstname">
                </div>
                <div class="form-group">
                    <label for="lastname">Last name:</label>
                    <span class="btn-danger">
                                <?php
                                if(isset($_GET['lError']))
                                {
                                    echo "Lastname is required";
                                }
                                ?>
                            </span>
                    <input type="text" name="lastname" class="form-control" id="lastname">
                </div>
                <div class="form-group">
                    <label for="email">Email address:</label>
                    <span class="btn-danger">
                                <?php
                                if(isset($_GET['eError']))
                                {
                                    echo "Email is required";
                                }
                                ?>
                            </span>
                    <input type="email" name="email" class="form-control" id="email">
                </div>
                <div class="form-group">
                    <label for="pwd">Password:</label>
                    <span class="btn-danger">
                                <?php
                                if(isset($_GET['pError']))
                                {
                                    echo "Password is required";
                                }
                                ?>
                            </span>
                    <input type="password" name="password" class="form-control" id="pwd">
                </div>
                <button type="submit" name="signup" class="btn btn-default">Sign Up</button>
            </form>
        </div>
        <div class="col-md-4"></div>
    </div>
</div>

