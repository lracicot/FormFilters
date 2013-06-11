<?php
namespace lracicot\FormFilter\FieldAdapters;

interface FieldAdapterInterface
{
    public function getTextField($name, $value, $attr = false);
    public function getDateField($name, $value, $attr = false);
    public function getDropdown($name, $list, $value, $attr = false);
    public function getRadio($name, $list, $value, $attr = false);
    public function getCheckBox($name, $list, $values, $attr = false);
}