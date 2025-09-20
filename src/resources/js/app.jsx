import './bootstrap';
import '../css/app.css';
import { createInertiaApp, router } from '@inertiajs/react';
import { createRoot } from 'react-dom/client';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import NProgress from 'nprogress';
import 'nprogress/nprogress.css';

NProgress.configure({
    showSpinner: false,
    trickleSpeed: 80,
});

let timeout = null;

router.on('start', () => {
    clearTimeout(timeout);
    timeout = setTimeout(() => NProgress.start(), 150);
});

router.on('progress', (event) => {
    if (event.detail.progress?.percentage) {
        NProgress.set(Math.max(0.1, event.detail.progress.percentage / 100));
    }
});

router.on('finish', () => {
    clearTimeout(timeout);
    NProgress.done();
});

router.on('error', () => {
    clearTimeout(timeout);
    NProgress.done();
});

createInertiaApp({
    resolve: (name) =>
        resolvePageComponent(`./Pages/${name}.jsx`, import.meta.glob('./Pages/**/*.jsx')),
    setup({ el, App, props }) {
        createRoot(el).render(<App {...props} />);
    },
});
