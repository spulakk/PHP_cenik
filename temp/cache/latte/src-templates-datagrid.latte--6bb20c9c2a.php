<?php
// source: C:\xampp\htdocs\Nette_seminarka\vendor\ublaboo\datagrid\src/templates/datagrid.latte

use Latte\Runtime as LR;

class Template6bb20c9c2a extends Latte\Runtime\Template
{
	public $blocks = [
		'_grid' => 'blockGrid',
		'_gridSnippets' => 'blockGridSnippets',
		'outer-filters' => 'blockOuter_filters',
		'icon-filter' => 'blockIcon_filter',
		'table-class' => 'blockTable_class',
		'data' => 'blockData',
		'_table' => 'blockTable',
		'header' => 'blockHeader',
		'group-actions' => 'blockGroup_actions',
		'group_actions' => 'blockGroup_actions_57877',
		'exports' => 'blockExports',
		'_exports' => 'blockExports_89404',
		'settings' => 'blockSettings',
		'icon-gear' => 'blockIcon_gear',
		'icon-checked' => 'blockIcon_checked',
		'icon-unchecked' => 'blockIcon_unchecked',
		'icon-eye' => 'blockIcon_eye',
		'icon-repeat' => 'blockIcon_repeat',
		'header-column-row' => 'blockHeader_column_row',
		'_thead-group-action' => 'blockThead_group_action',
		'icon-sort-up' => 'blockIcon_sort_up',
		'icon-sort-down' => 'blockIcon_sort_down',
		'icon-sort' => 'blockIcon_sort',
		'icon-caret-down' => 'blockIcon_caret_down',
		'icon-eye-slash' => 'blockIcon_eye_slash',
		'icon-remove' => 'blockIcon_remove',
		'header-filters' => 'blockHeader_filters',
		'tbody' => 'blockTbody',
		'_tbody' => 'blockTbody_da252',
		'_items' => 'blockItems',
		'icon-arrows-v' => 'blockIcon_arrows_v',
		'_summary' => 'blockSummary',
		'noItems' => 'blockNoItems',
		'tfoot' => 'blockTfoot',
		'_pagination' => 'blockPagination',
		'pagination' => 'blockPagination_fe7cd',
		'inlineAddRow' => 'blockInlineAddRow',
		'columnsSummary' => 'blockColumnsSummary',
		'aggregationFunctions' => 'blockAggregationFunctions',
		'column-header' => 'blockColumn_header',
		'column-value' => 'blockColumn_value',
	];

	public $blockTypes = [
		'_grid' => 'html',
		'_gridSnippets' => 'html',
		'outer-filters' => 'html',
		'icon-filter' => 'html',
		'table-class' => 'html',
		'data' => 'html',
		'_table' => 'html',
		'header' => 'html',
		'group-actions' => 'html',
		'group_actions' => 'html',
		'exports' => 'html',
		'_exports' => 'html',
		'settings' => 'html',
		'icon-gear' => 'html',
		'icon-checked' => 'html',
		'icon-unchecked' => 'html',
		'icon-eye' => 'html',
		'icon-repeat' => 'html',
		'header-column-row' => 'html',
		'_thead-group-action' => 'html',
		'icon-sort-up' => 'html',
		'icon-sort-down' => 'html',
		'icon-sort' => 'html',
		'icon-caret-down' => 'html',
		'icon-eye-slash' => 'html',
		'icon-remove' => 'html',
		'header-filters' => 'html',
		'tbody' => 'html',
		'_tbody' => 'html',
		'_items' => 'html',
		'icon-arrows-v' => 'html',
		'_summary' => 'html',
		'noItems' => 'html',
		'tfoot' => 'html',
		'_pagination' => 'html',
		'pagination' => 'html',
		'inlineAddRow' => 'html',
		'columnsSummary' => 'html',
		'aggregationFunctions' => 'html',
		'column-header' => 'html',
		'column-value' => 'html',
	];


	function main()
	{
		extract($this->params);
		?><div class="datagrid datagrid-<?php echo LR\Filters::escapeHtmlAttr($control->getName()) /* line 17 */ ?>" data-refresh-state="<?php
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("refreshState!")) ?>">
	<div<?php echo ' id="' . htmlSpecialChars($this->global->snippetDriver->getHtmlId('grid')) . '"' ?>>
<?php $this->renderBlock('_grid', $this->params) ?>
	</div>
</div>










<?php
		return get_defined_vars();
	}


	function prepare()
	{
		extract($this->params);
		if (isset($this->params['f'])) trigger_error('Variable $f overwritten in foreach on line 47');
		if (isset($this->params['form_control'])) trigger_error('Variable $form_control overwritten in foreach on line 80');
		if (isset($this->params['toolbar_button'])) trigger_error('Variable $toolbar_button overwritten in foreach on line 97');
		if (isset($this->params['export'])) trigger_error('Variable $export overwritten in foreach on line 101');
		if (isset($this->params['v_key'])) trigger_error('Variable $v_key overwritten in foreach on line 120');
		if (isset($this->params['visibility'])) trigger_error('Variable $visibility overwritten in foreach on line 120');
		if (isset($this->params['key'])) trigger_error('Variable $key overwritten in foreach on line 150, 206, 254, 288, 297, 438, 466, 479');
		if (isset($this->params['column'])) trigger_error('Variable $column overwritten in foreach on line 150, 206, 254, 288, 438, 466, 479');
		if (isset($this->params['inlineEditControl'])) trigger_error('Variable $inlineEditControl overwritten in foreach on line 262');
		if (isset($this->params['action'])) trigger_error('Variable $action overwritten in foreach on line 297');
		if (isset($this->params['row'])) trigger_error('Variable $row overwritten in foreach on line 244');
		if (isset($this->params['inlineAddControl'])) trigger_error('Variable $inlineAddControl overwritten in foreach on line 446');
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}


	function blockGrid($_args)
	{
		extract($_args);
		$this->global->snippetDriver->enter("grid", "static");
		?>	<?php
		$this->renderBlock('_gridSnippets', $this->params);
		$this->global->snippetDriver->leave();
		
	}


	function blockGridSnippets($_args)
	{
		extract($_args);
		$this->global->snippetDriver->enter("gridSnippets", "area");
		?>		<?php
		/* line 23 */
		echo Nette\Bridges\FormsLatte\Runtime::renderFormBegin($form = $_form = $this->global->formsStack[] = $this->global->uiControl["filter"], ['class' => 'ajax']);
?>

<?php
		if ($control->hasOuterFilterRendering()) {
			$this->renderBlock('outer-filters', get_defined_vars());
		}
		$this->renderBlock('data', get_defined_vars());
		?>		<?php
		echo Nette\Bridges\FormsLatte\Runtime::renderFormEnd(array_pop($this->global->formsStack));
?>

<?php
		$this->global->snippetDriver->leave();
		
	}


	function blockOuter_filters($_args)
	{
		extract($_args);
		if ($control->hasCollapsibleOuterFilters()) {
?>					<div class="row text-right datagrid-collapse-filters-button-row">
						<div class="col-sm-12">
							<button class="btn btn-xs btn-primary active" type="button" data-toggle="collapse" data-target="#datagrid-<?php
			echo LR\Filters::escapeHtmlAttr($control->getName()) /* line 31 */ ?>-row-filters">
<?php
			$this->renderBlock('icon-filter', get_defined_vars());
			?> <?php echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, 'ublaboo_datagrid.show_filter')) /* line 32 */ ?>

							</button>
						</div>
					</div>
