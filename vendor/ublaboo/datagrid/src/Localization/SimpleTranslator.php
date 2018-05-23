<?php

/**
 * @copyright   Copyright (c) 2015 ublaboo <ublaboo@paveljanda.com>
 * @author      Pavel Janda <me@paveljanda.com>
 * @package     Ublaboo
 */

namespace Ublaboo\DataGrid\Localization;

use Nette;
use Nette\SmartObject;

class SimpleTranslator implements Nette\Localization\ITranslator
{

	use SmartObject;

	/**
	 * @var array
	 */
	private $dictionary = [
		'ublaboo_datagrid.no_item_found_reset' => 'Nebyly nalezeny žádné položky. Filtr můžete resetovat',
		'ublaboo_datagrid.no_item_found' => 'Nebyly nalezeny žádné položky.',
		'ublaboo_datagrid.here' => 'zde',
		'ublaboo_datagrid.items' => 'Položky',
		'ublaboo_datagrid.all' => 'Vše',
		'ublaboo_datagrid.from' => 'z',
		'ublaboo_datagrid.reset_filter' => 'Resetovat filtr',
		'ublaboo_datagrid.group_actions' => 'Group actions',
		'ublaboo_datagrid.show' => 'Ukázat',
		'ublaboo_datagrid.add' => 'Přidat',
		'ublaboo_datagrid.edit' => 'Upravit',
		'ublaboo_datagrid.show_all_columns' => 'Show all columns',
		'ublaboo_datagrid.show_default_columns' => 'Show default columns',
		'ublaboo_datagrid.hide_column' => 'Hide column',
		'ublaboo_datagrid.action' => 'Akce',
		'ublaboo_datagrid.previous' => 'Předchozí',
		'ublaboo_datagrid.next' => 'Další',
		'ublaboo_datagrid.choose' => 'Choose',
		'ublaboo_datagrid.choose_input_required' => 'Group action text not allow empty value',
		'ublaboo_datagrid.execute' => 'Execute',
		'ublaboo_datagrid.save' => 'Uložit',
		'ublaboo_datagrid.cancel' => 'Zrušit',
		'ublaboo_datagrid.multiselect_choose' => 'Choose',
		'ublaboo_datagrid.multiselect_selected' => '{0} selected',
		'ublaboo_datagrid.filter_submit_button' => 'Filtrovat',
		'ublaboo_datagrid.show_filter' => 'Ukázat filtr',
		'ublaboo_datagrid.per_page_submit' => 'Změnit',
	];


	/**
	 * @param array $dictionary
	 */
	public function __construct($dictionary = null)
	{
		if (is_array($dictionary)) {
			$this->dictionary = $dictionary;
		}
	}


	/**
	 * Translates the given string
	 * 
	 * @param  string
	 * @param  int
	 * @return string
	 */
	public function translate($message, $count = null)
	{
		return isset($this->dictionary[$message]) ? $this->dictionary[$message] : $message;
	}


	/**
	 * Set translator dictionary
	 * @param array $dictionary
	 */
	public function setDictionary(array $dictionary)
	{
		$this->dictionary = $dictionary;
	}
}
