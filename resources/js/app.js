
import './bootstrap';
import { createApp } from 'vue';
import router from './router/index.js'
import App from '../js/components/App.vue'


const app = createApp(App);

import ExampleComponent from './components/ExampleComponent.vue';
app.component('example-component', ExampleComponent);

app.use(router);
app.mount('#app');
