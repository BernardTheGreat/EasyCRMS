<div class="clientTypes form">
<?php echo $this->Form->create('ClientType'); ?>
	<fieldset>
		<legend><?php echo __('Add Client Type'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('entry_datetime');
		echo $this->Form->input('enabled');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Client Types'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Client Details'), array('controller' => 'client_details', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Client Detail'), array('controller' => 'client_details', 'action' => 'add')); ?> </li>
	</ul>
</div>
