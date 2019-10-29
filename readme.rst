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

To use cookiebot you need a cookiebot-account & domaingroup-id / CBID.
If you don't have a cookiebot-account or an domaingroup-id you can generate one on https://www.cookiebot.com

1. Include static template
2. Add your cookiebot domaingroup-id / CBID (Format: 00000000-0000-0000-0000-000000000000) in the constants-editor or use ``plugin.tx_cookiebot_cookiebot.settings.apikey`` in the constants.
3. After that your cookie consent banner will show up as configured in your cookiebot.com-settings.
4. Add the plugin ``Cookiebot`` as an content-element on the specific page and at the exact position where you would like the cookie declaration to appear.

3. TYPO3-Version support
========================

Cookiebot extension supports TYPO3 version 8, 9 and upcomming version 10.

4. Changelog
============
Version 1.0.2
-------------
- Fixes a wording error in the constants-editor where the "cookiebot API key" was requested. The cookiebot domaingroup-id (CBID) is required here.
- Fixes a bug where the cookiebot-script was not integrated as the very first JavaScript. Integration now takes place directly after the opening "head" tag. This ensures that no cookies escape the automatic cookie blocking.
- Add cache-clearing on installation

Version 1.0.1
-------------
- Small edit in licence and description. No code-change!

Version 1.0.0
-------------
- Initial release to TER


5. Contact
==========

`TYPO3 Extension repository <https://extensions.typo3.org/extension/cookiebot/>`_

