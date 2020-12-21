<?php

class __Mustache_7f601c86683a8922c307db5d316f8a53 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        if ($partial = $this->mustache->loadPartial('core_admin/setting_configfile')) {
            $buffer .= $partial->renderInternal($context);
        }

        return $buffer;
    }
}
