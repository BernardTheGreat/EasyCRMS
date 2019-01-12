<div class="clientProducts view">
<h2><?php echo __('Client Product'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($clientProduct['ClientProduct']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Client'); ?></dt>
		<dd>
			<?php echo $this->Html->link($clientProduct['Client']['name'], array('controller' => 'clients', 'action' => 'view', $clientProduct['Client']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Product'); ?></dt>
		<dd>
			<?php echo $this->Html->link($clientProduct['Product']['name'], array('controller' => 'products', 'action' => 'view', $clientProduct['Product']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($clientProduct['ClientProduct']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Remarks'); ?></dt>
		<dd>
			<?php echo h($clientProduct['ClientProduct']['remarks']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Client Product'), array('action' => 'edit', $clientProduct['ClientProduct']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Client Product'), array('action' => 'delete', $clientProduct['ClientProduct']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $clientProduct['ClientProduct']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Client Products'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Client Product'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Clients'), array('controller' => 'clients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Client'), array('controller' => 'clients', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
	</ul>
</div>
