<?php
    session_start();
    require '../functions.php';

    if (!isset($_SESSION["login"])) {
        header("Location: ../login.php");
        exit;
    }

    $sql = "SELECT * FROM contact";
    $all_msg = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="../css/style-admin.css">
</head>
<body>
    <main>
        <nav>
            <div class="profile">
                <img src="<?= $_SESSION['profile']; ?>" alt="admin.png">
                <h1><?= $_SESSION['name']; ?></h1>
            </div>

            <div class="menus-wrapper">
                <a href="index.php" class="menu-flex">
                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M3.99999 10L12 3L20 10L20 20H15V16C15 15.2044 14.6839 14.4413 14.1213 13.8787C13.5587 13.3161 12.7956 13 12 13C11.2043 13 10.4413 13.3161 9.87868 13.8787C9.31607 14.4413 9 15.2043 9 16V20H4L3.99999 10Z" stroke="#333" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                    <h2>Dashboard</h2>
                </a>

                <a href="user.php" class="menu-flex">
                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M10.1992 12C12.9606 12 15.1992 9.76142 15.1992 7C15.1992 4.23858 12.9606 2 10.1992 2C7.43779 2 5.19922 4.23858 5.19922 7C5.19922 9.76142 7.43779 12 10.1992 12Z" stroke="#333" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M1 22C1.57038 20.0332 2.74795 18.2971 4.36438 17.0399C5.98081 15.7827 7.95335 15.0687 10 15C14.12 15 17.63 17.91 19 22" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M17.8205 4.44006C18.5822 4.83059 19.1986 5.45518 19.579 6.22205C19.9594 6.98891 20.0838 7.85753 19.9338 8.70032C19.7838 9.5431 19.3674 10.3155 18.7458 10.9041C18.1243 11.4926 17.3302 11.8662 16.4805 11.97" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M17.3203 14.5701C18.6543 14.91 19.8779 15.5883 20.8729 16.5396C21.868 17.4908 22.6007 18.6827 23.0003 20" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                    <h2>Users</h2>
                </a>

                <a href="galleries.php" class="menu-flex gallery-non">
                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M2 14C2 10.2288 2 8.34315 3.17157 7.17157C4.34315 6 6.22876 6 10 6H14C17.7712 6 19.6569 6 20.8284 7.17157C22 8.34315 22 10.2288 22 14C22 17.7712 22 19.6569 20.8284 20.8284C19.6569 22 17.7712 22 14 22H10C6.22876 22 4.34315 22 3.17157 20.8284C2 19.6569 2 17.7712 2 14Z" stroke="#1C274C" stroke-width="1.5"></path> <path d="M4 7L3.98779 6C4.10022 5.06898 4.33494 4.42559 4.82498 3.93726C5.76553 3 7.27932 3 10.3069 3H13.5181C16.5457 3 18.0595 3 19 3.93726C19.4901 4.42559 19.7248 5.06898 19.8372 6V7" stroke="#1C274C" stroke-width="1.5"></path> <circle cx="17.5" cy="10.5" r="1.5" stroke="#1C274C" stroke-width="1.5"></circle> <path d="M2 14.5001L3.75159 12.9675C4.66286 12.1702 6.03628 12.2159 6.89249 13.0721L11.1822 17.3618C11.8694 18.0491 12.9512 18.1428 13.7464 17.5839L14.0446 17.3744C15.1888 16.5702 16.7369 16.6634 17.7765 17.599L21 20.5001" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"></path> </g></svg>
                    <h2>Galleries</h2>
                </a>
                
                <a href="#" class="menu-flex message">
                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M17.98 10.79V14.79C17.98 15.05 17.97 15.3 17.94 15.54C17.71 18.24 16.12 19.58 13.19 19.58H12.79C12.54 19.58 12.3 19.7 12.15 19.9L10.95 21.5C10.42 22.21 9.56 22.21 9.03 21.5L7.82999 19.9C7.69999 19.73 7.41 19.58 7.19 19.58H6.79001C3.60001 19.58 2 18.79 2 14.79V10.79C2 7.86001 3.35001 6.27001 6.04001 6.04001C6.28001 6.01001 6.53001 6 6.79001 6H13.19C16.38 6 17.98 7.60001 17.98 10.79Z" stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M21.98 6.79001V10.79C21.98 13.73 20.63 15.31 17.94 15.54C17.97 15.3 17.98 15.05 17.98 14.79V10.79C17.98 7.60001 16.38 6 13.19 6H6.79004C6.53004 6 6.28004 6.01001 6.04004 6.04001C6.27004 3.35001 7.86004 2 10.79 2H17.19C20.38 2 21.98 3.60001 21.98 6.79001Z" stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M13.4955 13.25H13.5045" stroke="#292D32" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M9.9955 13.25H10.0045" stroke="#292D32" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M6.4955 13.25H6.5045" stroke="#292D32" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                    <h2>Messages</h2>
                </a>
            </div>

            <a href="logout.php" class="logout">
                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M9.00195 7C9.01406 4.82497 9.11051 3.64706 9.87889 2.87868C10.7576 2 12.1718 2 15.0002 2L16.0002 2C18.8286 2 20.2429 2 21.1215 2.87868C22.0002 3.75736 22.0002 5.17157 22.0002 8L22.0002 16C22.0002 18.8284 22.0002 20.2426 21.1215 21.1213C20.2429 22 18.8286 22 16.0002 22H15.0002C12.1718 22 10.7576 22 9.87889 21.1213C9.11051 20.3529 9.01406 19.175 9.00195 17" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"></path> <path d="M15 12L2 12M2 12L5.5 9M2 12L5.5 15" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                <h2>Logout</h2>
            </a>
        </nav>

        <section class="messages">
            <h1>Dashboard</h1>

            <div class="path">
                <h2>Dashboard</h2>
                <svg width="11" height="16" viewBox="0 0 11 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M3.06145 15.061L10.1215 8L3.06145 0.938995L0.939453 3.061L5.87945 8L0.939453 12.939L3.06145 15.061Z" fill="#333"></path></svg>
                <h3>Messages</h3>
            </div>

            <?php
                $SQL = "SELECT COUNT(*) AS total FROM contact";
                $result = $conn->query($SQL);

                if ($result->num_rows > 0) {
                    $row = $result->fetch_assoc();
            ?>
            <div class="recent-messages">
                <h1>Total Messages &nbsp;<span><?= $row['total']; ?></span></h1>

                <?php
                    }
                    $conn->close();
                ?>

                <?php
                    if ($all_msg && $all_msg->num_rows > 0) {
                ?>
                <div class="table-messages">
                    <div class="box-header">
                        <h2>User</h2>
                        <h3>Email</h3>
                        <h4>Message</h4>
                    </div>
                    <?php
                        while ($row = $all_msg->fetch_assoc()) {
                    ?>
                    <div class="box-message">
                        <h3><?= $row["name"]; ?></h3>
                        <h4><?= $row["email"]; ?></h4>
                        <h5><?= $row["message"]; ?></h5>
                    </div>
                    <?php
                        }
                    ?>
                    <?php
                    } else {
                    ?>
                    <h6 class="no-msg">No Messages</h6>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </section>
    </main>
</body>
</html>