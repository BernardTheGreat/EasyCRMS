<div class="laboratorySections view">
<h2><?php echo __('Laboratory Section'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($laboratorySection['LaboratorySection']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($laboratorySection['LaboratorySection']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($laboratorySection['LaboratorySection']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Entry Datetime'); ?></dt>
		<dd>
			<?php echo h($laboratorySection['LaboratorySection']['entry_datetime']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Enabled'); ?></dt>
		<dd>
			<?php echo h($laboratorySection['LaboratorySection']['enabled']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Laboratory Section'), array('action' => 'edit', $laboratorySection['LaboratorySection']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Laboratory Section'), array('action' => 'delete', $laboratorySection['LaboratorySection']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $laboratorySection['LaboratorySection']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Laboratory Sections'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Laboratory Section'), array('action' => 'add')); ?> </li>
	</ul>
</div>
