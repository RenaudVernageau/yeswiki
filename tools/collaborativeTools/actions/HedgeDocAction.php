<?php

use YesWiki\Core\YesWikiAction;

class HedgeDocAction extends YesWikiAction
{
    public function formatArguments($arg)
    {
        $classes = "btn " . ($arg['class'] ?? "");
        $nobtn = $arg['nobtn'] ?? false;
        // If the button is a link, delete button classes
        if ($nobtn) {
            $classes = '';
        }

        return [
            'url' => $this->params->get('hedgedoc_url'),
            'text' => $arg['text'] ?? "",
            'hovertext' => $arg['hovertext'] ?? "",
            'icon' => $arg['icon'] ?? "",
            'class' => $classes,
            'newwindow' => $arg['newwindow'] ?? true,
        ];
    }

    public function run()
    {
        return $this->render('@collaborativeTools/hedgedoc.twig', [
            'url' => $this->arguments['url'],
            'text' => $this->arguments['text'],
            'hovertext' => $this->arguments['hovertext'],
            'icon' => $this->arguments['icon'],
            'class' => $this->arguments['class'],
            'newwindow' => $this->arguments['newwindow'],
        ]);
    }
}