<?php
		}
?>

<?php
		if ($control->hasCollapsibleOuterFilters() && !$filter_active) {
			$filter_row_class = 'row row-filters collapse';
		}
		elseif ($filter_active) {
			$filter_row_class = 'row row-filters collapse in';
		}
		else {
			$filter_row_class = 'row row-filters';
		}
		?>					<div class="<?php echo LR\Filters::escapeHtmlAttr($filter_row_class) /* line 44 */ ?>" id="datagrid-<?php
		echo LR\Filters::escapeHtmlAttr($control->getName()) /* line 44 */ ?>-row-filters">
<?php
		$i = 0;
		$filter_columns_class = 'col-sm-' . (12 / $control->getOuterFilterColumnsCount());
		$iterations = 0;
		foreach ($iterator = $this->global->its[] = new LR\CachingIterator($filters) as $f) {
			?>						<div class="<?php echo LR\Filters::escapeHtmlAttr($filter_columns_class) /* line 47 */ ?>">
							
<?php
			$filter_block = 'filter-' . $f->getKey();
			$filter_type_block = 'filtertype-' . $f->getType();
?>

<?php
			if (isset($this->blockQueue["$filter_block"])) {
				$this->renderBlock($filter_block, ['filter' => $f, 'input' => $form['filter'][$f->getKey()], 'outer' => TRUE] + $this->params, 'html');
			}
			else {
				if (isset($this->blockQueue["$filter_type_block"])) {
					$this->renderBlock($filter_type_block, ['filter' => $f, 'input' => $form['filter'][$f->getKey()], 'outer' => TRUE] + $this->params, 'html');
				}
				else {
					/* line 60 */
					$this->createTemplate($f->getTemplate(), ['filter' => $f, 'input' => $form['filter'][$f->getKey()], 'outer' => TRUE] + $this->params, "include")->renderToContentType('html');
				}
			}
			$i = $i+1;
?>
						</div>
<?php
			$iterations++;
		}
		array_pop($this->global->its);
		$iterator = end($this->global->its);
?>
						<div class="col-sm-12">
<?php
		if (!$control->hasAutoSubmit()) {
?>							<div class="text-right datagrid-manual-submit">
								<?php
			$_input = is_object($filter['filter']['submit']) ? $filter['filter']['submit'] : end($this->global->formsStack)[$filter['filter']['submit']];
			echo $_input->getControl() /* line 67 */ ?>

							</div>
<?php
		}
?>
						</div>
					</div>
<?php
	}


	function blockIcon_filter($_args)
	{
		extract($_args);
		?>								<i class="<?php echo LR\Filters::escapeHtmlAttr($icon_prefix) /* line 32 */ ?>filter"></i><?php
	}


	function blockTable_class($_args)
	{
		?>table table-hover table-striped table-bordered<?php
	}


	function blockData($_args)
	{
		extract($_args);
		?>			<table class="<?php
		$this->renderBlock('table-class', get_defined_vars(), function ($s, $type) {
			$_fi = new LR\FilterInfo($type);
			return LR\Filters::convertTo($_fi, 'htmlAttr', $s);
		});
		?>"<?php echo ' id="' . htmlSpecialChars($this->global->snippetDriver->getHtmlId('table')) . '"' ?>>
<?php $this->renderBlock('_table', $this->params) ?>
			</table>
<?php
		
	}


	function blockTable($_args)
	{
		extract($_args);
		$this->global->snippetDriver->enter("table", "static");
		$this->renderBlock('header', get_defined_vars());
?>

<?php
		$this->renderBlock('tbody', get_defined_vars());
		$this->renderBlock('tfoot', get_defined_vars());
		$this->global->snippetDriver->leave();
		
	}


	function blockHeader($_args)
	{
		extract($_args);
?>				<thead>
<?php
		$this->renderBlock('group-actions', get_defined_vars());
		$this->renderBlock('header-column-row', get_defined_vars());
		$this->renderBlock('header-filters', get_defined_vars());
?>
				</thead>
<?php
	}


	function blockGroup_actions($_args)
	{
		extract($_args);
		if ($hasGroupActions || $exports || $toolbar_buttons || $control->canHideColumns() || $inlineAdd) {
?>					<tr class="row-group-actions">
						<th colspan="<?php echo LR\Filters::escapeHtmlAttr($control->getColumnsCount()) /* line 76 */ ?>" class="form-inline">
<?php
			if ($hasGroupActions) {
				$this->renderBlock('group_actions', get_defined_vars());
			}
?>

<?php
			if ($control->canHideColumns() || $inlineAdd || $exports || $toolbar_buttons) {
?>							<div class="datagrid-toolbar">
<?php
				if ($toolbar_buttons) {
?>								<span>
									<?php
					$iterations = 0;
					foreach ($toolbar_buttons as $toolbar_button) {
						echo LR\Filters::escapeHtmlText($toolbar_button->renderButton()) /* line 97 */;
						$iterations++;
					}
?>

								</span>
<?php
				}
?>

<?php
				$this->renderBlock('exports', get_defined_vars());
?>

<?php
				$this->renderBlock('settings', get_defined_vars());
?>
							</div>
<?php
			}
?>
						</th>
					</tr>
<?php
		}
		
	}


	function blockGroup_actions_57877($_args)
	{
		extract($_args);
		?>									<?php echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, 'ublaboo_datagrid.group_actions')) /* line 79 */ ?>:
