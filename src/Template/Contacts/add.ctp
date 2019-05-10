<?php
        
        $this->Breadcrumbs->add('Dashboard', ['controller' => 'Pages', 'action'=>'display', 'dashboard']);
        $this->Breadcrumbs->add('Contact List', ['controller' => 'Contacts', 'action'=>'index']);
        $this->Breadcrumbs->add('Add A Contact');
?>
<section class="main--content">
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
                            <? echo $this->Form->date('expirationdate', ['minYear'=> 2018, 'class'=>'form-control inline', 'label'=> false, 'dateWidget'=>'{{month}}{{day}}{{year}}']); ?>
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
</section>