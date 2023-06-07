import './bootstrap';
import '../css/app.css';

import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/vue3';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import { ZiggyVue } from '../../vendor/tightenco/ziggy/dist/vue.m';
import AddToCartButton from './Components/Extra/AddToCartButton.vue';

const appName = window.document.getElementsByTagName('title')[0]?.innerText || 'SRC Jewels';
//My defined componets
// const app = createApp({});
// app.component("add-to-cart-button", AddToCartButton);
// definedApp.component('add-to-cart-button', AddToCartButton);
// createApp.component('add-to-cart-button', require('./Components/Extra/AddToCartButton.vue').default);
// createApp.component('add-to-cart-button', AddToCartButton);

// const mountedApp = app.mount("#app2");

//End my defined components

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) => resolvePageComponent(`./Pages/${name}.vue`, import.meta.glob('./Pages/**/*.vue')),
    setup({ el, App, props, plugin }) {
        return createApp({ render: () => h(App, props) })
            .use(plugin)
            .use(ZiggyVue, Ziggy)
            .mount(el);
    },
    progress: {
        color: '#4B5563',
    },
});
