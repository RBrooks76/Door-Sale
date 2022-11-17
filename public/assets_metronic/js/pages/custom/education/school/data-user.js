"use strict";
// Class definition

var KTDatatableRemoteAjaxDemo = function() {
    // Private functions

    // basic demo
    var demo = function() {
        var datatable = $('#kt_datatable').KTDatatable({
            // datasource definition
            data: {
                type: 'remote',
                source: {
                    read: {
                        url: '/onGetUserList',
                        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                        map: function(raw) {
                            var dataSet = raw;
                            if (typeof raw!== 'undefined') {
                                dataSet = raw;
                            }
                            return dataSet;
                        },
                    },
                },
                pageSize: 10,
                serverPaging: true,
                serverFiltering: true,
                serverSorting: true,
            },

            // layout definition
            layout: {
                scroll: false,
                footer: false,
            },

            // column sorting
            sortable: true,

            pagination: true,

            search: {
                input: $('#kt_datatable_search_query'),
                key: 'generalSearch'
            },

            // columns definition
            columns: [
            // {
            //     field: 'RecordID',
            //     title: '#',
            //     sortable: 'asc',
            //     width: 30,
            //     type: 'number',
            //     selector: false,
            //     textAlign: 'center',
            // },
            {
                field: 'email',
                title: 'Email',
            }, {
                field: 'password',
                title: 'Password',
            },
            // {
            //     field: 'Country',
            //     title: 'Country',
            //     template: function(row) {
            //         return row.Country + ' ' + row.ShipCountry;
            //     },
            // },
            // {
            //     field: 'ShipDate',
            //     title: 'Ship Date',
            //     type: 'date',
            //     format: 'MM/DD/YYYY',
            // }, {
            //     field: 'CompanyName',
            //     title: 'Company Name',
            // }, {
            //     field: 'Status',
            //     title: 'Status',
            //     // callback function support for column rendering
            //     template: function(row) {
            //         var status = {
            //             1: {
            //                 'title': 'Pending',
            //                 'class': ' label-light-success'
            //             },
            //             2: {
            //                 'title': 'Delivered',
            //                 'class': ' label-light-danger'
            //             },
            //             3: {
            //                 'title': 'Canceled',
            //                 'class': ' label-light-primary'
            //             },
            //             4: {
            //                 'title': 'Success',
            //                 'class': ' label-light-success'
            //             },
            //             5: {
            //                 'title': 'Info',
            //                 'class': ' label-light-info'
            //             },
            //             6: {
            //                 'title': 'Danger',
            //                 'class': ' label-light-danger'
            //             },
            //             7: {
            //                 'title': 'Warning',
            //                 'class': ' label-light-warning'
            //             },
            //         };
            //         return '<span class="label font-weight-bold label-lg ' + status[row.Status].class + ' label-inline">' + status[row.Status].title + '</span>';
            //     },
            // }, {
            //     field: 'Type',
            //     title: 'Type',
            //     autoHide: false,
            //     // callback function support for column rendering
            //     template: function(row) {
            //         var status = {
            //             1: {
            //                 'title': 'Online',
            //                 'state': 'danger'
            //             },
            //             2: {
            //                 'title': 'Retail',
            //                 'state': 'primary'
            //             },
            //             3: {
            //                 'title': 'Direct',
            //                 'state': 'success'
            //             },
            //         };
            //         return '<span class="label label-' + status[row.Type].state + ' label-dot mr-2"></span><span class="font-weight-bold text-' + status[row.Type].state + '">' +
            //             status[row.Type].title + '</span>';
            //     },
            // },
            {
                field: 'Actions',
                title: 'Actions',
                sortable: false,
                width: 125,
                overflow: 'visible',
                autoHide: false,
                template: function(row) {
                    return `<a class="btn btn-sm btn-clean btn-icon mr-2" title="Edit details" onclick="onEdit(` + row.id + `)">`+
                            `<span class="svg-icon svg-icon-md">\
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">\
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">\
                                        <rect x="0" y="0" width="24" height="24"/>\
                                        <path d="M8,17.9148182 L8,5.96685884 C8,5.56391781 8.16211443,5.17792052 8.44982609,4.89581508 L10.965708,2.42895648 C11.5426798,1.86322723 12.4640974,1.85620921 13.0496196,2.41308426 L15.5337377,4.77566479 C15.8314604,5.0588212 16,5.45170806 16,5.86258077 L16,17.9148182 C16,18.7432453 15.3284271,19.4148182 14.5,19.4148182 L9.5,19.4148182 C8.67157288,19.4148182 8,18.7432453 8,17.9148182 Z" fill="#000000" fill-rule="nonzero"\ transform="translate(12.000000, 10.707409) rotate(-135.000000) translate(-12.000000, -10.707409) "/>\
                                        <rect fill="#000000" opacity="0.3" x="5" y="20" width="15" height="2" rx="1"/>\
                                    </g>\
                                </svg>\
                            </span>\
                        </a>` +
                        `<a class="btn btn-sm btn-clean btn-icon" title="Delete" onclick="onDelete(` + row.id + `)">\
                            <span class="svg-icon svg-icon-md">\
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">\
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">\
                                        <rect x="0" y="0" width="24" height="24"/>\
                                        <path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero"/>\
                                        <path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3"/>\
                                    </g>\
                                </svg>\
                            </span>\
                        </a>`;
                },
            }],

        });

		$('#kt_datatable_search_status').on('change', function() {
            datatable.search($(this).val().toLowerCase(), 'Status');
        });

        $('#kt_datatable_search_type').on('change', function() {
            datatable.search($(this).val().toLowerCase(), 'Type');
        });

        $('#kt_datatable_search_status, #kt_datatable_search_type').selectpicker();


    };

    return {
        // public functions
        init: function() {
            demo();
        },
    };
}();

// jQuery(document).ready(function() {
//     KTDatatableRemoteAjaxDemo.init();
// });
