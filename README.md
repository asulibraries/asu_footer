# ASU Footer module

## Description 

The ASU Footer module provides a custom block plugin specific for the ASU Footer.

## Requirements

Drupal 8.x., Drupal 9.x, Drupal 10.x

## Installation steps
1. Add VCS for this github repo in composer.json
```
{
            "type": "vcs",
            "url": "https://github.com/asulibraries/asu_footer"
        }
```
2. Composer require the module - `composer require asulibraries/asu_footer:dev-main`

## Configuration

To configure the block, you will have to go to the Block section for your 
current theme admin/structure/block and configure the "ASU footer" block.
In order to add custom menus, you can do that in the Menu section: admin/structure/menu.


