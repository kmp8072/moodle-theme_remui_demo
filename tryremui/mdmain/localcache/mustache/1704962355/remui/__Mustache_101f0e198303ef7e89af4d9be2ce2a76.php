<?php

class __Mustache_101f0e198303ef7e89af4d9be2ce2a76 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $value = $context->find('haschildren');
        $buffer .= $this->section9c339741a43d1ee93561b97f459ed368($context, $indent, $value);
        $value = $context->find('haschildren');
        if (empty($value)) {
            
            $buffer .= $indent . '    <li data-key="';
            $value = $this->resolveValue($context->find('key'), $context);
            $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
            $buffer .= '" class="nav-item" role="none" data-forceintomoremenu="';
            $value = $context->find('forceintomoremenu');
            $buffer .= $this->section03a2cb78adf693fb240638cbbc7ea15e($context, $indent, $value);
            $value = $context->find('forceintomoremenu');
            if (empty($value)) {
                
                $buffer .= 'false';
            }
            $buffer .= '" title="';
            $value = $this->resolveValue($context->find('text'), $context);
            $buffer .= ($value === null ? '' : $value);
            $buffer .= '">
';
            $value = $context->find('istablist');
            $buffer .= $this->section61df315528531ca7ea0e8759ba4d1915($context, $indent, $value);
            $value = $context->find('istablist');
            if (empty($value)) {
                
                $value = $context->find('is_action_link');
                $buffer .= $this->section5c7c069b9c996c9dfc763e231ce30d22($context, $indent, $value);
                $value = $context->find('is_action_link');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                <a role="menuitem" class="nav-link ';
                    $value = $context->find('isactive');
                    $buffer .= $this->section5749c750acb0d7477dd5257d00cc6d53($context, $indent, $value);
                    $buffer .= ' ';
                    $value = $context->find('classes');
                    $buffer .= $this->section5e96ec75439305fc88c78e77946e47bb($context, $indent, $value);
                    $buffer .= '"
';
                    $buffer .= $indent . '                    href="';
                    $value = $this->resolveValue($context->find('url'), $context);
                    $buffer .= ($value === null ? '' : $value);
                    $value = $this->resolveValue($context->find('action'), $context);
                    $buffer .= ($value === null ? '' : $value);
                    $buffer .= '"
';
                    $buffer .= $indent . '                    ';
                    $value = $context->find('isactive');
                    $buffer .= $this->sectionFc0c0b051caebb6243b5c2bd6d728967($context, $indent, $value);
                    $buffer .= '
';
                    $buffer .= $indent . '                    ';
                    $value = $context->find('isactive');
                    if (empty($value)) {
                        
                        $buffer .= 'tabindex="-1"';
                    }
                    $buffer .= '
';
                    $buffer .= $indent . '                >
';
                    $buffer .= $indent . '                    ';
                    $value = $this->resolveValue($context->find('text'), $context);
                    $buffer .= ($value === null ? '' : $value);
                    $buffer .= '
';
                    $buffer .= $indent . '                </a>
';
                }
            }
            $buffer .= $indent . '    </li>
