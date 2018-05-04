<?php
// source: C:\xampp\htdocs\Nette_seminarka\app/templates/@layout.latte

use Latte\Runtime as LR;

class Templatec7f6f8a0d6 extends Latte\Runtime\Template
{
	public $blocks = [
		'scripts' => 'blockScripts',
	];

	public $blockTypes = [
		'scripts' => 'html',
	];


	function main()
	{
		extract($this->params);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" href="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 6 */ ?>/css/style.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 8 */ ?>/bower_components/bootstrap/dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 9 */ ?>/bower_components/happy/dist/happy.css">
	<link rel="stylesheet" type="text/css" href="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 10 */ ?>/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker3.css">
	<link rel="stylesheet" type="text/css" href="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 11 */ ?>/bower_components/ublaboo-datagrid/assets/dist/datagrid.css">
	<link rel="stylesheet" type="text/css" href="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 12 */ ?>/bower_components/ublaboo-datagrid/assets/dist/datagrid-spinners.css">
	<link rel="stylesheet" type="text/css" href="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 13 */ ?>/bower_components/bootstrap-select/dist/css/bootstrap-select.css">

	<title><?php
		if (isset($this->blockQueue["title"])) {
			$this->renderBlock('title', $this->params, function ($s, $type) {
				$_fi = new LR\FilterInfo($type);
				return LR\Filters::convertTo($_fi, 'html', $this->filters->filterContent('striphtml', $_fi, $s));
			});
			?> | <?php
		}
?>Ceník</title>
</head>

<body>
<?php
		$iterations = 0;
		foreach ($flashes as $flash) {
			?>	<div<?php if ($_tmp = array_filter(['flash', $flash->type])) echo ' class="', LR\Filters::escapeHtmlAttr(implode(" ", array_unique($_tmp))), '"' ?>><?php
			echo LR\Filters::escapeHtmlText($flash->message) /* line 19 */ ?></div>
<?php
			$iterations++;
		}
?>

	<div class="topnav">
		<a class="active" href="#home">Tabulka</a>
		<a href="#news">-</a>
		<a href="#contact">-</a>
		<a href="#about">-</a>
	</div>

<?php
		$this->renderBlock('content', $this->params, 'html');
?>

<?php
		if ($this->getParentName()) return get_defined_vars();
		$this->renderBlock('scripts', get_defined_vars());
?>
</body>
</html>
<?php
		return get_defined_vars();
	}


	function prepare()
	{
		extract($this->params);
		if (isset($this->params['flash'])) trigger_error('Variable $flash overwritten in foreach on line 19');
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}


	function blockScripts($_args)
	{
		extract($_args);
		?>		<script src="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 31 */ ?>/bower_components/jquery/dist/jquery.js"></script>
		<script src="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 32 */ ?>/bower_components/nette-forms/src/assets/netteForms.js"></script>
		<script src="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 33 */ ?>/bower_components/nette.ajax.js/nette.ajax.js"></script>
		<script src="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 34 */ ?>/bower_components/happy/dist/happy.js"></script>
		<script src="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 35 */ ?>/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.js"></script>
		<script src="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 36 */ ?>/bower_components/jquery-ui-sortable/jquery-ui-sortable.js"></script>
		<script src="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 37 */ ?>/bower_components/ublaboo-datagrid/assets/dist/datagrid.js"></script>
		<script src="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 38 */ ?>/bower_components/ublaboo-datagrid/assets/dist/datagrid-instant-url-refresh.js"></script>
		<script src="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 39 */ ?>/bower_components/ublaboo-datagrid/assets/dist/datagrid-spinners.js"></script>
		<script src="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 40 */ ?>/bower_components/bootstrap/dist/js/bootstrap.js"></script>
		<script src="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 41 */ ?>/bower_components/bootstrap-select/dist/js/bootstrap-select.js"></script>
		<script>
            $.nette.init();
		</script>
<?php
	}

}
