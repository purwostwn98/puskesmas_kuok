jQuery(function($) {
    var $_data = [
          {
            "id": 0,
            "name": "Product 0",
            "price": "$0"
          },
          {
            "id": 1,
            "name": "Product 1",
            "price": "$1"
          },
          {
            "id": 2,
            "name": "Product 2",
            "price": "$2"
          },
          {
            "id": 3,
            "name": "Product 3",
            "price": "$3"
          },
          {
            "id": 4,
            "name": "Product 4",
            "price": "$4"
          },
          {
            "id": 5,
            "name": "Product 5",
            "price": "$5"
          },
          {
            "id": 6,
            "name": "Product 6",
            "price": "$6"
          },
          {
            "id": 7,
            "name": "Product 7",
            "price": "$7"
          },
          {
            "id": 8,
            "name": "Product 8",
            "price": "$8"
          },
          {
            "id": 9,
            "name": "Product 9",
            "price": "$9"
          },
          {
            "id": 10,
            "name": "Product 10",
            "price": "$10"
          },
          {
            "id": 11,
            "name": "Product 11",
            "price": "$11"
          },
          {
            "id": 12,
            "name": "Product 12",
            "price": "$12"
          },
          {
            "id": 13,
            "name": "Product 13",
            "price": "$13"
          },
          {
            "id": 14,
            "name": "Product 14",
            "price": "$14"
          },
          {
            "id": 15,
            "name": "Product 15",
            "price": "$15"
          },
          {
            "id": 16,
            "name": "Product 16",
            "price": "$16"
          },
          {
            "id": 17,
            "name": "Product 17",
            "price": "$17"
          },
          {
            "id": 18,
            "name": "Product 18",
            "price": "$18"
          },
          {
            "id": 19,
            "name": "Product 19",
            "price": "$19"
          },
          {
            "id": 20,
            "name": "Product 20",
            "price": "$20"
          },
          {
            "id": 21,
            "name": "Product 21",
            "price": "$21"
          },
          {
            "id": 22,
            "name": "Product 22",
            "price": "$22"
          },
          {
            "id": 23,
            "name": "Product 23",
            "price": "$23"
          },
          {
            "id": 24,
            "name": "Product 24",
            "price": "$24"
          },
          {
            "id": 25,
            "name": "Product 25",
            "price": "$25"
          },
          {
            "id": 26,
            "name": "Product 26",
            "price": "$26"
          },
          {
            "id": 27,
            "name": "Product 27",
            "price": "$27"
          },
          {
            "id": 28,
            "name": "Product 28",
            "price": "$28"
          },
          {
            "id": 29,
            "name": "Product 29",
            "price": "$29"
          },
          {
            "id": 30,
            "name": "Product 30",
            "price": "$30"
          },
          {
            "id": 31,
            "name": "Product 31",
            "price": "$31"
          },
          {
            "id": 32,
            "name": "Product 32",
            "price": "$32"
          },
          {
            "id": 33,
            "name": "Product 33",
            "price": "$33"
          }
      ];


    //initiate the plugin
    var $_table = $('#table');
    $_table.bootstrapTable({
      data: $_data,

      columns: [
        {
          field: 'state',
          checkbox: true,
          printIgnore: true,
          //width: 64
        },
        {
          field: 'id',
          title: 'Product ID',
          sortable: true
        },
        {
          field: 'name',
          title: 'Product Name',
          sortable: true
        },
        {
          field: 'price',
          title: 'Price',
          sortable: true,
        },
        {
          field: 'tools',
          title: '<i class="fa fa-cog text-secondary-d1 text-130"></i>',
          formatter: formatTableCellActions,
          width: 140,
          align: 'center',
          printIgnore: true,
          clickToSelect: false
        }
      ],

      icons: {
          columns: 'fa-th-list text-orange-d1',
          detailOpen: 'fa-plus text-blue',
          detailClose: 'fa-minus text-blue',
          export: 'fa-download text-blue',
          print: 'fa-print text-purple-d1',
          fullscreen: 'fa fa-expand',

          search: 'fa-search text-blue'
      },


      toolbar: "#table-toolbar",
      theadClasses: "bgc-white text-grey text-uppercase text-80",
      clickToSelect: true,

      checkboxHeader: true,
      search: true,
      searchAlign: "left",
      //showSearchButton: true,

      sortable: true,

      detailView: true,
      detailFormatter: "detailFormatter",

      pagination: true,
      paginationLoop: false,

      buttonsClass: "outline-default btn-smd bgc-white btn-h-light-primary btn-a-outline-primary py-1",

      showExport: true,
      showPrint: true,
      showColumns: true,
      showFullscreen: true,


      printPageBuilder: function(table){
        var bsHref = $('link[rel=stylesheet][href*="/bootstrap.css"], link[rel=stylesheet][href*="/bootstrap.min.css"]').attr('href');
        //get bootstrap.css 
        
         return '<html>\
                    <head>\
                      <link rel="stylesheet" type="text/css" href="'+bsHref+'">\
                      <title>Print Table</title>\
                    </head>\
                    <body class="container">\
                      <p>Printed on: '+ new Date() + '</p>\
                      <div>\
                        <table class="table table-bordered">'
                        + table +
                        '</table>\
                      </div>\
                    </body>\
                  </html>';
      }

    });

    function formatTableCellActions(value, row, index, field) {
      return '<div class="action-buttons">\
        <a class="text-blue mx-2px" href="#">\
          <i class="fa fa-search-plus text-105"></i>\
        </a>\
        <a class="text-success mx-2px" href="#">\
          <i class="fa fa-pencil-alt text-105"></i>\
        </a>\
        <a class="text-danger-m1 mx-2px" href="#">\
          <i class="fa fa-trash-alt text-105"></i>\
        </a>\
      </div>';
    }



    //enable/disable 'remove' button
    var $removeBtn = $('#remove-btn');
    $_table.on('check.bs.table uncheck.bs.table check-all.bs.table uncheck-all.bs.table', function () {
      $removeBtn.prop('disabled', !$_table.bootstrapTable('getSelections').length);
    });

    //remove an item
    $removeBtn.click(function () {
      var ids = $.map($_table.bootstrapTable('getSelections'), function (row) {
        return row.id
      });

      $_table.bootstrapTable('remove', {
        field: 'id',
        values: ids
      });

      $removeBtn.prop('disabled', true)
    });

});