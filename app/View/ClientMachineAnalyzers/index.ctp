<div class="clientMachineAnalyzers index">
	<h2><?php echo __('Client Machine Analyzers'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('provider_id'); ?></th>
			<th><?php echo $this->Paginator->sort('client_id'); ?></th>
			<th><?php echo $this->Paginator->sort('machine_analyzer_id'); ?></th>
			<th><?php echo $this->Paginator->sort('laboratory_section_id'); ?></th>
			<th><?php echo $this->Paginator->sort('connectivity_date'); ?></th>
			<th><?php echo $this->Paginator->sort('external_engineer'); ?></th>
			<th><?php echo $this->Paginator->sort('internal_engineer'); ?></th>
			<th><?php echo $this->Paginator->sort('connectivity_type'); ?></th>
			<th><?php echo $this->Paginator->sort('communication_port'); ?></th>
			<th><?php echo $this->Paginator->sort('ip_address'); ?></th>
			<th><?php echo $this->Paginator->sort('mi_ip_address'); ?></th>
			<th><?php echo $this->Paginator->sort('mi_driver_date'); ?></th>
			<th><?php echo $this->Paginator->sort('accepted_reference_range'); ?></th>
			<th><?php echo $this->Paginator->sort('accepted_reference_range_url'); ?></th>
			<th><?php echo $this->Paginator->sort('enabled'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($clientMachineAnalyzers as $clientMachineAnalyzer): ?>
	<tr>
		<td><?php echo h($clientMachineAnalyzer['ClientMachineAnalyzer']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($clientMachineAnalyzer['Provider']['name'], array('controller' => 'providers', 'action' => 'view', $clientMachineAnalyzer['Provider']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($clientMachineAnalyzer['Client']['name'], array('controller' => 'clients', 'action' => 'view', $clientMachineAnalyzer['Client']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($clientMachineAnalyzer['MachineAnalyzer']['name'], array('controller' => 'machine_analyzers', 'action' => 'view', $clientMachineAnalyzer['MachineAnalyzer']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($clientMachineAnalyzer['LaboratorySection']['name'], array('controller' => 'laboratory_sections', 'action' => 'view', $clientMachineAnalyzer['LaboratorySection']['id'])); ?>
		</td>
		<td><?php echo h($clientMachineAnalyzer['ClientMachineAnalyzer']['connectivity_date']); ?>&nbsp;</td>
		<td><?php echo h($clientMachineAnalyzer['ClientMachineAnalyzer']['external_engineer']); ?>&nbsp;</td>
		<td><?php echo h($clientMachineAnalyzer['ClientMachineAnalyzer']['internal_engineer']); ?>&nbsp;</td>
		<td><?php echo h($clientMachineAnalyzer['ClientMachineAnalyzer']['connectivity_type']); ?>&nbsp;</td>
		<td><?php echo h($clientMachineAnalyzer['ClientMachineAnalyzer']['communication_port']); ?>&nbsp;</td>
		<td><?php echo h($clientMachineAnalyzer['ClientMachineAnalyzer']['ip_address']); ?>&nbsp;</td>
		<td><?php echo h($clientMachineAnalyzer['ClientMachineAnalyzer']['mi_ip_address']); ?>&nbsp;</td>
		<td><?php echo h($clientMachineAnalyzer['ClientMachineAnalyzer']['mi_driver_date']); ?>&nbsp;</td>
		<td><?php echo h($clientMachineAnalyzer['ClientMachineAnalyzer']['accepted_reference_range']); ?>&nbsp;</td>
		<td><?php echo h($clientMachineAnalyzer['ClientMachineAnalyzer']['accepted_reference_range_url']); ?>&nbsp;</td>
		<td><?php echo h($clientMachineAnalyzer['ClientMachineAnalyzer']['enabled']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $clientMachineAnalyzer['ClientMachineAnalyzer']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $clientMachineAnalyzer['ClientMachineAnalyzer']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $clientMachineAnalyzer['ClientMachineAnalyzer']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $clientMachineAnalyzer['ClientMachineAnalyzer']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Client Machine Analyzer'), array('action' => 'add')); ?></li>
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
