# JH DebugLogSwitch

Magento 2, at the moment of writting this module, doesn't allow you to stop the system from logging into the debug.log file, which can end up taking a lot of space in your server.

This module adds a flag in the admin at `Stores > Settings > Configuration > Advanced > Developer > Debug > Stop all logging to the debug.log file`
which  allows you to stop Magento from logging any debug information.

Note:

This module has been tested on **Magento version 2.1.2**

Magento has a fix for this but it hasn't been merged into master at the moment of writting this.
[Issue on Github](https://github.com/magento/magento2/issues/4362)
