<?php

namespace user\Pages;

use \Yard\Page;

class Guest extends Page
{
    public function js() {
        return <<<JS

JS;

    }
    public function render()
    {
        return <<<HTML
<div>
ok edeh
</div>
HTML;

    }
}