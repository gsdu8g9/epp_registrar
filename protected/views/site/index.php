<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<div class="center hero-unit">
    <?php if(Yii::app()->user->hasFlash('domain')):?>
                    <div class="alert alert_success"><?php echo Yii::app()->user->getFlash('domain'); ?></div>
                    <?php 
                        Yii::app()->clientScript->registerScript(
                                'fadeAndHideEffect',
                                '$(".alert_success").animate({opacity: 1.0},2000).fadeOut("slow");'
                                
                                );
                    ?>
     <?php endif;?>
   <p> <?php $this->renderPartial('_lookup',array('lookup'=>$lookup));?></p>
    

<br /><br />
<p>EPP is the Extensible Provisioning Protocol. EPP (defined in RFC 5730 and subsequent documents) is an application layer client-server protocol for the provisioning and management of objects stored in a shared central repository.</p> 
<p>Specified in XML, the protocol defines generic object management operations and an extensible framework that maps protocol operations to objects. As of writing, its only well-developed application is the provisioning of Internet domain names, hosts, and related contact details.

	<div class="row buttons" style="float:right">
		<?php echo CHtml::linkButton('Register for an API key',array('class'=>'btn btn-large btn-primary')); ?>
	        <?php echo CHtml::linkButton('Login to buy .tz domain',array('class'=>'btn btn-large btn-primary')); 
                ?>
        </div>

</div>