<?php $this->view("header", $data); ?>


<section id="form" style="margin:40px;margin-top:-10px;">
    <!--form-->
    <div class="container">
        <div class="row" style="text-align:center">
            <div class="login-form">
                <!--login form-->
                <div class="col-sm-4" style="float:none;display:inline-block;">
                    <h2>Login to your account</h2>
                    <form action="#">
                        <input type="text" placeholder="Name" />
                        <input type="email" placeholder="Email Address" />
                        <span>
                            
                            <br>
                            <a href="<?= ROOT ?>signup">Don't have an account ?? Signup here</a>
                        </span>
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