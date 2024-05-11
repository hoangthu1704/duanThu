<?php

extract($_REQUEST);
include_once "model/blogModel.php";
if (isset($act)) {
    switch ($act) {
        case 'bloglist':
            $show_blogs = getAllBlogs();
            include_once "view/admin/admin-header.php";
            include_once "view/admin/bloglist.php";
            include_once "view/admin/admin-footer.php";
            break;
        case 'addblog':
            if (isset($_POST['add_blog'])) {

                $blog_title = $_POST['blog_title'];
                $blog_content = $_POST['blog_content'];
                $blog_image = $_FILES['blog_image']['name'];
                $blog_image_temp = $_FILES['blog_image']['tmp_name'];


                move_uploaded_file($blog_image_temp, "images/$blog_image");
                createBlog($blog_title, $blog_content, $blog_image);

                header("Location: ?mod=blog&act=addblog");
            }
            if (isset($_POST['cancel'])) {

                header("Location: ?mod=blog&act=bloglist");
            }
            include_once "view/admin/admin-header.php";
            include_once "view/admin/addblog.php";
            include_once "view/admin/admin-footer.php";
            break;
        case 'deleteblog':
            if (isset($_GET['blog_id'])) {
                $blog_id = $_GET['blog_id'];
                deleteBlog($blog_id);

                header("Location: ?mod=blog&act=bloglist");
            }
            break;
        case 'updateblog':
            if (isset($_GET['blog_id'])) {
                $blog_id = $_GET['blog_id'];
                $show_blog = getBlogById($blog_id);
                if (isset($_POST['update_blog'])) {
                    $blog_title = $_POST['blog_title'];
                    $blog_content = $_POST['blog_content'];
                    $blog_image = $_FILES['blog_image']['name'];
                    $blog_image_temp = $_FILES['blog_image']['tmp_name'];

                    if (empty($blog_image)) {
                        $blog_image = $show_blog['BlogImage'];
                    }

                    move_uploaded_file($blog_image_temp, "images/$blog_image");
                    updateBlog($blog_id, $blog_title, $blog_content, $blog_image);
                    header("Location: ?mod=blog&act=updateblog&blog_id=$blog_id");
                }
                if (isset($_POST['cancel'])) {

                    header("Location: ?mod=blog&act=bloglist");
                }
            }
            include_once "view/admin/admin-header.php";
            include_once "view/admin/updateblog.php";
            include_once "view/admin/admin-footer.php";
            break;
    }
}
