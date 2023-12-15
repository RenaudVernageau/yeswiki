<?php

namespace YesWiki\CollaborativeTools\Field;

use Psr\Container\ContainerInterface;
use YesWiki\Bazar\Field\EnumField;

/**
 * @Field({"collaborativetools"})
 */
class CollaborativeToolsField extends EnumField
{
    protected $options;
    public function __construct(array $values, ContainerInterface $services)
    {
        parent::__construct($values, $services);

        $this->options = [
            'hedgeDoc' => 'HedgeDoc',
            'scrumblr' => 'Scrumblr',
        ];
    }

    protected function renderInput($entry)
    {
        return $this->render('@collaborativeTools/inputs/collaborativetools.twig', [
            'value' => $this->getValue($entry),
            'options' => $this->options
        ]);
    }

    protected function renderStatic($entry)
    {
        $value = $this->getValue($entry);
        if (!$value) return "";

        if ($value == "hedgeDoc") {
            return $this->render('@collaborativeTools/hedgedoc.twig', [
                'url' => 'http://localhost:3000/new',
                'text' => "",
                'hovertext' => "",
                'icon' => "",
                'class' => "btn btn-primary",
                'newwindow' => "",
            ]);
        } else if ($value == "scrumblr") {
            return $this->render('@collaborativeTools/scrumblr.twig', [
                'url' => 'http://localhost:8081/' . $entry['bf_titre'],
            ]);
        }
    }
}
