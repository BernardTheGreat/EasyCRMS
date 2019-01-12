<div class="clientTypeClassifications index">
	<h2><?php echo __('Client Type Classifications'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('entry_datetime'); ?></th>
			<th><?php echo $this->Paginator->sort('enabled'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($clientTypeClassifications as $clientTypeClassification): ?>
	<tr>
		<td><?php echo h($clientTypeClassification['ClientTypeClassification']['id']); ?>&nbsp;</td>
		<td><?php echo h($clientTypeClassification['ClientTypeClassification']['name']); ?>&nbsp;</td>
		<td><?php echo h($clientTypeClassification['ClientTypeClassification']['description']); ?>&nbsp;</td>
		<td><?php echo h($clientTypeClassification['ClientTypeClassification']['entry_datetime']); ?>&nbsp;</td>
		<td><?php echo h($clientTypeClassification['ClientTypeClassification']['enabled']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $clientTypeClassification['ClientTypeClassification']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $clientTypeClassification['ClientTypeClassification']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $clientTypeClassification['ClientTypeClassification']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $clientTypeClassification['ClientTypeClassification']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Client Type Classification'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Client Details'), array('controller' => 'client_details', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Client Detail'), array('controller' => 'client_details', 'action' => 'add')); ?> </li>
	</ul>
</div>
