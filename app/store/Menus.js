
Ext.define('Paging.store.Menus', {
    alias: 'store.Menus',
    extend: 'Ext.data.Store',
    requires:[
        'Ext.data.proxy.JsonP'
    ],
    config: {
        model: 'Paging.model.Menu',
        autoLoad: true,
        pageSize:20,
        proxy: {
            type: 'jsonp',
            url: 'http://127.0.0.1/senchatouchprojects/SenchaTouchV2.3.1/paging/php_application/search.php',
            callbackKey: 'request',
            reader: {
                type: 'json',
                totalProperty: 'totalCount',
                rootProperty: 'menu',
                successProperty: 'success'
            }
        }
    }
});