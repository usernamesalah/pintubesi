<div class="layer"></div>
<!-- Mobile menu overlay mask -->
<!-- Header================================================== -->
<header>
    <!-- End top line-->
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                <div id="logo_home" style="width: 600px !important; margin-top: -3%;">
                    <h3 style="font-size: 150%;"><a href="<?= base_url() ?>" title="Ikatan Bujang Gadis SMA Negeri 9 Palembang" class="logo mr-5"> <img src="<?= base_url() ?>assets/img/logo.png" class="logo" width="35" height="35"> <span style="margin-left:5px; font-weight: 20px; font-weight:bold">Ikatan Bujang Gadis SMA Negeri 9 Palembang</span></a></h3>
                </div>
            </div>
            <nav class="col-lg-8 col-md-8 col-sm-8 col-xs-8" style="display: flex; justify-content: flex-end;">
                <a class="cmn-toggle-switch cmn-toggle-switch__htx open_close" href="javascript:void(0);"><span>Menu mobile</span></a>
                <div class="main-menu">
                    <div id="header_menu">
                        <!-- <img src="img/logo_sticky.png" width="160" height="34" alt="City tours" data-retina="true"> -->
                        <h3 style="font-size: 150%;"><a href="<?= base_url() ?>" title="Ikatan Bujang Gadis SMA Negeri 9 Palembang" class="logo"> <img src="<?= base_url() ?>assets/img/logo.png" class="logo" width="35" height="35"><span style="font-weight: 20px; color: #1e225e !important"></span></a></h3>
                    </div>
                    <a href="#" class="open_close" id="close_in"><i class="icon_set_1_icon-77"></i></a>
                    <style type="text/css">
                        .menu_a a {
                            color: black !important;
                        }

                        .menu_a a:hover {
                            color: #e04f67 !important;
                        }
                    </style>
                    <ul class="menu_a navbar-text text-center">
                        <li class="submenu">
                            <a href="<?= base_url() ?>" class="show-submenu"><b>Home</b></a>
                        </li>
                        <li class="submenu">
                            <a href="<?= base_url('home/about') ?>" class="show-submenu"><b>Profil</b></a>
                        </li>
                        <!-- <li class="submenu">
                            <a href="<?= base_url('home/vote') ?>" class="show-submenu"><b>Vote</b></a>
                        </li> -->
                        <!-- <li class="submenu">
                            <a href="<?= base_url('home/formulir') ?>" class="show-submenu"><b>Formulir Lampiran</b></a>
                        </li>
                        <li class="submenu">
                            <a href="<?= base_url('register/peserta') ?>" class="show-submenu"><b>Pendaftaran</b></a>
                        </li> -->
                        <li class="submenu">
                            <a href="<?= base_url('home/himbauan') ?>" class="show-submenu"><b>Himbauan</b></a>
                        </li>
                        <!-- <li class="submenu">
                                <a href="https://docs.google.com/forms/d/e/1FAIpQLSdZjyWrerkyjTIQwDEEvs46mdq8t8UP7wppgp9Rb1AT1aOzTg/viewform"  target="_blank" class="show-submenu"><b>Pendaftaran</b></a>
                            </li> -->
                        <!-- 
                        <li class="submenu">
                            <a href="<?= base_url('home/semifinalis') ?>" class="show-submenu"><b>Finalis</b></a>
                        </li> -->
                        <li class="submenu">
                            <a href="<?= base_url('home/vote') ?>" class="show-submenu"><b>Vote</b></a>
                        </li>
                        <!--<li class="submenu">
                            <a href="<?= base_url('payment/voucher') ?>" class="show-submenu"><b>Beli Voucher</b></a>
                        </li> -->
                        <?php
                        $token = $this->session->userdata('token');
                        ?>
                        <?php if (isset($token)) : ?>
                            <li class="submenu">
                                <a href="<?= base_url('payment/history') ?>" class="show-submenu"><b>Histori Pembelian</b></a>
                            </li>
                            <li class="submenu">
                                <a href="<?= base_url('logout') ?>" class="show-submenu"><b>Logout</b></a>
                            </li>
                        <?php else : ?>
<!--                             <li class="submenu">
                            <li><a href="<?= base_url('login') ?>" class="show-submenu"><b>Login</b></a></li>
                            </li> -->
                        <?php endif; ?>
                        <li class="submenu">&nbsp;</li>
                    </ul>
                </div>
            </nav>
        </div>
    </div><!-- container -->
</header><!-- End Header -->
