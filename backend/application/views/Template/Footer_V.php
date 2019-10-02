        <!-- Modal -->
        <div id="signup" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <!-- <h4 class="modal-title">Modal Header</h4> -->
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-1"></div>
                            <div class="col-lg-4">
                                <h1>Sign Up</h1>
                                <form action="<?= site_url(); ?>Customer/Sign_Up" method="post">
                                    <table class="table">
                                        <tr>
                                            <td>Name</td>
                                            <td>:</td>
                                            <td><input type="text" name="name" placeholder="Input Name"></td>
                                        </tr>
                                        <tr>
                                            <td>Email</td>
                                            <td>:</td>
                                            <td><input type="email" name="email" placeholder="Input Email"></td>
                                        </tr>
                                        <tr>
                                            <td>Username</td>
                                            <td>:</td>
                                            <td><input type="text" name="username" placeholder="Input Username"></td>
                                        </tr>
                                        <tr>
                                            <td>Password</td>
                                            <td>:</td>
                                            <td><input type="password" name="password" placeholder="Input Password"></td>
                                        </tr>
                                        <tr>
                                            <td>Current Password</td>
                                            <td>:</td>
                                            <td><input type="password" name="password2" placeholder="Input Password"></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td style="float:right">
                                                <button class="btn" data-toggle="modal" data-target="#signin" data-dismiss="modal">Login</button>
                                                <button class="btn btn-primary" >Sign Up</button>
                                            </td>
                                        </tr>
                                    </table>
                                </form>
                            </div>
                            <div class="col-lg-1"></div>   
                        </div>    
                    </div>
                </div>
                <div class="modal-footer">
                    <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
                </div>
                </div>

            </div>
        </div>

        <!-- Modal -->
        <div id="signin" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <!-- <h4 class="modal-title">Modal Header</h4> -->
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-1"></div>
                                <div class="col-lg-4">
                                    <h1>Login</h1>
                                    <form action="<?= site_url(); ?>Customer/Sign_In" method="post">
                                        <table class="table">
                                            <tr>
                                                <td>Username</td>
                                                <td>:</td>
                                                <td><input type="text" name="username" placeholder="Input Username"></td>
                                            </tr>
                                            <tr>
                                                <td>Password</td>
                                                <td>:</td>
                                                <td><input type="Password" name="password" placeholder="Input Password"></td>
                                            </tr>
                                            <tr>
                                                <td><a>Forget Password?</a></td>
                                                <td></td>
                                                <td style="float:right">
                                                    <button class="btn" data-toggle="modal" data-target="#signup" data-dismiss="modal">Sign Up</button>
                                                    <button class="btn btn-primary" >Login</button>
                                                    </td>
                                            </tr>
                                        </table>
                                    </form>
                                </div>
                                <div class="col-lg-1"></div>
                            </div>    
                        </div>
                    </div>
                    <div class="modal-footer">
                        <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
                    </div>
                </div>

            </div>
        </div>

    </body>
</html>