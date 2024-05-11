<?php

extract($_REQUEST);
include_once "model/userModel.php";

if (isset($act)) {
    switch ($act) {
        case 'userlist':
            $show_users = getAllUsers();
            include_once "view/admin/admin-header.php";
            include_once "view/admin/userlist.php";
            include_once "view/admin/admin-footer.php";
            break;
        case 'adduser':
            if (isset($_POST['add_user'])) {

                $user_username = $_POST['user_name'];
                $user_mobile = $_POST['user_mobile'];
                $user_email = $_POST['user_email'];
                $user_role = $_POST['user_role'];
                $user_password = $_POST['user_password'];
                $user_status = $_POST['user_status'];
                $user_image = $_FILES['user_image']['name'];
                $user_image_temp = $_FILES['user_image']['tmp_name'];


                move_uploaded_file($user_image_temp, "images/$user_image");
                createUser($user_name, $user_email, $user_password, $user_mobile, $user_image, $user_role, $user_status);

                header("Location: ?mod=user&act=adduser");
            }
            if (isset($_POST['cancel'])) {

                header("Location: ?mod=user&act=userlist");
            }
            include_once "view/admin/admin-header.php";
            include_once "view/admin/adduser.php";
            include_once "view/admin/admin-footer.php";
            break;
        case 'deleteuser':
            if (isset($_GET['user_id'])) {
                $user_id = $_GET['user_id'];
                deleteUser($user_id);

                header("Location: ?mod=user&act=userlist");
            }
            break;
        case 'updateuser':
            if (isset($_GET['user_id'])) {
                $user_id = $_GET['user_id'];
                $show_user = getUserById($user_id);
                if (isset($_POST['update_user'])) {
                    $user_username = $_POST['user_name'];
                    $user_mobile = $_POST['user_mobile'];
                    $user_email = $_POST['user_email'];
                    $user_role = $_POST['user_role'];
                    $user_password = $_POST['user_password'];
                    $user_status = $_POST['user_status'];
                    $user_image = $_FILES['user_image']['name'];
                    $user_image_temp = $_FILES['user_image']['tmp_name'];

                    if (empty($user_image)) {
                        $user_image = $show_user['HinhAnh'];
                    }

                    move_uploaded_file($user_image_temp, "images/$user_image");
                    updateUser($user_id, $user_name, $user_email, $user_password, $user_mobile, $user_image, $user_role, $user_status);
                    header("Location: ?mod=user&act=updateuser&user_id=$user_id");
                }
                if (isset($_POST['cancel'])) {

                    header("Location: ?mod=user&act=userlist");
                }
            }
            include_once "view/admin/admin-header.php";
            include_once "view/admin/updateuser.php";
            include_once "view/admin/admin-footer.php";
            break;
        case 'profile':
            if(empty($_SESSION['id'])) {
                $show_user = getUserById(3);
                $_SESSION['id'] = 3;

            } else {
                $show_user = getUserById($_SESSION['id']);
            }
            if (isset($_POST['profile_user'])) {
                $user_fname = $_POST['user_fname'];
                $user_lname = $_POST['user_lname'];
                $user_email = $_POST['user_email'];
                $user_phone = $_POST['user_phone'];
                $username = $_POST['username'];
                $user_password = $_POST['user_password'];
                updateUserProfileAdmin($_SESSION['id'], $user_fname, $user_lname, $user_email, $user_phone, $username, $user_password);
                header("Location: ?mod=user&act=profile");
            }

            if (isset($_POST['cancel'])) {

                header("Location: ?mod=admin&act=component");
            }

            include_once "view/admin/admin-header.php";
            include_once "view/admin/profile.php";
            include_once "view/admin/admin-footer.php";
            break;
    }
}
