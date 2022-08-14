import { createPopper } from "@popperjs/core";

export default () => {
    // Get all tooltip instances
    const tooltipSubject = document.querySelectorAll('.tooltip-subject');

    //  Loop trough instances
    tooltipSubject.forEach(subject => {
        const tooltip = subject.querySelector('.tooltip');

        const popper = createPopper(subject, tooltip, {
            placement: subject.dataset.popperPlacement,
            modifiers: [
                {
                    name: 'offset',
                    options: {
                        offset: [0, 8],
                    },
                },
            ],
        });

        function show() {
            tooltip.setAttribute('data-show', '');

            // We need to tell Popper to update the tooltip position
            // after we show the tooltip, otherwise it will be incorrect
            popper.update();
        }

        function hide() {
            tooltip.removeAttribute('data-show');
        }

        const showEvents = ['mouseenter', 'focus'];
        const hideEvents = ['mouseleave', 'blur'];

        let timeout = null;

        showEvents.forEach((event) => {
            subject.addEventListener(event, function () {
                // Set timeout to be a timer which will invoke callback after 1s
                timeout = setTimeout(show, 500);
            });
        })

        hideEvents.forEach((event) => {
            subject.addEventListener(event, function () {
                // Set timeout to be a timer which will invoke callback after 1s
                clearTimeout(timeout);
                hide();
            });
        })
    });
}