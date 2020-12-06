<?php

namespace frontend\widgets;

use phpDocumentor\Reflection\Types\This;
use yii\base\Widget;
use yii\helpers\Html;
use function Symfony\Component\String\s;

class SidebarWidget extends Widget
{
    public $categories;

    public function init()
    {
        parent::init();


    }

    public function run()
    {
        return $this->makeHtml();
    }

    public function makeHtml()
    {
        $str='<ul id="sideManu" class="nav nav-tabs nav-stacked">';

        foreach ($this->categories as $category)
        {
            $str.='<li class="subMenu open"><a>'.$category->name.'</a><ul>';
            foreach ($category->subCategory as $item)
            {
                 $str.='<li><a class="active" href="'. \yii\helpers\Url::to(['category/view','id'=>$item->id]) .'"><i class="icon-chevron-right"></i>'.$item->name.'</a></li>';
            }
            $str.="</ul>";

        }
        $str.="</ul>";

        return $str;

    }
}