module.exports = ({ addComponents, theme, e }) => {
    const colors = theme('colors');
    let badges = [];

    /* Badge base styles */
    badges.push({
        ['.badge']: {
            display: 'inline-flex',
            lineHeight: '1.4',
            alignItems: 'center',
            textAlign: 'center',
            borderRadius: theme('borderRadius.full'),
            fontWeight: '600',
            textDecorationLine: 'none',
            transitionProperty: 'color, background-color',
            transitionTimingFunction: 'cubic-bezier(0.4, 0, 0.2, 1)',
            transitionDuration: '150ms',
            paddingRight: theme('spacing.2'),
            paddingLeft: theme('spacing.2'),
            border: '1px solid transparent',
        }
    })

    /* Badge colors styles */
    badges.push(Object.entries(colors).map(([key, value]) => {
        return {
            [`.${e(`badge-${key}`)}`]: {
                color: value[900],
                backgroundColor: value[300],
            },
            /* Add hover styles when badge is <a> */
            [`a.${e(`badge-${key}`)}`]: {
                '&:hover': {
                    backgroundColor: value[400],
                    borderColor: value[400],
                },
            },
        }
    }))

    /* Badge outline colors styles */
    badges.push(Object.entries(colors).map(([key, value]) => {
        return {
            [`.${e(`badge-outline-${key}`)}`]: {
                color: value[900],
                borderColor: value[300],
            },
            /* Add hover styles when badge is <a> */
            [`a.${e(`badge-outline-${key}`)}`]: {
                '&:hover': {
                    backgroundColor: value[300],
                    borderColor: value[300],
                },
            },
        }
    }))

    addComponents(badges);
};