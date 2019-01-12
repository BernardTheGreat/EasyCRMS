<div class="providerMachines view">
<h2><?php echo __('Provider Machine'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($providerMachine['ProviderMachine']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Machine Analyzer'); ?></dt>
		<dd>
			<?php echo $this->Html->link($providerMachine['MachineAnalyzer']['name'], array('controller' => 'machine_analyzers', 'action' => 'view', $providerMachine['MachineAnalyzer']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Provider'); ?></dt>
		<dd>
			<?php echo $this->Html->link($providerMachine['Provider']['name'], array('controller' => 'providers', 'action' => 'view', $providerMachine['Provider']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($providerMachine['ProviderMachine']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Remarks'); ?></dt>
		<dd>
			<?php echo h($providerMachine['ProviderMachine']['remarks']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Provider Machine'), array('action' => 'edit', $providerMachine['ProviderMachine']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Provider Machine'), array('action' => 'delete', $providerMachine['ProviderMachine']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $providerMachine['ProviderMachine']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Provider Machines'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Provider Machine'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Machine Analyzers'), array('controller' => 'machine_analyzers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Machine Analyzer'), array('controller' => 'machine_analyzers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Providers'), array('controller' => 'providers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Provider'), array('controller' => 'providers', 'action' => 'add')); ?> </li>
	</ul>
</div>
