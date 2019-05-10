<!-- Sidebar Start -->
        <aside class="sidebar" data-trigger="scrollbar">
            <!-- Sidebar Profile Start -->
            <div class="sidebar--profile">
                <div class="profile--img">
    
                        <?
                            if(isset($agencyInfo['logo']) && $agencyInfo['logo'] != ''){
                                echo $this->Html->image($agencyInfo['logo'], ['alt'=>$agencyInfo['agencyname'], 'url'=>'/dashboard']);
                            }
                        ?>

                </div>

                <div class="profile--name">
                    <h3 ><?php echo $userInfo->firstname . " " . $userInfo->lastname; ?></h3>
                </div>

                <div class="profile--nav">
                    <ul class="nav">
                        <li class="nav-item">
                            <?php echo $this->Html->link('<i class="fa fa-user"></i>', ['controller'=>'agents', 'action'=> 'edit'], ['escape'=>false,'class'=>'nav-link', 'title'=>'User Profile']);?>
                        </li>
                        <li class="nav-item">
                            <?php echo $this->Html->link('<i class="fa fa-envelope"></i>', ['controller'=>'agents', 'action'=> 'messages'], ['escape'=>false,'class'=>'nav-link', 'title'=>'Messages']);?>
                        </li>
                        <li class="nav-item">
                            <?php echo $this->Html->link('<i class="fa fa-sign-out-alt"></i>', ['controller'=>'agents', 'action'=> 'logout'], ['escape'=>false,'class'=>'nav-link', 'title'=>'Logout']);?>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Sidebar Profile End -->

            <!-- Sidebar Navigation Start -->
            <div class="sidebar--nav">
                <ul>
                    <li>
                        <ul>
                            <li>
                                <?php echo $this->Html->link('<i class="fa fa-home"></i><span>Dashboard</span>', '/dashboard', ['escape'=>false, 'title'=>'Dashboard']);?>
                            </li>
                            
                        </ul>
                    </li>

                    <li>
                        <a href="#">Contacts</a>

                        <ul>
                            <li class="open">
                                <?php echo $this->Html->link('<i class="fa fa-plus"></i><span>Add A Contact</span>', ['controller'=>'contacts', 'action'=>'add'], ['escape'=>false, 'title'=>'Add A Contact']);?>
                            </li>
                            <li>
                                <?php echo $this->Html->link('<i class="fa fa-th-list"></i><span>Contact List</span>', ['controller'=>'contacts', 'action'=>'index'], ['escape'=>false, 'title'=>'Contact List']);?>
                            </li>
                            
                        </ul>
                    </li>
                    
            <!-- Sidebar Widgets End -->
        </aside>
        <!-- Sidebar End -->