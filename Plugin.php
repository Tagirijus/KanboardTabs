<?php

namespace Kanboard\Plugin\KanboardTabs;

use Kanboard\Core\Plugin\Base;


class Plugin extends Base
{
    public function initialize()
    {
        // CSS - Asset Hook
        // $this->template->hook->attach('template:layout:head', 'KanboardTabs:darkboard_css');
    }

    public function getPluginName()
    {
        return 'KanboardTabs';
    }

    public function getPluginDescription()
    {
        return t('This plugin simply adds some kind of tab-system to Kanboard.');
    }

    public function getPluginAuthor()
    {
        return 'Tagirijus';
    }

    public function getPluginVersion()
    {
        return '1.0.0';
    }

    public function getCompatibleVersion()
    {
        // Examples:
        // >=1.0.37
        // <1.0.37
        // <=1.0.37
        return '>=1.2.29';
    }

    public function getPluginHomepage()
    {
        return 'https://github.com/Tagirijus/KanboardTabs';
    }
}
