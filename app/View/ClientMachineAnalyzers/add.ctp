<div class="clientMachineAnalyzers form">
<?php echo $this->Form->create('ClientMachineAnalyzer'); ?>
	<fieldset>
		<legend><?php echo __('Add Client Machine Analyzer'); ?></legend>
	<?php
		echo $this->Form->input('provider_id');
		echo $this->Form->input('client_id');
		echo $this->Form->input('machine_analyzer_id');
		echo $this->Form->input('laboratory_section_id');
		echo $this->Form->input('connectivity_date');
		echo $this->Form->input('external_engineer');
		echo $this->Form->input('internal_engineer');
		echo $this->Form->input('connectivity_type');
		echo $this->Form->input('communication_port');
		echo $this->Form->input('ip_address');
		echo $this->Form->input('mi_ip_address');
		echo $this->Form->input('mi_driver_date');
		echo $this->Form->input('accepted_reference_range');
		echo $this->Form->input('accepted_reference_range_url');
		echo $this->Form->input('enabled');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Client Machine Analyzers'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Providers'), array('controller' => 'providers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Provider'), array('controller' => 'providers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Clients'), array('controller' => 'clients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Client'), array('controller' => 'clients', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Machine Analyzers'), array('controller' => 'machine_analyzers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Machine Analyzer'), array('controller' => 'machine_analyzers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Laboratory Sections'), array('controller' => 'laboratory_sections', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Laboratory Section'), array('controller' => 'laboratory_sections', 'action' => 'add')); ?> </li>
	</ul>
</div>
