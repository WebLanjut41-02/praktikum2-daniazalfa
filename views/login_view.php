<div class="container">
    <div class="row">
        <div class="co1-md-4 co1-md-offset-4">
            <div class="panel-heading">
                <h3 class="panel-title"> Silahkan Login</h3>
            </div>
            <div class="panel-body">
                <?php
                if (!empty($notif)){
                    echo '<div class="alert alert-danger">';
                    echo $notif;
                    echo "</div>";
                }
                ?>
                <form role="form" action="<?php echo base_url(); ?>index.php/login/dologin" method="post">
                    <fieldset>
                        <div class="form-group">
                            <input class="form-control" placeholder="nama" name="nama" autofocus>
                        </div>
                        <div class="form-group">
                            <input class="form-control" placeholder="nip" name="nip" type="password" value="">
                        </div>
                        <div class="checkbox">
                            <label>
                                <input name="remember" type="checkbox" value="remember me">remember me
                            </label>
                        </div>
                        <input class="btn btn-lg btn-success btn-block" name="submit" type="submit" value="login">
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>