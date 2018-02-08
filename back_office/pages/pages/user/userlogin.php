<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="../styles/bootstrap.main.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <!-- Optional theme -->
        <link rel="stylesheet" href="../styles/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        <!-- Latest compiled and minified JavaScript -->
        <script src="../js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <title>User Login</title>
    </head>
    <body>
        <br /><br /><br /><br /><br /><br />
        <div class="row">
            <div class="col-md-1">
            </div>
            <div class="col-md-6">
                <p align="center"><a href="../index.php"><img src="../images/Key.jpg" alt="MAXOMUS Accounting Information System" class="img-responsive" /></a></p>
            </div>
            <div class="col-md-4">
                <fieldset>
                    <legend>User Access</legend>
                    <p align="center">
                        <video id="video" width="204" height="144" autoplay class="embed-responsive-item"></video>
                    </p>
                    <!--<button id="snap">Snap Photo</button>
                        <canvas id="canvas" width="640" height="480"></canvas>-->
                    <script>
                        // Grab elements, create settings, etc.
                        var video = document.getElementById('video');
                        
                        // Get access to the camera!
                        if(navigator.mediaDevices && navigator.mediaDevices.getUserMedia) {
                           // Not adding `{ audio: true }` since we only want video now
                           navigator.mediaDevices.getUserMedia({ video: true }).then(function(stream) {
                               video.src = window.URL.createObjectURL(stream);
                               video.play();
                           });
                        }
                        	// Elements for taking the snapshot
                        var canvas = document.getElementById('canvas');
                        var context = canvas.getContext('2d');
                        var video = document.getElementById('video');
                        
                        // Trigger photo take
                        document.getElementById("submit").addEventListener("click", function() {
                        context.drawImage(video, 0, 0, 200, 200);
                        var image = new Image();  
                        image.src = canvas.toDataURL("image/a.png");
                        
                        
                        });
                    </script>
                    <div class="container">
                        <!--<h2>Please Enter username and password</h2>-->
                        <form class="form-inline" action="../db/action_page.php" method="get">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon" title="User Name"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></div>
                                    <input name="username" type="text" class="form-control" id="username" placeholder="Enter username" maxlength="25">
                                </div>
                            </div>
                            <br /><br />
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon" title="Password"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span></div>
                                    <input name="pwd" type="password" class="form-control" id="pwd" placeholder="Enter password" maxlength="25">
                                </div>
                            </div>
                            <br /><br />
                            <div class="col-md-8">
                                <div class="checkbox">
                                    <label><input type="checkbox" name="remember"> Remember me</label>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <button type="submit" class="btn btn-default">Login</button>  <button type="reset" class="btn btn-default">Reset</button>
                                <br /><br />
                            </div>
                        </form>
                    </div>
                </fieldset>
                <div class="col-md-8">
                    <a href="#">
                        <h4 style="color:#F00">Forget Password?? Click me!!</h4>
                    </a>
                    <!--<a href="userRegister.php"><h4>New User!!! Please Register</h4></a>-->
                    <a href="#" style="color:#00F">
                        <h4 style="color:#00F">Need Support??  <img src="../images/support.png" height="15px" /></h4>
                    </a>
                </div>
            </div>
            <div class="col-lg-1">
            </div>
        </div>
        <?php
            include_once('../pages/footer.php')
            
            
            ?>
    </body>
</html>