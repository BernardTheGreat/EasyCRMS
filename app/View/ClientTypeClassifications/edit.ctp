<div class="clientTypeClassifications form">
<?php echo $this->Form->create('ClientTypeClassification'); ?>
	<fieldset>
		<legend><?php echo __('Edit Client Type Classification'); ?></legend>
	<?php
		echo $this->Form->input('id');
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('ClientTypeClassification.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('ClientTypeClassification.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Client Type Classifications'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Client Details'), array('controller' => 'client_details', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Client Detail'), array('controller' => 'client_details', 'action' => 'add')); ?> </li>
	</ul>
</div>
