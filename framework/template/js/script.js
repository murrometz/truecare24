$(() => {
    // Activating of tooltips
    $('#matched-providers tbody .actions .menu').each((index, element) => {
        const template = document.querySelector('.actions-tooltip').outerHTML;
        const tippyInstance = tippy(element, {
            content: template,
            allowHTML: true,
            theme: 'light light-truecare',
            trigger: 'click',
            arrow: false,
            interactive: true,
            placement: 'auto-start',
            offset: [-10, -25],
            duration: 100
        });
    });

    $('#matched-providers tbody .status').each((index, element) => {
        const currentStatus = element.className.replace(/^(.*\s+)*(status-\S+)(\s+.*)*$/g, '$2');
        let templateElement = document.querySelector('.statuses-tooltip');
        const currentStatusElement = templateElement.querySelector('.' + currentStatus);
        templateElement = $(templateElement).clone();
        templateElement.find('.' + currentStatus).remove();
        templateElement.prepend($(currentStatusElement).clone());

        const template = templateElement.get(0).outerHTML;
        const tippyInstance = tippy(element, {
            content: template,
            allowHTML: true,
            theme: 'light light-truecare',
            trigger: 'click',
            arrow: false,
            interactive: true,
            placement: 'right-start',
            offset: [4, -223],
            duration: 100
        });
    });

    // Activating the rating in modal
    $('.modal .rating').raty({
        'starHalf': '/framework/template/images/icons/Star-half.png',
        'starOff': '/framework/template/images/icons/Star grey.png',
        'starOn': '/framework/template/images/icons/Star yellow.png',
    });

    $(document).on('click', '.statuses-tooltip .item', (event) => {
        const chosenItem = $(event.target).closest('.item').get(0);
        const currentStatus = chosenItem.className.replace(/^(.*\s+)*(status-\S+)(\s+.*)*$/g, '$2');
        const tooltipInstance = $(event.target).closest('[data-tippy-root]').get(0)._tippy;
        const triggerElement = tooltipInstance.reference;
        triggerElement.innerHTML = chosenItem.innerHTML;
        triggerElement.className = 'status ' + currentStatus;
        if (currentStatus === 'status-cancelled') {
            $(triggerElement).closest('tr').addClass('cancelled');
        } else {
            $(triggerElement).closest('tr').removeClass('cancelled');
        }
        tooltipInstance.hide();
    });

    $(document).on('click', 'button.call', (event) => {
        $.post('/ajax.php', {'action': 'call'});
    });
});