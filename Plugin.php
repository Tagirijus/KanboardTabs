<?php

namespace Kanboard\Plugin\KanboardTabs;

use Kanboard\Core\Plugin\Base;


class Plugin extends Base
{
    public function initialize()
    {
        // change CSP rule
        $this->addCspRules();

        //CSS
        $this->hook->on('template:layout:css', array('template' => 'plugins/KanboardTabs/Assets/css/kanboardtabs.min.css'));

        //JS
        $this->hook->on('template:layout:js', array('template' => 'plugins/KanboardTabs/Assets/js/kanboardtabs.min.js'));
    }

    /**
     * Thanks to rafaelcarmago and oalexandrino from the Kanboard forum:
     * https://kanboard.discourse.group/t/content-security-policy-avoids-plugin-development/1296/3
     */
    public function addCspRules()
    {
        // get current csp rules
        $cspRules = $this->container['cspRules'];

        // add "'unsafe-inline'"
        // either append it
        if (isset($cspRules['script-src'])) {
            if (strpos($cspRules['script-src'], "'unsafe-inline'") === false) {
                $cspRules['script-src'] .= " 'unsafe-inline'";
            }
        // or add the rule new
        } else {
            $cspRules['script-src'] = $cspRules['default-src'] . " 'unsafe-inline'";
        }

        // update cspRules with the ones we changed
        $this->container['cspRules'] = $cspRules;
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
