<div class="clientMachineAnalyzers view">
<h2><?php echo __('Client Machine Analyzer'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($clientMachineAnalyzer['ClientMachineAnalyzer']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Provider'); ?></dt>
		<dd>
			<?php echo $this->Html->link($clientMachineAnalyzer['Provider']['name'], array('controller' => 'providers', 'action' => 'view', $clientMachineAnalyzer['Provider']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Client'); ?></dt>
		<dd>
			<?php echo $this->Html->link($clientMachineAnalyzer['Client']['name'], array('controller' => 'clients', 'action' => 'view', $clientMachineAnalyzer['Client']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Machine Analyzer'); ?></dt>
		<dd>
			<?php echo $this->Html->link($clientMachineAnalyzer['MachineAnalyzer']['name'], array('controller' => 'machine_analyzers', 'action' => 'view', $clientMachineAnalyzer['MachineAnalyzer']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Laboratory Section'); ?></dt>
		<dd>
			<?php echo $this->Html->link($clientMachineAnalyzer['LaboratorySection']['name'], array('controller' => 'laboratory_sections', 'action' => 'view', $clientMachineAnalyzer['LaboratorySection']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Connectivity Date'); ?></dt>
		<dd>
			<?php echo h($clientMachineAnalyzer['ClientMachineAnalyzer']['connectivity_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('External Engineer'); ?></dt>
		<dd>
			<?php echo h($clientMachineAnalyzer['ClientMachineAnalyzer']['external_engineer']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Internal Engineer'); ?></dt>
		<dd>
			<?php echo h($clientMachineAnalyzer['ClientMachineAnalyzer']['internal_engineer']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Connectivity Type'); ?></dt>
		<dd>
			<?php echo h($clientMachineAnalyzer['ClientMachineAnalyzer']['connectivity_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Communication Port'); ?></dt>
		<dd>
			<?php echo h($clientMachineAnalyzer['ClientMachineAnalyzer']['communication_port']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ip Address'); ?></dt>
		<dd>
			<?php echo h($clientMachineAnalyzer['ClientMachineAnalyzer']['ip_address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mi Ip Address'); ?></dt>
		<dd>
			<?php echo h($clientMachineAnalyzer['ClientMachineAnalyzer']['mi_ip_address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mi Driver Date'); ?></dt>
		<dd>
			<?php echo h($clientMachineAnalyzer['ClientMachineAnalyzer']['mi_driver_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Accepted Reference Range'); ?></dt>
		<dd>
			<?php echo h($clientMachineAnalyzer['ClientMachineAnalyzer']['accepted_reference_range']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Accepted Reference Range Url'); ?></dt>
		<dd>
			<?php echo h($clientMachineAnalyzer['ClientMachineAnalyzer']['accepted_reference_range_url']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Enabled'); ?></dt>
		<dd>
			<?php echo h($clientMachineAnalyzer['ClientMachineAnalyzer']['enabled']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Client Machine Analyzer'), array('action' => 'edit', $clientMachineAnalyzer['ClientMachineAnalyzer']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Client Machine Analyzer'), array('action' => 'delete', $clientMachineAnalyzer['ClientMachineAnalyzer']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $clientMachineAnalyzer['ClientMachineAnalyzer']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Client Machine Analyzers'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Client Machine Analyzer'), array('action' => 'add')); ?> </li>
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
