<?php
/**
 * Created by PhpStorm.
 * User: ChanD
 * Date: 07.10.14
 * Time: 12:40
 */
HTML::macro('popoverinfo', function ($text, $groupAttributes = 'class="infopopover"', $placement = 'right' ) {
    if (is_array($groupAttributes)) {
        $buildClass = array();
        foreach ($groupAttributes as $attrName => $attrValue) {
            $buildClass[] = sprintf('%s="%s"', $attrName, $attrValue);
        }
        $groupAttributes = join(" ", $buildClass);
        unset($buildClass);
    }
    return sprintf('<a data-toggle="popover" data-container="body" tabindex="0" data-trigger="focus" data-placement="%s" %s data-content="%s"> <i class="fa fa-info-circle popovericon"></i></a>',$placement,$groupAttributes,$text);
});
Form::macro('toggleSwitch', function ($groupName, $buttonName, $valueString, $groupAttributes, $checkedItem = 0, $buttonClass = 'btn-default') {
    $build = array();
    if (!empty($groupAttributes)) {
        if (is_array($groupAttributes)) {
            $buildClass = array();
            foreach ($groupAttributes as $attrName => $attrValue) {
                $buildClass[] = sprintf('%s="%s"', $attrName, $attrValue);
            }
            $groupAttributes = join(" ", $buildClass);
            unset($buildClass);
        }
    } else {
        $groupAttributes = '';
    }
    $build[] = sprintf('<div id="toggleSwitchButtonGroup" %s ondata-taget-name="%s" data-toggle="buttons">', $groupAttributes, $groupName);
    if (isset($buttonName)) {
        $count = count($buttonName);
        $defaultValue = true;
        if (isset($valueString) && $count <= count($valueString)) {
            $defaultValue = false;
        }
        for ($i = 0; $i < $count; $i++) {
            $isActive = ($checkedItem == $i) ? 'active' : '';
            $isChecked = ($checkedItem == $i) ? 'checked' : '';
            $value = ($defaultValue) ? $i : $valueString[$i];
            $build[] = sprintf('<label class="btn %s %s">', $buttonClass, $isActive);
            $build[] = sprintf('<input name="%s" id="%s-%s" value="%s" type="radio" %s>%s</label>', $groupName, $groupName, $i, $value, $isChecked, $buttonName[$i]);
        }
    }
    $build[] = '</div>';
    return join("\n", $build);
});