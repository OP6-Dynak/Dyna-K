/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./*.{html,js,php}",
    "./js/**/*.js",
    "./css/**/*.css",
    "./components/**/*.{html,js,php}",
    "./pages/**/*.{html,js,php}",
    "./templates/**/*.{html,js,php}",
  ],
  theme: {
    extend: {
      colors: {
        'dyna-primary': '#0F4C81', // Deep blue - professional and trustworthy
        'dyna-secondary': '#FF6B35', // Vibrant orange - energetic and dynamic
        'dyna-accent': '#39A0ED', // Light blue - innovative and tech
        'dyna-neutral': '#2A2B2A', // Dark gray - solid and reliable
        'dyna-light': '#F4F7FA', // Light gray/blue - clean and modern
      },
      fontFamily: {
        'roboto': ['Roboto', 'sans-serif'],
        'oswald': ['Oswald', 'sans-serif'],
      },
    },
  },
  plugins: [require("daisyui")],
  daisyui: {
    themes: [
      {
        dyna: {
          "primary": "#0F4C81",
          "secondary": "#FF6B35",
          "accent": "#39A0ED",
          "neutral": "#2A2B2A",
          "base-100": "#F4F7FA",
          "base-200": "#E2E8F0",
          "base-300": "#CBD5E1",
          "info": "#3ABFF8",
          "success": "#36D399",
          "warning": "#FBBD23",
          "error": "#F87272",
        },
      },
    ],
  },
} 