<?php
// source: C:\xampp\htdocs\Nette_seminarka\vendor\ublaboo\datagrid\src\templates\datagrid_filter_text.latte

use Latte\Runtime as LR;

class Template8f1b628d04 extends Latte\Runtime\Template
{

	function main()
	{
		extract($this->params);
		if ($outer) {
?>
	<div class="row">
		<?php
			$_input = is_object($input) ? $input : end($this->global->formsStack)[$input];
			if ($_label = $_input->getLabel()) echo $_label->addAttributes(['class' => 'col-sm-3 control-label']) ?>

		<div class="col-sm-9">
			<?php
			$_input = is_object($input) ? $input : end($this->global->formsStack)[$input];
			echo $_input->getControl() /* line 10 */ ?>

		</div>
	</div>
<?php
		}
		else {
			?>	<?php
			$_input = is_object($input) ? $input : end($this->global->formsStack)[$input];
			echo $_input->getControl() /* line 14 */ ?>

<?php
		}
		return get_defined_vars();
	}


	function prepare()
	{
		extract($this->params);
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}

}
