<?php
include '../database/connect.php';
session_start();
//luu secction PHP


//kiem tra dang nhap
function check_login($username, $password)
{
    
    $sql = 'select user_name, password from user_account where user_name = "' . $username . '" and password ="' . $password . '"';
    global $conn;
    $result = $conn->query($sql);
    if ($result->num_rows != 0) {
        while ($row = $result->fetch_assoc()) {
            if ($row["user_name"] == $username && $row["password"] == $password) {
                return true;
            }
        }
    }
    return false;
}


//Kiem tra dang ki
function check_user_name($username)
{
    $sql = 'select user_name from user_account where user_name = "' . $username . '"';
    global $conn;
    $result = $conn->query($sql);
    if ($result->fetch_assoc() > 0) {
        return false;
    }
    return true;
}

//Them nguoi dung
function add_user($username, $password)
{

    if (!check_user_name($username)) {
?>
        <script>
            alert('account already exist');
            window.location.href = "../signup_form.php";
        </script>
    <?php
    } else {
        
        $sql = 'insert into user_account (user_name, password) values ("' . $username . '","' . $password . '")';
        global $conn;
        $conn->query($sql);
    ?>
        <script>
            sessionStorage.setItem('status', '1');
            sessionStorage.setItem('username', '<?php echo $username ?>');
            window.location.href = "../index.php";
        </script>
    <?php
    }
}

//Kiem tra Dang ky hay dang nhap
//chon function cho phu hop

$account = $_POST['account'];

//Dang nhap
if ($account == 'login') {
    $username = $_REQUEST['user_name'];
    $password = $_REQUEST['password'];
    if (!check_login($username, $password)) {
    ?>
        <script>
            alert('incorrect account information');
            window.location.href = "../login_form.php";
        </script>
    <?php
    } else {
    ?>
        <script>
            sessionStorage.setItem('status', '1');
            sessionStorage.setItem('username', '<?php echo $username ?>');
            window.location.href = "../index.php";
        </script>
<?php


    }
    //Dang ki
} else {
    $password = $_REQUEST['password'];
    $username = $_REQUEST['user_name'];
    add_user($username, $password);
}





?>