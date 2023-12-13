<?php

use YesWiki\Core\YesWikiAction;

class HedgeDocAction extends YesWikiAction
{
    public function formatArguments($arg)
    {
        return [
            'url' => $arg['url'] ?? "http://localhost:3000/new",
        ];
    }

    public function run()
    {
        return $this->render('@collaborativeTools/hedgedoc.twig', [
            'url' => $this->arguments['url'],
        ]);
    }
}
