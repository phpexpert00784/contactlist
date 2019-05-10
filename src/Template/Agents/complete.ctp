<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Http\Exception\NotFoundException;

$this->layout = false;

$cakeDescription = 'CakePHP: the rapid development PHP framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        InsureTech
    </title>

    <!-- Stylesheets -->
    <?php
        echo $this->Html->css('bootstrap.min');
        echo $this->Html->css('fontawesome-all.min');
        echo $this->Html->css('jquery-ui.min');
        echo $this->Html->css('perfect-scrollbar.min');        
        echo $this->Html->css('morris.min');
        echo $this->Html->css('select2.min');
        echo $this->Html->css('jquery-jvectormap.min');
        echo $this->Html->css('horizontal-timeline.min');
        echo $this->Html->css('weather-icons.min');
        echo $this->Html->css('dropzone.min');
        echo $this->Html->css('ion.rangeSlider.min');
        echo $this->Html->css('ion.rangeSlider.skinFlat.min');
        echo $this->Html->css('datatables.min');
        echo $this->Html->css('fullcalendar.min');
        echo $this->Html->css('style');
        
    ?>

    <!-- Page Level Stylesheets -->
    
    <link href="https://fonts.googleapis.com/css?family=Raleway:500i|Roboto:300,400,700|Roboto+Mono" rel="stylesheet">
</head>
<body class="home">

<body>

    <!-- Wrapper Start -->
    <div class="wrapper">
        <!-- Register Page Start -->
        <div class="m-account-w" data-bg-img="/img/account/wrapper-bg.jpg">
            <div class="m-account">
                <div class="row no-gutters flex-row-reverse">
                    <div class="col-md-6">
                        <!-- Register Content Start -->
                        <div class="m-account--content-w" >
                            <div class="m-account--content">
                                
                            </div>
                        </div>
                        <!-- Register Content End -->
                    </div>

                    <div class="col-md-6">
                        <!-- Register Form Start -->
                        <div class="m-account--form-w">
                            <div class="m-account--form">
                                <!-- Logo Start -->
                                <div class="logo">
                                    <?php echo $this->Html->image('logo.png', ['alt' => 'InsureTech']); ?>
                                </div>
                                <!-- Logo End -->

                                <?php echo $this->Form->create('Agent', ['enctype'=>'multipart/form-data','url'=> array('controller'=>'Agents', 'action'=>'complete', $agent->id)]);
                                $this->Form->templates([
                                         'inputContainer' => '{{content}}'
                                            ]);?>
                                    <label class="m-account--title">Finish Setting Up Your Account</label>

                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <i class="fas fa-user"></i>
                                            </div>
                                            <?php echo $this->Form->control('firstname',
                                                                          ['required' => true,
                                                                           'type'=>'text',
                                                                           'label'=>false,
                                                                           'class'=>'form-control',
                                                                           'autocomplete'=>'off',
                                                                           'placeholder'=>'First Name']); ?>
                                            
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <i class="fas fa-user"></i>
                                            </div>
                                            <?php echo $this->Form->control('lastname',
                                                                          ['required' => true,
                                                                           'type'=>'text',
                                                                           'label'=>false,
                                                                           'class'=>'form-control',
                                                                           'autocomplete'=>'off',
                                                                           'placeholder'=>'Last Name']); ?>
                                            
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <i class="fas fa-phone"></i>
                                            </div>
                                            <?php echo $this->Form->control('phone',
                                                                          ['required' => true,
                                                                           'type'=>'text',
                                                                           'label'=>false,
                                                                           'class'=>'form-control',
                                                                           'autocomplete'=>'off',
                                                                           'placeholder'=>'Phone Number']); ?>
                                            
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <i class="fab fa-twitter"></i>
                                            </div>
                                            <?php echo $this->Form->control('twitter',
                                                                          ['required' => true,
                                                                           'type'=>'text',
                                                                           'label'=>false,
                                                                           'class'=>'form-control',
                                                                           'autocomplete'=>'off',
                                                                           'placeholder'=>'Twitter Handle']); ?>
                                            
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <i class="fab fa-facebook-square"></i>
                                            </div>
                                            <?php echo $this->Form->control('facebook',
                                                                          ['required' => true,
                                                                           'type'=>'text',
                                                                           'label'=>false,
                                                                           'class'=>'form-control',
                                                                           'autocomplete'=>'off',
                                                                           'placeholder'=>'Facebook Page']); ?>
                                            
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <i class="fas fa-id-badge"></i>
                                            </div>
                                            <?php echo $this->Form->control('license',
                                                                          ['required' => true,
                                                                           'type'=>'text',
                                                                           'label'=>false,
                                                                           'class'=>'form-control',
                                                                           'autocomplete'=>'off',
                                                                           'placeholder'=>'License Number']); ?>
                                            
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <i class="fas fa-portrait"></i>
                                            </div>
                                            <?php echo $this->Form->control('headshot',
                                                                          ['required' => true,
                                                                           'type'=>'file',
                                                                           'label'=>false,
                                                                           'class'=>'form-control',
                                                                           'autocomplete'=>'off',
                                                                           'placeholder'=>'Headshot']); ?>
                                            
                                        </div>
                                    </div>


                                    <div class="m-account--actions">
                                        <?php echo $this->Form->button('Create Account', ['class'=>'btn btn-block btn-rounded btn-info']); ?>
                                       
                                    </div>

                                    <div class="m-account--footer">
                                        <p>&copy; 2019 InsureTech</p>
                                    </div>
                                <?php $this->Form->end(); ?>
                            </div>
                        </div>
                        <!-- Register Form End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Register Page End -->
    </div>
    <!-- Wrapper End -->

    <!-- Scripts -->
    <?
        $this->Html->script('jquery.min');
        $this->Html->script('jquery-ui.min');
        $this->Html->script('bootstrap.bundle.min');
        $this->Html->script('perfect-scrollbar.min');
        $this->Html->script('jquery.sparkline.min');
        $this->Html->script('raphael.min');
        $this->Html->script('morris.min');
        $this->Html->script('select2.min');
        $this->Html->script('jquery-jvectormap.min');
        $this->Html->script('jquery-jvectormap-worl-mill.min');
        $this->Html->script('horzontal-timeline.min');
        $this->Html->script('jquery.validate.min');
        $this->Html->script('jquery.steps.min');
        $this->Html->script('dropzone.min');
        $this->Html->script('ion.rangeSlider.min');
        $this->Html->script('datatables.min');
        $this->Html->script('main');
    ?>

    <!-- Page Level Scripts -->

</body>
</html>
