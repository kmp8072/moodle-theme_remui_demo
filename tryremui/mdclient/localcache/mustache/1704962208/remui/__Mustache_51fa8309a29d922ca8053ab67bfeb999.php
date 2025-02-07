<?php

class __Mustache_51fa8309a29d922ca8053ab67bfeb999 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '<div class="simplesearchform ';
        $value = $this->resolveValue($context->find('extraclasses'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">
';
        $value = $context->find('inform');
        if (empty($value)) {
            
            $buffer .= $indent . '    <form autocomplete="off" action="';
            $value = $this->resolveValue($context->find('action'), $context);
            $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
            $buffer .= '" method="get" accept-charset="utf-8" class="mform form-inline simplesearchform m-0">
';
        }
        $value = $context->find('hiddenfields');
        $buffer .= $this->section94a4232588cb3e7c5f3ca9b3123f8e23($context, $indent, $value);
        $buffer .= $indent . '    <div class="input-group">
';
        $buffer .= $indent . '        <div class="input-group-append">
';
        $buffer .= $indent . '            <button type="submit" class="btn ';
        $value = $context->find('btnclass');
        if (empty($value)) {
            
            $buffer .= 'btn-submit';
        }
        $buffer .= '  search-icon p-0 m-0 border-0">
';
        $buffer .= $indent . '                <span class="edw-icon edw-icon-Search"></span>
';
        $buffer .= $indent . '                <span class="sr-only">';
        $value = $this->resolveValue($context->find('searchstring'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '</span>
';
        $buffer .= $indent . '            </button>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <label for="searchinput-';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">
';
        $buffer .= $indent . '            <span class="sr-only">';
        $value = $this->resolveValue($context->find('searchstring'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '</span>
';
        $buffer .= $indent . '        </label>
';
        $buffer .= $indent . '        <input type="text"
';
        $buffer .= $indent . '           id="searchinput-';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '"
';
        $buffer .= $indent . '           class="form-control"
';
        $buffer .= $indent . '           placeholder="';
        $value = $this->resolveValue($context->find('searchstring'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '"
';
        $buffer .= $indent . '           aria-label="';
        $value = $this->resolveValue($context->find('searchstring'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '"
';
        $buffer .= $indent . '           name="';
        $value = $this->resolveValue($context->find('inputname'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '"
';
        $buffer .= $indent . '           data-region="input"
';
        $buffer .= $indent . '           autocomplete="off"
';
        $buffer .= $indent . '           value="';
        $value = $this->resolveValue($context->find('query'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '"
';
        $buffer .= $indent . '        >
';
        $buffer .= $indent . '    </div>
';
        $value = $context->find('otherfields');
        $buffer .= $this->sectionA58913bae96565fe5a2b538e8d0b4d44($context, $indent, $value);
        $value = $context->find('inform');
        if (empty($value)) {
            
            $buffer .= $indent . '    </form>
';
        }
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section94a4232588cb3e7c5f3ca9b3123f8e23(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <input type="hidden" name="{{ name }}" value="{{ value }}">
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <input type="hidden" name="';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" value="';
                $value = $this->resolveValue($context->find('value'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA58913bae96565fe5a2b538e8d0b4d44(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div  class="ml-2">{{{ otherfields }}}</div>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <div  class="ml-2">';
                $value = $this->resolveValue($context->find('otherfields'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
