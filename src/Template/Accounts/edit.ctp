<?php
        
        $this->Breadcrumbs->add('Dashboard', ['controller' => 'Pages', 'action'=>'display', 'dashboard']);
        $this->Breadcrumbs->add('Edit Agency Profile');
?>
            <section class="main--content">
                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title">Fill Out The Form Below To Update Your Agency Profile</h3>                        
                    </div>

                    <div class="panel-content">
                        <p>Your agency profile information is used by InsureTech to personalize your marketing. Make sure it's always up to date.</p>
                        <?php
                            echo $this->Form->create($account, ['enctype'=>'multipart/form-data']);?>
                            <div class="form-group row">
                                <span class="label-text col-lg-2 col-form-label">Agency Name</span>
                                <div class="col-lg-4">
                                    <? echo $this->Form->control('agencyname', ['type'=>'text', 'placeholder'=> 'Agency Name', 'class'=>'form-control inline', 'label'=> false]); ?>
                                   
                                </div>
                            </div>
                            <div class="form-group row">
                                <span class="label-text col-lg-2 col-form-label">Mailing Address</span>
                                <div class="col-lg-4">
                                    <? echo $this->Form->control('streetaddress', ['type'=>'text', 'placeholder'=> 'Street Address', 'class'=>'form-control', 'label'=> false]); ?>
                                    <? echo $this->Form->control('streetaddress2', ['type'=>'test', 'placeholder'=> 'Suite or Unit Number', 'class'=>'form-control', 'label'=> false]); ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-4 offset-2 form-inline">
                                    <? echo $this->Form->control('city', ['type'=>'text', 'placeholder'=> 'City', 'class'=>'form-control', 'label'=> false]); ?>
                                    <? echo $this->Form->control('state', ['type'=>'text', 'placeholder'=> 'State', 'class'=>'form-control', 'label'=> false]); ?>
                                    <? echo $this->Form->control('zipcode', ['type'=>'text', 'placeholder'=> 'Zip Code', 'class'=>'form-control', 'label'=> false]); ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <span class="label-text col-lg-2 col-form-label">Phone Number</span>
                                <div class="col-lg-4">
                                    <? echo $this->Form->control('phone', ['type'=>'phone', 'placeholder'=> 'Phone Number', 'class'=>'form-control', 'label'=> false]); ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <span class="label-text col-lg-2 col-form-label">License Number</span>
                                <div class="col-lg-4">
                                    <? echo $this->Form->control('license', ['type'=>'text', 'placeholder'=> 'License Number', 'class'=>'form-control', 'label'=> false]); ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <span class="label-text col-lg-2 col-form-label">Email</span>
                                <div class="col-lg-4">
                                    <? echo $this->Form->control('email', ['type'=>'email', 'placeholder'=> 'Primary Email', 'class'=>'form-control', 'label'=> false]); ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <span class="label-text col-lg-2 col-form-label">Logo</span>
                                <div class="col-lg-4">
                                    <?
                                    if(isset($account['logo']) && $account['logo'] != ''){
                                        echo $this->Html->image($account['logo']);
                                    }
                                    echo $this->Form->control('logo', ['type'=>'file', 'class'=>'form-control', 'label'=> false]); ?>
                                    <span class="form-text text-muted">Please upload your logo.</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 offset-1">
                                    <? echo $this->Form->button('Update My Agency Profile', ['type' => 'submit', 'class'=>'btn btn-lg btn-rounded btn-success']);?>                              
                                    
                                    
                                </div>
                            </div>
                   
                            <? echo $this->Form->end(); ?>
                    </div>
                </div>
            </section>
            <!-- Main Content End -->
            
          