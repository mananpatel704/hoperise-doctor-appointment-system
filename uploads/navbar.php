<nav class="navbar navbar-default">
      <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
                        aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                  </button>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav">
                  <li class="<?php if(basename($_SERVER['PHP_SELF']) == 'index.php') echo 'active'; ?>">
                      <a href="index.php">Home</a>
                  </li>
                  <li class="<?php if(basename($_SERVER['PHP_SELF']) == 'about.php') echo 'active'; ?>">
                              <a href="about.php">About</a>
                        </li>
                        <li class="<?php if(basename($_SERVER['PHP_SELF']) == 'service.php') echo 'active'; ?>">
                              <a href="service.php">Service</a>
                        </li>
                        
                        <li class="<?php if(basename($_SERVER['PHP_SELF']) == 'team.php') echo 'active'; ?>">
                              <a href="team.php">Team</a>
                        </li>
                        <li class="<?php if(basename($_SERVER['PHP_SELF']) == 'add_appointment.php') echo 'active'; ?>">
                              <a href="add_appointment.php">Appointment</a>
                        </li>
                        
                        <li class="<?php if(basename($_SERVER['PHP_SELF']) == 'contact.php') echo 'active'; ?>">
                              <a href="contact.php">Contact</a>
                        </li>
                        
                        <?php
                        if(isset($_SESSION['patient_id']))
                        {
                        ?>
                        
                        <li class="<?php if(basename($_SERVER['PHP_SELF']) == 'feedback.php') echo 'active'; ?>">
                              <a href="feedback.php">feedback</a>
                        </li>
                        <li class="<?php if(basename($_SERVER['PHP_SELF']) == 'my_appointment.php') echo 'active'; ?>">
                              <a href="my_appointment.php">My_appointment</a>
                        </li>
                        <li class="<?php if(basename($_SERVER['PHP_SELF']) == 'logout.php') echo 'active'; ?>">
                              <a href="logout.php">Logout</a>
                        </li>
                        <?php
                        }
                        else
                        {
                        ?>
                       <li class="<?php if(basename($_SERVER['PHP_SELF']) == 'patient_reg.php') echo 'active'; ?>">
                              <a href="patient_reg.php">Registration</a>
                        </li>
                        <li class="<?php if(basename($_SERVER['PHP_SELF']) == 'login.php') echo 'active'; ?>">
                              <a href="login.php">Login</a>
                        </li>
                        <?php
                        }
                        ?>
                        <!-- <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown
                                    <span class="caret"></span>
                              </a>
                              <ul class="dropdown-menu">
                                    <li>
                                          <a href="#">Action</a>
                                    </li>
                                    <li>
                                          <a href="#">Another action</a>
                                    </li>
                                    <li>
                                          <a href="#">Something else here</a>
                                    </li>
                                    <li role="separator" class="divider"></li>
                                    <li>
                                          <a href="#">Separated link</a>
                                    </li>
                                    <li role="separator" class="divider"></li>
                                    <li>
                                          <a href="#">One more separated link</a>
                                    </li>
                              </ul>
                        </li> -->
                  </ul>
            </div>
            <!-- /.navbar-collapse -->
      </div>
      <!-- /.container-fluid -->
</nav>