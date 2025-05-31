# Dyna-K Automotive Stamping Pvt. Ltd Website

A modern, responsive website for Dyna-K Automotive Stamping Pvt. Ltd using Tailwind CSS and DaisyUI.

## Technology Stack

- HTML5
- CSS3 with Tailwind CSS
- JavaScript with jQuery
- DaisyUI component library
- PHP for backend functionality

## Getting Started

### Prerequisites

- Node.js (v14.0.0 or higher)
- npm (v6.0.0 or higher)

### Installation

1. Clone the repository:
```bash
git clone <repository-url>
cd dyna-k-website
```

2. Install dependencies:
```bash
npm install
```

3. Start the development server:
```bash
npm run dev
```

This will start the Tailwind CSS compiler in watch mode, which will automatically rebuild the CSS when you make changes to the HTML files or the input.css file.

## Project Structure

- `/css` - CSS files including Tailwind CSS output
- `/js` - JavaScript files
- `/img` and `/images` - Image assets
- `/src` - Source files for components
- `/slides` - Slider images
- `*.html` - HTML pages
- `*.php` - PHP files for dynamic functionality
- `tailwind.config.js` - Tailwind CSS configuration
- `postcss.config.js` - PostCSS configuration

## Design System

### Colors

The website uses a professional color palette:

- **Primary (Deep Blue)**: `#0F4C81` - Professional and trustworthy
- **Secondary (Vibrant Orange)**: `#FF6B35` - Energetic and dynamic
- **Accent (Light Blue)**: `#39A0ED` - Innovative and tech-focused
- **Neutral (Dark Gray)**: `#2A2B2A` - Solid and reliable
- **Light (Pale Blue-Gray)**: `#F4F7FA` - Clean and modern

### Typography

- **Headings**: Oswald font
- **Body**: Roboto font

### Components

The website uses DaisyUI components along with custom-styled Tailwind components:

- **Buttons**: Multiple styles including primary, secondary, and outline
- **Cards**: For product displays with hover effects
- **Navigation**: Desktop and mobile-responsive
- **Dropdowns**: For nested navigation
- **Stats**: For displaying key metrics
- **Footer**: Comprehensive with multiple sections

## Custom Utilities

Several custom utility classes are available:

- `.section-title`: For main section headings
- `.section-title-bar`: For the colored bar under section titles
- `.section-subtitle`: For section descriptions
- `.card-hover`: For card hover effects
- `.image-hover`: For image hover animations
- `.footer-link`: For consistent footer link styling
- `.social-icon`: For social media icons
- `.input-primary`: For styled form inputs

## Animation Classes

- `.animate-fade-in`: Simple fade-in animation
- `.animate-slide-up`: Slide-up entrance animation
- `.animate-pulse-slow`: Slow pulsing animation

## Maintaining and Extending

### Adding New Pages

1. Copy an existing HTML file as a template
2. Update the content using Tailwind classes
3. Link the page in the navigation menu

### Adding New Components

1. Use DaisyUI components where possible
2. For custom components, add them to the `input.css` file under the `@layer components` section

### Modifying the Color Scheme

1. Update the color definitions in `tailwind.config.js`
2. Both the extended theme colors and the DaisyUI theme should be updated

### Building for Production

Before deploying to production, run:

```bash
npx tailwindcss -i ./css/input.css -o ./css/style.css --minify
```

This will generate a minified CSS file for production use.

## Browser Support

The website is compatible with:

- Chrome (latest)
- Firefox (latest)
- Safari (latest)
- Edge (latest)
- Mobile browsers (iOS and Android) 