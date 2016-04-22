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
                "\QUI\pace\EventHandler::pace"
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

        $themeRealPath = OPT_DIR . 'bin/pace/themes/' . $theme;

        if (file_exists($themeRealPath)) {
            $themePath = URL_OPT_DIR . 'bin/pace/themes/' . $theme;
        } else {
            $themePath = URL_OPT_DIR . 'bin/pace/themes/red/pace-theme-minimal.css';
        }


        return '
            <script src="' . URL_OPT_DIR . 'bin/pace/pace.min.js"></script>
            <link href="' . $themePath . '" rel="stylesheet"/>
        ';
    }
}
