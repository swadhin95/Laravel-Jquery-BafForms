const handleMeetingMode = async (target) => {
    const $target = $(target),
        cardFullscreen = $target.closest('.card'),
        overflowHiddenClass = 'overflow-hidden',
        collapsedClass = 'collapsed-in-fullscreen',
        fullscreenAttr = 'data-fullscreen';

    cardFullscreen.toggleClass('fixed-top h-100 rounded-0 d-none');

    if (!cardFullscreen.hasClass('fixed-top')) {
        $target.removeAttr(fullscreenAttr);
        cardFullscreen.children('.' + collapsedClass).removeClass('show');
        $('body').removeClass(overflowHiddenClass);
        $target.siblings('[data-action=move], [data-action=remove], [data-action=collapse]').removeClass('d-none');
    } else {
        $target.attr(fullscreenAttr, 'active');
        cardFullscreen.removeAttr('style').children('.collapse:not(.show)').addClass('show ' + collapsedClass);
        $('body').addClass(overflowHiddenClass);
        $target.siblings('[data-action=move], [data-action=remove], [data-action=collapse]').addClass('d-none');
    }

    return true;
};

export {
    handleMeetingMode
}
