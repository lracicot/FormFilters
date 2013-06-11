<?php
namespace lracicot\FormFilter\FieldAdapters;

class CI_FieldAdapter implements FieldAdapterInterface
{
    public function getCheckBox($name, $list, $values, $attr)
    {
        return form_checkbox($name, $list, $values, $attr);
    }

    public function getDateField($name, $value, $attr)
    {
        throw new Exception('Date field does not exist in CodeIgniter');
    }

    public function getDropdown($name, $list, $value, $attr = false)
    {
        return form_dropdown($name, $list, $value, $attr);
    }

    public function getRadio($name, $list, $value, $attr)
    {
        return form_radio($name, $list, $value, $attr);
    }

    public function getTextField($name, $value, $attr)
    {
        return form_text($name, $value, $attr);
    }
}