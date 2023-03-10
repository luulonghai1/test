<?php
$sql_danhmuc = "SELECT * FROM bang_danhmuc ORDER BY thutu ASC";
$query_danhmuc = mysqli_query($conn, $sql_danhmuc);
?>
<?php
$sql_xuat_danhmucphu = "SELECT * FROM bang_danhmucphu,bang_danhmuc WHERE bang_danhmucphu.id_danhmuc=bang_danhmuc.id_danhmuc ORDER BY bang_danhmucphu.id_danhmucphu DESC";
$row_xuat_danhmucphu = mysqli_query($conn, $sql_xuat_danhmucphu);
?>

<div class="header">
    <div class="container-fluid">
        <div class="topbar-content text-center">
            <p>CSKH : 082.3304.717 / Email : 2121TT0522@mai.tdc.edu.vn </p>
        </div>
    </div>



    <div class="menu-logo">
        <div class="container-fluid">
            <div class="flex-headercontent">
                <div class="logo-topbar header-upper-logo">
                    <div class="header-upper-logo wrap-logo">
                        <a href="index.php?index=trangchu">
                            <img src="IMAGES/logo-s&w.svg" alt="">
                        </a>
                    </div>
                </div>
                <div class="hearder-upper-menu hidden-sm hidden-xs custum-menu-desktop">
                    <div class="menu-desktop">
                        <nav class="navbar navbar-expand-lg navbar-light bg-light">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>

                            <div class="main-nav collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav mr-auto">
                                    <li class="type-home">
                                        <a href="index.php?index=trangchu" title="Trang chủ">Trang chủ</a>
                                    </li>
                                    <?php
                                    while ($row_danhmuc = mysqli_fetch_array($query_danhmuc)) {
                                    ?>
                                        <li class="type-menu">
                                            <a href="index.php?quanly=danhmucsanpham&id=<?php echo $row_danhmuc['id_danhmuc'] ?>" title="<?php echo $row_danhmuc['tendanhmuc']; ?>"><?php echo $row_danhmuc['tendanhmuc'] ?>
                                                <?php
                                                include('header/menu/icon-submenu.php');
                                                ?>

                                            </a>

                                            <?php include('header/menu/sub-menu.php'); ?>

                                        </li>
                                    <?php
                                    }
                                    ?>

                                    <li class="type-menu">
                                        <a href="index.php?quanly=blog" title="Blog">Blog</a>
                                    </li>
                                    <li class="type-menu">
                                        <a href="index.php?quanly=lienhe" title="Liên hệ">Liên hệ</a>

                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>

                <div class="header-upper-icon">
                    <div class="wrap-icon">
                        <div class="header-text">
                            <a href="" class="header-search__link">
                                <img class="img-icon" src="IMAGES/header_icon/header_icon_search.svg" alt="" title="Tìm kiếm" aria-label="Tìm kiếm">
                            </a>
                        </div>

                        <div class="header-text">
                            <a href="#" class="header-accout">
                                <img class="img-icon" src="IMAGES/header_icon/header_icon_accout.svg" alt="" title="Tài khoản" aria-label="Tài khoản">
                            </a>

                            <div class="header-dropdown_content">
                                <div class="row">
                                    <div class="site_account " id="siteNav-account">
                                        <div class="site_account_panel_list" style="height: 310px;">
                                            <div id="header-login-panel" class="site_account_panel site_account_default is-selected">
                                                <header class="site_account_header text-center">
                                                    <h2 class="site_account_title heading">Đăng nhập tài khoản</h2>
                                                    <p class="site_account_legend">Nhập email và mật khẩu của bạn:</p>
                                                </header>
                                                <div class="site_account_inner">
                                                    <form accept-charset="UTF-8" action="../../web_s&w/admin/index.php" id="customer_login" method="post">
                                                        <input name="form_type" type="hidden" value="customer_login">
                                                        <input name="utf8" type="hidden" value="✓">

                                                        <div class="form__input-wrapper form__input-wrapper--labelled">
                                                            <input type="email" id="login-customer[email]" class="form__field form__field--text" name="email" required="required" placeholder="Email">
                                                        </div>
                                                        <div class="form__input-wrapper form__input-wrapper--labelled">

                                                            <input type="password" id="login-customer[password]" class="form__field form__field--text" name="password" required="required" autocomplete="current-password" placeholder="Password">
                                                        </div>
                                                        <button type="submit" class="form__submit button dark " id="form_submit-login" name="dangnhap">
                                                            <p style="margin: 0;text-transform: uppercase;"><span></span><span></span><span></span><span></span> Đăng nhập</p>
                                                        </button>

                                                        <input id="" name="g-recaptcha-response" type="hidden" value="">
                                                    </form>
                                                    <div class="site_account_secondary-action">
                                                        <p>Khách hàng mới?
                                                            <a class="link" href="index.php?quanly=account">Tạo tài khoản</a>
                                                        </p>
                                                        <p>Quên mật khẩu?
                                                            <button aria-controls="header-recover-panel" class="js-link link">Khôi phục mật khẩu</button>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="header-recover-panel" class="site_account_panel  site_account_sliding d-none">
                                                <header class="site_account_header">
                                                    <h2 class="site_account_title heading">Khôi phục mật khẩu</h2>
                                                    <p class="site_account_legend">Nhập email của bạn:</p>
                                                </header>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <span class="box-triangle">
                                </span>
                            </div>
                        </div>

                        <div class="header-text">
                            <a href="index.php" class="header-cart">
                                <img class="img-icon" src="IMAGES/header_icon/header_icon_cart.svg" alt="" title="Giỏ hàng" aria-label="Giỏ hàng">
                            </a>
                        </div>
                    </div>
                </div>
                <script>
                    $(document).ready(function() {
                        $('.img-icon').click(function() {
                            $('.header-dropdown_content').slideToggle();
                        })
                    })
                </script>
            </div>
        </div>
    </div>
</div>