<?php
		$iterations = 0;
		foreach ($filter['group_action']->getControls() as $form_control) {
			if ($form_control instanceof \Nette\Forms\Controls\SubmitButton) {
				?>											<?php
				$_input = is_object($form_control) ? $form_control : end($this->global->formsStack)[$form_control];
				echo $_input->getControl()->addAttributes(['class' => 'btn btn-primary btn-sm', 'style' => 'display:none']) /* line 82 */ ?>

<?php
			}
			elseif ($form_control->getName() == 'group_action') {
				?>											<?php
				$_input = is_object($form_control) ? $form_control : end($this->global->formsStack)[$form_control];
				echo $_input->getControl()->addAttributes(['class' => 'form-control input-sm', 'disabled' => TRUE]) /* line 84 */ ?>

<?php
			}
			else {
				?>											<?php
				$_input = is_object($form_control) ? $form_control : end($this->global->formsStack)[$form_control];
				echo $_input->getControl()->addAttributes(['style' => 'display:none']) /* line 86 */ ?>

<?php
			}
			$iterations++;
		}
		if ($control->shouldShowSelectedRowsCount()) {
?>
										<span class="datagrid-selected-rows-count"></span>
<?php
		}
		
	}


	function blockExports($_args)
	{
		extract($_args);
		if ($exports) {
			?>								<span class="datagrid-exports"<?php echo ' id="' . htmlSpecialChars($this->global->snippetDriver->getHtmlId('exports')) . '"' ?>>
<?php $this->renderBlock('_exports', $this->params) ?>
								</span>
<?php
		}
		
	}


	function blockExports_89404($_args)
	{
		extract($_args);
		$this->global->snippetDriver->enter("exports", "static");
		?>									<?php
		$iterations = 0;
		foreach ($exports as $export) {
			echo LR\Filters::escapeHtmlText($export->render()) /* line 101 */;
			$iterations++;
		}
?>

<?php
		$this->global->snippetDriver->leave();
		
	}


	function blockSettings($_args)
	{
		extract($_args);
		if ($control->canHideColumns() || $inlineAdd) {
?>								<div class="datagrid-settings">
									
<?php
			if ($inlineAdd) {
				?>										<?php echo LR\Filters::escapeHtmlText($inlineAdd->renderButtonAdd()) /* line 109 */ ?>

<?php
			}
?>

									<div class="btn-group">
<?php
			if ($control->canHideColumns()) {
?>										<button type="button" class="btn btn-xs btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<?php
				$this->renderBlock('icon-gear', get_defined_vars());
?>
										</button>
<?php
			}
?>
										<ul class="dropdown-menu dropdown-menu-right dropdown-menu--grid">
<?php
			$iterations = 0;
			foreach ($iterator = $this->global->its[] = new LR\CachingIterator($columns_visibility) as $v_key => $visibility) {
?>											<li>
												<?php
				if ($visibility['visible']) {
?>

													<a class="ajax" href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("hideColumn!", ['column' => $v_key])) ?>">
<?php
					$this->renderBlock('icon-checked', get_defined_vars());
					$this->renderBlock('column-header', ['column' => $visibility['column']] + $this->params, 'html');
?>
													</a>
<?php
				}
				else {
					?>													<a class="ajax" href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("showColumn!", ['column' => $v_key])) ?>">
<?php
					$this->renderBlock('icon-unchecked', get_defined_vars());
					$this->renderBlock('column-header', ['column' => $visibility['column']] + $this->params, 'html');
?>
													</a>
<?php
				}
?>
											</li>
<?php
				$iterations++;
			}
			array_pop($this->global->its);
			$iterator = end($this->global->its);
?>
											<li role="separator" class="divider"></li>
											<li>
												<a class="ajax" href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("showAllColumns!")) ?>"><?php
			$this->renderBlock('icon-eye', get_defined_vars());
			?> <?php echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, 'ublaboo_datagrid.show_all_columns')) /* line 135 */ ?></a>
											</li>
<?php
			if ($control->hasSomeColumnDefaultHide()) {
?>											<li>
												<a class="ajax" href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("showDefaultColumns!")) ?>"><?php
				$this->renderBlock('icon-repeat', get_defined_vars());
				?> <?php echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, 'ublaboo_datagrid.show_default_columns')) /* line 138 */ ?></a>
											</li>
<?php
			}
?>
										</ul>
									</div>
								</div>
