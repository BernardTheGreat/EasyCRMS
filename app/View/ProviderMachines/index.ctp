<div class="providerMachines index">
	<h2><?php echo __('Provider Machines'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('machine_analyzer_id'); ?></th>
			<th><?php echo $this->Paginator->sort('provider_id'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('remarks'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($providerMachines as $providerMachine): ?>
	<tr>
		<td><?php echo h($providerMachine['ProviderMachine']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($providerMachine['MachineAnalyzer']['name'], array('controller' => 'machine_analyzers', 'action' => 'view', $providerMachine['MachineAnalyzer']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($providerMachine['Provider']['name'], array('controller' => 'providers', 'action' => 'view', $providerMachine['Provider']['id'])); ?>
		</td>
		<td><?php echo h($providerMachine['ProviderMachine']['description']); ?>&nbsp;</td>
		<td><?php echo h($providerMachine['ProviderMachine']['remarks']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $providerMachine['ProviderMachine']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $providerMachine['ProviderMachine']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $providerMachine['ProviderMachine']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $providerMachine['ProviderMachine']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Provider Machine'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Machine Analyzers'), array('controller' => 'machine_analyzers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Machine Analyzer'), array('controller' => 'machine_analyzers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Providers'), array('controller' => 'providers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Provider'), array('controller' => 'providers', 'action' => 'add')); ?> </li>
	</ul>
</div>
