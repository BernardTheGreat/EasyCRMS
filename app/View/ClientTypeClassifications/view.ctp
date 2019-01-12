<div class="clientTypeClassifications view">
<h2><?php echo __('Client Type Classification'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($clientTypeClassification['ClientTypeClassification']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($clientTypeClassification['ClientTypeClassification']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($clientTypeClassification['ClientTypeClassification']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Entry Datetime'); ?></dt>
		<dd>
			<?php echo h($clientTypeClassification['ClientTypeClassification']['entry_datetime']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Enabled'); ?></dt>
		<dd>
			<?php echo h($clientTypeClassification['ClientTypeClassification']['enabled']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Client Type Classification'), array('action' => 'edit', $clientTypeClassification['ClientTypeClassification']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Client Type Classification'), array('action' => 'delete', $clientTypeClassification['ClientTypeClassification']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $clientTypeClassification['ClientTypeClassification']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Client Type Classifications'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Client Type Classification'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Client Details'), array('controller' => 'client_details', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Client Detail'), array('controller' => 'client_details', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Client Details'); ?></h3>
	<?php if (!empty($clientTypeClassification['ClientDetail'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Client Id'); ?></th>
		<th><?php echo __('Client Type Id'); ?></th>
		<th><?php echo __('Client Type Classification Id'); ?></th>
		<th><?php echo __('Entry Datetime'); ?></th>
		<th><?php echo __('Server Ip Address'); ?></th>
		<th><?php echo __('Mysql Username'); ?></th>
		<th><?php echo __('Mysql Password'); ?></th>
		<th><?php echo __('Ftp Username'); ?></th>
		<th><?php echo __('Ftp Password'); ?></th>
		<th><?php echo __('Main Teamviewer Id'); ?></th>
		<th><?php echo __('Main Teamviewer Password'); ?></th>
		<th><?php echo __('Chief Medtech'); ?></th>
		<th><?php echo __('Champion Medtech'); ?></th>
		<th><?php echo __('Laboratory Contact Number'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($clientTypeClassification['ClientDetail'] as $clientDetail): ?>
		<tr>
			<td><?php echo $clientDetail['id']; ?></td>
			<td><?php echo $clientDetail['client_id']; ?></td>
			<td><?php echo $clientDetail['client_type_id']; ?></td>
			<td><?php echo $clientDetail['client_type_classification_id']; ?></td>
			<td><?php echo $clientDetail['entry_datetime']; ?></td>
			<td><?php echo $clientDetail['server_ip_address']; ?></td>
			<td><?php echo $clientDetail['mysql_username']; ?></td>
			<td><?php echo $clientDetail['mysql_password']; ?></td>
			<td><?php echo $clientDetail['ftp_username']; ?></td>
			<td><?php echo $clientDetail['ftp_password']; ?></td>
			<td><?php echo $clientDetail['main_teamviewer_id']; ?></td>
			<td><?php echo $clientDetail['main_teamviewer_password']; ?></td>
			<td><?php echo $clientDetail['chief_medtech']; ?></td>
			<td><?php echo $clientDetail['champion_medtech']; ?></td>
			<td><?php echo $clientDetail['laboratory_contact_number']; ?></td>
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
