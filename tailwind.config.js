module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            fontFamily: {
                roboto: ["Roboto", "sans-serif"],
            },
            colors: {
                "gray-dark": "#3D3B3B",
                "blue-dark": "#224957",
            },
        },
    },
    plugins: [],
};
