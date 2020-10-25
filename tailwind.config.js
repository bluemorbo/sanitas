const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    purge: [
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './app/View/Components/*.php'
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                'coral-red': {
                    50: '#FFF6F6',
                    100: '#FEECEC',
                    200: '#FED0D0',
                    300: '#FDB3B4',
                    400: '#FB7A7C',
                    500: '#F94144',
                    600: '#E03B3D',
                    700: '#952729',
                    800: '#701D1F',
                    900: '#4B1414',
                },
                'crusta': {
                    50: '#FEF8F4',
                    100: '#FEF1EA',
                    200: '#FCDCCA',
                    300: '#FAC7AB',
                    400: '#F79C6B',
                    500: '#F3722C',
                    600: '#DB6728',
                    700: '#92441A',
                    800: '#6D3314',
                    900: '#49220D',
                },
                'tree-poppy': {
                    50: '#FFFAF4',
                    100: '#FEF5E9',
                    200: '#FDE5C7',
                    300: '#FCD5A5',
                    400: '#FAB662',
                    500: '#F8961E',
                    600: '#DF871B',
                    700: '#955A12',
                    800: '#70440E',
                    900: '#4A2D09',
                },
                'golden-tainoi': {
                    50: '#FFFCF6',
                    100: '#FEF9ED',
                    200: '#FEF1D3',
                    300: '#FDE9B9',
                    400: '#FBD884',
                    500: '#F9C74F',
                    600: '#E0B347',
                    700: '#95772F',
                    800: '#705A24',
                    900: '#4B3C18',
                },
                'chelsea-cucumber': {
                    50: '#F9FCF8',
                    100: '#F4F9F0',
                    200: '#E3EFDB',
                    300: '#D3E5C5',
                    400: '#B1D299',
                    500: '#90BE6D',
                    600: '#82AB62',
                    700: '#567241',
                    800: '#415631',
                    900: '#2B3921',
                },
                'jungle-green': {
                    50: '#F6FBF9',
                    100: '#ECF7F3',
                    200: '#D0EAE2',
                    300: '#B4DDD1',
                    400: '#7BC4AE',
                    500: '#43AA8B',
                    600: '#3C997D',
                    700: '#286653',
                    800: '#1E4D3F',
                    900: '#14332A',
                },
                'lynch': {
                    50: '#F7F8F9',
                    100: '#EEF1F4',
                    200: '#D5DDE3',
                    300: '#BCC8D3',
                    400: '#899EB1',
                    500: '#577590',
                    600: '#4E6982',
                    700: '#344656',
                    800: '#273541',
                    900: '#1A232B',
                },
            }
        },
    },

    variants: {
        opacity: ['responsive', 'hover', 'focus', 'disabled'],
    },

    plugins: [require('@tailwindcss/ui')],
};
