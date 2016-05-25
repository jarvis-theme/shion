<section class="login">
    <div class="row-fluid">
        <header class="span12 pages">
            <h3>Akun</h3>
        </header>
    </div>

    <div class="wrap" style="padding: 0 20px;">
        <div class="row-fluid">
            <div class="span6">
                <ul class="nav nav-tabs" id="myTab">
                    <li class="active"><a href="#login"><i class="fa fa-lock"></i> Pelanggan lama</a></li>
                    <li><a href="#forgot"><i class="fa fa-question"></i> Lupa Password</a></li>
                </ul>

                <div class="tab-content">
                    <!-- Login -->
                    <div class="tab-pane active" id="login">
                        <form class="form-horizontal" action="{{url('member/login')}}" method="post">
                            <div class="control-group">
                                <label class="control-label" for="inputEmail"> Email</label>
                                <div class="controls">
                                    <input type="email" name="email" id="inputEmail" placeholder="Email" value="{{Input::old('email')}}" required autofocus style="height: 30px;">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="inputPassword">Password</label>
                                <div class="controls">
                                    <input type="password" name="password" id="inputPassword" placeholder="Password" required style="height: 30px;">
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="controls">
                                    <button type="submit" class="cart-button">Login</button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <!-- Register -->
                    <div class="tab-pane" id="forgot">
                        <form class="form-horizontal" action="{{url('member/forgetpassword')}}" method="post">
                            <div class="control-group">
                                <label class="control-label" for="inputEmail"> Email</label>
                                <div class="controls">
                                    <input type="email" id="inputEmail" placeholder="Email" name='recoveryEmail' style="height: 30px;" required>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="controls">
                                    <button type="submit" class="cart-button">Reset Password</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="span6">
                <p style="padding-top: 25px;">Pelanggan Baru</p>
                <hr>
                <p>Register and save time!
                    <ul class="ul" style="list-style: disc; margin: 0px 0px 10px 25px;">
                        <li>Fast and easy check out</li>
                        <li>Easy access to your order history and status</li>
                    </ul>
                    <a href="{{url('member/create')}}" class="theme">Create an Account →</a>
                </p>
            </div>
        </div>
    </div>
</section>