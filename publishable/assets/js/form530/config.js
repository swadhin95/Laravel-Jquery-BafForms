const rangeApplicableOnColumn = 'estimated_total_cost';

const numericPrecision = 2;
const groupColumnIndex = 1;

const remarksMaxCharCount = 100;

const loadingAnimationDurationInMilliseconds = 500;
const templatingHeaderColumns =  [
    'id',
    'Item No Of Contact',
    'Baf Ref No',
    'Description Of Articles',
    'Quantity Submitted By Contractor', //Quantity
    'Approved',//Quantity
    'Rejected',
    'Rate',
    'Value',
    'Remarks',
];


export {
    rangeApplicableOnColumn,
    numericPrecision,
    groupColumnIndex,
    remarksMaxCharCount,
    templatingHeaderColumns,
    loadingAnimationDurationInMilliseconds,
}
