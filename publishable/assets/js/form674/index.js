import {
    numericPrecision,
    templatingHeaderColumns,
} from "./config.js";

const OFFICE_INDEX_KEY_MAP = {
    0: 'id',
    1: 'Sl No',
    2: 'Ref No',
    3: 'Product Description',
    4: 'Product Unit',
    5: 'Demand',
    6: 'Issue',
    7: 'Posted',
    8: 'Information for Consideration',
};

let meetingModeTbl = null;
/*
 *   BuildXL Function Expressions & Events
 */
const buildFormattingData = async (constraints) => {

    let dataSetForTblView = [];

    for (const key in MASTER_DATA) {

        dataSetForTblView.push(MASTER_DATA[key]);
    }

    return dataSetForTblView;
};
// update cell value
const updateOfficeWiseData = async (data) => {
    const response = await fetch(
        "/form674/api/update",
        {
            method: "POST",
            body: JSON.stringify(data),
            headers: {
                "Content-type": "application/json",
            },
        }
    );

    const res = await response.json();
    return {
        ...res,
        message: "Cell Data Has Been Updated Successfully",
    };
};

const constructTableContainer = async (dataSetForTblView) => {

    let container = xlContainer(dataSetForTblView);
    $("#jsexcelTblContainer").append(`<div id='meetingModeTbl'></div>`);
    const meetingModeTbl = $("div#meetingModeTbl").jexcel(container);

    return meetingModeTbl;
};

const xlContainer = (data) => {
    const container = {
        search: false,
        filters: false,
        rowResize: true,
        pagination: false,
        tableOverflow: true,
        tableHeight: "700px",
        data: data,
        colHeaders: templatingHeaderColumns,
        columns: [
            {
                type: "hidden",
                name: "id",
            },
            {
                type: "text",
                width: 200,
                wordWrap: true,
                name: "Sl No",
            },
            {
                type: "text",
                width: 200,
                wordWrap: true,
                name: "Ref No",
            },
            {
                type: "text",
                width: 200,
                wordWrap: true,
                name: "Product Description",
            },
            {
                type: "text",
                width: 200,
                wordWrap: true,
                name: "Product Unit",
            },
            {
                type: "text",
                width: 200,
                wordWrap: true,
                name: "Demand",
            },
            {
                type: "text",
                width: 200,
                wordWrap: true,
                name: "Issue",
            },
            {
                type: "text",
                width: 200,
                wordWrap: true,
                name: "Posted",
            },
            {
                type: "text",
                width: 200,
                wordWrap: true,
                name: "Information for Consideration",
            },
        ],
        nestedHeaders:[
            [
                {
                    title: '',
                    colspan: '1',
                },
                {
                    title: '',
                    colspan: '1',
                },

                {
                    title: '',
                    colspan: '1',
                },
                {
                    title: '',
                    colspan: '1',
                },
                {
                    title: 'Quantity',
                    colspan: '2',
                },
                {
                    title: '',
                    colspan: '1',
                },
                {
                    title: '',
                    colspan: '1',
                },
            ],
            ],

        onchange: onChnagedCellValue,
        contextMenu: function(obj, x, y, e) {
            var items = [];
            // Insert new row
            if (obj.options.allowInsertRow == true) {
                items.push({
                    title:obj.options.text.insertANewRowBefore,
                    onclick:function() {
                        obj.insertRow(1, parseInt(y), 1);
                    }
                });
                // Line
                items.push({ type:'line' });

                items.push({
                    title:obj.options.text.insertANewRowAfter,
                    onclick:function() {
                        obj.insertRow(1, parseInt(y));
                    }
                });
            }
            // Line
            items.push({ type:'line' });

            if (obj.options.allowDeleteRow == true) {
                items.push({
                    title:obj.options.text.deleteSelectedRows,
                    onclick:function() {
                        obj.deleteRow(obj.getSelectedRows().length ? undefined : parseInt(y));
                    }
                });
            }

            return items;
        }
    };
    return container;
};
async function add_new_row(element) {
    let response = await fetch("/form674/api/store", {
        method: "POST",
        headers: {
            "Content-Type": "application/json",
        },
        body: JSON.stringify(element),
    });
    let datas = await response.json();
    let data2 = JSON.stringify(datas);
    let data = JSON.parse(data2);
    return data;
}
const onChnagedCellValue = async (
    _,
    td,
    cellColumnIndex,
    cellRowIndex,
    latestCellValue,
    oldCellValue
) => {
    cellColumnIndex = +cellColumnIndex;
    cellRowIndex = +cellRowIndex;

    var addRowData = meetingModeTbl.getRowData(cellRowIndex);
    var is_new = false;
    var rowDataSet;

    let elementInfo = addRowData[0] ? addRowData[0] : null;

    if (!elementInfo) {
        is_new = true;

        var addRowDataJson = meetingModeTbl.getJson(cellRowIndex);

        if (typeof addRowDataJson[cellRowIndex] != "undefined") {
            var result = await add_new_row(addRowDataJson[cellRowIndex]);
            addRowDataJson[cellRowIndex]["id"] = result.data.id;

            var cellArray = meetingModeTbl.getRowData(cellRowIndex);
            cellArray[0] = result.data.id;
            meetingModeTbl.getRowData(cellRowIndex);
        } else {
            var addRowData = meetingModeTbl.getRowData(cellRowIndex);

            var parseArray = {
                sl_no                : addRowData[1],
                ref_no               : addRowData[2],
                product_description  : addRowData[3],
                product_unit         : addRowData[4],
                demand               : addRowData[5],
                issue                : addRowData[6],
                posted                : addRowData[7],
                information_for_Consideration   : addRowData[8],
            };
            var       result    = await add_new_row(parseArray);
            var       cellArray = meetingModeTbl.getRowData(cellRowIndex);
            cellArray[0]        = result.data.id;
            meetingModeTbl.getRowData(cellRowIndex);
        }
    }

    if (!is_new) {
        rowDataSet = meetingModeTbl.getRowData(cellRowIndex);
    }
    is_new = false;
    const classesToRemove = "d-none alert-primary alert-warning alert-danger";
    try {
        const blackListedColumnIndexes = []; // Non Editable index key here

        if (blackListedColumnIndexes.includes(cellColumnIndex)) {
            toastr.options =
                {
                    "closeButton" : true,
                    "progressBar" : true
                }
                toastr.error("The Change Was Not Saved.");
        } else {

            const response = await updateOfficeWiseData(rowDataSet);

            if (!response.success) {
                toastr.options =
                {
                    "closeButton" : true,
                    "progressBar" : true
                }
                toastr.error(response.message);
            } else {
                toastr.options =
                {
                    "closeButton" : true,
                    "progressBar" : true
                }
  		        toastr.success("Saved Successfully");

            }

        }
    } catch (err) {
        td.innerHTML = oldCellValue;

        rowDataSet[cellColumnIndex] = oldCellValue;

    }
};

// Self Invoking Function On Load
(async () => {

    if (meetingModeTbl === null) {
        const dataSetForTblView = await buildFormattingData();
        meetingModeTbl = await constructTableContainer(dataSetForTblView);
    }
})();
