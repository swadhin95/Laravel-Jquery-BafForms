const rangeApplicableOnColumn = 'estimated_total_cost';

const numericPrecision = 2;
const groupColumnIndex = 1;

const remarksMaxCharCount = 100;

const loadingAnimationDurationInMilliseconds = 500;
const templatingHeaderColumns =  [
    'id',
    ' ',
    ' ',
    'Product Description',
    'Unit of Product',
    'Storage Workable', // storage 
    'Storage Repairable', // storage
    'Stock Workable', //temporarry
    'Stock Workable', //Stock
    'Stock Repairable', //Stock
    'Stock Workable', //Total
    'Stock Repairable', //Total
    ' Workable', // stock Record
    'Repairable', // stock Record
    'Workable', //quotes
    'Repairable', //quotes
    'Workable', //deficit
    'Repairable', //deficit
    ' '
];


export {
    rangeApplicableOnColumn,
    numericPrecision,
    groupColumnIndex,
    remarksMaxCharCount,
    templatingHeaderColumns,
    loadingAnimationDurationInMilliseconds,
}