';
        }

        return $buffer;
    }

    private function section03a2cb78adf693fb240638cbbc7ea15e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'true';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'true';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5749c750acb0d7477dd5257d00cc6d53(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'active';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'active';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5e96ec75439305fc88c78e77946e47bb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{.}} ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFc0c0b051caebb6243b5c2bd6d728967(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'aria-current="true"';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'aria-current="true"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2ede42a3e0907a1524e964fa0e81dfb2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'aria-label="{{srtext}}"';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'aria-label="';
                $value = $this->resolveValue($context->find('srtext'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section801bcd19aebdc5786ad20c4358b88203(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{name}}="{{value}}"';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '="';
                $value = $this->resolveValue($context->find('value'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section07d251a7ffeeced77bf47b8d72b494d6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            {{> core/actions }}
                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('core/actions')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                            ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5b90c39bf6542947f9ba508fdc1a9660(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <a class="dropdown-item" role="menuitem" {{#actionattributes}}{{name}}="{{value}}"{{/actionattributes}} href="{{{url}}}{{{action}}}"
                            data-disableactive="true" tabindex="-1"
                        >
                            {{{text}}}
                        </a>
                        {{#action_link_actions}}
                            {{> core/actions }}
                        {{/action_link_actions}}
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <a class="dropdown-item" role="menuitem" ';
                $value = $context->find('actionattributes');
                $buffer .= $this->section801bcd19aebdc5786ad20c4358b88203($context, $indent, $value);
                $buffer .= ' href="';
                $value = $this->resolveValue($context->find('url'), $context);
                $buffer .= ($value === null ? '' : $value);
                $value = $this->resolveValue($context->find('action'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '"
';
                $buffer .= $indent . '                            data-disableactive="true" tabindex="-1"
';
                $buffer .= $indent . '                        >
';
                $buffer .= $indent . '                            ';
                $value = $this->resolveValue($context->find('text'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                        </a>
';
                $value = $context->find('action_link_actions');
                $buffer .= $this->section07d251a7ffeeced77bf47b8d72b494d6($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8754538c7bd3704980215db1258c2074(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <div class="dropdown-divider"></div>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <div class="dropdown-divider"></div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section87b174c57921adc2bbf3586fa202f7f1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                {{^divider}}
                    {{#is_action_link}}
                        <a class="dropdown-item" role="menuitem" {{#actionattributes}}{{name}}="{{value}}"{{/actionattributes}} href="{{{url}}}{{{action}}}"
                            data-disableactive="true" tabindex="-1"
                        >
                            {{{text}}}
                        </a>
                        {{#action_link_actions}}
                            {{> core/actions }}
                        {{/action_link_actions}}
                    {{/is_action_link}}
                    {{^is_action_link}}
                        <a class="dropdown-item" role="menuitem" href="{{{url}}}{{{action}}}" {{#isactive}}aria-current="true"{{/isactive}} tabindex="-1">{{{text}}}</a>
                    {{/is_action_link}}
                {{/divider}}
                {{#divider}}
                    <div class="dropdown-divider"></div>
                {{/divider}}
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('divider');
                if (empty($value)) {
                    
                    $value = $context->find('is_action_link');
                    $buffer .= $this->section5b90c39bf6542947f9ba508fdc1a9660($context, $indent, $value);
                    $value = $context->find('is_action_link');
                    if (empty($value)) {
                        
                        $buffer .= $indent . '                        <a class="dropdown-item" role="menuitem" href="';
                        $value = $this->resolveValue($context->find('url'), $context);
                        $buffer .= ($value === null ? '' : $value);
                        $value = $this->resolveValue($context->find('action'), $context);
                        $buffer .= ($value === null ? '' : $value);
                        $buffer .= '" ';
                        $value = $context->find('isactive');
                        $buffer .= $this->sectionFc0c0b051caebb6243b5c2bd6d728967($context, $indent, $value);
                        $buffer .= ' tabindex="-1">';
                        $value = $this->resolveValue($context->find('text'), $context);
                        $buffer .= ($value === null ? '' : $value);
                        $buffer .= '</a>
';
                    }
                }
                $value = $context->find('divider');
                $buffer .= $this->section8754538c7bd3704980215db1258c2074($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6a7bcc0727a2b0de3aed303d36164585(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                {{{categorytreedesign}}}
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                ';
                $value = $this->resolveValue($context->find('categorytreedesign'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9c339741a43d1ee93561b97f459ed368(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <li  data-key="{{key}}" class="dropdown nav-item" role="none" data-forceintomoremenu="{{#forceintomoremenu}}true{{/forceintomoremenu}}{{^forceintomoremenu}}false{{/forceintomoremenu}}" >
        <a class="dropdown-toggle nav-link {{#isactive}}active{{/isactive}} {{#classes}}{{.}} {{/classes}}" id="drop-down-{{moremenuid}}" role="menuitem" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false" href="#" aria-controls="drop-down-menu-{{moremenuid}}"
            {{#isactive}}aria-current="true"{{/isactive}}
            {{^isactive}}tabindex="-1"{{/isactive}}
            {{#srtext}}aria-label="{{srtext}}"{{/srtext}} title="{{{text}}}"
        >
            {{{text}}}
        </a>
        <div class="dropdown-menu" role="menu" id="drop-down-menu-{{moremenuid}}" aria-labelledby="drop-down-{{moremenuid}}">
            {{#children}}
                {{^divider}}
                    {{#is_action_link}}
                        <a class="dropdown-item" role="menuitem" {{#actionattributes}}{{name}}="{{value}}"{{/actionattributes}} href="{{{url}}}{{{action}}}"
                            data-disableactive="true" tabindex="-1"
                        >
                            {{{text}}}
                        </a>
                        {{#action_link_actions}}
                            {{> core/actions }}
                        {{/action_link_actions}}
                    {{/is_action_link}}
                    {{^is_action_link}}
                        <a class="dropdown-item" role="menuitem" href="{{{url}}}{{{action}}}" {{#isactive}}aria-current="true"{{/isactive}} tabindex="-1">{{{text}}}</a>
                    {{/is_action_link}}
                {{/divider}}
                {{#divider}}
                    <div class="dropdown-divider"></div>
                {{/divider}}
            {{/children}}
            {{#categorytreedesign}}
                {{{categorytreedesign}}}
            {{/categorytreedesign}}
        </div>
    </li>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <li  data-key="';
                $value = $this->resolveValue($context->find('key'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class="dropdown nav-item" role="none" data-forceintomoremenu="';
                $value = $context->find('forceintomoremenu');
                $buffer .= $this->section03a2cb78adf693fb240638cbbc7ea15e($context, $indent, $value);
                $value = $context->find('forceintomoremenu');
                if (empty($value)) {
                    
                    $buffer .= 'false';
                }
                $buffer .= '" >
';
                $buffer .= $indent . '        <a class="dropdown-toggle nav-link ';
                $value = $context->find('isactive');
                $buffer .= $this->section5749c750acb0d7477dd5257d00cc6d53($context, $indent, $value);
                $buffer .= ' ';
                $value = $context->find('classes');
                $buffer .= $this->section5e96ec75439305fc88c78e77946e47bb($context, $indent, $value);
                $buffer .= '" id="drop-down-';
                $value = $this->resolveValue($context->find('moremenuid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" role="menuitem" data-toggle="dropdown"
';
                $buffer .= $indent . '            aria-haspopup="true" aria-expanded="false" href="#" aria-controls="drop-down-menu-';
                $value = $this->resolveValue($context->find('moremenuid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"
';
                $buffer .= $indent . '            ';
                $value = $context->find('isactive');
                $buffer .= $this->sectionFc0c0b051caebb6243b5c2bd6d728967($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '            ';
                $value = $context->find('isactive');
                if (empty($value)) {
                    
                    $buffer .= 'tabindex="-1"';
                }
                $buffer .= '
';
                $buffer .= $indent . '            ';
                $value = $context->find('srtext');
                $buffer .= $this->section2ede42a3e0907a1524e964fa0e81dfb2($context, $indent, $value);
                $buffer .= ' title="';
                $value = $this->resolveValue($context->find('text'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '"
';
                $buffer .= $indent . '        >
';
                $buffer .= $indent . '            ';
                $value = $this->resolveValue($context->find('text'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '        </a>
';
                $buffer .= $indent . '        <div class="dropdown-menu" role="menu" id="drop-down-menu-';
                $value = $this->resolveValue($context->find('moremenuid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" aria-labelledby="drop-down-';
                $value = $this->resolveValue($context->find('moremenuid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $value = $context->find('children');
                $buffer .= $this->section87b174c57921adc2bbf3586fa202f7f1($context, $indent, $value);
                $value = $context->find('categorytreedesign');
                $buffer .= $this->section6a7bcc0727a2b0de3aed303d36164585($context, $indent, $value);
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '    </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section987df7e610a2cfd3294b5eacfb9fa51b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    {{> core/actions }}
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('core/actions')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                    ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6c0a055c0d17310b659951195bc55985(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <a role="tab" class="nav-link {{#classes}}{{.}} {{/classes}}" href="{{tab}}" data-toggle="tab" data-text="{{{text}}}" data-disableactive="true" tabindex="-1">
                    {{{text}}}
                </a>
                {{#action_link_actions}}
                    {{> core/actions }}
                {{/action_link_actions}}
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <a role="tab" class="nav-link ';
                $value = $context->find('classes');
                $buffer .= $this->section5e96ec75439305fc88c78e77946e47bb($context, $indent, $value);
                $buffer .= '" href="';
                $value = $this->resolveValue($context->find('tab'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" data-toggle="tab" data-text="';
                $value = $this->resolveValue($context->find('text'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" data-disableactive="true" tabindex="-1">
';
                $buffer .= $indent . '                    ';
                $value = $this->resolveValue($context->find('text'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                </a>
';
                $value = $context->find('action_link_actions');
                $buffer .= $this->section987df7e610a2cfd3294b5eacfb9fa51b($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCe04cacc15f032e9e9f826b761c9b814(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'aria-selected="true"';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'aria-selected="true"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section61df315528531ca7ea0e8759ba4d1915(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{#is_action_link}}
                <a role="tab" class="nav-link {{#classes}}{{.}} {{/classes}}" href="{{tab}}" data-toggle="tab" data-text="{{{text}}}" data-disableactive="true" tabindex="-1">
                    {{{text}}}
                </a>
                {{#action_link_actions}}
                    {{> core/actions }}
                {{/action_link_actions}}
            {{/is_action_link}}
            {{^is_action_link}}
                <a role="tab" class="nav-link {{#isactive}}active{{/isactive}} {{#classes}}{{.}} {{/classes}}"
                    href="{{tab}}" data-toggle="tab" data-text="{{{text}}}"
                    {{#isactive}}aria-selected="true"{{/isactive}}
                    {{^isactive}}tabindex="-1"{{/isactive}}
                >
                    {{{text}}}
                </a>
            {{/is_action_link}}
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('is_action_link');
                $buffer .= $this->section6c0a055c0d17310b659951195bc55985($context, $indent, $value);
                $value = $context->find('is_action_link');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                <a role="tab" class="nav-link ';
                    $value = $context->find('isactive');
                    $buffer .= $this->section5749c750acb0d7477dd5257d00cc6d53($context, $indent, $value);
                    $buffer .= ' ';
                    $value = $context->find('classes');
                    $buffer .= $this->section5e96ec75439305fc88c78e77946e47bb($context, $indent, $value);
                    $buffer .= '"
';
                    $buffer .= $indent . '                    href="';
                    $value = $this->resolveValue($context->find('tab'), $context);
                    $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                    $buffer .= '" data-toggle="tab" data-text="';
                    $value = $this->resolveValue($context->find('text'), $context);
                    $buffer .= ($value === null ? '' : $value);
                    $buffer .= '"
';
                    $buffer .= $indent . '                    ';
                    $value = $context->find('isactive');
                    $buffer .= $this->sectionCe04cacc15f032e9e9f826b761c9b814($context, $indent, $value);
                    $buffer .= '
';
                    $buffer .= $indent . '                    ';
                    $value = $context->find('isactive');
                    if (empty($value)) {
                        
                        $buffer .= 'tabindex="-1"';
                    }
                    $buffer .= '
';
                    $buffer .= $indent . '                >
';
                    $buffer .= $indent . '                    ';
                    $value = $this->resolveValue($context->find('text'), $context);
                    $buffer .= ($value === null ? '' : $value);
                    $buffer .= '
';
                    $buffer .= $indent . '                </a>
';
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5c7c069b9c996c9dfc763e231ce30d22(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <a role="menuitem" class="nav-link {{#classes}}{{.}} {{/classes}}" {{#actionattributes}}{{name}}="{{value}}"{{/actionattributes}} href="{{{url}}}{{{action}}}" data-disableactive="true" tabindex="-1">
                    {{{text}}}
                </a>
                {{#action_link_actions}}
                    {{> core/actions }}
                {{/action_link_actions}}
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <a role="menuitem" class="nav-link ';
                $value = $context->find('classes');
                $buffer .= $this->section5e96ec75439305fc88c78e77946e47bb($context, $indent, $value);
                $buffer .= '" ';
                $value = $context->find('actionattributes');
                $buffer .= $this->section801bcd19aebdc5786ad20c4358b88203($context, $indent, $value);
                $buffer .= ' href="';
                $value = $this->resolveValue($context->find('url'), $context);
                $buffer .= ($value === null ? '' : $value);
                $value = $this->resolveValue($context->find('action'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" data-disableactive="true" tabindex="-1">
';
                $buffer .= $indent . '                    ';
                $value = $this->resolveValue($context->find('text'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                </a>
';
                $value = $context->find('action_link_actions');
                $buffer .= $this->section987df7e610a2cfd3294b5eacfb9fa51b($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
