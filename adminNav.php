
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
                <a href="adminDashboard.php">
                    <i class='bx bxs-home'></i>
                    <span class="links_name">Dashboard</span>
                </a>
                <span class="tooltip">Dashboard</span>
            </li>
            <li>
                <a href="adminUsers.php">
                    <i class='bx bx-user'></i>
                    <span class="links_name">Users</span>
                </a>
                <span class="tooltip">Users</span>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-bell'></i>
                    <span class="links_name">Posts</span>
                </a>
                <span class="tooltip">Posts</span>
        </ul>
        <div class="profile_content">
            <div class="profile">
                <div class="profile_details">
                <img src="https://cdn-icons-png.flaticon.com/512/149/149071.png" alt="">   

                <?php
                if(isset($_SESSION['username'])) {
                    echo "<div class='name'>" . $_SESSION['username'] . "</div>";
                } else {
                    echo "<div class='name'>Login</div>";
                }
                ?>
                
                </div>

                <?php
                    if(isset($_SESSION['username'])) {
                        echo "<a href='login.php'><i class='bx bx-log-out' id='log_out'></i></a>";
                    } else {
                        echo "<a href='login.php'><i class='bx bx-log-in' id='log_in'></i></a>";                
                    }
                ?>
                
            </div>            
        </div>
    </div>
</nav>

