const startTargetContainerLoadingAnimation = async (container) => {
    $(container).block({
        message: '<i class="icon-spinner2 spinner"></i>',
        overlayCSS: {
            backgroundColor: '#fff',
            opacity: 0.8,
            cursor: 'wait',
            'box-shadow': '0 0 0 1px #ddd'
        },
        css: {
            border: 0,
            padding: 0,
            backgroundColor: 'none'
        }
    });

    return true;
}

const endTargetContainerLoadingAnimation = (container) => {
    $(container).unblock();
}

export {
    startTargetContainerLoadingAnimation,
    endTargetContainerLoadingAnimation
}
