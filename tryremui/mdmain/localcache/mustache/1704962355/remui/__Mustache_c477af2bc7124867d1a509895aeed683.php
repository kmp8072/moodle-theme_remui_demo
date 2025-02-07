<?php

class __Mustache_c477af2bc7124867d1a509895aeed683 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $value = $context->find('headerdisplaymultipage');
        $buffer .= $this->sectionF8125e4197fab82f289582ff9f331ff2($context, $indent, $value);
        $value = $context->find('headerdisplaymultipage');
        if (empty($value)) {
            
            $value = $context->find('sitehome');
            $buffer .= $this->section61ea6b258fdc623d31de52f7acbec40f($context, $indent, $value);
            $value = $context->find('sitehome');
            if (empty($value)) {
                
                $buffer .= $indent . '        <div class="d-flex align-items-center justify-content-between position-relative w-100">
';
                $buffer .= $indent . '            <h3 class="sectionid-';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '-title sectionname course-content-item d-flex align-self-stretch align-items-center mb-0 h-bold-3"
';
                $buffer .= $indent . '                id="coursecontentsection';
                $value = $this->resolveValue($context->find('num'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" data-for="section_title" data-id="';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" data-number="';
                $value = $this->resolveValue($context->find('num'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '                ';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '            </h3>
';
                $buffer .= $indent . '            <a role="button" data-toggle="collapse"
';
                $buffer .= $indent . '               href="#coursecontentcollapse';
                $value = $this->resolveValue($context->find('num'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"
';
                $buffer .= $indent . '               id="collapssesection';
                $value = $this->resolveValue($context->find('num'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"
';
                $buffer .= $indent . '               aria-expanded="';
                $value = $context->find('contentcollapsed');
                if (empty($value)) {
                    
                    $buffer .= 'true';
                }
                $value = $context->find('contentcollapsed');
                $buffer .= $this->section3d743337d1ee557b470226701b73da47($context, $indent, $value);
                $buffer .= '"
';
                $buffer .= $indent . '               aria-controls="coursecontentcollapse';
                $value = $this->resolveValue($context->find('num'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"
';
                $buffer .= $indent . '               class="border-0 p-0 m-0 btn icons-collapse-expand justify-content-center
';
                $buffer .= $indent . '                   ';
                $value = $context->find('editing');
                if (empty($value)) {
                    
                    $buffer .= ' stretched-link ';
                }
                $buffer .= '
';
                $buffer .= $indent . '                   ';
                $value = $context->find('contentcollapsed');
                $buffer .= $this->sectionE27d58bd82bf887495509fb3582d0729($context, $indent, $value);
                $buffer .= '"
';
                $buffer .= $indent . '               aria-label="';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '            <span class="expanded-icon icon-no-margin" title="';
                $value = $context->find('str');
                $buffer .= $this->section0ac795c23146489fad8f951c23f9a92a($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                <span class="edw-icon edw-icon-Down-Arrow large"></span>
';
                $buffer .= $indent . '            </span>
';
                $buffer .= $indent . '            <span class="collapsed-icon icon-no-margin" title="';
                $value = $context->find('str');
                $buffer .= $this->section8b5765485c94c190bf567731edb08c3a($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                <span class="dir-rtl-hide p-0">
';
                $buffer .= $indent . '                    <span class="edw-icon edw-icon-Right-Arrow large"></span>
';
                $buffer .= $indent . '                </span>
';
                $buffer .= $indent . '                <span class="dir-ltr-hide p-0">
';
                $buffer .= $indent . '                    <span class="edw-icon edw-icon-Left-Arrow large"></span>
';
                $buffer .= $indent . '                </span>
';
                $buffer .= $indent . '            </span>
';
                $buffer .= $indent . '            </a>
';
                $buffer .= $indent . '        </div>
';
            }
        }

        return $buffer;
    }

    private function sectionF8125e4197fab82f289582ff9f331ff2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <h3 class="sectionid-{{id}}-title sectionname">
        {{{title}}}
    </h3>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <h3 class="sectionid-';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '-title sectionname">
';
                $buffer .= $indent . '        ';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '    </h3>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section61ea6b258fdc623d31de52f7acbec40f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <h2 class="sectionid-{{id}}-title sectionname">
            {{{title}}}
        </h2>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <h2 class="sectionid-';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '-title sectionname">
';
                $buffer .= $indent . '            ';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '        </h2>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3d743337d1ee557b470226701b73da47(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'false';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'false';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE27d58bd82bf887495509fb3582d0729(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' collapsed ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' collapsed ';
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

}
