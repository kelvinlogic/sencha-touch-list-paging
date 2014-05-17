Ext.define('Paging.model.Menu',{
    extend: 'Ext.data.Model',
    config: {
        fields: [
            {name:'fID',type: 'int'},
            {name:'image', type: 'string'},
            {name:'price', type: 'string'},
            {name:'name', type: 'string'},
            {name:'content',  type: 'string'}
        ]

    }
});