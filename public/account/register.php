

<main class="mainContent-theme ">
    <div class="layout-account">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 col-xs-12 wrapbox-heading-account">
                    <div class="header-page clearfix">
                        <h1>Tạo tài khoản</h1>
                    </div>
                </div>
                <div class="col-md-6 col-xs-12 wrapbox-content-account ">
                    <div class="userbox">
                        <form accept-charset="UTF-8" action="/account" id="create_customer" method="POST" autocapitalize="off">

                            <div id="form-last_name" class="clearfix large_form">
                                <label for="last_name" class="label icon-field"><i class="icon-login icon-user "></i></label>
                                <input required="" type="text" value="" name="last_name" placeholder="Họ" id="last_name" class="text" size="30">
                            </div>
                            <div id="form-first_name" class="clearfix large_form">
                                <label for="first_name" class="label icon-field"><i class="icon-login icon-user "></i></label>
                                <input required="" type="text" value="" name="first_name]" placeholder="Tên" id="first_name" class="text" size="30">
                            </div>
                            <div id="form-gender" class="clearfix large_form">
                                <input id="radio1" type="radio" value="0" name="gioi_tinh">
                                <label for="radio1">Nữ</label>
                                <input id="radio2" type="radio" value="1" name="gioi_tinh">
                                <label for="radio2">Nam</label>
                            </div>
                            <div id="form-birthday" class="clearfix large_form">
                                <label for="birthday" class="label icon-field"><i class="icon-login icon-envelope "></i></label>
                                <input type="text" value="" placeholder="mm/dd/yyyy" name="birthday" id="birthday" class="text" size="30">
                            </div>
                            <div id="form-email" class="clearfix large_form">
                                <label for="email" class="label icon-field"><i class="icon-login icon-envelope "></i></label>
                                <input required="" type="email" value="" placeholder="Email" name="" id="email" class="text" size="30">
                            </div>
                            <div id="form-password" class="clearfix large_form large_form-mr10">
                                <label for="password" class="label icon-field"><i class="icon-login icon-shield "></i></label>
                                <input required="" type="password" value="" placeholder="Mật khẩu" name="password" id="password" class="password text" size="30">
                            </div>
                            <div class="clearfix action_account_custommer">
                                <div class="action_bottom button dark">
                                    <input class="btn" type="submit" value="Đăng ký" name="Dangky">
                                </div>
                            </div>
                            <div class="clearfix req_pass">
                                <a class="come-back" href="index.php?index=trangchu"><i class="bi bi-caret-left"></i> Quay lại trang chủ</a>
                            </div>

                            <input id="" name="g-recaptcha-response" type="hidden" value="">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>