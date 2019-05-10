<?php
        
        $this->Breadcrumbs->add('Dashboard', ['controller' => 'Pages', 'action'=>'display', 'dashboard']);
        $this->Breadcrumbs->add('Agency Users', ['controller' => 'accounts', 'action'=>'agents']);
        $this->Breadcrumbs->add('Agent Profile');
?>
            <section class="main--content">
                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title">Fill Out The Form Below To Update Your Profile</h3>                        
                    </div>

                    <div class="panel-content">
                        <p>Your profile information is used by InsureTech to personalize your marketing. Make sure it's always up to date.</p>
                        <?php
                            echo $this->Form->create($agent, ['enctype'=>'multipart/form-data']);?>
                            <div class="form-group row">
                                <span class="label-text col-lg-2 col-form-label">Full Name</span>
                                <div class="col-lg-4 form-inline">
                                    <? echo $this->Form->control('firstname', ['type'=>'text', 'placeholder'=> 'First Name', 'class'=>'form-control inline', 'label'=> false]); ?>
                                    <? echo $this->Form->control('lastname', ['type'=>'text', 'placeholder'=> 'Last Name', 'class'=>'form-control inline', 'label'=> false]); ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <span class="label-text col-lg-2 col-form-label">Email Address</span>
                                <div class="col-lg-4">
                                    <? echo $this->Form->control('email', ['type'=>'email', 'placeholder'=> 'Email Address', 'class'=>'form-control', 'label'=> false]); ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <span class="label-text col-lg-2 col-form-label">Phone Number</span>
                                <div class="col-lg-4">
                                    <? echo $this->Form->control('phone', ['type'=>'phone', 'placeholder'=> 'Phone Number', 'class'=>'form-control', 'label'=> false]); ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <span class="label-text col-lg-2 col-form-label">Title</span>
                                <div class="col-lg-4">
                                    <? echo $this->Form->control('title', ['type'=>'text', 'placeholder'=> 'Title', 'class'=>'form-control', 'label'=> false]); ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <span class="label-text col-lg-2 col-form-label">License Number</span>
                                <div class="col-lg-4">
                                    <? echo $this->Form->control('license', ['type'=>'text', 'placeholder'=> 'License Number', 'class'=>'form-control', 'label'=> false]); ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <span class="label-text col-lg-2 col-form-label">Facebook Link</span>
                                <div class="col-lg-4">
                                    <? echo $this->Form->control('facebook', ['type'=>'text', 'placeholder'=> 'Facebook Link', 'class'=>'form-control', 'label'=> false]); ?>
                                    <span class="form-text text-muted">Copy/Paste the website address for your Facebook profile.</span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <span class="label-text col-lg-2 col-form-label">Twitter Account</span>
                                <div class="col-lg-4">
                                    <? echo $this->Form->control('twitter', ['type'=>'text', 'placeholder'=> 'Twitter Account Name', 'class'=>'form-control', 'label'=> false]); ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <span class="label-text col-lg-2 col-form-label">LinkedIn Profile</span>
                                <div class="col-lg-4">
                                    <? echo $this->Form->control('linkedin', ['type'=>'text', 'placeholder'=> 'LinkedIn Profile', 'class'=>'form-control', 'label'=> false]); ?>
                                    <span class="form-text text-muted">Copy/Paste the website address for your LinkedIn profile.</span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <span class="label-text col-lg-2 col-form-label">Headshot</span>
                                <div class="col-lg-4">
                                    <?
                                    if(isset($agent['headshot'])){
                                        echo $this->Html->image($agent['headshot']);
                                    }
                                    echo $this->Form->control('headshot', ['type'=>'file', 'class'=>'form-control', 'label'=> false]); ?>
                                    
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 offset-lg-1">
                                    <? echo $this->Form->button('Update My Agent Profile', ['type' => 'submit', 'class'=>'btn btn-lg btn-rounded btn-success']);?>                              
                                    
                                    
                                </div>
                            </div>
                         
                            <? echo $this->Form->end(); ?>
                    </div>
                </div>
            </section>
            <!-- Main Content End -->
            
          