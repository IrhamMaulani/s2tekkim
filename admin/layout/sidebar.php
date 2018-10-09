
            <div class="logo">
                <a href="#">
                    <img src="../assets/images/icon/logo.png" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="<?php require('url.php'); if($url=='home'){echo "active";}?>">
                            <a href="../home">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                        <li class="<?php require('url.php'); if($url=='artikel'){echo "active";}?>">
                            <a href="../artikel">
                                <i class="fas fa-chart-bar"></i>Artikel</a>
                        </li>
                        <li class="<?php require('url.php'); if($url=='staff'){echo "active";}?>">
                            <a href="../staff">
                                <i class="fas fa-table"></i>Staff</a>
                        </li>
                        <li class="<?php require('url.php'); if($url=='tentang-kami'){echo "active";}?>">
                            <a href="../tentang-kami">
                                <i class="fas fa-calendar-alt"></i>Tentang Kami</a>
                        </li>
                    </ul>
                </nav>
            </div>