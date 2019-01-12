<div class="providerMachines form">
<?php echo $this->Form->create('ProviderMachine'); ?>
	<fieldset>
		<legend><?php echo __('Add Provider Machine'); ?></legend>
	<?php
		echo $this->Form->input('machine_analyzer_id');
		echo $this->Form->input('provider_id');
		echo $this->Form->input('description');
		echo $this->Form->input('remarks');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Provider Machines'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Machine Analyzers'), array('controller' => 'machine_analyzers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Machine Analyzer'), array('controller' => 'machine_analyzers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Providers'), array('controller' => 'providers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Provider'), array('controller' => 'providers', 'action' => 'add')); ?> </li>
	</ul>
</div>
