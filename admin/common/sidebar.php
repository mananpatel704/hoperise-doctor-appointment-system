<?php
$role_id=$_SESSION['role_id'];
$role_data=mysqli_query($conn,"select * from hs_role where role_id=$role_id");
$role_row=mysqli_fetch_array($role_data);
$role=$role_row['role_title'];
?>
<nav class="page-sidebar" id="sidebar">
            <div id="sidebar-collapse">
                <div class="admin-block d-flex">
                    <div>
                        <img src="./assets/img/admin-avatar.png" width="45px" />
                    </div>
                    <div class="admin-info">
                        <div class="font-strong">Sapna</div><small>Admin</small></div>
                </div>
                <ul class="side-menu metismenu">
    <li class="<?php echo (basename($_SERVER['PHP_SELF']) == 'index.php') ? 'active' : ''; ?>">
        <a href="index.php"><i class="sidebar-item-icon fa fa-th-large"></i>
            <span class="nav-label">Dashboard</span>
        </a>
    </li>
    
    <?php if ($role == 'admin') { ?>
        <li class="<?php echo (basename($_SERVER['PHP_SELF']) == 'add_role.php' || basename($_SERVER['PHP_SELF']) == 'display_role.php') ? 'active' : ''; ?>">
            <a href="javascript:;"><i class="sidebar-item-icon fa fa-bookmark"></i>
                <span class="nav-label">Role</span><i class="fa fa-angle-left arrow"></i>
            </a>
            <ul class="nav-2-level collapse <?php echo (basename($_SERVER['PHP_SELF']) == 'add_role.php' || basename($_SERVER['PHP_SELF']) == 'display_role.php') ? 'in' : ''; ?>">
                <li class="<?php echo (basename($_SERVER['PHP_SELF']) == 'add_role.php') ? 'active' : ''; ?>">
                    <a href="add_role.php">Add Role</a>
                </li>
                <li class="<?php echo (basename($_SERVER['PHP_SELF']) == 'display_role.php') ? 'active' : ''; ?>">
                    <a href="display_role.php">All Role</a>
                </li>
            </ul>
        </li>
    <?php } ?>
    
    <?php if ($role == 'admin') { ?>
        <li class="<?php echo (basename($_SERVER['PHP_SELF']) == 'add_category.php' || basename($_SERVER['PHP_SELF']) == 'display_category.php') ? 'active' : ''; ?>">
            <a href="javascript:;"><i class="sidebar-item-icon fa fa-bookmark"></i>
                <span class="nav-label">Category</span><i class="fa fa-angle-left arrow"></i>
            </a>
            <ul class="nav-2-level collapse <?php echo (basename($_SERVER['PHP_SELF']) == 'add_category.php' || basename($_SERVER['PHP_SELF']) == 'display_category.php') ? 'in' : ''; ?>">
                <li class="<?php echo (basename($_SERVER['PHP_SELF']) == 'add_category.php') ? 'active' : ''; ?>">
                    <a href="add_category.php">Add Category</a>
                </li>
                <li class="<?php echo (basename($_SERVER['PHP_SELF']) == 'display_category.php') ? 'active' : ''; ?>">
                    <a href="display_category.php">All Category</a>
                </li>
            </ul>
        </li>
    <?php } ?>

    <?php if ($role == 'admin') { ?>
        <li class="<?php echo (basename($_SERVER['PHP_SELF']) == 'add_sub_category.php' || basename($_SERVER['PHP_SELF']) == 'display_sub_category.php') ? 'active' : ''; ?>">
            <a href="javascript:;"><i class="sidebar-item-icon fa fa-bookmark"></i>
                <span class="nav-label">Sub Category</span><i class="fa fa-angle-left arrow"></i>
            </a>
            <ul class="nav-2-level collapse <?php echo (basename($_SERVER['PHP_SELF']) == 'add_sub_category.php' || basename($_SERVER['PHP_SELF']) == 'display_sub_category.php') ? 'in' : ''; ?>">
                <li class="<?php echo (basename($_SERVER['PHP_SELF']) == 'add_sub_category.php') ? 'active' : ''; ?>">
                    <a href="add_sub_category.php">Add Sub Category</a>
                </li>
                <li class="<?php echo (basename($_SERVER['PHP_SELF']) == 'display_sub_category.php') ? 'active' : ''; ?>">
                    <a href="display_sub_category.php">All Sub Category</a>
                </li>
            </ul>
        </li>
    <?php } ?>
    
    <li class="<?php echo (basename($_SERVER['PHP_SELF']) == 'display_appoinment.php') ? 'active' : ''; ?>">
        <a href="javascript:;"><i class="sidebar-item-icon fa fa-bookmark"></i>
            <span class="nav-label">Appointment</span><i class="fa fa-angle-left arrow"></i>
        </a>
        <ul class="nav-2-level collapse <?php echo (basename($_SERVER['PHP_SELF']) == 'display_appoinment.php') ? 'in' : ''; ?>">
            <li class="<?php echo (basename($_SERVER['PHP_SELF']) == 'display_appoinment.php') ? 'active' : ''; ?>">
                <a href="display_appoinment.php">All Appointment</a>
            </li>
        </ul>
    </li>
    
    <?php if ($role == 'admin') { ?>
        <li class="<?php echo (basename($_SERVER['PHP_SELF']) == 'add_service.php' || basename($_SERVER['PHP_SELF']) == 'display_service.php') ? 'active' : ''; ?>">
            <a href="javascript:;"><i class="sidebar-item-icon fa fa-bookmark"></i>
                <span class="nav-label">Service</span><i class="fa fa-angle-left arrow"></i>
            </a>
            <ul class="nav-2-level collapse <?php echo (basename($_SERVER['PHP_SELF']) == 'add_service.php' || basename($_SERVER['PHP_SELF']) == 'display_service.php') ? 'in' : ''; ?>">
                <li class="<?php echo (basename($_SERVER['PHP_SELF']) == 'add_service.php') ? 'active' : ''; ?>">
                    <a href="add_service.php">Add Service</a>
                </li>
                <li class="<?php echo (basename($_SERVER['PHP_SELF']) == 'display_service.php') ? 'active' : ''; ?>">
                    <a href="display_service.php">All Service</a>
                </li>
            </ul>
        </li>
    <?php } ?>

    <?php if ($role == 'admin') { ?>
        <li class="<?php echo (basename($_SERVER['PHP_SELF']) == 'display_contact.php') ? 'active' : ''; ?>">
            <a href="javascript:;"><i class="sidebar-item-icon fa fa-bookmark"></i>
                <span class="nav-label">Contact Details</span><i class="fa fa-angle-left arrow"></i>
            </a>
            <ul class="nav-2-level collapse <?php echo (basename($_SERVER['PHP_SELF']) == 'display_contact.php') ? 'in' : ''; ?>">
                <li class="<?php echo (basename($_SERVER['PHP_SELF']) == 'display_contact.php') ? 'active' : ''; ?>">
                    <a href="display_contact.php">All Contact Details</a>
                </li>
            </ul>
        </li>
    <?php } ?>

    <li class="<?php echo (basename($_SERVER['PHP_SELF']) == 'feedback.php') ? 'active' : ''; ?>">
        <a href="javascript:;"><i class="sidebar-item-icon fa fa-bookmark"></i>
            <span class="nav-label">Feedback</span><i class="fa fa-angle-left arrow"></i>
        </a>
        <ul class="nav-2-level collapse <?php echo (basename($_SERVER['PHP_SELF']) == 'feedback.php') ? 'in' : ''; ?>">
            <li class="<?php echo (basename($_SERVER['PHP_SELF']) == 'feedback.php') ? 'active' : ''; ?>">
                <a href="feedback.php">All Feedback</a>
            </li>
        </ul>
    </li>
</ul>

            </div>
        </nav>