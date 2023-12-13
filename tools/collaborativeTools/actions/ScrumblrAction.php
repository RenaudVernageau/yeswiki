<?php
use YesWiki\Core\YesWikiAction;

class ScrumblrAction extends YesWikiAction
{
    public function formatArguments($arg)
    {
        return [
            'url' => $arg['url'] ?? "http://localhost:8080/muffin",
        ];
    }

    public function run()
    {
        return $this->render('@collaborativeTools/Scrumblr.twig', [
            'url' => $this->arguments['url'],
        ]);
    }
}
