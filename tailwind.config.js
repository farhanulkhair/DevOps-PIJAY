/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            backgroundImage: {
                "hero-pattern": "url('/img/hero-pattern.svg')",
                "footer-texture": "url('/img/footer-texture.png')",
            },
            fontFamily: {
                poppin: ["Poppins", "sans-serif"],
                sedan: ["sedan"],
            },
            colors: {
                customBg: "#FFFFFF",
                customNav: "#100E34",
                customCard: "#11212D",
                customStro: "#9BA8AB",
                font: "#CCD0CF",
                Biru: "#0039c8",
                hijau: "#b0fc06",
            },
            boxShadow: {
                custom: "0 0 10px 0 #9ba8ab",
            },
        },
    },
    plugins: [],
};
