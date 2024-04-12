<?php include "conn.php";
session_start();
?>

<nav>
    <div class="sidebar">
        <div class="logo_content">
            <div class="logo">
                <i class='bx bxl-twitter'></i>
                <div class="logo_name">Chirpify</div>
            </div>
            <i class='bx bx-menu' id="menu"></i>
        </div>

        <ul class="nav_list">
            <li>
                <i class='bx bx-search'></i>
                <input type="text" placeholder="Search Cipfry..." id="searchh">
                <span class="tooltip">Search</span>
            </li>
            <li>
                <a href="function.php">
                    <i class='bx bxs-home'></i>
                    <span class="links_name">Home</span>
                </a>
                <span class="tooltip">Home</span>
            </li>
            <li>
                <a href="profiel.php">
                    <i class='bx bx-user'></i>
                    <span class="links_name">Profile</span>
                </a>
                <span class="tooltip">Profile</span>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-bell'></i>
                    <span class="links_name">Notifications</span>
                </a>
                <span class="tooltip">Notifications</span>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-envelope'></i>
                    <span class="links_name">Messages</span>
                </a>
                <span class="tooltip">Messages</span>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-hash'></i>
                    <span class="links_name">Explore</span>
                </a>
                <span class="tooltip">Explore</span>
            </li>
            <li>
                <a href="team.php">
                <i class="fa-solid fa-users-line"></i>
                    <span class="links_name">Over ons</span>
                </a>
                <span class="tooltip">Over ons</span>
            </li>
        </ul>
        <div class="profile_content">
            <div class="profile">
                <div class="profile_details">
                    <img src="https://cdn-icons-png.flaticon.com/512/149/149071.png" alt="">
                    <div class="name">
                        <?php
                        if (isset($_SESSION['username'])) {
                            echo "<div class='name'>Welkom, " . $_SESSION['username'] . "</div>";
                        } else {
                            echo "<div class='name'>Login</div>";
                        }
                        ?>
                    </div>
                </div>
                <?php
                if (isset($_SESSION['username'])) {
                    echo "<a href='logout.php'><i class='bx bx-log-out' id='log_out'></i></a>";
                } else {
                    echo "<a href='login.php'><i class='bx bx-log-in' id='log_in'></i></a>";
                }
                ?>
            </div>
        </div>
    </div>
</nav>