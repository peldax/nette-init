<?php

namespace Nepttune\Component;

interface IStyleLists
{
    const STYLE_HEAD = [];
    const STYLE_HEAD_ADMIN = [
        '/node_modules/bootstrap/dist/css/bootstrap.min.css',
        '/node_modules/admin-lte/dist/css/AdminLTE.min.css',
        '/node_modules/admin-lte/dist/css/skins/skin-red.min.css'];
    const STYLE_HEAD_FRONT = [
        '/node_modules/bootstrap-beta/dist/css/bootstrap.min.css'];

    const STYLE_BODY = [
        '/node_modules/@fortawesome/fontawesome-free-webfonts/css/fontawesome.css',
        '/node_modules/@fortawesome/fontawesome-free-webfonts/css/fa-brands.css',
        '/node_modules/@fortawesome/fontawesome-free-webfonts/css/fa-regular.css',
        '/node_modules/@fortawesome/fontawesome-free-webfonts/css/fa-solid.css',
        '/node_modules/flag-icon-css/css/flag-icon.min.css',
        '/node_modules/magnific-popup/dist/magnific-popup.css',
        '/node_modules/nepttune/scss/common.min.css'];
    const STYLE_BODY_ADMIN = [];
    const STYLE_BODY_FRONT = [];


    const STYLE_FORM = [
        '/node_modules/pickadate/lib/themes/classic.css',
        '/node_modules/pickadate/lib/themes/classic.date.css',
        '/node_modules/select2/dist/css/select2.min.css',
        '/node_modules/icheck/skins/square/red.css'];
    const STYLE_LIST = [
        '/node_modules/ublaboo-datagrid/assets/dist/datagrid.min.css',
        '/node_modules/ublaboo-datagrid/assets/dist/datagrid-spinners.min.css'];
    const STYLE_STAT = [];
}
