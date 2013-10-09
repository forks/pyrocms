<div class="padding">

	<section id="page-title">
		<h1><?php echo lang('global:plugins');?></h1>
	</section>


	<!-- .panel -->
	<section class="panel">

		<div class="panel-heading">
			<h3 class="panel-title"><?php echo lang('addons:plugins:add_on_plugins');?></h3>
		</div>


		<!-- .panel-content -->
		<div class="panel-content">

			<?php echo $this->load->view('admin/plugins/_table', array('plugins' => $plugins), true) ?>

		</div>
		<!-- /.panel-content -->

	</section>
	<!-- /.panel -->



	<!-- .panel -->
	<section class="panel">

		<div class="panel-heading">
			<h3 class="panel-title"><?php echo lang('addons:plugins:core_plugins');?></h3>
		</div>


		<!-- .panel-content -->
		<div class="panel-content">

			<?php echo $this->load->view('admin/plugins/_table', array('plugins' => $core_plugins), true) ?>

		</div>
		<!-- /.panel-content -->

	</section>
	<!-- /.panel -->


</div>


<!-- Modal Content -->
<section id="plugin-docs" style="display:none">
	<?php echo $this->load->view('admin/plugins/_docs', array('plugins' => array($plugins, $core_plugins)), true) ?>
</section>