<?php
		}
		
	}


	function blockIcon_gear($_args)
	{
		extract($_args);
		?>											<i class="<?php echo LR\Filters::escapeHtmlAttr($icon_prefix) /* line 117 */ ?>gear"></i>
<?php
	}


	function blockIcon_checked($_args)
	{
		extract($_args);
		?>														<i class="<?php echo LR\Filters::escapeHtmlAttr($icon_prefix) /* line 123 */ ?>check-square-o"></i>
<?php
	}


	function blockIcon_unchecked($_args)
	{
		extract($_args);
		?>														<i class="<?php echo LR\Filters::escapeHtmlAttr($icon_prefix) /* line 128 */ ?>square-o"></i>
<?php
	}


	function blockIcon_eye($_args)
	{
		extract($_args);
		?><i class="<?php echo LR\Filters::escapeHtmlAttr($icon_prefix) /* line 135 */ ?>eye"></i><?php
	}


	function blockIcon_repeat($_args)
	{
		extract($_args);
		?><i class="<?php echo LR\Filters::escapeHtmlAttr($icon_prefix) /* line 138 */ ?>repeat"></i><?php
	}


	function blockHeader_column_row($_args)
	{
		extract($_args);
?>					<tr>
<?php
		if ($hasGroupActions) {
			?>						<th class="col-checkbox"<?php
			$_tmp = ['rowspan=2' => !empty($filters) && !$control->hasOuterFilterRendering()];
			echo LR\Filters::htmlAttributes(isset($_tmp[0]) && is_array($_tmp[0]) ? $_tmp[0] : $_tmp);
			echo ' id="' . htmlSpecialChars($this->global->snippetDriver->getHtmlId('thead-group-action')) . '"' ?>>
<?php $this->renderBlock('_thead-group-action', $this->params) ?>
						</th>
<?php
		}
		$iterations = 0;
		foreach ($iterator = $this->global->its[] = new LR\CachingIterator($columns) as $key => $column) {
			$th = $column->getElementForRender('th', $key);
			?>							<?php echo $th->startTag() /* line 152 */ ?>

<?php
			$col_header = 'col-' . $key . '-header';
?>

<?php
			if (isset($this->blockQueue["$col_header"])) {
				$this->renderBlock($col_header, ['column' => $column] + $this->params, 'html');
			}
			else {
				if ($column->isSortable()) {
					?>										<a href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("sort!", ['sort' => $control->getSortNext($column)])) ?>" id="datagrid-sort-<?php
					echo LR\Filters::escapeHtmlAttr($key) /* line 162 */ ?>"<?php if ($_tmp = array_filter([$column->isSortedBy() ? 'sort' : '', 'ajax'])) echo ' class="', LR\Filters::escapeHtmlAttr(implode(" ", array_unique($_tmp))), '"' ?>>
<?php
					$this->renderBlock('column-header', ['column' => $column] + $this->params, 'html');
?>

<?php
					if ($column->isSortedBy()) {
						if ($column->isSortAsc()) {
							$this->renderBlock('icon-sort-up', get_defined_vars());
						}
						else {
							$this->renderBlock('icon-sort-down', get_defined_vars());
						}
					}
					else {
						$this->renderBlock('icon-sort', get_defined_vars());
					}
?>
										</a>
<?php
				}
				else {
					$this->renderBlock('column-header', ['column' => $column] + $this->params, 'html');
				}
			}
?>

								<div class="datagrid-column-header-additions">
<?php
			if ($control->canHideColumns()) {
?>									<div class="btn-group column-settings-menu">
										<a class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<?php
				$this->renderBlock('icon-caret-down', get_defined_vars());
?>
										</a>
										<ul class="dropdown-menu dropdown-menu--grid">
											<li>
												<a class="ajax" href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("hideColumn!", ['column' => $key])) ?>">
<?php
				$this->renderBlock('icon-eye-slash', get_defined_vars());
				?> <?php echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, 'ublaboo_datagrid.hide_column')) /* line 188 */ ?></a>
											</li>
										</ul>
									</div>
<?php
			}
?>

<?php
			if ($control->hasColumnReset()) {
				?>										<a data-datagrid-reset-filter-by-column="<?php echo LR\Filters::escapeHtmlAttr($key) /* line 194 */ ?>" title="<?php
				echo LR\Filters::escapeHtmlAttr(call_user_func($this->filters->translate, 'ublaboo_datagrid.reset_filter')) /* line 194 */ ?>" href="<?php
				echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("resetColumnFilter!", ['key' => $key])) ?>"<?php
				if ($_tmp = array_filter([isset($filters[$key]) && $filters[$key]->isValueSet() ? '' : 'hidden', 'ajax'])) echo ' class="', LR\Filters::escapeHtmlAttr(implode(" ", array_unique($_tmp))), '"' ?>>
<?php
				$this->renderBlock('icon-remove', get_defined_vars());
?>
										</a>
<?php
			}
?>
								</div>
							<?php echo $th->endTag() /* line 199 */ ?>

<?php
			$iterations++;
		}
		array_pop($this->global->its);
		$iterator = end($this->global->its);
		if ($actions || $control->isSortable() || $items_detail || $inlineEdit || $inlineAdd) {
?>						<th class="col-action text-center">
							<?php echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, 'Akce')) /* line 202 */ ?>

						</th>
<?php
		}
?>
					</tr>
