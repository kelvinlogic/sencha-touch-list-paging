

Ext.define('Paging.view.Main', {
    extend: 'Ext.List',
    requires:[
        'Ext.plugin.ListPaging',
        'Ext.TitleBar',
    ],
    xtype: 'main',
    config: {
        layout: 'fit',
        items:[
            {
                xtype: 'titlebar',
                title: 'List Paging',
                docked: 'top'
            }
        ],
        store: 'Menus',
        plugins: [
            {
                xclass: 'Ext.plugin.ListPaging',
                autoPaging: true
            }
        ],
        xtype: 'list',
        itemTpl: '<div class="image"><img src="{image}">{name:ellipsis(30)}<span>{price} ksh</span></div>'
    }
});
