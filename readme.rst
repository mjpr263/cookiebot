===========================================
Cookiebot for TYPO3 - Documentation
===========================================

1. Installation
===============

Install via composer
--------------------

.. code-block:: shell

   composer require mjpr/cookiebot

Install via Extension Manager
-----------------------------

1. Open Extension Manager in TYPO3 backend
2. Download and install extension ``cookiebot``

2. Integration
==============

To use cookiebot you need a cookiebot-account & api-key.
If you don't have a cookiebot-account or an api-key you can generate one on https://www.cookiebot.com

1. Include static template
2. Add your cookiebot api-key in the constants-editor or use ``plugin.tx_cookiebot_cookiebot.settings.apikey`` in the constants.
3. After that your cookie consent banner will show up as configured in your cookiebot.com-settings.
4. Add the plugin ``Cookiebot`` as an content-element on the specific page and at the exact position where you would like the cookie declaration to appear.

3. TYPO3-Version support
========================

Cookiebot extension supports TYPO3 version 8, 9 and upcomming version 10.

4. Contact
==========

* `GitHub project`_
.. _GitLab project: https://github.com/mjpr263/cookiebot/

* `TYPO3 Extension repository`_
.. _TYPO3 Extension repository: https://extensions.typo3.org/extension/cookiebot/
