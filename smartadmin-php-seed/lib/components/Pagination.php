<?php

namespace Bootstrap\Components;
use \Bootstrap\Util;

class Pagination extends \Bootstrap\Component {
    private $_options_map = [
        'show_pages' => 5,
        'param' => 'page',
        'prev_text' => 'Previous',
        'next_text' => 'Next',
        'size' => 'sm',
        'link_attr' => ''
    ];

    private $_structure = [
        'id' => '',
        'page' => 1,
        'per_page' => 20,
        'items' => 0,
        'url' => '',
        'class' => ''
    ];

    public function __construct($per_page = 20, $items = 0, $options = []) {
        $this->_init_structure($per_page, $items, $options);
    }

    private function _init_structure($per_page, $items, $user_options) {
        $this->_structure = Util::to_object($this->_structure);
        $this->_structure->per_page = $per_page;
        $this->_structure->items = $items;
        $this->_structure->id = Util::create_id(true);
        $this->_structure->options = Util::set_values($this->_options_map, $user_options);
        $this->_structure->page = $_GET['page'] ?? 1;
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
        return parent::_call($this, $this->_structure, $name, $args);
    }

    public function offset() {
        // Assuming 20 items per page:
        // page 1 has an offset of 0    (1-1) * 20
        // page 2 has an offset of 20   (2-1) * 20
        // in other words, page 2 starts with item 21
        return ($this->_structure->page - 1) * $this->_structure->per_page;
    }

    public function pages() {
        return $this->_structure->per_page == 0 ? 0 : ceil($this->_structure->items / $this->_structure->per_page);
    }

    public function previous_page() {
        return max(0, $this->_structure->page - 1);
    }

    public function next_page() {
        return min($this->pages(), $this->_structure->page + 1);
    }

    public function has_previous_page() {
        return $this->previous_page() >= 1 ? true : false;
    }

    public function has_next_page() {
        return $this->next_page() <= $this->pages() ? true : false;
    }

    public function print_html($return = false) {
        $options = $this->_structure->options;

        parse_str($_SERVER['QUERY_STRING'], $get_array);
        unset($get_array[$options['param']]);
        unset($get_array['_pjax']);
        $query_string = http_build_query($get_array);

        $url = $this->_structure->url.($query_string ? '?'.$query_string : '');
        $url .= strpos($url, '?') === false ? '?' : '&';

        $param = $options['param'];
        $show_pages = $options['show_pages'];
        $total_pages = $this->pages();

        $current_page = $this->_structure->page;
        $start = $current_page - 2;
        $end = $current_page + 2;
        $htm_pages = [];
        $size = $options['size'];
        $link_attr = $options['link_attr'];

        $prev_html = $current_page == 1 ? '<span title="Previous" class="page-link">'.$options['prev_text'].'</span>' : '<a '.$link_attr.' title="Previous" class="page-link" href="'.escape($url.'page='.$this->previous_page()).'">'.$options['prev_text'].'</a>';
        $next_html = $current_page == $total_pages ? '<span title="Next" class="page-link">'.$options['next_text'].'</span>' : '<a '.$link_attr.' title="Next" class="page-link" href="'.escape($url.'page='.$this->next_page()).'">'.$options['next_text'].'</a>';

        if ($total_pages < $show_pages) {
            for ($page = 1; $page <= $total_pages; $page++) {
                $page_html = $current_page == $page ? '<span title="Page '.$page.'" class="page-link">'.$page.'</span>' : '<a '.$link_attr.' title="Page '.$page.'" href="'.escape($url.'page='.$page).'" class="page-link">'.$page.'</a>';
                $htm_pages[] = '<li class="'.($current_page == $page ? 'active' : '').' page-item">'.$page_html.'</li>';
            }

            $html = '
                <ul class="pagination pagination-'.$size.' '.$this->_structure->class.'">
                    <li class="page-item '.($current_page == 1 ? 'disabled' : '').'">'.$prev_html.'</li>
                    '.implode(PHP_EOL, $htm_pages).'
                    <li class="page-item '.($current_page == $total_pages ? 'disabled' : '').'">'.$next_html.'</li>
                </ul>
            ';
        } else {
            if ($current_page < $show_pages) {
                $start = 0;
                $end = $show_pages;
            } else if ($current_page > $total_pages - $show_pages) {
                $start = $total_pages - ($show_pages - 1);
                if ($start == $current_page) $start = $start - 2;
                $end = $total_pages;
            }

            $range = range($start, $end);
            for ($page = 1; $page <= $total_pages; $page++) {
                if ($page > 2 && in_array($page, $range) && $page < $total_pages - 1) {
                    $htm_pages[] = '<li class="'.($current_page == $page ? 'active' : '').' page-item"><a '.$link_attr.' title="Page '.$page.'" class="page-link" href="'.escape($url.$param.'='.$page).'">'.$page.'</a></li>';
                }
            }

            $prev_gap = !in_array(3, $range) ? '<li class="disabled page-item"><a href="#" class="page-link">&hellip;</a></li>' : '';
            $next_gap = !in_array($total_pages - 2, $range) ? '<li class="disabled page-item"><a href="#" class="page-link">&hellip;</a></li>' : '';

            $html = '
                <ul class="pagination pagination-'.$size.' '.$this->_structure->class.'">
                    <li class="'.($this->has_previous_page() ? '' : 'disabled').' page-item">'.$prev_html.'</li>
                    <li class="'.($current_page == 1 ? 'active' : '').' page-item"><a '.$link_attr.' title="Page 1" class="page-link" href="'.$url.$param.'=1">1</a></li>
                    <li class="'.($current_page == 2 ? 'active' : '').' page-item"><a '.$link_attr.' title="Page 2" class="page-link" href="'.$url.$param.'=2">2</a></li>
                    '.$prev_gap.'
                    '.implode(PHP_EOL, $htm_pages).'
                    '.$next_gap.'
                    <li class="'.($current_page == $total_pages - 1 ? 'active' : '').' page-item"><a '.$link_attr.' title="Page '.($total_pages - 1).'" class="page-link" href="'.escape($url.$param.'='.($total_pages - 1)).'">'.($total_pages - 1).'</a></li>
                    <li class="'.($current_page == $total_pages ? 'active' : '').' page-item"><a '.$link_attr.' title="Page '.$total_pages.'" class="page-link" href="'.escape($url.$param.'='.$total_pages).'">'.$total_pages.'</a></li>
                    <li class="'.($this->has_next_page() ? '' : 'disabled').' page-item">'.$next_html.'</li>
                </ul>';
        }

        if ($return) return $html;
        else echo $html;
    }
}