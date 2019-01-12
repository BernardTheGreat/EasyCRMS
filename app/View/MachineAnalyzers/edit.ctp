<div class="machineAnalyzers form">
<?php echo $this->Form->create('MachineAnalyzer'); ?>
	<fieldset>
		<legend><?php echo __('Edit Machine Analyzer'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('description');
		echo $this->Form->input('laboratory_section_id');
		echo $this->Form->input('entry_datetime');
		echo $this->Form->input('remarks');
		echo $this->Form->input('modified_by');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('MachineAnalyzer.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('MachineAnalyzer.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Machine Analyzers'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Laboratory Sections'), array('controller' => 'laboratory_sections', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Laboratory Section'), array('controller' => 'laboratory_sections', 'action' => 'add')); ?> </li>
	</ul>
</div>
