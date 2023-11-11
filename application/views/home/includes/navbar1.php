<div class="layer"></div>
<!-- Mobile menu overlay mask -->
<!-- Header================================================== -->
<header>
    <!-- End top line-->
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                <div id="logo_home" style="width: 600px !important; margin-top: -3%;">
                    <h3 style="font-size: 150%;"><a href="<?= base_url() ?>" title="Ikatan Bujang Gadis SMA Negeri 9 Palembang" class="logo"> <img src="<?= base_url() ?>assets/img/logo.png" class="logo" width="40" height="40"> <span style="margin-left:5px; font-weight: 20px; font-weight:bold; color:#f9f9f9 !important;width: 100px;">DUKES SUMSEL</span></a></h3>
                </div>
            </div>
            <nav class="col-lg-8 col-md-8 col-sm-8 col-xs-8" style="display: flex; justify-content: flex-end;">
                <a class="cmn-toggle-switch cmn-toggle-switch__htx open_close" href="javascript:void(0);"><span  style="color:white !important;margin-top:25px" >Menu mobile</span></a>
                <div class="main-menu">
                    <div id="header_menu">
                        <!-- <img src="img/logo_sticky.png" width="160" height="34" alt="City tours" data-retina="true"> -->
                        <h3 style="font-size: 150%;"><a href="<?= base_url() ?>" title="Ikatan Bujang Gadis SMA Negeri 9 Palembang" class="logo"> <img src="<?= base_url() ?>assets/img/logo.png" class="logo" width="35" height="35"><span style="font-weight: 20px; "></span></a></h3>
                    </div>
                    <a href="#" class="open_close" id="close_in"><i class="icon_set_1_icon-77"></i></a>
                    <style type="text/css">
                      @media only screen and (max-width: 600px) {
                        .menu_ab {
                            color: #333 !important;
                        }

                        header.sticky * {
                          color: #333 !important
                        }
                      }

                    
                         .menu_a a {
                            color: #fff ;
                        }

                        .menu_a a:hover {
                            color: #c8b3a3 !important;
                        }
                    </style>
                    <ul class="menu_a  navbar-text text-center">
                        <li class="submenu">
                            <a style ="" href="<?= base_url() ?>" class="show-submenu menu_ab menu_abs"><b>Home</b></a>
                        </li>
                        <li class="submenu">
                            <a style ="" href="<?= base_url('home/history') ?>" class="show-submenu menu_abs"><b>Sejarah</b></a>
                        </li>
                        <li class="submenu">
                            <a style ="" href="<?= base_url('home/about') ?>" class="show-submenu menu_abs"><b>Profil</b></a>
                        </li>
                        <!-- <li class="submenu">
                            <a href="<?= base_url('home/vote') ?>" class="show-submenu"><b>Vote</b></a>
                        </li> -->
                        <!-- <li class="submenu">
                            <a href="<?= base_url('home/formulir') ?>" class="show-submenu"><b>Formulir Lampiran</b></a>
                        </li>-->
                        <li class="submenu">
                            <a href="<?= base_url('home/register') ?>" class="show-submenu"><b>Pendaftaran</b></a>
                        </li> 
                        <li class="submenu">
                            <a style ="" href="<?= base_url('home/listvoucher') ?>" class="show-submenu menu_ab menu_abs"><b>Daftar Voucher</b></a>
                        </li>
                        <!-- <li class="submenu">
                                <a href="https://docs.google.com/forms/d/e/1FAIpQLSdZjyWrerkyjTIQwDEEvs46mdq8t8UP7wppgp9Rb1AT1aOzTg/viewform"  target="_blank" class="show-submenu"><b>Pendaftaran</b></a>
                            </li> -->
                        <!-- 
                        <li class="submenu">
                            <a href="<?= base_url('home/semifinalis') ?>" class="show-submenu"><b>Finalis</b></a>
                        </li> -->
                        <li class="submenu">
                            <a style ="" href="<?= base_url('home/vote') ?>" class="show-submenu menu_ab menu_abs"><b>Vote</b></a>
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
