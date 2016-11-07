<?php

/**
 * This file contains QUI\Pace\EventHandler
 */
namespace QUI\Pace;

use QUI;

/**
 * Class EventHandler
 * @package QUI\Pace
 */
class EventHandler
{
    /**
     * Event : on smarty init
     * @param \Smarty $Smarty - \Smarty
     */
    public static function onSmartyInit($Smarty)
    {
        // {pace}
        if (!isset($Smarty->registered_plugins['function']) ||
            !isset($Smarty->registered_plugins['function']['pace'])
        ) {
            $Smarty->registerPlugin(
                "function",
                "pace",
                "\\QUI\\Pace\\EventHandler::pace"
            );
        }
    }

    /**
     * Smarty brickarea function {brickarea}
     *
     * @param array $params - function parameter
     * @param \Smarty $smarty - \Smarty
     * @return array|String
     */
    public static function pace($params, $smarty)
    {
        $theme = 'red/pace-theme-minimal.css';

        if (isset($params['theme'])) {
            $theme = $params['theme'];
        }

        $themeRealPath = OPT_DIR . 'bin/pace-js/themes/' . $theme;

        if (file_exists($themeRealPath)) {
            $themePath = URL_OPT_DIR . 'bin/pace-js/themes/' . $theme;
        } else {
            $themePath = URL_OPT_DIR . 'bin/pace-js/themes/red/pace-theme-minimal.css';
        }


        return '
            <script src="' . URL_OPT_DIR . 'bin/pace-js/pace.min.js"></script>
            <link href="' . $themePath . '" rel="stylesheet"/>
        ';
    }
}