<?php
	}


	function blockThead_group_action($_args)
	{
		extract($_args);
		$this->global->snippetDriver->enter("thead-group-action", "static");
		if ($hasGroupActionOnRows) {
			?>							<input name="<?php echo LR\Filters::escapeHtmlAttr(call_user_func($this->filters->lower, $control->getName())) /* line 148 */ ?>-toggle-all" type="checkbox" data-check="<?php
			echo LR\Filters::escapeHtmlAttr($control->getName()) /* line 148 */ ?>" data-check-all="<?php echo LR\Filters::escapeHtmlAttr($control->getName()) /* line 148 */ ?>"<?php
			if ($_tmp = array_filter([$control->useHappyComponents() ? 'happy gray-border'  : NULL, 'primary'])) echo ' class="', LR\Filters::escapeHtmlAttr(implode(" ", array_unique($_tmp))), '"' ?>>
<?php
		}
		$this->global->snippetDriver->leave();
		
	}


	function blockIcon_sort_up($_args)
	{
		extract($_args);
		?>													<i class="<?php echo LR\Filters::escapeHtmlAttr($icon_prefix) /* line 167 */ ?>caret-up"></i>
<?php
	}


	function blockIcon_sort_down($_args)
	{
		extract($_args);
		?>													<i class="<?php echo LR\Filters::escapeHtmlAttr($icon_prefix) /* line 169 */ ?>caret-down"></i>
<?php
	}


	function blockIcon_sort($_args)
	{
		extract($_args);
		?>												<i class="<?php echo LR\Filters::escapeHtmlAttr($icon_prefix) /* line 172 */ ?>sort"></i>
<?php
	}


	function blockIcon_caret_down($_args)
	{
		extract($_args);
		?>											<i class="<?php echo LR\Filters::escapeHtmlAttr($icon_prefix) /* line 183 */ ?>caret-down"></i>
<?php
	}


	function blockIcon_eye_slash($_args)
	{
		extract($_args);
		?>													<i class="<?php echo LR\Filters::escapeHtmlAttr($icon_prefix) /* line 188 */ ?>eye-slash"></i><?php
	}


	function blockIcon_remove($_args)
	{
		extract($_args);
		?>											<i class="<?php echo LR\Filters::escapeHtmlAttr($icon_prefix) /* line 195 */ ?>remove"></i>
<?php
	}


	function blockHeader_filters($_args)
	{
		extract($_args);
		if (!empty($filters) && !$control->hasOuterFilterRendering()) {
?>					<tr>
						<?php
			$iterations = 0;
			foreach ($iterator = $this->global->its[] = new LR\CachingIterator($columns) as $key => $column) {
?>

<?php
				$th = $column->getElementForRender('th', $key);
				?>							<?php echo $th->startTag() /* line 208 */ ?>

<?php
				$col_header = 'col-filter-' . $key . '-header';
				if (!$control->hasOuterFilterRendering() && isset($filters[$key])) {
					$i = $filter['filter'][$key];
?>

<?php
					$filter_block = 'filter-' . $filters[$key]->getKey();
					$filter_type_block = 'filtertype-' . $filters[$key]->getType();
?>

<?php
					if (isset($this->blockQueue["$filter_block"])) {
						$this->renderBlock($filter_block, ['filter' => $filters[$key], 'input' => $i, 'outer' => FALSE] + $this->params, 'html');
					}
					else {
						if (isset($this->blockQueue["$filter_type_block"])) {
							$this->renderBlock($filter_type_block, ['filter' => $filters[$key], 'input' => $i, 'outer' => FALSE] + $this->params, 'html');
						}
						else {
							/* line 222 */
							$this->createTemplate($filters[$key]->getTemplate(), ['filter' => $filters[$key], 'input' => $i, 'outer' => FALSE] + $this->params, "include")->renderToContentType('html');
						}
					}
?>

<?php
				}
				?>							<?php echo $th->endTag() /* line 227 */ ?>

<?php
				$iterations++;
			}
			array_pop($this->global->its);
			$iterator = end($this->global->its);
			if ($actions || $control->isSortable() || $items_detail || $inlineEdit || $inlineAdd) {
?>						<th class="col-action text-center">
							<?php
				if (!$control->hasAutoSubmit() && !$control->hasOuterFilterRendering()) {
?>

								<?php
					$_input = is_object($filter['filter']['submit']) ? $filter['filter']['submit'] : end($this->global->formsStack)[$filter['filter']['submit']];
					echo $_input->getControl() /* line 231 */ ?>

<?php
				}
?>
						</th>
<?php
			}
?>
					</tr>
<?php
		}
		
	}


	function blockTbody($_args)
	{
		extract($_args);
		?>				<tbody <?php
		if ($control->isSortable()) {
			?>data-sortable data-sortable-url="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiPresenter->link($control->getSortableHandler())) ?>" data-sortable-parent-path="<?php
			echo LR\Filters::escapeHtmlAttr($control->getSortableParentPath()) /* line 238 */ ?>"<?php
		}
		echo ' id="' . htmlSpecialChars($this->global->snippetDriver->getHtmlId('tbody')) . '"' ?>>
<?php $this->renderBlock('_tbody', $this->params) ?>
				</tbody>
<?php
		
	}


	function blockTbody_da252($_args)
	{
		extract($_args);
		$this->global->snippetDriver->enter("tbody", "static");
		?>					<?php
		$this->renderBlock('_items', $this->params);
		$this->global->snippetDriver->leave();
		
	}


	function blockItems($_args)
	{
		extract($_args);
		$this->global->snippetDriver->enter("items", "area");
		if ($inlineAdd && $inlineAdd->isPositionTop()) {
			$this->renderBlock('inlineAddRow', ['columns' => $columns] + $this->params, 'html');
		}
?>

<?php
		$iterations = 0;
		foreach ($iterator = $this->global->its[] = new LR\CachingIterator($rows) as $row) {
			$item = $row->getItem();
?>

<?php
			if (!isset($toggle_detail)) {
				if ($inlineEdit && $inlineEdit->getItemId() == $row->getId()) {
					$inlineEdit->onSetDefaults($filter['inline_edit'], $item);
					;
?>

									<tr data-id="<?php echo LR\Filters::escapeHtmlAttr($row->getId()) /* line 251 */ ?>"<?php
					if ($_tmp = array_filter([$row->getControlClass()])) echo ' class="', LR\Filters::escapeHtmlAttr(implode(" ", array_unique($_tmp))), '"';
					echo ' id="' . htmlSpecialChars($this->global->snippetDriver->getHtmlId("item-{$row->getId()}")) . '"' ?>>
<?php
					$this->global->snippetDriver->enter("item-{$row->getId()}", "dynamic");
					if ($hasGroupActions) {
?>										<td class="col-checkbox"></td>
<?php
					}
?>

<?php
					$iterations = 0;
					foreach ($columns as $key => $column) {
						$col = 'col-' . $key;
?>

<?php
						$td = $column->getElementForRender('td', $key, $row);
						$td->class[] = 'datagrid-inline-edit';
						?>											<?php echo $td->startTag() /* line 259 */ ?>

<?php
						if (isset($filter['inline_edit'][$key])) {
							if ($filter['inline_edit'][$key] instanceof \Nette\Forms\Container) {
								$iterations = 0;
								foreach ($filter['inline_edit'][$key]->getControls() as $inlineEditControl) {
									?>															<?php
									$_input = is_object($inlineEditControl) ? $inlineEditControl : end($this->global->formsStack)[$inlineEditControl];
									echo $_input->getControl() /* line 263 */ ?>

<?php
									$iterations++;
								}
							}
							else {
								?>														<?php
								$_input = is_object($filter['inline_edit'][$key]) ? $filter['inline_edit'][$key] : end($this->global->formsStack)[$filter['inline_edit'][$key]];
								echo $_input->getControl() /* line 266 */ ?>

<?php
							}
						}
						elseif ($inlineEdit->showNonEditingColumns()) {
							$this->renderBlock('column-value', ['column' => $column, 'row' => $row, 'key' => $key] + $this->params, 'html');
						}
						?>											<?php echo $td->endTag() /* line 271 */ ?>

<?php
						$iterations++;
					}
?>

										<td class="col-action col-action-inline-edit">
											<?php
					$_input = is_object($filter['inline_edit']['cancel']) ? $filter['inline_edit']['cancel'] : end($this->global->formsStack)[$filter['inline_edit']['cancel']];
					echo $_input->getControl()->addAttributes(['class' => 'btn btn-xs btn-danger']) /* line 275 */ ?>

											<?php
					$_input = is_object($filter['inline_edit']['submit']) ? $filter['inline_edit']['submit'] : end($this->global->formsStack)[$filter['inline_edit']['submit']];
					echo $_input->getControl()->addAttributes(['class' => 'btn btn-xs btn-primary']) /* line 276 */ ?>

											<?php
					$_input = is_object($filter['inline_edit']['_id']) ? $filter['inline_edit']['_id'] : end($this->global->formsStack)[$filter['inline_edit']['_id']];
					echo $_input->getControl() /* line 277 */ ?>

											<?php
					$_input = is_object($filter['inline_edit']['_primary_where_column']) ? $filter['inline_edit']['_primary_where_column'] : end($this->global->formsStack)[$filter['inline_edit']['_primary_where_column']];
					echo $_input->getControl() /* line 278 */ ?>

										</td>
<?php
					$this->global->snippetDriver->leave();
?>									</tr>
<?php
				}
				else {
					?>									<tr data-id="<?php echo LR\Filters::escapeHtmlAttr($row->getId()) /* line 282 */ ?>"<?php
					if ($_tmp = array_filter([$row->getControlClass()])) echo ' class="', LR\Filters::escapeHtmlAttr(implode(" ", array_unique($_tmp))), '"';
					echo ' id="' . htmlSpecialChars($this->global->snippetDriver->getHtmlId("item-{$row->getId()}")) . '"' ?>>
<?php
					$this->global->snippetDriver->enter("item-{$row->getId()}", "dynamic");
					if ($hasGroupActions) {
?>										<td class="col-checkbox">
											<?php
						if ($row->hasGroupAction()) {
?>

												<input type="checkbox" data-check="<?php echo LR\Filters::escapeHtmlAttr($control->getName()) /* line 285 */ ?>" data-check-all-<?php
							echo $control->getName() /* line 285 */ ?> name="<?php echo LR\Filters::escapeHtmlAttr(call_user_func($this->filters->lower, $control->getName())) /* line 285 */ ?>_group_action_item[<?php
							echo LR\Filters::escapeHtmlAttr($row->getId()) /* line 285 */ ?>]"<?php if ($_tmp = array_filter([$control->useHappyComponents() ? 'happy gray-border'  : NULL, 'primary'])) echo ' class="', LR\Filters::escapeHtmlAttr(implode(" ", array_unique($_tmp))), '"' ?>>
<?php
						}
?>
										</td>
<?php
					}
					$iterations = 0;
					foreach ($columns as $key => $column) {
						$column = $row->applyColumnCallback($key, clone $column);
?>

<?php
						$td = $column->getElementForRender('td', $key, $row);
						?>											<?php echo $td->startTag() /* line 292 */ ?>

<?php
						$this->renderBlock('column-value', ['column' => $column, 'row' => $row, 'key' => $key] + $this->params, 'html');
						?>											<?php echo $td->endTag() /* line 294 */ ?>

<?php
						$iterations++;
					}
					if ($actions || $control->isSortable() || $items_detail || $inlineEdit || $inlineAdd) {
?>										<td class="col-action">
											<?php
						$iterations = 0;
						foreach ($iterator = $this->global->its[] = new LR\CachingIterator($actions) as $key => $action) {
?>

<?php
							if ($row->hasAction($key)) {
								if ($action->hasTemplate()) {
									/* line 300 */
									$this->createTemplate($action->getTemplate(), array_merge(['item' => $item, ], $action->getTemplateVariables(), [ 'row' => $row]) + $this->params, "include")->renderToContentType('html');
								}
								else {
									?>														<?php echo $action->render($row) /* line 302 */ ?>

<?php
								}
							}
							$iterations++;
						}
						array_pop($this->global->its);
						$iterator = end($this->global->its);
						if ($control->isSortable()) {
?>											<span class="handle-sort btn btn-xs btn-default">
<?php
							$this->renderBlock('icon-arrows-v', get_defined_vars());
?>
											</span>
<?php
						}
						if ($inlineEdit && $row->hasInlineEdit()) {
							?>												<?php echo $inlineEdit->renderButton($row) /* line 310 */ ?>

<?php
						}
						if ($items_detail && $items_detail->shouldBeRendered($row)) {
							?>												<?php echo $items_detail->renderButton($row) /* line 313 */ ?>

<?php
						}
?>
										</td>
<?php
					}
					$this->global->snippetDriver->leave();
?>									</tr>
<?php
				}
			}
?>

<?php
			if ($items_detail && $items_detail->shouldBeRendered($row)) {
				?>								<tr class="row-item-detail item-detail-<?php echo LR\Filters::escapeHtmlAttr($row->getId()) /* line 324 */ ?>"<?php
				echo ' id="' . htmlSpecialChars($this->global->snippetDriver->getHtmlId("item-{$row->getId()}-detail")) . '"' ?>>
<?php
				$this->global->snippetDriver->enter("item-{$row->getId()}-detail", "dynamic");
				?>									<?php
				if (isset($toggle_detail) && $toggle_detail == $row->getId()) {
?>

<?php
					$item_detail_params = ['item' => $item, '_form' => $filter] + $items_detail->getTemplateVariables();
?>

<?php
					if (isset($filter['items_detail_form'])) {
						$item_detail_params['items_detail_form'] = $filter['items_detail_form'];
					}
?>

<?php
					if (isset($this->blockQueue["detail"])) {
						?>											<td colspan="<?php echo LR\Filters::escapeHtmlAttr($control->getColumnsCount()) /* line 333 */ ?>">
												<div class="item-detail-content">
<?php
						$this->renderBlock('detail', array_merge([], $item_detail_params, []) + $this->params, 'html');
?>
												</div>
											</td>
<?php
					}
					elseif ($items_detail) {
						?>											<td colspan="<?php echo LR\Filters::escapeHtmlAttr($control->getColumnsCount()) /* line 339 */ ?>">
												<div class="item-detail-content">
<?php
						if ($items_detail->getType() == 'template') {
							/* line 342 */
							$this->createTemplate($items_detail->getTemplate(), array_merge([], $item_detail_params, []) + $this->params, "include")->renderToContentType('html');
						}
						else {
							?>														<?php echo $items_detail->render($item) /* line 344 */ ?>

<?php
						}
?>
												</div>
											</td>
<?php
					}
				}
				$this->global->snippetDriver->leave();
?>								</tr>
								<tr class="row-item-detail-helper"></tr>
<?php
			}
			$iterations++;
		}
		array_pop($this->global->its);
		$iterator = end($this->global->its);
