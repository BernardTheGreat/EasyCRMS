<div class="clientDetails form">
<?php echo $this->Form->create('ClientDetail'); ?>
	<fieldset>
		<legend><?php echo __('Edit Client Detail'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('client_id');
		echo $this->Form->input('client_type_id');
		echo $this->Form->input('client_address_id');
		echo $this->Form->input('entry_datetime');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('ClientDetail.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('ClientDetail.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Client Details'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Clients'), array('controller' => 'clients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Client'), array('controller' => 'clients', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Client Types'), array('controller' => 'client_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Client Type'), array('controller' => 'client_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Client Addresses'), array('controller' => 'client_addresses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Client Address'), array('controller' => 'client_addresses', 'action' => 'add')); ?> </li>
	</ul>
</div>
