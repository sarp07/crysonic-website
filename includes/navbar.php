<?php
require 'header.php';
?>

<div class="header__right">
    <nav id="main-nav" class="main-nav">
        <ul id="menu-primary-menu" class="menu">
            <li class="menu-item">
                <a href="#section-1"><?php echo $lang['section1'] ?></a>
            </li>
            <li class="menu-item">
                <a href="#section-2"><?php echo $lang['section2'] ?></a>
            </li>
            <li class="menu-item">
                <a href="#section-3"><?php echo $lang['section3'] ?></a>
            </li>
            <li class="menu-item">
                <a href="#section-4"><?php echo $lang['section4'] ?></a>
            </li>
            <li class="menu-item">
                <a href="#section-5"><?php echo $lang['section5'] ?></a>
            </li>
            <li class="menu-item">
                <a href="#section-6"><?php echo $lang['section6'] ?></a>
            </li>

            <li class="menu-item menu-item-has-children">
                <a href="#"><?php echo $lang['lang'] ?></a>
                <ul class="sub-menu">
                    <li class="menu-item"><a href="?lang=en"><?php echo $lang['en'] ?></a></li>
                    <li class="menu-item"><a href="?lang=tr"><?php echo $lang['tr'] ?></a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <div class="group-button">
    </div>
    <div class="mobile-button"><span></span></div>
</div>

</div>
</div>
</div>
</div>
</header>
<!-- end Header -->