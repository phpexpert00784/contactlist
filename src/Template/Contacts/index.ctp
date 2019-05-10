<?php
        
        $this->Breadcrumbs->add('Dashboard', ['controller' => 'Pages', 'action'=>'display', 'dashboard']);
        $this->Breadcrumbs->add('Contacts');

?>
<section class="main--content">
                <div class="panel">
                    <!-- App Start -->
                    <div class="app_wrapper row">
                        
                        <!-- App Sidebar Start -->
                        <div class="app_sidebar col-lg-3">
                            <!-- Toolbar Start -->
                            <div class="toolbar">
                                <!-- App Search Bar Start -->
                                <form action="#" method="get" class="app_searchBar w-100">
                                    <input type="search" name="contacts" placeholder="Search Contacts..." class="form-control" required="">

                                    <button type="submit" class="btn btn-rounded">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </form>
                                <!-- App Search Bar End -->
                            </div>
                            <!-- Toolbar End -->

                            <!-- User List Start -->
                            <div class="user--list-w ps ps--active-y" data-trigger="scrollbar">
                                <ul class="user--list">
                                    <? foreach($contacts as $contact): ?>
                                    <li>
                                        <a href="#" class="list-link">
                                            <div class="avatar">
                                                <span class="avatar-text bg-blue">J</span>
                                            </div>

                                            <div class="info">
                                                <h4 class="title">
                                                    <span class="title-text"><?= $contact['first_name'] . " " . $contact['last_name']; ?></span>
                                                    <!--<span class="label label-blue">Work</span> -->
                                                </h4>

                                                <p class="subtitle"><?= $contact['email']; ?></p>

                                                <p class="desc">
                                                    <span class="desc-text"><?= $contact['phone']; ?></span>
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <? endforeach; ?>
                                </ul>
                            <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; height: 778px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 750px;"></div></div></div>
                            <!-- User List End -->
                        </div>
                        <!-- App Sidebar End -->
                        
                        <!-- App Content Start -->
                        <div class="app_content col-lg-5">
                            <!-- Toolbar Start -->
                            <div class="toolbar">
                                <a href="#" class="btn btn-sm btn-rounded btn-outline-secondary">Edit</a>
								<a href="#" class="btn btn-sm btn-rounded btn-outline-secondary ml-auto"><i class="fa fa-times mr-1"></i> Delete</a>
							</div>
                            <!-- Toolbar End -->

                            <!-- Contact View Start -->
                            <div class="contact--view">
                                <div class="contact--view__avatar">
                                    <img src="img/avatars/03_150x150.png" alt="">
                                </div>

                                <div class="contact--view__info">
                                    <h3 class="contact--view__name">Jane Doe</h3>

                                    <p class="contact--view__role">Publishing Editor</p>
                                    <p class="contact--view__work">Lorem Company Inc.</p>

                                    <table class="contact--view__extra">
                                        <tbody><tr>
                                            <td>Location</td>
                                            <td>ABC Ave, Suite 14, Lorem Street, Australia.</td>
                                        </tr>
                                        <tr>
                                            <td>Mobile</td>
                                            <td><a href="tel:+123456123456" class="btn-link">+123 456 123456</a></td>
                                        </tr>
                                        <tr>
                                            <td>Home</td>
                                            <td><a href="tel:123456123456" class="btn-link">(123) 456 123456</a></td>
                                        </tr>
                                        <tr>
                                            <td>Work</td>
                                            <td><a href="tel:456123123456" class="btn-link">(456) 123 123456</a></td>
                                        </tr>
                                    </tbody></table>

                                    <div class="contact--view__social">
                                        <ul class="nav">
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                            <li><a href="#"><i class="fab fa-skype"></i></a></li>
                                            <li><a href="javascript:void(0);" id="emailLink"><i class="fa fa-envelope"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- Contact View End -->
							
                        </div>
						
                        <!-- Email Section Start -->
						<div class="app_content col-lg-4" id="contactEmailDiv" style="display:none;">
							<div class="toolbar">
								
							</div>
							<div class="contact--view">
								 <?php echo $this->Form->create($contacts,['url' => ['action' => 'sendemail']]) ?>
								 <?php $this->Form->templates(['inputContainer' => '{{content}}']);?>
								  <div class="form-group">
									<?php echo $this->Form->text('from_email', ['class' => 'form-control','placeholder'=>'From Email','required'=>true,'value'=>$user['email']]);?>
								  </div>
								  <div class="form-group">
									<?php echo $this->Form->text('to_email', ['class' => 'form-control','placeholder'=>'To Email','id'=>'to_email','required'=>true]);?>
								  </div>
								   <div class="form-group">
									<?php echo $this->Form->text('subject', ['class' => 'form-control','placeholder'=>'Subject','required'=>true]);?>
								  </div>
								  <div class="form-group">
									<?php echo $this->Form->textarea('message', ['class' => 'form-control edittextarea ','placeholder'=>'Message']);?>
								  </div>
								  <button type="submit" class="btn btn-success">Send</button>
								<?php echo $this->Form->end() ?>
                            </div>
						</div>
                    </div>
                    <!-- Email Section End -->
                </div>
            </section>
<?php $this->start('script'); ?>
	<?php echo $this->Html->script('custom');?>
	<?php echo $this->Html->script('https://cdnjs.cloudflare.com/ajax/libs/Trumbowyg/2.17.0/trumbowyg.min.js');?>
<?php $this->end(); ?>