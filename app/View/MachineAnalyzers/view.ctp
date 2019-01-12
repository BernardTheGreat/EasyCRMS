<div class="machineAnalyzers view">
<h2><?php echo __('Machine Analyzer'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($machineAnalyzer['MachineAnalyzer']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($machineAnalyzer['MachineAnalyzer']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($machineAnalyzer['MachineAnalyzer']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Laboratory Section'); ?></dt>
		<dd>
			<?php echo $this->Html->link($machineAnalyzer['LaboratorySection']['name'], array('controller' => 'laboratory_sections', 'action' => 'view', $machineAnalyzer['LaboratorySection']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Entry Datetime'); ?></dt>
		<dd>
			<?php echo h($machineAnalyzer['MachineAnalyzer']['entry_datetime']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Remarks'); ?></dt>
		<dd>
			<?php echo h($machineAnalyzer['MachineAnalyzer']['remarks']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified By'); ?></dt>
		<dd>
			<?php echo h($machineAnalyzer['MachineAnalyzer']['modified_by']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Machine Analyzer'), array('action' => 'edit', $machineAnalyzer['MachineAnalyzer']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Machine Analyzer'), array('action' => 'delete', $machineAnalyzer['MachineAnalyzer']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $machineAnalyzer['MachineAnalyzer']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Machine Analyzers'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Machine Analyzer'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Laboratory Sections'), array('controller' => 'laboratory_sections', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Laboratory Section'), array('controller' => 'laboratory_sections', 'action' => 'add')); ?> </li>
	</ul>
</div>
