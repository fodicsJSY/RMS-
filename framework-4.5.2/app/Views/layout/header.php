<div class="header-top">
    <div class="ht-left">
        <div class="htl-logo"><img class="htl-logo-img" src="../img/pologo.png" /></div>
        <div class="htl-text">자원관리솔루션</div>
    </div>
    <div class="ht-right">
        <div class="ht-right-text">
            <?php
            if(session('user')){
                echo session('user')['us_dept'];
            };
            ?>
        </div>
        <div class="ht-right-text">|</div>
        <div class="ht-right-text">
            <?php
            if(session('user')){
                echo session('user')['us_name'];
            };
            ?>
        </div>
        <div class="icon-user-wrapper"><div class="icon-user"></div></div>
        <div class="btn-login-wrapper">
            <?php
            if(session('user')){ ?>
                <div class="btn-icon-login"></div>
                <div class="btn-login"><a href="<?= base_url('login/logout') ?>">로그아웃</a></div>
                <?php
            }else{ ?>
                <div class="btn-icon-login"></div>
                <div class="btn-login"><a href="<?= base_url('login') ?>">로그인</a></div>
                <?php
            };
            ?>
        </div>
    </div>
</div>

<div class="header">
    <div class="btn-menu-wrapper" onclick="location.href='<?= base_url('dashboard') ?>';"><div class="btn-menu-login"></div>대시보드</div>
    <div class="btn-menu-wrapper" onclick="location.href='<?= base_url('dashboard') ?>';"><div class="btn-menu-login"></div>관제일지</div>
    <div class="btn-menu-wrapper" onclick="location.href='<?= base_url('dashboard') ?>';"><div class="btn-menu-login"></div>장애관리</div>
    <div class="btn-menu-wrapper" onclick="location.href='<?= base_url('dashboard') ?>';"><div class="btn-menu-login"></div>전자결재</div>
    <div class="btn-menu-wrapper" onclick="location.href='<?= base_url('notice') ?>';"><div class="btn-menu-login"></div>커뮤니티</div>
    <div class="btn-menu-wrapper" onclick="location.href='<?= base_url('resources1') ?>';"><div class="btn-menu-login"></div>자원관리</div>
    <div class="btn-menu-wrapper" onclick="location.href='<?= base_url('user') ?>';"><div class="btn-menu-login"></div>시스템관리</div>
</div>