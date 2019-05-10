<!DOCTYPE html>
<html dir="ltr" lang="en" class="no-outlines">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- ==== Document Title ==== -->
    <title>Dashboard - DAdmin</title>
    
    <!-- ==== Document Meta ==== -->
    <meta name="author" content="">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- ==== Favicon ==== -->
    <link rel="icon" href="favicon.png" type="image/png">

    <!-- ==== Google Font ==== -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700%7CMontserrat:400,500">

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

</head>
<body>

    <!-- Wrapper Start -->
    <div class="wrapper">
        <!-- Login Page Start -->
        <div class="m-account-w" data-bg-img="assets/img/account/wrapper-bg.jpg">
            <div class="m-account">
                <div class="row no-gutters">

                    <div class="col-md-6">
                        <!-- Login Form Start -->
                        <div class="m-account--form-w">
                            <div class="m-account--form">
                                <!-- Logo Start -->
                                <div class="logo">
                                    <?php echo $this->Html->image('logo.png', ['alt' => 'InsureTech']); ?>
                                </div>
                                <!-- Logo End -->

                                <?php
                                    echo $this->Flash->render();
                                    echo $this->Form->create();        
                                ?>
                                    <label class="m-account--title">Login to your account</label>

                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <i class="fas fa-user"></i>
                                            </div>
                                            <?php echo $this->Form->control('email', ['type'=>'email', 'label'=>false, 'placeholder'=>'Username', 'class'=> 'form-control', 'autocomplete'=>'off', 'required']);?>
                                            
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <i class="fas fa-key"></i>
                                            </div>
                                            <?php echo $this->Form->control('password', ['type'=>'password', 'label'=>false, 'placeholder'=>'Password', 'class'=> 'form-control', 'autocomplete'=>'off', 'required']);?>
            
                                        </div>
                                    </div>

                                    <div class="m-account--actions">
                                        <a href="#" class="btn-link">Forgot Password?</a>
                                        <?php echo $this->Form->button(__('Login'), ['class'=>'btn btn-rounded btn-info']); ?>
                                        
                                    </div>


                                    <div class="m-account--footer">
                                        <p>&copy; 2019 InsureTech</p>
                                    </div>
                                <?php
                                    $this->Form->end();
                                ?>
                            </div>
                        </div>
                        <!-- Login Form End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Login Page End -->
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