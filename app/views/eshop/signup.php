<?php $this->view("header", $data); ?>


<section id="form" style="margin:40px;margin-top:-10px;">
    <!--form-->
    <div class="container">
        <div class="row" style="text-align:center">
        
            <div class="col-sm-4" style="float:none;display:inline-block;">
                <div class="signup-form">
                
                    <h2>New User Signup!</h2>
                    <form method="POST">
                        <input name="name" type="text" value="<?= isset($_POST['name']) ? $_POST['name'] : '';?>"placeholder="Name" />
                        <input name="email" type="email" value="<?= isset($_POST['email']) ? $_POST['email'] : '';?>"placeholder="Email Address" />
                        <input name="password" type="password" placeholder="Password" />
                        <input name="password2" type="password" placeholder="Retype Password" />
                        <span style="font-size:12px;color:red;"><?php check_error() ?></span>

                        <button type="submit" class="btn btn-default">Signup</button>
                    </form>
                </div>

            </div>
            
        </div>
       
    </div>
</section>
<!--/form-->


<?php $this->view('footer', $data);
?>