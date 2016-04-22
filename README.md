
HubSpots PACE for QUIQQER
========

Automatically add a progress bar to your site


Paketname:

    quiqqer/pace


Features (Funktionen)
--------

- pace for quiqqer

Installation
------------

Der Paketname ist: quiqqer/pace


Mitwirken
----------

- Issue Tracker: https://dev.quiqqer.com/quiqqer/pace/issues
- Source Code: 


Support
-------

Falls Sie ein Fehler gefunden haben, oder Verbesserungen wünschen,
dann können Sie gerne an support@pcsg.de eine E-Mail schreiben.


Lizenz
-------

MIT

Entwickler
--------

Smarty Nutzung:

```
{pace}
{pace theme=""}
```

Beispiel im HTML (pace sollte so früh wie möglich aufgerufen werden)

```html
<!doctype html>
<html lang="{$Project->getAttribute('lang')}">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1, maximum-scale=1"/>
    
    {pace}
    
    <!-- anderes css / javascript oder QUIQQER header -->
    
</head>
```