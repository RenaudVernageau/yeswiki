<?php

use YesWiki\Core\YesWikiAction;

class ScrumblrAction extends YesWikiAction
{
    public function formatArguments($arg)
    {
        return [
            'url' => $this->params->get('scrumblr_url') . ($arg['name'] ?? ""),
        ];
    }

    public function run()
    {
        return $this->render('@collaborativeTools/scrumblr.twig', [
            'url' => $this->arguments['url'],
        ]);
    }
}
