<?php

namespace Bootstrap\Components;
use \Bootstrap\Util;

class Nav extends \Bootstrap\Component {
	private $_structure = [
		'items' => [],
		'id' => '',
		'active' => ''
	];

	public function __construct($nav_items = [], $active = '') {
		$this->_init_structure($nav_items, $active);
	}

	private function _init_structure($nav_items, $active) {
		$this->_structure = Util::to_object($this->_structure);
		$this->_structure->items = $nav_items;
		$this->_structure->active = $active;
		$this->_structure->id = Util::create_id(true);
	}

	public function __get($name) {
		if (isset($this->_structure->{$name})) {
            return $this->_structure->{$name};
        }
        parent::err('Undefined structure property: '.$name);
        return null;
	}

	public function __set($name, $value) {
		if (isset($this->_structure->{$name})) {
            $this->_structure->{$name} = $value;
            return;
        }
		parent::err('Undefined structure property: '.$name);
	}

	public function __call($name, $args) {
		// return parent::_call($this, $this->_structure, $name, $args);
	}

	public function print_html($return = false) {
		$that = $this;
		$structure = $this->_structure;

		$nav_items = Util::get_value($structure->items, [
			'if_closure' => function($nav_items) use ($that) {
				return Util::run_callback($nav_items, [$that]);
			},
			'if_other' => function($nav_items) {
				parent::err('Nav:items requires array');
				return null;
			}
		]);

		if (!is_array($nav_items)) {
			parent::err("Nav:items requires array");
			return null;
		}

		$list_items = $this->parse_nav($nav_items);
		$result = parent::print_list($list_items, ['class' => 'nav-menu', 'attr' => ['id' => 'js-nav-menu']], true);

		if ($return) return $result;
		else echo $result;
	}

	private function parse_nav($items, &$parent_props = null) {
		if (!$items) return [];
		$structure = $this->_structure;

		$nav_items_list = [];
		foreach ($items as $name => $item) {
			$item_props = [
				'url' => '#',
				'url_target' => '',
				'icon' => '',
				'badge' =>  '',
				'title' => $name,
				'span' => null,
				'tags' => '',
				'label' => '',
				'active' => $name === $structure->active,
				'items' => [],
				'attr' => [],
				'class' => [],
				'li_class' => [],
				'group' => false
			];

			$item_props = Util::set_values($item_props, $item, 'title');

			if ($item_props['group']) {
				$nav_items_list[] = [
					'content' => $item_props['title'],
					'class' => 'nav-title'
				];

			} else {
				$icon = $item_props['icon'] ? '<i class="'.$item_props['icon'].'"></i>' : '';
				$title = $item_props['title'];
				$tags = trim(strtolower($title.' '.$item_props['tags']));
				$is_active = $item_props['active'];

				if ($parent_props) {
					$i18n = $parent_props['i18n'].'_'.strtolower(str_replace(' ', '_', $title));
					$tags = $parent_props['tags'].' '.$tags;

					if ($is_active) $parent_props['active'] = true;
				} else {
					$i18n = 'nav.'.strtolower(str_replace(' ', '_', $title));
				}

				$title_htm = '<span class="nav-link-text" data-i18n="'.$i18n.'">'.$title.'</span>';

				if ($item_props['span']) {
					$span_prop = Util::set_values(['class' => '', 'text' => ''], $item_props['span'], 'text');
					$title_htm .= '<span class="'.$span_prop['class'].'">'.$span_prop['text'].'</span>';
				}

				$li_classes = [];

				$submenu_htm = '';
				if ($item_props['items']) {
					$item_props['i18n'] = $i18n;
					$item_props['tags'] = $tags;

					$submenu_items = $this->parse_nav(is_string($item_props['items']) ? [$item_props['items']] : $item_props['items'], $item_props);
					$submenu_htm = parent::print_list($submenu_items, null, true);

					if ($is_active || $item_props['active']) {
						$li_classes[] = 'active open';
						if ($parent_props) $parent_props['active'] = true;
					}

				} else if ($is_active) {
					$li_classes[] = 'active';
				}

				if ($item_props['li_class']) {
					if (is_string($item_props['li_class'])) $li_classes[] = $item_props['li_class'];
					else if (is_array($item_props['li_class'])) $li_classes = array_merge($li_classes, $item_props['li_class']);
				}

				$item_class = $item_props['class'] ? ' '.implode(' ', $item_props['class']) : '';
				$item_props['attr']['class'] = ($item_props['attr']['class'] ?? '').' '.$item_class;
				$item_props['attr']['data-filter-tags'] = $tags;

				$nav_item_attrs = array_map(function($attr, $value) {
					return $attr.'="'.escape($value).'"';
				}, array_keys($item_props['attr']), $item_props['attr']);

				$nav_htm = '
					<a href="'.escape($item_props['url']).'" title="'.$title.'" '.($item_props['url_target'] ? 'target="'.escape($item_props['url_target']).'"' : '').' '.implode(' ', $nav_item_attrs).'>
						'.$icon.'
						'.$title_htm.'
					</a>
					'.$submenu_htm.'
				';

				$nav_items_list[] = [
					'content' => $nav_htm,
					'class' => implode(' ', $li_classes)
				];
			}

		}

		return $nav_items_list;
	}
}