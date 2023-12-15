<?php

/*
 * This file is part of the YesWiki Extension twolevels.
 *
 * Authors : see README.md file that was distributed with this source code.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace YesWiki\CollaborativeTools;

use BazarAction;
use YesWiki\Core\YesWikiAction;

class BazarAction__ extends YesWikiAction
{
    public function run()
    {
        if (
            !$this->isWikiHibernated()
            && $this->wiki->UserIsAdmin()
            && isset($this->arguments[BazarAction::VARIABLE_VOIR]) && $this->arguments[BazarAction::VARIABLE_VOIR] === BazarAction::VOIR_FORMULAIRE
            && isset($this->arguments[BazarAction::VARIABLE_ACTION]) && in_array($this->arguments[BazarAction::VARIABLE_ACTION], [BazarAction::ACTION_FORM_CREATE, BazarAction::ACTION_FORM_EDIT], true)
        ) {
            $this->wiki->AddJavascriptFile('tools/collaborativeTools/presentation/javascripts/collaborativetools.js', false, true);
        }
    }
}
