const rangeApplicableOnColumn = 'estimated_total_cost';

const numericPrecision = 2;
const groupColumnIndex = 1;

const remarksMaxCharCount = 100;

const loadingAnimationDurationInMilliseconds = 500;
const templatingHeaderColumns =  [
    'id',
    'Sl No',
    'Ref No',
    'Product Description', 
    'Product Unit', 
    'Demand', //quantity
    'Issue', //quantity
    'Posted', 
    'Information for Consideration', 
];


export {
    rangeApplicableOnColumn,
    numericPrecision,
    groupColumnIndex,
    remarksMaxCharCount,
    templatingHeaderColumns,
    loadingAnimationDurationInMilliseconds,
}