?>

<?php
		if ($inlineAdd && $inlineAdd->isPositionBottom()) {
			$this->renderBlock('inlineAddRow', ['columns' => $columns] + $this->params, 'html');
		}
?>

<?php
		if (!empty($rows) && ($columnsSummary || $control->hasSomeAggregationFunction())) {
			?>						<tr class="datagrid-row-columns-summary"<?php echo ' id="' . htmlSpecialChars($this->global->snippetDriver->getHtmlId('summary')) . '"' ?>>
<?php $this->renderBlock('_summary', $this->params) ?>
						</tr>
<?php
		}
?>

<?php
		$this->renderBlock('noItems', get_defined_vars());
		$this->global->snippetDriver->leave();
		
	}


	function blockIcon_arrows_v($_args)
	{
		extract($_args);
		?>												<i class="<?php echo LR\Filters::escapeHtmlAttr($icon_prefix) /* line 307 */ ?>arrows-v"></i>
<?php
	}


	function blockSummary($_args)
	{
		extract($_args);
		$this->global->snippetDriver->enter("summary", "static");
		if ($hasGroupActions) {
?>							<td class="col-checkbox"></td>
<?php
		}
?>

<?php
		if ($columnsSummary && $columnsSummary->someColumnsExist($columns)) {
			$this->renderBlock('columnsSummary', ['columns' => $columns] + $this->params, 'html');
		}
?>

<?php
		if ($control->hasSomeAggregationFunction()) {
			$this->renderBlock('aggregationFunctions', ['columns' => $columns] + $this->params, 'html');
		}
?>

<?php
		if ($actions || $control->isSortable() || $items_detail || $inlineEdit || $inlineAdd) {
?>							<td class="col-action"></td>
<?php
		}
		$this->global->snippetDriver->leave();
		
	}


	function blockNoItems($_args)
	{
		extract($_args);
		if (!$rows) {
?>							<tr>
								<td colspan="<?php echo LR\Filters::escapeHtmlAttr($control->getColumnsCount()) /* line 375 */ ?>">
<?php
			if ($filter_active) {
				?>										<?php echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, 'ublaboo_datagrid.no_item_found_reset')) /* line 377 */ ?> <a class="link ajax" href="<?php
				echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("resetFilter!")) ?>"><?php echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, 'ublaboo_datagrid.here')) /* line 377 */ ?></a>.
