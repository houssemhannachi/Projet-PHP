<?php $this->view("header", $data); ?>


<section id="form" style="margin:40px;margin-top:-10px;">
    <!--form-->
    <div class="container">
        <div class="row" style="text-align:center">
            <div class="login-form">
                <!--login form-->
                <div class="col-sm-4" style="float:none;display:inline-block;">
                    <h2>Login to your account</h2>
                    <form action="#" method="POST">
                        <input type="email" name="email" placeholder="Email Address" />
                        <input type="password" name="password" placeholder="Password" />
                        <span>
                            
                            <br>
                            <a href="<?= ROOT ?>signup">Don't have an account ?? Signup here</a>
                        </span>
                        <span style="font-size:12px;color:red;"><?php check_error() ?></span>

                        <button type="submit" class="btn btn-default">Login</button>
                    </form>
                </div>
                <!--/login form-->

            </div>
        </div>
    </div>
</section>
<!--/form-->


<?php $this->view('footer', $data) ?>