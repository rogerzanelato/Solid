<?php

namespace RogerZanelato\Solid\Tag;

class Ul
{
    public function render(string $content)
    {
        return "<ul>$content</ul>";
    }
}