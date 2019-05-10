<section class="main--content">
    <div class="row gutter-20">
        <?
        //only show this panel if they haven't configured their agency account
        if(isset($agencyInfo['agencyname']) && $agencyInfo['agencyname'] == ''){ ?>
        <div class="col-md-6">
            <!-- Panel Start -->
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title">Update Your Agency Info</h3>
                </div>
        
                <div class="panel-content">
                  
                    <?php echo $this->Form->create('Account', ['url'=> array('controller'=>'Accounts', 'action'=>'add')]); ?>
                   
                    <div class="form-group row">
                        <span class="label-text col-lg-3 col-form-label">Agency Name</span>
                        <div class="col-lg-9">
                            <? echo $this->Form->control('agencyname', ['type'=>'text', 'value'=>$agencyInfo['agencyname'], 'placeholder'=> 'Agency Name', 'class'=>'form-control inline', 'label'=> false]); ?>
                           
                        </div>
                    </div>
                    <div class="form-group row">
                        <span class="label-text col-lg-3 col-form-label">Mailing Address</span>
                        <div class="col-lg-9">
                            <? echo $this->Form->control('streetaddress', ['type'=>'text', 'value'=>$agencyInfo['streetaddress'], 'placeholder'=> 'Street Address', 'class'=>'form-control', 'label'=> false]); ?>
                            <? echo $this->Form->control('streetaddress2', ['type'=>'test','value'=>$agencyInfo['streetaddress2'], 'placeholder'=> 'Suite or Unit Number', 'class'=>'form-control', 'label'=> false]); ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-9 offset-3 form-inline">
                            <? echo $this->Form->control('city', ['type'=>'text','value'=>$agencyInfo['city'], 'placeholder'=> 'City', 'class'=>'form-control', 'label'=> false]); ?>
                            <? echo $this->Form->control('state', ['type'=>'text','value'=>$agencyInfo['state'], 'placeholder'=> 'State', 'class'=>'form-control', 'label'=> false]); ?>
                            <? echo $this->Form->control('zipcode', ['type'=>'text','value'=>$agencyInfo['zip'], 'placeholder'=> 'Zip Code', 'class'=>'form-control', 'label'=> false]); ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <span class="label-text col-lg-3 col-form-label">Phone Number</span>
                        <div class="col-lg-9">
                            <? echo $this->Form->control('phone', ['type'=>'phone','value'=>$agencyInfo['phone'], 'placeholder'=> 'Phone Number', 'class'=>'form-control', 'label'=> false]); ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <span class="label-text col-lg-3 col-form-label">License Number</span>
                        <div class="col-lg-9">
                            <? echo $this->Form->control('license', ['type'=>'text','value'=>$agencyInfo['license'], 'placeholder'=> 'License Number', 'class'=>'form-control', 'label'=> false]); ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <span class="label-text col-lg-3 col-form-label">Email</span>
                        <div class="col-lg-9">
                            <? echo $this->Form->control('email', ['type'=>'email','value'=>$agencyInfo['email'], 'placeholder'=> 'Primary Email', 'class'=>'form-control', 'label'=> false]); ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <span class="label-text col-lg-3 col-form-label">Logo</span>
                        <div class="col-lg-9">
                            <?
                            if(isset($account['logo']) && $account['logo'] != ''){
                                echo $this->Html->image($account['logo']);
                            }
                            echo $this->Form->control('logo', ['type'=>'file', 'class'=>'form-control', 'label'=> false]); ?>
                            <span class="form-text text-muted">Please upload your logo.</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 offset-2">
                            <? echo $this->Form->button('Update My Agency Profile', ['type' => 'submit', 'class'=>'btn btn-lg btn-rounded btn-success']);?>                              
                            
                            
                        </div>
                    </div>
           
                    <? echo $this->Form->end(); ?>
                </div>
            </div>
            <!-- Panel End -->
        </div>
        <? } ?>
        <div class="col-md-6">
            <!-- Panel Start -->
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title">Add A Contact</h3>
                </div>
                <div class="panel-content">
                    <?php echo $this->Form->create('Contact', ['url'=> array('controller'=>'Contacts', 'action'=>'add')]); ?>
                   
                    <div class="form-group row">
                        <span class="label-text col-lg-3 col-form-label">Full Name</span>
                        <div class="col-lg-9 form-inline">
                            <? echo $this->Form->control('first_name', ['type'=>'text', 'placeholder'=> 'First Name', 'class'=>'form-control inline', 'label'=> false]); ?>
                            <? echo $this->Form->control('last_name', ['type'=>'text', 'placeholder'=> 'Last Name', 'class'=>'form-control inline', 'label'=> false]); ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <span class="label-text col-lg-3 col-form-label">Email Address</span>
                        <div class="col-lg-9">
                            <? echo $this->Form->control('email', ['type'=>'email', 'placeholder'=> 'Email Address', 'class'=>'form-control inline', 'label'=> false]); ?>
                            
                        </div>
                    </div>
                    <div class="form-group row">
                        <span class="label-text col-lg-3 col-form-label">Phone Number</span>
                        <div class="col-lg-9">
                            <? echo $this->Form->control('phone', ['type'=>'text', 'placeholder'=> 'Phone Number', 'class'=>'form-control inline', 'label'=> false]); ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <span class="label-text col-lg-3 col-form-label">Ex Date</span>
                        <div class="col-lg-9">
                            <? echo $this->Form->date('expirationdate', ['minYear'=> 2018, 'class'=>'form-control inline', 'label'=> false]); ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 offset-4">
                            <? echo $this->Form->button('Save Contact', ['type' => 'submit', 'class'=>'btn btn-lg btn-rounded btn-success']);?>                              
                            
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
