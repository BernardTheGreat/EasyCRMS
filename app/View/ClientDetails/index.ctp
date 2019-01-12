<div class="clientDetails index">
	<h2><?php echo __('Client Details'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('client_id'); ?></th>
			<th><?php echo $this->Paginator->sort('client_type_id'); ?></th>
			<th><?php echo $this->Paginator->sort('client_address_id'); ?></th>
			<th><?php echo $this->Paginator->sort('entry_datetime'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($clientDetails as $clientDetail): ?>
	<tr>
		<td><?php echo h($clientDetail['ClientDetail']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($clientDetail['Client']['name'], array('controller' => 'clients', 'action' => 'view', $clientDetail['Client']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($clientDetail['ClientType']['name'], array('controller' => 'client_types', 'action' => 'view', $clientDetail['ClientType']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($clientDetail['ClientAddress']['id'], array('controller' => 'client_addresses', 'action' => 'view', $clientDetail['ClientAddress']['id'])); ?>
		</td>
		<td><?php echo h($clientDetail['ClientDetail']['entry_datetime']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $clientDetail['ClientDetail']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $clientDetail['ClientDetail']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $clientDetail['ClientDetail']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $clientDetail['ClientDetail']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Client Detail'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Clients'), array('controller' => 'clients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Client'), array('controller' => 'clients', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Client Types'), array('controller' => 'client_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Client Type'), array('controller' => 'client_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Client Addresses'), array('controller' => 'client_addresses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Client Address'), array('controller' => 'client_addresses', 'action' => 'add')); ?> </li>
	</ul>
</div>
