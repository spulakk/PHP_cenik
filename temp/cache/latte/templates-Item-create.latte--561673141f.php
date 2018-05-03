<?php
// source: C:\xampp\htdocs\Nette_seminarka\app/templates/Item/create.latte

use Latte\Runtime as LR;

class Template561673141f extends Latte\Runtime\Template
{
	public $blocks = [
		'content' => 'blockContent',
		'title' => 'blockTitle',
	];

	public $blockTypes = [
		'content' => 'html',
		'title' => 'html',
	];


	function main()
	{
		extract($this->params);
		if ($this->getParentName()) return get_defined_vars();
		$this->renderBlock('content', get_defined_vars());
		return get_defined_vars();
	}


	function prepare()
	{
		extract($this->params);
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}


	function blockContent($_args)
	{
		extract($_args);
?>

    <a href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Homepage:")) ?>">← zpět na výpis</a>

<?php
		$this->renderBlock('title', get_defined_vars());
?>

<?php
		/* line 7 */ $_tmp = $this->global->uiControl->getComponent("itemForm");
		if ($_tmp instanceof Nette\Application\UI\IRenderable) $_tmp->redrawControl(null, false);
		$_tmp->render();
?>

<?php
	}


	function blockTitle($_args)
	{
		extract($_args);
?>    <h2>Přidat položku</h2>
<?php
	}

}
