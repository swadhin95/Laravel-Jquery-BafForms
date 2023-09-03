const rangeApplicableOnColumn = 'estimated_total_cost';

const numericPrecision = 2;
const groupColumnIndex = 1;

const remarksMaxCharCount = 100;

const loadingAnimationDurationInMilliseconds = 500;
const templatingHeaderColumns =  [
    'id',
    'Ref No',
    'Product Description',
    'Product Unit',
    'Returnable Product Amount',
    'Repariable Product Ledger', 
    'Supply Product Amount',//Quantity
    'Usable Product Ledger',
    'Reason For Exchange',
];


export {
    rangeApplicableOnColumn,
    numericPrecision,
    groupColumnIndex,
    remarksMaxCharCount,
    templatingHeaderColumns,
    loadingAnimationDurationInMilliseconds,
}
