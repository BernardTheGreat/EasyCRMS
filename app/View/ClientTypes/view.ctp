<div class="clientTypes view">
<h2><?php echo __('Client Type'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($clientType['ClientType']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($clientType['ClientType']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Entry Datetime'); ?></dt>
		<dd>
			<?php echo h($clientType['ClientType']['entry_datetime']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Enabled'); ?></dt>
		<dd>
			<?php echo h($clientType['ClientType']['enabled']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Client Type'), array('action' => 'edit', $clientType['ClientType']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Client Type'), array('action' => 'delete', $clientType['ClientType']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $clientType['ClientType']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Client Types'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Client Type'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Client Details'), array('controller' => 'client_details', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Client Detail'), array('controller' => 'client_details', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Client Details'); ?></h3>
	<?php if (!empty($clientType['ClientDetail'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Client Id'); ?></th>
		<th><?php echo __('Client Type Id'); ?></th>
		<th><?php echo __('Client Address Id'); ?></th>
		<th><?php echo __('Entry Datetime'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($clientType['ClientDetail'] as $clientDetail): ?>
		<tr>
			<td><?php echo $clientDetail['id']; ?></td>
			<td><?php echo $clientDetail['client_id']; ?></td>
			<td><?php echo $clientDetail['client_type_id']; ?></td>
			<td><?php echo $clientDetail['client_address_id']; ?></td>
			<td><?php echo $clientDetail['entry_datetime']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'client_details', 'action' => 'view', $clientDetail['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'client_details', 'action' => 'edit', $clientDetail['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'client_details', 'action' => 'delete', $clientDetail['id']), array('confirm' => __('Are you sure you want to delete # %s?', $clientDetail['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Client Detail'), array('controller' => 'client_details', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
