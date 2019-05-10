<!DOCTYPE html>
<html dir="ltr" lang="en" class="no-outlines">
<head>
    
   <?= $this->element('head') ?>

</head>
<body>

    <!-- Wrapper Start -->
    <div class="wrapper">
        <!-- Navbar Start -->
        <header class="navbar navbar-fixed">
            <!-- Navbar Header Start -->
            <div class="navbar--header">
                <!-- Logo Start -->
                <?php echo $this->Html->link('<h2>MyInsureTech</h2>', '/dashboard', ['class'=>'logo', 'escape'=>false,'title'=>'InsureTech']);?>

                <!-- Logo End -->

                <!-- Sidebar Toggle Button Start -->
                <a href="#" class="navbar--btn" data-toggle="sidebar" title="Toggle Sidebar">
                    <i class="fa fa-bars"></i>
                </a>
                <!-- Sidebar Toggle Button End -->
            </div>
            <!-- Navbar Header End -->

            <!-- Sidebar Toggle Button Start -->
            <a href="#" class="navbar--btn" data-toggle="sidebar" title="Toggle Sidebar">
                <i class="fa fa-bars"></i>
            </a>
            <!-- Sidebar Toggle Button End -->

            <!-- Navbar Search Start -->
            <div class="navbar--search">
                <form action="search-results.html">
                    <input type="search" name="search" class="form-control" placeholder="Find A Contact" required>
                    <button class="btn-link"><i class="fa fa-search"></i></button>
                </form>
            </div>
            <!-- Navbar Search End -->
           
            <div class="navbar--message">
                <?= $this->Flash->render(); ?>
            </div>
          
            

            <div class="navbar--nav ml-auto">
                <ul class="nav">
                    <!--<li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="fa fa-bell"></i>
                            <span class="badge text-white bg-blue">7</span>
                        </a>
                    </li>-->

                    <!-- Nav User Start -->
                    <li class="nav-item dropdown nav--user online">
                        <a href="#" class="nav-link" data-toggle="dropdown">
                            <img src="<?= $userInfo->headshot ?>" alt="" class="rounded-circle">
                            <span><?php echo $userInfo->firstname . " " . $userInfo->lastname; ?></span>
                            <i class="fa fa-angle-down"></i>
                        </a>

                        <ul class="dropdown-menu">
                            <li><?php echo $this->Html->link('<i class="far fa-user"></i>Edit Profile', ['controller'=>'agents', 'action'=> 'edit'], ['escape'=>false,'title'=>'Edit Profile']);?></li>
                            <li><?php echo $this->Html->link('<i class="far fa-user"></i>Edit Agency', ['controller'=>'accounts', 'action'=> 'edit'], ['escape'=>false,'title'=>'Edit Agency']);?></li>
                            <li><?php echo $this->Html->link('<i class="far fa-envelope"></i>Inbox', ['controller'=>'agents', 'action'=> 'inbox'], ['escape'=>false,'title'=>'Inbox']);?></li>
                            <li class="dropdown-divider"></li>
                            <li><?php echo $this->Html->link('<i class="fa fa-power-off"></i>Logout', ['controller'=>'agents', 'action'=> 'logout'], ['escape'=>false,'title'=>'Logout']);?></li>
                        </ul>
                    </li>
                    <!-- Nav User End -->
                </ul>
            </div>
        </header>
        <!-- Navbar End -->

        <?= $this->element('sidebar'); ?>

        <!-- Main Container Start -->
        <main class="main--container">
            
            <? echo $this->element('pageheader'); ?>
            
            <?= $this->fetch('content') ?>
            

            <!-- Main Footer Start -->
            <footer class="main--footer main--footer-light">
                <p>Copyright &copy; <a href="#">InsureTech</a>. All Rights Reserved.</p>
            </footer>
            <!-- Main Footer End -->
        </main>
        <!-- Main Container End -->
    </div>
    <!-- Wrapper End -->
    
    <?php echo $this->element('footer') ?>
	<?php echo $this->fetch('script') ?>
    
</body>
</html>