<?php
			}
			else {
				?>										<?php echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, 'ublaboo_datagrid.no_item_found')) /* line 379 */ ?>

<?php
			}
?>
								</td>
							</tr>
<?php
		}
		
	}


	function blockTfoot($_args)
	{
		extract($_args);
		?>					<tfoot<?php echo ' id="' . htmlSpecialChars($this->global->snippetDriver->getHtmlId('pagination')) . '"' ?>>
<?php $this->renderBlock('_pagination', $this->params) ?>
					</tfoot>
<?php
		
	}


	function blockPagination($_args)
	{
		extract($_args);
		$this->global->snippetDriver->enter("pagination", "static");
		?>						<?php
		if ($control->isPaginated() || $filter_active) {
?>

<?php
			$this->renderBlock('pagination', get_defined_vars());
		}
		$this->global->snippetDriver->leave();
		
	}


	function blockPagination_fe7cd($_args)
	{
		extract($_args);
?>							<tr>
<?php
		if (!$control->isTreeView()) {
			?>								<td colspan="<?php echo LR\Filters::escapeHtmlAttr($control->getColumnsCount()) /* line 391 */ ?>" class="row-grid-bottom">
									<div class="col-items">
<?php
			if ($control->isPaginated()) {
?>										<small class="text-muted">
											(<?php
				$paginator = $control['paginator']->getPaginator();
?>


<?php
				if ($control->getPerPage() === 'all') {
					?>												<?php echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, 'ublaboo_datagrid.items')) /* line 397 */ ?>: <?php
					echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, 'ublaboo_datagrid.all')) /* line 397 */ ?>

<?php
				}
				else {
					?>												<?php echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, 'ublaboo_datagrid.items')) /* line 399 */ ?>: <?php
					echo LR\Filters::escapeHtmlText($paginator->getOffset() > 0 ? $paginator->getOffset() + 1 : ($paginator->getItemCount() > 0 ? 1 : 0)) /* line 399 */ ?> - <?php
					echo LR\Filters::escapeHtmlText(sizeof($rows) + $paginator->getOffset()) /* line 399 */ ?>

												<?php echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, 'ublaboo_datagrid.from')) /* line 400 */ ?> <?php
					echo LR\Filters::escapeHtmlText($paginator->getItemCount()) /* line 400 */ ?>

											<?php
				}
?>)
										</small>
<?php
			}
?>
									</div>
									<div class="col-pagination text-center">
<?php
			/* line 408 */ $_tmp = $this->global->uiControl->getComponent("paginator");
			if ($_tmp instanceof Nette\Application\UI\IRenderable) $_tmp->redrawControl(null, false);
			$_tmp->render();
