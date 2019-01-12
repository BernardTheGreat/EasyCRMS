<div class="laboratorySections form">
<?php echo $this->Form->create('LaboratorySection'); ?>
	<fieldset>
		<legend><?php echo __('Add Laboratory Section'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('description');
		echo $this->Form->input('entry_datetime');
		echo $this->Form->input('enabled');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Laboratory Sections'), array('action' => 'index')); ?></li>
	</ul>
</div>
