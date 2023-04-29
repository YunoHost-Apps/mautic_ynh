<!--
N.B.: This README was automatically generated by https://github.com/YunoHost/apps/tree/master/tools/README-generator
It shall NOT be edited by hand.
-->

# Mautic for YunoHost

[![Integration level](https://dash.yunohost.org/integration/mautic.svg)](https://dash.yunohost.org/appci/app/mautic) ![Working status](https://ci-apps.yunohost.org/ci/badges/mautic.status.svg) ![Maintenance status](https://ci-apps.yunohost.org/ci/badges/mautic.maintain.svg)

[![Install Mautic with YunoHost](https://install-app.yunohost.org/install-with-yunohost.svg)](https://install-app.yunohost.org/?app=mautic)

*[Lire ce readme en français.](./README_fr.md)*

> *This package allows you to install Mautic quickly and simply on a YunoHost server.
If you don't have YunoHost, please consult [the guide](https://yunohost.org/#/install) to learn how to install it.*

## Overview

Marketing Automation Software

**Shipped version:** 4.4.8~ynh1

**Demo:** https://www.mautic.org/demo

## Screenshots

![Screenshot of Mautic](./doc/screenshots/mautic-Screenshots.jpg)

## Disclaimers / important information

## Configuration

 * After installation you will receive an email with the DB password.
 * To login to Mautic `https://mautic.example.com/s/login`.

## Documentation and resources

* Official app website: <https://www.mautic.org/>
* Official admin documentation: <https://docs.mautic.org/en>
* Upstream app code repository: <https://github.com/mautic/mautic>
* YunoHost documentation for this app: <https://yunohost.org/app_mautic>
* Report a bug: <https://github.com/YunoHost-Apps/mautic_ynh/issues>

## Developer info

Please send your pull request to the [testing branch](https://github.com/YunoHost-Apps/mautic_ynh/tree/testing).

To try the testing branch, please proceed like that.

``` bash
sudo yunohost app install https://github.com/YunoHost-Apps/mautic_ynh/tree/testing --debug
or
sudo yunohost app upgrade mautic -u https://github.com/YunoHost-Apps/mautic_ynh/tree/testing --debug
```

**More info regarding app packaging:** <https://yunohost.org/packaging_apps>
