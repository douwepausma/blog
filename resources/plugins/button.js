module.exports = ({ addComponents, theme, e }) => {
    const colors = theme('colors');
    let buttons = [];

    /* Button base styles */
    buttons.push({
        ['.btn']: {
            display: 'inline-flex',
            alignItems: 'center',
            textAlign: 'center',
            borderRadius: theme('borderRadius.xl'),
            fontWeight: '600',
            textDecorationLine: 'none',
            transitionProperty: 'color, background-color',
            transitionTimingFunction: 'cubic-bezier(0.4, 0, 0.2, 1)',
            transitionDuration: '150ms',
            lineHeight: '1.5',
            paddingTop: '6px',
            paddingRight: theme('spacing.4'),
            paddingBottom: '6px',
            paddingLeft: theme('spacing.4'),
            border: '1px solid',
            borderColor: 'transparent',
            cursor: 'pointer',
        }
    })

    /* Button colors styles */
    buttons.push(Object.entries(colors).map(([key, value]) => {
        return {
            [`.${e(`btn-${key}`)}`]: {
                color: value[900],
                backgroundColor: value[300],

                '&:hover': {
                    backgroundColor: value[400],
                },
            },
        }
    }))

    /* Button outline styles */
    buttons.push(
        {
            ['.btn-outline']: {
                borderColor: theme('colors.gray.300'),
                color: theme('colors.primary.900'),
                '&:hover': {
                    borderColor: theme('colors.primary.300'),
                    backgroundColor: theme('colors.primary.300'),
                },
                'path': {
                    fill: theme('colors.primary.900'),
                }
            }
        },
        Object.entries(colors).map(([key, value]) => {
        return {
            [`.${e(`btn-outline-${key}`)}`]: {
                backgroundColor: 'transparent',
                borderColor: value[300],
                color: value[900],
                '&:hover': {
                    backgroundColor: value[300],
                },
                'path': {
                    fill: value[900],
                }
            }
        }
    }))

    /* Button icon styles */
    buttons.push({
        ['.btn-icon']: {
            padding: '9px',
        }
    })

    addComponents(buttons);
};