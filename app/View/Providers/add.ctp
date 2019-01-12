<div class="providers form">
<?php echo $this->Form->create('Provider'); ?>
	<fieldset>
		<legend><?php echo __('Add Provider'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('description');
		echo $this->Form->input('address');
		echo $this->Form->input('channel');
		echo $this->Form->input('enabled');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Providers'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Client Machine Analyzers'), array('controller' => 'client_machine_analyzers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Client Machine Analyzer'), array('controller' => 'client_machine_analyzers', 'action' => 'add')); ?> </li>
	</ul>
</div>
