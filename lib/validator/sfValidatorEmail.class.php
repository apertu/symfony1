<?php

/*
 * This file is part of the symfony package.
 * (c) Fabien Potencier <fabien.potencier@symfony-project.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * sfValidatorEmail validates emails.
 *
 * @author     Fabien Potencier <fabien.potencier@symfony-project.com>
 */
class sfValidatorEmail extends sfValidatorRegex
{
    public const REGEX_EMAIL = '/^([^@\s]+)@((?:[-a-z0-9]+\.)+[a-z]{2,})$/i';

    /**
     * @see sfValidatorRegex
     */
    protected function configure($options = array(), $messages = array())
    {
        parent::configure($options, $messages);

        $this->setOption('pattern', self::REGEX_EMAIL);
    }
}