?>
									</div>
									<div class="col-per-page text-right">
<?php
			if ($filter_active) {
				?>										<a class="ajax btn btn-danger btn-sm reset-filter" href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("resetFilter!")) ?>"><?php
				echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, 'ublaboo_datagrid.reset_filter')) /* line 414 */ ?></a>
<?php
			}
			if ($control->isPaginated()) {
				?>											<?php
				$_input = is_object($filter['per_page']) ? $filter['per_page'] : end($this->global->formsStack)[$filter['per_page']];
				echo $_input->getControl()->addAttributes(['data-autosubmit-per-page' => TRUE, 'class' => 'form-control input-sm']) /* line 416 */ ?>

											<?php
				$_input = is_object($filter['per_page_submit']) ? $filter['per_page_submit'] : end($this->global->formsStack)[$filter['per_page_submit']];
				echo $_input->getControl()->addAttributes(['class' => 'datagrid-per-page-submit']) /* line 417 */ ?>

<?php
			}
?>
									</div>
								</td>
<?php
		}
?>
							</tr>
<?php
	}


	function blockInlineAddRow($_args)
	{
		extract($_args);
		$inlineAdd->onSetDefaults($filter['inline_add']);
		;
?>

	<tr class="datagrid-row-inline-add datagrid-row-inline-add-hidden">
<?php
		if ($hasGroupActions) {
?>		<td class="col-checkbox"></td>
<?php
		}
?>

<?php
		$iterations = 0;
		foreach ($columns as $key => $column) {
			$col = 'col-' . $key;
?>

<?php
			$td = clone $column->getElementForRender('td', $key);
			$td->class[] = 'datagrid-inline-edit';
			?>			<?php echo $td->startTag() /* line 443 */ ?>

<?php
			if (isset($filter['inline_add'][$key])) {
				if ($filter['inline_add'][$key] instanceof \Nette\Forms\Container) {
					$iterations = 0;
					foreach ($filter['inline_add'][$key]->getControls() as $inlineAddControl) {
						?>							<?php
						$_input = is_object($inlineAddControl) ? $inlineAddControl : end($this->global->formsStack)[$inlineAddControl];
						echo $_input->getControl() /* line 447 */ ?>

<?php
						$iterations++;
					}
				}
				else {
					?>						<?php
					$_input = is_object($filter['inline_add'][$key]) ? $filter['inline_add'][$key] : end($this->global->formsStack)[$filter['inline_add'][$key]];
					echo $_input->getControl() /* line 450 */ ?>

<?php
				}
			}
			?>			<?php echo $td->endTag() /* line 453 */ ?>

<?php
			$iterations++;
		}
?>

		<td class="col-action col-action-inline-edit">
			<?php
		$_input = is_object($filter['inline_add']['cancel']) ? $filter['inline_add']['cancel'] : end($this->global->formsStack)[$filter['inline_add']['cancel']];
		echo $_input->getControl() /* line 457 */ ?>

			<?php
		$_input = is_object($filter['inline_add']['submit']) ? $filter['inline_add']['submit'] : end($this->global->formsStack)[$filter['inline_add']['submit']];
		echo $_input->getControl() /* line 458 */ ?>

		</td>
	</tr>
<?php
	}


	function blockColumnsSummary($_args)
	{
		extract($_args);
?>

<?php
		$iterations = 0;
		foreach ($columns as $key => $column) {
			$td = $column->getElementForRender('td', $key);
?>

		<?php echo $td->startTag() /* line 469 */ ?>

			<?php echo LR\Filters::escapeHtmlText($columnsSummary->render($key)) /* line 470 */ ?>

		<?php echo $td->endTag() /* line 471 */ ?>

<?php
			$iterations++;
		}
?>

<?php
	}


	function blockAggregationFunctions($_args)
	{
		extract($_args);
?>

<?php
		$iterations = 0;
		foreach ($columns as $key => $column) {
			$td = $column->getElementForRender('td', $key);
?>

		<?php echo $td->startTag() /* line 482 */ ?>

<?php
			if ($aggregation_functions) {
				if (isset($aggregation_functions[$key])) {
					?>					<?php echo $aggregation_functions[$key]->renderResult() /* line 485 */ ?>

<?php
				}
			}
			else {
				?>				<?php echo $multiple_aggregation_function->renderResult($key) /* line 488 */ ?>

<?php
			}
			?>		<?php echo $td->endTag() /* line 490 */ ?>

<?php
			$iterations++;
		}
?>

<?php
	}


	function blockColumn_header($_args)
	{
		extract($_args);
		if ($column->isHeaderEscaped()) {
			if ($column instanceof \Nette\Utils\Html || !$column->isTranslatableHeader()) {
				?>			<?php echo $column->getName() /* line 499 */ ?>

<?php
			}
			else {
				?>			<?php echo call_user_func($this->filters->translate, $column->getName()) /* line 501 */ ?>

<?php
			}
		}
		else {
			if ($column instanceof \Nette\Utils\Html || !$column->isTranslatableHeader()) {
				?>			<?php echo LR\Filters::escapeHtmlText($column->getName()) /* line 505 */ ?>

<?php
			}
			else {
				?>			<?php echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, $column->getName())) /* line 507 */ ?>

<?php
			}
		}
		
	}


	function blockColumn_value($_args)
	{
		extract($_args);
		$col = 'col-' . $key;
		$item = $row->getItem();
?>

<?php
		if ($column->hasTemplate()) {
			/* line 518 */
			$this->createTemplate($column->getTemplate(), array_merge(['row' => $row, 'item' => $item, ], $column->getTemplateVariables(), []) + $this->params, "include")->renderToContentType('html');
		}
		else {
			if (isset($this->blockQueue["$col"])) {
				$this->renderBlock($col, ['item' => $item] + $this->params, 'html');
			}
			else {
				if ($column->isTemplateEscaped()) {
					?>				<?php echo LR\Filters::escapeHtmlText($column->render($row)) /* line 524 */ ?>

<?php
				}
				else {
					?>				<?php echo $column->render($row) /* line 526 */ ?>

<?php
				}
			}
		}
		
	}

}
