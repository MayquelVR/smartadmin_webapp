<?php

namespace Common;

class Markdown extends \Parsedown {
    public function blockHeader($line) {
        $block = parent::blockHeader($line);
        if (!$block) return null;

        $slugified_text = Util::slugify($block['element']['text']);

        return [
            'element' => [
                'name' => $block['element']['name'],
                'text' => [
                    [
                        'name' => 'a',
                        'text' => [
                            'name' => 'span',
                            'handler' => 'line',
                            'attributes' => ['class' => 'fal fa-link']
                        ],
                        'handler' => 'element',
                        'attributes' => ['href' => '#'.$slugified_text, 'class' => 'anchor']
                    ],
                    [
                        'name' => 'span',
                        'text' => $block['element']['text'],
                        'handler' => 'line'
                    ],
                ],
                'handler' => 'elements',
                'attributes' => ['id' => $slugified_text]
            ]
        ];
    }

    public function blockFencedCode($line) {
        $block = parent::blockFencedCode($line);
        if (!$block) return null;

        $class = $block['element']['text']['attributes']['class'] ?? '';
        $block['element']['text']['attributes'] = ['class' => $class.' hljs'];

        return $block;
    }
}