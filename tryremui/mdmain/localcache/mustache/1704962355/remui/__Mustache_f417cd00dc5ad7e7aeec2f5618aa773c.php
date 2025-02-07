<?php

class __Mustache_f417cd00dc5ad7e7aeec2f5618aa773c extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        if ($parent = $this->mustache->loadPartial('theme_remui/drawer')) {
            $context->pushBlockContext(array(
                'id' => array($this, 'block418062f7cddff2325809e7e7fe48066f'),
                'drawerclasses' => array($this, 'blockD38028d67780ee6f785cf8e213f0a779'),
                'drawercloseonresize' => array($this, 'blockE052079a625ca42b568ba24af19cc7eb'),
                'drawerheading' => array($this, 'block6f29cd456c8a78832467f1fe0d7e8681'),
                'drawercontent' => array($this, 'block47c160e1abc5834defc7f51f2a6e740d'),
                'drawerstate' => array($this, 'blockA1dd4f2e68d7796ac435ab08723145ef'),
            ));
            $buffer .= $parent->renderInternal($context, $indent);
            $context->popBlockContext();
        }

        return $buffer;
    }

    private function section224a34078da1bb2a5ddb06d3d16a6347(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <img src="{{output.get_compact_logo_url}}" class="logo py-1 h-100" alt="{{sitename}}">
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '            <img src="';
                $value = $this->resolveValue($context->findDot('output.get_compact_logo_url'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class="logo py-1 h-100" alt="';
                $value = $this->resolveValue($context->find('sitename'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0ac795c23146489fad8f951c23f9a92a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' collapse, core ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' collapse, core ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8b5765485c94c190bf567731edb08c3a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' expand, core ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' expand, core ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section183d1b18f6962f78786d1ff42ce0fc45(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        {{^divider}}
                             <a href="{{{url}}}" class="list-group-item list-group-item-action">{{{text}}}</a>
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
                    
                    $buffer .= $indent . '                             <a href="';
                    $value = $this->resolveValue($context->find('url'), $context);
                    $buffer .= ($value === null ? '' : $value);
                    $buffer .= '" class="list-group-item list-group-item-action">';
                    $value = $this->resolveValue($context->find('text'), $context);
                    $buffer .= ($value === null ? '' : $value);
                    $buffer .= '</a>
';
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEe43ed2dc0768c319f03c49c929378d5(Mustache_Context $context, $indent, $value)
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
                
                $buffer .= $indent . '                        ';
                $value = $this->resolveValue($context->find('categorytreedesign'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0a751dcae1214ccc47be41c53adf21c1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <a id="drop-down-{{sort}}" href="#" class="list-group-item list-group-item-action icons-collapse-expand collapsed d-flex justify-content-between {{key}}" data-toggle="collapse" data-target="#drop-down-menu-{{sort}}" aria-expanded="false" aria-controls="drop-down-menu-{{sort}}">
                    {{{text}}}
                    <span class=" expanded-icon icon-no-margin ">
                       <span class="edw-icon edw-icon-UpArrow"></span>
                        <span class="sr-only">
                            {{#str}} collapse, core {{/str}}
                        </span>
                    </span>
                    <span class="collapsed-icon icon-no-margin ">
                        <span class="edw-icon edw-icon-Down-Arrow"></span>
                        <span class="sr-only">
                            {{#str}} expand, core {{/str}}
                        </span>
                    </span>
                </a>
                <div class="collapse list-group-item p-0 border-0" role="menu" id="drop-down-menu-{{sort}}" aria-labelledby="drop-down-{{sort}}">
                    {{#children}}
                        {{^divider}}
                             <a href="{{{url}}}" class="list-group-item list-group-item-action">{{{text}}}</a>
                        {{/divider}}
                    {{/children}}
                    {{#categorytreedesign}}
                        {{{categorytreedesign}}}
                    {{/categorytreedesign}}
                </div>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <a id="drop-down-';
                $value = $this->resolveValue($context->find('sort'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" href="#" class="list-group-item list-group-item-action icons-collapse-expand collapsed d-flex justify-content-between ';
                $value = $this->resolveValue($context->find('key'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" data-toggle="collapse" data-target="#drop-down-menu-';
                $value = $this->resolveValue($context->find('sort'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" aria-expanded="false" aria-controls="drop-down-menu-';
                $value = $this->resolveValue($context->find('sort'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '                    ';
                $value = $this->resolveValue($context->find('text'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                    <span class=" expanded-icon icon-no-margin ">
';
                $buffer .= $indent . '                       <span class="edw-icon edw-icon-UpArrow"></span>
';
                $buffer .= $indent . '                        <span class="sr-only">
';
                $buffer .= $indent . '                            ';
                $value = $context->find('str');
                $buffer .= $this->section0ac795c23146489fad8f951c23f9a92a($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                        </span>
';
                $buffer .= $indent . '                    </span>
';
                $buffer .= $indent . '                    <span class="collapsed-icon icon-no-margin ">
';
                $buffer .= $indent . '                        <span class="edw-icon edw-icon-Down-Arrow"></span>
';
                $buffer .= $indent . '                        <span class="sr-only">
';
                $buffer .= $indent . '                            ';
                $value = $context->find('str');
                $buffer .= $this->section8b5765485c94c190bf567731edb08c3a($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                        </span>
';
                $buffer .= $indent . '                    </span>
';
                $buffer .= $indent . '                </a>
';
                $buffer .= $indent . '                <div class="collapse list-group-item p-0 border-0" role="menu" id="drop-down-menu-';
                $value = $this->resolveValue($context->find('sort'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" aria-labelledby="drop-down-';
                $value = $this->resolveValue($context->find('sort'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $value = $context->find('children');
                $buffer .= $this->section183d1b18f6962f78786d1ff42ce0fc45($context, $indent, $value);
                $value = $context->find('categorytreedesign');
                $buffer .= $this->sectionEe43ed2dc0768c319f03c49c929378d5($context, $indent, $value);
                $buffer .= $indent . '                </div>
';
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

    private function sectionB42412606412096fd409a7efc341638d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                {{#haschildren}}
                <a id="drop-down-{{sort}}" href="#" class="list-group-item list-group-item-action icons-collapse-expand collapsed d-flex justify-content-between {{key}}" data-toggle="collapse" data-target="#drop-down-menu-{{sort}}" aria-expanded="false" aria-controls="drop-down-menu-{{sort}}">
                    {{{text}}}
                    <span class=" expanded-icon icon-no-margin ">
                       <span class="edw-icon edw-icon-UpArrow"></span>
                        <span class="sr-only">
                            {{#str}} collapse, core {{/str}}
                        </span>
                    </span>
                    <span class="collapsed-icon icon-no-margin ">
                        <span class="edw-icon edw-icon-Down-Arrow"></span>
                        <span class="sr-only">
                            {{#str}} expand, core {{/str}}
                        </span>
                    </span>
                </a>
                <div class="collapse list-group-item p-0 border-0" role="menu" id="drop-down-menu-{{sort}}" aria-labelledby="drop-down-{{sort}}">
                    {{#children}}
                        {{^divider}}
                             <a href="{{{url}}}" class="list-group-item list-group-item-action">{{{text}}}</a>
                        {{/divider}}
                    {{/children}}
                    {{#categorytreedesign}}
                        {{{categorytreedesign}}}
                    {{/categorytreedesign}}
                </div>
                {{/haschildren}}
                {{^haschildren}}
                <a href="{{{url}}}" class="list-group-item list-group-item-action {{#isactive}}active{{/isactive}} {{#classes}}{{.}} {{/classes}} {{key}}" {{#isactive}}aria-current="true"{{/isactive}}>
                    {{{text}}}
                </a>
                {{/haschildren}}
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('haschildren');
                $buffer .= $this->section0a751dcae1214ccc47be41c53adf21c1($context, $indent, $value);
                $value = $context->find('haschildren');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                <a href="';
                    $value = $this->resolveValue($context->find('url'), $context);
                    $buffer .= ($value === null ? '' : $value);
                    $buffer .= '" class="list-group-item list-group-item-action ';
                    $value = $context->find('isactive');
                    $buffer .= $this->section5749c750acb0d7477dd5257d00cc6d53($context, $indent, $value);
                    $buffer .= ' ';
                    $value = $context->find('classes');
                    $buffer .= $this->section5e96ec75439305fc88c78e77946e47bb($context, $indent, $value);
                    $buffer .= ' ';
                    $value = $this->resolveValue($context->find('key'), $context);
                    $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                    $buffer .= '" ';
                    $value = $context->find('isactive');
                    $buffer .= $this->sectionFc0c0b051caebb6243b5c2bd6d728967($context, $indent, $value);
                    $buffer .= '>
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

    public function block418062f7cddff2325809e7e7fe48066f($context)
    {
        $indent = $buffer = '';
        $buffer .= $indent . 'theme_remui-drawers-primary';
    
        return $buffer;
    }

    public function blockD38028d67780ee6f785cf8e213f0a779($context)
    {
        $indent = $buffer = '';
        $buffer .= 'drawer drawer-left drawer-primary';
    
        return $buffer;
    }

    public function blockE052079a625ca42b568ba24af19cc7eb($context)
    {
        $indent = $buffer = '';
        $buffer .= '1';
    
        return $buffer;
    }

    public function block6f29cd456c8a78832467f1fe0d7e8681($context)
    {
        $indent = $buffer = '';
        $value = $context->findDot('output.should_display_navbar_logo');
        $buffer .= $this->section224a34078da1bb2a5ddb06d3d16a6347($context, $indent, $value);
        $value = $context->findDot('output.should_display_navbar_logo');
        if (empty($value)) {
            
            $buffer .= $indent . '            ';
            $value = $this->resolveValue($context->find('sitename'), $context);
            $buffer .= ($value === null ? '' : $value);
            $buffer .= '
';
        }
    
        return $buffer;
    }

    public function block47c160e1abc5834defc7f51f2a6e740d($context)
    {
        $indent = $buffer = '';
        $buffer .= $indent . '        <div class="list-group">
';
        $value = $context->find('mobileprimarynav');
        $buffer .= $this->sectionB42412606412096fd409a7efc341638d($context, $indent, $value);
        $buffer .= $indent . '        </div>
';
    
        return $buffer;
    }

    public function blockA1dd4f2e68d7796ac435ab08723145ef($context)
    {
        $indent = $buffer = '';
        $buffer .= $indent . 'show-drawer-primary';
    
        return $buffer;
    }
}
