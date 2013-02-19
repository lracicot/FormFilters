<?php
/**
 * Copyright (c) 2012 Louis Racicot
 * 
 * Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation 
 * files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, 
 * modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software 
 * is furnished to do so, subject to the following conditions:
 * 
 * The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
 * 
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF 
 * MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE 
 * FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION 
 * WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 */

namespace lracicot\FormFilter\Widget;

require_once('FilterInterface.php');

class DateFilter implements Filter
{
    /**
     * The name of the filter
     *
     * @var string
     */
    private $name = '';
    
    /**
     * to sidplay in front of the field
     *
     * @var string
     */
    private $label = '';
    
    /**
     * The field on which the filter will be applied
     *
     * @var string
     */
    private $field = '';
    
    /**
     * The current value of the filter
     *
     * @var int
     */
    private $value = '';
    
    public function __construct(FieldAdapterInterface $fieldAdapter, $name, $label, $field)
    {
        $this->fieldAdapter = $fieldAdapter;
        $this->name = $name;
        $this->label = $label;
        $this->field = $field;
    }
    
    public function display()
    {
        return $this->label . ' ' . $this->fieldAdapter->getDateField($this->name.'Filter', $this->value, 'class="filter"');
    }
    
    public function applyFilter($model)
    {
        $model->where($this->field, $this->value);
    }
    
    public function setValue($value)
    {
        $this->value = $value;
    }
    
    public function getName()
    {
        return $this->name;
    }

    public function getLabel()
    {
        return $this->label;
    }

    public function getField()
    {
        return $this->field;
    }

    public function getValue()
    {
        return $this->value;
    }

    public function setLabel($label)
    {
        $this->label = $label;
    }

}