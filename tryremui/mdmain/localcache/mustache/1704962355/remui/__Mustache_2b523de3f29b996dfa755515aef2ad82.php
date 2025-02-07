<?php

class __Mustache_2b523de3f29b996dfa755515aef2ad82 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="popover-region collapsed ';
        $blockFunction = $context->findInBlock('classes');
        if (is_callable($blockFunction)) {
            $buffer .= call_user_func($blockFunction, $context);
        }
        $buffer .= '"
';
        $buffer .= $indent . '    ';
        $blockFunction = $context->findInBlock('attributes');
        if (is_callable($blockFunction)) {
            $buffer .= call_user_func($blockFunction, $context);
        }
        $buffer .= '
';
        $buffer .= $indent . '    data-region="popover-region">
';
        $buffer .= $indent . '    <div class="popover-region-toggle nav-link icon-no-margin"
';
        $buffer .= $indent . '        data-region="popover-region-toggle"
';
        $buffer .= $indent . '        role="button"
';
        $buffer .= $indent . '        aria-controls="popover-region-container-';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '"
';
        $buffer .= $indent . '        aria-haspopup="true"
';
        $buffer .= $indent . '        aria-label="';
        $blockFunction = $context->findInBlock('togglelabel');
        if (is_callable($blockFunction)) {
            $buffer .= call_user_func($blockFunction, $context);
        } else {
            $value = $context->find('str');
            $buffer .= $this->section8b664e6398e53f993cf581dd926d5784($context, $indent, $value);
        }
        $buffer .= '"
';
        $buffer .= $indent . '        tabindex="0">
';
        $buffer .= $indent . '        ';
        $blockFunction = $context->findInBlock('togglecontent');
        if (is_callable($blockFunction)) {
            $buffer .= call_user_func($blockFunction, $context);
        }
        $buffer .= '
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    <div ';
        $blockFunction = $context->findInBlock('containerattributes');
        if (is_callable($blockFunction)) {
            $buffer .= call_user_func($blockFunction, $context);
        }
        $buffer .= '
';
        $buffer .= $indent . '        id="popover-region-container-';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '"
';
        $buffer .= $indent . '        class="popover-region-container"
';
        $buffer .= $indent . '        data-region="popover-region-container"
';
        $buffer .= $indent . '        aria-expanded="false"
';
        $buffer .= $indent . '        aria-hidden="true"
';
        $buffer .= $indent . '        aria-label="';
        $blockFunction = $context->findInBlock('containerlabel');
        if (is_callable($blockFunction)) {
            $buffer .= call_user_func($blockFunction, $context);
        }
        $buffer .= '"
';
        $buffer .= $indent . '        role="region">
';
        $buffer .= $indent . '        <div class="popover-region-header-container">
';
        $buffer .= $indent . '            <h3 class="popover-region-header-text h-semibold-4" data-region="popover-region-header-text">';
        $blockFunction = $context->findInBlock('headertext');
        if (is_callable($blockFunction)) {
            $buffer .= call_user_func($blockFunction, $context);
        }
        $buffer .= '</h3>
';
        $buffer .= $indent . '            <div class="popover-region-header-actions" data-region="popover-region-header-actions">';
        $blockFunction = $context->findInBlock('headeractions');
        if (is_callable($blockFunction)) {
            $buffer .= call_user_func($blockFunction, $context);
        }
        $buffer .= '</div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <div class="popover-region-content-container" data-region="popover-region-content-container">
';
        $buffer .= $indent . '            <div class="popover-region-content" data-region="popover-region-content">
';
        $buffer .= $indent . '                ';
        $blockFunction = $context->findInBlock('content');
        if (is_callable($blockFunction)) {
            $buffer .= call_user_func($blockFunction, $context);
        }
        $buffer .= '
';
        $buffer .= $indent . '            </div>
';
        if ($partial = $this->mustache->loadPartial('core/loading')) {
            $buffer .= $partial->renderInternal($context, $indent . '            ');
        }
        $buffer .= $indent . '        </div>
';
        $blockFunction = $context->findInBlock('anchor');
        if (is_callable($blockFunction)) {
            $buffer .= call_user_func($blockFunction, $context);
        } else {
            $value = $context->findDot('urls.seeall');
            $buffer .= $this->section6cbbc580a735cbca6d2096dc857ed850($context, $indent, $value);
        }
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section8b664e6398e53f993cf581dd926d5784(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'showpopovermenu';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'showpopovermenu';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEfe86c78140769c4f3c25d6124c7742d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' viewallnotifications, theme_remui ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' viewallnotifications, theme_remui ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6cbbc580a735cbca6d2096dc857ed850(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <a class="see-all-link"
                    href="{{{.}}}">
                    <div class="popover-region-footer-container">
                        <div class="popover-region-seeall-text text-link-regular">{{#str}} viewallnotifications, theme_remui {{/str}}</div>
                    </div>
                </a>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <a class="see-all-link"
';
                $buffer .= $indent . '                    href="';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '">
';
                $buffer .= $indent . '                    <div class="popover-region-footer-container">
';
                $buffer .= $indent . '                        <div class="popover-region-seeall-text text-link-regular">';
                $value = $context->find('str');
                $buffer .= $this->sectionEfe86c78140769c4f3c25d6124c7742d($context, $indent, $value);
                $buffer .= '</div>
';
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
