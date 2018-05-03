<?php
// source: C:\xampp\htdocs\Nette_seminarka\vendor\ublaboo\datagrid\src\Components\DataGridPaginator/templates/data_grid_paginator.latte

use Latte\Runtime as LR;

class Template34dcf4e778 extends Latte\Runtime\Template
{
	public $blocks = [
		'icon-arrow-left' => 'blockIcon_arrow_left',
		'icon-arrow-right' => 'blockIcon_arrow_right',
	];

	public $blockTypes = [
		'icon-arrow-left' => 'html',
		'icon-arrow-right' => 'html',
	];


	function main()
	{
		extract($this->params);
		$link = [$control->getParent(), 'link'];
?>

<?php
		if ($paginator->pageCount > 1) {
?><div>
	<?php
			if ($paginator->isFirst()) {
?>

		<a class="first btn btn-sm btn-default disabled">
<?php
			}
			else {
				?>		<a class="btn btn-sm btn-default ajax" href="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($link('page!', ['page' => $paginator->page - 1]))) /* line 13 */ ?>" rel="prev">
<?php
			}
			if ($this->getParentName()) return get_defined_vars();
			$this->renderBlock('icon-arrow-left', get_defined_vars());
			?> <?php echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, 'ublaboo_datagrid.previous')) /* line 15 */ ?></a>

<?php
			$iterations = 0;
			foreach ($iterator = $this->global->its[] = new LR\CachingIterator($steps) as $step) {
				if ($step == $paginator->page) {
					?>			<a class="first btn btn-sm btn-primary active"><?php echo LR\Filters::escapeHtmlText($step) /* line 19 */ ?></a>
<?php
				}
				else {
					?>			<a class="btn btn-sm btn-default ajax" href="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($link('page!', ['page' => $step]))) /* line 21 */ ?>"><?php
					echo LR\Filters::escapeHtmlText($step) /* line 21 */ ?></a>
<?php
				}
?>
		
		<?php
				if ($iterator->nextValue > $step + 1) {
					?><span>…</span><?php
				}
?>

<?php
				$iterations++;
			}
			array_pop($this->global->its);
			$iterator = end($this->global->its);
?>

<?php
			if ($paginator->isLast()) {
				?>		<a class="first btn btn-sm btn-default disabled"><?php echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, 'ublaboo_datagrid.next')) /* line 28 */ ?>

<?php
			}
			else {
				?>		<a class="btn btn-sm btn-default ajax" href="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($link('page!', ['page' => $paginator->page + 1]))) /* line 30 */ ?>" rel="next"><?php
				echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, 'ublaboo_datagrid.next')) /* line 30 */ ?>

<?php
			}
			$this->renderBlock('icon-arrow-right', get_defined_vars());
?>
</a>
</div>
<?php
		}
		return get_defined_vars();
	}


	function prepare()
	{
		extract($this->params);
		if (isset($this->params['step'])) trigger_error('Variable $step overwritten in foreach on line 17');
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}


	function blockIcon_arrow_left($_args)
	{
		extract($_args);
		?>	<i class="<?php echo LR\Filters::escapeHtmlAttr($icon_prefix) /* line 15 */ ?>arrow-left"></i><?php
	}


	function blockIcon_arrow_right($_args)
	{
		extract($_args);
		?>	<i class="<?php echo LR\Filters::escapeHtmlAttr($icon_prefix) /* line 32 */ ?>arrow-right"></i><?php
	}

}
