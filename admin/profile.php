<!DOCTYPE html>
<html lang="en">

<?php
    include('common/css.php');
 
?>
<body class="fixed-navbar sidebar-mini">
    <div class="page-wrapper">
        <!-- START HEADER-->
        <?php
            include('common/header.php');
        ?>
        <!-- END HEADER-->
        <!-- START SIDEBAR-->
        <?php
            include('common/sidebar.php');
            if($role=='admin')
            {
                $profile_data=mysqli_query($conn,"select * from hs_admin where admin_id=$_SESSION[admin_id]");
                $profile_row=mysqli_fetch_array($profile_data);
            }
            else
            {
                $profile_data=mysqli_query($conn,"select * from hs_doctor where doctor_id=$_SESSION[admin_id]");
                $profile_row=mysqli_fetch_array($profile_data);
            }
        ?>
        <!-- END SIDEBAR-->
        <div class="content-wrapper">
            <!-- START PAGE CONTENT-->
            <div class="page-heading">
                <h1 class="page-title">Profile</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="index.html"><i class="la la-home font-20"></i></a>
                    </li>
                    <li class="breadcrumb-item">Profile</li>
                </ol>
            </div>
            <div class="page-content fade-in-up">
                <div class="row">
                    <div class="col-lg-3 col-md-4">
                        <div class="ibox">
                            <div class="ibox-body text-center">
                                <div class="m-t-20">
                                    <img class="img-circle" src="./assets/img/users/u3.jpg" />
                                </div>
                                <h5 class="font-strong m-b-10 m-t-10"><?php echo $_SESSION['admin_username']; ?></h5>
                                <div class="m-b-20 text-muted"><?php echo $role; ?></div> 
                            </div>
                        </div>
                        <?php 
                        if ($role == 'doctor') 
                            { 
                             ?>
                    <div class="ibox">
                        <div class="ibox-body">
                            <div class="row text-center m-b-20">
                                <div class="col-4">
                                    <div class="text-muted">Short Bio</div>
                                </div>
                            </div>
                            <p class="text-center">Positive Feedback: "Dr. was excellent at explaining my condition in simple terms, which helped me understand my treatment options better."<br> 
                            Constructive Feedback: "I found it a bit challenging to reach out to Dr.with questions between appointments. It would be helpful if there were more accessible communication channels or a nurse hotline."</p>
                        </div>
                    </div>
                <?php
                 }
                 ?>

                <?php 
                    if ($role == 'doctor') 
                    { 
                             ?>
                    <div class="ibox">
                        <div class="ibox-body">
                            <div class="row text-center m-b-20">
                                <div class="col-4">
                                    <div class="text-muted">Services & price list</div>
                                </div>
                            </div>
                            <ul class="list-group list-group-full list-group-divider">
                           <li> <div class="media-heading">recommended vaccines <small class="float-right text-muted">$44</small></div></li>
                            <li><div class="media-heading">knee Arthritis <small class="float-right text-muted">$55</small></div></li>
                            <li><div class="media-heading">general checkup <small class="float-right text-muted">$40</small></div></li>
                </ul>
                        </div>
                    </div>
                <?php 
                    }
                   ?>

                
            </div>
                   <div class="col-lg-9 col-md-8">
                        <div class="ibox">
                            <div class="ibox-body">
                                <ul class="nav nav-tabs tabs-line">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#tab-1" data-toggle="tab"><i class="ti-bar-chart"></i> Overview</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#tab-2" data-toggle="tab"><i class="ti-settings"></i> Settings</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#tab-3" data-toggle="tab"><i class="ti-announcement"></i> Feeds</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="tab-1">
                                        <div class="row">
                                            <div class="col-md-6" style="border-right: 1px solid #eee;">
                                                <h5 class="text-info m-b-20 m-t-10"><i class="fa fa-bar-chart"></i> about the doctor</h5>
                                                
                                                <div class="m-t-20 m-b-20">
                                                    <div class="h4 m-0">5 years experince</div>
                                                    <div class="d-flex justify-content-between"><small><p>At oral surgery mg USA and oral surgery clinics New York</p></small>
                                                        
                                                    </div>
                                                    
                                                </div>
                                                <div class="m-b-20">
                                                    <div class="h4 m-0">85% Recommend</div>
                                                    <div class="d-flex justify-content-between"><small><p>200 patients world recommend this doctor to their friends and family</p></small>
                                                       
                                                    </div>
                                                    
                                                </div>
                                                <div class="m-b-20">
                                                    <div class="h4 m-0">Online consultations</div>
                                                    <div class="d-flex justify-content-between"><small><p>The consultation is possible on site and online</p></small>
                                                       
                                                    </div>
                                                    
                                                </div>
                                                
                                            </div>
                    
                                            <div class="col-md-6">
                                                <h5 class="text-info m-b-20 m-t-10"><i class="fa fa-user-plus"></i> Latest Followers</h5>
                                                <ul class="media-list media-list-divider m-0">
                                                    <li class="media">
                                                        <a class="media-img" href="javascript:;">
                                                            <img class="img-circle" src="./assets/img/users/u1.jpg" width="40" />
                                                        </a>
                                                        <div class="media-body">
                                                            <div class="media-heading">Jeanne Gonzalez <small class="float-right text-muted">12:05</small></div>
                                                            <div class="font-13">Lorem Ipsum is simply dummy text of the printing and typesetting.</div>
                                                        </div>
                                                    </li>
                                                    <li class="media">
                                                        <a class="media-img" href="javascript:;">
                                                            <img class="img-circle" src="./assets/img/users/u2.jpg" width="40" />
                                                        </a>
                                                        <div class="media-body">
                                                            <div class="media-heading">Becky Brooks <small class="float-right text-muted">1 hrs ago</small></div>
                                                            <div class="font-13">Lorem Ipsum is simply dummy text of the printing and typesetting.</div>
                                                        </div>
                                                    </li>
                                                    <li class="media">
                                                        <a class="media-img" href="javascript:;">
                                                            <img class="img-circle" src="./assets/img/users/u3.jpg" width="40" />
                                                        </a>
                                                        <div class="media-body">
                                                            <div class="media-heading">Frank Cruz <small class="float-right text-muted">3 hrs ago</small></div>
                                                            <div class="font-13">Lorem Ipsum is simply dummy.</div>
                                                        </div>
                                                    </li>
                                                    <li class="media">
                                                        <a class="media-img" href="javascript:;">
                                                            <img class="img-circle" src="./assets/img/users/u6.jpg" width="40" />
                                                        </a>
                                                        <div class="media-body">
                                                            <div class="media-heading">Connor Perez <small class="float-right text-muted">Today</small></div>
                                                            <div class="font-13">Lorem Ipsum is simply dummy text of the printing and typesetting.</div>
                                                        </div>
                                                    </li>
                                                    <li class="media">
                                                        <a class="media-img" href="javascript:;">
                                                            <img class="img-circle" src="./assets/img/users/u5.jpg" width="40" />
                                                        </a>
                                                        <div class="media-body">
                                                            <div class="media-heading">Bob Gonzalez <small class="float-right text-muted">Today</small></div>
                                                            <div class="font-13">Lorem Ipsum is simply dummy.</div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <h4 class="text-info m-b-20 m-t-20"><i class="fa fa-shopping-basket"></i>Appoinment List</h4>
                                        <table class="table table-striped table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Patient ID</th>
                                                    <th>Age</th>
                                                    <th>Decese</th>
                                                    <th>Status</th>
                                                    <th width="91px">Date</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>11</td>
                                                    <td>@Jack</td>
                                                    <td>$564.00</td>
                                                    <td>
                                                        <span class="badge badge-success">Shipped</span>
                                                    </td>
                                                    <td>10/07/2017</td>
                                                </tr>
                                                <tr>
                                                    <td>12</td>
                                                    <td>@Amalia</td>
                                                    <td>$220.60</td>
                                                    <td>
                                                        <span class="badge badge-success">Shipped</span>
                                                    </td>
                                                    <td>10/07/2017</td>
                                                </tr>
                                                <tr>
                                                    <td>13</td>
                                                    <td>@Emma</td>
                                                    <td>$760.00</td>
                                                    <td>
                                                        <span class="badge badge-default">Pending</span>
                                                    </td>
                                                    <td>10/07/2017</td>
                                                </tr>
                                                <tr>
                                                    <td>14</td>
                                                    <td>@James</td>
                                                    <td>$87.60</td>
                                                    <td>
                                                        <span class="badge badge-warning">Expired</span>
                                                    </td>
                                                    <td>10/07/2017</td>
                                                </tr>
                                                <tr>
                                                    <td>15</td>
                                                    <td>@Ava</td>
                                                    <td>$430.50</td>
                                                    <td>
                                                        <span class="badge badge-default">Pending</span>
                                                    </td>
                                                    <td>10/07/2017</td>
                                                </tr>
                                                <tr>
                                                    <td>16</td>
                                                    <td>@Noah</td>
                                                    <td>$64.00</td>
                                                    <td>
                                                        <span class="badge badge-success">Shipped</span>
                                                    </td>
                                                    <td>10/07/2017</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="tab-pane fade" id="tab-2">
                                        <form action="javascript:void(0)">
                                            <div class="row">
                                                <div class="col-sm-6 form-group">
                                                    <label>First Name</label>
                                                    <input class="form-control" type="text" placeholder="First Name">
                                                </div>
                                                <div class="col-sm-6 form-group">
                                                    <label>Last Name</label>
                                                    <input class="form-control" type="text" placeholder="First Name">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input class="form-control" type="text" placeholder="Email address">
                                            </div>
                                            <div class="form-group">
                                                <label>Password</label>
                                                <input class="form-control" type="password" placeholder="Password">
                                            </div>
                                            <div class="form-group">
                                                <label class="ui-checkbox">
                                                    <input type="checkbox">
                                                    <span class="input-span"></span>Remamber me</label>
                                            </div>
                                            <div class="form-group">
                                                <button class="btn btn-default" type="button">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="tab-pane fade" id="tab-3">
                                        <h5 class="text-info m-b-20 m-t-20"><i class="fa fa-bullhorn"></i> Latest Feeds</h5>
                                        <ul class="media-list media-list-divider m-0">
                                            <li class="media">
                                                <div class="media-img"><i class="ti-user font-18 text-muted"></i></div>
                                                <div class="media-body">
                                                    <div class="media-heading">New customer <small class="float-right text-muted">12:05</small></div>
                                                    <div class="font-13">Lorem Ipsum is simply dummy text.</div>
                                                </div>
                                            </li>
                                            <li class="media">
                                                <div class="media-img"><i class="ti-info-alt font-18 text-muted"></i></div>
                                                <div class="media-body">
                                                    <div class="media-heading text-warning">Server Warning <small class="float-right text-muted">12:05</small></div>
                                                    <div class="font-13">Lorem Ipsum is simply dummy text.</div>
                                                </div>
                                            </li>
                                            <li class="media">
                                                <div class="media-img"><i class="ti-announcement font-18 text-muted"></i></div>
                                                <div class="media-body">
                                                    <div class="media-heading">7 new feedback <small class="float-right text-muted">Today</small></div>
                                                    <div class="font-13">Lorem Ipsum is simply dummy text.</div>
                                                </div>
                                            </li>
                                            <li class="media">
                                                <div class="media-img"><i class="ti-check font-18 text-muted"></i></div>
                                                <div class="media-body">
                                                    <div class="media-heading text-success">Issue fixed <small class="float-right text-muted">12:05</small></div>
                                                    <div class="font-13">Lorem Ipsum is simply dummy text.</div>
                                                </div>
                                            </li>
                                            <li class="media">
                                                <div class="media-img"><i class="ti-shopping-cart font-18 text-muted"></i></div>
                                                <div class="media-body">
                                                    <div class="media-heading">7 New orders <small class="float-right text-muted">12:05</small></div>
                                                    <div class="font-13">Lorem Ipsum is simply dummy text.</div>
                                                </div>
                                            </li>
                                            <li class="media">
                                                <div class="media-img"><i class="ti-reload font-18 text-muted"></i></div>
                                                <div class="media-body">
                                                    <div class="media-heading text-danger">Server warning <small class="float-right text-muted">12:05</small></div>
                                                    <div class="font-13">Lorem Ipsum is simply dummy text.</div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <style>
                    .profile-social a {
                        font-size: 16px;
                        margin: 0 10px;
                        color: #999;
                    }

                    .profile-social a:hover {
                        color: #485b6f;
                    }

                    .profile-stat-count {
                        font-size: 22px
                    }
                </style>
                
            </div>
            <!-- END PAGE CONTENT-->
            <?php
    include('common/footer.php');
   ?>
        </div>
    </div>
    <!-- BEGIN THEME CONFIG PANEL-->
    <?php
        include('common/configue_panel.php');
    ?>
    <!-- END THEME CONFIG PANEL-->
    <!-- BEGIN PAGA BACKDROPS-->
    <?php
    include('common/preloader.php');
   ?>
    <!-- END PAGA BACKDROPS-->
    <!-- CORE PLUGINS-->
    <?php
    include('common/main_footer.php');
   ?>