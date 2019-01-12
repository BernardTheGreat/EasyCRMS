<div class="clientDetails view">
<h2><?php echo __('Client Detail'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($clientDetail['ClientDetail']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Client'); ?></dt>
		<dd>
			<?php echo $this->Html->link($clientDetail['Client']['name'], array('controller' => 'clients', 'action' => 'view', $clientDetail['Client']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Client Type'); ?></dt>
		<dd>
			<?php echo $this->Html->link($clientDetail['ClientType']['name'], array('controller' => 'client_types', 'action' => 'view', $clientDetail['ClientType']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Client Address'); ?></dt>
		<dd>
			<?php echo $this->Html->link($clientDetail['ClientAddress']['id'], array('controller' => 'client_addresses', 'action' => 'view', $clientDetail['ClientAddress']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Entry Datetime'); ?></dt>
		<dd>
			<?php echo h($clientDetail['ClientDetail']['entry_datetime']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Client Detail'), array('action' => 'edit', $clientDetail['ClientDetail']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Client Detail'), array('action' => 'delete', $clientDetail['ClientDetail']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $clientDetail['ClientDetail']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Client Details'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Client Detail'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Clients'), array('controller' => 'clients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Client'), array('controller' => 'clients', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Client Types'), array('controller' => 'client_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Client Type'), array('controller' => 'client_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Client Addresses'), array('controller' => 'client_addresses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Client Address'), array('controller' => 'client_addresses', 'action' => 'add')); ?> </li>
	</ul>
</div>
